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
        <link rel="stylesheet" type="text/css" href="/CSS/mise_en_page.css">
        <link rel="stylesheet" type="text/css" href="/CSS/styles.css">
        <link rel="stylesheet" type="text/css" href="/CSS/nav.css">
        <link rel="stylesheet" type="text/css" href="/CSS/responsive.css">
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
        <!-- Barre de Navigation-->

        <nav class="navbar">

            <a href="#" class="logo">test</a>
            <div class="nav-links">
                <ul>
                    <li class="active"> <a href="index.html">Accueil</a></li>
                    <ul><?
                            // <li>
                            //     <a href="bio.html" title="Biographie">Biographie</a>
                            // </li>
                            ?>
                        <li>
                            <a href="#" title="Collectivité">Collectivité</a>
                            <ul class="sub-menu1">
                                <li>
                                    <a href="spectacleshow.html" title="Spectacle-show">Spectacle-show</a>
                                </li>
                                <li>
                                    <a href="../HTML/Initiation.html" title=" Initiations">Initiations </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" title="Particulier">Particulier</a>
                            <ul class="sub-menu2">
                                <li>
                                    <a href="../HTML/Anniversaire.html" title="Anniversaire ">Anniversaire Adultes </a>
                                </li>
                                <li>
                                    <a href="../HTML/Anniversaire_enfant.html" title="Anniversaire ">Anniversaire Enfants
                                    </a>
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
                            <a href="#" title="Professionel">Professionel</a>
                            <ul class="sub-menu3">
                                <li>
                                    <a href="../HTML/spectacle.html" title="Spectacle">Spectacle</a>
                                </li>
                                <li>
                                    <a href="../HTML/closeup.html" title="Close_up">Close up</a>
                                </li>
                                <!-- <li>
                                         <a href="../HTML/conf.html" title=" Conférence">Conférence</a>
                                     </li>-->
                                <a href="../HTML/resto.html" title="Restaurant">Restaurant</a>
                        </li>
                    </ul>
                    </li>
                    <li>
                        <a href="#" title="Univers Ballons">Univers Ballons</a>
                        <ul class="sub-menu3">
                            <li>
                                <a href="../HTML/spectacleballon.html" title="Spectacle">Spectacle de Ballons</a>
                            </li>
                            <li>
                                <a href="../HTML/standballon.html" title="standballon">Stand Ballons</a>
                            </li>
                            <li>
                                <a href="../HTML/structure.html" title=" structure">Structure en Ballons</a>
                        </ul>
                    </li>
                    <li>
                        <a href="../HTML/Contact.html" title="Contact">Contact</a>
                    </li>
                    <!--Logo Animée-->
            </div>
            <img src="../Image/Logo.png" width="150" height="150" class="imagelogo">
            <img src="../Image/menu-btn.png" alt="menu hamburger" class="menu-hamburger">
            <h1 class="Max">Maxime Claudel</h1>
            <h2 class="Mag">Magicien</h2>
        </nav>
        <header></header><?php
}

function page_footer()
{
    ?>
        <footer>
            <br>
            <article class="M_Legal">
                <a href="/HTML/MLégal.html">Mentions légales</a>
            </article>
            <article class="CGU">
                <a href="/HTML/cgu.html">Conditions générales d'utilisations</a>
            </article>
            <article class="boutoncontacte">
                <a href="/HTML/Contact.html">Contact</a>
            </article>
        </footer>
        <script src="../js/script.js"></script>
        <script src="../js/burger.js"></script>
    </body>
    </html>
    <?php
}