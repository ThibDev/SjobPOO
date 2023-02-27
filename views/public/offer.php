<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../../include/header.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <?php include_once("../../include/header.php")?>
    <h2 style="text-align: center;padding-top:25px;">Nos offres d'emplois</h2 style="text-align: center;padding-top:25px;">
    <section style="display: flex;padding: 60px 120px;">
        <div id="tri" style="width:30%;text-align:center">
            <p style="margin: 0;">Trier par</p>
            <div style="display: flex;border: solid 1px #e5e6e8;border-radius: 10px;padding: 5px; justify-content:space-evenly">
                <div style="border-right: solid 1px #e5e6e8;padding-right: 15px;">Pertinance</div>
                <div>Date</div>
            </div>
            <p style="margin: 0;padding-top: 30px;">Type de contrat</p>
            <div style="border: solid 1px #e5e6e8;border-radius: 10px;padding: 5px;" class="dropdown">
                <button style="background-color: white; color:black; border: none" class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                    Type de contrat
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <li><a class="dropdown-item" href="../SjobPOO/views/public/login.php?user=login">Contrat jeune</a></li>
                    <li><a class="dropdown-item" href="../SjobPOO/views/public/loginAdv.php?adv=login">Contrat +55ans</a></li>
                    <li><a class="dropdown-item" href="#">Contrat par zone</a></li>
                </ul>
            </div>
        </div>
        <div id="offres">
                <div style="width:65%;margin-left: auto;border: solid 2px #e5e6e8;border-radius: 10px;padding: 20px;margin-bottom: 30px;">
                    <h3 style="color:#F52152">Employé de Libre Service (h/f)</h3>
                    <p>L'agence Sjob recrute un(e) Employé(e) de magasin. L'agence Sjob Amiens recherche pour un de ses clients un(e) employé(e) de magasin polyvalent. Concrètement vos missions seront les suivantes: Mise en rayon, Encaissement...</p>
                    <div style="display: flex;justify-content: space-between;">
                        <div style="display: flex;">
                            <p>Amiens <i style="color:#F52152" class="bi bi-geo-alt"></i></p>
                            <p>CDI <i style="color:#F52152" class="bi bi-calendar3"></i></p>
                        </div>
                        <p>Ajoutée aujourd'hui</p>
                    </div>
                    <a href=""><div class="btn" style="display: flex;justify-content: space-between; ">
                        <div style="color:#F52152">Voir l'offre</div><i style="color:#F52152" class="bi bi-arrow-right"></i>
                    </div></a>
                </div>
                <div style="width:65%;margin-left: auto;border: solid 2px #e5e6e8;border-radius: 10px;padding: 20px;margin-bottom: 30px;">
                    <h3 style="color:#F52152">Agent d'entretien (h/f)</h3>
                    <p>L'agence Sjob recrute un(e) Agent d'entretien. L'agence Sjob Amiens recherche pour un de ses clients un(e) agent d'entretien pour effectuer les travaux d'entretien et de nettoyage. Concrètement vos missions seront les suivantes:Lavage des sols, nettoyahe des vitres...</p>
                    <div style="display: flex;justify-content: space-between;">
                        <div style="display: flex;">
                            <p>Amiens <i style="color:#F52152" class="bi bi-geo-alt"></i></p>
                            <p>CDI <i style="color:#F52152" class="bi bi-calendar3"></i></p>
                        </div>
                        <p>Ajoutée aujourd'hui</p>
                    </div>
                    <a href=""><div class="btn" style="display: flex;justify-content: space-between; ">
                        <div style="color:#F52152">Voir l'offre</div><i style="color:#F52152" class="bi bi-arrow-right"></i>
                    </div></a>
                </div>
                <div style="width:65%;margin-left: auto;border: solid 2px #e5e6e8;border-radius: 10px;padding: 20px;margin-bottom: 30px;">
                    <h3 style="color:#F52152">Electricien TP (h/f)</h3>
                    <p>L'agence Sjob recrute un(e) Employé(e) de magasin. L'agence Sjob Amiens recherche pour un de ses clients un(e) employé(e) de magasin polyvalent. Concrètement vos missions seront les suivantes: Mise en rayon, Encaissement...</p>
                    <div style="display: flex;justify-content: space-between;">
                        <div style="display: flex;">
                            <p>Amiens <i style="color:#F52152" class="bi bi-geo-alt"></i></p>
                            <p>CDI <i style="color:#F52152" class="bi bi-calendar3"></i></p>
                        </div>
                        <p>Ajoutée aujourd'hui</p>
                    </div>
                    <a href=""><div class="btn" style="display: flex;justify-content: space-between; ">
                        <div style="color:#F52152">Voir l'offre</div><i style="color:#F52152" class="bi bi-arrow-right"></i>
                    </div></a>
                    <STYLE>
                    .btn:hover {background-color: #e5e6e8;}
                    </STYLE>
                </div>
        </div>
    </section>
    <?php include_once("../../include/footer.php")?>
</body>
</html>