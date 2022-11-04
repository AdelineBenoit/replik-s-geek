<?php 
session_start();

if(!isset($_SESSION['Adeline84'])){
    $_SESSION['Adeline84'] = array();
    session_destroy();
    header("Location: ../../index.php");
} else{
    
    header("Location: ../controleur/crud.php");
}

?>