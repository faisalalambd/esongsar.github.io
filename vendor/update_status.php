<?php 
echo $id=$_GET['id'];
?>

<?php
include '../config.php';

$sql = "UPDATE orders SET flag=2 WHERE id=$id";

if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}

$conn->close();
?>