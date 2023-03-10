<?php
session_start();

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

<div class="divForm">
    <div class="btn_container">
    <br><button id="regFormeDisplay">Inscription</button>
        <button id="logDisplaybtn">Connexion</button>
    </div>
 
    <form id="regForm" name="regForm" method="POST" style="display:none">
    <br><input type="text" id="regLog" name="regLog" placeholder="Login"><br>
    <br><input type="password" id="regPass" name="regPass" placeholder="Password"><br>
    <br><input type="password" id="regConfPass" name="regConfPass" placeholder="Password Confirmation"><br>
    <br><label for="regImg">Avatar</label>
    <br><input type="file" id="regImg" name="regImg"><br>
    <br><button type="submit" id="regBtn" name="regBtn">Register</button><br>
    <br><p id="regMessage"></p>
    </form>

    <form id="logForm" name="logForm" method="POST" style="display:none">
    <br><input type="text" id="logLog" name="logLog" placeholder="Login"><br>
    <br><input type="password" id="logPass" name="logPass" placeholder="Password"><br>
    <br> <button id="logBtn" name="logBtn">Login in</button><br>
        <p id="connectMessage"></p>


    </form>
    </div>
    <script src="./js/connexion.js"></script>
    <script src="./js/register.js"></script>
</body>

</html>