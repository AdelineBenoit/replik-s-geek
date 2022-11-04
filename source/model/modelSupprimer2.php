<?php
session_start();
// use Play\DotEnv;
(new DotEnv('../.env'))->load();
function mSupprimer2(){
    $server = $_ENV["server"];
    $user = $_ENV["user"];
    $password = $_ENV["password"];
    $bdd = $_ENV["bdd"];
$delete =$_GET["delete"];
$product = "SELECT *  FROM `PRODUCT`";    
$supprime= "DELETE FROM PRODUCT WHERE `REF_PRODUCT` = $delete";         
// connecting to database 
try {
    $connexion = new PDO('mysql:host=' . $server . ';dbname=' . $bdd, $user, $password);
    $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $resultat = $connexion->query($product);
    $datas = $resultat->fetchAll();
    // execut requete delete
    $resultat2 = $connexion->query($supprime);
    $datas2 = $resultat2->fetchAll();
    $connexion = null;
    // boucle for delete product
    $bool=false;
    foreach ($datas as $el){
        // var_dump($datas);
        
        
        $delete = $el[1];
        if ($delete === $_GET["delete"]){
            $bool= true;
            // echo $supprime;
            break;
        }
    }
    // bool true 
        if($bool){
            echo  "Référence supprimée " . $bool;
        }
        // bool false 
        else {
            echo "Référence incorrect.";
        }
    }
    // error 
catch (PDOException $error) {
    echo 'n° ' . $error->getCode() . '<br/>';
    die('Erreur : ' . $error->getMessage() . '<br/>');
}
}