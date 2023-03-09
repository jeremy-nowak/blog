<?php
class Article{
    private $pdo;
    public $artImg;
    public $artTitle;
    public $artText;
    private $id;

    public function __construct()
    {
        $this->pdo = new pdo("mysql:host=localhost;dbname=blog", "root", "");

    }

    public function addArticle()
    {
        $artImg = $_FILES["artImg"]["name"];
        $artTitle = $_POST["artTitle"];
        $artText = $_POST["artText"];
        $id = $_SESSION["userId"];



        $register = "INSERT INTO articles (titre, article, image, id_utilisateur, date) VALUE( ?, ?, ?, ?,NOW())";
        $prepare = $this->pdo ->prepare($register);

      $prepare->execute([$artTitle, $artText, $artImg, $id]);

       
      }
        
    }
?>