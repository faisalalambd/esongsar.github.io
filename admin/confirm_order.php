
<?php

//Attempt MySQL server connection. Assuming you are running MySQL
//server with default setting (user 'root' with no password) 
$link = mysqli_connect("localhost", "root", "", "ecommerce");

// Check connection
if ($link === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Escape user inputs for security
$name  = ($_REQUEST['name']);

// $product_type  = ($_REQUEST['product_type']); 

// $product_image  = ( $_REQUEST['product_image']);

$price  = ($_REQUEST['price']);


$customer_name  = ($_REQUEST['customer_name']);

$customer_number  = ($_REQUEST['customer_number']);

$customer_address  = ($_REQUEST['customer_address']);


// $product_category  = ( $_REQUEST['product_category']);

 echo $name;
 echo $price;
 echo $customer_name;
 echo $customer_number;
 echo $customer_address;


// $sql="INSERT INTO order (product_name) VALUES ('$name')";


$sql="INSERT INTO order (product_name,price,customer_name,customer_number,customer_address) 
VALUES ('$name','$price','$customer_name','$customer_number','$customer_address')";

if (mysqli_query($link, $sql)) {
    echo "Records added successfully.";
} else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}


// Close connection
mysqli_close($link);
?>
