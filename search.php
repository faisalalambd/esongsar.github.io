
<?php include 'config.php'?>
<?php include 'header.php'?>
 
    <?php
                            //   $sql = "SELECT * FROM vendor where slug='$shop_name'";
                            //     $result = $conn->query($sql);
                            //     if ($result->num_rows > 0) {
                            //         // output data of each row
                            //         while($row = $result->fetch_assoc()) {
							// 			$name=$row['shop_name'];
							// 	}}  ?>
    <!--Body Content-->
    <div id="page-content">
    	<!--Collection Banner
    	<div class="collection-header">
			<div class="collection-hero">
        		<div class="collection-hero__image"><img class="blur-up lazyload" data-src="assets/images/cat-women1.jpg" src="assets/images/cat-women1.jpg" alt="Women" title="Women" /></div>
        		<div class="collection-hero__title-wrapper"><h1 class="collection-hero__title page-width">Shop Grid 7 Column</h1></div>
      		</div>
		</div>
        <!--End Collection Banner-->
        
        <div class="container-fluid">
        	<div class="row">
            	<!--Sidebar-->
          <?php include 'side_menu.php'?>
                <!--End Sidebar-->
                <!--Main Content-->
                <div class="col-12 col-sm-12 col-md-9 col-lg-9 main-col shop-grid-7 style=margin-top:"30px">
                <style>
body {
  font-family: Arial;
}

* {
  box-sizing: border-box;
}

form.example input[type=text] {
  padding: 10px;
  font-size: 17px;
  border: 1px solid #000;
  float: left;
  width: 80%;
  background: #fff;
  padding-left:5px;
  border-radius: 25px;
  margin-right:10px;
}

form.example button {
  float: left;
  width: 15%;
  padding: 11px;
  background: #000;
  color: white;
  font-size: 17px;
  border: 1px #FF861A;
  border-left: none;
  cursor: pointer;
border-radius: 25px;
}

form.example button:hover {
  background: #ff8000;
  
}

form.example::after {
  content: "";
  clear: both;
  display: table;
   
  
}
</style>
				
 <form class="example" action="search.php" style="margin-left:10px;margin-bottom:30px">
  <input type="text" placeholder="Search in E-Songsar" name="search">
  <button type="submit">Search</button>
