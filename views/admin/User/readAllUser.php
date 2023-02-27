<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <title>Document</title>
</head>
<body>
<section style="display: flex;">
<div class="container-fluid">
    <div class="row flex-nowrap">
        <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark">
            <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                <a href="/" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                    <span class="fs-5 d-none d-sm-inline">Menu</span>
                </a>
                <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                    <li class="nav-item">
                      <!-- Lien 1 -->
                        <a href="../../SjobPOO/index.php" class="nav-link align-middle px-0">
                            <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline">Home</span>
                        </a>
                    </li>
                    <li>
                        <a href="#submenu1" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                            <i class="fs-4 bi-speedometer2"></i> <span class="ms-1 d-none d-sm-inline">Dashboard User</span> </a>
                        
                    </li>
                    <li>
                        <a href="#" class="nav-link px-0 align-middle">
                            <i class="fs-4 bi-table"></i> <span class="ms-1 d-none d-sm-inline">Dashboard Entreprise</span></a>
                    </li>
                    <li>
                        <a href="#submenu2" data-bs-toggle="collapse" class="nav-link px-0 align-middle ">
                            <i class="fs-4 bi-bootstrap"></i> <span class="ms-1 d-none d-sm-inline">Dashboard offre d'emploi</span></a>
                        
                    </li>
                    <li>
                        <a href="#submenu3" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                            <i class="fs-4 bi-grid"></i> <span class="ms-1 d-none d-sm-inline">Dashboard Conseillère</span> </a>
                            
                    </li>
                    <li>
                        <a href="#" class="nav-link px-0 align-middle">
                            <i class="fs-4 bi-people"></i> <span class="ms-1 d-none d-sm-inline">Dashboard Demandeurs d'emplois</span> </a>
                    </li>
                </ul>
                <hr>
                <div class="dropdown pb-4">
                    <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="https://github.com/mdo.png" alt="hugenerd" width="30" height="30" class="rounded-circle">
                        <span class="d-none d-sm-inline mx-1">Admin</span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                        <li><a class="dropdown-item" href="../views/admin/formUser.php?user=create">Add Utilisateur</a></li>
                        <li><a class="dropdown-item" href="../views/admin/Advisor/formAdvisor.php?adv=create">Add Conseillère</a></li>
                        <li><a class="dropdown-item" href="#">Add Entreprise</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="../../SjobPOO/controllers/Router.php?user=logout">Déconnexion</a></li>
                    </ul>
                </div>
            </div>
        </div>
       
        <table style="width: 83.3%; height:20%;" class="table table-dark">
  <thead>
  <tr>
      <th scope="col">Id</th>
      <th scope="col">Nom</th>
      <th scope="col">Prenom</th>
      <th scope="col">Email</th>
      <th scope="col">Téléphone</th>
      <th scope="col">Cv</th>
      <th scope="col">Zone</th>
      <th scope="col">Adresse</th>
      <th scope="col">Role</th>
      <th scope="col">Admin</th>
      <th scope="col">Détails</th>
      <th scope="col">Modifier</th>
      <th scope="col">Supprimer</th>
    </tr>
  </thead>
<tbody>

    <?php foreach($Users as $User): ?>
      <tr>
        <th style="background-color: whitesmoke; color: black" scope="row"><?= $User["id_user"];?></th>
        <td style="background-color: whitesmoke; color: black"><?= $User["lastname"];?></td>
        <td style="background-color: whitesmoke; color: black"><?= $User["firstname"];?></td>
        <td style="background-color: whitesmoke; color: black"><?= $User["mail"];?></td>
        <td style="background-color: whitesmoke; color: black"><?= $User["phone"];?></td>
        <td style="background-color: whitesmoke; color: black"><?= $User["cv"];?></td>
        <td style="background-color: whitesmoke; color: black"><?= $User["area"];?></td>
        <td style="background-color: whitesmoke; color: black"><?= $User["address"];?></td>
        <td style="background-color: whitesmoke; color: black"><?= $User["role"];?></td>
        <td style="background-color: whitesmoke; color: black"><?= $User["admin"];?></td>
        <td style="background-color: whitesmoke; color: black"><a href="../controllers/Router.php?user=read&id_user=<?=$User["id_user"]?>">Voir Détails</a></td>
        <td style="background-color: whitesmoke; color: black"><a href="../controllers/Router.php?user=formUpdate&id_user=<?=$User["id_user"]?>"><i class="fa-solid fa-pen"></a></i></a></td>
        <td style="background-color: whitesmoke; color: black"><a href="../controllers/Router.php?user=delete&id_user=<?=$User["id_user"]?>"><i class="fa-solid fa-trash-can"></i></a></td>
        </tr>
    <?php endforeach; ?>


  </tbody>
</table>
    </div>
</div>

</section>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>