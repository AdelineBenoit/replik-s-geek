
<?php
function nav(){
?>
<a class="return" href="../model/deconnexion.php">Déconnexion</a>
<nav name="NavAdmin">
    <a name="navAdmin" href="../controleur/ajouter.php" class="btn-nav">Ajouter un jeux</a>
    <a name="navAdmin" href="../controleur/suppimer.php" class="btn-nav">Supprimer un jeu</a>
    <a name="navAdmin" href="../controleur/consulter.php" class="btn-nav">Consulter  et/ou modifier la liste des articles</a>
    <a name="navAdmin" href="../controleur/clients.php" class="btn-nav">Consulter la liste des clients</a>
</nav>
<?php
}
?>