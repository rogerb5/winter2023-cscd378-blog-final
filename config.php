<?php

    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "teaspot";

    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);


    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
