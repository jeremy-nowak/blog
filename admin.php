<?php
session_start();
require_once "class/User.php";

$getPanel = new User();
$panel = $getPanel->getPanel();
var_dump($panel);
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
    <?php include "header.php"; ?>
    <?php if ($_SESSION['role'] !== "admin") : ?>
        <div class="getOut">
            <img src="https://media.giphy.com/media/ac7MA7r5IMYda/giphy.gif" alt="">
        </div>
    <?php endif ?>
    <table class="tftable" border="2">
        <div class="adminPanelDisplay">
            <thead>


                <tr>
                    <?php for ($i = 0; $i < (count($panel)); $i++) : ?>

                        <?php echo "<th>" . $panel[$i][1] . "</th>"; ?>

                    <?php endfor; ?>
                </tr>
                <tr>
                    <?php for ($i = 0; $i < (count($panel)); $i++) : ?>

                        <?php echo "<td>" . $panel[$i][0] . "</td>"; ?>
                    <?php endfor; ?>
                </tr>
                <tr>
                    <?php for ($i = 0; $i < (count($panel)); $i++) : ?>
                        <?php echo "<td>" . $panel[$i][2] . "</td>"; ?>
                    <?php endfor; ?>

                </tr>
                <tr>
                    <?php for ($i = 0; $i < (count($panel)); $i++) : ?>
                        <?php echo "<td>" . $panel[$i][3] . "</td>"; ?>
                    <?php endfor; ?>

                </tr>
                <tr>
                    <?php for ($i = 0; $i < (count($panel)); $i++) : ?>
                        <?php echo "<td>" . $panel[$i][4    ] . "</td>"; ?>
                    <?php endfor; ?>

                </tr>

    </table>
    </thead>

    </div>
</body>

</html>