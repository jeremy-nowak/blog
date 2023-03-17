let regDisplayBtn = document.querySelector("#regDisplayBtn");
let logDisplayBtn = document.querySelector("#logDisplayBtn");
let formDisplay = document.querySelector("#formDisplay");
let contentDiv = document.querySelector("#contentDiv");

// ------------------------------------------- Creation des fonctions debut----------------------------------------------------------
function displayStyleForm() {
  formDisplay.classList.toggle("formDisplayCss");
}
function hideFetch() {
  if (formDisplay.hasChildNodes()) {
    formDisplay.removeChild(formDisplay.firstChild);
  }
}

async function showFetchReg() {
  await fetch("register.php")
    .then((response) => {
      return response.text();
    })
    .then((form) => {
      formDisplay.innerHTML = form;
      let regBtn = document.querySelector("#regBtn");
      let regForm = document.querySelector("#regForm");
      regBtn.addEventListener("click", function (ev) {
        ev.preventDefault();
        let data = new FormData(regForm);
        data.append("register", "ok");
        fetch("usercheck.php", {
          method: "POST",
          body: data,
        })
          .then((response) => {
            return response.text();
          })
          .then((content) => {
            formDisplay.textContent = content;
          });
      });
    });
}

async function showFetchLog() {
  await fetch("connexion.php")
    .then((response) => {
      return response.text();
    })
    .then((form) => {
      formDisplay.innerHTML = form;
      let logBtn = document.querySelector("#logBtn");
      let logForm = document.querySelector("#logForm");
      logBtn.addEventListener("click", function (ev) {
        ev.preventDefault();
        let data = new FormData(logForm);
        data.append("login", "ok");
        fetch("usercheck.php", {
          method: "POST",
          body: data,
        })
          .then((response) => {
            return response.text();
          })
          .then((content) => {
            formDisplay.textContent = content;
          });
      });
    });
}

// ----------------------------------------------- Creation des fonctions fin --------------------------------------------------

// -----------------------------------------------Debut des addEventListener ---------------------------------------------------
logDisplayBtn.addEventListener("click", function (ev) {
    ev.preventDefault();
  
    let logForm = document.querySelector("#logForm");
  
    console.log(logForm);
  
    if (logForm !== null) {
      hideFetch();
      displayStyleForm();
    } else {
      showFetchLog();
      displayStyleForm();
    }
  });

regDisplayBtn.addEventListener("click", function (ev) {
  ev.preventDefault();

  let regForm = document.querySelector("#regForm");

  console.log(regForm);

  if (regForm !== null) {
    hideFetch();
    displayStyleForm();
  } else {
    showFetchReg();
    displayStyleForm();
  }
});



// ---------------------------------------------Fin des addEventListener ---------------------------------------------------
