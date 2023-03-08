<?php


// get the page ID from the session


// database connection details
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "teaspot";
$type = "comment post";

// create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['news_email'])) {
    $email = $_POST['email'];
    $type = "newsletter addition";
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

// handle login form submission
if (isset($_POST['login'])) {
    $user = $_POST['username'];
    $password = $_POST['password'];
    $type = "admin login";

    // check if username and password match
    $sql = "SELECT username from teaspot.logindb WHERE username = '$user' AND password = '$password' LIMIT 1";
    $result = $conn->query($sql);

    if ($result && $result->num_rows > 0) {
        // login successful
        setcookie('logged_in', true, time() + 1800);
        echo "Login successful";
        // redirect to home page or another page
        header("Location: index.php");
        exit();
    } else {
        // login failed
        $error = "Incorrect username or password";
    }
}


// close database connection
$conn->close();
?>
