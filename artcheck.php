<?php
session_start();
require_once "./class/Article.php";

$article = new article();

$target_dir = "artImg/";
$target_file = $target_dir . basename($_FILES["artImg"]["name"]);
$uploadOk = 1;
$imgFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

var_dump($_FILES['artImg']);

if(isset($_POST['submitArt'])){

    $check = getimagesize($_FILES["artImg"]["tmp_name"]);

    if($check !== false){
        $uploadOk=1;
    }
    else{
        echo "is not an image";
        $uploadOk = 0;
    }
}
// if(file_exists($target_file)){
//     echo "image already exists";
//     $uploadOk = 0;
// }
if($_FILES["artImg"]["size"] > 50000){

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
    if(move_uploaded_file($_FILES["artImg"]['tmp_name'], $target_file)){
        echo "The file" . htmlspecialchars(basename($_FILES["artImg"]["name"])) . "has been uploaded";
        $article->addArticle();
    }else{
        echo "Sorry there was an error";
    }

    
}
?>
