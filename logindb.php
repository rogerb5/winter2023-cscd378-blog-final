<?php
// start the session
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "teaspot";
$type = "admin login";

// create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// handle login form submission
if (isset($_POST['login'])) {
    $user = $_POST['username'];
    $password = $_POST['password'];

    // check if username and password match
    $sql = "SELECT username from teaspot.logindb WHERE username = '$user' AND password = '$password' LIMIT 1";
    $result = $conn->query($sql);

    if ($result && $result->num_rows > 0) {
        // login successful
        echo "Login successful";
        // redirect to home page or another page
        header("Location: index.php");
        exit();
    } else {
        // login failed
        $error = "Incorrect username or password";
    }
}

?>