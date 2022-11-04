<?php
require ("../../connect.php");
require("../vue/head.php");
require("../vue/vueConsulter.php");
$posts = vConsulter();
require("../model/modelConsulter.php");
$posts = mConsulter();
// require("../vue/footer.php");