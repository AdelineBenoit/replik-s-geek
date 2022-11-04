<?php
session_start();
// use Play\DotEnv;
(new DotEnv('../.env'))->load();
function thankM(){
    $server = $_ENV["server"];
    $user = $_ENV["user"];
    $password = $_ENV["password"];
    $bdd = $_ENV["bdd"];
$name=$_GET['NAME_CUSTOMER'];
$firstName=$_GET['FIRST_NAME_CUSTOMER'];
$tel=$_GET['TEL_CUSTOMER'];
$mail=$_GET['MAIL_CUSTOMER'];
//connecting to the database
$customer = "SELECT MAIL_CUSTOMER FROM CUSTOMER WHERE MAIL_CUSTOMER = '".$mail."'";
// create insert to table
try {
    $connexion = new PDO('mysql:host=' . $server . ';dbname=' . $bdd, $user, $password);
    $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $datas = $connexion->query($customer);
    $datas = $datas->fetch();
    //condition for create customer in database
    if(!$datas){
        $sql = 'INSERT INTO `CUSTOMER` (`NAME_CUSTOMER`,`FIRST_NAME_CUSTOMER`,`TEL_CUSTOMER`,`MAIL_CUSTOMER`) VALUES("'.$name.'","'.$firstName.'",'.$tel.',"'.$mail.'")';
        // var_dump($sql);
        $datas = $connexion->query($sql);    
    }else{
        var_dump('Le profil existe déja !');
    }
    $connexion = null;
    // var_dump($datas);
echo "Bonjour ". $firstName . ", nous vous répondrons dans les plus brefs délais.";
}
catch (PDOException $error) {
    echo 'n° ' . $error->getCode() . '<br/>';
    die('Erreur : ' . $error->getMessage() . '<br/>');
}
}

