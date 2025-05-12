<?php
require_once 'connect_database.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_id = $_POST['user_id'];
    $username = $_POST['username'];
    $profile_picture = $_POST['profile_picture'];
    $is_admin = $_POST['is_admin'];
    
    if (!empty($_POST['password'])) {
        $password =md5($_POST['password']);
        $sql = "UPDATE user SET username = ?, profile_picture = ?, password = ?, is_admin = ? WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sssii", $username, $profile_picture, $password, $is_admin, $user_id);
    } else {
        $sql = "UPDATE user SET username = ?, profile_picture = ?, is_admin = ? WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssii", $username, $profile_picture, $is_admin, $user_id);
    }
    
    if ($stmt->execute()) {
        echo json_encode(["success" => true]);
    } else {
        echo json_encode(["success" => false, "error" => $conn->error]);
    }
    
    $stmt->close();
    $conn->close();
} else {
    echo json_encode(["success" => false, "error" => "Invalid request method"]);
}
?>
