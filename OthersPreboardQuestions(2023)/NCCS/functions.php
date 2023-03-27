<?php
function checkCredentials($userName, $userPass)
{
    $conn = mysqli_connect('localhost', 'root', '', 'demo', 3306);

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "SELECT * FROM users 
                WHERE username = '$userName' AND password = '$userPass' 
                ";
    $query = mysqli_query($conn, $sql);

    if (mysqli_num_rows($query) <= 0) {
        header('location: login-form.php');
        exit;
    } else {
        $row = mysqli_fetch_assoc($query);
        if (
            $row['username'] == $userName &&
            $row['password'] == $userPass
        ) {
            header('location: profile.php');
            exit;
        } else {
            header('location: login-form.php');
            exit;
        }
    }
}
