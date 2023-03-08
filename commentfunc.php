<?php
// start the session
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// database connection details
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "teaspot";
$type = "comment post";
$page_id = $_SESSION['page_id'];

// create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// handle comment deletion
if (isset($_POST['delete_comment'])) {
    $comment_id = $_POST['comment_id'];
    $sql = "DELETE FROM commentdb WHERE commentID = $comment_id";
    if ($conn->query($sql) === TRUE) {
        $_SESSION['success'] = "Comment deleted successfully";
        header("Location: ".$_SERVER['PHP_SELF']);
        exit;
    } else {
        $_SESSION['error'] = "Error deleting comment: " . $conn->error;
    }
}

// if the form is submitted to post a comment
if (isset($_POST['http_post_comment'])) {
    $user = $_POST['user'];
    $message = $_POST['message'];

    // check user name length
    if (strlen($user) > 14) {
        // set session variable for error message
        $_SESSION['comment_error'] = 'Username is too long';

        // redirect back to form page
        header("Location: ".$_SERVER['PHP_SELF']);
        exit;
    }

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
// on the form page, display the error message if it exists
if (isset($_SESSION['comment_error'])) {
    echo '<p><div class="error-message">' . $_SESSION['comment_error'] . '</div></p>';
    unset($_SESSION['comment_error']); // clear the error message
}
// retrieve comments from the database
$sql = "SELECT * FROM commentdb WHERE page_id = $page_id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output each comment
    while ($row = $result->fetch_assoc()) {
        echo '<div class="comment-container">';
        echo '<div class="comment">';
        echo '<div class="name"><strong>' . $row['user'] . ':</strong></div>';
        echo '<div class="message-container">';
        echo '<div class="message">' . $row['message'] . '</div>';
        // show delete button only when admin is logged in
        if (isset($_COOKIE['logged_in'])) {
            echo '<form method="POST" action="" class="delete-form">
            <input type="hidden" name="comment_id" value="' . $row['commentID'] . '">
            <button type="submit" class="delete-button-trash" name="delete_comment">
            <img src="assets/svg/trash.svg" alt="Delete">
            </button>
            </form>';
        }
        echo '</div>'; // message-container
        echo '</div>'; // comment
        echo '</div>'; // comment-container
    }
} else {
    echo '<p>No comments yet</p>';
}

// close database connection
$conn->close();
?>
