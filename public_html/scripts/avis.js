async function fetchGoogleReviews() {
    const url = `/api/get-reviews.php`;

    try {
        const response = await fetch(url);
        const data = await response.json();
        if (data.status === "OK") {
            displayReviews(data.result.reviews);
        } else {
            console.error("Erreur lors de la récupération des avis :", data.error);
        }
    } catch (error) {
        console.error("Erreur réseau :", error);
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
