<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/styles.css">
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
</head>
<body>
    <?php include_once "includes/navbar.php"; ?>
    <div class="reviews_container">

        <!-- <form class="text-center">
            <span class="showAllReviewsSpan">
                <label for="showAllReviews">Show All Reviews:</label>
                <input type="checkbox" id="showAllReviews" name="showAllReviews">
            </span>
        </form> -->

        <?php
            include "model/database.php";
            include "model/reviews.php";
            $reviews = getReviews();

            if (isset($_POST['approveReview'])) {
                approveReview($_POST['approveReview']);
                header("Refresh:0");
            }

            // print_r($reviews);
            foreach ($reviews as $review=>$data) {

                $stars = '';

                switch ($data['reviewFormRating']) {

                    case 1: 
                        $stars = "<span class='star'></span>";
                        break;
                    case 2: 
                        $stars = "<span class='star'></span><span class='star'></span>";
                        break;
                    case 3:
                        $stars = "<span class='star'></span><span class='star'></span><span class='star'></span>";
                        break;
                    case 4:
                        $stars = "<span class='star'></span><span class='star'></span><span class='star'></span><span class='star'></span>";
                        break;
                    case 5:
                        $stars = "<span class='star'></span><span class='star'></span><span class='star'></span><span class='star'></span><span class='star'></span>";
                        break;
                }

                if ($data['reviewFormApprovedDate'] == null) {
                echo("<div class='card'><div class='card-title text-center'>$data[reviewFormUserName] says...</div>" . 
                        "<div class='reviewRating text-center'>$stars</div>" .
                            "<div class='card-body'>" .
                                "$data[reviewFormComment]" .
                            "</div>" . "<span class='text-center'><form method='POST'><button class='btn btn-primary approveButton' id='approveReview' name='approveReview' value='$data[reviewId]' title='Approve review #$data[reviewFormApprovedDate]'>Approve</button></form></span>"
                        . "</div>
                    </div>");
                }
            }
        ?>
    </div>
</body>
</html>