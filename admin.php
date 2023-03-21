<?php
session_start();
require_once "class/User.php";

$getPanel = new User();
$panel = $getPanel->getPanel();


// var_dump($_SESSION["userId"]);
var_dump($panel);
if (isset($_POST['adminValidate'])) {

    $selectedRole = $getPanel->updateRole($_POST["selectRole"], $_POST["adminValidate"]);
    echo "OK c Bon";
}
?>

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
    <?php else : ?>
        <p id="panelMsg"></p>
        <table class="tftable" border="2">
            <div class="adminPanelDisplay">
                <thead>
                    <tr>
                        <?php echo "<th> Name</th>"; ?>
                        <?php echo "<th> Id</th>"; ?>
                        <?php echo "<th> Password</th>"; ?>
                        <?php echo "<th> Image</th>"; ?>
                        <?php echo "<th> Role</th>"; ?>
                    </tr>
                </thead>
                <?php for ($i = 0; $i < (count($panel)); $i++) : ?>
                    <tr>
                        <?php echo "<th>" . $panel[$i][1] . "</th>"; ?>
                        <?php echo "<td>" . $panel[$i][0] . "</td>"; ?>
                        <?php echo "<td>" . $panel[$i][2]. "<button id='modifyPassBtn'><img src='./assset/editPass.png'></button>" . "</td>"; ?>
                        <?php echo "<td>" . "<img src='profilImg/{$panel[$i][3]}' style='width: 55px; height: 55px;'><button id='./assset/deleteProfilImg'><img src='./assset/deleteBtn.png'></button>" . "</td>"; ?>

                        <td>
                            <form id="adminForm" method="post">
                                <select name='selectRole' id='selectRole' data-id="<?= $panel[$i][0] ?>">
                                    <option value="<?= $panel[$i][4] ?>"><?= $panel[$i][4] ?></option>
                                    <?php if ($panel[$i][4] == "admin") : ?>

                                    <?php elseif ($panel[$i][4] == "moderateur") : ?>
                                        <option value="admin" id="optionAdmin">Admin</option>
                                        <option value="user" id="optionUser">User</option>
                                    <?php elseif ($panel[$i][4] == "user") : ?>
                                        <option value="admin" id="optionAdmin">Admin</option>
                                        <option value="moderateur" id="optionModerator">Moderateur</option>
                                    <?php endif; ?>
                                </select>
                                <button name="adminValidate" value="<?= $panel[$i][0] ?>">Validate change</button>
                            </form>

                        </td>



                    </tr>
                <?php endfor; ?>

            </div>

        </table>


    <?php endif; ?>


    <script src="./js/admin.js"></script>;
</body>

</html>