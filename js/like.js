let addLikeBtn = document.querySelector('.addLike');
let container = document.querySelector('.container')
let likeMsg = document.querySelector("#likeMsg");



function addLike(idPost){
    let data = new FormData()
    data.append("like", "ok")
    data.append("idPost", idPost)
    fetch("artcheck.php",{
        method : "POST",
        body : data
    })
    .then((response)=>{
        return response.text()

    })
    .then((content) =>{
        likeMsg.innerHTML = content;
        console.log(content);
    })
}

container.addEventListener("click", function(ev){
    ev.preventDefault()
    if (ev.target.classList.contains('addLike')){
        const idPost=ev.target.value;
        addLike(idPost);
    }
})