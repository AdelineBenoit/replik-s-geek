<?php
require("../../connect.php");
require("../vue/head.php");
require("../vue/vuePromo.php");
$posts =vuePromo();
require("../model/modelPromo.php");
$posts = mPromo();
require("../vue/footer.php");