<?php
session_start();
// use Play\DotEnv;
(new DotEnv('../.env'))->load();
function mConsulter(){
$server = $_ENV['server'];
$user = $_ENV['user'];
$password =$_ENV['password'];
$bdd = $_ENV['bdd'];
$ad = "SELECT * FROM `product`";
try {
    $connexion = new PDO('mysql:host=' . $server . ';dbname=' . $bdd, $user, $password);
    $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $resultat = $connexion->query($ad);
    $datas = $resultat->fetchAll();
    $connexion = null;
    // var_dump($datas);
    foreach ($datas as $el){
        // var_dump($el);
        echo "<tr><td class='line'> ".$el[1] . "</td>";
        echo "<td class='line'> ".$el[2] . "</td>";
        echo "<td class='line'> ".$el[3]. "</td>";
        echo "<td class='line'> ".$el[4] . "€</td>";
        // echo "<td class='line'><a href='image.php?".$el[0]."</td></tr>";
        echo "<td class='line'><button><a class='modifier' href='../controleur/modifier?REF_PRODUCT=".$el[1] ."&NAME_PRODUCT=".$el[2] ."&DESCRIPTION_PRODUCT=".$el[3] ."&PRIX_PRODUCT=".$el[4]."'>modifier</a></button></td></tr>";
        
    }
} 
catch (PDOException $error) {
    echo 'n° ' . $error->getCode() . '<br/>';
    die('Erreur : ' . $error->getMessage() . '<br/>');
}
echo "</table>";
}
?>