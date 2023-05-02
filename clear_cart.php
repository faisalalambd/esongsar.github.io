<?php
include 'session.php';
include_once 'config.php';

$sql = "UPDATE orders SET flag=1 WHERE customer_number='$login_session'";

if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}

$conn->close();
?>