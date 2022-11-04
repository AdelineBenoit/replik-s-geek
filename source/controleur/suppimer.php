<?php
require("../../connect.php");
require("../vue/head.php");
require("../vue/vueSupprimer.php");
$posts = vueSupprimer();
require("../model/modelSupprimer.php");
$posts = mSupprimer();
// require("../vue/footer.php");