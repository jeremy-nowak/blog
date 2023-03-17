<?php
require_once("class/User.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header</title>
</head>

<body>
    <header>

        <div class="cadre">
            <div class="sommaire">

                <ul>
                    <?php if (!isset($_SESSION["userLogin"])) : ?>
                        <li><a href="index.php">
                                <h3>Home</h3>
                            </a></li>
                        <li><button id="regDisplayBtn" class="button-6">Inscription</button></li>
                        <li><button id="logDisplayBtn" class="button-6">Connexion</button></li>
                    <?php else : ?>
                        <H1>Bonjour <?= $_SESSION['userLogin'] ?></H1>

                        <li><a href="index.php">
                                <h3>Home</h3>
                            </a></li>
                        <li><a href="profil.php">
                                <h3>Profil</h3>
                            </a></li>

                        <?php if ($_SESSION['role'] == "moderateur" || $_SESSION['role'] == "admin") : ?>
                            <li><a href="postArt.php">
                                    <h3>Ecrire votre articles</h3>
                                </a></li>;

                        <?php endif; ?>
                        <?php if ($_SESSION['role'] == "moderateur" || $_SESSION['role'] == "admin") : ?>
                            <li><a href="admin.php">
                                    <h3>Panel admin</h3>
                                </a></li>;
                        <?php endif; ?>
                        <li><a href="deconnexion.php">
                                <h3>Deconnexion</h3>
                            </a></li>

                    <?php endif; ?>
                </ul>
            </div>
            <div class="banniere">

                <img src="" alt="">
            </div>

        </div>

    </header>

</body>

</html>