<?php
session_start();
require_once "./class/User.php";
$user = new User();
$target_dir = "profilImg/";
// $target_file = $target_dir . basename($_FILES["regImg"]["name"]);
$uploadOk = 1;
// $imgFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    
if(isset ($_POST["register"])){
    $target_file = $target_dir . basename($_FILES["regImg"]["name"]);
    $imgFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));


    if($user->userCheck($_POST["regLog"], $_POST["regPass"], $_POST["regConfPass"])){

        $check = getimagesize($_FILES["regImg"]["tmp_name"]);

        if($check !== false){
            $uploadOk=1;
        }
        else{
            echo "is not an image";
            $uploadOk = 0;
        }
    }

    
    
    if($_FILES["regImg"]["size"] > 500000000){
        
        echo "Image too big";
        $uploadOk = 0;
    }
    if($imgFileType !== "jpg" && $imgFileType !== "png" && $imgFileType !== "jpeg" && $imgFileType !== "gif"){
        
        echo "Sorry only jpg, png, jpeg, and gif are allowed";
        $uploadOk = 0;
    }
    if($uploadOk == 0){
        
        echo "Sorry upload failed";
    }
    else{
        if(move_uploaded_file($_FILES["regImg"]['tmp_name'], $target_file)){
            echo "The file" . htmlspecialchars(basename($_FILES["regImg"]["name"])) . "has been uploaded";
            $user->register();
        }else{
            echo "Sorry there was an error";
        }
        
    }
}


if(isset($_POST["login"])){
    
    if (empty($_POST["logLog"]) ){
        echo "Loggin empty";
    }
    elseif (empty($_POST["logPass"])){
        echo "Password empty";
        
    }
    else{
        $user->login($_POST["logLog"], $_POST["logPass"]);
    }
}

if(isset($_GET['displayForm'])){
    echo $user->getLogin();
}

?>