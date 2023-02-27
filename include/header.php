<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#"><img src="../../../SjobPOO/static/image/Sjob.png" alt="Logo"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="../../../SjobPOO/index.php">Acceuil <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../../../SjobPOO/views/public/register.php?user=register">Inscription</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../../../SjobPOO/views/public/offer.php">Nos offres</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../../../SjobPOO/views/public/company.php">Entreprise</a>
            </li>
            <div class="dropdown">
                <button style="background-color: white; color:black; border: none" class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                    Connexion
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <li><a class="dropdown-item" href="../../../SjobPOO/views/public/login.php?user=login">Connexion</a></li>
                    <li><a class="dropdown-item" href="../../../SjobPOO/views/public/loginAdv.php?adv=login">Connexion Conseillère</a></li>
                    <li><a class="dropdown-item" href="#">Connexion Entreprise</a></li>
                </ul>
            </div>
        </ul>
    </div>
</nav>
<header>
    <h1>Bienvenue sur Sjob</h1>
    <div class="input-group rounded" style="width: 30%; margin-left: 20%;">
        <input type="search" class="form-control rounded" placeholder="Recherche" aria-label="Search" aria-describedby="search-addon" />
        <span class="input-group-text border-0" id="search-addon">
            <i class="fas fa-search"></i>
        </span>
    </div>
</header>