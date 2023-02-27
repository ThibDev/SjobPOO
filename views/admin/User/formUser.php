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
    <form enctype="multipart/form-data" action="../../controllers/Router.php?user=create" method="post" style="width: 50%; margin: auto; padding-top: 100px;">


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
            <input name="mail" placeholder="Email" required type="mail" id="form3Example3" class="form-control" />
            <label class="form-label" for="form3Example3">Email</label>
        </div>
        <div class="form-outline mb-4">
            <input name="password" placeholder="Mot de passe" required type="password" id="form3Example3" class="form-control" />
            <label class="form-label" for="form3Example3">Mot de passe</label>
        </div>
        <div class="form-outline mb-4">
            <input name="phone" placeholder="Numéro de téléphone" type="number" id="form3Example3" class="form-control" />
            <label class="form-label" for="form3Example3">Numéro de téléphone</label>
        </div>
        <div class="form-outline mb-4">
            <input name="cv" type="file" id="form3Example3" class="form-control" />
            <label class="form-label" for="form3Example3">Une photo de profil ?</label>
        </div>
        <div class="form-outline mb-4">
            <input name="area" placeholder="Zone de travail" type="text" id="form3Example3" class="form-control" />
            <label class="form-label" for="form3Example3">Zone de travail</label>
        </div>
        <div class="form-outline mb-4">
            <input name="address" placeholder="Adresse" type="text" id="form3Example3" class="form-control" />
            <label class="form-label" for="form3Example3">Adresse </label>
        </div>
        <select required name="role" class="form-select" aria-label="Disabled select example">
            <option disabled selected>Role</option>
            <option value="1">Utilisateur</option>
            <option value="2">Conseillère</option>
            <option value="3">Entreprise</option>
        </select>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="admin" id="admin1">
            <label class="form-check-label" for="flexRadioDefault1">
                Administrateur
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="admin" id="admin2">
            <label class="form-check-label" for="flexRadioDefault2">
                Non Administrateur
            </label>
        </div>


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