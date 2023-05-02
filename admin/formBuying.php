<!-- #################### Header Section #################### -->
<?php include 'header.php'?>


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
                            <h4>Buying Form</h4>
                        </div>

                        <div class="card-body">

                            <div class="form-group">
                                <label>Product Name</label>
                                <input type="text" class="form-control" required="">
                            </div>

                            <div class="form-group">
                                <label>Product Image</label>
                                <input type="file" class="form-control" required="">
                            </div>

                            <div class="form-group">
                                <label>Product Category</label>
                                <select class="form-control">
                                    <option>Option 1</option>
                                    <option>Option 2</option>
                                    <option>Option 3</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Product Quantity</label>
                                <input type="text" class="form-control" required="">
                            </div>

                        </div>

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Sumbit</button>
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>


    <!-- #################### Footer Section #################### -->
    <?php include 'footer.php'?>