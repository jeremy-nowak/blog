<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Berger de la mer.</title>
</head>

<body>

<div class="btn_container">
<button id="regFormeDisplay">Inscription</button>
<button id="logDisplaybtn">Connexion</button>
</div>

    <form id="regForm" name="regForm" method="POST" style="display:none">
    
        <input type="text" id="regLog" name="regLog" placeholder="Login">
        <input type="password" id="regPass" name="regPass" placeholder="Password">
        <input type="password" id="regConfPass" name="regConfPass" placeholder="Password Confirmation">
        <label for = "regImg">Avatar</label>
        <input type="file" id="regImg" name="regImg">
        <button  type="submit" id="regBtn" name="regBtn">Register</button>
        <p id="regMessage"></p>
    </form>

    <form id="logForm" name="logForm" method="POST"style="display:none">
        <input type="text" id="logLog" name="logLog" placeholder="Login">
        <input type="password" id="logPass" name="logPass" placeholder="Password">
        <button id="logBtn" name="logBtn">Login in</button>
        <p id="connectMessage"></p>


    </form>
    <script src="./js/connexion.js"></script>
    <script src="./js/register.js"></script>
</body>

</html>