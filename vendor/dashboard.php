<!-- #################### Header Section #################### -->
<?php
include('login.php'); // Includes Login Script
if(!isset($_SESSION['login_user'])){
header("location: index.php"); // Redirecting To Profile Page
}

?>
<?php include 'session.php'?>
<?php include 'header.php'?>
<?php include '../config.php'?>

<!-- #################### Vertical Nav Bar #################### -->
<div class="main-sidebar sidebar-style-2">
  <?php include 'nav.php'?>
</div>

<?php
$ro=0;
                                   
                                   $sql = "SELECT * FROM user_registration";
                                     $result = $conn->query($sql);
                                     if ($result->num_rows > 0) {
                                         // output data of each row
                                         while($row = $result->fetch_assoc()) {
                       $ro+=1;
                                         }}?>

<?php
$orderss=0;
                                   
                                   $sql = "SELECT * FROM orders";
                                     $result = $conn->query($sql);
                                     if ($result->num_rows > 0) {
                                         // output data of each row
                                         while($row = $result->fetch_assoc()) {
                       $orderss+=1;
                                         }}?>

<?php
$my_order=0;
$my_sale=0;
                                   
                                   $sql = "SELECT * FROM orders where shop_number='$login_session'";
                                     $result = $conn->query($sql);
                                     if ($result->num_rows > 0) {
                                         // output data of each row
                                         while($row = $result->fetch_assoc()) {
                       $my_order+=1;
                       $my_sale+=$row['total_price'];
                                         }}?>
                                         
                                         
                                         <?php

$my_product=0;
                                   
                                   $sql = "SELECT * FROM product where shop_num='$login_session'";
                                     $result = $conn->query($sql);
                                     if ($result->num_rows > 0) {
                                         // output data of each row
                                         while($row = $result->fetch_assoc()) {
                       $my_product+=1;
                       
                                         }}?>
                                         
                                         
                                           <?php

$my_earning=0;
                                   
                                   $sql = "SELECT * FROM orders where ((shop_number='$login_session')&&(flag=2))";
                                     $result = $conn->query($sql);
                                     if ($result->num_rows > 0) {
                                         // output data of each row
                                         while($row = $result->fetch_assoc()) {
                       $my_earning+=$row['total_price'];
                       
                                         }}?>
                                         
                                         
                                         <?php

                                               $sql = "SELECT * FROM commision order by id desc limit 1";
                                                 $result = $conn->query($sql);
                                                 if ($result->num_rows > 0) {
                                                 // output data of each row
                                                 while($row = $result->fetch_assoc()) {
                                                    $comission=$row['commission'];
                                         }}?>
                                         <?php 
                                            $total_Commision=($comission*$my_earning)/100;
                                            
                                         ?>
                                         
                                          <?php
                                                $paid=0;
                                               $sql = "SELECT * FROM vendor_payment where vendor_phone='login_session'";
                                                 $result = $conn->query($sql);
                                                 if ($result->num_rows > 0) {
                                                 // output data of each row
                                                 while($row = $result->fetch_assoc()) {
                                                   $paid+=$row['ammount'];
                                         }}?>
                                         <?php
                                            $due=$total_Commision-$paid;
                                         ?>
                                         
                                       

