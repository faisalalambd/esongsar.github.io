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
                            <h4>Delivered Form</h4>
                        </div>

                        <div class="card-body">
                        <form method="POST" action="confirm_order.php">

                            <div class="form-group">
                                <label>Product Name</label>
                                <input type="text" class="form-control"   name="name" required="">
                            </div>

                            <!-- <div class="form-group">
                                <label>Product Image</label>
                                <input type="file" class="form-control"  name="product_image" required="">
                            </div> -->

                            <div class="form-group">
                                <label>Product Price</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            BDT
                                        </div>
                                    </div>
                                    <input type="text" class="form-control currency"  name="price" required="">
                                </div>
                            </div>

                            <!-- <div class="form-group">
                                <label>Product Category</label>
                                <select class="form-control">
                                    <option>Option 1</option>
                                    <option>Option 2</option>
                                    <option>Option 3</option>
                                </select>
                            </div> -->

                            <div class="form-group">
                                <label>Customer Name</label>
                                <input type="text" class="form-control" name="customer_name" required="">
                            </div>

                            <div class="form-group">
                                <label>Customer Number</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <i class="fas fa-phone"></i>
                                        </div>
                                    </div>
                                    <input type="text" class="form-control phone-number"  name="customer_number" required="">
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Customer Address</label>
                                <input type="text" class="form-control" name="customer_address" required="">
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