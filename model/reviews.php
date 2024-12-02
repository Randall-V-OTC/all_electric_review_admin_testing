<?php
    include "database.php";


    function getReviews() {

        global $dsn, $username, $password;

        try {
            $db = new PDO($dsn, $username, $password);
        }
        catch (Exception $ex) {
            echo("<p>$ex->getMessage</p>");
        }

        $initQuery = $db->prepare("SELECT * FROM reviews");

        $initQuery->execute();

        return $initQuery->fetchAll(PDO::FETCH_ASSOC);
    }