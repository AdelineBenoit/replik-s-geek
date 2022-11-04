<?php
require("../../connect.php");
require("../vue/head.php");
require("../vue/vueAjouter.php");
$posts = ajouter();
require("../model/modelAjouter.php");
$post = mAjouter();
// require("../vue/footer.php");