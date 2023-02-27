<?php
namespace App\controllers;
use App\models\Advisor;
require_once("../autoloader.php");

class AdvisorController{
    public static function create($post){
        
        $Advisor =  new Advisor($post["lastname"], $post["firstname"], $post["login"], $post["password"], $post["post_phone"], $post["mail"],$post["area"], "Conseillere");
        $Advisor->insert();
        self::readAll();
    }
    public static function readAll(){
        $Advisors = Advisor::findAll();
        require("../views/admin/Advisor/readAllAdvisor.php");
    }
    public static function readById($id_advisor){
        $Advisor = Advisor::findById($id_advisor);
        require("../Views/admin/Advisor/ReadAdvisor.php");
    }
    public static function modif($post){
        $Advisor =  new Advisor($post["lastname"], $post["firstname"], $post["login"], $post["password"], $post["post_phone"], $post["mail"],$post["area"], "Conseillere");
        $Advisor->update($post["id_advisor"]);
        self::readAll();
    }
    public static function formUpdate($id_advisor){
        $Advisor = Advisor::findById($id_advisor);
        require("../views/admin/Advisor/formUpdateAdvisor.php");
    }
    public static function delete($id_advisor){
        $Advisor = Advisor::deleted($id_advisor);
        self::readAll();
    }
    //je crée la fonction register qui sera appelé par le routeur et qui prend en paramétre le formulaire  reçu par le routeur
    public static function register($post){
        //je crée un tableau vide qui prendra en compte mes erreurs
        $erreurs = [];
        //je déclare mes variables et les inities à null pour les valeurs qui peuvent être null
        $lastname = null;
        $area = null;
        $role = "Conseillere";
        //je verifie que les champs qui sont obligatoires ne sont pas vide
        if(empty($post["firstname"]) || empty($post["mail"]) || empty($post["password"])){
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
        $check = Advisor::findByEmail($mail);
        //si il existe deja on remplie le tableau d'erreur
        if($check != false){
            $erreurs += ["mailE" => "Ce mail existe deja"];
        }

        //si mon tableau d'erreur est vide
        if(empty($erreurs)){
            
            //je crée un objet Advisor, en envoyant chaque valeur du form dans le constructeur
            $Advisor = new Advisor($lastname, $post["firstname"], $post["login"], $post["password"], $post["post_phone"], $post["mail"], $area, $role);
            //j'appelle la méthode create de l'objet Advisor qui enverra en base de données les valeur reçu du form
            $Advisor->insert();
            // var_dump($Advisor);
            //je renvois vers la page login
            header('Location: ../views/public/loginAdv.php');
        //sinon
        }else{
            //j'appelle la vue register avec les erreurs
            require("../views/admin/Advisor/formAdvisor.php");
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
        $Advisor = Advisor::findByEmail($mail);
        //si il n'existe pas alors on remplie le tableau d'erreur
        if ($Advisor == false) {
            $erreurs += ["mailE" => "ce compte n'existe pas"];
        }
        //on verifie que le mot de passe reçu du form ($post["password"]) correspond au mot de passe reçu de la bdd ($Advisor["password"])
        if(password_verify($post["password"], $Advisor["password"]) == true){
            //on démarre la session pour pouvoir utiliser le tableau $_SESSION
             session_start();
             //je crée une clé lastname dans le tableau $_SESSION qui a comme valeur le lastname du Advisor reçu en bdd
             $_SESSION["firstname"] = $Advisor["firstname"];
            //je crée une clé role dans le tableau $_SESSION qui a comme valeur admin du Advisor reçu en bdd
            $_SESSION["role"]= $Advisor["role"];
            //j'appelle la vue profil.php
             require("../views/public/profilRole.php");
        }

    }
    public static function logout(){
        session_start();
        $_SESSION["role"] = NULL;
        session_destroy();
       header('Location: ../index.php');
    }
}

?>