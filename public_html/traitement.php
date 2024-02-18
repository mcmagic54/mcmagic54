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
  $message = nl2br(htmlentities($_POST['message']));

  // Configuration de l'e-mail
  $destinataire = 'contact@mcmagic.fr'; // Remplace avec ton adresse e-mail
  $sujetEmail = 'Nouveau message depuis le formulaire de contact du site';
  $contenuEmail = "<h1>" . $sujet . "</h1>";
  $contenuEmail .= "Bonjour, vous avez reçu un nouveau message :<br>";
  $contenuEmail .= "Nom: $nom<br>";
  $contenuEmail .= "E-mail: $email<br>";
  $contenuEmail .= "Téléphone: $telephone<br>";
  $contenuEmail .= "Sujet: $sujet<br>";
  $contenuEmail .= "Nature: $nature<br>";
  $contenuEmail .= "Date: $date<br>";
  $contenuEmail .= "Message: <p>$message</p>";
  
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
    header('Location: confirmation.html');
    exit();
  } else {
    // Gestion des erreurs si l'e-mail n'est pas envoyé
    echo "Une erreur est survenue lors de l'envoi de l'e-mail.";
  }
}
?>
