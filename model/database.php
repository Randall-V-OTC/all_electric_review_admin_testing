<?php

    $dsn = "mysql:host=localhost;dbname=all_electric";
    $username = "root";
    $password = "";

    try {
        $db = new PDO($dsn, $username, $password);
    }
    catch (Exception $ex) {
        echo("<p>$ex->getMessage</p>");
    }

?>