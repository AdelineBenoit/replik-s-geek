<!-- page thank  -->
<?php
require("../../connect.php");
require("../vue/head.php");
require("../vue/vueThank.php");
$posts = thank();
require("../model/modelThank.php");
$posts =thankM();
require("../vue/footer.php");
