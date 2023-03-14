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

    <div class="contentDiv">

            <div class="formDisplay1" id="formDisplay">

            </div>

    </div>

    <script src="./js/auth.js"></script>
</body>

</html>


<!-- VOIR POUR FAIRE UNE FUNCTION INNERHTML POUR SUPPRIMER LE CONTENU DE formDisplay DE CE TYPE DANS AUTH.JS
function myFunction() {
  var x = document.getElementById("myDIV");
  if (x.innerHTML === "Hello") {
    x.innerHTML = "Swapped text!";
  } else {
    x.innerHTML = "Hello";
  }
} -->