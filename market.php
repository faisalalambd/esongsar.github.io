<?php include 'session.php'?>
<?php include 'config.php'?>
<?php include 'header.php'?>
<?php $category_name=$_GET['category_name']?> 
  
  
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
  <input type="text" placeholder="Search By Product Name/ Shop Name/ Market Name" name="search">
  <button type="submit">Search</button>
</form>				
                	<div class="productList">
                    	<div class="collection-header">
			<div class="collection-hero">
        		<div class="collection-hero__image"><img class="blur-up lazyload" data-src="assets/images/cat-women2.jpg" src="assets/images/cat-women2.jpg" alt="Women" title="Women" /></div>
        		<div class="collection-hero__title-wrapper"><h1 class="collection-hero__title page-width">Market</h1></div>
      		</div>
		</div>
                    	
                        <!--End Toolbar-->
                        <div class="grid-products grid--view-items">
                            <div class="row">
							<?php
                           
                              $sql = "SELECT * FROM market where category='$category_name'";
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
                                        <a href="market_shop.php?market_name=<?php echo $row['market_name']?>"><?php echo $row['market_name']?></a>
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