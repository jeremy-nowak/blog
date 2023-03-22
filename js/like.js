let addLikeBtn = document.querySelectorAll('.addLike');
let bandeau = document.querySelector('.bandeau')
let likeMsg = document.querySelector("#likeMsg");
let spanNbLike = document.querySelectorAll("#spanNbLike");


function addLike(idPost){
    let data = new FormData()
    data.append("like", "ok")
    data.append("idPost", idPost)
    fetch("artcheck.php",{
        method : "POST",
        body : data
    })
    .then((response)=>{
        return response.json()

    })
    .then((content) =>{
        console.log(content)
        
       for(let i = 0; i < content.length; i++){
        
        for(let span of addLikeBtn){
        
            span.textContent = content[i]["nb_like"]
            spanNbLike.textContent = span
       
        }
       }
    })
}
console.log(addLikeBtn);
for (const btn of addLikeBtn) {
    console.log(btn);
    btn.addEventListener("click", function(ev){
        console.table(ev.target, ev.type);
        ev.preventDefault()
        if (ev.target.classList.contains('addLike')){
            const idPost=ev.target.value;
            addLike(idPost);
            
        }
    })
}
