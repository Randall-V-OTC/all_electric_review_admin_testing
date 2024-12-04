<?php

    include "database.php";

    function getReviews() {

        global $db;

        $initQuery = $db->prepare("SELECT * FROM reviews");

        $initQuery->execute();

        return $initQuery->fetchAll(PDO::FETCH_ASSOC);
    }

    function approveReview($id) {

        global $db;

        // make sure to put the date in CST time
        date_default_timezone_set("America/Chicago");

        $currDate = date('Y-m-d H:i:s');

        $initQuery = $db->prepare("UPDATE `reviews` SET `reviewFormApprovedDate` = '$currDate' WHERE `reviews`.`reviewId` = $id");

        $initQuery->execute();

        return true;

    }