<!-- connect to the database  -->
<?php
session_start();
// use Play\DotEnv;
(new DotEnv('../.env'))->load();
function mContact(){
$server = $_ENV["server"];
$user = $_ENV["user"];
$password = $_ENV["password"];
$bdd = $_ENV["bdd"];
// sort moi tout ce qu'il y a sur le client 
    $adherent = "SELECT * FROM customer";
    try {
        $connexion = new PDO('mysql:host=' . $server . ';dbname=' . $bdd, $user, $password);
        $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $resultat = $connexion->query($adherent);
        $datas = $resultat->fetchAll();
        $connexion = null;
        // var_dump($datas);
        if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $nom = $_POST["NAME_CUSTOMER"];
        $prenom = $_POST["FIRST_NAME_CUSTOMER"];
        $mail = $_POST["MAIL_CUSTOMER"];
        $tel = $_POST["TEL_CUSTOMER"];
        // $messageText = $_POST["MESSAGE"];

        $to      = 'cindykevinhaboury@hotmail.com';
        $subject = 'formContact';
        $message = 'Nom : ' .$nom. ' Prenom : ' .$prenom. ' Tel : ' .$tel. "\n";
        $headers = 'From: '.$mail. "\r\n" .
                  'Reply-To: ' .$mail . "\r\n" .
                  'X-Mailer: PHP/' . phpversion();
     mail($to, $subject, $message, $headers);
        }
    } catch (PDOException $error) {
        echo 'n° ' . $error->getCode() . '<br/>';
        die('Erreur : ' . $error->getMessage() . '<br/>');
    }
}
