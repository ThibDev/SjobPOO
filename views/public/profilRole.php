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
    if ($_SESSION["role"] == "Conseillere"): ?> 

        <h1>Bienvenu <?=$Advisor["firstname"]?></h1>
        <a href="../controllers/Router.php?adv=readAll">voir les demandeurs d'emplois</a>
        <a href="../controllers/Router.php?adv=logout">Deconnection</a>
        

    
        <?php endif; ?>
</body>
</html>
