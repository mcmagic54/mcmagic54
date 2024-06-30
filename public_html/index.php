<?php
include("../private_html/php/elements.php");
page_header("Accueil");
?>
<section class="accueil">
    <div class="bordure_noir">
        <div class="slider accueil-text">
            <div class="active slide">Bienvenue sur mon site ceci est un test pour la détructions</div>
            <div class="slide">Un magicien près de vous mais pas que iiiiiiiiiiii ...</div>
            <div class="slide">Collectivité, professionelle, Annviersaires...</div>
        </div>
        <div class="slider accueil-img">
            <img src="/Image/Slider_principal/slide1.jpg" alt="Slide 1" class="active slide">
            <img src="/Image/Slider_principal/slide2.jpg" alt="Slide 2" class="slide">
            <img src="/Image/Slider_principal/slide3.jpg" alt="Slide 3" class="slide">
            <div class="slider-arrow slider-arrow-left">&lt;</div>
            <div class="slider-arrow slider-arrow-right">&gt;</div>
        </div>
        <div class="slider accueil-text">
            <div class="active slide">Bonjour, je me présente. Je suis Maxime CLAUDEL, magicien à votre service Bonjour, je me présente. Je suis Maxime CLAUDEL, magicien à votre service</div>
            <div class="slide">Un magicien pour de la magie rapprochée, pensez au close-up</div>
            <div class="slide">Découvrez la magie et ses spécialités (cartes, sculpture de ballon, magie classique)</div>
        </div>
    </div>
</section>
<?php reseaux_sociaux(false, true); ?>
<section class="dark">
    <article class="center">
        <iframe title="Démonstration" src="https://www.youtube.com/embed/bkrZmeuGMiM" frameborder="0" allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    </article>
</section>
<?php page_end(); ?>