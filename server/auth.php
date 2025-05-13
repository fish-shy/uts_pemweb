<?php

session_start();
include 'connect_database.php';
$username = isset($_POST['username']) ? $_POST['username'] : '';
$password = isset($_POST['password']) ? md5($_POST['password']) : '';

if (empty($username) || empty($password)) {
  header("Location: ../app/login.php?error=Please fill in all fields");
  exit();
}

$sql = "SELECT * FROM user WHERE username=? AND password=?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $username, $password);
$stmt->execute();
$result = $stmt->get_result();
if ($result && $result->num_rows > 0) {
  $user = $result->fetch_assoc();
  $_SESSION["user_id"] = $user['id'];
  $_SESSION["profile_picture"] = $user['profile_picture'];
  $_SESSION["user"] = $username;
  $_SESSION["is_admin"] = $user['is_admin'];
  header("Location: ../app/home.php");
  exit;
} else {
  header("Location: ../app/login.php?error=Invalid username or password");
  exit;
}
$stmt->close();
$conn->close();
