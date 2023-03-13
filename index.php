<?php
session_start();
include 'header.php';
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Berger de la mer.</title>
</head>

<body>
<div class="content">
    <div class="rien">
        
    </div>
    <div class="regFormDisplay" id="regFormDisplay">


        <form id="regForm" name="regForm" method="POST">
            <br><input type="text" id="regLog" name="regLog" placeholder="Login"><br>
            <br><input type="password" id="regPass" name="regPass" placeholder="Password"><br>
            <br><input type="password" id="regConfPass" name="regConfPass" placeholder="Password Confirmation"><br>
            <br><label for="regImg">Avatar</label>
            <br><input type="file" id="regImg" name="regImg"><br>
            <br><button type="submit" id="regBtn" name="regBtn" class="button-6">Register</button><br>
            <br>
            <p id="regMessage"></p>
        </form>
    </div>

    <div class="logFormDisplay" id="logFormDisplay" style="display:none">


        <form id="logForm" name="logForm" method="POST"  class="logForm">
            <br><input type="text" id="logLog" name="logLog" placeholder="Login"><br>
            <br><input type="password" id="logPass" name="logPass" placeholder="Password"><br>
            <br> <button id="logBtn" name="logBtn" class="button-6">Login</button><br>
            <p id="connectMessage"></p>
        </form>
    </div>
</div>

    <script src="./js/connexion.js"></script>
    <script src="./js/register.js"></script>
</body>

</html>