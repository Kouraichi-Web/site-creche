<?php
ob_start()
?>
    <!-- Navbar end -->
     <div class="container-perso">
        <h1 class="heading"><span class="orange">N</span>os <span class="orange">A</span>ctivités</h1>
        <div class="box-container">
            <div class="box">
                <h3>Programme Éducatif </h3>
                <p> Apprentissage précoce <br>
                    Exploration créative </p>
            </div>
            <div class="box">
                <h3>Jeux et Divertissements</h3>
                <p> Jeux en groupe <br>
                    Activités artistiques  <br>
                    Temps de lecture interactif</p>
            </div>
            <div class="box">
                <h3>Activités Physiques</h3>
                <p> Jeux en plein air <br>
                    Activités de motricité <br>
                    Yoga ou gymnastique adaptée</p>
            </div>
            <div class="box">
                <h3>Événements Saisonniers</h3>
                <p> Célébrations de fêtes <br>
                    Activités liées aux saisons </p>
            </div>
            <div class="box">
                <h3>Activités Musicales</h3>
                <p> Chants et comptines <br>
                    Introduction à des instruments de musique</p>
            </div>
            <div class="box">
                <h3>Célébrations et Spectacles</h3>
                <p> Spectacles de talents des enfants <br>
                    Fêtes de fin d'année </p>
            </div>
        </div>
     </div>

<?php 
$css = "activite.css";
$content = ob_get_clean();
require './include/template.php'
?>