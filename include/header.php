
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- lien css de bootstrap -->
    <link rel="stylesheet" href="./Assets/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
    <!-- lien css des icônes -->
    <link rel="stylesheet" href="./Assets/vendor/fontawesome/css/all.min.css">
    <!-- lien css des animations -->
    <link rel="stylesheet" href="./Assets/vendor/aos-master/dist/aos.css">
    <!-- lien css pour la fenêtre agrandi d'image -->
    <link rel="stylesheet" href="./Assets/vendor/lightbox/dist/css/lightbox.min.css">
    <link rel="stylesheet" href=<?=$css?>>
    <title>Site creche | 2024</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg fixed-top" style="background-color: #fff;">
        <div class="container-fluid">
          <!-- <a class="navbar-brand" href="#">LOGO</a> -->
          <a href="./index.php"><img src="./Assets/Image/logo.png" class="" style="width: 50; height: 50px;" alt="logo"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarScroll">
            <ul class="navbar-nav ms-auto my-2 my-lg-0 " >
                <li class="nav-item dropdown">
                        <button
                          class="btn dropdown-toggle"
                          type="button"
                          id="dropdownMenuButton"
                          data-mdb-toggle="dropdown"
                          aria-expanded="false"
                        >
                          Accueil
                        </button>
                        <div class = menutoggle onclick="Togglemenu();"></div>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                          <li><a class="dropdown-item" href="index.php#apropos" onclick="Togglemenu();">A propos</a></li>
                          <li><a class="dropdown-item" href="index.php#photo" onclick="Togglemenu();">Photos</a></li>
                          <li><a class="dropdown-item" href="index.php#prof" onclick="Togglemenu();">Enseignant</a></li>
                        </ul>
                  </li>
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="activite.php">Activités</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="services.php">Services</a>
              </li>
              <li class="nav-item">
                <a class="nav-link"  href="Contact.php" >Contact</a>
              </li>
              <li class="nav-item">
                <button class="btn-perso-1" type="submit"><a href="Inscription.php" >Inscription</a></button>
              </li>
              
            </ul>
           
          </div>
        </div>
      </nav>
