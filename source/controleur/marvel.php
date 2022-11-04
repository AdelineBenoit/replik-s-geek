<?php 
require("../../connect.php");
require("../vue/head.php");
require("../vue/vueMarvel.php");
$post = vueMarvel();
require("../model/modelMarvel.php");
$post = mMarvel();
require("../vue/footer.php");