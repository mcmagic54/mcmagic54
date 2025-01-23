# Site de MCmagic

## Plan du site

- Accueil
- Biographie
- Collectivité
    - Spectacle-show
    - Initiations
- Particulier
    - Anniversaire Adultes
    - Anniversaire Enfants
    - Mariage
    - Family party
- Professionel
    - Spectacle
    - Close up
    - Restaurant
- Univers Ballons
    - Spectacle de Ballons
    - Stand Ballons
    - Structure en Ballons
- Contact

## Partie technique
### Configuration
Les configurations de l'application sont stockées dans le fichier `.env`.
Il peut être créé avec la commande suivante:
```bash
cp .env.template .env
```
Pour faire fonctionner les avis google, il faut ensuite remplir le fichier `.env` de cette façon:
```ini
apiKey=clé_api_google
placeId=id_du_lieu
```
### Développement local
Avant de lancer le serveur php, il faut vérifier les chemins du fichier `php.ini`. Par défaut, ils commencent par `C:\tools\php83`, mais selon la version de php ou du système d'exploitation, il convient de les mettre à jour.

Le fichier `cacert.pem` indiqué dans `php.ini` peut-être téléchargé à cette adresse: https://curl.se/docs/caextract.html.

Démarrer le serveur php avec cette commande :
```sh
php -S localhost:8000 -t public_html -c php.ini
```

Si php n'est pas disponible, il peut être installé avec chocolatey:
```sh
choco install php
```

### Déploiement en production
Seuls les dossiers `public_html` et `private_html` doivent être copiés sur le serveur.
Les autres fichiers ne doivent pas s'y trouver. 

## Todo des correction

 - [ ] faire apparaitre le score globle d'étoile de google.


 - [ ] Remettre la gallery image sous un format plus identiques

 - [ ] Stylisé la page Politiques de Confidentialité & Mentions légale (centrer le texte)

 - [ ] Ecricre la page Stand ballons

 - [ ] rajouter un bouton contact dans spectacle show et dans spectacle

- [ ] rajouter dans le footer bouton : CGV / CGU / Politiques de Confidentialités

 - [ ] rajouter un Mentions Légal dans politiques de Confidentialités



 

 

  - [x] faire alligner la fiches contact + reseau parralle à la video (plus vers la gauche)
  - [x] Terminer le slider de droite à gauche.
  - [x] Rajouter Scultpeur de Ballon en desous de Magicien
  - [x] Changer le bouton "Contact" j'aimerais qu'il sois blanc et quand l'animations du blac depasse d'un pixel le texte change en noir.
  - [x] Dégrossir au maximun la page d'accueil avec le slider qui fait la page comme voir capture ci-dessous 
  - [x] Remplir le nouveau spectacle
  - [x] Faire la page Mentions légale 
  - [x] Dégrossir au Maximun la page d'acceuil avec le slide qui fais la page comme voir capture ci desous
  - [X] Corriger la page d'acceuil
  - [x] Metttre sur le côtes de la vidéo le bouton contact avec les reseaux sociaux
  - [x] Dégrossir les slider dans spectacle / colléctivité
  - [x] Changer le bouton "Mention Légale"  qui sois identique que le bouton "Contact"
  - [x] Stylisée Mentions Légale
  - [x] Mettre le footer partout avec et identique voir ci dessous (l'idéake et d'alligner et une margin entre les éléments)
  - [x] le titre du slider bien le mettre en centrer mais par contre le texte dans la rubrique le mettre en alignement a gauche
  - [x] Mettre une marge entre la page et le footer
  - [x] Rajouter une case à cochez au dessus du bouton envoyer dans le formulaire de contact et mettre un texte à côté " J'acceptez notre politique des données personelles." (si non valider envoyer une erreur pour casse obligatoire.)
  - [x] Dans le formulaire de contact remonter la barre d'écriture "Entrez votre message"
  - [x] Stylisée Mentions Légale
  - [x] Mettre le footer partout avec et identique voir ci dessous (l'idéake et d'alligner et une margin entre les éléments)
  - [x] Mettre une marge entre la page et le footer
  - [x] Dans le formulaire de contact remonter la barre d'écriture "Entrez votre message"
  - [x] Rajouter une case à cochez au dessus du bouton envoyer dans le formulaire de contact et mettre un texte à côté " J'acceptez notre politique des données personelles." (si non valider envoyer une erreur pour casse obligatoire.)
  - [x] rajouter l'image donner votre avis
  - [x] Ecricre la page Politiques de Confidentialité
  - [x] rajouter un lien entre Politiques de confidenctialité (contact) et sous ligner Politiques de Confidentialité + couleur bleu


  ## Todo des correction responsive.

