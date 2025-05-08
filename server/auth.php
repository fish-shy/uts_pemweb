<?php

session_start();
include 'connect_database.php';
$username = isset($_POST['username']) ? $_POST['username'] : '';
$password = isset($_POST['password']) ? md5($_POST['password']) : '';

$sql = "SELECT * FROM user WHERE username='$username' AND password='$password'";
$result = $conn->query($sql);

if ($result) {
  if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
      $user[] = $row;
    }
      $_SESSION["user"] = $username;
      $_SESSION["is_admin"] = $user['is_admin'];

    }
}
$result->free();

if ($_SESSION["user"]) {
  header("Location: ../app/home.php");
  exit;
}
header("Location: ../app/login.php");
exit;

