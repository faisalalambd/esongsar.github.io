
<?php include_once 'config.php'?>

<!DOCTYPE html>
<html class="no-js" lang="en">

<!-- belle/shop-left-sidebar.html   11 Nov 2019 12:37:31 GMT -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="x-ua-compatible" content="ie=edge">
<title>E-Songsar</title>
<meta name="description" content="description">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Favicon -->
<link rel="shortcut icon" href="assets/images/favicon.png" />
<!-- Plugins CSS -->
<link rel="stylesheet" href="assets/css/plugins.css">
<!-- Bootstap CSS -->
<link rel="stylesheet" href="assets/css/bootstrap.min.css">
<!-- Main Style CSS -->
<link rel="stylesheet" href="assets/css/style.css">
<link rel="stylesheet" href="assets/css/responsive.css">
</head>
<body class="template-collection belle">
<div class="pageWrapper">
	<!--Search Form Drawer-->
	<div class="search">
        <div class="search__form">
            <form class="search-bar__form" action="#">
                <button class="go-btn search__button" type="submit"><i class="icon anm anm-search-l"></i></button>
                <input class="search__input" type="search" name="q" value="" placeholder="Search entire store..." aria-label="Search" autocomplete="off">
            </form>
            <button type="button" class="search-trigger close-btn"><i class="icon anm anm-times-l"></i></button>
        </div>
    </div>
    <!--End Search Form Drawer-->
    <!--End Top Header-->
    <!--Header-->
    <div class="header-wrap animated d-flex">
    	<div class="container-fluid">        
            <div class="row align-items-center">
            	<!--Desktop Logo-->
                <div class="logo col-md-2 col-lg-2 d-none d-lg-block">
                    <a href="index.php">
                    	<img src="assets/images/logo.svg" alt="Belle Multipurpose Html Template" title="Belle Multipurpose Html Template" />
                    </a>
                </div>
                <!--End Desktop Logo-->
                <div class="col-2 col-sm-3 col-md-3 col-lg-8">
                	<div class="d-block d-lg-none">
                        <button type="button" class="btn--link site-header__menu js-mobile-nav-toggle mobile-nav--open">
                        	<i class="icon anm anm-times-l"></i>
                            <i class="anm anm-bars-r"></i>
                        </button>
                    </div>

                    <?php include 'nav.php' ?>
                </div>


                
                <div class="col-6 col-sm-6 col-md-6 col-lg-2 d-block d-lg-none mobile-logo">
                	<div class="logo">
                        <a href="index.html">
                            <img src="assets/images/logo.svg" alt="Belle Multipurpose Html Template" title="Belle Multipurpose Html Template" />
                        </a>
                    </div>
                </div>
                <div class="col-4 col-sm-3 col-md-3 col-lg-2">
               <?php
                           $num=0;
                           
                            $sql = "SELECT * FROM orders where ((customer_number='$login_session')&&(flag=0))";
                            $result = $conn->query($sql);
                            if ($result->num_rows > 0) {
                                // output data of each row
                                while($row = $result->fetch_assoc()) {
                                 
                                  $num+=1;
                                }}?>
                	<div class="site-cart">  
                    <a href="user_login.php" title="User Profile">
                        <i class="icon anm anm-users"></i>
                    </a> 
                    <!-- <i class="icon anm anm-users" style="margin-right:7px;font-size:20px"></i></a> -->
                    <a href="cart.php" class="site-header__cart" title="Cart">
                        	<i class="icon anm anm-bag-l"></i>
                            <span id="CartCount" class="site-header__cart-count" data-cart-render="item_count"><?php echo $num?></span>
                        </a>
                        <!--Minicart Popup-->
                        <div id="header-cart" class="block block-cart">
                            <ul class="mini-products-list">
                                
                                  <?php
                           $total=0;
                           
                            $sql = "SELECT * FROM orders where ((customer_number='$login_session')&&(flag=0))";
                            $result = $conn->query($sql);
                            if ($result->num_rows > 0) {
                                // output data of each row
                                while($row = $result->fetch_assoc()) {
                                 
                                  $total+=$row['product_price'];
                                ?>
                                <li class="item">
                                    <a class="product-image" href="#">
                                        <img src="vendor/image/<?php echo $row['product_image']?>" alt="3/4 Sleeve Kimono Dress" title="" />
                                    </a>
                                    <div class="product-details">
                                        <a href="delete_cart.php?id=<?php echo $row['id']?>" class="remove"><i class="anm anm-times-l" aria-hidden="true"></i></a>
                                       
                                        <a class="pName" href="cart.php"><?php echo $row['product_name']?></a>
                                        
                                        <div class="wrapQtyBtn">
                                            <div class="qtyField">
                                                <span class="label">Qty:</span>
                                              
                                                <input type="text" id="Quantity" name="quantity" value="1" class="product-form__input qty">
                                                
                                            </div>
                                        </div>
                                        <div class="priceRow">
                                            <div class="product-price">
                                                <span class="money">BDT : <?php echo $row['product_price']?></span>
                                            </div>
                                         </div>
                                    </div>
                                </li>
                             <?php }} ?>
                            </ul>
                            <div class="total">
                                <div class="total-in">
                                    <span class="label">Cart Subtotal:</span><span class="product-price"><span class="money">BDT : <?php echo $total?></span></span>
                                </div>
                                 <div class="buttonSet text-center">
                                    <a href="cart.php" class="btn btn-secondary btn--small">View Cart</a>
                                    <a href="cart_checkout.php" class="btn btn-secondary btn--small">Checkout</a>
                                </div>
                            </div>
                        </div>
                        <!--End Minicart Popup-->
                    </div>
                    
                </div>
        	</div>
        </div>
    </div>
    <!--End Header-->
    <?php include 'mobile_menu.php' ?>