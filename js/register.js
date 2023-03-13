let regDisplayBtn = document.querySelector('#regDisplayBtn');
let regMail = document.querySelector('#regMail');
let regPass = document.querySelector('#regPass');
let regConfPass = document.querySelector('#regConfPass');
let regBtn = document.querySelector('#regBtn');
let regForm = document.querySelector('#regForm');
let regMessage = document.querySelector("#regMessage");


regDisplayBtn.addEventListener("click", function (){
    // regFormDisplay.style.display='block';
    // regForm.style.display='block';

    // logFormDisplay.style.display='none';
    regFormDisplayHidden.classList.remove("regFormDisplayHidden");
    content.classList.add("regFormDisplay")

    })
    

regBtn.addEventListener("click", function(ev){
    ev.preventDefault()

    let data = new FormData(regForm);
    data.append("register", "ok");
    fetch("usercheck.php", {
        method:"POST",
        body:data
    })

    .then((response)=>{
        return response.text();
    })
    .then((content)=>{
        regMessage.innerHTML = content;
        console.log(content);
        if(content == "Compte créé !"){
            regForm.style.display='none';
            connectForm.style.display='block';
        }
    })
})


    
