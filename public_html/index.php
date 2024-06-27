<?php
include("../private_html/php/elements.php");
page_header("Accueil");
?>
    <!-- bordure noire -->
    <div class="section1">
        <br>
        <article class="bordure_noir">
            <!--Slider -->
            <div class="slider-container">
                <div class="slider">
                    <img src="../Image/Slider_principal/slide1.jpg" alt="Slide 1" class="active">
                    <img src="../Image/Slider_principal/slide2.jpg" alt="Slide 2">
                    <img src="../Image/Slider_principal/slide3.jpg" alt="Slide 3">
                    <div class="slider-arrow slider-arrow-left"></div>
                    <div class="slider-arrow slider-arrow-right"></div>
                </div>
                <div class="slider-text"></div>
                <div class="slider-text2"></div>
            </div>
        </article>
        <br>
    </div>
    <br>

    <!--Bouton contact-->
    <div class="section2">
        <br> <br><br><br> <br><br>
        <article class="boutoncontact">
            <a href="../HTML/Contact.html"> Contact</a>
        </article>
        <article class="reseaux-sociaux">
            <article class="photo_facebook">
                <a href="https://www.facebook.com/profile.php?id=100094623031909">
                    <img src="../Image/logo_facebook.jpg">
                </a>
            </article>
            <article class="photo_insta">
                <a href="https://www.instagram.com/maxime_claudel_/">
                    <img src="../Image/logo_insta.jpg">
                </a>
            </article>
            <article class="photo_youtube">
                <a href="https://www.youtube.com/channel/UCtnN6MMpCLYitfoZRJ4Qaaw">
                    <img src="../Image/youtube.jpg">
                </a>
            </article>
            <article class="tiktok">
                <a href="https://www.tiktok.com/@mcmagic98">
                    <img src="../Image/tiktok.jpg">
                </a>
            </article>
        </article>
    </div>

    <!-- Vidéo-->
        <div class="section3">
            <article class="support_vid"> <br><!--
                <iframe src="https://www.youtube.com/embed/bkrZmeuGMiM" title="Démonstration" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>--> <br><br><br>
            </article>
        </div>
        <br>
<?php page_footer(); ?>