<!-- #################### Header Section #################### -->


<?php echo $due=$_GET['due']?>
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
                    <form method="post" action="confirm_payment.php">
                        <div class="card-header">
                            <h4>Your Due Ammount is <?php echo $due?></h4>
                        </div>

                        <div class="card-body">

                            <div class="form-group">
                                <label>Pay Ammount</label>
                                <input type="text" name="payment" class="form-control" required>
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