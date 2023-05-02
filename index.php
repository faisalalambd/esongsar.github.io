
<?php include 'config.php'?>
<?php include 'session.php'?>
<?php include 'header.php'?>
    
    <!--Body Content-->
    <div id="page-content">
    	<!--Collection Banner-->
    
        <!--End Collection Banner-->
        
        <div class="container">
        	<div class="row">
            	<?php include 'side_menu.php'?>
                <!--Main Content-->
                <div class="col-12 col-sm-12 col-md-9 col-lg-9 main-col">
                	
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
					
					
						<div class="slideshow slideshow-wrapper pb-section">
        	<div class="home-slideshow">
            	<div class="slide">
                	<div class="blur-up lazyload">
                        <img class="blur-up lazyload" data-src="assets/images/slideshow-banners/home2-default-banner1.jpg" src="assets/images/slideshow-banners/home2-default-banner1.jpg" alt="Shop Our New Collection" title="Shop Our New Collection" />
                        <div class="slideshow__text-wrap slideshow__overlay classic middle">
                            <div class="slideshow__text-content middle">
                            	<div class="container">
                                    <div class="wrap-caption right">
                                        <h2 class="h1 mega-title slideshow__title">Our New Collection</h2>
                                        <span class="mega-subtitle slideshow__subtitle">Save up to 50% Off</span>
                                        <span class="btn">Shop now</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slide">
                	<div class="blur-up lazyload">
                        <img class="blur-up lazyload" data-src="assets/images/slideshow-banners/home2-default-banner2.jpg" src="assets/images/slideshow-banners/home2-default-banner2.jpg" alt="Summer Bikini Collection" title="Summer Bikini Collection" />
                        <div class="slideshow__text-wrap slideshow__overlay classic middle">
                            <div class="slideshow__text-content middle">
                            	<div class="container">
                                    <div class="wrap-caption center">
                                        <h2 class="h1 mega-title slideshow__title">Fashion &amp; Show</h2>
                                        <span class="mega-subtitle slideshow__subtitle">A World Fashion and Trendy Fashion Clother's</span>
                                        <span class="btn">Shop now</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		
		
		
		
		
                    <hr>
                	<div class="productList product-load-more">
                    	<!--Toolbar-->
                        <button type="button" class="btn btn-filter d-block d-md-none d-lg-none"> Product Filters</button>
                    
                        <!--End Toolbar-->
						<!------------Recent Products Starts----------------->
						<div class="section-header text-center">
                            <h2 class="h2">Brands</h2>
                            
                        </div>
                       	<div class="productSlider grid-products">
						<?php
                              $sql = "SELECT * FROM vendor where shop_type='Brands'";
                                $result = $conn->query($sql);
                                if ($result->num_rows > 0) {
                                    // output data of each row
                                    while($row = $result->fetch_assoc()) {
                           ?>
                            <div class="col-12 item">
                                <!-- start product image -->
                                <div class="product-image">
                                    <!-- start product image -->
                                    <a href="products.php?shop_name=<?php echo $row['shop_name']?>" class="grid-view-item__link">
                                        <!-- image -->
                                        <img class="primary blur-up lazyload" src="vendor/image/<?php echo $row['shop_logo']?>" alt="image" title="product" width="120" height="120">
                                        <!-- End image -->
                                        <!-- Hover image -->
                                        <img class="hover blur-up lazyload" src="vendor/image/<?php echo $row['shop_logo']?>" alt="image" title="product" width="1200" height="120">
                                        <!-- End hover image image
                                        <!-- Variant Image-->
                                        <img class="grid-view-item__image hover variantImg" src="vendor/image/<?php echo $row['shop_logo']?>" alt="image" title="product" width="120" height="120">
                                        <!-- Variant Image-->
                                        <!-- product label 	
                                        <div class="product-labels rounded"><span class="lbl on-sale">Sale</span> <span class="lbl pr-label1">new</span></div>
                                        <!-- End product label -->
                                    </a>
                                    <!-- end product image -->
                                    
                                    <!-- countdown start 
                                    <div class="saleTime desktop" data-countdown="2022/03/01"></div>
                                    <!-- countdown end -->

                                    
                                </div>
                                <!-- end product image -->
                                <!--start product details -->
                                <div class="product-details text-center">
                                    <!-- product name -->
                                    <div class="product-name">
                                        <a href="product-layout-1.html"><?php echo $row['shop_name']?></a>
                                    </div>
                                    <!-- End product name -->
                                    <!-- product price 
                                    <div class="product-price">
                                        <span class="old-price">$500.00</span>
                                        <span class="price">$600.00</span>
                                    </div>
                                     End product price -->
                                    <!-- Color Variant -->
                                
                                    <!-- End Variant -->
                                </div>
                                <!-- End product details -->
                            </div>
							
							<?php }}?>
                        
                          
                           
                 
						
                        </div>
						
							<div class="infinitpaginOuter">
                        <div class="infinitpagin">	
                            <a href="shops.php?category_name=Brands" class="btn">Load More</a>
                        </div>
                    </div>
						<!-- Recent Products-->
					
					
					
					<div class="section-header text-center">
                            <h2 class="h2">Whole Sale Market</h2>
                            
                        </div>
					   	<div class="productSlider grid-products">
						<?php
                              $sql = "SELECT * FROM market where category='Whole Sale Market'";
                                $result = $conn->query($sql);
                                if ($result->num_rows > 0) {
                                    // output data of each row
                                    while($row = $result->fetch_assoc()) {
                           ?>
                            <div class="col-12 item">
                                <!-- start product image -->
                                <div class="product-image">
                                    <!-- start product image -->
                                    <a href="market_shop.php?market_name=<?php echo $row['market_name']?>" class="grid-view-item__link">
                                        <!-- image -->
                                        <img class="primary blur-up lazyload" src="vendor/image/<?php echo $row['image']?>" alt="image" title="product" width="120" height="120">
                                        <!-- End image -->
                                        <!-- Hover image -->
                                        <img class="hover blur-up lazyload"  src="vendor/image/<?php echo $row['image']?>" alt="image" title="product" width="120" height="120">
                                        <!-- End hover image image
                                        <!-- Variant Image-->
                                        <img class="grid-view-item__image hover variantImg" src="vendor/image/<?php echo $row['image']?>" alt="image" title="product" width="120" height="120">
                                        <!-- Variant Image-->
                                        <!-- product label 	
                                        <div class="product-labels rounded"><span class="lbl on-sale">Sale</span> <span class="lbl pr-label1">new</span></div>
                                        End product label -->
                                    </a>
                                    <!-- end product image -->
                                    
                                    <!-- countdown start 
                                    <div class="saleTime desktop" data-countdown="2022/03/01"></div>
                                    <!-- countdown end -->

                                    
                                </div>
                                <!-- end product image -->
                                <!--start product details -->
                                <div class="product-details text-center">
                                    <!-- product name -->
                                    <div class="product-name">
                                        <a href="product-layout-1.html"><?php echo $row['market_name']?></a>
                                    </div>
                                    <!-- End product name -->
                                    <!-- product price 
                                    <div class="product-price">
                                        <span class="old-price">$500.00</span>
                                        <span class="price">$600.00</span>
                                    </div>
                                     End product price -->
                                    <!-- Color Variant -->
                                
                                    <!-- End Variant -->
                                </div>
                                <!-- End product details -->
                            </div>
							
							<?php }}?>
                        
                          
                           
                 
						
                        </div>
						
							<div class="infinitpaginOuter">
                        <div class="infinitpagin">	
                            <a href="market.php?category_name=Whole Sale Market" class="btn">Load More</a>
                        </div>
                    </div>
						<!-- Recent Products-->
						
						
						
                </div>
				
					
            </div>
			<div class="section logo-section">
        	<div class="container">
            	<div class="row">
                	<div class="col-12 col-sm-12 col-md-12 col-lg-12">
                    	<div class="section-header text-center">
                        	<h2 class="h2">The Most Loved Brands</h2>
                    	</div>
                		<div class="logo-bar">
                        <?php
                              $sql = "SELECT * FROM vendor where shop_type='Brands'";
                                $result = $conn->query($sql);
                                if ($result->num_rows > 0) {
                                    // output data of each row
                                    while($row = $result->fetch_assoc()) {
                           ?>
                            <div class="logo-bar__item">
                                <img src="vendor/image/<?php echo $row['shop_logo']?>" alt="" title="" width="80" height="80" />
                            </div>
                            <?php }}?>
                           
               			 </div>
                	</div>
                </div>
            </div>
        </div>
		
		
		   <div class="col-12 col-sm-12 col-md-12 col-lg-12 main-col">
                	
                	<div class="productList product-load-more">
                    	<!--Toolbar-->
                        
						
                       <div class="section-header text-center">
                            <h2 class="h2">Pharmacy</h2>
                            
                        </div>
					   	<div class="productSlider grid-products">
						<?php
                              $sql = "SELECT * FROM vendor where shop_type='pharmacy'";
                                $result = $conn->query($sql);
                                if ($result->num_rows > 0) {
                                    // output data of each row
                                    while($row = $result->fetch_assoc()) {
                           ?>
                            <div class="col-12 item">
                                <!-- start product image -->
                                <div class="product-image">
                                    <!-- start product image -->
                                    <a href="products.php?shop_name=<?php echo $row['shop_name']?>" class="grid-view-item__link">
                                        <!-- image -->
                                        <img class="primary blur-up lazyload" src="vendor/image/<?php echo $row['shop_logo']?>"  alt="image" title="product" width="120" height="120">
                                        <!-- End image -->
                                        <!-- Hover image -->
                                        <img class="hover blur-up lazyload"  src="vendor/image/<?php echo $row['shop_logo']?>"  alt="image" title="product" width="120" height="120">
                                        <!-- End hover image image
                                        <!-- Variant Image-->
                                        <img class="grid-view-item__image hover variantImg" src="vendor/image/<?php echo $row['shop_logo']?>"  alt="image" title="product" width="120" height="120">
                                        <!-- Variant Image-->
                                        <!-- product label 	
                                        <div class="product-labels rounded"><span class="lbl on-sale">Sale</span> <span class="lbl pr-label1">new</span></div>
                                        <!-- End product label -->
                                    </a>
                                    <!-- end product image -->
                                    
                                    <!-- countdown start 
                                    <div class="saleTime desktop" data-countdown="2022/03/01"></div>
                                    <!-- countdown end -->

                                    
                                </div>
                                <!-- end product image -->
                                <!--start product details -->
                                <div class="product-details text-center">
                                    <!-- product name -->
                                    <div class="product-name">
                                        <a href="product-layout-1.html"><?php echo $row['shop_name']?></a>
                                    </div>
                                    <!-- End product name -->
                                    <!-- product price 
                                    <div class="product-price">
                                        <span class="old-price">$500.00</span>
                                        <span class="price">$600.00</span>
                                    </div>
                                    <!-- End product price -->
                                    <!-- Color Variant -->
                                
                                    <!-- End Variant -->
                                </div>
                                <!-- End product details -->
                            </div>
							
							<?php }}?>
                        
                          
                           
                 
						
                        </div>
						
							<div class="infinitpaginOuter">
                        <div class="infinitpagin">	
                            <a href="shops.php?category_name=Pharmecy" class="btn">Load More</a>
                        </div>
                    </div>
						<!-- Recent Products-->
						
						
						
						
						
						
						<div class="productList product-load-more">
                    	<!--Toolbar-->
                        
						
                       <div class="section-header text-center">
                            <h2 class="h2">Chineese Items Shops</h2>
                            
                        </div>
					   	<div class="productSlider grid-products">
                           <?php
                              $sql = "SELECT * FROM market where category='Chinese Item'";
                                $result = $conn->query($sql);
                                if ($result->num_rows > 0) {
                                    // output data of each row
                                    while($row = $result->fetch_assoc()) {
                           ?>
                            <div class="col-12 item">
                                <!-- start product image -->
                                <div class="product-image">
                                    <!-- start product image -->
                                    <a href="market_shop.php?market_name=<?php echo $row['market_name']?>" class="grid-view-item__link">
                                        <!-- image -->
                                        <img class="primary blur-up lazyload" src="vendor/image/<?php echo $row['image']?>"  alt="image" title="product" width="120" height="120">
                                        <!-- End image -->
                                        <!-- Hover image -->
                                        <img class="hover blur-up lazyload"  src="vendor/image/<?php echo $row['image']?>"  alt="image" title="product" width="120" height="120">
                                        <!-- End hover image image
                                        <!-- Variant Image-->
                                        <img class="grid-view-item__image hover variantImg" src="vendor/image/<?php echo $row['image']?>"  alt="image" title="product" width="120" height="120">
                                        <!-- Variant Image-->
                                        <!-- product label 	
                                        <div class="product-labels rounded"><span class="lbl on-sale">Sale</span> <span class="lbl pr-label1">new</span></div>
                                        <!-- End product label -->
                                    </a>
                                    <!-- end product image -->
                                    
                                    <!-- countdown start 
                                    <div class="saleTime desktop" data-countdown="2022/03/01"></div>
                                    <!-- countdown end -->

                                    
                                </div>
                                <!-- end product image -->
                                <!--start product details -->
                                <div class="product-details text-center">
                                    <!-- product name -->
                                    <div class="product-name">
                                        <a href="product-layout-1.html"><?php echo $row['market_name']?></a>
                                    </div>
                                    <!-- End product name -->
                                    <!-- product price 
                                    <div class="product-price">
                                        <span class="old-price">$500.00</span>
                                        <span class="price">$600.00</span>
                                    </div>
                                    <!-- End product price -->
                                    <!-- Color Variant -->
                                
                                    <!-- End Variant -->
                                </div>
                                <!-- End product details -->
                            </div>
							
							<?php }}?>
                        
                          
                           
                 
						
                        </div>
						
							<div class="infinitpaginOuter">
                        <div class="infinitpagin">	
                            <a href="market.php?category_name=Chinese Item" class="btn">Load More</a>
                        </div>
                    </div>
						<!-- Recent Products-->
						
						<!--Recent Products Ends-->
						
						
						
						
							<div class="productList product-load-more">
                    	<!--Toolbar-->
                        
						
                       <div class="section-header text-center">
                            <h2 class="h2">Super Markets</h2>
                            
                        </div>
					   	<div class="productSlider grid-products">
                           <?php
                              $sql = "SELECT * FROM market where category='Super Market'";
                                $result = $conn->query($sql);
                                if ($result->num_rows > 0) {
                                    // output data of each row
                                    while($row = $result->fetch_assoc()) {
                           ?>
                            <div class="col-12 item">
                                <!-- start product image -->
                                <div class="product-image">
                                    <!-- start product image -->
                                    <a href="market_shop.php?market_name=<?php echo $row['market_name']?>" class="grid-view-item__link">
                                        <!-- image -->
                                        <img class="primary blur-up lazyload" src="vendor/image/<?php echo $row['image']?>"  alt="image" title="product" width="120" height="120">
                                        <!-- End image -->
                                        <!-- Hover image -->
                                        <img class="hover blur-up lazyload"  src="vendor/image/<?php echo $row['image']?>"  alt="image" title="product" width="120" height="120">
                                        <!-- End hover image image
                                        <!-- Variant Image-->
                                        <img class="grid-view-item__image hover variantImg" src="vendor/image/<?php echo $row['image']?>"  alt="image" title="product" width="120" height="120">
                                        <!-- Variant Image-->
                                        <!-- product label 	
                                        <div class="product-labels rounded"><span class="lbl on-sale">Sale</span> <span class="lbl pr-label1">new</span></div>
                                        <!-- End product label -->
                                    </a>
                                    <!-- end product image -->
                                    
                                    <!-- countdown start 
                                    <div class="saleTime desktop" data-countdown="2022/03/01"></div>
                                    <!-- countdown end -->

                                    
                                </div>
                                <!-- end product image -->
                                <!--start product details -->
                                <div class="product-details text-center">
                                    <!-- product name -->
                                    <div class="product-name">
                                        <a href="product-layout-1.html"><?php echo $row['market_name']?></a>
                                    </div>
                                    <!-- End product name -->
                                    <!-- product price 
                                    <div class="product-price">
                                        <span class="old-price">$500.00</span>
                                        <span class="price">$600.00</span>
                                    </div>
                                    <!-- End product price -->
                                    <!-- Color Variant -->
                                
                                    <!-- End Variant -->
                                </div>
                                <!-- End product details -->
                            </div>
							
							<?php }}?>
						
                        </div>
						
							<div class="infinitpaginOuter">
                        <div class="infinitpagin">	
                            <a href="market.php?category_name=Super Market" class="btn">Load More</a>
                        </div>
                    </div>
						<!-- Recent Products-->
						
						
                </div>
				
					</div>
            </div>
                <!--End Main Content-->
        </div>
        </div>
    </div>
    <!--End Body Content-->
    
    <?php include 'footer.php'?>