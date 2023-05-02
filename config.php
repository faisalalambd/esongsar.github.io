<?php
$servername = "localhost";
  $username = "srsomgcd_ecommerce_admin";
  $password = "123@jAmifree";
  $db       = 'srsomgcd_ecommerce';

  // Create connection
  $conn = new mysqli($servername, $username, $password, $db);
//echo "Database Connected Successfully";
  // Check connection
  if ($conn->connect_error) {
    //die("Connection failed: " . $conn->connect_error);
  } 

// echo 'website maintance is running';
  ?>
	