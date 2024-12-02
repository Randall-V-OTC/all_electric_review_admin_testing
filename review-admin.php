<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="styles.css">
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
</head>
<body>
    <div class="reviews_container">

        <?php
            include "model/database.php";
            include "model/reviews.php";
            $reviews = getReviews();
            print_r($reviews);
            foreach ($reviews as $review) {
                //echo($review);
                foreach ($review as $singleReview) {
                    //echo($singleReview);
                    // echo("<div class='card'><div class='card-title'>Review: $review[reviewFormUserName]" . 

                    // "</div></div>");
                    //echo($deeper['reviewFormUserName']);
                }
                //echo($review);
            }
        ?>
    </div>
</body>
</html>