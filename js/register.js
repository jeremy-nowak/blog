let regFormeDisplay = document.querySelector('#regFormeDisplay');
let regMail = document.querySelector('#regMail');
let regPass = document.querySelector('#regPass');
let regConfPass = document.querySelector('#regConfPass');
let regBtn = document.querySelector('#regBtn');
let regForm = document.querySelector('#regForm');
let regMessage = document.querySelector("#regMessage");

regFormeDisplay.addEventListener("click", function (){
    regForm.style.display='block';
    logForm.style.display='none';
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


    
