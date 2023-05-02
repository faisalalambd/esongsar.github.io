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
                            <h4>Pending Table</h4>
                        </div>

                        <!-- #################### Add New Button #################### -->
                        <div style="margin-left:56rem;">
                            <a href="formPending.php" class="btn btn-dark">Add New</a>
                        </div>


                        <div class="card-body">

                            <div class="table-responsive">

                            <table class="table table-striped table-hover" id="tableExport" style="width:100%;">
                <tr>
                  <th class="text-center">
                    <div class="custom-checkbox custom-checkbox-table custom-control">
                      <input type="checkbox" data-checkboxes="mygroup" data-checkbox-role="dad"
                        class="custom-control-input" id="checkbox-all">
                      <label for="checkbox-all" class="custom-control-label">&nbsp;</label>
                    </div>
                  </th>
                  <th>Product Name</th>
                  <th>Product Image</th>
                  <th>Quantity</th>
                  <th>Product Price</th>
                  <th>Customer Name</th>
                  <th>Customer Number</th>
                  <th>Customer Address</th>
                  <th>Shop Name</th>
                  <th>Shop Number</th>
                  <th>Action</th>
                </tr>
                
                <?php

                                   
                                   $sql = "SELECT * FROM orders where ((shop_number='$login_session')&&(flag=1))";
                                     $result = $conn->query($sql);
                                     if ($result->num_rows > 0) {
                                         // output data of each row
                                         while($row = $result->fetch_assoc()) {
                      
                                       ?>
                <tr>
                  <td class="p-0 text-center">
                    <div class="custom-checkbox custom-control">
                      <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-2">
                      <label for="checkbox-2" class="custom-control-label">&nbsp;</label>
                    </div>
                  </td>
                  <td><?php echo $row['product_name']?></td>
                  <td><img src="image/<?php echo $row['product_image']?>" alt="Girl in a jacket" width="60" height="60"></td>
                  <td><?php echo $row['quantity']?></td>
                  <td><?php echo $row['product_price']?></td>
                  <td><?php echo $row['customer_name']?></td>
                  <td><?php echo $row['customer_number']?></td>
                  <td><?php echo $row['customer_address']?></td>
                  <td><?php echo $row['shop_name']?></td>
                  <td><?php echo $row['shop_number']?></td>
                  
                  <td><a href="#" class="btn btn-outline-primary">Detail</a></td>
                </tr>
               <?php }}?>
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