<?php
include ("../../private_html/php/elements.php");
page_header("Structure en Ballons");
?>
<div id="reviews-container"></div>

<script>
    async function fetchGoogleReviews() {
        const url = "/api/get-reviews.php"; // Chemin vers le fichier PHP

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