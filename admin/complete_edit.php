<?php 
echo $id=$_GET['id'];
echo $commission  = ($_REQUEST['commission']);
include ('../config.php');
$sql = "UPDATE commision SET commission=$commission WHERE id=$id";

if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}

$conn->close();
?>

<script>window.location.replace("https://esongsar.srsoftbd.xyz/admin/commision.php");</script>
