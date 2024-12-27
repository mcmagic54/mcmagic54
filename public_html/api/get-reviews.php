<?php
const cached_path = "../../private_html/api_cached/reviews.json";
function save_result($json) {
    $dirname = dirname(cached_path);
    is_dir($dirname) || mkdir($dirname, 777, true);
    file_put_contents(cached_path, json_encode($json));
}
function load_cached_call() {
    if(!file_exists(cached_path)) {
        return false;
    }

    return json_decode(file_get_contents(cached_path), true);
}
function fetch_review() {
    $env = parse_ini_file('../../.env');

    $apiKey = $env["apiKey"];
    $placeId = $env["placeId"];

    // Construire l'URL pour appeler l'API Google Places
    $url = "https://maps.googleapis.com/maps/api/place/details/json?place_id=$placeId&fields=rating,reviews&reviews_no_translations=true&language=fr&key=$apiKey";

    // Effectuer une requête cURL pour interroger l'API Google
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $response = curl_exec($ch);
    if ($response === false) {
        $response = ["error" => curl_error($ch)];
    } else {
        $response = json_decode($response, true);
    }
    curl_close($ch);
    $response["last_fetch"] = date('Y-m-d H:i:s', time());
    save_result($response);
    return $response;
}

header("Content-Type: application/json");
$reviews = load_cached_call();

// Regarde si le cache doit être rechargé (604800 est le nombre de seconde dans une semaine)
if ($reviews == false || time() - strtotime($reviews["last_fetch"]) > 604800) {
    $reviews = fetch_review();
}
// Vérifiez si une erreur s'est produite
if (isset($reviews["error"])) {
    http_response_code(501);
} else {
    http_response_code(200);
}

// Renvoyer la réponse JSON à l'utilisateur
echo json_encode($reviews);
