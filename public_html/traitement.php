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
  $contenuEmail = "Nom: $nom\n";
  $contenuEmail .= "E-mail: $email\n";
  $contenuEmail .= "Téléphone: $telephone\n";
  $contenuEmail .= "Sujet: $sujet\n";
  $contenuEmail .= "Nature: $nature\n";
  $contenuEmail .= "Date: $date\n";
  $contenuEmail .= "Message: $message\n";
  
  $headers = array
  (
      'Content-Type' => 'text/html; charset="UTF-8";',
      'From' => $email,
      'Reply-To' => $email,
      'X-Mailer' => 'PHP/' . phpversion(),
  );

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
