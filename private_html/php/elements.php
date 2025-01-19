<?php
/**
 * Echo the header of the page
 *
 * @param  string  $page_title The title of the page
 * @param  string  $base_id If not null, the id on the body element
 * @return void
 */
function page_header($page_title, $base_id = null)
{
    ?>
    <!DOCTYPE html>
    <html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="/styles/content.css">
        <link rel="stylesheet" type="text/css" href="/styles/at-rules.css">
        <link rel="stylesheet" type="text/css" href="/styles/header.css">
        <link rel="stylesheet" type="text/css" href="/styles/footer.css">
        <title><?php echo $page_title; ?></title>
        <meta name="description" content="Description du site" />
        <link rel="apple-touch-icon" sizes="180x180" href="/Image/Favicon/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/Image/Favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/Image/Favicon/favicon-16x16.png">
        <link rel="manifest" href="/Image/Favicon/site.webmanifest">
        <link rel="mask-icon" href="/Image/Favicon/safari-pinned-tab.svg" color="#5bbad5">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="theme-color" content="#ffffff">
    </head>
    <body <?php
        if ($base_id != null) {
            echo " id=\"" . $base_id . "\"";
        }
    ?>>
    <header>
        <a href="/" class="brand">
            <img alt="Trefle" class="suit trefle" src="/Image/trefle.jpg">
            <img alt="Logo MCmagic" class="logo" src="/Image/Logo.png"> 
            <img alt="Coeur" class="suit coeur" src="/Image/coeur.jpg">
            <h1>Maxime Claudel</h1>
            <img alt="Pique" class="suit pique" src="/Image/pique.jpg">
            <h2>Magicien<br>Sculpteur de Ballons</h2>
            <img alt="Carreau" class="suit carreau" src="/Image/carreau.jpg">
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
                            <a href="/Pages/anniversaire.php" title="Anniversaire">Anniversaire Adultes</a>
                        </li>
                        <li>
                            <a href="/Pages/anniversaire-enfant.php" title="Anniversaire">Anniversaire Enfants</a>
                        </li>
                        <li>
                            <a href="/Pages/mariage.php" title="Mariage">Mariage</a>
                        </li>
                        <li>
                            <a href="/Pages/family.php" title="Family party">Family party</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <span title="Professionel">Professionel</span>
                    <ul>
                        <li>
                            <a href="/Pages/spectacle.php" title="Spectacle">Spectacle</a>
                        </li>
                        <li>
                            <a href="/Pages/closeup.php" title="Close_up">Close up</a>
                        </li>
                        <!--<li>
                            <a href="/Pages/resto.php" title="Restaurant">Restaurant</a>
                        </li>-->
                    </ul>
                </li>
                <li>
                    <span title="Univers Ballons">Univers Ballons</span>
                    <ul><!--
                        <li>
                            <a href="/Pages/spectacleballon.php" title="Spectacle">Spectacle de Ballons</a>
                        </li>-->
                        <li>
                            <a href="/Pages/standballon.php" title="standballon">Stand Ballons</a>
                        </li>
                        <li>
                            <a href="/Pages/structure.php" title=" structure">Structure en Ballons</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <span title="Photos">Photos</span>
                    <ul>
                        <li>
                            <a href="/Pages/photomagie.php" title="photos Magie">Photos Magie</a>
                        </li>
                        <li>
                            <a href="/Pages/photosballons.php" title="Photos Ballons">Photos Ballons</a>
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
            <a class="button red-rounded" href="/Pages/contact.php">Contact</a>
            <a class="button red-rounded" href="/Pages/mentions-legales.php">Mentions légales</a>
        </footer>
        <script src="/scripts/burger.js"></script>
        <script src="/scripts/slider.js"></script>
        <script src="/scripts/avis.js"></script>
    </body>
    </html>
    <?php
}
function reseaux_sociaux($dark_mode = true, $show_contact = false)
{
    ?>
    <section class="reseaux-sociaux<?php echo $dark_mode? " dark-mode" : "" ?>">
        <a href="https://www.facebook.com/profile.php?id=100094623031909">
            <img src="/Image/logo_facebook.png">
        </a>
        <a href="https://www.instagram.com/maxime_claudel_/">
            <img src="/Image/logo_insta.png">
        </a>
        <?php
        if ($show_contact) {
            ?><a class="button red-rounded" href="/Pages/contact.php">Contact</a><?php
        }
        ?>
        <a href="https://www.youtube.com/channel/UCtnN6MMpCLYitfoZRJ4Qaaw">
            <img src="/Image/youtube.png">
        </a>
        <a href="https://www.tiktok.com/@m.max54">
            <img src="/Image/tiktok.png">
        </a>
    </section>
    <?php
}
/**
 * A utiliser sur les pages qui n'utilisent pas page_footer
 */
function page_end() {
    ?>
    <script src="/scripts/burger.js"></script>
    <script src="/scripts/slider.js"></script>
    <script src="/scripts/avis.js"></script>
    </body></html>
    <?php
}