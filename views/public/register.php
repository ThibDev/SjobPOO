<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>

    <?php

    if (isset($erreurs)) {
        var_dump($erreurs);
    }

    ?>

    <body style="background-color: #e5e6e8;">

        <form enctype="multipart/form-data" action="../../controllers/Router.php?user=register" method="post" style="width: 50%;background-color: white; margin: 50px auto;border-radius: 15px;padding: 10px;">
            <img style="width: 150px; display:block; margin:auto" src="../../static/image/Sjob.png" alt="logo">
            <h1 style="font-family: sans-serif; text-align:center; padding-bottom : 15px">Inscription</h1>

            <div class="row mb-4">
                <div class="col">
                    <div class="form-outline">
                        <input name="lastname" placeholder="Nom" type="text" id="form3Example1" class="form-control" />
                        <label class="form-label" for="form3Example1">Nom</label>
                    </div>
                </div>
                <div class="col">
                    <div class="form-outline">
                        <input name="firstname" placeholder="Prénom" type="text" required id="form3Example2" class="form-control" />
                        <label class="form-label" for="form3Example2">Prénom</label>
                    </div>
                </div>
            </div>
            <div class="form-outline mb-4">
                <input name="mail" placeholder="Email" type="mail" id="form3Example3" required class="form-control" />
                <label class="form-label" for="form3Example3">Email</label>
            </div>
            <div class="form-outline mb-4">
                <input name="password" placeholder="Mot de passe " type="password" required id="form4" class="form-control" />
                <label class="form-label" for="form4">Mot de passe</label>
            </div>
            <div class="form-outline mb-4">
                <input name="phone" placeholder="Numéro de téléphone" type="number" id="form5" class="form-control" />
                <label class="form-label" for="form5">Numéro de téléphone</label>
            </div>
            <div class="form-outline mb-4">
                <input name="cv" type="file" id="form6" class="form-control" />
                <label class="form-label" for="form6">Une photo de profil ?</label>
            </div>
            <div class="form-outline mb-4">
                <input name="area" placeholder="Zone de travail" type="text" id="form7" class="form-control" />
                <label class="form-label" for="form7">Zone de travail</label>
            </div>
            <div class="form-outline mb-4">
                <input name="address" placeholder="Adresse" type="text" id="form8" class="form-control" />
                <label class="form-label" for="form8">Adresse </label>
            </div>
            <select name="role" class="form-select" required aria-label="Disabled select example">
                <option disabled selected>Role</option>
                <option value="1">Utilisateur</option>
                <option value="2">Conseillère</option>
                <option value="3">Entreprise</option>
            </select>


            <!-- Checkbox -->
            <div class="form-check d-flex justify-content-center mb-4">
                <input class="form-check-input me-2" type="checkbox" value="" id="form2Example33" checked />
                <label class="form-check-label" for="form2Example33">
                    J'ai lu et j'accepte les politiques de confidentialés de ce site
                </label>
            </div>

            <!-- Submit button -->
            <div class="submit" style="display: flex;">
                <button type="submit" class="btn btn-primary btn-block mb-4" style="width: 50%; margin:auto;">Envoyer</button>
            </div>



        </form>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    </body>

</html>