let logDisplayBtn = document.querySelector('#logDisplayBtn');
let logLog = document.querySelector('#logLog');
let logPass = document.querySelector('#logPass');
let logBtn = document.querySelector('#logBtn');
let logForm = document.querySelector('#logForm');
let connectMessage = document.querySelector('#connectMessage');

logDisplayBtn.addEventListener("click", function (){
    // regFormDisplay.style.display="none";
    // logFormDisplay.style.display="block";
    // logForm.style.display='block';

    })

//     logBtn.addEventListener("submit", function(ev){
//         ev.preventDefault()
        
//         let data = new FormData(logForm);
//         data.append("login", "ok");
//         fetch("usercheck.php", {
//             method:"POST",
//             body:data
//         })

//         .then((response)=>{
//             return response.text();
//         })
//         .then((content)=>{
//             connectMessage.innerHTML = content;
//             console.log(content);
//         })
        

    
    
//  })    

logForm.addEventListener("submit", function(ev){
    ev.preventDefault()

    let login = document.getElementById("logLog").value;
    let password = document.getElementById("logPass").value;
    console.log(login, password);

    let data = new FormData(logForm);
    data.append("login", "ok");
    console.log(data);
    fetch("usercheck.php", {
        method:"POST",
        body:data
    })
    .then((response)=>{
        return response.text();
    })
    .then((content)=>{
        console.log(content);
        connectMessage.innerHTML = content;
        if(content === "Connexion réussie"){
            window.location.href="profil.php";
        }
    
    });
});

