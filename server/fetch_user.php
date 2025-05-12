<?php
include 'connect_database.php';

$user = array();

$sql = "SELECT username, is_admin , id , profile_picture  FROM user";
$result = $conn->query($sql);

if ($result) {
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $user[] = $row;
        }
    }
    $result->free();
} else {
    echo "Error executing query: " . $conn->error;
    $user = null;
}
$conn->close();
?>