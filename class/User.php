<?php
class User{
    private $pdo;
    private $id;
    private $login;
    private $pass;
    private $usercheck;

    

    public function __construct()
    {
        $this->pdo = new pdo("mysql:host=localhost;dbname=blog", "root", "root");
        if(isset($_SESSION["userId"]))
        {
            $this->id = $_SESSION["userId"];
            $this->login = $_SESSION["userLogin"];
        }
    }

    public function getLogin()
    {
        return $this->login;
    }

    public function register()

    {
        $regImg = $_FILES["regImg"]["name"];
        $login = $_POST["regLog"];
        $pass = $_POST["regPass"];

        $register = "INSERT INTO utilisateurs (login, password, profilimg) VALUE( ?, ?, ?)";
        $prepare = $this->pdo ->prepare($register);
        $prepare->execute(array($login, $pass, $regImg));
        
        echo "Congrats! Acccount created";
    }
 

    public function login($login, $pass)
    {

        $select = $this->pdo->prepare("SELECT * FROM utilisateurs WHERE login=? limit 1");
        $select->execute([$login]);
        $result = $select->fetch(PDO::FETCH_ASSOC);
        if (count($result) == 0) {
            echo "login inexistant";
        } elseif ($result["password"] != $pass) {
            echo "mot de pass invalid";
        } elseif ($result["password"] = $pass) {
            $_SESSION["userId"] = $result["id"];
            $_SESSION["userLogin"] = $result["login"];
            $_SESSION["role"] = $result["role"];

                      echo "Connexion réussie";

        }
    }

    

    public function getPanel()
    {
        $select = $this->pdo->prepare("SELECT * FROM utilisateurs");
        $select->execute();
        $result = $select->fetchAll();
        return $result;

    }

    public function userCheck($login, $pass, $passConf){
        
        $select = $this->pdo->prepare("SELECT login FROM utilisateurs WHERE login=? limit 1");
        $select->execute([$login]);
        $table = $select->fetchAll();

        if (count($table) > 0) {
            return FALSE;
            echo "Login existe déjà!";
        } 
        elseif (empty($login) ){
            return FALSE;
            echo "Loggin empty";
        }
        elseif (empty($pass)){
            return FALSE;
            echo "Password empty";
        }
        elseif($pass !== $passConf){
            return FALSE;
            echo "Password different";
        }else {
            return TRUE;
        }

        
    }

  

   
    public function updateRole($role, $id)
    {
        $update = "UPDATE utilisateurs SET `role`='$role' WHERE id = $id";
        $prepare = $this->pdo->prepare($update);
        if ($prepare->execute()) {
            echo "ok";
        }else{
            echo "nop";
        }

    }
}
