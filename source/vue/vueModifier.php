<?php
function modifier(){
   $ref = $_GET['REF_PRODUCT'];
   $name = $_GET['NAME_PRODUCT'];
   $des = $_GET['DESCRIPTION_PRODUCT'];
   $prix = $_GET['PRIX_PRODUCT'];
?>
<a name="return" class="return" href="../model/deconnexion.php">Déconnexion</a>
<h1 class="title">Modifier</h1>
<form method="get" action="../controleur/modifier2.php?ref=".$ref>
    
<p>réference*</p>
<input name="REF_PRODUCT" type="text" value="<?= $ref ?>"  />
<p>Nom</p>
<input name="NAME_PRODUCT" type="text" value="<?= $name ?>"  />
<!-- <input name="NAME_PRODUCT" type="text"> -->
<p>Description</p>
<input name="DESCRIPTION_PRODUCT" type="text" value="<?= $des ?>"  />
<p>Prix</p>
<input name="PRIX_PRODUCT" type="text" value="<?= $prix ?>"  />
<input type="submit" value="modifier" />
</form>
<p name="*champs obligatoire">*champs obligatoires</p>
<?php
}
?>