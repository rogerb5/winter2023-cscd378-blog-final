<?php
// start the session
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
// get the page ID from the session
$page_id = $_SESSION['page_id'];

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

// if the form is submitted to post a comment
if (isset($_POST['http_post_comment'])) {
    $user = $_POST['user'];
    $message = $_POST['message'];

    // insert the new comment into the database
    $sql = "INSERT INTO commentdb (user, message,page_id) VALUES ('$user', '$message',$page_id)";
    if ($conn->query($sql) === TRUE) {
        echo "Comment posted successfully";

        // Log the comment into logger database
        $sql_logger = "INSERT INTO logger(user, message, type) VALUES ('$user','$message','$type')";
        if ($conn->query($sql_logger) !== TRUE) {
            echo "Error logging comment: " . $conn->error;
        }
    } else {
        echo "Error posting comment: " . $conn->error;
    }
}

// retrieve comments from the database
$sql = "SELECT * FROM commentdb WHERE page_id = $page_id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output each comment
    while ($row = $result->fetch_assoc()) {
        echo '<div class="comment">';
        echo '<p><strong>' . $row['user'] . '</strong>: ' . $row['message'] . '</p>';
        echo '</div>';
    }
} else {
    echo '<p>No comments yet</p>';
}

// close database connection
$conn->close();
?>
