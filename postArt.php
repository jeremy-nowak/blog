<?php
session_start();
require_once("class/Article.php");
include "header.php";
$art = new Article();

var_dump($_SESSION['role']);

 if($_SESSION['role'] != 'moderateur' && $_SESSION['role'] != 'admin'){
     header("location: index.php");
 }
// foreach ($result as $key =>$value ){
    // var_dump($result);

// }
// if (isset($_POST["Btn"])){
//     $art -> getArticle();
//     foreach($result as $key => $value){
//         echo "{$key} => {$value}";
//         print_r($result);
//     }
// }

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Articles</title>
</head>

<body>
    <div class="artDiv">
        <form method="post" id="artForm">
            <input type="file" name="artImg" id="artImg" placeholder="Image article">
            <input type="text" name="artTitle" id="artTitle" placeholder="Title article">
            <textarea type="text" name="artText" id="artText" placeholder="Text article"></textarea>
            <button id="artBtn">Validate</button>
            <p id="artMsg"></p>
            <button name="Btn">Go</button>
        </form>
    </div>
    <script src="./js/article.js"></script>
</body>

</html>