<!-- Main Content -->
<div class="main-content">

  <section class="section">

    <div class="row ">
      <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="card">
          <div class="card-statistic-4">
            <div class="align-items-center justify-content-between">
              <div class="row ">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                  <div class="card-content">
                    <h5 class="font-15">Total Orders</h5>
                    <h2 class="mb-3 font-18"><?php echo $orderss?></h2>
                    <!-- <p class="mb-0"><span class="col-green">10%</span> Increase</p> -->
                  </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                  <div class="banner-img">
                    <img src="assets/img/banner/1.png" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="card">
          <div class="card-statistic-4">
            <div class="align-items-center justify-content-between">
              <div class="row ">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                  <div class="card-content">
                    <h5 class="font-15"> Customers</h5>
                    <h2 class="mb-3 font-18"><?php echo $ro?></h2>
                    <!-- <p class="mb-0"><span class="col-orange">09%</span> Decrease</p> -->
                  </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                  <div class="banner-img">
                    <img src="assets/img/banner/2.png" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="card">
          <div class="card-statistic-4">
            <div class="align-items-center justify-content-between">
              <div class="row ">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                  <div class="card-content">
                    <h5 class="font-15">My Orders</h5>
                    <h2 class="mb-3 font-18"><?php echo $my_order?></h2>
                    <!-- <p class="mb-0"><span class="col-green">18%</span> -->
                      <!-- Increase</p> -->
                  </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                  <div class="banner-img">
                    <img src="assets/img/banner/3.png" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="card">
          <div class="card-statistic-4">
            <div class="align-items-center justify-content-between">
              <div class="row ">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                  <div class="card-content">
                    <h5 class="font-15">My Selling Amount</h5>
                    <h2 class="mb-3 font-18">BDT <?php echo $my_sale?></h2>
                    <!-- <p class="mb-0"><span class="col-green">42%</span> Increase</p> -->
                  </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                  <div class="banner-img">
                    <img src="assets/img/banner/4.png" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      
        <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
          <div class="card-statistic-4">
            <div class="align-items-center justify-content-between">
              <div class="row ">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                  <div class="card-content">
                    <h5 class="font-15">Available Products</h5>
                    <h2 class="mb-3 font-18">You Have <?php echo $my_product?></h2>
                    <!-- <p class="mb-0"><span class="col-green">42%</span> Increase</p> -->
                  </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                  <div class="banner-img">
                    <img src="assets/img/banner/4.png" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      
        <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
          <div class="card-statistic-4">
            <div class="align-items-center justify-content-between">
              <div class="row ">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                  <div class="card-content">
                    <h5 class="font-15">My Earning  Amount</h5>
                    <h2 class="mb-3 font-18">BDT <?php echo  $my_earning?></h2>
                    <!-- <p class="mb-0"><span class="col-green">42%</span> Increase</p> -->
                  </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                  <div class="banner-img">
                    <img src="assets/img/banner/4.png" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      
    
      
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-6">
        <div class="card">
          <div class="card-statistic-4">
            <div class="align-items-center justify-content-between">
              <div class="row ">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                  <div class="card-content">
                    <h5 class="font-15">Total E Songsar Commision</h5>
                    <h2 class="mb-3 font-18">BDT <?php echo $total_Commision?></h2>
                    <!-- <p class="mb-0"><span class="col-green">42%</span> Increase</p> -->
                  </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                  <div class="banner-img">
                    <img src="assets/img/banner/4.png" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      
      
      
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-6">
        <div class="card">
          <div class="card-statistic-4">
            <div class="align-items-center justify-content-between">
              <div class="row ">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                  <div class="card-content">
                    <h5 class="font-15">Due E Songsar Commision</h5>
                    <h2 class="mb-3 font-18">BDT <?php echo $due?></h2>
                    <a href="payment.php?due=<?php echo $due?>" class="btn btn-primary btn-sm">Pay Now</a>
                    <!-- <p class="mb-0"><span class="col-green">42%</span> Increase</p> -->
                  </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                  <div class="banner-img">
                    <img src="assets/img/banner/4.png" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      
    </div>


   
    

    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h4>Recent Orders</h4>
            <div class="card-header-form">
              <form>
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Search">
                  <div class="input-group-btn">
                    <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                  </div>
                </div>
              </form>
            </div>
          </div>
          <div class="card-body p-0">
            <div class="table-responsive">
              <table class="table table-striped">
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
                  
                  <td><a href="update_status.php?id=<?php echo $row['id']?>" class="btn btn-outline-primary">Deliver</a></td>
                </tr>
               <?php }}?>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>

  </section>


  <!-- #################### Footer Section #################### -->
  <?php include 'footer.php'?>