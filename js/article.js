let artBtn = document.querySelector("#artBtn");
let artForm = document.querySelector("#artForm");
let artMsg = document.querySelector('#artMsg');

artBtn.addEventListener("click", submitArt)
function submitArt(ev){
    ev.preventDefault()
    let data = new FormData(artForm)
    data.append("submitArt", "ok")
    fetch("artcheck.php", {
        method : "POST",
        body : data
    })
    .then((response)=>{
        return response.text()
    })
    .then((content)=>{
        artMsg.innerHTML = content;
    })
}