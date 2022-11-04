<?php
function vueSupprimer(){
?>
<a class="return" href="../model/deconnexion.php">Déconnexion</a>
<h1 class="title">Supprimer</h1>
<form action="../controleur/supprimer2.php" method="get">
<p>réference*</p>
<input required name="delete" type="number">
<input type="submit"value="Supprimer">
<p name="required">champs obligatoire</p>
</form>
<table class="tableSup">
        <tr>
            <th class="line">Référence de l'article</th>
            <th class="line">Nom de l'article</th>
            <th class="line">Description</th>
            <th class="line">Prix</th>
            <th class="line">Photo de l'article</th>

        </tr>
<?php
}
?>