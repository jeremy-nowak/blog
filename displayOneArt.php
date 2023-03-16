<?php
require_once "./class/Article.php";


if(isset($_GET["article"])){
    $artId = $_GET["article"];
    $getOne = new Article();
    $getOne -> getOneArt($artId);
    var_dump($getOne);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>