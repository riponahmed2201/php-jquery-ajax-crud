<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $dbName = "jquery-ajax";

    $conn = new mysqli($host, $user, $pass, $dbName);

    if ($conn->connect_error) {
        die("Connection Failed");
    }

?>