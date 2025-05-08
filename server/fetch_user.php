<?php
include 'connect_database.php'; // Make sure this path is correct

$user = array(); // Initialize $user as an empty array

// Check if $conn is a valid connection object
if ($conn) {
    $sql = "SELECT username, is_admin FROM user"; // Select only needed columns
    $result = $conn->query($sql);

    // Check if query was successful
    if ($result) {
        // Check if there are any rows returned
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $user[] = $row;
            }
        }
        // No need for an else here, $user remains empty if no rows
        $result->free(); // Free result set
    } else {
        // Handle query error (optional but good practice)
        echo "Error executing query: " . $conn->error;
        $user = null; // Indicate an error or no data due to error
    }
    $conn->close(); // Close connection when done
} else {
    // Handle connection error
    echo "Error connecting to database.";
    $user = null; // Indicate an error
}

?>