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
            <div class="active slide">Apportez une touche de magie à vos événements professionnels ! ✨</div>
            <!-- Deuxième diapositive du slider -->
            <div class="slide">Faites de vos événements privés un moment magique ! ✨</div>
            <!-- Troisième diapositive du slider -->
            <div class="slide">Offrez à votre communauté une expérience magique inoubliable ! ✨</div>
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
            <!--slide1-->
            <div class="active slide"> Offrez à vos clients et collaborateurs une expérience unique avec nos animations magiques : <br>
                <br>
                Bars et Restaurants : Dynamisez vos soirées avec du close-up. Des tours de magie réalisés directement à la table pour captiver vos clients et créer une ambiance mémorable. <br>
                Événements d’Entreprise : Célébrez vos séminaires, soirées d’entreprise ou lancements de produits avec un spectacle magique et interactif, idéal pour rassembler et divertir. <br>
                Des prestations sur mesure pour marquer les esprits et sublimer vos événements professionnels. <br>
                <br>
                📞 Contactez-nous dès aujourd’hui pour une animation magique qui fera toute la différence !
            </div>

            <!--Slide2-->
            <div class="slide">Rendez vos fêtes inoubliables avec nos animations magiques, adaptées à tous vos événements privés : <br>
                <br>
                Anniversaires Enfants et Adultes : Des tours spectaculaires et interactifs pour émerveiller vos invités. <br>
                Mariages : Ajoutez une touche d’élégance et de surprise à votre réception avec des performances magiques inoubliables. <br>
                Family Parties : Rassemblez petits et grands autour d’une expérience unique et conviviale. <br>
                Nos packs personnalisés garantissent une animation sur mesure, qui saura ravir tous vos convives. <br>
                <br>
                📞 Contactez-nous dès aujourd’hui pour organiser une fête magique et mémorable ! <br>
            </div>



            <!--Slide3-->
            <div class="slide"> <br>
                Transformez vos événements locaux en moments inoubliables avec nos animations magiques. <br>
                <br>
                Spectacles captivants : Une performance professionnelle qui mêle illusions, humour et interaction pour émerveiller petits et grands. <br>
                Ateliers ludiques : Initiez votre public à l’art de la magie et développez leur créativité lors d’une expérience unique et interactive. <br>
                Parfait pour les fêtes locales, événements culturels et activités éducatives. <br><br>
                📞 Contactez-nous dès aujourd’hui pour offrir à votre collectivité une expérience magique sur mesure !


            </div>
        </div>
    </div>
</section>

<!-- Inclusion des icônes ou liens vers les réseaux sociaux -->

<section class="sectionvid">
  <!-- Conteneur principal -->
  <div class="content-wrapper">
    <!-- Vidéo avec le fond noir -->
    <div class="blackfond">
      <iframe class="video" title="Démonstration" 
        src="https://www.youtube.com/embed/bkrZmeuGMiM" 
        frameborder="0" 
        allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
        allowfullscreen>
      </iframe>
    </div>

    <!-- Réseaux sociaux et bouton de contact -->
    <div class="reseaux-container">
      <div class="reseaux-sociaux">
        <?php reseaux_sociaux(false, true); ?>
      </div>
</section>

<section class="red">
<h1 class="googleavis">Les retours de nos clients :</h1>
    <div class="avis" id="reviews-container">
        <script>
            document.addEventListener("DOMContentLoaded", (event) => fetchGoogleReviews());
        </script>
    </div>

    <div id="reviews">
    </div>
    <div id="google-rating" style="text-align: center; margin-top: 20px;">
            <script>
                
                // Affichage de la note globale
                const ratingContainer = document.getElementById("google-rating");
                ratingContainer.innerHTML = `
                    <h2>Note Google</h2>
                    <p><strong>${data.result.rating} / 5</strong></p>
                `;
            </script>        
    </div>

    <div class="center">
        <a class="buttongoogle" href="https://g.page/r/CRCt9z0AZuC7EAE/review">Vous être client, donnez votre avis ... </a>
    </div>       
    </section>

<!-- Section listant les logos des clients dans un slider horizontal -->
<section>
    <!-- Titre de la section des clients ayant fait confiance au magicien -->
    <h1 class="fontslidelogo">Ils nous ont fait confiance</h1>
    <div class="Slider-client">
        <div class="marquee-content">
            <!-- Logos de la première boucle -->
            <img src="/Image/sliderclientpart/o2.jpg" alt="O2">
            <img src="/Image/sliderclientpart/nmeinternational.jpg" alt="N M E International">
            <img src="/Image/sliderclientpart/logomarangesilv.jpg" alt="Ville de Marange-Silvange">
            <img src="/Image/sliderclientpart/o2.jpg" alt="O2">
            <img src="/Image/sliderclientpart/nmeinternational.jpg" alt="N M E International">
            <img src="/Image/sliderclientpart/logomarangesilv.jpg" alt="Ville de Marange-Silvange">
            <img src="/Image/sliderclientpart/o2.jpg" alt="O2">
            <img src="/Image/sliderclientpart/nmeinternational.jpg" alt="N M E International">
            <img src="/Image/sliderclientpart/logomarangesilv.jpg" alt="Ville de Marange-Silvange">
            <img src="/Image/sliderclientpart/o2.jpg" alt="O2">
            <img src="/Image/sliderclientpart/nmeinternational.jpg" alt="N M E International">
            <img src="/Image/sliderclientpart/logomarangesilv.jpg" alt="Ville de Marange-Silvange">
        </div>
        <div class="marquee-content duplicate">
            <img src="/Image/sliderclientpart/o2.jpg" alt="O2">
            <img src="/Image/sliderclientpart/nmeinternational.jpg" alt="N M E International">
            <img src="/Image/sliderclientpart/logomarangesilv.jpg" alt="Ville de Marange-Silvange">
            <img src="/Image/sliderclientpart/o2.jpg" alt="O2">
            <img src="/Image/sliderclientpart/nmeinternational.jpg" alt="N M E International">
            <img src="/Image/sliderclientpart/logomarangesilv.jpg" alt="Ville de Marange-Silvange">
            <img src="/Image/sliderclientpart/o2.jpg" alt="O2">
            <img src="/Image/sliderclientpart/nmeinternational.jpg" alt="N M E International">
            <img src="/Image/sliderclientpart/logomarangesilv.jpg" alt="Ville de Marange-Silvange">
            <img src="/Image/sliderclientpart/o2.jpg" alt="O2">
            <img src="/Image/sliderclientpart/nmeinternational.jpg" alt="N M E International">
            <img src="/Image/sliderclientpart/logomarangesilv.jpg" alt="Ville de Marange-Silvange">
        </div>
    </div>
</section>
<?php
// Inclusion du pied de page via une fonction PHP personnalisée
page_end();
?>