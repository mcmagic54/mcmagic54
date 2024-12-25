<?php
header("Content-Type: application/json"); // Réponse en JSON
$env = parse_ini_file('../../.env');

$apiKey = $env["apiKey"];
$placeId = $env["placeId"];

// Construire l'URL pour appeler l'API Google Places
$url = "https://maps.googleapis.com/maps/api/place/details/json?place_id=$placeId&fields=name,rating,reviews&key=$apiKey";

// Effectuer une requête cURL pour interroger l'API Google
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$response = curl_exec($ch);

// Vérifiez si une erreur s'est produite
if ($response === false) {
    echo json_encode(["error" => curl_error($ch)]);
    exit;
}
curl_close($ch);

// Renvoyer la réponse JSON à l'utilisateur
echo $response;
