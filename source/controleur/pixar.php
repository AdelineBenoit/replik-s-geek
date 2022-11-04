<?php
require("../../connect.php");
require("../vue/head.php");
require("../vue/vuePixar.php");
$post = vuePixar();
require("../model/modelPixar.php");
$post= mPixar();
require("../vue/footer.php");