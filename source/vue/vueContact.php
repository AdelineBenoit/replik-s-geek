<?php
function vcontact()
{
?>
    <a class="return" href="../../index.php">Retour</a>
    <h1 class="title">Contact</h1>
    <p name="thank" class="thank">Merci de laisser vos coordonnées je vous recontacterai dans les plus brefs délais.</p>
    <!-- creating inputs to retrieve data  -->
    <div class="contact">
    <div class="form">
        <form method="get" action="../controleur/thank.php">
            <fieldset>
                <legend>
                    <p class="formContact">Inscription pour recevoir les promotions et autres avantages.</p>
                </legend>
                <p class="formContact">Nom*</p>
                <input required id="NAME_CUSTOMER" class="input-contact" type="text" name="NAME_CUSTOMER">
                <p class="formContact">Prénom*</p>
                <input required maxlength="10" id="FIRST_NAME_CUSTOMER" class="input-contact" type="text" name="FIRST_NAME_CUSTOMER">
                <p class="formContact">Téléphone</p>
                <input placeholder="0600000000" required id="TEL_CUSTOMER" max-lenght="10" class="input-contact" type="number" name="TEL_CUSTOMER">
                <p class="formContact">Mail*</p>
                <input required placeholder="repliks_geek@yahoo.fr" required id="MAIL_CUSTOMER" class="input-contact" type="mail" name="MAIL_CUSTOMER">
                <p class="required">*champs obligatoires</p>
            </fieldset>
            <div class="btnForm">
            <input class="btn-form" type="submit" value="Valider">
            <input class="btn-form" type="reset" value="Effacer">
        </div>
        </form>
    </div>
    <div class="monMail">
    <a id="monMail" href="mailto:RepliksGeek@hotmail.fr">Ou contactez moi directement !</a>
    </div></div>
    <script src="../script/contact.js"></script>
<?php
}
?>