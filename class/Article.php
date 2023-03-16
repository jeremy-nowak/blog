<?php
class Article{
    private $pdo;
    public $artImg;
    public $artTitle;
    public $artText;
    private $id;

    public function __construct()
    {
        $this->pdo = new pdo("mysql:host=localhost;dbname=blog", "root", "root");

    }

    public function addArticle()
    {
        $artImg = $_FILES["artImg"]["name"];
        $artTitle = $_POST["artTitle"];
        $artText = $_POST["artText"];
        $id = $_SESSION["userId"];



        $register = "INSERT INTO articles (titre, article, image, id_utilisateur, date) VALUE( ?, ?, ?, ?, NOW())";
        $prepare = $this->pdo ->prepare($register);

      $prepare->execute([$artTitle, $artText, $artImg, $id]);

       
      }
        
      public function getArticle(){

       
        $select = $this->pdo->prepare("SELECT articles.id, articles.titre, articles.article, articles.image, articles.id_utilisateur, articles.date, utilisateurs.id as id_utilisateur, utilisateurs.login, utilisateurs.profilimg FROM articles INNER JOIN utilisateurs ON articles.id_utilisateur = utilisateurs.id ORDER BY date DESC");
        $select -> execute();
        $result = $select->fetchAll(PDO::FETCH_ASSOC);
        return $result;
      }

      public function getOneArt($id)
      {
        $select = $this->pdo->prepare("SELECT articles.id, articles.titre, articles.article, articles.image, articles.id_utilisateur, articles.date, utilisateurs.id as id_utilisateur, utilisateurs.login, utilisateurs.profilimg FROM articles INNER JOIN utilisateurs ON articles.id_utilisateur = utilisateurs.id where articles.id=$id");
        $select -> execute();
        $result = $select->fetchAll(PDO::FETCH_ASSOC);
        
        return $result;
      }
    }

  
?>