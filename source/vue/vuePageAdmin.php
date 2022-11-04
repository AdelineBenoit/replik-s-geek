<?php
function pageAdmin(){
?>
<a class="return" href="../../index.php">Retour</a>
<div class="titre">
    <h3 class="title">Bienvenue sur le site Administration de Replik's Geek !</h3>
</div>
<form id="formAdmin" method="get" action ="../controleur/crud.php">
    <p>LOGIN*</p>
    <input required name="LOGIN_ADMIN" type="text">
    <p>PASSWORD*</p>
    <input required name="PASSWORD_ADMIN" type="password"></br>
    <input id="btnSend" class="button" type="submit" value="Valider">
    <input id="btnReset" class="button" type="reset" value="Accueil">
    <p name="required">champs obligatoires</p>
</form>
<?php
}
?>