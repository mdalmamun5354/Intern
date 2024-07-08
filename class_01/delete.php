<?php
include 'db_connect.php';

$id = $_GET["id"];

$sql = "DELETE FROM MyGuests WHERE id='$id'";


if ($conn->query($sql)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
header("Location: index.php"); // Redirect back to the main page
exit();
?>
