<?php
// database connection details
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "teaspot";
$type = "newsletter addition";

// create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['news_email'])) {
    $email = $_POST['email'];
    // insert the new comment into the database
    $sql = "INSERT INTO newsletter (email) VALUES ('$email')";
    if ($conn->query($sql) === TRUE) {
        $success =  "Email successfully added";
        // Log the comment into logger database
        $sql_logger = "INSERT INTO logger(type) VALUES ('$type')";
        if ($conn->query($sql_logger) !== TRUE) {
            echo "Error logging newsletter email: " . $conn->error;
        }
    } else {
        $success =  "Error saving email: " . $conn->error;
    }
}


?>