</form>				
                	<div class="productList">
                    	<div class="collection-header">
			<div class="collection-hero">
        		<div class="collection-hero__image"><img class="blur-up lazyload" data-src="assets/images/cat-women2.jpg" src="assets/images/cat-women2.jpg" alt="Women" title="Women" /></div>
        		<div class="collection-hero__title-wrapper"><h1 class="collection-hero__title page-width">Search Results</h1></div>
      		</div>
		</div>
                    	
                        <!--End Toolbar-->
                        <div class="grid-products grid--view-items">
                            <div class="row">
							<?php
                            $search='as';
                           $search  = ( $_REQUEST['search']);
                              $sql = "SELECT * FROM product where product_name='$search'";
                                $result = $conn->query($sql);
                                if ($result->num_rows > 0) {
                                    // output data of each row
                                    while($row = $result->fetch_assoc()) {
                           ?>
                               <div class="col-3 item">
                                <!-- start product image -->
                                <div class="product-image">
                                    <!-- start product image -->
                                    <a href="productDetails.php?id=<?php echo $row['id']?>" class="grid-view-item__link">
                                        <!-- image -->
                                        <img class="primary blur-up lazyload" data-src="vendor/image/<?php echo $row['product_image']?>" src="vendor/image/<?php echo $row['product_image']?>" alt="image" title="product" width="250" height="250">
                                        <!-- End image -->
                                        <!-- Hover image -->
                                        <img class="hover blur-up lazyload" data-src="vendor/image/<?php echo $row['product_image']?>" src="vendor/image/<?php echo $row['product_image']?>" alt="image" title="product" width="250" height="250">
                                        <!-- End hover image -->
                                        <!-- Variant Image-->
                                        <img class="grid-view-item__image hover variantImg" src="vendor/image/<?php echo $row['product_image']?>" alt="image" title="product">
                                        <!-- Variant Image-->
                                       
                                    </a>
                                    <!-- end product image -->
                                    
                                    

                                    <!-- Start product button -->
                                    <form class="variants add" action="#" onclick="window.location.href='cart.html'"method="post">
                                        <button class="btn btn-addto-cart" type="button" tabindex="0">Add To Cart</button>
                                    </form>
                                    <div class="button-set">
                                        <a href="javascript:void(0)" title="Quick View" class="quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                            <i class="icon anm anm-search-plus-r"></i>
                                        </a>
                                        <div class="wishlist-btn">
                                            <a class="wishlist add-to-wishlist" href="wishlist.html">
                                                <i class="icon anm anm-heart-l"></i>
                                            </a>
                                        </div>
                                        <div class="compare-btn">
                                            <a class="compare add-to-compare" href="compare.html" title="Add to Compare">
                                                <i class="icon anm anm-random-r"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- end product button -->
                                </div>
                                <!-- end product image -->
                                <!--start product details -->
                                <div class="product-details text-center">
                                    <!-- product name -->
                                    <div class="product-name">
                                        <a href="product-layout-1.html"><?php echo $row['product_name']?></a>
                                    </div>
                                    <!-- End product name -->
                                    <!-- product price -->
                                   <?php  if($row['special_price']>0){?>
                                    <div class="product-price">
                                        <span class="old-price">BDT <?php echo $row['price']?></span>
                                        <span class="price">BDT <?php echo $row['special_price']?></span>
                                    </div><?php }else{?>
                                        <div class="product-price">
                                     
                                        <span class="price">BDT <?php echo $row['price']?></span>
                                    </div><?php }?>
                                    <!-- End product price -->
                                    
                                </div>
                                <!-- End product details -->
                            </div>
								<?php }}?>
                                 <!-- product name -->
                                           
                             
                        </div>
                    </div>
                    <div class="grid-products grid--view-items">
                            <div class="row">
							<?php
                           
                              $sql = "SELECT * FROM vendor where shop_name='$search'";
                                $result = $conn->query($sql);
                                if ($result->num_rows > 0) {
                                    // output data of each row
                                    while($row = $result->fetch_assoc()) {
                           ?>
                               <div class="col-6 col-sm-6 col-md-4 col-lg-2 grid-view-item style2 item">
                                	<div class="grid-view_image">
                                        <!-- start product image -->
                                        <a href="products.php?shop_name=<?php echo $row['shop_name']?>" class="grid-view-item__link">
                                            <!-- image -->
                                            <img class="grid-view-item__image primary blur-up lazyload"  src="vendor/image/<?php echo $row['shop_logo']?>" alt="image" title="product" width="120" height="120">
                                            <!-- End image -->
                                            <!-- Hover image -->
                                            <img class="grid-view-item__image hover blur-up lazyload" src="vendor/image/<?php echo $row['shop_logo']?>"  alt="image" title="product" width="120" height="120">
                                            <!-- End hover image -->
                                          
                                        </a>
                                        <!-- end product image -->
                                        
                                        <!--start product details -->
                                        <div class="product-details hoverDetails text-center mobile">
                                           
											
										
                                        </div>
                                        <!-- End product details -->
                                    </div>
									 <div class="product-name">
                                                <a href="#"><b><?php echo $row['shop_name']?></b></a>
                                            </div>
                                            <!-- End product name -->

                                            <div class="product-name">
                                                <a href="#"><b><?php echo $row['market_name']?></b></a>
                                            </div>
                                </div>
								<?php }}?>
                                 <!-- product name -->
                                           
                             
                        </div>
                    </div>
                    <div class="grid-products grid--view-items">
                            <div class="row">
							<?php
                           
                              $sql = "SELECT * FROM market where market_name='$search'";
                                $result = $conn->query($sql);
                                if ($result->num_rows > 0) {
                                    // output data of each row
                                    while($row = $result->fetch_assoc()) {
                           ?>
                              <div class="col-3 item">
                                <!-- start product image -->
                                <div class="product-image">
                                    <!-- start product image -->
                                    <a href="market_shop.php?market_name=<?php echo $row['market_name']?>" class="grid-view-item__link">
                                        <!-- image -->
                                        <img class="primary blur-up lazyload" data-src="vendor/image/<?php echo $row['image']?>" src="vendor/image/<?php echo $row['image']?>" alt="image" title="product" width="250" height="250">
                                        <!-- End image -->
                                        <!-- Hover image -->
                                        <img class="hover blur-up lazyload" data-src="vendor/image/<?php echo $row['image']?>" src="vendor/image/<?php echo $row['image']?>" alt="image" title="product" width="250" height="250">
                                        <!-- End hover image -->
                                        <!-- Variant Image-->
                                        <img class="grid-view-item__image hover variantImg" src="assets/images/product-images/product-image1.jpg" alt="image" title="product">
                                        <!-- Variant Image-->
                                       
                                    </a>
                                    <!-- end product image -->
                                    
                                    

                                    <!-- Start product button -->
                                  
                                    
                                    <!-- end product button -->
                                </div>
                                <!-- end product image -->
                                <!--start product details -->
                                <div class="product-details text-center">
                                    <!-- product name -->
                                    <div class="product-name">
                                        <a href="product-layout-1.html"><?php echo $row['market_name']?></a>
                                    </div>
                                    <!-- End product name -->
                                    <!-- product price -->
                                   
                                    <!-- End product price -->
                                    
                                </div>
                                <!-- End product details -->
                            </div>
								<?php }}?>
                                 <!-- product name -->
                                           
                             
                        </div>
                    </div>
                </div>
                <!--End Main Content-->
            </div>
        </div>
        
    </div>
    <!--End Body Content-->
    
    <?php include 'footer.php'?>