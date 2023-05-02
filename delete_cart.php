<?php
$id=$_GET['id'];
include 'config.php';

// sql to delete a record
$sql = "DELETE FROM orders WHERE id=$id";

if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . $conn->error;
}
header("location:cart.php");
$conn->close();
?>