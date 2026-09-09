<?php

include_once("db.php");


$sql="SELECT * FROM leaders;";
$leaders = mysqli_query($con,$sql);

?>
              
              
              
              
              
              <style>
                .social-area .fa{
                    margin-top: 10px;
                }
              </style>
              

              
              <div class="col-12 col-md-8 col-lg-4">
                    <div class="post-sidebar-area wow fadeInUpBig" data-wow-delay="0.2s">
                        <!-- Widget Area -->
                        <div class="sidebar-widget-area">
                            <h5 class="title">About Lokdal</h5>
                            <div class="widget-content">
                                <p>
                                    Presently senior social activist and politician Mr. Sunil Singh Ji is its national president, 
                                    who is born in a patriotic elite family in Aligarh district of Uttar Pradesh. Mr. Sunil Singh 
                                    has graduated in Engineering and Masters in Management. Mr. Sunil Singh has also been a member 
                                    of Uttar Pradesh Legislative Council.
                                </p>
                            </div>
                        </div>
                        <!-- Widget Area -->
                        <div class="sidebar-widget-area">
                            <h5 class="title">Top Profiles</h5>
                            <div class="widget-content">
                            <?php
                                while($row=mysqli_fetch_assoc($leaders)){
											  
                            ?>
                                 <!-- Single Blog Post -->
                                 <div class="single-blog-post post-style-2 d-flex align-items-center widget-post">
                                    <!-- Post Thumbnail -->
                                    <div class="post-thumbnail">
                                        <img src="../dashboard/img/leaders/<?=$row['img'];?>" alt="">
                                    </div>
                                    <!-- Post Content -->
                                    <div class="post-content">
                                        <a href="<?=$row['link'];?>" class="headline">
                                            <h5 class="mb-0"><?=$row['name'];?></h5>
                                        </a>
                                    </div>
                                </div>

                            <?php
                                 }							  
                            ?>
                                
                            </div>
                        </div>
                        <!-- Widget Area -->
                        <div class="sidebar-widget-area">
                            <h5 class="title">Stay Connected</h5>
                            <div class="widget-content">
                                <div class="social-area d-flex justify-content-between">
                                    <a href="https://www.facebook.com/Lokdalindia/" target="_blank"><i class="fa fa-facebook"></i></a>
                                    <a href="https://twitter.com/lokdalindia" target="_blank"><i class="fa fa-twitter"></i></a>
                                    <a href="mailto:lokdalparty@gmail.com" target="_blank"><i class="fa fa-envelope mr-1"></i></a>
                                    <a href="tel:9810074878" target="_blank"><i class="fa fa-phone"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- Widget Area -->
                        <div class="sidebar-widget-area">
                            <h5 class="title">Today’s Pick</h5>
                            <div class="widget-content">
                                <!-- Single Blog Post -->
                                <div class="single-blog-post todays-pick">
                                    <!-- Post Thumbnail -->
                                    <div class="post-thumbnail">
                                        <img src="img/img/logo1.png" alt="">
                                    </div>
                                    <!-- Post Content -->
                                    <div class="post-content px-0 pb-0">
                                        <a href="#" class="headline">
                                            <h3 style="color: #00772D; text-align: center;font-weight: bolder; font-size: xx-large;"><strong>Lokdal</strong></h3>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            