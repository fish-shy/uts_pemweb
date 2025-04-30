<?php

session_start();
include 'connect_database.php';
$username = isset($_POST['username']) ? $_POST['username'] : '';
$password = isset($_POST['password']) ? md5($_POST['password']) : '';

$sql = "SELECT * FROM user WHERE username='$username' AND password='$password'";
$result = $conn->query($sql);
$rowcount = mysqli_num_rows($result);

if ($rowcount != 0) {
  $_SESSION["user"] = $username;
} 

if ($_SESSION["user"]) {
  header("Location: ../app/home.php");
  exit;
}
header("Location: ../app/login.php");
exit;
