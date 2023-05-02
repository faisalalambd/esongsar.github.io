<?php include '../config.php'?>
<!DOCTYPE html>
<html lang="en">


<!-- auth-register.html  21 Nov 2019 04:05:01 GMT -->
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Otika - Admin Dashboard Template</title>
  <!-- General CSS Files -->
  <link rel="stylesheet" href="assets/css/app.min.css">
  <link rel="stylesheet" href="assets/bundles/jquery-selectric/selectric.css">
  <!-- Template CSS -->
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/components.css">
  <!-- Custom style CSS -->
  <link rel="stylesheet" href="assets/css/custom.css">
  <link rel='shortcut icon' type='image/x-icon' href='assets/img/favicon.ico' />
</head>

<body>
  <div class="loader"></div>
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
            <div class="card card-primary">
              <div class="card-header">
                <h4>Register</h4>
              </div>
              <div class="card-body">
                <form action="confirm_market.php" method="POST" enctype="multipart/form-data">
					 
                    <div class="row">
						<div class="form-group col-12">
						  <label for="frist_name">Market Name</label>
						  <input id="frist_name" type="text" class="form-control" name="market_name" autofocus>
						</div>
                        <div class="form-group">
                                <label>Shop Logo</label>
                                <input type="file" name="choosefile" value="" />
                            </div>

                        <div class="form-group col-6">
						  <label for="frist_name">Address</label>
						  <input id="frist_name" type="text" class="form-control" name="address" autofocus>
						</div>

            <div class="form-group col-6">
						  <label for="frist_name">City</label>
						  <input id="frist_name" type="text" class="form-control" name="city" autofocus>
						</div>


            <div class="form-group col-6">
                      <label>Shop Type</label>
                      <select class="form-control select2" name="shop_type">
                      
						<?php
                              $sql = "SELECT * FROM market_category order by id DESC";
                                $result = $conn->query($sql);
                                if ($result->num_rows > 0) {
                                    // output data of each row
                                    while($row = $result->fetch_assoc()) {
                                    ?>
										<option value="<?php echo $row['category_name']?>"><?php echo $row['category_name']?></option>
								<?php }}?>
                      </select>
                    </div>
					  </div>
					   
					
					  <div class="form-group">
						<button type="submit" name="uploadfile" class="btn btn-primary btn-lg btn-block">
						  Add Market
						</button>
					  </div>
                </form>
              </div>
              <div class="mb-4 text-muted text-center">
                Already Registered? <a href="auth-login.html">Login</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <!-- General JS Scripts -->
  <script src="assets/js/app.min.js"></script>
  <!-- JS Libraies -->
  <script src="assets/bundles/jquery-pwstrength/jquery.pwstrength.min.js"></script>
  <script src="assets/bundles/jquery-selectric/jquery.selectric.min.js"></script>
  <!-- Page Specific JS File -->
  <script src="assets/js/page/auth-register.js"></script>
  <!-- Template JS File -->
  <script src="assets/js/scripts.js"></script>
  <!-- Custom JS File -->
  <script src="assets/js/custom.js"></script>
</body>


<!-- auth-register.html  21 Nov 2019 04:05:02 GMT -->
</html>