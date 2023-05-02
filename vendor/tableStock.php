<!-- #################### Header Section #################### -->
<?php include 'header.php'?>

<?php include '../config.php'?>

<!-- #################### Vertical Nav Bar #################### -->
<div class="main-sidebar sidebar-style-2">
    <?php include 'nav.php'?>
</div>


<!-- #################### Main Content #################### -->
<div class="main-content">

    <section class="section">

        <div class="section-body">

            <div class="row">

                <div class="col-12">

                    <div class="card">

                        <div class="card-header">
                            <h4>Stock Table</h4>
                        </div>

                        <!-- #################### Add New Button #################### -->
                        <div style="margin-left:56rem;">
                            <a href="formProduct.php" class="btn btn-dark">Add New</a>
                        </div>


                        <div class="card-body">

                            <div class="table-responsive">

                                <table class="table table-striped table-hover" id="tableExport" style="width:100%;">

                                    <thead>
                                        <tr>
                                            <th>Product Id</th>
                                            <th>Product Name</th>
                                            <th>Stock </th>
                                            
                                            <th>Action</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                            
                                    <?php
                                   
                              $sql = "SELECT * FROM stock";
                                $result = $conn->query($sql);
                                if ($result->num_rows > 0) {
                                    // output data of each row
                                    while($row = $result->fetch_assoc()) {
									
								 ?>
                                        <tr>
                                        <td><?php echo $row['id']?></td>
                                            <td><?php echo $row['product_name']?></td>
                                            
                                            <td><?php echo $row['stock']?></td>
                                            <td><a href="#" class="btn btn-outline-primary">Detail</a></td>
                                        </tr>

                                        <?php	}}  ?>
                                    </tbody>

                                </table>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>
        
    </section>


    <!-- #################### Footer Section #################### -->
    <?php include 'footer.php'?>