<?php
include ("../../private_html/php/elements.php");
page_header("Structure en Ballons");
header("Content-Type: application/json"); // Réponse en JSON
header("Access-Control-Allow-Origin: *"); // Autorise toutes les origines (CORS)

$apiKey = "***REMOVED***"; // Remplacez par votre clé API Google
$placeId = "***REMOVED***"; // Remplacez par l'ID du lieu

// Construire l'URL pour appeler l'API Google Places
$url = "https://maps.googleapis.com/maps/api/place/details/json?place_id=$placeId&fields=name,rating,reviews&key=$apiKey";

// Effectuer une requête cURL pour interroger l'API Google
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$response = curl_exec($ch);
curl_close($ch);

// Vérifiez si une erreur s'est produite
if ($response === false) {
    echo json_encode(["error" => "Impossible de récupérer les données."]);
    exit;
}

// Renvoyer la réponse JSON à l'utilisateur
echo $response;
?>
<div id="reviews-container"></div>

<script>
    async function fetchGoogleReviews() {
        const url = "get-reviews.php"; // Chemin vers le fichier PHP

        try {
            const response = await fetch(url);
            const data = await response.json();

            if (data.reviews) {
                displayReviews(data.reviews);
            } else {
                console.error("Aucun avis trouvé :", data);
            }
        } catch (error) {
            console.error("Erreur lors de la récupération des avis :", error);
        }
    }

    function displayReviews(reviews) {
        const container = document.getElementById("reviews-container");
        container.innerHTML = ""; // Vide le conteneur avant d'ajouter de nouveaux avis

        reviews.forEach((review) => {
            const reviewDiv = document.createElement("div");
            reviewDiv.className = "review";

            const reviewerName = document.createElement("h3");
            reviewerName.textContent = review.author_name;

            const stars = document.createElement("div");
            stars.className = "stars";
            stars.textContent = "★".repeat(Math.round(review.rating)) + "☆".repeat(5 - Math.round(review.rating));

            const reviewText = document.createElement("p");
            reviewText.textContent = review.text;

            reviewDiv.appendChild(reviewerName);
            reviewDiv.appendChild(stars);
            reviewDiv.appendChild(reviewText);

            container.appendChild(reviewDiv);
        });
    }

    // Appeler la fonction pour récupérer et afficher les avis
    fetchGoogleReviews();
</script>

<?php page_footer(); ?>