<?php
include("../../private_html/php/elements.php");
page_header("Contact", array("formulaire.css"));
?>
<section id="contact">
    <div class="container">
        <div class="title">
            <h6>Une Question ? Un Conseil ? Un Devis ?</h6>
            <h3> Contactez-nous !!!</h3>
        </div>
        <form action="../php/traitement.php" method="post">
            <input type="text" name="name" placeholder="Entrer votre nom..." required class="nom-famille">
            <input type="email" name="email" placeholder="Entrer votre email..." required class="email">
            <input type="tel" name="telephone" placeholder="Numéro de téléphone..." required class="num">
            <input type="text" name="sujet" placeholder="Entrer le sujet..." required class="subject">
            <input type="text" name="nature" placeholder="La nature de l'évenement..." required class="nature">
            <input name="date" type="date" required class="date">
            <textarea class="message" name="message" placeholder="Entrer votre message"></textarea>
            <button class="submit-btn" type="submit">Envoyer</button>
        </form>
    </div>
</section>
<?php page_footer(); ?>