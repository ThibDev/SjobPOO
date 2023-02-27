<?php

use App\controllers\UserController;
use App\controllers\AdvisorController;


require_once("../autoloader.php");



if (isset($_GET["user"])) {
    if ($_GET["user"] == "create") {
        UserController::create($_POST, $_FILES);
    } else if ($_GET["user"] == "readAll") {
        UserController::readAll();
    } else if ($_GET["user"] == "read") {
        UserController::readById($_GET["id_user"]);
    } else if ($_GET["user"] == "update") {
        UserController::modif($_POST, $_FILES);
    } elseif ($_GET["user"] == "formUpdate") {
        UserController::formUpdate($_GET["id_user"]);
    } else if ($_GET["user"] == "delete") {
        UserController::delete($_GET["id_user"]);
    } //si le param action est égal à register
    else if ($_GET["user"] == "register") {
        //alors j'appelle la fonction static register de Usercontroller en passant le form reçu dans $_POST
        UserController::register($_POST, $_FILES);
    } //si le param action est égal à login
    else if ($_GET["user"] == "login") {
        //alors j'appelle la fonction static login de Usercontroller en passant le form reçu dans $_POST
        UserController::login($_POST);
    } else if ($_GET["user"] == "all") {
        UserController::readAll();
    } else if ($_GET["user"] == "logout") {
        UserController::logout($_POST);
    }
}

if (isset($_GET["adv"])) {
    if ($_GET["adv"] == "create") {
        AdvisorController::create($_POST, $_FILES);
    } else if ($_GET["adv"] == "readAll") {
        AdvisorController::readAll();
    } else if ($_GET["adv"] == "read") {
        AdvisorController::readById($_GET["id_advisor"]);
    } else if ($_GET["adv"] == "update") {
        AdvisorController::modif($_POST, $_FILES);
    } elseif ($_GET["adv"] == "formUpdateAdvisor") {
        AdvisorController::formUpdate($_GET["id_advisor"]);
    } else if ($_GET["adv"] == "delete") {
        AdvisorController::delete($_GET["id_advisor"]);
    } //si le param action est égal à register
    else if ($_GET["adv"] == "register") {
        //alors j'appelle la fonction static register de AdvisorController en passant le form reçu dans $_POST
        AdvisorController::register($_POST, $_FILES);
    } //si le param action est égal à login
    else if ($_GET["adv"] == "login") {
        //alors j'appelle la fonction static login de AdvisorController en passant le form reçu dans $_POST
        AdvisorController::login($_POST);
    } else if ($_GET["adv"] == "all") {
        AdvisorController::readAll();
    } else if ($_GET["adv"] == "logout") {
        AdvisorController::logout($_POST);
    }
}
