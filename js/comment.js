let comment = document.querySelector("#comment");
let commentSection = document.querySelector("#commentSection");

async function displayComment(){
   await fetch ("comment.php")
    .then((response)=> {
        return response.text();
    })
    .then((form)=>{
        commentSection.innerHTML = form;
        let commentBtn = document.querySelector("#commentBtn");
        commentBtn.addEventListener("click", function(ev){
            ev.preventDefault();
            let data = new FormData(commentForm);
            data.append("comment", "ok");
            fetch("artcheck.php", {
                method : "POST",
                body : data,
            })
            .then((response)=>{
                return response.text();
            })
            .then((content)=>{
                commentSection.textContent = content;
            })
        })
    })
}
comment.addEventListener("click" ,displayComment)