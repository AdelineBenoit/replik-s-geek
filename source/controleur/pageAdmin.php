<!-- page admin  -->
<?php
require("../../connect.php");
require("../vue/head.php");
require("../vue/vuePageAdmin.php");
$posts = pageAdmin();
require("../model/modelPageAdmin.php");
$posts =pAdmin();
require("../vue/footer.php");
