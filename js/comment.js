let comment = document.querySelector("#comment");
let commentSection = document.querySelector("#commentSection");
const queryString = window.location.search;
const urlParams = new URLSearchParams(queryString);
const idPost = urlParams.get('article');

function displayComment(){
    fetch(`artcheck.php?displayComment=${idPost}`)
    
    .then ((response)=>{
        return response.json();
    })
    .then ((content)=>{

        for(let i = 0 ; i < content.length ; i ++){
            console.log(content);
            let commentDiv = document.createElement("div");
            let commentLogin = document.createElement("p");
            let commentDate = document.createElement("p");
            let commentTexte = document.createElement("p");

            commentDiv.classList.add("commentDiv");

            commentTexte.appendChild(document.createTextNode(content[i].commentaire));
            commentDate.appendChild(document.createTextNode(content[i].date));
            commentLogin.appendChild(document.createTextNode(content[i].login));

            commentDiv.appendChild(commentTexte);
            commentDiv.appendChild(commentDate);
            commentDiv.appendChild(commentLogin);

            commentSection.appendChild(commentDiv);
        }
    })
}

function showComment() {
    fetch("comment.php")
        .then((response) => {
            return response.text();
        })
        .then((form) => {
            commentSection.innerHTML = form;
            let commentBtn = document.querySelector("#addComment");
            
            console.log(commentBtn)
            commentBtn.addEventListener("click", function (ev) {
                ev.preventDefault();
                let data = new FormData(commentForm);
                data.append("idPost", idPost);
                data.append("comment", "ok");
                fetch("artcheck.php", {
                    method: "POST",
                    body: data,
                })
                    .then((response) => {
                        return response.text();
                    })
                    .then((content) => {
                        commentSection.textContent = content;
                    })
            })
        })
}

comment.addEventListener("click", showComment)
document.addEventListener("DOMContentLoaded", displayComment())
