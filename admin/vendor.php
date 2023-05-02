<!-- #################### Header Section #################### -->
<?php include 'session.php'?>
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
                            <h4>Vendor  List</h4>
                        </div>

                        <!-- #################### Add New Button #################### -->
                        <div style="margin-left:56rem;">
                            <a href="register.php" class="btn btn-dark">Add New</a>
                        </div>


                        <div class="card-body">

                            <div class="table-responsive">

                                <table class="table table-striped table-hover" id="tableExport" style="width:100%;">

                                    <thead>
                                        <tr>
                                            <th>Vendor Id</th>
                                            <th>Vendor Name</th>
                                            <th>Vendor logo</th>
                                            <th>Vendor Market</th>
                                            <th>Vendor Shop</th>
                                            <th>Shop Type</th>
                                            <th>Market Type</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                            
                                    <?php
                                   
                              $sql = "SELECT * FROM vendor";
                                $result = $conn->query($sql);
                                if ($result->num_rows > 0) {
                                    // output data of each row
                                    while($row = $result->fetch_assoc()) {
									
								 ?>
                                        <tr>
                                        <td><?php echo $row['shop_id']?></td>
                                           <td><?php echo $row['owner_name']?></td>
                                            <td><img src="../vendor/image/<?php echo  $row['shop_logo']?>" alt="" width="70" height="60"></td>
                                            <td><?php echo $row['market_name']?></td>
                                             <td><a href="vendor_products.php?name=<?php echo $row['username']?>"><?php echo $row['shop_name']?></a></td>
                                            <td><?php echo $row['shop_type']?></td>
                                            <td><?php echo $row['market_type']?></td>
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