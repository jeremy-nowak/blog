<?php
session_start();
require_once("class/Article.php");
$art = new Article();
$articles = $art->getArticle();
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
<?php include "header.php"?>
    <div class="banniere">
        <img src="https://preview.colorlib.com/theme/bona/images/slider-1.jpg.webp">
    </div>
    <p id="likeMsg"></p>

<div class="container">
    <?php for ($i=0; $i < 6; $i++) { ?>
        <?php $displayLike = $art->displayLike($articles[$i]["id"]); 
        ?>
        <div class="grid" >
            <div class="gridImg">
                 <img src="./artImg/<?=$articles[$i]['image']?>">
            </div>
            <div class="gridProfilImg">
                <img src="./profilImg/<?=$articles[$i]['profilimg']?>">
            </div>
            <div class="gridTxt">
            <h2><?= $articles[$i]['titre'] ?></h2>
            <p ><?=$articles[$i]['article']?></p>
            <p><a href="displayOneArt.php?article=<?=$articles[$i]["id"]?>">Read more</a></p>
            </div>
         
            <span><?= $articles[$i]['date']?></span>
            <div class="bandeau">
                <form method="post">
                <div class="bandeauCase1"><img src="./assset/likeCase.png"><button name="addLike" class="addLike" value=<?=$articles[$i]["id"]?>>                <?php if(!$displayLike[0]["nb_like"]){
    echo "0";
    }
    else{
        echo $displayLike[0]["nb_like"];
    }
    ?> 
     </button></div>
                <div class="bandeauCase2"><img src="./assset/chatCase.png" alt=""></div>
                </form>

            </div>
        </div>
    <?php } ?>
</div>

    
    <script src="./js/like.js"></script>
</body>

</html>
