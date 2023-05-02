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

                <div class="col-12">

                    <div class="card">

                        <div class="card-header">
                            <h4>Expenses Table</h4>
                        </div>

                        <!-- #################### Add New Button #################### -->
                        <div style="margin-left:56rem;">
                            <a href="formExpenses.php" class="btn btn-dark">Add New</a>
                        </div>


                        <div class="card-body">

                            <div class="table-responsive">

                                <table class="table table-striped table-hover" id="tableExport" style="width:100%;">

                                    <thead>
                                        <tr>
                                            <th>Expense Field</th>
                                            <th>Date</th>
                                            <th>Expense Amount</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>

                                    <tbody>

                                        <tr>
                                            <td>Lorem Ipsum</td>
                                            <td>YYYY/MM/DD</td>
                                            <td>Lorem Ipsum</td>
                                            <td><a href="#" class="btn btn-outline-primary">Detail</a></td>
                                        </tr>

                                        <tr>
                                            <td>Lorem Ipsum</td>
                                            <td>YYYY/MM/DD</td>
                                            <td>Lorem Ipsum</td>
                                            <td><a href="#" class="btn btn-outline-primary">Detail</a></td>
                                        </tr>

                                        <tr>
                                            <td>Lorem Ipsum</td>
                                            <td>YYYY/MM/DD</td>
                                            <td>Lorem Ipsum</td>
                                            <td><a href="#" class="btn btn-outline-primary">Detail</a></td>
                                        </tr>

                                        <tr>
                                            <td>Lorem Ipsum</td>
                                            <td>YYYY/MM/DD</td>
                                            <td>Lorem Ipsum</td>
                                            <td><a href="#" class="btn btn-outline-primary">Detail</a></td>
                                        </tr>

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