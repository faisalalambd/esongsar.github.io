<?php
 include 'session.php';

 include 'config.php';
 $sql = "SELECT * FROM user_registration where username='$login_session'";
 $result = $conn->query($sql);
 if ($result->num_rows > 0) {
     // output data of each row
     while($row = $result->fetch_assoc()) {
      $customer_name=$row['user_name'];
      $customer_number=$row['username'];
         $customer_address=$row['address'];
     }
   }

// Escape user inputs for security
 echo $id=$_GET['id'];
// echo $customer_name  = ( $_REQUEST['customer_name']);
// echo $customer_phone  = ( $_REQUEST['phone']);
// echo $customer_address  = ( $_REQUEST['address']);
//  echo $quantity  = ( $_REQUEST['quantity']);

$sql = "SELECT * FROM product where id=$id";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
        $product_name=$row['product_name'];
        if($row['special_price']>0){
        $price=$row['special_price'];
        }else{
          $price=$row['price'];
        }
          $product_image=$row['product_image'];
          $product_type=$row['product_type'];
          $shop_name=$row['shop_name'];
          $shop_num=$row['shop_num'];
          $market_name=$row['market_name'];
          
      }
    }
     $flag=0;  
     $quantity=1;
 
    $sql = "INSERT INTO orders (product_name,product_price,product_image,product_category,shop_name,shop_number,market_name,flag,quantity,total_price,customer_name,customer_number,customer_address)
 VALUES ('$product_name','$price','$product_image','$product_type','$shop_name','$shop_num','$market_name','$flag','$quantity','$price','$customer_name','$customer_number','$customer_address')";


// Attempt insert query execution

// $sql = "INSERT INTO orders (customer_name,customer_number,customer_address,product_name,product_price,product_image,product_category,market_name,shop_name,shop_number,market_name,quantity,total_price,flag)
//  VALUES ('$customer_name','$customer_phone','$customer_address','$product_name','$price','$product_image','$product_type','$shop_name','$shop_num','$market_name','1','$price','0')";
if(mysqli_query($conn, $sql)){
echo "Records added successfully.";
} else{
   echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
 header("location:cart.php");
?>
