<?php

function page_header($page_title)
{
    ?>
    <!DOCTYPE html>
    <html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="/styles/squeleton.css">
        <title>MCmagic | <?php echo $page_title; ?></title>
        <link rel="apple-touch-icon" sizes="180x180" href="/Image/Favicon/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/Image/Favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/Image/Favicon/favicon-16x16.png">
        <link rel="manifest" href="/Image/Favicon/site.webmanifest">
        <link rel="mask-icon" href="/Image/Favicon/safari-pinned-tab.svg" color="#5bbad5">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="theme-color" content="#ffffff">
    </head>
    <body>
    <header>
        <a href="/" class="logo">
            <img src="/Image/Logo.png">
            <h1>Maxime Claudel</h1>
            <h2>Magicien</h2>
        </a>
        <nav class="hidden">
            <ul>
                <li><a href="/">Accueil</a></li>
                <li>
                    <span title="Collectivité">Collectivité</span>
                    <ul>
                        <li>
                            <a href="/Pages/spectacle-show.php" title="Spectacle-show">Spectacle-show</a>
                        </li>
                        <li>
                            <a href="/Pages/initiation.php" title=" Initiations">Initiations</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <span title="Particulier">Particulier</span>
                    <ul>
                        <li>
                            <a href="../HTML/Anniversaire.html" title="Anniversaire ">Anniversaire Adultes </a>
                        </li>
                        <li>
                            <a href="../HTML/Anniversaire_enfant.html" title="Anniversaire ">Anniversaire Enfants</a>
                        </li>
                        <li>
                            <a href="../HTML/Mariage.html" title="Mariage">Mariage</a>
                        </li>
                        <li>
                            <a href="../HTML/family.html" title="Family party">Family party</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <span title="Professionel">Professionel</span>
                    <ul>
                        <li>
                            <a href="../HTML/spectacle.html" title="Spectacle">Spectacle</a>
                        </li>
                        <li>
                            <a href="../HTML/closeup.html" title="Close_up">Close up</a>
                        </li>
                        <li>
                            <a href="../HTML/resto.html" title="Restaurant">Restaurant</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <span title="Univers Ballons">Univers Ballons</span>
                    <ul>
                        <li>
                            <a href="../HTML/spectacleballon.html" title="Spectacle">Spectacle de Ballons</a>
                        </li>
                        <li>
                            <a href="../HTML/standballon.html" title="standballon">Stand Ballons</a>
                        </li>
                        <li>
                            <a href="../HTML/structure.html" title=" structure">Structure en Ballons</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="/Pages/Contact.php" title="Contact">Contact</a>
                </li>
            </ul>
        </nav>
        <img src="/Image/menu-btn.png" alt="Menu" id="menu-hamburger">
    </header><?php
}

function page_footer($dark_mode = true)
{
    ?>
        <footer <?php echo $dark_mode? 'class="dark-mode"' : "" ?>>
            <a class="button" href="/HTML/cgu.html">Conditions générales d'utilisations</a>
            <a class="button red-rounded" href="/Pages/Contact.php">Contact</a>
            <a class="button" href="/HTML/MLégal.html">Mentions légales</a>
        </footer>
        <script src="/scripts/burger.js"></script>
        <script src="/scripts/slider.js"></script>
    </body>
    </html>
    <?php
}
function reseaux_sociaux($dark_mode = true)
{
    ?>
    <section class="reseaux-sociaux<?php echo $dark_mode? " dark-mode" : "" ?>">
        <a href="https://www.facebook.com/profile.php?id=100094623031909">
            <img src="/Image/logo_facebook.png">
        </a>
        <a href="https://www.instagram.com/maxime_claudel_/">
            <img src="/Image/logo_insta.png">
        </a>
        <a href="https://www.youtube.com/channel/UCtnN6MMpCLYitfoZRJ4Qaaw">
            <img src="/Image/youtube.png">
        </a>
        <a href="https://www.tiktok.com/@m.max54">
            <img src="/Image/tiktok.png">
        </a>
    </section>
    <?php
}