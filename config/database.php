<?php
$hostName = 'host=localhost';
$userName = 'root';
$passWord = '';
$bdd = 'crech';

try {
    $connection = new PDO('mysql:'.$hostName.';dbname='.$bdd.';charset=utf8',$userName,$passWord);
    $connection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo $e->getMessage();
    $connection = null;
}

?>