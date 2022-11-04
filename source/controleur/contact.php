
<?php
require("../../connect.php");
require("../vue/head.php");
require("../vue/vueContact.php");
$posts = vContact();
require("../model/modelContact.php");
$posts = mContact("");
require("../vue/footer.php");



