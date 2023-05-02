<?php
include('session.php');
if(!isset($_SESSION['login_user'])){
header("location: index.php"); // Redirecting To Home Page
}
else{
    
                                   
    $sql = "SELECT * FROM vendor where username='$login_session'";
     $result = $conn->query($sql);
     if ($result->num_rows > 0) {
          // output data of each row
         while($row = $result->fetch_assoc()) {
         
       $shop_name=$row['shop_name'];
          $market_name=$row['market_name'];
          $shop_type=$row['shop_type'];
        }
    }
          
    
}
?>




<?php
$msg = "";

// check if the user has clicked the button "UPLOAD" 

if (isset($_POST['uploadfile'])) {

    $filename = $_FILES["choosefile"]["name"];

    $tempname = $_FILES["choosefile"]["tmp_name"];  

        $folder = "image/".$filename;

           

        // Add the image to the "image" folder"

        if (move_uploaded_file($tempname, $folder)) {

            $msg = "Image uploaded successfully";

        }else{

            $msg = "Failed to upload image";

    }

}

echo $filename;
?>


<?php

include '../config.php';


// Escape user inputs for security
$product_name  = ($_REQUEST['product_name']);

$product_type  = ($_REQUEST['product_type']);

// $product_image  = ( $_REQUEST['product_image']);

$price  = ($_REQUEST['price']);

$special_price  = ($_REQUEST['special_price']);

// $market_name  = ($_REQUEST['market_name']);

// $shop_name  = ($_REQUEST['shop_name']);

$stock  = ($_REQUEST['stock']);

$sku  = ($_REQUEST['sku']);

$campaign  = ($_REQUEST['campaign']);

$description  = ($_REQUEST['description']);

// $product_category  = ( $_REQUEST['product_category']);




                                   
                                   $sql = "SELECT * FROM commision Order by id desc limit 1";
                                     $result = $conn->query($sql);
                                     if ($result->num_rows > 0) {
                                         // output data of each row
                                         while($row = $result->fetch_assoc()) {
                                             $commision=$row['commission'];
                                         }}
                                         
                                         $price=($commision*$price)/100+$price;
                                         $special_price=($commision*$special_price)/100+$special_price;

$sql = "INSERT INTO product 
(product_name, product_type, price, special_price, stock, sku, campaign, description,market_name,shop_name,product_image,product_category,shop_num)
VALUES ('$product_name', '$product_type', '$price', '$special_price', '$stock', '$sku', '$campaign', '$description','$market_name','$shop_name','$filename','$shop_type','$login_session')";




if (mysqli_query($conn, $sql)) {
    echo "Records added successfully.";
} else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}


// Close connection

?>



<?php





$sql = "INSERT INTO stock 
(product_name)
VALUES ('$product_name')";




if (mysqli_query($conn, $sql)) {
    echo "Records added successfully.";
} else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}


header("Location:tableProduct.php"); 
?>