</div>
<div class="clear"></div>
<div class="footer">
<div>
<p id="reseau">Venez visiter mes réseaux sociaux</p>
<a href="https://www.instagram.com/repliksgeek/?hl=fr"><img src="../../image/logo-instagram.webp" class="reseau" alt="insérer la description ici"></a>
<a href="https://www.facebook.com/RepliksGeek/"><img src="../../image/logo facebook.jpg" class="reseau" alt="facebook"></a>
</div>
<div>
        <?php
        echo "Le :" . date("d.m.y");
        echo '<br>';
        date_default_timezone_set("europe/paris");
        echo " Il est :" . date("H:i:s");
        ?>
</div>
</div>

</body>

</html>