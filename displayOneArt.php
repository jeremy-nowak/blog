<?php
require_once "./class/Article.php";


if (isset($_GET["article"])) {
    $artId = $_GET["article"];
    $getOne = new Article();
    $oneArt = $getOne->getOneArt($artId);
    var_dump($oneArt);
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
    <main class="DisplayOneArt">

        <div class="imgSection">
            <img src="./artImg/<?= $oneArt[0]["image"] ?>">
        </div>
        <div class="titleSection">
            <h1><?= $oneArt[0]["titre"] ?></h1>
        </div>
        <div class="auteurSection">
            <img src="./profilImg/<?= $oneArt[0]["profilimg"] ?>">
            <p><?= $oneArt[0]["login"] ?></p>
        </div>
        <div class="textSection">
             <p><?= $oneArt[0]["date"] ?></p>
            <p><?= $oneArt[0]["article"] ?></p>

        </div>
      
        
    </main>
</body>

</html>