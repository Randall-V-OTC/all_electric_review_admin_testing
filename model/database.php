<?php

    $dsn = "mysql:host=localhost;dbname=all_electric";
    $username = "ozarktechwebdev_randall";
    $password = "randallapipass!";

    try {
        $db = new PDO($dsn, $username, $password);
    }
    catch (Exception $ex) {
        echo("<p>$ex->getMessage</p>");
    }

?>