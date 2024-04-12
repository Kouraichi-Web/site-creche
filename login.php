<?php
include "./config/database.php";
session_start();
if(isset($_SESSION['user_info'])){
    header("Location:./liste_membre.php");
}
$messg = null;
if(isset($_POST['identifiant'])){
    $id = $_POST['identifiant'];
    $mdp = $_POST['mdp'];

    $request = $connection ->prepare("SELECT * FROM `user` WHERE `identifiant` = :id and `mot_de_passe`= :mdp");
    $request->bindParam(":id",$id);
    $request->bindParam(":mdp",$mdp);
    $request->setFetchMode(PDO::FETCH_OBJ);
    $request->execute();
    $result = $request->fetchAll();
    if (count($result)>0) {
        $_SESSION['user_info']['id'] = $result['identifiant'];
        $_SESSION['user_info']['mdp'] = $result['mot_de_passe'];
        header('Location:./liste_membre.php');
    }else{
        $messg = "Identifiant non trouvé";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./Assets/vendor/bootstrap/css/bootstrap.min.css">
    <title>Connection</title>
</head>
<body>
    <div class="d-flex align-items-center justify-content-center vh-100" style="background-image:url(./Assets/image/conta4ct.jpg);background-size:cover;">
        <div class="bg-light rounded p-4 w-25" >
            <form action="" method="POST">
            
            <h2>Se connecter</h2>
            <div class="mb-3">
                <label for="identifiant" class="form-label">Identifiant</label>
                <input type="text" class="form-control" id="identifiant" name="identifiant">
            </div>
            <div class="mb-3">
                <label for="mdp" class="form-label">Mot de passe</label>
                <input type="password" class="form-control mdp" id="mdp" name="mdp">
            </div>
            <?php if($messg!=null): ?>
                <div class="alert alert-danger" role="alert">
                    <?=$messg?>
                </div>
            <?php endif; ?>
            <div class="text-center">
                <button type="submit" class="btn btn-primary" >
                Connection
            </button>
            </div>
            <div class="mt-3">
                <a href="">Mot de passe oublié?</a>
            </div>
            
            
        </form>
        </div>
    </div>
</body>
</html>