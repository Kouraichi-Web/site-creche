<?php ob_start() ?>
    <section class="contact">
    <div class="darken-bg w-100 h-100 align-items-center ">
        <div class="content">
            <h2 class="titre-text center"><span class="orange">C</span>ontacter <span class="orange">N</span>ous</h2>
            <p></p>
        </div>
        <div class="container">
            <div class="contactInfo">
                <div class="box">
                    <div class="icon"><i class="fa-solid fa-location-dot"></i></div>
                    <div class="text">
                        <h3>Adresse</h3>
                        <p>3 008 02 Tanambao-Nord Antsiranana</p>
                    </div>
                </div>
                <div class="box">
                    <div class="icon"><i class="fa-solid fa-phone-volume"></i></div>
                    <div class="text">
                        <h3>Phone</h3>
                        <p>+261 32 82 727 52</p>
                    </div>
                </div>
                <div class="box">
                    <div class="icon"><i class="fa fa-envelope" aria-hidden="true"></i></div>
                    <div class="text">
                        <h3>Email</h3>
                        <p>kouraichiali11@gmail.com</p>
                    </div>
                </div>
            </div>
            <div class="contactForm">
                <form>
                    <h2> Envoyer vos Message</h2>
                    <div class="inputBox">
                        <input type="text" name="" required="required">
                        <span>Nom</span>
                    </div>
                    <div class="inputBox">
                        <input type="text" name="" required="required">
                        <span>Email</span>
                    </div>
                    <div class="inputBox">
                        <textarea required="required"></textarea>
                        <span>Message</span>
                    </div>
                    <div class="inputBox">
                        <input type="submit" class="btn_envoi_mail" value="Envoyer">
                        
                    </div>
                </form>
            </div>
        </div>
        </div>

    </section>
    <?php
    $css = "Contact.css";
    $content = ob_get_clean();
    require './include/template.php'
    ?>