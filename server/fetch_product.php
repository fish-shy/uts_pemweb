<?php
include 'connect_database.php';

$product = array();

$sql = "SELECT * FROM product";
$result = $conn->query($sql);

if ($result) {
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $product[] = $row;
        }
    }
    $result->free();
} else {
    echo "Error executing query: " . $conn->error;
    $product = null;
}
$conn->close();
?>