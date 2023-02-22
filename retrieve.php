<?php
$username = $_POST['username'];
$password = $_POST['password'];

if(!empty($username) || !empty($password)) {
    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "teaspot";

    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);

    if (mysqli_connect_error()) {
        die('Connection Error(' . mysqli_connect_error() . ')' . mysqli_connect_error());
    } else {
        $SELECT = "SELECT username from teaspot.logindb Where username = ? Limit 1";

        $stmt = $conn->prepare($SELECT);
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $stmt->store_result();
        $rnum = $stmt->num_rows;

        if($rnum == 1){
            $stmt->close();
            header("Location: index.html");
        }
        else{
            header("Location: login.html");
        }
        $stmt->close();
        $conn->close();

    }
}else{
    header("Location: login.html");
}
?>