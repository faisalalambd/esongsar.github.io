<?php

 include 'config.php';
 
// Escape user inputs for security
  $id=$_GET['id'];
 $customer_name  = ( $_REQUEST['customer_name']);
 $customer_phone  = ( $_REQUEST['phone']);
 $customer_address  = ( $_REQUEST['address']);
 echo $total  = ( $_REQUEST['total']);
 
//  echo $quantity  = ( $_REQUEST['quantity']);

$sql = "SELECT * FROM product where id=$id";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
        $product_name=$row['product_name'];
        if($row['special_price']>0){
         $price=$row['special_price'];
        }else 
        {
          $price=$row['price'];
        }
          $image=$row['product_image'];
          $category=$row['product_type'];
          $shop=$row['shop_name'];
          $shop_number=$row['shop_num'];
          $market=$row['market_name'];
      }
    }
        
      
        $quantity=$total/$price;
$flag=1;

// Attempt insert query execution

$sql = "INSERT INTO orders (customer_name,customer_number,customer_address,product_name,product_price,product_image,product_category,shop_name,shop_number,market_name,total_price,quantity,flag) VALUES ('$customer_name','$customer_phone','$customer_address','$product_name','$price','$image','$category','$shop','$shop_number','$market','$total','$quantity','$flag')";
if(mysqli_query($conn, $sql)){
echo "Records added successfully.";
} else{
   echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}

?>
