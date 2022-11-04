<?php
function vueIndex()
{
?>
    <!-- navbar responsive  -->
    <img id="menu" src="../../image/menu- blanc..png" alt="Menu" />

    <nav class="navbar">
        <ul id="deroulantD">
            <li><a name="nav-accueil" href="./source/controleur/presentation.php">Qui nous sommes ?</a></li>
            <li><a name="nav-accueil" href="./source/controleur/contact.php">Contact</a></li>
            <li><a name="nav-accueil" href="./source/controleur/produit.php">Nos produits</a></li>
        </ul>
    </nav>
    <!-- create slide  -->
    <div class="d1"></div>
    <div class="conteneur">
        <div class="d2">
            <img class="imageSmall" src="../../image/mario.jpg" alt="image d'accueil" />

        </div>
    </div>
    <!-- image telephone   -->


    <!-- logo des sections  -->
    <div>
        <div class="logoTitre">
            <ul>
                <li><a href="../source/controleur/disney.php"><img class="logo1" src="../../image/logo-disney.jpg" alt="disney"></a></li>
                <li><a href="../source/controleur/marvel.php"><img class="logo1" src="../../image/logo-marvel.jpg" alt="marvel"></a></li>
                <li><a href="../source/controleur/pixar.php"><img class="logo1" src="../../image/logo-pixar.jpg" alt="pixar"></a></li>
                <li><a href="../source/controleur/promo.php"><img src="../../image/logo-promo.jpg" class="promo" alt="promo"></a></li>
            </ul>
        </div>
    </div>
    <script src="index.js"></script>
<?php
} ?>