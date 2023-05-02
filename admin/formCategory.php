<!-- #################### Header Section #################### -->
<?php include 'header.php'?>



<?php
include '../config.php';



// Escape user inputs for security
$category_name  = ($_REQUEST['category_name']);

$sql = "INSERT INTO product_category (category_name) VALUES ('$category_name')";




if (mysqli_query($conn, $sql)) {
    echo "Records added successfully.";
} else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}

?>

<!-- #################### Vertical Nav Bar #################### -->
<div class="main-sidebar sidebar-style-2">
    <?php include 'nav.php'?>
</div>


<!-- #################### Main Content #################### -->
<div class="main-content">

    <section class="section">

        <div class="section-body">

            <div class="row">

                <div class="col-12 col-md-12 col-lg-12">

                    <div class="card">

                        <div class="card-header">
                            <h4>Category Form</h4>
                        </div>

                        <div class="card-body">
                        <form method="POST" action="">
                            <div class="form-group">
                                <label>Category Name</label>
                                <input type="text" class="form-control" name="category_name" required="">
                            </div>

                        </div>

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Sumbit</button>
                        </div>
</form>

                    </div>

                </div>

            </div>

        </div>

    </section>


    <!-- #################### Footer Section #################### -->
    <?php include 'footer.php'?>