<?php
include 'connect_database.php';

if ($conn) {
    $productName = $_POST['product_name'];
    $price = $_POST['price'];
    $description = $_POST['description'];
    $image = $_POST['image'];

    $sql = "INSERT INTO product (product_name,price,description,image) VALUES ('$productName','$price','$description','$image')";
    echo $sql;
    $result = $conn->query($sql);

    if ($result === TRUE) {
        header("location: ../app/product.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
} else {
    echo "Error connecting to database.";
    $user = null;
}
