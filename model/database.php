<?php

    $dsn = "mysql:host=localhost;dbname=all_electric";
    $username = "root";
    $password = "";

    try{
    $db = new PDO($dsn, $username, $password);
        // echo("connected from db.php");
    } catch (PDOException $e)
    {
        $error_message = $e->getMessage();
        echo("<p>Error message: $error_message");
    }

?>