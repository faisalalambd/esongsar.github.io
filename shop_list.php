<?php include 'config.php';
include 'header.php';
?>
    
    <!--Body Content-->
    <div id="page-content">
    	<!--Collection Banner-->
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
                <div class="col-12 col-sm-12 col-md-9 col-lg-10 main-col shop-grid-7">
                	<div class="productList">
                    	<!--Toolbar-->
                        <button type="button" class="btn btn-filter d-block d-md-none d-lg-none"> Product Filters</button>
                    	<div class="toolbar">
                        	<div class="filters-toolbar-wrapper">
                            	<div class="row">
                                	<div class="col-4 col-md-4 col-lg-4 filters-toolbar__item collection-view-as d-flex justify-content-start align-items-center">
                                    	<a href="shop-left-sidebar.html" title="Grid View" class="change-view change-view--active">
                                        	<img src="assets/images/grid.jpg" alt="Grid" />
                                        </a>
                                        <a href="shop-listview.html" title="List View" class="change-view">
                                        	<img src="assets/images/list.jpg" alt="List" />
                                        </a>
                                    </div>
                                    <div class="col-4 col-md-4 col-lg-4 text-center filters-toolbar__item filters-toolbar__item--count d-flex justify-content-center align-items-center">
                                    	<span class="filters-toolbar__product-count">Showing: 22</span>
                                    </div>
                                    <div class="col-4 col-md-4 col-lg-4 text-right">
                                    	<div class="filters-toolbar__item">
                                      		<label for="SortBy" class="hidden">Sort</label>
                                      		<select name="SortBy" id="SortBy" class="filters-toolbar__input filters-toolbar__input--sort">
                                                <option value="title-ascending" selected="selected">Sort</option>
                                                <option>Best Selling</option>
                                                <option>Alphabetically, A-Z</option>
                                                <option>Alphabetically, Z-A</option>
                                                <option>Price, low to high</option>
                                                <option>Price, high to low</option>
                                                <option>Date, new to old</option>
                                                <option>Date, old to new</option>
                                      		</select>
                                      		<input class="collection-header__default-sort" type="hidden" value="manual">
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!--End Toolbar-->
                        <div class="grid-products grid--view-items">
                            <div class="row">
                                <div class="col-6 col-sm-6 col-md-4 col-lg-2 grid-view-item style2 item">
                                	<div class="grid-view_image">
                                        <!-- start product image -->
                                        <a href="product-accordion.html" class="grid-view-item__link">
                                            <!-- image -->
                                            <img class="grid-view-item__image primary blur-up lazyload" data-src="assets/images/product-images/product-image1.jpg" src="assets/images/product-images/product-image1.jpg" alt="image" title="product">
                                            <!-- End image -->
                                            <!-- Hover image -->
                                            <img class="grid-view-item__image hover blur-up lazyload" data-src="assets/images/product-images/product-image1-1.jpg" src="assets/images/product-images/product-image1-1.jpg" alt="image" title="product">
                                            <!-- End hover image -->
                                            <!-- product label -->
                                            <div class="product-labels rectangular"><span class="lbl on-sale">-16%</span> <span class="lbl pr-label1">new</span></div>
                                            <!-- End product label -->
                                        </a>
                                        <!-- end product image -->
                                        
                                        <!--start product details -->
                                        <div class="product-details hoverDetails text-center mobile">
                                            <!-- product name -->
                                            <div class="product-name">
                                                <a href="#">Edna Dress</a>
                                            </div>
                                            <!-- End product name -->
                                            <!-- product price -->
                                            <div class="product-price">
                                                <span class="old-price">$500.00</span>
                                                <span class="price">$600.00</span>
                                            </div>
                                            <!-- End product price -->
                                            <div class="product-review">
                                                <i class="font-13 fa fa-star"></i>
                                                <i class="font-13 fa fa-star"></i>
                                                <i class="font-13 fa fa-star"></i>
                                                <i class="font-13 fa fa-star-o"></i>
                                                <i class="font-13 fa fa-star-o"></i>
                                            </div>
                                            <!-- product button -->
                                            <div class="button-set">
                                                <a href="javascript:void(0)" title="Quick View" class="quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                                        <i class="icon anm anm-search-plus-r"></i>
                                                    </a>
                                                <!-- Start product button -->
                                                <form action="#" method="post">
                                                    <button class="btn btn--secondary cartIcon btn-addto-cart" type="button"><i class="icon anm anm-bag-l"></i></button>
                                                </form>
                                                <div class="wishlist-btn">
                                                    <a class="wishlist add-to-wishlist" href="#" title="Add to Wishlist">
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
                                        <!-- End product details -->
                                    </div>
                                </div>
                                <div class="col-6 col-sm-6 col-md-4 col-lg-2 grid-view-item style2 item">
                                	<div class="grid-view_image">
                                        <!-- start product image -->
                                        <a href="product-accordion.html" class="grid-view-item__link">
                                            <!-- image -->
                                            <img class="grid-view-item__image primary blur-up lazyload" data-src="assets/images/product-images/product-image2.jpg" src="assets/images/product-images/product-image2.jpg" alt="image" title="product">
                                            <!-- End image -->
                                            <!-- Hover image -->
                                            <img class="grid-view-item__image hover blur-up lazyload" data-src="assets/images/product-images/product-image2-1.jpg" src="assets/images/product-images/product-image2-1.jpg" alt="image" title="product">
                                            <!-- End hover image -->
                                        </a>
                                        <!--start product details -->
                                        <div class="product-details hoverDetails text-center mobile">
                                            <!-- product name -->
                                            <div class="product-name">
                                                <a href="#">Elastic Waist Dress</a>
                                            </div>
                                            <!-- End product name -->
                                            <!-- product price -->
                                            <div class="product-price">
                                                <span class="price">$748.00</span>
                                            </div>
                                            <!-- End product price -->
                                            <div class="product-review">
                                                <i class="font-13 fa fa-star"></i>
                                                <i class="font-13 fa fa-star"></i>
                                                <i class="font-13 fa fa-star"></i>
                                                <i class="font-13 fa fa-star"></i>
                                                <i class="font-13 fa fa-star"></i>
                                            </div>
                                            <!-- product button -->
                                            <div class="button-set">
                                                <a href="javascript:void(0)" title="Quick View" class="quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                                        <i class="icon anm anm-search-plus-r"></i>
                                                    </a>
                                                <!-- Start product button -->
                                                <form action="#" method="post">
                                                    <button class="btn btn--secondary cartIcon btn-addto-cart" type="button"><i class="icon anm anm-bag-l"></i></button>
                                                </form>
                                                <div class="wishlist-btn">
                                                    <a class="wishlist add-to-wishlist" href="#" title="Add to Wishlist">
                                                        <i class="icon anm anm-heart-l"></i>
                                                    </a>
                                                </div>
                                                <div class="compare-btn">
                                                    <a class="compare add-to-compare" href="compare.html" title="Add to Compare">
                                                        <i class="icon anm anm-random-r"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <!-- End product button -->
                                        </div>
                                        <!-- End product details -->
                                    </div>
                                </div>
                                <div class="col-6 col-sm-6 col-md-4 col-lg-2 grid-view-item style2 item">
                                    <div class="grid-view_image">
                                        <!-- start product image -->
                                        <a href="product-accordion.html" class="grid-view-item__link">
                                            <!-- image -->
                                            <img class="grid-view-item__image primary blur-up lazyload" data-src="assets/images/product-images/product-image3.jpg" src="assets/images/product-images/product-image3.jpg" alt="image" title="product">
                                            <!-- End image -->
                                            <!-- Hover image -->
                                            <img class="grid-view-item__image hover blur-up lazyload" data-src="assets/images/product-images/product-image3-1.jpg" src="assets/images/product-images/product-image3-1.jpg" alt="image" title="product">
                                            <!-- End hover image -->
                                            <!-- product label -->
                                            <div class="product-labels rectangular"><span class="lbl pr-label2">Hot</span></div>
                                            <!-- End product label -->
                                        </a>
                                        <!-- end product image -->

                                        <!--start product details -->
                                        <div class="product-details hoverDetails text-center mobile">
                                            <!-- product name -->
                                            <div class="product-name">
                                                <a href="#">3/4 Sleeve Kimono Dress</a>
                                            </div>
                                            <!-- End product name -->
                                            <!-- product price -->
                                            <div class="product-price">
                                                <span class="price">$550.00</span>
                                            </div>
                                            <!-- End product price -->
                                            
                                            <div class="product-review">
                                                <i class="font-13 fa fa-star"></i>
                                                <i class="font-13 fa fa-star"></i>
                                                <i class="font-13 fa fa-star"></i>
                                                <i class="font-13 fa fa-star"></i>
                                                <i class="font-13 fa fa-star-o"></i>
                                            </div>
                                            <!-- product button -->
                                            <div class="button-set">
                                                <a href="javascript:void(0)" title="Quick View" class="quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                                        <i class="icon anm anm-search-plus-r"></i>
                                                    </a>
                                                <!-- Start product button -->
                                                <form action="#" method="post">
                                                    <button class="btn btn--secondary cartIcon btn-addto-cart" type="button"><i class="icon anm anm-bag-l"></i></button>
                                                </form>
                                                <div class="wishlist-btn">
                                                    <a class="wishlist add-to-wishlist" href="#" title="Add to Wishlist">
                                                        <i class="icon anm anm-heart-l"></i>
                                                    </a>
                                                </div>
                                                <div class="compare-btn">
                                                    <a class="compare add-to-compare" href="compare.html" title="Add to Compare">
                                                        <i class="icon anm anm-random-r"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <!-- End product button -->
                                        </div>
                                        <!-- End product details -->
                                    </div>
                                </div>
                                <div class="col-6 col-sm-6 col-md-4 col-lg-2 grid-view-item style2 item">
                                    <div class="grid-view_image">
                                        <!-- start product image -->
                                        <a href="product-accordion.html" class="grid-view-item__link">
                                            <!-- image -->
                                            <img class="grid-view-item__image primary blur-up lazyload" data-src="assets/images/product-images/product-image4.jpg" src="assets/images/product-images/product-image4.jpg" alt="image" title="product" />
                                            <!-- End image -->
                                            <!-- Hover image -->
                                            <img class="grid-view-item__image hover blur-up lazyload" data-src="assets/images/product-images/product-image4-1.jpg" src="assets/images/product-images/product-image4-1.jpg" alt="image" title="product" />
                                            <!-- End hover image -->
                                            <!-- product label -->
                                            <div class="product-labels"><span class="lbl on-sale">Sale</span></div>
                                            <!-- End product label -->
                                        </a>
                                        <!-- end product image -->

                                        <!--start product details -->
                                        <div class="product-details hoverDetails text-center mobile">
                                            <!-- product name -->
                                            <div class="product-name">
                                                <a href="#">Cape Dress</a>
                                            </div>
                                            <!-- End product name -->
                                            <!-- product price -->
                                            <div class="product-price">
                                                <span class="old-price">$900.00</span>
                                                <span class="price">$788.00</span>
                                            </div>
                                            <!-- End product price -->
                                            
                                            <div class="product-review">
                                                <i class="font-13 fa fa-star"></i>
                                                <i class="font-13 fa fa-star"></i>
                                                <i class="font-13 fa fa-star"></i>
                                                <i class="font-13 fa fa-star-o"></i>
                                                <i class="font-13 fa fa-star-o"></i>
                                            </div>
                                            <!-- product button -->
                                            <div class="button-set">
                                                <a href="javascript:void(0)" title="Quick View" class="quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                                        <i class="icon anm anm-search-plus-r"></i>
                                                    </a>
                                                <!-- Start product button -->
                                                <form action="#" method="post">
                                                    <button class="btn btn--secondary cartIcon btn-addto-cart" type="button"><i class="icon anm anm-bag-l"></i></button>
                                                </form>
                                                <div class="wishlist-btn">
                                                    <a class="wishlist add-to-wishlist" href="#" title="Add to Wishlist">
                                                        <i class="icon anm anm-heart-l"></i>
                                                    </a>
                                                </div>
                                                <div class="compare-btn">
                                                    <a class="compare add-to-compare" href="compare.html" title="Add to Compare">
                                                        <i class="icon anm anm-random-r"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <!-- End product button -->
                                        </div>
                                        <!-- End product details -->
                                    </div>
                                </div>
                                <div class="col-6 col-sm-6 col-md-4 col-lg-2 grid-view-item style2 item">
                                    <div class="grid-view_image">
                                        <!-- start product image -->
                                        <a href="product-accordion.html" class="grid-view-item__link">
                                            <!-- image -->
                                            <img class="grid-view-item__image primary blur-up lazyload" data-src="assets/images/product-images/product-image5.jpg" src="assets/images/product-images/product-image5.jpg" alt="image" title="product" />
                                            <!-- End image -->
                                            <!-- Hover image -->
                                            <img class="grid-view-item__image hover blur-up lazyload" data-src="assets/images/product-images/product-image5-1.jpg" src="assets/images/product-images/product-image5-1.jpg" alt="image" title="product" />
                                            <!-- End hover image -->
                                            <!-- product label -->
                                            <div class="product-labels"><span class="lbl on-sale">Sale</span></div>
                                            <!-- End product label -->
                                        </a>
                                        <!-- end product image -->

                                        <!--start product details -->
                                        <div class="product-details hoverDetails text-center mobile">
                                            <!-- product name -->
                                            <div class="product-name">
                                                <a href="#">Paper Dress</a>
                                            </div>
                                            <!-- End product name -->
                                            <!-- product price -->
                                            <div class="product-price">
                                                <span class="price">$550.00</span>
                                            </div>
                                            <!-- End product price -->
                                            
                                            <div class="product-review">
                                                <i class="font-13 fa fa-star"></i>
                                                <i class="font-13 fa fa-star"></i>
                                                <i class="font-13 fa fa-star"></i>
                                                <i class="font-13 fa fa-star"></i>
                                                <i class="font-13 fa fa-star"></i>
                                            </div>
                                            <!-- product button -->
                                            <div class="button-set">
                                                <a href="javascript:void(0)" title="Quick View" class="quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                                        <i class="icon anm anm-search-plus-r"></i>
                                                    </a>
                                                <!-- Start product button -->
                                                <form action="#" method="post">
                                                    <button class="btn btn--secondary cartIcon btn-addto-cart" type="button"><i class="icon anm anm-bag-l"></i></button>
                                                </form>
                                                <div class="wishlist-btn">
                                                    <a class="wishlist add-to-wishlist" href="#" title="Add to Wishlist">
                                                        <i class="icon anm anm-heart-l"></i>
                                                    </a>
                                                </div>
                                                <div class="compare-btn">
                                                    <a class="compare add-to-compare" href="compare.html" title="Add to Compare">
                                                        <i class="icon anm anm-random-r"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <!-- End product button -->
                                        </div>
                                        <!-- End product details -->
                                    </div>
                                </div>
                                <div class="col-6 col-sm-6 col-md-4 col-lg-2 grid-view-item style2 item">
                                    <div class="grid-view_image">
                                        <!-- start product image -->
                                        <a href="product-accordion.html" class="grid-view-item__link">
                                            <!-- image -->
                                            <img class="grid-view-item__image primary blur-up lazyload" data-src="assets/images/product-images/product-image17.jpg" src="assets/images/product-images/product-image17.jpg" alt="image" title="product" />
                                            <!-- End image -->
                                            <!-- Hover image -->
                                            <img class="grid-view-item__image hover blur-up lazyload" data-src="assets/images/product-images/product-image17-1.jpg" src="assets/images/product-images/product-image17-1.jpg" alt="image" title="product" />
                                            <!-- End hover image -->
                                            <!-- product label -->
                                            <div class="product-labels"><span class="lbl on-sale">Sale</span></div>
                                            <!-- End product label -->
                                        </a>
                                        <!-- end product image -->

                                        <!--start product details -->
                                        <div class="product-details hoverDetails text-center mobile">
                                            <!-- product name -->
                                            <div class="product-name">
                                                <a href="#">Buttercup Dress</a>
                                            </div>
                                            <!-- End product name -->
                                            <!-- product price -->
                                            <div class="product-price">
                                                <span class="price">$420.00</span>
                                            </div>
                                            <!-- End product price -->
                                            
                                            <div class="product-review">
                                                <i class="font-13 fa fa-star-o"></i>
                                                <i class="font-13 fa fa-star-o"></i>
                                                <i class="font-13 fa fa-star-o"></i>
                                                <i class="font-13 fa fa-star-o"></i>
                                                <i class="font-13 fa fa-star-o"></i>
                                            </div>
                                            <!-- product button -->
                                            <div class="button-set">
                                                <a href="javascript:void(0)" title="Quick View" class="quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                                        <i class="icon anm anm-search-plus-r"></i>
                                                    </a>
                                                <!-- Start product button -->
                                                <form action="#" method="post">
                                                    <button class="btn btn--secondary cartIcon btn-addto-cart" type="button"><i class="icon anm anm-bag-l"></i></button>
                                                </form>
                                                <div class="wishlist-btn">
                                                    <a class="wishlist add-to-wishlist" href="#" title="Add to Wishlist">
                                                        <i class="icon anm anm-heart-l"></i>
                                                    </a>
                                                </div>
                                                <div class="compare-btn">
                                                    <a class="compare add-to-compare" href="compare.html" title="Add to Compare">
                                                        <i class="icon anm anm-random-r"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <!-- End product button -->
                                        </div>
                                        <!-- End product details -->
                                	</div>
                                </div>
                                <div class="col-6 col-sm-6 col-md-4 col-lg-2 grid-view-item style2 item">
                                    <div class="grid-view_image">
                                        <!-- start product image -->
                                        <a href="product-accordion.html" class="grid-view-item__link">
                                            <!-- image -->
                                            <img class="grid-view-item__image primary blur-up lazyload" data-src="assets/images/product-images/product-image18.jpg" src="assets/images/product-images/product-image18.jpg" alt="image" title="product" />
                                            <!-- End image -->
                                            <!-- Hover image -->
                                            <img class="grid-view-item__image hover blur-up lazyload" data-src="assets/images/product-images/product-image18-1.jpg" src="assets/images/product-images/product-image18-1.jpg" alt="image" title="product" />
                                            <!-- End hover image -->
                                        </a>
                                        <!-- end product image -->
                                        <!--start product details -->
                                        <div class="product-details hoverDetails text-center mobile">
                                            <!-- product name -->
                                            <div class="product-name">
                                                <a href="#">Lima Shirt</a>
                                            </div>
                                            <!-- End product name -->
                                            <!-- product price -->
                                            <div class="product-price">
                                                <span class="price">$698.00</span>
                                            </div>
                                            <!-- End product price -->
                                            <div class="product-review">
                                                <i class="font-13 fa fa-star-o"></i>
                                                <i class="font-13 fa fa-star-o"></i>
                                                <i class="font-13 fa fa-star-o"></i>
                                                <i class="font-13 fa fa-star-o"></i>
                                                <i class="font-13 fa fa-star-o"></i>
                                            </div>
                                            <!-- product button -->
                                            <div class="button-set">
                                                <a href="javascript:void(0)" title="Quick View" class="quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                                        <i class="icon anm anm-search-plus-r"></i>
                                                    </a>
                                                <!-- Start product button -->
                                                <form action="#" method="post">
                                                    <button class="btn btn--secondary cartIcon btn-addto-cart" type="button"><i class="icon anm anm-bag-l"></i></button>
                                                </form>
                                                <div class="wishlist-btn">
                                                    <a class="wishlist add-to-wishlist" href="#" title="Add to Wishlist">
                                                        <i class="icon anm anm-heart-l"></i>
                                                    </a>
                                                </div>
                                                <div class="compare-btn">
                                                    <a class="compare add-to-compare" href="compare.html" title="Add to Compare">
                                                        <i class="icon anm anm-random-r"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <!-- End product button -->
                                        </div>
                                        <!-- End product details -->
                                    </div>
                                </div>
                                <div class="col-6 col-sm-6 col-md-4 col-lg-2 grid-view-item style2 item">
                                    <div class="grid-view_image">
                                        <!-- start product image -->
                                        <a href="product-accordion.html" class="grid-view-item__link">
                                            <!-- image -->
                                            <img class="grid-view-item__image primary blur-up lazyload" data-src="assets/images/product-images/product-image19.jpg" src="assets/images/product-images/product-image19.jpg" alt="image" title="product" />
                                            <!-- End image -->
                                            <!-- Hover image -->
                                            <img class="grid-view-item__image hover blur-up lazyload" data-src="assets/images/product-images/product-image19-1.jpg" src="assets/images/product-images/product-image19-1.jpg" alt="image" title="product" />
                                            <!-- End hover image -->
                                        </a>
                                        <!-- end product image -->
                                        <!--start product details -->
                                        <div class="product-details hoverDetails text-center mobile">
                                            <!-- product name -->
                                            <div class="product-name">
                                                <a href="#">Romary Dress</a>
                                            </div>
                                            <!-- End product name -->
                                            <!-- product price -->
                                            <div class="product-price">
                                                <span class="price">$348.60</span>
                                            </div>
                                            <!-- End product price -->
                                            
                                            <div class="product-review">
                                                <i class="font-13 fa fa-star-o"></i>
                                                <i class="font-13 fa fa-star-o"></i>
                                                <i class="font-13 fa fa-star-o"></i>
                                                <i class="font-13 fa fa-star-o"></i>
                                                <i class="font-13 fa fa-star-o"></i>
                                            </div>
                                            <!-- product button -->
                                            <div class="button-set">
                                                <a href="javascript:void(0)" title="Quick View" class="quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                                        <i class="icon anm anm-search-plus-r"></i>
                                                    </a>
                                                <!-- Start product button -->
                                                <form action="#" method="post">
                                                    <button class="btn btn--secondary cartIcon btn-addto-cart" type="button"><i class="icon anm anm-bag-l"></i></button>
                                                </form>
                                                <div class="wishlist-btn">
                                                    <a class="wishlist add-to-wishlist" href="#" title="Add to Wishlist">
                                                        <i class="icon anm anm-heart-l"></i>
                                                    </a>
                                                </div>
                                                <div class="compare-btn">
                                                    <a class="compare add-to-compare" href="compare.html" title="Add to Compare">
                                                        <i class="icon anm anm-random-r"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <!-- End product button -->
                                        </div>
                                        <!-- End product details -->
                                    </div>
                                </div>
                                <div class="col-6 col-sm-6 col-md-4 col-lg-2 grid-view-item style2 item">
                                    <div class="grid-view_image">
                                        <!-- start product image -->
                                        <a href="product-accordion.html" class="grid-view-item__link">
                                            <!-- image -->
                                            <img class="grid-view-item__image primary blur-up lazyload" data-src="assets/images/product-images/product-image20.jpg" src="assets/images/product-images/product-image20.jpg" alt="image" title="product" />
                                            <!-- End image -->
                                            <!-- Hover image -->
                                            <img class="grid-view-item__image hover blur-up lazyload" data-src="assets/images/product-images/product-image20-1.jpg" src="assets/images/product-images/product-image20-1.jpg" alt="image" title="product" />
                                            <!-- End hover image -->
                                            <!-- product label -->
                                            <div class="product-labels"><span class="lbl pr-label3">Popular</span></div>
                                            <!-- End product label -->
                                        </a>
                                        <!-- end product image -->
                                        <!--start product details -->
                                        <div class="product-details hoverDetails text-center mobile">
                                            <!-- product name -->
                                            <div class="product-name">
                                                <a href="#">Floral Sleeveless Dress</a>
                                            </div>
                                            <!-- End product name -->
                                            <!-- product price -->
                                            <div class="product-price">
                                                <span class="price">$380.00</span>
                                            </div>
                                            <!-- End product price -->
                                            
                                            <div class="product-review">
                                                <i class="font-13 fa fa-star-o"></i>
                                                <i class="font-13 fa fa-star-o"></i>
                                                <i class="font-13 fa fa-star-o"></i>
                                                <i class="font-13 fa fa-star-o"></i>
                                                <i class="font-13 fa fa-star-o"></i>
                                            </div>
                                            <!-- product button -->
                                            <div class="button-set">
                                                <a href="javascript:void(0)" title="Quick View" class="quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                                        <i class="icon anm anm-search-plus-r"></i>
                                                    </a>
                                                <!-- Start product button -->
                                                <form action="#" method="post">
                                                    <button class="btn btn--secondary cartIcon btn-addto-cart" type="button"><i class="icon anm anm-bag-l"></i></button>
                                                </form>
                                                <div class="wishlist-btn">
                                                    <a class="wishlist add-to-wishlist" href="#" title="Add to Wishlist">
                                                        <i class="icon anm anm-heart-l"></i>
                                                    </a>
                                                </div>
                                                <div class="compare-btn">
                                                    <a class="compare add-to-compare" href="compare.html" title="Add to Compare">
                                                        <i class="icon anm anm-random-r"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <!-- End product button -->
                                        </div>
                                        <!-- End product details -->
                                    </div>
                                </div>
                                <div class="col-6 col-sm-6 col-md-4 col-lg-2 grid-view-item style2 item">
                                    <div class="grid-view_image">
                                        <!-- start product image -->
                                        <a href="product-accordion.html" class="grid-view-item__link">
                                            <!-- image -->
                                            <img class="grid-view-item__image primary blur-up lazyload" data-src="assets/images/product-images/product-image21.jpg" src="assets/images/product-images/product-image21.jpg" alt="image" title="product" />
                                            <!-- End image -->
                                            <!-- Hover image -->
                                            <img class="grid-view-item__image hover blur-up lazyload" data-src="assets/images/product-images/product-image21-1.jpg" src="assets/images/product-images/product-image21-1.jpg" alt="image" title="product" />
                                            <!-- End hover image -->
                                        </a>
                                        <!-- end product image -->
                                        <!--start product details -->
                                        <div class="product-details hoverDetails text-center mobile">
                                            <!-- product name -->
                                            <div class="product-name">
                                                <a href="#">Button Up Dress</a>
                                            </div>
                                            <!-- End product name -->
                                            <!-- product price -->
                                            <div class="product-price">
                                                <span class="price">$400.00</span>
                                            </div>
                                            <!-- End product price -->
                                            
                                            <div class="product-review">
                                                <i class="font-13 fa fa-star-o"></i>
                                                <i class="font-13 fa fa-star-o"></i>
                                                <i class="font-13 fa fa-star-o"></i>
                                                <i class="font-13 fa fa-star-o"></i>
                                                <i class="font-13 fa fa-star-o"></i>
                                            </div>
                                            <!-- product button -->
                                            <div class="button-set">
                                                <a href="javascript:void(0)" title="Quick View" class="quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                                        <i class="icon anm anm-search-plus-r"></i>
                                                    </a>
                                                <!-- Start product button -->
                                                <form action="#" method="post">
                                                    <button class="btn btn--secondary cartIcon btn-addto-cart" type="button"><i class="icon anm anm-bag-l"></i></button>
                                                </form>
                                                <div class="wishlist-btn">
                                                    <a class="wishlist add-to-wishlist" href="#" title="Add to Wishlist">
                                                        <i class="icon anm anm-heart-l"></i>
                                                    </a>
                                                </div>
                                                <div class="compare-btn">
                                                    <a class="compare add-to-compare" href="compare.html" title="Add to Compare">
                                                        <i class="icon anm anm-random-r"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <!-- End product button -->
                                        </div>
                                        <!-- End product details -->
                                    </div>
                                </div>
                                <div class="col-6 col-sm-6 col-md-4 col-lg-2 grid-view-item style2 item">
                                    <div class="grid-view_image">
                                        <!-- start product image -->
                                        <a href="product-accordion.html" class="grid-view-item__link">
                                            <!-- image -->
                                            <img class="grid-view-item__image primary blur-up lazyload" data-src="assets/images/product-images/product-image22.jpg" src="assets/images/product-images/product-image22.jpg" alt="image" title="product" />
                                            <!-- End image -->
                                            <!-- Hover image -->
                                            <img class="grid-view-item__image hover blur-up lazyload" data-src="assets/images/product-images/product-image22-1.jpg" src="assets/images/product-images/product-image22-1.jpg" alt="image" title="product" />
                                            <!-- End hover image -->
                                        </a>
                                        <!-- end product image -->

                                    	<!--start product details -->
                                       	<div class="product-details hoverDetails text-center mobile">
                                            <!-- product name -->
                                            <div class="product-name">
                                                <a href="#">Lexie Shirt</a>
                                            </div>
                                            <!-- End product name -->
                                            <!-- product price -->
                                            <div class="product-price">
                                                <span class="price">$200.00</span>
                                            </div>
                                            <!-- End product price -->
                                            <div class="product-review">
                                                <i class="font-13 fa fa-star"></i>
                                                <i class="font-13 fa fa-star"></i>
                                                <i class="font-13 fa fa-star"></i>
                                                <i class="font-13 fa fa-star"></i>
                                                <i class="font-13 fa fa-star"></i>
                                            </div>
                                            <!-- product button -->
                                            <div class="button-set">
                                                <a href="javascript:void(0)" title="Quick View" class="quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                                        <i class="icon anm anm-search-plus-r"></i>
                                                    </a>
                                                <!-- Start product button -->
                                                <form action="#" method="post">
                                                    <button class="btn btn--secondary cartIcon btn-addto-cart" type="button"><i class="icon anm anm-bag-l"></i></button>
                                                </form>
                                                <div class="wishlist-btn">
                                                    <a class="wishlist add-to-wishlist" href="#" title="Add to Wishlist">
                                                        <i class="icon anm anm-heart-l"></i>
                                                    </a>
                                                </div>
                                                <div class="compare-btn">
                                                    <a class="compare add-to-compare" href="compare.html" title="Add to Compare">
                                                        <i class="icon anm anm-random-r"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <!-- End product button -->
                                        </div>
                                    	<!-- End product details -->
                                    </div>
                                </div>
                                <div class="col-6 col-sm-6 col-md-4 col-lg-2 grid-view-item style2 item">
                                    <div class="grid-view_image">
                                        <!-- start product image -->
                                        <a href="product-accordion.html" class="grid-view-item__link">
                                            <!-- image -->
                                            <img class="grid-view-item__image primary blur-up lazyload" data-src="assets/images/product-images/product-image23.jpg" src="assets/images/product-images/product-image23.jpg" alt="image" title="product" />
                                            <!-- End image -->
                                            <!-- Hover image -->
                                            <img class="grid-view-item__image hover blur-up lazyload" data-src="assets/images/product-images/product-image23-1.jpg" src="assets/images/product-images/product-image23-1.jpg" alt="image" title="product" />
                                            <!-- End hover image -->
                                        </a>
                                        <!-- end product image -->

                                        <!--start product details -->
                                        <div class="product-details hoverDetails text-center mobile">
                                            <!-- product name -->
                                            <div class="product-name">
                                                <a href="#">One Shoulder Dress in Navy</a>
                                            </div>
                                            <!-- End product name -->
                                            <!-- product price -->
                                            <div class="product-price">
                                                <span class="price">$1,048.60</span>
                                            </div>
                                            <!-- End product price -->
                                            <div class="product-review">
                                                <i class="font-13 fa fa-star"></i>
                                                <i class="font-13 fa fa-star"></i>
                                                <i class="font-13 fa fa-star"></i>
                                                <i class="font-13 fa fa-star"></i>
                                                <i class="font-13 fa fa-star"></i>
                                            </div>
                                            <!-- product button -->
                                            <div class="button-set">
                                                <a href="javascript:void(0)" title="Quick View" class="quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                                        <i class="icon anm anm-search-plus-r"></i>
                                                    </a>
                                                <!-- Start product button -->
                                                <form action="#" method="post">
                                                    <button class="btn btn--secondary cartIcon btn-addto-cart" type="button"><i class="icon anm anm-bag-l"></i></button>
                                                </form>
                                                <div class="wishlist-btn">
                                                    <a class="wishlist add-to-wishlist" href="#" title="Add to Wishlist">
                                                        <i class="icon anm anm-heart-l"></i>
                                                    </a>
                                                </div>
                                                <div class="compare-btn">
                                                    <a class="compare add-to-compare" href="compare.html" title="Add to Compare">
                                                        <i class="icon anm anm-random-r"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <!-- End product button -->
                                        </div>
                                        <!-- End product details -->
                                     </div>
                                </div>
                                <div class="col-6 col-sm-6 col-md-4 col-lg-2 grid-view-item style2 item">
                                    <div class="grid-view_image">
                                        <!-- start product image -->
                                        <a href="product-accordion.html" class="grid-view-item__link">
                                            <!-- image -->
                                            <img class="grid-view-item__image primary blur-up lazyload" data-src="assets/images/product-images/product-image24.jpg" src="assets/images/product-images/product-image24.jpg" alt="image" title="product" />
                                            <!-- End image -->
                                            <!-- Hover image -->
                                            <img class="grid-view-item__image hover blur-up lazyload" data-src="assets/images/product-images/product-image24-1.jpg" src="assets/images/product-images/product-image24-1.jpg" alt="image" title="product" />
                                            <!-- End hover image -->
                                        </a>
                                        <!-- end product image -->
                                        <!--start product details -->
                                        <div class="product-details hoverDetails text-center mobile">
                                            <!-- product name -->
                                            <div class="product-name">
                                                <a href="#">Triangle Sleeveless Dress in Multi</a>
                                            </div>
                                            <!-- End product name -->
                                            <!-- product price -->
                                            <div class="product-price">
                                                <span class="price">$684.60</span>
                                            </div>
                                            <!-- End product price -->
                                            <div class="product-review">
                                                <i class="font-13 fa fa-star-o"></i>
                                                <i class="font-13 fa fa-star-o"></i>
                                                <i class="font-13 fa fa-star-o"></i>
                                                <i class="font-13 fa fa-star-o"></i>
                                                <i class="font-13 fa fa-star-o"></i>
                                            </div>
                                            <!-- product button -->
                                            <div class="button-set">
                                                <a href="javascript:void(0)" title="Quick View" class="quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                                        <i class="icon anm anm-search-plus-r"></i>
                                                    </a>
                                                <!-- Start product button -->
                                                <form action="#" method="post">
                                                    <button class="btn btn--secondary cartIcon btn-addto-cart" type="button"><i class="icon anm anm-bag-l"></i></button>
                                                </form>
                                                <div class="wishlist-btn">
                                                    <a class="wishlist add-to-wishlist" href="#" title="Add to Wishlist">
                                                        <i class="icon anm anm-heart-l"></i>
                                                    </a>
                                                </div>
                                                <div class="compare-btn">
                                                    <a class="compare add-to-compare" href="compare.html" title="Add to Compare">
                                                        <i class="icon anm anm-random-r"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <!-- End product button -->
                                        </div>
                                        <!-- End product details -->
                                     </div>
                                </div>
                                <div class="col-6 col-sm-6 col-md-4 col-lg-2 grid-view-item style2 item">
                                    <div class="grid-view_image">
                                        <!-- start product image -->
                                        <a href="product-accordion.html" class="grid-view-item__link">
                                            <!-- image -->
                                            <img class="grid-view-item__image primary blur-up lazyload" data-src="assets/images/product-images/product-image25.jpg" src="assets/images/product-images/product-image25.jpg" alt="image" title="product" />
                                            <!-- End image -->
                                            <!-- Hover image -->
                                            <img class="grid-view-item__image hover blur-up lazyload" data-src="assets/images/product-images/product-image25-1.jpg" src="assets/images/product-images/product-image25-1.jpg" alt="image" title="product" />
                                            <!-- End hover image -->
                                        </a>
                                        <!-- end product image -->
                                        <!--start product details -->
                                        <div class="product-details hoverDetails text-center mobile">
                                            <!-- product name -->
                                            <div class="product-name">
                                                <a href="#">ACB Top</a>
                                            </div>
                                            <!-- End product name -->
                                            <!-- product price -->
                                            <div class="product-price">
                                                <span class="price">$280.00</span>
                                            </div>
                                            <!-- End product price -->
                                            <div class="product-review">
                                                <i class="font-13 fa fa-star-o"></i>
                                                <i class="font-13 fa fa-star-o"></i>
                                                <i class="font-13 fa fa-star-o"></i>
                                                <i class="font-13 fa fa-star-o"></i>
                                                <i class="font-13 fa fa-star-o"></i>
                                            </div>
                                            <!-- product button -->
                                            <div class="button-set">
                                                <a href="javascript:void(0)" title="Quick View" class="quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                                        <i class="icon anm anm-search-plus-r"></i>
                                                    </a>
                                                <!-- Start product button -->
                                                <form action="#" method="post">
                                                    <button class="btn btn--secondary cartIcon btn-addto-cart" type="button"><i class="icon anm anm-bag-l"></i></button>
                                                </form>
                                                <div class="wishlist-btn">
                                                    <a class="wishlist add-to-wishlist" href="#" title="Add to Wishlist">
                                                        <i class="icon anm anm-heart-l"></i>
                                                    </a>
                                                </div>
                                                <div class="compare-btn">
                                                    <a class="compare add-to-compare" href="compare.html" title="Add to Compare">
                                                        <i class="icon anm anm-random-r"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <!-- End product button -->
                                        </div>
                                        <!-- End product details -->
                                    </div>
                                </div>
                                <div class="col-6 col-sm-6 col-md-4 col-lg-2 grid-view-item style2 item">
                                    <div class="grid-view_image">
                                        <!-- start product image -->
                                        <a href="product-accordion.html" class="grid-view-item__link">
                                            <!-- image -->
                                            <img class="grid-view-item__image primary blur-up lazyload" data-src="assets/images/product-images/product-image26.jpg" src="assets/images/product-images/product-image26.jpg" alt="image" title="product" />
                                            <!-- End image -->
                                            <!-- Hover image -->
                                            <img class="grid-view-item__image hover blur-up lazyload" data-src="assets/images/product-images/product-image26-1.jpg" src="assets/images/product-images/product-image26-1.jpg" alt="image" title="product" />
                                            <!-- End hover image -->
                                        </a>
                                        <!-- end product image -->
                                        <!--start product details -->
                                        <div class="product-details hoverDetails text-center mobile">
                                            <!-- product name -->
                                            <div class="product-name">
                                                <a href="#" >A-Line Jacket</a>
                                            </div>
                                            <!-- End product name -->
                                            <!-- product price -->
                                            <div class="product-price">
                                                <span class="price">$698.60</span>
                                            </div>
                                            <!-- End product price -->
                                            <div class="product-review">
                                                <i class="font-13 fa fa-star-o"></i>
                                                <i class="font-13 fa fa-star-o"></i>
                                                <i class="font-13 fa fa-star-o"></i>
                                                <i class="font-13 fa fa-star-o"></i>
                                                <i class="font-13 fa fa-star-o"></i>
                                            </div>
                                            <!-- product button -->
                                            <div class="button-set">
                                                <a href="javascript:void(0)" title="Quick View" class="quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                                        <i class="icon anm anm-search-plus-r"></i>
                                                    </a>
                                                <!-- Start product button -->
                                                <form action="#" method="post">
                                                    <button class="btn btn--secondary cartIcon btn-addto-cart" type="button"><i class="icon anm anm-bag-l"></i></button>
                                                </form>
                                                <div class="wishlist-btn">
                                                    <a class="wishlist add-to-wishlist" href="#" title="Add to Wishlist">
                                                        <i class="icon anm anm-heart-l"></i>
                                                    </a>
                                                </div>
                                                <div class="compare-btn">
                                                    <a class="compare add-to-compare" href="compare.html" title="Add to Compare">
                                                        <i class="icon anm anm-random-r"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <!-- End product button -->
                                        </div>
                                        <!-- End product details -->
                                     </div>
                                </div>
                                <div class="col-6 col-sm-6 col-md-4 col-lg-2 item grid-view-item style2 grid-view-item--sold-out">
                                    <div class="grid-view_image">
                                        <!-- start product image -->
                                        <a href="product-accordion.html" class="grid-view-item__link">
                                            <!-- image -->
                                            <img class="grid-view-item__image primary blur-up lazyload" data-src="assets/images/product-images/product-image27.jpg" src="assets/images/product-images/product-image27.jpg" alt="image" title="product" />
                                            <!-- End image -->
                                            <!-- Hover image -->
                                            <img class="grid-view-item__image hover blur-up lazyload" data-src="assets/images/product-images/product-image27-1.jpg" src="assets/images/product-images/product-image27-1.jpg" alt="image" title="product" />
                                            <!-- End hover image -->
                                            <span class="sold-out"><span>Sold out</span></span>
                                        </a>
                                        <!-- end product image -->

                                        <!--start product details -->
                                        <div class="product-details hoverDetails text-center mobile">
                                            <!-- product name -->
                                            <div class="product-name">
                                                <a href="#">Camelia Reversible Jacket in Navy/Blue</a>
                                            </div>
                                            <!-- End product name -->
                                            <!-- product price -->
                                            <div class="product-price">
                                                <span class="price">$488.00</span>
                                            </div>
                                            <!-- End product price -->
                                            
                                            <div class="product-review">
                                                <i class="font-13 fa fa-star-o"></i>
                                                <i class="font-13 fa fa-star-o"></i>
                                                <i class="font-13 fa fa-star-o"></i>
                                                <i class="font-13 fa fa-star-o"></i>
                                                <i class="font-13 fa fa-star-o"></i>
                                            </div>
                                        </div>
                                        <!-- End product details -->
                                     </div>
                                </div>
                                <div class="col-6 col-sm-6 col-md-4 col-lg-2 grid-view-item style2 item">
                                    <div class="grid-view_image">
                                        <!-- start product image -->
                                        <a href="product-accordion.html" class="grid-view-item__link">
                                            <!-- image -->
                                            <img class="grid-view-item__image primary blur-up lazyload" data-src="assets/images/product-images/product-image28.jpg" src="assets/images/product-images/product-image28.jpg" alt="image" title="product" />
                                            <!-- End image -->
                                            <!-- Hover image -->
                                            <img class="grid-view-item__image hover blur-up lazyload" data-src="assets/images/product-images/product-image28-1.jpg" src="assets/images/product-images/product-image28-1.jpg" alt="image" title="product" />
                                            <!-- End hover image -->
                                        </a>
                                        <!-- end product image -->
                                        <!--start product details -->
                                        <div class="product-details hoverDetails text-center mobile">
                                            <!-- product name -->
                                            <div class="product-name">
                                                <a href="#">Wrinkled Tux Shirt in Navy</a>
                                            </div>
                                            <!-- End product name -->
                                            <!-- product price -->
                                            <div class="product-price">
                                                <span class="price">$158.00</span>
                                            </div>
                                            <!-- End product price -->
                                            <div class="product-review">
                                                <i class="font-13 fa fa-star-o"></i>
                                                <i class="font-13 fa fa-star-o"></i>
                                                <i class="font-13 fa fa-star-o"></i>
                                                <i class="font-13 fa fa-star-o"></i>
                                                <i class="font-13 fa fa-star-o"></i>
                                            </div>
                                            <!-- product button -->
                                            <div class="button-set">
                                                <a href="javascript:void(0)" title="Quick View" class="quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                                        <i class="icon anm anm-search-plus-r"></i>
                                                    </a>
                                                <!-- Start product button -->
                                                <form action="#" method="post">
                                                    <button class="btn btn--secondary cartIcon btn-addto-cart" type="button"><i class="icon anm anm-bag-l"></i></button>
                                                </form>
                                                <div class="wishlist-btn">
                                                    <a class="wishlist add-to-wishlist" href="#" title="Add to Wishlist">
                                                        <i class="icon anm anm-heart-l"></i>
                                                    </a>
                                                </div>
                                                <div class="compare-btn">
                                                    <a class="compare add-to-compare" href="compare.html" title="Add to Compare">
                                                        <i class="icon anm anm-random-r"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <!-- End product button -->
                                        </div>
                                        <!-- End product details -->
                                     </div>
                                </div>
                                <div class="col-6 col-sm-6 col-md-4 col-lg-2 grid-view-item style2 item">
                                    <div class="grid-view_image">
                                        <!-- start product image -->
                                        <a href="product-accordion.html" class="grid-view-item__link">
                                            <!-- image -->
                                            <img class="grid-view-item__image primary blur-up lazyload" data-src="assets/images/product-images/product-image29.jpg" src="assets/images/product-images/product-image29.jpg" alt="image" title="product" />
                                            <!-- End image -->
                                            <!-- Hover image -->
                                            <img class="grid-view-item__image hover blur-up lazyload" data-src="assets/images/product-images/product-image29-1.jpg" src="assets/images/product-images/product-image29-1.jpg" alt="image" title="product" />
                                            <!-- End hover image -->
                                        </a>
                                        <!-- end product image -->

                                        <!--start product details -->
                                        <div class="product-details hoverDetails text-center mobile">
                                            <!-- product name -->
                                            <div class="product-name">
                                                <a href="#">A-Line Mini Dress in Blue</a>
                                            </div>
                                            <!-- End product name -->
                                            <!-- product price -->
                                            <div class="product-price">
                                                <span class="price">$348.00</span>
                                            </div>
                                            <!-- End product price -->
                                            
                                            <div class="product-review">
                                                <i class="font-13 fa fa-star-o"></i>
                                                <i class="font-13 fa fa-star-o"></i>
                                                <i class="font-13 fa fa-star-o"></i>
                                                <i class="font-13 fa fa-star-o"></i>
                                                <i class="font-13 fa fa-star-o"></i>
                                            </div>
                                            <!-- product button -->
                                            <div class="button-set">
                                                <a href="javascript:void(0)" title="Quick View" class="quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                                        <i class="icon anm anm-search-plus-r"></i>
                                                    </a>
                                                <!-- Start product button -->
                                                <form action="#" method="post">
                                                    <button class="btn btn--secondary cartIcon btn-addto-cart" type="button"><i class="icon anm anm-bag-l"></i></button>
                                                </form>
                                                <div class="wishlist-btn">
                                                    <a class="wishlist add-to-wishlist" href="#" title="Add to Wishlist">
                                                        <i class="icon anm anm-heart-l"></i>
                                                    </a>
                                                </div>
                                                <div class="compare-btn">
                                                    <a class="compare add-to-compare" href="compare.html" title="Add to Compare">
                                                        <i class="icon anm anm-random-r"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <!-- End product button -->
                                        </div>
                                        <!-- End product details -->
                                     </div>
                                </div>
                                <div class="col-6 col-sm-6 col-md-4 col-lg-2 grid-view-item style2 item">
                                    <div class="grid-view_image">
                                        <!-- start product image -->
                                        <a href="product-accordion.html" class="grid-view-item__link">
                                            <!-- image -->
                                            <img class="grid-view-item__image primary blur-up lazyload" data-src="assets/images/product-images/product-image30.jpg" src="assets/images/product-images/product-image30.jpg" alt="image" title="product" />
                                            <!-- End image -->
                                            <!-- Hover image -->
                                            <img class="grid-view-item__image hover blur-up lazyload" data-src="assets/images/product-images/product-image30-1.jpg" src="assets/images/product-images/product-image30-1.jpg" alt="image" title="product" />
                                            <!-- End hover image -->
                                        </a>
                                        <!-- end product image -->
                                        <!--start product details -->
                                        <div class="product-details hoverDetails text-center mobile">
                                            <!-- product name -->
                                            <div class="product-name">
                                                <a href="#">Asymmetric Dress in Black</a>
                                            </div>
                                            <!-- End product name -->
                                            <!-- product price -->
                                            <div class="product-price">
                                                <span class="price">$578.00</span>
                                            </div>
                                            <!-- End product price -->
                                            
                                            <div class="product-review">
                                                <i class="font-13 fa fa-star-o"></i>
                                                <i class="font-13 fa fa-star-o"></i>
                                                <i class="font-13 fa fa-star-o"></i>
                                                <i class="font-13 fa fa-star-o"></i>
                                                <i class="font-13 fa fa-star-o"></i>
                                            </div>
                                            <!-- product button -->
                                            <div class="button-set">
                                                <a href="javascript:void(0)" title="Quick View" class="quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                                        <i class="icon anm anm-search-plus-r"></i>
                                                    </a>
                                                <!-- Start product button -->
                                                <form action="#" method="post">
                                                    <button class="btn btn--secondary cartIcon btn-addto-cart" type="button"><i class="icon anm anm-bag-l"></i></button>
                                                </form>
                                                <div class="wishlist-btn">
                                                    <a class="wishlist add-to-wishlist" href="#" title="Add to Wishlist">
                                                        <i class="icon anm anm-heart-l"></i>
                                                    </a>
                                                </div>
                                                <div class="compare-btn">
                                                    <a class="compare add-to-compare" href="compare.html" title="Add to Compare">
                                                        <i class="icon anm anm-random-r"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <!-- End product button -->
                                        </div>
                                        <!-- End product details -->
                                     </div>
                                </div>
                                <div class="col-6 col-sm-6 col-md-4 col-lg-2 grid-view-item style2 item">
                                    <div class="grid-view_image">
                                        <!-- start product image -->
                                        <a href="product-accordion.html" class="grid-view-item__link">
                                            <!-- image -->
                                            <img class="grid-view-item__image primary blur-up lazyload" data-src="assets/images/product-images/product-image31.jpg" src="assets/images/product-images/product-image31.jpg" alt="image" title="product" />
                                            <!-- End image -->
                                            <!-- Hover image -->
                                            <img class="grid-view-item__image hover blur-up lazyload" data-src="assets/images/product-images/product-image31-1.jpg" src="assets/images/product-images/product-image31-1.jpg" alt="image" title="product" />
                                            <!-- End hover image -->
                                        </a>
                                        <!-- end product image -->
                                        <!--start product details -->
                                        <div class="product-details hoverDetails text-center mobile">
                                            <!-- product name -->
                                            <div class="product-name">
                                                <a href="#">Babydoll Bow Dress</a>
                                            </div>
                                            <!-- End product name -->
                                            <!-- product price -->
                                            <div class="product-price">
                                                <span class="price">$313.60</span>
                                            </div>
                                            <!-- End product price -->
                                            <div class="product-review">
                                                <i class="font-13 fa fa-star-o"></i>
                                                <i class="font-13 fa fa-star-o"></i>
                                                <i class="font-13 fa fa-star-o"></i>
                                                <i class="font-13 fa fa-star-o"></i>
                                                <i class="font-13 fa fa-star-o"></i>
                                            </div>
                                            <!-- product button -->
                                            <div class="button-set">
                                                <a href="javascript:void(0)" title="Quick View" class="quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                                        <i class="icon anm anm-search-plus-r"></i>
                                                    </a>
                                                <!-- Start product button -->
                                                <form action="#" method="post">
                                                    <button class="btn btn--secondary cartIcon btn-addto-cart" type="button"><i class="icon anm anm-bag-l"></i></button>
                                                </form>
                                                <div class="wishlist-btn">
                                                    <a class="wishlist add-to-wishlist" href="#" title="Add to Wishlist">
                                                        <i class="icon anm anm-heart-l"></i>
                                                    </a>
                                                </div>
                                                <div class="compare-btn">
                                                    <a class="compare add-to-compare" href="compare.html" title="Add to Compare">
                                                        <i class="icon anm anm-random-r"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <!-- End product button -->
                                        </div>
                                        <!-- End product details -->
                                </div>  
                            	</div>
                        </div>
                    </div>
                </div>
                <!--End Main Content-->
            </div>
        </div>
        
    </div>
    <!--End Body Content-->
   <?php include 'footer.php'?>