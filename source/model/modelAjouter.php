<?php
session_start();
// use Play\DotEnv;
(new DotEnv('../.env'))->load();
function mAjouter(){
$server = $_ENV["server"];
$user = $_ENV["user"];
$password = $_ENV["password"];
$bdd = $_ENV["bdd"];

//connecting to the database
$product = "SELECT * FROM product";
// create insert to table  
try {
    $connexion = new PDO('mysql:host=' . $server . ';dbname=' . $bdd, $user, $password);
    $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $datas = $connexion->query($product);
    $datas = $datas->fetch();
    $connexion =null;
}
catch (PDOException $error) {
    echo 'n° ' . $error->getCode() . '<br/>';
    die('Erreur : ' . $error->getMessage() . '<br/>');
}
}