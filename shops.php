
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
                	<div class="productList">
                    	<!--Toolbar-->
                        
                        <?php
                         
                         $sql = "SELECT * FROM vendor where shop_type='$category_name'";
                       //   echo $slug;
                           $result = $conn->query($sql);
                           if ($result->num_rows > 0) {
                               // output data of each row
                               while($row = $result->fetch_assoc()) {
                                $name=$row['shop_type'];
                               }
                            }
                      ?>
                    	<div class="collection-header">
			<div class="collection-hero">
        		<div class="collection-hero__image"><img class="blur-up lazyload" data-src="assets/images/cat-women2.jpg" src="assets/images/cat-women2.jpg" alt="Women" title="Women" /></div>
        		<div class="collection-hero__title-wrapper"><h1 class="collection-hero__title page-width"><?php echo $name?></h1></div>
      		</div>
		</div>
                        <!--End Toolbar-->
                        <div class="grid-products grid--view-items">
                            <div class="row">
							<?php
                         
                              $sql = "SELECT * FROM vendor where shop_type='$category_name'";
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