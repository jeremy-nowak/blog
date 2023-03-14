let regDisplayBtn = document.querySelector('#regDisplayBtn');
let logDisplayBtn = document.querySelector('#logDisplayBtn');
let formDisplay = document.querySelector('#formDisplay');
let contentDiv = document.querySelector('#contentDiv');


// AJOUT DEBUT
// ------------------------------------------- Creation des fonctions debut----------------------------------------------------------
function displayStyleForm(){
    formDisplay.classList.toggle("formDisplayCss");
}


async function showFetchReg() {

        await fetch('register.php')
        .then((response) =>{
            return response.text();
        })
        .then((form) =>{
            formDisplay.innerHTML = form;
            let regBtn = document.querySelector('#regBtn');
            let regForm = document.querySelector('#regForm');
            regBtn.addEventListener('click', function(ev){
                ev.preventDefault();
                let data = new FormData(regForm);
                data.append('register', 'ok')
                fetch('usercheck.php' , {
                    method : 'POST',
                    body : data
                })
            .then((response) =>{
                return response.text();
            })
            .then((content) =>{
                formDisplay.textContent = content;
    
            })
            })
        })
   }

async function showFetchLog(){
    await fetch('connexion.php')
    .then((response) =>{
        return response.text();
    })
    .then((form) =>{
        formDisplay.innerHTML = form;
        let logBtn = document.querySelector('#logBtn');
        let logForm = document.querySelector('#logForm');
        logBtn.addEventListener('click', function(ev){
            ev.preventDefault();
            let data = new FormData(logForm);
            data.append('login', 'ok')
            fetch('usercheck.php' , {
                method : 'POST',
                body : data
            })
        .then((response) =>{
            return response.text();
        })
        .then((content) =>{
            formDisplay.textContent = content;

        })
        })
    })
}


// ------------------------------------------- Creation des fonctions fin ----------------------------------------------------------


// -------------------------------Apparition et disparition du cadre de formulaire pour le register debut------------------------

regDisplayBtn.addEventListener('click', function(ev){
    ev.preventDefault();

    displayStyleForm();
    

})
// -------------------------------Apparitionn et disprition du cadre de formulaire pour le register fin-----------------------



// -------------------------------Apparition et disparition du cadre de formulaire pour le login debut------------------------


logDisplayBtn.addEventListener('click', function(ev){
    ev.preventDefault();

    displayStyleForm();

})
// --------------------------Apparition et disparition du cadre de formulaire pour le login fin-------------------------------


// AJOUT FIN
regDisplayBtn.addEventListener('click' ,function(ev){
    ev.preventDefault();
    showFetchReg();

})

logDisplayBtn.addEventListener('click' , function(ev){
    ev.preventDefault();
    showFetchLog();
})

    
