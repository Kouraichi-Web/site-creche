
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
                <a href="Inscription.php" class ="btn-perso-1">Inscription</a>
              </li>
              
            </ul>
           
          </div>
        </div>
      </nav>

    <?=$content?>
      
<section class="pied-page mt-3">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                  <img src="./Assets/Image/logo.png" style="width: 150px; height: 150px;" alt="logo">
                </div>
                <div class="col-md-3 mx-auto">
                  <h5 class="footer-h5">Contact</h5>
                  <div class="text">
                    <h6 class="footer-h6">Phone</h6>
                    <p><i class="fa fa-phone"></i> +261 32 82 727 52</p>
                </div>
                  <div class="text">
                    <h6 class="footer-h6">Adresse</h6>
                    <p><i class="fas fa-location-dot"></i> 3 008 02 Tanambao-Nord Antsiranana</p>
                </div>
                  <div class="text">
                    <h6 class="footer-h6">Email</h6>
                    <p> <i class="fas fa-envelope"></i> kouraichiali11@gmail.com</p>
                </div>
                </div>
                <div class="col-md-3 mx-auto">
                  <h5 class="footer-h5">Pages</h5>
                  <ul>
                    <a href="index.php"><li>Accueil</li></a>
                    <a href="activite.php"><li>Activités</li></a>
                    <a href="services.php"><li>Services</li></a>
                    <a href="Contact.php"><li>Contact</li></a>
                  </ul>
                </div>
                <div class="col-md-3">
                  <h5 class="footer-h5">Horaire de Travail</h5>
                  <ul>
                    <li class="text-bold">Jour  </li>
                    <p>Lundi au Vendredi</p>
                    <li class="text-bold">Heure  </li>
                    <p>Matin : 9h à 11h <br> Après-Midi : 15h à 17h </p>
                  </ul>
                </div>
                
            </div>
        </div>
        <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
          <div class="col-md-6 ps-4 d-flex align-items-center">
            <!-- <a href="/" class="mb-3 me-2 mb-md-0 text-body-secondary text-decoration-none lh-1"> -->
              <!-- <svg class="bi" width="30" height="24"><use xlink:href="#bootstrap"></use></svg> -->
            </a>
            <span class="mb-3 mb-md-0 pl-2 text-primary">Copyright 2024 ESPA KOURAICHI-Web Projet création site web de la crèche</span>
          </div>
      
          <ul class="nav col-md-4 justify-content-center list-unstyled d-flex">
            
            <li class="ms-3"><a class="text-body-secondary" href="#"><span style="color: rgb(0, 4, 255); "></span><i class="fa-brands fa-facebook text-primary fa-2xl" ></i></a></span></li>
            <li class="ms-3"><a class="text-body-secondary" href="#"><span style="color: rgb(30, 255, 0);"><i class="fa-brands fa-whatsapp fa-2xl "></i></span></a></li>
            <li class="ms-3"><a class="text-body-secondary" href="#"><span style="color: rgb(0, 4, 255);"><i class="fa-brands fa-linkedin text-primary fa-2xl"></i></a></li>
          </ul>

        </footer>
      </section>

<script src="./Assets/vendor/jquery/jquery.min.js"></script>
<script src="./model/js/inscription.js"></script>
      <script src="./Assets/vendor/lightbox/dist/js/lightbox.js"></script>
      <script src="./Assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
      <script src="./Assets/vendor/aos-master/dist/aos.js"></script>

    <script>
        AOS.init();
      </script>
      <script>
        function Togglemenu(){
          const Togglemenu=document.querySelector('.menutoggle');
          const navbar = document.querySelector('navbar');
          menutoggle.classlist.toggle('active');
          navbar.classList.toggle('active');
        }
      </script>
      
</body>
</html>