<!-- page produit  -->
<?php
require("../../connect.php");
require("../vue/head.php");
require("../vue/vueProduits.php");
$posts = produit();
require("../model/modelProduit.php");
$posts = mProduit();
require("../vue/footer.php");
