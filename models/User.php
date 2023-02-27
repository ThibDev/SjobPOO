<?php 
namespace App\models;
use App\models\DB;
use \PDOException;

require_once("../autoloader.php");

class User{
    private $lastname;
    private $firstname;
    private $mail;
    private $password;
    private $phone;
    private $cv;
    private $area;
    private $address;
    private $role;
    private $admin;
    

    function __construct($lastname, $firstname, $mail, $password, $phone, $cv, $area, $address, $role, $admin)
    {
        $this->lastname = $lastname;
        $this->firstname = strip_tags($_POST["firstname"]);
        $this->mail = $mail;
        $this->password = password_hash($_POST["password"], PASSWORD_ARGON2ID);
        $this->phone = $phone;
        $this->cv = $cv;
        $this->area = $area;
        $this->address = $address;
        $this->role = $role;
        $this->admin = false;
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

    public function setmail($mail){
        $this->mail = $mail;
    }
    public function getmail(){
        return $this->mail;
    }
    public function setpassword($password){
        $this->password = $password;
    }
    public function getpassword(){
        return $this->password;
    }

    public function setphone($phone){
        $this->phone = $phone;
    }
    public function getphone(){
        return $this->phone;
    }

    public function setcv($cv){
        $this->cv = $cv;
    }
    public function getcv(){
        return $this->cv;
    }

    public function setarea($area){
        $this->area = $area;
    }
    public function getarea(){
        return $this->area;
    }

    public function setaddress($address){
        $this->address = $address;
    }
    public function getaddress(){
        return $this->address;
    }

    public function setrole($role){
        $this->role = $role;
    }
    public function getrole(){
        return $this->role;
    }

    public function setadmin($admin){
        $this->admin = $admin;
    }
    public function getadmin(){
        return $this->admin;
    }
    
    
    

    public function insert(){
        try{

            $db = new DB();
            $dbh = $db->getDbh();

           $stmt =  $dbh->prepare("INSERT INTO user (lastname, firstname, mail, password, phone, cv, area, address, role, admin)
           VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
            $stmt->bindValue(1,$this->lastname);
            $stmt->bindValue(2,$this->firstname);
            $stmt->bindValue(3,$this->mail);
            $stmt->bindValue(4,$this->password);
            $stmt->bindValue(5,$this->phone);
            $stmt->bindValue(6,$this->cv['cv']['name']);
            move_uploaded_file($this->cv['cv']['tmp_name'],"../static/image/".$this->cv['cv']['name']);
            $stmt->bindValue(7,$this->area);
            $stmt->bindValue(8,$this->address);
            $stmt->bindValue(9,$this->role);
            $stmt->bindValue(10,false);
            $stmt->execute();


        }catch(PDOException $erreur){
            echo $erreur->getMessage();
        }
    }

    public static function findAll(){
        try{
            $db = new DB();
            $dbh = $db->getDbh();

            $stmt = $dbh->query("SELECT * FROM `user`");

            return $stmt->fetchAll();
        }catch(PDOException $error){
            echo $error->getMessage();
        }
    }

    public static function findById($id_user){
        try{
          
            $db = new DB();
            $dbh = $db->getDbh();

          $stmt = $dbh->prepare("SELECT * FROM `user` WHERE id_user=?");
          $stmt->bindParam(1,$id_user);
          $stmt->execute();

          return $stmt->fetch();

        }catch(PDOException $erreur){
            echo $erreur->getMessage();
        }  
    }

    public function update($id_user){
        try{

            $db = new DB();
            $dbh = $db->getDbh();

           $stmt =  $dbh->prepare("UPDATE user SET lastname=?, firstname=?, mail=?, password=?, phone=?, cv=?, area=?, address=?, role=?, admin=false WHERE id_user=?");
            $stmt->bindValue(1,$this->lastname);
            $stmt->bindValue(2,$this->firstname);
            $stmt->bindValue(3,$this->mail);
            $stmt->bindValue(4,$this->password);
            $stmt->bindValue(5,$this->phone);
            $stmt->bindValue(6,$this->cv);
            $stmt->bindValue(7,$this->area);
            $stmt->bindValue(8,$this->address);
            $stmt->bindValue(9,$this->role);
            $stmt->bindValue(10, $id_user);

            $stmt->execute();


        }catch(PDOException $erreur){
            echo $erreur->getMessage();
        }
    }

    public static function deleted($id_user){
        try{
          
            $db = new DB();
            $dbh = $db->getDbh();

          $stmt = $dbh->prepare("DELETE FROM `user` WHERE id_user=?");
          $stmt->bindParam(1,$id_user);
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
            $stmt = $dbh->prepare("SELECT * FROM user WHERE mail=?");
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