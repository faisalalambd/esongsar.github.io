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

                <div class="col-12 col-md-12 col-lg-12">

                    <div class="card">

                        <div class="card-header">
                            <h4>Product Form</h4>
                        </div>

                        <div class="card-body">
                        <form method="POST" action="confirm_product.php" enctype="multipart/form-data">
                    <div class="form-group">
                      <label>Market Name</label>
                      <select class="form-control select2" name="market_name">
                      
						<?php
                              $sql = "SELECT * FROM market order by id DESC";
                                $result = $conn->query($sql);
                                if ($result->num_rows > 0) {
                                    // output data of each row
                                    while($row = $result->fetch_assoc()) {
                                    ?>
										<option value="<?php echo $row['market_name']?>"><?php echo $row['market_name']?></option>
								<?php }}?>
                      </select>
                    </div>
                    
                     <div class="form-group">
                      <label>Vendor Name</label>
                      <select class="form-control select2" name="market_name">
                      
						<?php
                              $sql = "SELECT * FROM vendor order by id DESC";
                                $result = $conn->query($sql);
                                if ($result->num_rows > 0) {
                                    // output data of each row
                                    while($row = $result->fetch_assoc()) {
                                    ?>
										<option value="<?php echo $row['shop_name']?>"><?php echo $row['shop_name']?></option>
								<?php }}?>
                      </select>
                    </div>
                            <div class="form-group">
                                <label>Product Name</label>
                                <input type="text" class="form-control"  name="product_name" required="">
                            </div>
                            <!-- <div class="form-group">
                                <label>Product type</label>
                                <input type="text" class="form-control"  name="product_type" required="">
                            </div> -->

                            <div class="form-group">
                                <label>Product Image</label>
                                <input type="file" name="choosefile" value="" />
                            </div>

                            <div class="form-group">
                                <label>Product Price</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            BDT
                                        </div>
                                    </div>
                                    <input type="text" class="form-control currency" name="price" required="">
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Special Price</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            BDT
                                        </div>
                                    </div>
                                    <input type="text" class="form-control currency" name="special_price" required="">
                                </div>
                            </div>

                            <!-- <div class="form-group">
                                <label>market Name</label>
                                <input type="text" class="form-control"  name="market_name" required="">
                            </div> 
                            <div class="form-group">
                                <label>Flag</label>
                                <input type="text" class="form-control"  name="flag" required="">
                            </div>


                            <div class="form-group">
                                <label>Shop Name</label>
                                <input type="text" class="form-control"  name="shop_name" required="">
                            </div> -->

                            <div class="form-group">
                                <label>Stock</label>
                                <input type="text" class="form-control"  name="stock" required="">
                            </div>

                            <div class="form-group">
                                <label>Product Category</label>
                                <select class="form-control" name='product_type'>
                                <?php
                                   
                                   $sql = "SELECT * FROM product_category";
                                    $result = $conn->query($sql);
                                    if ($result->num_rows > 0) {
                                         // output data of each row
                                        while($row = $result->fetch_assoc()) {
                                         
                                      ?>
                                    <option><?php echo $row['category_name']?></option>
                                <?php }}?>
                                </select>
                            </div> 


                            <div class="form-group">
                                <label>Product SKU</label>
                                <input type="text" class="form-control" name="sku" required="">
                            </div>
                                


                            
                            <div class="form-group">
                                <label>campaign</label>
                                <input type="text" class="form-control" name="campaign" required="">
                            </div>

                            <div class="form-group row">
                            <label class="col-sm-3 col-form-label"><strong>Description:</strong></label>
                            <div class="col-sm-9">
                                <textarea class="summernote" name="description"></textarea>
                            </div>
                        </div>

                        </div>

                            



                        <div class="card-footer">
                        <button type="submit" name="uploadfile">submit

</button>
                        </div>
</Form>

                    </div>

                </div>

            </div>

        </div>

    </section>


    <!-- #################### Footer Section #################### -->
    <?php include 'footer.php'?>