<?php
session_start();
include 'header.php';
require_once("class/User.php");
$user = new User;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Profil</title>
</head>

<body>


        <div class="divForm">
        <h1>Update info page:</h1>
        <h3>Login info modification:</h3>
        <form method="POST" id="updLoginForm">
            <input type="text" id="loginInput" name="loginInput" placeholder="Old Login" required>
            <input type="file" id="imgInput" name="imgInput">
            <input type="text" id="passwordVerif" placeholder="Password to validate changement">
            <br><input type="submit" id="submitUpdLog" value="Validate"><br>
        </form>

        <h3>Password modification:</h3>
        <form  method="post" id="updPassword">
            <input type="text" id="passOld" placeholder="Old password">
            <input type="text" id="passNew" placeholder="New password">
            <input type="text" id="passNewConf" placeholder="Password confirmation">
            <br><input type="submit" id="submitUpdPass" value="Validate">

        </form>
        
        </div>


    <footer>


    </footer>
<script src="js/profil.js" defer></script>
</body>

</html>