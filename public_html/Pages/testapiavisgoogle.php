<?php
include ("../../private_html/php/elements.php");
page_header("Structure en Ballons");
?>
<div id="reviews-container"></div>
<script>
document.addEventListener("DOMContentLoaded", (event) => {
  fetchGoogleReviews();
});
</script>
<?php page_footer(); ?>