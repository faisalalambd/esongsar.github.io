

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
$shop_name  = ( $_REQUEST['shop_name']);
$owner_name  = ( $_REQUEST['owner_name']);
$username  = ( $_REQUEST['username']);
$market_name  = ( $_REQUEST['market_name']);
$owner_city  = ( $_REQUEST['shop_city']);
$password  = ( $_REQUEST['password']);
$owner_city=($_REQUEST['shop_city']);
$shop_type=($_REQUEST['shop_type']);

$sql = "SELECT * FROM market where market_name='$market_name'";
                                $result = $conn->query($sql);
                                if ($result->num_rows > 0) {
                                    // output data of each row
                                    while($row = $result->fetch_assoc()) {
$category=$row['category'];
                                    }}
// Attempt insert query execution

$sql = "INSERT INTO vendor (shop_name,owner_name,username,owner_city,password,market_name,shop_type,shop_logo,market_type) VALUES ('$shop_name','$owner_name','$username','$owner_city','$password','$market_name','$shop_type','$filename','$category')";
if(mysqli_query($conn, $sql)){
// echo "Records added successfully.";
} else{
   echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}


// Close connection

?>
<?php
$text="Your Registration is Successful !! Please Login!";
/* Redirect browser */
header("Location:index.php?text='$text'"); 
exit();
?>