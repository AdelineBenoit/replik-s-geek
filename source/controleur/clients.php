<?php
require("../../connect.php");
require("../vue/head.php");
require("../vue/vueCLient.php");
$posts = vueClient();
require("../model/modelClient.php");
$posts = modelClient();
require("../vue/footer.php");