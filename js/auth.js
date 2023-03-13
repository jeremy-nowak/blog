let regDisplayBtn = document.querySelector('#regDisplayBtn');
let logDisplayBtn = document.querySelector('#logDisplayBtn');
let formDisplay = document.querySelector('#formDisplay');

regDisplayBtn.addEventListener('click' , async() =>{
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
})

logDisplayBtn.addEventListener('click' , async() =>{
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
})

    
