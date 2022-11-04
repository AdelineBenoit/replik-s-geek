<?php
session_start();
// use Play\DotEnv;
(new DotEnv('../.env'))->load();
function pAdmin(){
    $server = $_ENV["server"];
    $user = $_ENV["user"];
    $password = $_ENV["password"];
    $bdd = $_ENV["bdd"];
$ad = "SELECT * FROM `administrateur`";
try {
    $connexion = new PDO('mysql:host=' . $server . ';dbname=' . $bdd, $user, $password);
    $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $resultat = $connexion->query($ad);
    $datas = $resultat->fetchAll();
    $connexion = null;
} catch (PDOException $error) {
    echo 'n° ' . $error->getCode() . '<br/>';
    die('Erreur : ' . $error->getMessage() . '<br/>');
}
}
?>