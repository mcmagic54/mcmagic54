<?php
// Inclusion des éléments récurrents comme l'en-tête via un fichier PHP
include("../private_html/php/elements.php");
// Fonction personnalisée pour générer l'en-tête de la page avec le titre "Accueil"
page_header("Accueil | Maxime CLAUDEL");
?>

<!-- Section principale de la page d'accueil -->
<section class="accueil">
    <!-- Ajout d'une bordure noire pour styliser la section principale -->
    <div class="bordure_noir">
        <!-- Slider principal pour le texte d'accueil -->
        <div class="slider accueil-text">
            <!-- Première diapositive du slider -->
            <div class="active slide">Bienvenue sur mon site ceci est un test pour la détructions</div>
            <!-- Deuxième diapositive du slider -->
            <div class="slide">Un magicien près de vous mais pas que iiiiiiiiiiii ...</div>
            <!-- Troisième diapositive du slider -->
            <div class="slide">Collectivité, professionnelle, Anniversaires...</div>
        </div>

        <!-- Slider pour les images d'accueil -->
        <div class="slider accueil-img">
            <!-- Image 1 du slider avec une classe active pour la rendre visible par défaut -->
            <img src="/Image/Slider_principal/slide1.jpg" alt="Slide 1" class="active slide">
            <!-- Image 2 du slider -->
            <img src="/Image/Slider_principal/slide2.jpg" alt="Slide 2" class="slide">
            <!-- Image 3 du slider -->
            <img src="/Image/Slider_principal/slide3.jpg" alt="Slide 3" class="slide">
            <!-- Flèches de navigation pour le slider -->
            <div class="slider-arrow slider-arrow-left">&lt;</div>
            <div class="slider-arrow slider-arrow-right">&gt;</div>
        </div>

        <!-- Slider secondaire pour plus de texte descriptif -->
        <div class="slider accueil-text">
            <div class="active slide">Bonjour, je me présente. Je suis Maxime CLAUDEL, magicien à votre service</div>
            <div class="slide">Un magicien pour de la magie rapprochée, pensez au close-up</div>
            <div class="slide">Découvrez la magie et ses spécialités (cartes, sculpture de ballon, magie classique)</div>
        </div>
    </div>
</section>

<!-- Inclusion des icônes ou liens vers les réseaux sociaux -->
<?php reseaux_sociaux(false, true); ?>


    
    <section class="dark">


        <article class="left"> <!-- démonstration vidéo intégrée -->
            <!-- Intégration d'une vidéo YouTube via iframe -->
            <iframe title="Démonstration" src="https://www.youtube.com/embed/bkrZmeuGMiM" frameborder="0" allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </article>

        <article class="right">
            <div class="avis ">
                <div>
                 <img src="/Image/avistest.png">
                </div>
            </div>


        </article>
    </section>











<!-- Titre de la section des clients ayant fait confiance au magicien -->
<h1 class="fontslidelogo">- - - Ils nous ont fait confiance - - -</h1>
<div class="border">
<!-- Section listant les logos des clients dans un slider horizontal -->
<section class="Nous ont fait confiance">
    
        <div class="Slider-client">
            <div class="marquee-content">
                <!-- Logos de la première boucle -->
                <img src="/Image/sliderclientpart/o2.jpg" alt="Logo 1">
                <img src="/Image/sliderclientpart/nmeinternational.jpg" alt="Logo 2">
                <img src="/Image/sliderclientpart/logomarangesilv.jpg" alt="Logo 3">
                <img src="/Image/sliderclientpart/o2.jpg" alt="Logo 4">
                <img src="/Image/sliderclientpart/nmeinternational.jpg" alt="Logo 5">
                <img src="/Image/sliderclientpart/logomarangesilv.jpg" alt="Logo 6">
                <img src="/Image/sliderclientpart/o2.jpg" alt="Logo 7">
                <img src="/Image/sliderclientpart/nmeinternational.jpg" alt="Logo 8">
                <img src="/Image/sliderclientpart/logomarangesilv.jpg" alt="Logo 9">
                <img src="/Image/sliderclientpart/o2.jpg" alt="Logo 10">
                <img src="/Image/sliderclientpart/nmeinternational.jpg" alt="Logo 11">
                <img src="/Image/sliderclientpart/logomarangesilv.jpg" alt="Logo 12">
            </div>
            <div class="marquee-content duplicate">
                    <!-- Logos de la première boucle -->
                    <img src="/Image/sliderclientpart/o2.jpg" alt="Logo 1">
                <img src="/Image/sliderclientpart/nmeinternational.jpg" alt="Logo 2">
                <img src="/Image/sliderclientpart/logomarangesilv.jpg" alt="Logo 3">
                <img src="/Image/sliderclientpart/o2.jpg" alt="Logo 4">
                <img src="/Image/sliderclientpart/nmeinternational.jpg" alt="Logo 5">
                <img src="/Image/sliderclientpart/logomarangesilv.jpg" alt="Logo 6">
                <img src="/Image/sliderclientpart/o2.jpg" alt="Logo 7">
                <img src="/Image/sliderclientpart/nmeinternational.jpg" alt="Logo 8">
                <img src="/Image/sliderclientpart/logomarangesilv.jpg" alt="Logo 9">
                <img src="/Image/sliderclientpart/o2.jpg" alt="Logo 10">
                <img src="/Image/sliderclientpart/nmeinternational.jpg" alt="Logo 11">
                <img src="/Image/sliderclientpart/logomarangesilv.jpg" alt="Logo 12">
            </div>
        </div>
        </div class="border">
</section>

<!-- Inclusion du pied de page via une fonction PHP personnalisée -->
<?php page_end(); ?>
