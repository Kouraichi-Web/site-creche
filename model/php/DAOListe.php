<?php
include "../../config/database.php";

if(isset($_POST['SELECT_MEMBRE'])){
    if(isset($_POST['id'])){
        $id = $_POST['id'];
        $request = $connection ->prepare("SELECT * FROM `enfant` WHERE `id_parent` = :id");
        $request->bindParam(":id",$id);
    }elseif(isset($_POST['id_parent'])){
        $id = $_POST['id_parent'];
        $request = $connection ->prepare("SELECT * FROM `parent` WHERE `id_parent` = :id");
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

if(isset($_POST['EDIT_MEMBRE'])){
    // Info parents
    // nom,cin_parent,contact,adress, id_parent
    $id = $_POST["id_parent"];
    $nom_parent = $_POST["nom"];
    $adress_parent = $_POST["adress"];
    $cin_parent = $_POST["cin_parent"];
    $contact_parent = $_POST["contact"];


    $request_parent = $connection->prepare("UPDATE `parent` SET `nom_parent`=:nom_parent,`cin_parent`=:cin_parent,`adress_parent`=:adress_parent,`tel_parent`=:tel_parent WHERE `id_parent` = :id");

    $request_parent->bindParam(":id",$id);
    $request_parent->bindParam(":nom_parent",$nom_parent);
    $request_parent->bindParam(":cin_parent",$cin_parent);
    $request_parent->bindParam(":tel_parent",$contact_parent);
    $request_parent->bindParam(":adress_parent",$adress_parent);

    $result = $request_parent ->execute();

    if($result>0){
        echo 'success';
    }else{
        echo 'echec';
    }
}