![capture](/doc/img/resp.jpg)
   - [ ] Remonter le burger
   - [ ] Centrer le menu déroulant et les éléments.
   - [ ] Mettre une ligne qui délimite le haut de page à la page en question
   - [ ] Le menue déroulant ne s'affiche pas au dessus de la bare rouge (barre de délimitations)
   - [ ] quand le menue est ouvert prelonger le gris tant que le menue n'est pas fermer
   - [ ] Passer en responsive bien avant 
   




    ## A médité : 

   - [ ] javascript : 

    <script>
  // Fonction pour créer un cookie
  function createCookie(name, value, days) {
    let expires = "";
    if (days) {
      const date = new Date();
      date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
      expires = "; expires=" + date.toUTCString();
    }
    document.cookie = name + "=" + (value || "") + expires + "; path=/";
  }

  // Fonction pour lire un cookie
  function readCookie(name) {
    const nameEQ = name + "=";
    const cookies = document.cookie.split(';');
    for (let i = 0; i < cookies.length; i++) {
      let c = cookies[i];
      while (c.charAt(0) === ' ') c = c.substring(1, c.length);
      if (c.indexOf(nameEQ) === 0) return c.substring(nameEQ.length, c.length);
    }
    return null;
  }

  // Fonction pour démarrer l'analyse
  function trackUser() {
    const visitTime = new Date().getTime(); // Heure actuelle
    const page = window.location.pathname; // Page actuelle
    const visitorId = readCookie('visitorId'); // Lire l'ID du visiteur

    // Si c'est un nouveau visiteur, créer un cookie avec un ID unique
    if (!visitorId) {
      const uniqueId = 'visitor-' + Math.random().toString(36).substring(2);
      createCookie('visitorId', uniqueId, 365); // Cookie valable 1 an
    }

    // Stocker les données de la visite dans un cookie temporaire
    createCookie('lastPage', page, 1); // Dernière page visitée
    createCookie('visitTime', visitTime, 1); // Temps de la visite
  }

  // Appeler la fonction à chaque visite
  trackUser();
</script>


- [ ] Php : 

<?php
// Connexion à la base de données
$host = "localhost";
$dbname = "analytics_db";
$username = "root";
$password = "";

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
    die("Erreur : " . $e->getMessage());
}

// Récupérer les données envoyées par le client (cookies)
$visitorId = $_COOKIE['visitorId'] ?? 'inconnu';
$page = $_COOKIE['lastPage'] ?? 'inconnu';
$visitTime = $_COOKIE['visitTime'] ?? 0;

// Convertir le temps en format lisible
$visitTimeReadable = date("Y-m-d H:i:s", $visitTime / 1000); // Conversion de millisecondes en secondes

// Enregistrer les données dans la base de données
$sql = "INSERT INTO site_analytics (visitor_id, page, visit_time) VALUES (:visitor_id, :page, :visit_time)";
$stmt = $pdo->prepare($sql);
$stmt->execute([
    ':visitor_id' => $visitorId,
    ':page' => $page,
    ':visit_time' => $visitTimeReadable
]);

echo "Données sauvegardées avec succès.";
?>

SQL 

CREATE DATABASE analytics_db;

USE analytics_db;

CREATE TABLE site_analytics (
    id INT AUTO_INCREMENT PRIMARY KEY,
    visitor_id VARCHAR(50) NOT NULL,
    page VARCHAR(255) NOT NULL,
    visit_time DATETIME NOT NULL
);

<script>
  function sendAnalyticsData() {
    const xhr = new XMLHttpRequest();
    xhr.open("GET", "track.php", true);
    xhr.send();
  }

  // Appeler la fonction lors du chargement de la page
  window.onload = sendAnalyticsData;
</script>

<?php
// Connexion à la base de données
$host = "localhost";
$dbname = "analytics_db";
$username = "root";
$password = "";

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
    die("Erreur : " . $e->getMessage());
}

// Compter le nombre de visiteurs uniques
$sql = "SELECT COUNT(DISTINCT visitor_id) AS unique_visitors FROM site_analytics";
$stmt = $pdo->query($sql);
$result = $stmt->fetch();
echo "Nombre de visiteurs uniques : " . $result['unique_visitors'] . "<br>";

