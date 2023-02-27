<?php 
namespace App\models;
use App\models\DB;
use \PDOException;

require_once("../autoloader.php");

class Advisor{
    private $lastname;
    private $firstname;
    private $login;
    private $password;
    private $post_phone;
    private $mail;
    private $area;
    private $role;
    

    function __construct($lastname, $firstname, $login, $password, $post_phone, $mail, $area, $role)
    {
        $this->lastname = $lastname;
        $this->firstname = $firstname;
        $this->login = $login;
        $this->password = password_hash($_POST["password"], PASSWORD_ARGON2ID);
        $this->post_phone = $post_phone;
        $this->mail = $mail;
        $this->area = $area;
        $this->role = "Conseillere";
       
    }

    public function setlastname($lastname){
        $this->lastname = $lastname;
    }
    public function getlastname(){
        return $this->lastname;
    }

    public function setfirstname($firstname){
        $this->firstname = $firstname;
    }
    public function getfirstname(){
        return $this->firstname;
    }

    public function setlogin($login){
        $this->login = $login;
    }
    public function getlogin(){
        return $this->login;
    }

    public function setpassword($password){
        $this->password = $password;
    }
    public function getpassword(){
        return $this->password;
    }

    public function setpost_phone($post_phone){
        $this->post_phone = $post_phone;
    }
    public function getpost_phone(){
        return $this->post_phone;
    }

    public function setmail($mail){
        $this->mail = $mail;
    }
    public function getmail(){
        return $this->mail;
    }

    public function setarea($area){
        $this->area = $area;
    }
    public function getarea(){
        return $this->area;
    }

    
    public function insert(){
        try{

            $db = new DB();
            $dbh = $db->getDbh();

           $stmt =  $dbh->prepare("INSERT INTO advisor (lastname, firstname, login, password, post_phone, mail, area, role)
           VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
            $stmt->bindValue(1,$this->lastname);
            $stmt->bindValue(2,$this->firstname);
            $stmt->bindValue(3,$this->login);
            $stmt->bindValue(4,$this->password);
            $stmt->bindValue(5,$this->post_phone);
            $stmt->bindValue(6,$this->mail);
            $stmt->bindValue(7,$this->area);
            $stmt->bindValue(8,"Conseillere");
            
            $stmt->execute();


        }catch(PDOException $erreur){
            echo $erreur->getMessage();
        }
    }

    public static function findAll(){
        try{
            $db = new DB();
            $dbh = $db->getDbh();

            $stmt = $dbh->query("SELECT * FROM `advisor`");

            return $stmt->fetchAll();
        }catch(PDOException $error){
            echo $error->getMessage();
        }
    }

    public static function findById($id_advisor){
        try{
          
            $db = new DB();
            $dbh = $db->getDbh();

          $stmt = $dbh->prepare("SELECT * FROM `advisor` WHERE id_advisor=?");
          $stmt->bindParam(1,$id_advisor);
          $stmt->execute();

          return $stmt->fetch();

        }catch(PDOException $erreur){
            echo $erreur->getMessage();
        }  
    }

    public function update($id_advisor){
        try{

            $db = new DB();
            $dbh = $db->getDbh();

           $stmt =  $dbh->prepare("UPDATE `advisor` SET lastname=?, firstname=?, login=?, password=?, post_phone=?, mail=?, area=?, role='Conseillere' WHERE id_advisor=?");
            $stmt->bindValue(1,$this->lastname);
            $stmt->bindValue(2,$this->firstname);
            $stmt->bindValue(3,$this->login);
            $stmt->bindValue(4,$this->password);
            $stmt->bindValue(5,$this->post_phone);
            $stmt->bindValue(6,$this->mail);
            $stmt->bindValue(7,$this->area);
            $stmt->bindValue(8, $id_advisor);

            $stmt->execute();


        }catch(PDOException $erreur){
            echo $erreur->getMessage();
        }
    }

    public static function deleted($id_advisor){
        try{
          
            $db = new DB();
            $dbh = $db->getDbh();

          $stmt = $dbh->prepare("DELETE FROM `advisor`WHERE id_advisor=?");
          $stmt->bindParam(1,$id_advisor);
          $stmt->execute();

        }catch(PDOException $erreur){
            echo $erreur->getMessage();
        }  
    }

    public static function findByEmail($mail){
        try{
            //j'instancie ma class DB ce qui lance sa fonction construc
            $db = new DB();

            //je récupere la valeur de l'attribut dbh de la class db qui s'est connecté à la bdd
            $dbh = $db->getDbh();
            //je prepare ma requete sql pour inserer les valeurs par la suite
            $stmt = $dbh->prepare("SELECT * FROM advisor WHERE mail=?");
            //je remplace via bindvalue le ? dans la requete par la valeur de la variable $emaile reçu en parametre
            $stmt->bindValue(1, $mail);

            //j'execute ma requete
            $stmt->execute();
            //je retounrne l'utilisateur trouvé par ma requete
            return $stmt->fetch();
            
        } catch (PDOException $erreur) {
            echo $erreur->getMessage();
        }
    }
}