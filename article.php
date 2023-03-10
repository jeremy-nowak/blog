<?php
session_start();
require_once("class/User.php");
$user = new User;



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Articles</title>
</head>
<body>
    <header>
        <H1>Bonjour <?= $user->getLogin()?></H1>
    </header>
<form  method="post" id="artForm">
    <input type="file" name="artImg" id="artImg" placeholder="Image article" >
    <input type="text" name="artTitle" id="artTitle" placeholder="Title article" >
    <textarea type="text" name="artText"  id="artText" placeholder="Text article"></textarea>
    <button id="artBtn">Validate</button>
    <p id="artMsg"></p>
</form>

<script src="./js/article.js"></script>
</body>
</html>