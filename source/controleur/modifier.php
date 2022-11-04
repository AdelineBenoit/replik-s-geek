<?php
require("../../connect.php");
require("../vue/head.php");
require("../vue/vueModifier.php");
$posts = modifier();
require("../model/modelModifier.php");
$post = mModifier("");
// require("../vue/footer.php");