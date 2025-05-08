<?php
include 'connect_database.php';

if ($conn) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $isAdmin = $_POST['is_admin'];
    $update = $_POST['update'];
    if($update == 1) {
        $user_id = $_POST['user_id'];
        $sql = "UPDATE user SET username='$username', password='$password', is_admin='$isAdmin' WHERE id=$user_id";
    } else {
        $sql = "INSERT INTO user (username,password,is_admin) VALUES ('$username','$password','$isAdmin')";
    }
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
