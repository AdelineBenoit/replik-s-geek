<?php
// securité 
session_start();
// ouverture de la base de donnee 
(new DotEnv('../.env'))->load();
function mModifier2(){
    // recuperation des valeur de connexion de la base de donnée 
    $server = $_ENV["server"];
    $user = $_ENV["user"];
    $password = $_ENV["password"];
    $bdd = $_ENV["bdd"];
    // recuperation des valeur dans les colonnes souhaitée de la base de donnee
    $ref = $_GET['REF_PRODUCT'];
    $name = $_GET['NAME_PRODUCT'];
    $des = $_GET['DESCRIPTION_PRODUCT'];
    $prix = $_GET['PRIX_PRODUCT'];  
    // requête  pour envoyé les valeur selectionnées vers la base de donnée       
    $modif ="UPDATE `PRODUCT` SET NAME_PRODUCT= '$name' , DESCRIPTION_PRODUCT =  '$des' , PRIX_PRODUCT =  '$prix' WHERE REF_PRODUCT = '$ref'";
    // ouverture de la base de donnée 
    try {
        $connexion = new PDO('mysql:host=' . $server . ';dbname=' . $bdd, $user, $password);
        $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $resultat = $connexion->query($modif);
        $datas = $resultat->fetch(2);
        if($modif){
            // modification de la base de donnee 
      
            $modif ="UPDATE `PRODUCT` SET NAME_PRODUCT= '$name' , DESCRIPTION_PRODUCT =  '$des' , PRIX_PRODUCT =  '$prix' WHERE REF_PRODUCT = '$ref'";
            // message de reussite de modification
            echo  "modifié";
            header('Refresh: 1; URL=http://repliksgeek/source/controleur/consulter.php');
        }
        else{
            // message d'erreur si le produit n'a pas ete modifie
            echo "pas modifié";
        }
}
// message d'erreur si la connexion à la base de donnée a echouée
     catch (PDOException $error) {
        echo 'n° ' . $error->getCode() . '<br/>';
        die('Erreur : ' . $error->getMessage() . '<br/>');
    
}  
} 