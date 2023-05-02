<!-- #################### Header Section #################### -->
<?php include 'header.php'?>

<?php $id=$_GET['id'];?>

<?php
include '../config.php';
?>
 <?php

                                   
                                   $sql = "SELECT * FROM commision order by id desc limit 1";
                                     $result = $conn->query($sql);
                                     if ($result->num_rows > 0) {
                                         // output data of each row
                                         while($row = $result->fetch_assoc()) {
                                            $commission=$row['commission'];
                                            $id=$row['id'];
                                      }} ?>


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
                        <form method="POST" action="complete_edit.php?id=<?php echo $id?>">
                            <div class="form-group">
                                <label>Commision Rate</label>
                                <input type="text" class="form-control" value="<?php echo $commission?>" name="commission" required>
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