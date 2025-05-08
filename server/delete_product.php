<?php
    include 'connect_database.php';
    $product_id = $_POST['product_id'];
    $sql = "DELETE FROM product WHERE id = $product_id";
    $result = $conn->query($sql);

    if ($result === TRUE) {
        header("location: ../app/product.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
?>