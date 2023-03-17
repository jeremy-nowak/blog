let loginInput = document.querySelector('#loginInput');
let updLoginForm = document.querySelector('#updLoginForm');
let imgInput = document.querySelector('#imgInput');
let pawwordVerif = document.querySelector('#pawwordVerif');
let submitUpdLog = document.querySelector('#submitUpdLog');

function verifloginInput(){

}

function infoDisplay(){
    fetch("usercheck.php?displayForm", {
        method : 'GET'
    })
    .then((response) => response.text())
    .then((data) => {
        console.log(data)
        loginInput.setAttribute("value", data)
    })

    

}


// /////////////////////////////////:
infoDisplay();

loginInput.addEventListener("blur", function(ev){
    ev.preventDefault();
    verifloginInput()
})