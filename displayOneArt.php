<?php
require_once "./class/Article.php";
session_start();

if (isset($_GET["article"])) {
    $artId = $_GET["article"];
    $getOne = new Article();
    $oneArt = $getOne->getOneArt($artId);
    var_dump($oneArt);
}
if(isset($_POST["addLike"])){
    $art = new Article();
    $addLike = $art->addLike($artId, $_SESSION["userId"]);
   
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
    <?php include "header.php" ?>
    <main class="DisplayOneArt">


        <div class="imgSection">
            <img src="./artImg/<?= $oneArt[0]["image"] ?>">
        </div>
        <div class="artBlock">

            <div class="artSection">
                <div class="titleSection">
                    <h1><?= $oneArt[0]["titre"] ?></h1>
                </div>

                <div class="textSection">
                    <p><?= $oneArt[0]["article"] ?></p>

                </div>

                <div class="auteurSection">
                    <img src="./profilImg/<?= $oneArt[0]["profilimg"] ?>">
                    
                        <p class="artLog">par <?= $oneArt[0]["login"] ?></p>
                        <p class="artTime">le <?= $oneArt[0]["date"] ?> à <?= $oneArt[0]["time"] ?></p>
                    <form method="post">
                <button name="addLike" id="addLike">Like</button>
            </form>
            <button id ="comment">Commenter</button>
                 <p><?= $oneArt[0]["nb_like"]?></p>
                </div>
            </div>
            <div class="putACommentSection" id="commentSection">

            </div>
        </div>

    </main>
    <script src="./js/comment.js"></script>
    <script src="./js/like.js"></script>
</body>

</html>