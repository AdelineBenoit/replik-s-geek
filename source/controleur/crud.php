
<?php
require("../../connect.php");
require("../vue/head.php");
require("../model/modelCrud.php");
$post = crud();
require("../vue/vueStat.php");
$post = vueStat();
require("../model/modelStat.php");
$post = mStat();
require("../vue/footer.php");
