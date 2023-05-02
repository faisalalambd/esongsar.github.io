
<?php

include 'config.php';
 
// Escape user inputs for security
echo $name = ( $_REQUEST['name']);
echo $username  = ( $_REQUEST['username']);
echo $email  = ( $_REQUEST['email']);
echo $address  = ( $_REQUEST['address']);

echo $password  = ( $_REQUEST['password']);


// Attempt insert query execution

$sql = "INSERT INTO user_registration (user_name,username,email,address,password) VALUES ('$name','$username','$email','$address','$password')";
if(mysqli_query($conn, $sql)){
echo "Records added successfully.";
} else{
   echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}


?>
<?php
$text="Your Registration is Successful !! Please Login!";
/* Redirect browser */
header("Location:user_login.php?text='$text'"); 
exit();
?>