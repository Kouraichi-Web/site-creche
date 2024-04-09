<?php ob_start()?>
     <div class="container-perso">
        <h1 class="heading"><span class="orange">N</span>os <span class="orange">S</span>ervices</h1>
        <div class="box-container">
            <div class="box">
                <img src="./Assets/Image/GardeE.jpg" alt="test"> 
                <h3>Garde d'Enfants </h3>
                <p> Accueil à temps plein ou partiel <br>
                    Service de garde avant et après l'école </p>
            </div>
            <div class="box">
                <img src="./Assets/Image/Education.jpg" alt="test"> 
                <h3>Programmes Pédagogiques</h3>
                <p> Programme d'apprentissage structuré <br>
                    Suivi du développement de l'enfant</p>
            </div>
            <div class="box">
                 <img src="./Assets/Image/Restauration.png" alt="test"> 
                <h3>Restauration</h3>
                <p> Repas équilibrés et sains <br>
                    Menu adapté aux besoins nutritionnels des enfants</p>
            </div>
            <div class="box">
                <img src="./Assets/Image/Sante.jpg" alt="test"> 
                <h3>Soins de Santé</h3>
                <p> Premiers soins <br>
                    Protocoles de sécurité</p>
            </div>
            <div class="box">
                <img src="./Assets/Image/E-Parent.png" alt="test"> 
                <h3>Communication avec les Parents</h3>
                <p> Bulletins d'information <br>
                    Réunions parents-éducateurs</p>
            </div>
            <div class="box">
                <img src="./Assets/Image/Transport.png" alt="test"> 
                <h3>Services de Transport </h3>
                <p> Navette pour l'école <br>
                    Transport pour les sorties </p>
            </div>
        </div>
     </div>

<?php
$css = "./services.css";
$content = ob_get_clean();
require './include/template.php'
?>