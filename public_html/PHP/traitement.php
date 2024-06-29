<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  header('Content-Type: text/html; charset=utf-8');
  // Récupération des données du formulaire
  $nom = htmlentities($_POST['name']);
  $email = htmlentities($_POST['email']);
  $telephone = htmlentities($_POST['telephone']);
  $sujet = htmlentities($_POST['sujet']);
  $nature = htmlentities($_POST['nature']);
  $date = htmlentities($_POST['date']);
  $message = htmlentities($_POST['message']);

  // Configuration de l'e-mail
  $destinataire = 'contact@mcmagic.fr'; // Remplace avec ton adresse e-mail
  $sujetEmail = 'Nouveau message depuis le formulaire de contact du site';
  $contenuEmail = "<h1>$sujet</h1><p>" . nl2br($message) . "</p><table>";
  $contenuEmail .= "<tr><th>Clé</th><th>Valeur</th></tr>";
  $contenuEmail .= "<tr><td>Nom</td><td>$nom</td></tr>";
  $contenuEmail .= "<tr><td>E-mail</td><td>$email</td></tr>";
  $contenuEmail .= "<tr><td>Téléphone</td><td>$telephone</td></tr>";
  $contenuEmail .= "<tr><td>Sujet</td><td>$sujet</td></tr>";
  $contenuEmail .= "<tr><td>Nature</td><td>$nature</td></tr>";
  $contenuEmail .= "<tr><td>Date</td><td>$date</td></tr>";
  $contenuEmail .= "<tr><td>Message</td><td>$message</td></tr></table>";
  
  $headers = implode('\n', array
  (
      'Content-Type: text/html; charset=utf-8',
      'From: ' . $email,
      'Reply-To: ' . $email,
      'X-Mailer: PHP/' . phpversion(),
  ));

  // Envoi de l'e-mail
  if (mail($destinataire, $sujetEmail, $contenuEmail, $headers)) {
    // Redirection vers une page de confirmation si l'e-mail est envoyé avec succès
    header('Location: /Pages/confirmation.php');
    exit();
  } else {
    // Gestion des erreurs si l'e-mail n'est pas envoyé
    echo "Une erreur est survenue lors de l'envoi de l'e-mail.";
  }
}
