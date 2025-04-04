<?php
include 'db.php';

if(isset($_GET['id'])) {
    $email = $_GET['id'];

    // Delete the record with the specified email from the database
    $sql = "DELETE FROM responses WHERE email = '$email'";
    if ($conn->query($sql) === TRUE) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . $conn->error;
    }

    header('Location: logins.php'); // Redirect back to the logins.php page
}

$conn->close();
?>
