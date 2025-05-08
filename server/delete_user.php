
<?php
    include 'connect_database.php';
    $user_id = $_POST['user_id'];
    $sql = "DELETE FROM user WHERE id = $user_id";
    $result = $conn->query($sql);

    if ($result === TRUE) {
        header("location: ../app/user.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
?>