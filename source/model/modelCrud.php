<?php
session_start();
// use Play\DotEnv;
(new DotEnv('../.env'))->load();
function crud(){
require "../vue/vueCrud.php";
$server = $_ENV["server"];
$user = $_ENV["user"];
$password = $_ENV["password"];
$bdd = $_ENV["bdd"];
$adherent = "SELECT FIRST_NAME_ADMIN,LOGIN_ADMIN, PASSWORD_ADMIN  FROM `administrateur` WHERE 1";
try {
    $connexion = new PDO('mysql:host=' . $server . ';dbname=' . $bdd, $user, $password);
    $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $resultat = $connexion->query($adherent);
    $datas = $resultat->fetchAll();
    $connexion = null;
    // var_dump($datas);
    $bool =false;
    foreach ($datas as $el){
        if ($el[1] === $_GET["LOGIN_ADMIN"] && $el[2] === $_GET["PASSWORD_ADMIN"]){
            $bool= true;
            break;
        }
    }
        if($bool){
            echo   "<h1 class='title'>Bonjour " .$el[0]. "</h1>" . nav();
        }
        else {
            echo "LOGIN et/ou PASSWORD incorrect.";
        }
    }
catch (PDOException $error) {
    echo 'n° ' . $error->getCode() . '<br/>';
    die('Erreur : ' . $error->getMessage() . '<br/>');
}
}