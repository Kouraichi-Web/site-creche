<?php
include "../../config/database.php";

if(isset($_POST['SELECT_MEMBRE'])){
    if(isset($_POST['id'])){
        $id = $_POST['id'];
        $request = $connection ->prepare("SELECT * FROM `enfant` WHERE `id_parent` = :id");
        $request->bindParam(":id",$id);
    }else{
    $request = $connection ->prepare("SELECT * FROM `parent` WHERE 1");

    }
   
    $request->setFetchMode(PDO::FETCH_OBJ);
    $request-> execute();
    $result = $request->fetchAll();
    $request ->closeCursor();
    if (count($result)>0) {
        echo json_encode($result);
    }else{
        echo("Erreur");
    }
}