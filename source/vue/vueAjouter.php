<?php
function ajouter()
{
?>

<a name="return" class="return" href="../model/deconnexion.php">Déconnexion</a>
    <h1 class="title">Ajouter</h1>
    <form method="post" action="../controleur/ajouter2.php" enctype="multipart/form-data">
        <p>Référence</p>
        <input name="REF_PRODUCT" type="text">
        <p>Nom du produit</p>
        <input name="NAME_PRODUCT" type="text">
        <p>Description</p>
        <textarea name="DESCRIPTION_PRODUCT" type="textarea"></textarea>
        <p>Categorie</p>
        <input type="text" name="CAT_PRODUCT">
        <p>Prix</p>
        <input name="PRIX_PRODUCT" type="text"> </br>
        <p>Photo</p>
        <input type="file" name="img_upload">
        <input name="send" type="submit" value="Ajouter">
        <input name="reset" type="reset" value="Annuler">
    </form>
<?php
}
?>