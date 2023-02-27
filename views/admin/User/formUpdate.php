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
    <form action="../controllers/Router.php?user=update" method="post" style="width: 50%; margin: auto; padding-top: 100px;">
        <input type="hidden" name="id_user" id="id_user" value="<?= $User["id_user"]; ?>">

        <div class="row mb-4">
            <div class="col">
                <div class="form-outline">
                    <input name="lastname" value="<?=$User["lastname"]?>" type="text" id="form3Example1" class="form-control" />
                    <label class="form-label" for="form3Example1">Nom</label>
                </div>
            </div>
            <div class="col">
                <div class="form-outline">
                    <input name="firstname" value="<?=$User["firstname"]?>" type="text" id="form3Example2" class="form-control" />
                    <label class="form-label" for="form3Example2">Prénom</label>
                </div>
            </div>
        </div>
        <div class="form-outline mb-4">
            <input name="mail" value="<?=$User["mail"]?>" type="mail" id="form3Example3" class="form-control" />
            <label class="form-label" for="form3Example3">Email</label>
        </div>
        <div class="form-outline mb-4">
            <input name="password" value="<?=$User["password"]?>" type="password" id="form3Example3" class="form-control" />
            <label class="form-label" for="form3Example3">Mot de passe</label>
        </div>
        <div class="form-outline mb-4">
            <input name="phone" value="<?=$User["phone"]?>" type="number" id="form3Example3" class="form-control" />
            <label class="form-label" for="form3Example3">Numéro de téléphone</label>
        </div>
        <div class="form-outline mb-4">
            <input name="cv" value="<?=$User["cv"]?>"  type="file" id="form3Example3" class="form-control" />
            <label class="form-label" for="form3Example3">Une photo de profil ?</label>
        </div>
        <div class="form-outline mb-4">
            <input name="area" value="<?=$User["area"]?>" type="text" id="form3Example3" class="form-control" />
            <label class="form-label" for="form3Example3">Zone de travail</label>
        </div>
        <div class="form-outline mb-4">
            <input name="address" value="<?=$User["address"]?>" type="text" id="form3Example3" class="form-control" />
            <label class="form-label" for="form3Example3">Adresse </label>
        </div>
        <select name="role" class="form-select" aria-label="Disabled select example">
            <option disabled selected value="<?=$User["role"]?>"><?=$User["role"]?></option>
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