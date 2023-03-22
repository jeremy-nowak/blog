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

       
        $select = $this->pdo->prepare(
          "SELECT articles.id, articles.titre, articles.article, articles.image, articles.id_utilisateur, articles.date, utilisateurs.id as id_utilisateur, utilisateurs.login, utilisateurs.profilimg, amour.nb_like, amour.id_article
          FROM articles 
          INNER JOIN utilisateurs ON articles.id_utilisateur = utilisateurs.id 
          LEFT JOIN amour ON articles.id = amour.id_article
          ORDER BY date DESC");

        $select -> execute();
        $result = $select->fetchAll(PDO::FETCH_ASSOC);
        return $result;
      }

      public function getOneArt($id)
      {
        $select = $this->pdo->prepare
        (
          "SELECT articles.id, articles.titre, articles.article, articles.image, articles.id_utilisateur, amour.nb_like,
          DATE_FORMAT(articles.date, '%d/%m/%Y') as date, 
          DATE_FORMAT(articles.date, '%Hh%i') as time, utilisateurs.id as id_utilisateur, utilisateurs.login, utilisateurs.profilimg FROM articles 
          INNER JOIN utilisateurs ON articles.id_utilisateur = utilisateurs.id
          LEFT JOIN amour ON articles.id = amour.id_article
          WHERE articles.id=$id");
        $select -> execute();
        $result = $select->fetchAll(PDO::FETCH_ASSOC);
        
        return $result;
      }

      public function addLike($artId, $userId){
        
        $select = $this->pdo->prepare("SELECT * FROM amour WHERE id_utilisateur =? AND id_article =?");
        $select->execute([$userId, $artId]);
        $result = $select->fetchAll();

        if ($result){
          $delete = $this->pdo->prepare("DELETE FROM amour WHERE id_utilisateur=:userId AND id_article=:artId ");
          $delete->execute([
            "userId" => $userId,
            "artId" => $artId,
          ]);
          
        }else{

          $val = 1;
          $register = "INSERT INTO amour (id_article, id_utilisateur, nb_like) VALUE( ?, ?, ?)";
          $prepare = $this->pdo ->prepare($register);
  
          $prepare->execute([$artId, $userId, $val]);
        }
        
      //   else{
      //     $update = "UPDATE `like` SET `like`='$nb_like' WHERE id = $artId";
      //     $prepare = $this->pdo->prepare($update);
      //     $prepare->execute();
      //   }
      // }
    }
    

   }
?>