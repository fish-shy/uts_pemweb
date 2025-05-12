<?php
include 'connect_database.php';

if ($conn) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $isAdmin = $_POST['is_admin'];
    $profile_picture = $_POST['profile_picture'];
    $sql = "INSERT INTO user (username,password,is_admin) VALUES ('$username','$password','$isAdmin')";

    $result = $conn->query($sql);

    if ($result === TRUE) {
        header("location: ../app/user.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
} else {
    echo "Error connecting to database.";
    $user = null;
}
