<?php
include("../../private_html/php/elements.php");
page_header("Contact");
?>
<section id="contact">
    <form action="/php/traitement.php" method="post">
        <h6>Une Question ? Un Conseil ? Un Devis ?</h6>
        <h3>Contactez-nous !!!</h3>
        <input type="text" name="name" placeholder="Entrez votre nom..." required class="nom-famille">
        <input type="email" name="email" placeholder="Entrez votre email..." required class="email">
        <input type="tel" name="telephone" placeholder="Numéro de téléphone..." required class="num">
        <input type="text" name="sujet" placeholder="Entrez le sujet..." required class="subject">
        <input type="text" name="nature" placeholder="La nature de l'évenement..." required class="nature">
        <input name="date" type="date" required class="date" title="Date de l'évenement">
        <textarea name="message" rows=6 placeholder="Entrez votre message"></textarea>
        <div class="rgpd"><input type=checkbox required id="rgpd" /> <span for="rgpd">J'accepte les conditions d'utilisation</span></div>
        <input type="submit" value="Envoyer">
    </form>
</section>
<?php reseaux_sociaux(); ?>
<?php page_end(); ?>