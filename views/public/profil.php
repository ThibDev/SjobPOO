<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //je compare le role du user enregistré dans la session au moment du login dans le controller

    //si il est égale à false il n'aura accès qu'à l'accueil 
    if($_SESSION["admin"] == 0): ?>

        <a href="../../SjobPOO/index.php">accueil</a>
        <a href="../controllers/Router.php?user=logout">Déconnection</a>

    <?php
     //si il est égale à true il peut avoir accès au dashboard
     elseif($_SESSION["admin"] == 1): ?>

        <a href="../controllers/Router.php?user=readAll">voir les utilisateurs</a>
        <a href="../controllers/Router.php?user=logout">Deconnection</a>
        

    <?php 
    elseif ($_SESSION["role"] == "Conseillere"): ?> 
        <a href="../controllers/Router.php?adv=readAll">voir les utilisateurs</a>
        <a href="../controllers/Router.php?adv=logout">Deconnection</a>
        <?php endif; ?>
</body>
</html>