<!--Sidebar-->
<div class="col-12 col-sm-12 col-md-3 col-lg-3 sidebar filterbar">
                	<div class="closeFilter d-block d-md-none d-lg-none"><i class="icon icon anm anm-times-l"></i></div>
                	<div class="sidebar_tags">
                    	<!--Categories-->
                    	<div class="sidebar_widget categories filter-widget">
                  
                            <div class="widget-content">
                                <ul class="sidebar_categories" >
								<?php
                              $sql = "SELECT * FROM market_category order by id DESC";
                                $result = $conn->query($sql);
                                if ($result->num_rows > 0) {
                                    // output data of each row
                                    while($row = $result->fetch_assoc()) {
                           ?>
                                      <li class="lvl-1"><a href="<?php echo $row['link']?>?category_name=<?php echo $row['category_name']?>" class="site-nav"><h3 sytle="height:15px width:15px";><?php echo $row['icon']?><?php echo " ".$row['category_name']?></h3></a></li>
								<?php }}?>
								
								 <!--<li class="level1 sub-level"><a href="#;" class="site-nav"><h3 sytle="height:15px width:15px";><?php echo $row['category_name']?></h3></a>
                                    	<ul class="sublinks">
                                        	<li class="level2"><a href="#;" class="site-nav">Men</a></li>
                                            <li class="level2"><a href="#;" class="site-nav">Women</a></li>
                                            <li class="level2"><a href="#;" class="site-nav">Child</a></li>
                                            <li class="level2"><a href="#;" class="site-nav">View All Clothing</a></li>
                                        </ul>
                                    </li>
                                   
                                    <li class="lvl-1"><a href="#;" class="site-nav"><h3 sytle="height:15px width:15px";>Shoes</h3></a></li>
                                    <li class="lvl-1"><a href="#;" class="site-nav"><h3 sytle="height:15px width:15px";>Accessories</h3></a></li>
                                    <li class="lvl-1"><a href="#;" class="site-nav"><h3 sytle="height:15px width:15px";>Collections</h3></a></li>
                                    <li class="lvl-1"><a href="#;" class="site-nav"><h3 sytle="height:15px width:15px";>Sale</h3></a></li>
                                    <li class="lvl-1"><a href="#;" class="site-nav"><h3 sytle="height:15px width:15px";>Page</h3></a></li>-->
                                </ul>
                            </div>
                        </div>
                        <!--Categories-->
                   
                      
                        <!--Banner-->
                        <div class="sidebar_widget static-banner">
                        	<img src="assets/images/side-banner-2.jpg" alt="" />
                        </div>
                        <!--Banner-->
                      
                    
                        <!--end Product Tags-->
                    </div>
                </div>
                <!--End Sidebar-->