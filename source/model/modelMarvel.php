<?php
session_start();
// use Play\DotEnv;
(new DotEnv('../.env'))->load();
function mMarvel(){
    $server = $_ENV["server"];
    $user = $_ENV["user"];
    $password = $_ENV["password"];
    $bdd = $_ENV["bdd"];
$marvel = "SELECT NAME_PRODUCT, DESCRIPTION_PRODUCT, PRIX_PRODUCT,IMAGE_PRODUCT FROM product WHERE CAT_PRODUCT = 'marvel'";
//connecting to the database
// create insert to table  
try {
    $connexion = new PDO('mysql:host=' . $server . ';dbname=' . $bdd, $user, $password);
    $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $datas = $connexion->query($marvel);
    $datas = $datas->fetchAll();
    // var_dump($datas);
    // boucle pour mettre mes elements de ma base de donnee dans un tableau et pourvoir les exploitées
    foreach ($datas as $el){
    echo "<tr><td class=line>" . $el[0] . "</td>";
    echo "<td class=line>" . $el[1] . "</td>";
    echo "<td class=line>" . $el[2] . " €</td>";
    echo "<td class='line'> <img class='photoProduit' src='../../". $el[3]."' ></td></tr>";
}
}
catch (PDOException $error) {
    echo 'n° ' . $error->getCode() . '<br/>';
    die('Erreur : ' . $error->getMessage() . '<br/>');
}
echo "</table>";
}