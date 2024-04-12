<?php
include "../../config/database.php";

if(isset($_POST['INSERT_INFO_ENF'])) {

    // Info enfant
    $listes_enfants = json_decode($_POST['listes_enfants']);
    $nombre_enf = count($listes_enfants);
    $id_parent_inserted = 0;
    
    // Info parents
    $nom_parent = $_POST["nom_parent"];
    $adress_parent = $_POST["adress_parent"];
    $cin_parent = $_POST["cin_parent"];
    $contact_parent = $_POST["contact_parent"];

    $connection->beginTransaction();

    $request_parent = $connection->prepare("INSERT INTO `parent`( `nom_parent`, `cin_parent`, `nombre_enf`, `tel_parent`) VALUES (:nom_parent,:cin_parent, :nombre_enf, :tel_parent)");

    $request_parent->bindParam(":nom_parent",$nom_parent);
    $request_parent->bindParam(":cin_parent",$cin_parent);
    $request_parent->bindParam(":tel_parent",$contact_parent);
    $request_parent->bindParam(":nombre_enf",$nombre_enf);
    $request_parent->execute();
    $id_parent_inserted = $connection->lastInsertId();
    foreach ($listes_enfants as $liste_enfant){
        $request_enfant = $connection->prepare('INSERT INTO `enfant`( `nom_enf`, `prenom_enf`, `date_naiss`, `genre`, `id_parent`) VALUES (:nom_enf, :prenom_enf,:date_naiss,:genre,:id_parent)');
        $request_enfant->bindParam(":nom_enf",$liste_enfant->nom);
        $request_enfant->bindParam(":prenom_enf",$liste_enfant->prenom);
        $request_enfant->bindParam(":date_naiss",$liste_enfant->date_naiss);
        $request_enfant->bindParam(":genre",$liste_enfant->genre);
        $request_enfant->bindParam(":id_parent",$id_parent_inserted);
        $result = $request_enfant->execute();
    }
    
    if($connection->commit()){
    echo "success";
    }else {
        echo "echec";
    }
    $request_enfant->closeCursor();
    $request_parent->closeCursor();
    
}