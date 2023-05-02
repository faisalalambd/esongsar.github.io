
<?php include 'config.php'?>
<?php include 'header.php'?>
 

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
                    	<!--Toolbar-->
                        
                       
                    	<div class="collection-header">
			<div class="collection-hero">
        		<div class="collection-hero__image"><img class="blur-up lazyload" data-src="assets/images/cat-women2.jpg" src="assets/images/cat-women2.jpg" alt="Women" title="Women" /></div>
        		<div class="collection-hero__title-wrapper"><h1 class="collection-hero__title page-width">Available Shops</h1></div>
      		</div>
		</div>
                        <!--End Toolbar-->
                        <div class="grid-products grid--view-items">
                            <div class="row">
							<?php
                         
                              $sql = "SELECT * FROM vendor";
                            //   echo $slug;
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
                </div>
                <!--End Main Content-->
            </div>
        </div>
        
    </div>
    <!--End Body Content-->
    
    <?php include 'footer.php'?>