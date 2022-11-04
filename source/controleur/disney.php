<?php
require("../../connect.php");
require("../vue/head.php");
require("../vue/vueDisney.php");
$posts = vueDisney();
require("../model/modelDisney.php");
$posts = mDisney();
require("../vue/footer.php");