// Compter le nombre total de visites
$sql = "SELECT COUNT(*) AS total_visits FROM site_analytics";
$stmt = $pdo->query($sql);
$result = $stmt->fetch();
echo "Nombre total de visites : " . $result['total_visits'] . "<br>";

// Afficher les pages les plus visitées
$sql = "SELECT page, COUNT(*) AS page_views FROM site_analytics GROUP BY page ORDER BY page_views DESC";
$stmt = $pdo->query($sql);

echo "<h3>Pages les plus visitées :</h3>";
while ($row = $stmt->fetch()) {
    echo $row['page'] . " - " . $row['page_views'] . " visites<br>";
}
?>


Apppelle de par mail : 

<?php
// Connexion à la base de données
$host = "localhost";
$dbname = "analytics_db";
$username = "root";
$password = "";

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
    die("Erreur : " . $e->getMessage());
}

// Générer les données du rapport
$startOfWeek = date("Y-m-d", strtotime("last Monday")); // Début de la semaine
$endOfWeek = date("Y-m-d", strtotime("next Sunday"));   // Fin de la semaine

// Visiteurs uniques de la semaine
$sql = "SELECT COUNT(DISTINCT visitor_id) AS unique_visitors FROM site_analytics WHERE visit_time BETWEEN :start AND :end";
$stmt = $pdo->prepare($sql);
$stmt->execute([
    ':start' => $startOfWeek . ' 00:00:00',
    ':end' => $endOfWeek . ' 23:59:59'
]);
$uniqueVisitors = $stmt->fetchColumn();

// Nombre total de visites de la semaine
$sql = "SELECT COUNT(*) AS total_visits FROM site_analytics WHERE visit_time BETWEEN :start AND :end";
$stmt = $pdo->prepare($sql);
$stmt->execute([
    ':start' => $startOfWeek . ' 00:00:00',
    ':end' => $endOfWeek . ' 23:59:59'
]);
$totalVisits = $stmt->fetchColumn();

// Pages les plus visitées de la semaine
$sql = "SELECT page, COUNT(*) AS page_views FROM site_analytics 
        WHERE visit_time BETWEEN :start AND :end
        GROUP BY page 
        ORDER BY page_views DESC 
        LIMIT 5";
$stmt = $pdo->prepare($sql);
$stmt->execute([
    ':start' => $startOfWeek . ' 00:00:00',
    ':end' => $endOfWeek . ' 23:59:59'
]);
$mostVisitedPages = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Construire le contenu du rapport
$report = "Rapport hebdomadaire du site MCmagic :\n\n";
$report .= "Période : Du $startOfWeek au $endOfWeek\n";
$report .= "-----------------------------------\n";
$report .= "Nombre de visiteurs uniques : $uniqueVisitors\n";
$report .= "Nombre total de visites : $totalVisits\n";
$report .= "\nPages les plus visitées :\n";

foreach ($mostVisitedPages as $page) {
    $report .= "- " . $page['page'] . " : " . $page['page_views'] . " visites\n";
}

$report .= "\nCordialement,\nL'équipe MCmagic";

// Paramètres de l'email
$to = "tonemail@example.com"; // Remplace par ton email
$subject = "Rapport hebdomadaire du site MCmagic";
$headers = "From: noreply@mcmagic.com";

// Envoyer l'email
if (mail($to, $subject, $report, $headers)) {
    echo "Rapport envoyé avec succès à $to.";
} else {
    echo "Échec de l'envoi du rapport.";
}
?>

bash

crontab -e


bash 

0 8 * * 1 php /chemin/vers/weekly_report.php



php weekly_report.php


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'path/to/PHPMailer/src/Exception.php';
require 'path/to/PHPMailer/src/PHPMailer.php';
require 'path/to/PHPMailer/src/SMTP.php';

$mail = new PHPMailer(true);
try {
    $mail->isSMTP();
    $mail->Host = 'smtp.example.com'; // Serveur SMTP
    $mail->SMTPAuth = true;
    $mail->Username = 'tonemail@example.com'; // Adresse email
    $mail->Password = 'tonmotdepasse'; // Mot de passe email
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;

    $mail->setFrom('noreply@mcmagic.com', 'MCmagic');
    $mail->addAddress('tonemail@example.com');

    $mail->isHTML(false);
    $mail->Subject = 'Rapport hebdomadaire du site MCmagic';
    $mail->Body = $report;

    $mail->send();
    echo 'Rapport envoyé avec succès.';
} catch (Exception $e) {
    echo "Échec de l'envoi : {$mail->ErrorInfo}";
}
