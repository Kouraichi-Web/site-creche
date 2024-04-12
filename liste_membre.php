<?php 
session_start();
if (!$_SESSION['user_info']) {
  header("Location:./login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./Assets/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="./Assets/vendor/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="./Assets/vendor/Confirme/jquery-confirm.min.css">
    <title>Liste des membres | petit ange</title>
</head>
<body>
  <div class="text-end mt-3"><a href="./deconnection.php" class="btn btn-primary "><i class="fa fa-sign-out"></i> Deconnection</a></div>
    <div class="container">
        <h1 class="text-center">
            Liste des membres
        </h1>

        <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nom</th>
      <th scope="col">Tel</th>
      <th scope="col">Nombre d'enfant</th>
      <th scope="col" width="25%">Action</th>
    </tr>
  </thead>
  <tbody id="table_membre">
    
  </tbody>
</table>

    </div>
    <script src="./Assets/vendor/jquery/jquery.min.js"></script>
    <script src="./Assets/vendor/Confirme/jquery-confirm.min.js"></script>
    <script src="./model/js/liste_membre.js"></script>
</body>
</html>