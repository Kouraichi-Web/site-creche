<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./Assets/vendor/bootstrap/css/bootstrap.min.css"> 
    <!-- <link rel="stylesheet" href="inscrit.css"> -->
    <!-- <title>Document</title>
</head>
<body> -->

<?php ob_start()?>
<?php
$date = new DateTime();
?>
    <div id="principale" class="text-light d-flex align-items-center">
        
    <div class="container mt-5 py-3 px-5 flex" style="background-color:rgba(101,101,101,0.57); border-radius:10px;backdrop-filter: blur(10px);">
    <h1 class = "text-center mb-3" >Formulaire d'inscription</h1>
            <form>
                <!-- columns -->
                <div class="form-group">
                    <div class="row align-items-center">
                        <div class="col-md-3 mb-3">
                            <!-- Input type text -->
                            <label for="nom_enf" class="form-label required">Nom</label>
                            <input type="text" class="form-control form-control-sm" name="nom_enf" id="nom_enf">
                        </div>
    
                        <div class="col-md-3 mb-3">
                            <!-- Input type text -->
                            <label for="prenom_enf" class="form-label required">Prénom</label>
                            <input type="text" class="form-control form-control-sm" name="prenom_enf" id="prenom_enf">
                        </div>
    
                        <div class="col-md-3 mb-3">
                            <!-- Input type text -->
                            <label for="date_naiss_enf" class="form-label required">Date de naissance</label>
                            <input type="date" class="form-control form-control-sm" min="<?=$date->format("Y")-5?>-01-01" max="<?=$date->format("Y")-1?>-12-31" name="date_naiss_enf" id="date_naiss_enf">
                        </div>
    
                        <div class="col-md-3 mb-3">
                            <!-- select -->
                            <label for="genre_enf" class="form-label">Genre</label>
                            <select class="form-select" name="genre_enf" id="genre_enf">
                                <option value="garçon">Garçon</option>
                                <option value="fille">Fille</option>
                            </select>
                        </div>
                    </div>
                    
                </div>
    
                <button type="button" class="btn btn-success btn-sm btn_add_enf" name="btn_add_enf" id="btn_add_enf">Ajouter</button>
                
                <table class="table mt-2 mb-2" > 
                        <tr>
                            <th>Nom</th>
                            <th>Prénom</th>
                            <th>Date naissance</th>
                            <th>Genre</th>
                            <th>Action</th>
                        </tr>
                        <tbody id="table_enf">

                        </tbody>
                    </table>
                <!-- columns -->
                <div class="form-group">
                    <div class="row align-items-center">
                        <div class="col-md-3 mb-3">
                            <!-- Input type text -->
                            <label for="nom_parent" class="form-label required">Nom parent</label>
                            <input type="text" class="form-control form-control-sm" name="nom_parent" id="nom_parent">
                        </div>
    
                        <div class="col-md-3 mb-3">
                            <!-- Input type text -->
                            <label for="adress_parent" class="form-label required">Adresse</label>
                            <input type="text" class="form-control form-control-sm" name="adress_parent" id="adress_parent">
                        </div>
    
                        <div class="col-md-3 mb-3">
                            <!-- Input type text -->
                            <label for="cin_parent" class="form-label required">CIN</label>
                            <input type="number" class="form-control form-control-sm" name="cin_parent" id="cin_parent">
                        </div>
    
                        <div class="col-md-3 mb-3">
                            <!-- Input type text -->
                            <label for="contact_parent" class="form-label required">Contact</label>
                            <input type="number" class="form-control form-control-sm" name="contact_parent" id="contact_parent">
                        </div>
                    </div>
                </div>
    
                <button type="button" class="btn btn-primary btn-sm btn_add_enf_info" name="btn_add_enf_info" id="btn_add_enf_info">Enregistrer</button>
            </form>

    </div>
    </div>
    
     <?php
    $css = "inscrit.css";
    $content = ob_get_clean();
    require './include/template.php'
    ?>
<!-- </body>
</html> -->