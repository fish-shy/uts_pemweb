<?php
require_once 'connect_database.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $product_id = $_POST['product_id'];
    $name = $_POST['name'];
    $price = $_POST['price'];
    $description = $_POST['description'];
    $image = isset($_POST['image']) ? $_POST['image'] : '';
    
    $sql = "UPDATE product SET product_name = ?, price = ?, description = ?, image = ? WHERE id = ?";
    
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sdssi", $name, $price, $description, $image, $product_id);
    
    if ($stmt->execute()) {
        echo json_encode(["success" => true]);
    } else {
        echo json_encode(["success" => false, "error" => $conn->error]);
    }
    
    $stmt->close();
    $conn->close();
}
?>
