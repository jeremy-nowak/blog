<?php
session_start();
require_once("class/Article.php");
include "header.php";
$art = new Article();




    $articles = $art->getArticle();
    // var_dump($articles);



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
    <div class="container">
            <?php foreach($articles as $article) : ?>
                <div class="grid" >
                    <div class="displayGridImg">
                         <img src="./artImg/<?=$article['image']?>">
                    </div>
                    
                    <h2><?= $article['titre'] ?></h2>
                    <p><?=$article['article']?></p>
                    <span><?= $article['date']?></span>
                </div>

            <?php endforeach; ?>
            <div id="imgContainer">
                
            <p id="artMsg"></p>
    </div>
    <script src="./js/article.js"></script>
</body>

</html>
