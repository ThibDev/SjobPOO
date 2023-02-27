<?php
namespace App\controllers;
use App\models\User;
require_once("../autoloader.php");

class UserController{
    public static function create($post, $files){
        $User =  new User($post["lastname"], $post["firstname"], $post["mail"], $post["password"], $post["phone"], $files,$post["area"],$post["address"],$post["role"],false);
        $User->insert();
        self::readAll();
    }
    public static function readAll(){
        $Users = User::findAll();
        require("../views/admin/User/readAllUser.php");
    }
    public static function readById($id_user){
        $User = User::findById($id_user);
        require("../Views/admin/ReadUser.php");
    }
    public static function modif($post){
        $User =  new User($post["lastname"], $post["firstname"], $post["mail"], $post["password"], $post["phone"], $post["cv"],$post["area"],$post["address"],$post["role"],false);
        $User->update($post["id_user"]);
        self::readAll();
    }
    public static function formUpdate($id_user){
        $User = User::findById($id_user);
        require("../views/admin/formUpdate.php");
    }
    public static function delete($id_user){
        $User = User::deleted($id_user);
        self::readAll();
    }
    //je crée la fonction register qui sera appelé par le routeur et qui prend en paramétre le formulaire  reçu par le routeur
    public static function register($post , $files){
        //je crée un tableau vide qui prendra en compte mes erreurs
        $erreurs = [];
        //je déclare mes variables et les inities à null pour les valeurs qui peuvent être null
        $lastname = null;
        $phone = null;
        $cv = null;
        $area = null;
        $address = null;
        //je verifie que les champs qui sont obligatoires ne sont pas vide
        if(empty($post["firstname"]) || empty($post["mail"]) || empty($post["password"]) || empty($post["role"])){
            //si ils sont vides j'ajoute une erreur au tableau erreurs
            $erreurs += ["incomplet" => "veuillez completer le formulaire correctement"];
        }

        //si lastname n'est pas vide 
        if(!empty($post["lastname"])){
            //j'enléve les eventuels balise reçu du formulaire
            $lastname = strip_tags($post["lastname"]);
        }
        //je hash le mot de passe reçu du formulaire
        password_hash($post["password"], PASSWORD_ARGON2ID);

        strip_tags($post["firstname"]);

        //je verifie que le format du mail est valide
        $mail = filter_var($post["mail"], FILTER_VALIDATE_EMAIL);
        //si le format du mail est faux on remplie le tableau d'erreur
        if($mail == false){
            $erreurs += ["mailI" => "Format email invalide"];
        }
        //on verifie si l'email existe
        $check = User::findByEmail($mail);
        //si il existe deja on remplie le tableau d'erreur
        if($check != false){
            $erreurs += ["mailE" => "Ce mail existe deja"];
        }

        //si mon tableau d'erreur est vide
        if(empty($erreurs)){
            
            //je crée un objet User, en envoyant chaque valeur du form dans le constructeur
            $User = new User($lastname, $post["firstname"], $post["mail"], $post["password"], $phone, $files,$area,$address,$post["role"],false);
            //j'appelle la méthode create de l'objet user qui enverra en base de données les valeur reçu du form
            $User->insert();
            // var_dump($User);
            //je renvois vers la page login
            header('Location: ../views/public/login.php');
        //sinon
        }else{
            //j'appelle la vue register avec les erreurs
            require("../views/public/register.php");
        }
       

        
    }
    //je crée la fonction login qui sera appelé par le routeur et qui prend en paramétre le formulaire  reçu par le routeur
    public static function login($post){
         //je crée un tableau vide qui prendra en compte mes erreurs
         $erreurs = [];
          //je verifie que les champs qui sont obligatoires ne sont pas vide
        if(empty($post["mail"]) || empty($post["password"]) ){
            //si ils sont vides j'ajoute une erreur au tableau erreurs
            $erreurs += ["incomplet" => "veuillez completer le formulaire correctement"];
        }
        //je verifie que le format du mail est valide
        $mail = filter_var($post["mail"], FILTER_VALIDATE_EMAIL);
        //si le format du mail est faux on remplie le tableau d'erreur
        if($mail == false){
            $erreurs += ["mailI" => "Format email invalide"];
        }
        //on verifie si l'email existe
        $User = User::findByEmail($mail);
        //si il n'existe pas alors on remplie le tableau d'erreur
        if ($User == false) {
            $erreurs += ["mailE" => "ce compte n'existe pas"];
        }
        //on verifie que le mot de passe reçu du form ($post["password"]) correspond au mot de passe reçu de la bdd ($User["password"])
        if(password_verify($post["password"], $User["password"]) == true){
            //on démarre la session pour pouvoir utiliser le tableau $_SESSION
             session_start();
             //je crée une clé lastname dans le tableau $_SESSION qui a comme valeur le lastname du User reçu en bdd
             $_SESSION["firstname"] = $User["firstname"];
            //je crée une clé role dans le tableau $_SESSION qui a comme valeur admin du User reçu en bdd
             $_SESSION["admin"]= $User["admin"];
            //j'appelle la vue profil.php
             require("../views/public/profil.php");
        }

    }
    public static function logout(){
        session_start();
        $_SESSION["admin"] = NULL;
        session_destroy();
       header('Location: ../index.php');
    }
}

?>