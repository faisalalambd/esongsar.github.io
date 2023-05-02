

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
echo $market_name  = ( $_REQUEST['market_name']);
echo $address  = ( $_REQUEST['address']);
echo $city  = ( $_REQUEST['city']);
echo $shop_type  = ( $_REQUEST['shop_type']);

//




 
// Attempt insert query execution

$sql = "INSERT INTO market (market_name,image,address,city,category) VALUES ('$market_name','$filename','$address','$city','$shop_type')";
if(mysqli_query($conn, $sql)){
// echo "Records added successfully.";
} else{
   echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}


// Close connection
mysqli_close($conn);
?>
<?php
$text="Your Registration is Successful !! Please Login!";
/* Redirect browser */
//header("Location:index.php?text='$text'"); 
exit();
?>