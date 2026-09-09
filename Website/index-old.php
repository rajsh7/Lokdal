<?php

include_once("db.php");

$sql="SELECT * FROM daily_update;";
$result = mysqli_query($con,$sql);



$sql="SELECT * FROM activities;";
$activities = mysqli_query($con,$sql);

?>



<style>
      /* width */
      ::-webkit-scrollbar {
        width: 5px;
      }
      
      /* Track */
      ::-webkit-scrollbar-track {
        box-shadow: inset 0 0 5px grey; 
        border-radius: 10px;
      }
       
      /* Handle */
      ::-webkit-scrollbar-thumb {
        background: #00772D; 
        border-radius: 10px;
      }
      
      /* Handle on hover */
      ::-webkit-scrollbar-thumb:hover {
        background: #0b923f; 
      }


      .post-number .fa{
        margin-top:10px;
      }

       .fa{
           margin-top:4px;
       }
      </style>










<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Title  -->
    <title>Lokdal</title>
    <!--Fonts-->
    <link href="https://fonts.googleapis.com/css?family=Oswald:300,400,500,700%7CRoboto:300,400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Rubik" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Red+Hat+Display:ital,wght@1,500&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <!--LightBox-->
    <link rel="stylesheet" href="assets/vendor/lightbox/lightbox.min.css">
    <script src="assets/vendor/lightbox/lightbox-plus-jquery.min.js"></script>
    <!-- Favicon  -->
    <link rel="icon" href="img/img/logo1.png">
    <!-- Style CSS -->
    <link rel="stylesheet" href="style.css">
    <!--Google Translate API-->
    <link rel="stylesheet" href="css/google translator.css">

    <style>
        .goog-logo-link { display:none !important​; } 
        .goog-te-gadget{ color: transparent !important; }
        .goog-te-banner-frame.skiptranslate { display: none !important; } body { top: 0px !important; }
    </style>

    <script src="js/google translation.js"></script>
    <script src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit" type="text/javascript"></script>
    <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
    
</head>
<body>

    <!-- Preloader Start -->
    <div id="preloader">
        <img src="img/img/logo green.png" style="height: 50px;" alt="">
        <div class="preload-content"></div>
            <div id="world-load"></div>
        </div>
    </div>
    <!-- Preloader End -->
    <style>
         body{
        font-family: Oswald, "Helvetica Neue", -apple-system, BlinkMacSystemFont, "Segoe UI", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
    }
    </style>


    
    <!-- ***** Header Area Start ***** -->
    

<?php include_once("header.php"); ?>

    
    
    <!-- ********** Hero Area Start ********** -->
    <div class="hero-area">
        <!-- Hero Slides Area -->
        <div class="hero-slides owl-carousel">
            <!-- Single Slide -->
            <div class="single-hero-slide bg-img background-overlay" id="sh1"></div>
            <!-- Single Slide -->
            <div class="single-hero-slide bg-img background-overlay" id="sh2"></div>
            <!-- Single Slide -->
            <div class="single-hero-slide bg-img background-overlay" id="sh3"></div>
        </div>
        <!-- Hero Post Slide -->
        <div class="hero-post-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="hero-post-slide">
                            <!-- Single Slide -->
                            <div class="single-slide d-flex align-items-center">
                                <div class="post-number">
                                    <p><i class="fa fa-suitcase" aria-hidden="true"></i></p>
                                </div>
                                <div class="post-title">
                                    <a href="https://docs.google.com/forms/d/e/1FAIpQLSednDV-de3A7rTE0hFb0Xx5iBopY8HuwY1DIGM6kYZ4_7CEsw/viewform" target="_blank">Right To Employment</a>
                                </div>
                            </div>
                            <!-- Single Slide -->
                            <div class="single-slide d-flex align-items-center">
                                <div class="post-number">
                                    <p><i class="fa fa-graduation-cap" aria-hidden="true"></i></p>
                                </div>
                                <div class="post-title">
                                    <a href="https://docs.google.com/forms/d/e/1FAIpQLSednDV-de3A7rTE0hFb0Xx5iBopY8HuwY1DIGM6kYZ4_7CEsw/viewform" target="_blank">Right For Education</a>
                                </div>
                            </div>
                            <!-- Single Slide -->
                            <div class="single-slide d-flex align-items-center">
                                <div class="post-number">
                                    <p><i class="fa fa-plus-circle" aria-hidden="true"></i></p>
                                </div>
                                <div class="post-title">
                                    <a href="https://docs.google.com/forms/d/e/1FAIpQLSednDV-de3A7rTE0hFb0Xx5iBopY8HuwY1DIGM6kYZ4_7CEsw/viewform" target="_blank">Better Health And Security</a>
                                </div>
                            </div>
                            <!-- Single Slide -->
                            <div class="single-slide d-flex align-items-center">
                                <div class="post-number">
                                    <p><i class="fa fa-bandcamp" aria-hidden="true"></i></p>
                                </div>
                                <div class="post-title">
                                    <a href="https://docs.google.com/forms/d/e/1FAIpQLSednDV-de3A7rTE0hFb0Xx5iBopY8HuwY1DIGM6kYZ4_7CEsw/viewform" target="_blank">Stop Corruption</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>







   
    <!-- ********** Hero Area End ********** -->
    <div class="main-content-wrapper section-padding-100">
        <div class="container">
            <div class="row justify-content-center">
                <!-- ============= Post Content Area Start ============= -->
                <div class="col-12 col-lg-8">
                    <div class="post-content-area mb-50">
                        <!-- Catagory Area -->
                        <div class="world-catagory-area">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="title">Recent Activities : </li>
                                <li class="nav-item">
                                    <a class="nav-link active tb-link" id="tab1" data-toggle="tab" href="#world-tab-0" role="tab" aria-controls="world-tab-0" aria-selected="true">Lokdal Jansabha</a>
                                </li>
                                <?php
                        while($row=mysqli_fetch_assoc($activities)){
											  
                ?>
                                <li class="nav-item">
                                    <a class="nav-link tb-link" id="tab2" data-toggle="tab" href="#world-tab-<?= $row['id'];?>" role="tab" aria-controls="world-tab-2" aria-selected="false"><?= $row['title'];?></a>
                                </li>
                                <?php
                  }							  
                ?>
                            </ul>
                            
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="world-tab-0" role="tabpanel" aria-labelledby="tab1">
                                    <div class="row">
                                        <div class="col-12 col-md-6">
                                            <div class="world-catagory-slider owl-carousel wow fadeInUpBig" data-wow-delay="0.1s">
                                                <!-- Single Blog Post -->
                                                <div class="single-blog-post">
                                                    <a data-lightbox="jansabha" href="img/Lokdal_content/b.jpg" class="headline">
                                                    <!-- Post Thumbnail -->
                                                    <div class="post-thumbnail">
                                                        <img src="img/Lokdal_content/b.jpg" alt="">
                                                        <!-- Catagory -->
                                                    </div>
                                                    <!-- Post Content -->
                                                    <div class="post-content">
                                                        <h5>Lokdal Jansabha</h5>
                                                        <p>Chaudhary Sunil Singh</p>
                                                        <!-- Post Meta -->
                                                        <div class="post-meta">
                                                            <p>Lokdal on Feb 25, 2017 at 2:55 pm</p>
                                                        </div>
                                                    </div>
                                                    </a>
                                                </div>
                                                <!-- Single Blog Post -->
                                                <div class="single-blog-post">
                                                    <a data-lightbox="jansabha" href="img/Lokdal_content/c.jpg" class="headline">
                                                    <!-- Post Thumbnail -->
                                                    <div class="post-thumbnail">
                                                        <img src="img/Lokdal_content/c.jpg" alt="">
                                                        <!-- Catagory -->
                                                    </div>
                                                    <!-- Post Content -->
                                                    <div class="post-content">
                                                            <h5>Lokdal Jansabha</h5>
                                                        <p>Chaudhary Sunil Singh</p>
                                                        <!-- Post Meta -->
                                                        <div class="post-meta">
                                                            <p>Lokdal on Feb 25, 2017 at 2:55 pm</p>
                                                        </div>
                                                    </div>
                                                    </a>
                                                </div>
                                                <!-- Single Blog Post -->
                                                <div class="single-blog-post">
                                                    <a data-lightbox="jansabha" href="img/Lokdal_content/d.jpg" class="headline">                                                    <!-- Post Thumbnail -->
                                                    <div class="post-thumbnail">
                                                        <img src="img/Lokdal_content/d.jpg" alt="">
                                                        <!-- Catagory -->
                                                    </div>
                                                    <!-- Post Content -->
                                                    <div class="post-content">
                                                            <h5>Lokdal Jansabha</h5>
                                                        <p>Chaudhary Sunil Singh</p>
                                                        <!-- Post Meta -->
                                                        <div class="post-meta">
                                                            <p>Lokdal on Feb 25, 2017 at 2:55 pm</p>
                                                        </div>
                                                    </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                       
                                        <div class="col-12 col-md-6">
                                            <!-- Single Blog Post -->
                                            
                                            <div class="single-blog-post post-style-2 d-flex align-items-center wow fadeInUpBig" data-wow-delay="0.2s">
                                                <!-- Post Thumbnail -->
                                                <div class="post-thumbnail">
                                                    <img src="img/Lokdal_content/e.jpg" alt="">
                                                </div>
                                                <!-- Post Content -->
                                                
                                                <div class="post-content ">
                                                    <a data-lightbox="jansabha" href="img/Lokdal_content/e.jpg" class="headline">
                                                        <div class="headline">
                                                            <h5 class="">Lokdal Jansabha</h5>
                                                        </div>
                                                    
                                                        <!-- Post Meta -->
                                                        <div class="post-meta">
                                                            <p class="">Lokdal on Feb 25, 2017 at 2:55 pm</p>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                            <!-- Single Blog Post -->
                                            <div class="single-blog-post post-style-2 d-flex align-items-center wow fadeInUpBig" data-wow-delay="0.3s">
                                                <!-- Post Thumbnail -->
                                                <div class="post-thumbnail">
                                                    <img src="img/Lokdal_content/f.jpg" alt="">
                                                </div>
                                                <!-- Post Content -->
                                                <div class="post-content">
                                                    <a data-lightbox="jansabha" href="img/Lokdal_content/f.jpg" class="headline">
                                                        <h5>Lokdal Jansabha</h5>
                                                        
                                                        <!-- Post Meta -->
                                                        <div class="post-meta">
                                                            <p>Lokdal on Feb 25, 2017 at 2:55 pm</p>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                            <!-- Single Blog Post -->
                                            <div class="single-blog-post post-style-2 d-flex align-items-center wow fadeInUpBig" data-wow-delay="0.4s">
                                                <!-- Post Thumbnail -->
                                                <div class="post-thumbnail">
                                                    <img src="img/Lokdal_content/g.jpeg" alt="">
                                                </div>
                                                <!-- Post Content -->
                                                <div class="post-content">
                                                    <a data-lightbox="jansabha" href="img/Lokdal_content/g.jpeg" class="headline">
                                                        <h5>Lokdal Jansabha</h5>
                                                        
                                                        <!-- Post Meta -->
                                                        <div class="post-meta">
                                                            <p>Lokdal on Feb 25, 2017 at 2:55 pm</p>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                            <!-- Single Blog Post -->
                                            <div class="single-blog-post post-style-2 d-flex align-items-center wow fadeInUpBig" data-wow-delay="0.5s">
                                                <!-- Post Thumbnail -->
                                                <div class="post-thumbnail">
                                                    <img src="img/Lokdal_content/b.jpg" alt="">
                                                </div>
                                                <!-- Post Content -->
                                                <div class="post-content">
                                                    <a data-lightbox="jansabha" href="img/Lokdal_content/b.jpg" class="headline">
                                                        <h5>Lokdal Jansabha</h5>
                                                    
                                                        <!-- Post Meta -->
                                                        <div class="post-meta">
                                                            <p>Lokdal on Feb 25, 2017 at 2:55 pm</p>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                            <!-- Single Blog Post -->
                                            <div class="single-blog-post post-style-2 d-flex align-items-center wow fadeInUpBig" data-wow-delay="0.4s">
                                                <!-- Post Thumbnail -->
                                                <div class="post-thumbnail">
                                                    <img src="img/Lokdal_content/c.jpg" alt="">
                                                </div>
                                                <!-- Post Content -->
                                                <div class="post-content">
                                                    <a data-lightbox="jansabha" href="img/Lokdal_content/c.jpg" class="headline">
                                                        <h5>Lokdal Jansabha</h5>
                                                    
                                                        <!-- Post Meta -->
                                                        <div class="post-meta">
                                                            <p>Lokdal on Feb 25, 2017 at 2:55 pm</p>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php
                                $sql="SELECT * FROM activities;";
                                $activities = mysqli_query($con,$sql);
                                while($rows=mysqli_fetch_assoc($activities)){
											  
                ?>
                                <div class="tab-pane fade" id="world-tab-<?= $rows['id'];?>" role="tabpanel" aria-labelledby="tab<?= $rows['id'];?>">
                                    <div class="row">
                                        <div class="col-12 col-md-6">
                                            <!-- Single Blog Post -->
                                            <div class="single-blog-post">
                                                <!-- Post Thumbnail -->
                                                <div class="post-thumbnail">
                                                    <img src="../dashboard/<?= $rows['img1'];?>" alt="">
                                                    <!-- Catagory -->
                                                </div>
                                                <!-- Post Content -->
                                                <div class="post-content">
                                                    <a data-lightbox="dharna" href="../dashboard/<?= $rows['img1'];?>" class="headline">
                                                        <h5><?= $rows['t1'];?></h5>
                                                    
                                                        <p><?= $rows['s1'];?></p>
                                                        <!-- Post Meta -->
                                                        <div class="post-meta">
                                                            <p>Lokdal on <?= $rows['date'];?></p>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <!-- Single Blog Post -->
                                            <div class="single-blog-post post-style-2 d-flex align-items-center">
                                                <!-- Post Thumbnail -->
                                                <div class="post-thumbnail">
                                                    <img src="../dashboard/<?= $rows['img2'];?>" alt="">
                                                </div>
                                                <!-- Post Content -->
                                                <div class="post-content">
                                                    <a data-lightbox="dharna" href="../dashboard/<?= $rows['img2'];?>" class="headline">
                                                        <h5><?= $rows['t2'];?></h5>
                                                    
                                                        <!-- Post Meta -->
                                                        <div class="post-meta">
                                                            <p><?= $rows['s2'];?></p>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                            <!-- Single Blog Post -->
                                            <div class="single-blog-post post-style-2 d-flex align-items-center">
                                                <!-- Post Thumbnail -->
                                                <div class="post-thumbnail">
                                                    <img src="../dashboard/<?= $rows['img3'];?>" alt="">
                                                </div>
                                                <!-- Post Content -->
                                                <div class="post-content">
                                                    <a data-lightbox="dharna" href="../dashboard/<?= $rows['img3'];?>" class="headline">
                                                        <h5><?= $rows['t3'];?></h5>
                                                    
                                                        <!-- Post Meta -->
                                                        <div class="post-meta">
                                                            <p><?= $rows['s3'];?></p>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                            <!-- Single Blog Post -->
                                            <div class="single-blog-post post-style-2 d-flex align-items-center">
                                                <!-- Post Thumbnail -->
                                                <div class="post-thumbnail">
                                                    <img src="../dashboard/<?= $rows['img4'];?>" alt="">
                                                </div>
                                                <!-- Post Content -->
                                                <div class="post-content">
                                                    <a data-lightbox="dharna" href="../dashboard/<?= $rows['img4'];?>" class="headline">
                                                        <h5><?= $rows['t4'];?></h5>
                                                    
                                                        <!-- Post Meta -->
                                                        <div class="post-meta">
                                                            <p><?= $rows['t4'];?></p>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                            <!-- Single Blog Post -->
                                            <div class="single-blog-post post-style-2 d-flex align-items-center">
                                                <!-- Post Thumbnail -->
                                                <div class="post-thumbnail">
                                                    <img src="../dashboard/<?= $rows['img5'];?>" alt="">
                                                </div>
                                                <!-- Post Content -->
                                                <div class="post-content">
                                                    <a data-lightbox="dharna" href="../dashboard/<?= $rows['img5'];?>" class="headline">
                                                        <h5><?= $rows['t5'];?></h5>
                                                        
                                                        <!-- Post Meta -->
                                                        <div class="post-meta">
                                                            <p><?= $rows['s5'];?></p>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                            <!-- Single Blog Post -->
                                            <div class="single-blog-post post-style-2 d-flex align-items-center">
                                                <!-- Post Thumbnail -->
                                                <div class="post-thumbnail">
                                                    <img src="../dashboard/<?= $rows['img6'];?>" alt="">
                                                </div>
                                                <!-- Post Content -->
                                                <div class="post-content">
                                                    <a data-lightbox="dharna" href="../dashboard/<?= $rows['img6'];?>" class="headline">
                                                        <h5><?= $rows['t6'];?></h5>
                                                        
                                                        <!-- Post Meta -->
                                                        <div class="post-meta">
                                                            <p><?= $rows['s6'];?></p>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php
                                    }
                                ?>
                                
                            </div>
                        </div>
                        <!-- Catagory Area -->
                        <div class="world-catagory-area mt-50">
                            <ul class="nav nav-tabs" id="myTab2" role="tablist">
                                <li class="title">Our Inspiration :</li>
                                <li class="nav-item">
                                    <a class="nav-link active tb-link" id="tab10" data-toggle="tab" href="#world-tab-10" role="tab" aria-controls="world-tab-10" aria-selected="true">Choudhary charan singh</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link tb-link" id="tab11" data-toggle="tab" href="#world-tab-11" role="tab" aria-controls="world-tab-11" aria-selected="false">Chaudhary Sunil Singh</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent2">
                                <div class="tab-pane fade show active" id="world-tab-10" role="tabpanel" aria-labelledby="tab10">
                                    <div class="row">
                                        <div class="col-12 col-md-6">
                                            <!-- Single Blog Post -->
                                            <div class="single-blog-post wow fadeInUpBig" data-wow-delay="0.2s">
                                                <!-- Post Thumbnail -->
                                                <div class="post-thumbnail">
                                                    <img src="img/Lokdal_content/1.jpeg" alt="">
                                                    <!-- Catagory -->
                                                </div>
                                                <!-- Post Content -->
                                                <div class="post-content">
                                                    <a data-lightbox="charan" href="img/Lokdal_content/1.jpeg" class="headline">
                                                        <h5>Ralley</h5>
                                                    
                                                        <p>Chaudhary Charan Singh</p>
                                                        <!-- Post Meta -->
                                                        <div class="post-meta">
                                                            <p>Lokdal on Feb 25, 2017 at 2:55 pm</p>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <!-- Single Blog Post -->
                                            <div class="single-blog-post wow fadeInUpBig" data-wow-delay="0.3s">
                                                <!-- Post Thumbnail -->
                                                <div class="post-thumbnail">
                                                    <img src="img/Lokdal_content/2.PNG" alt="">
                                                    <!-- Catagory -->
                                                </div>
                                                <!-- Post Content -->
                                                <div class="post-content">
                                                    <a data-lightbox="charan" href="img/Lokdal_content/2.PNG" class="headline">
                                                        <h5>Event</h5>
                                                    
                                                        <p>Chaudhary Charan Singh</p>
                                                        <!-- Post Meta -->
                                                        <div class="post-meta">
                                                            <p>Lokdal on Feb 25, 2017 at 2:55 pm</p>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="world-catagory-slider2 owl-carousel wow fadeInUpBig" data-wow-delay="0.4s">
                                                <!-- ========= Single Catagory Slide ========= -->
                                                <div class="single-cata-slide">
                                                    <div class="row">
                                                        <div class="col-12 col-md-6">
                                                            <!-- Single Blog Post -->
                                                            <div class="single-blog-post post-style-2 d-flex align-items-center mb-1">
                                                                <!-- Post Thumbnail -->
                                                                <div class="post-thumbnail">
                                                                    <img src="img/img/featured1.jpg" alt="">
                                                                </div>
                                                                <!-- Post Content -->
                                                                <div class="post-content">
                                                                    <a data-lightbox="charan" href="img/img/featured1.jpg" class="headline">
                                                                        <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most </h5>
                                                                        
                                                                        <!-- Post Meta -->
                                                                        <div class="post-meta">
                                                                            <p>Lokdal on Sep 29, 2017 at 9:48 am</p>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 col-md-6">
                                                            <!-- Single Blog Post -->
                                                            <div class="single-blog-post post-style-2 d-flex align-items-center mb-1">
                                                                <!-- Post Thumbnail -->
                                                                <div class="post-thumbnail">
                                                                    <img src="img/Lokdal_content/1.jpeg" alt="">
                                                                </div>
                                                                <!-- Post Content -->
                                                                <div class="post-content">
                                                                    <a data-lightbox="charan" href="img/Lokdal_content/1.jpeg" class="headline">
                                                                        <h5>Chaudhary Charan singh Ralley</h5>
                                                                        <h6>Election Preperation</h6>
                                                                    
                                                                        <!-- Post Meta -->
                                                                        <div class="post-meta">
                                                                            <p>Lokdal on Sep 29, 2017 at 9:48 am</p>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 col-md-6">
                                                            <!-- Single Blog Post -->
                                                            <div class="single-blog-post post-style-2 d-flex align-items-center mb-1">
                                                                <!-- Post Thumbnail -->
                                                                <div class="post-thumbnail">
                                                                    <img src="img/Lokdal_content/2.PNG" alt="">
                                                                </div>
                                                                <!-- Post Content -->
                                                                <div class="post-content">
                                                                    <a data-lightbox="charan" href="img/Lokdal_content/2.PNG" class="headline">
                                                                        <h5>Lokdal Rashtray Parisad, Lok Swrajgram, Gwalior</h5>
                                                                    
                                                                        <!-- Post Meta -->
                                                                        <div class="post-meta">
                                                                            <p>Lokdal on Sep 29, 2017 at 9:48 am</p>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 col-md-6">
                                                            <!-- Single Blog Post -->
                                                            <div class="single-blog-post post-style-2 d-flex align-items-center mb-1">
                                                                <!-- Post Thumbnail -->
                                                                <div class="post-thumbnail">
                                                                    <img src="img/Lokdal_content/3.jpeg" alt="">
                                                                </div>
                                                                <!-- Post Content -->
                                                                <div class="post-content">
                                                                    <a data-lightbox="charan" href="img/Lokdal_content/3.jpeg" class="headline">
                                                                        <h5>Chaudhary Charan singh</h5>
                                                                    
                                                                        <!-- Post Meta -->
                                                                        <div class="post-meta">
                                                                            <p>Lokdal on Sep 29, 2017 at 9:48 am</p>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- ========= Single Catagory Slide ========= -->
                                                <div class="single-cata-slide">
                                                    <div class="row">
                                                        <div class="col-12 col-md-6">
                                                            <!-- Single Blog Post -->
                                                            <div class="single-blog-post post-style-2 d-flex align-items-center mb-1">
                                                                <!-- Post Thumbnail -->
                                                                <div class="post-thumbnail">
                                                                    <img src="img/Lokdal_content/6.PNG" alt="">
                                                                </div>
                                                                <!-- Post Content -->
                                                                <div class="post-content">
                                                                    <a data-lightbox="charan" href="img/Lokdal_content/6.PNG" class="headline">
                                                                        <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most How Did van Gogh’s Turbulent</h5>
                                                                    
                                                                        <!-- Post Meta -->
                                                                        <div class="post-meta">
                                                                            <p>Lokdal on Sep 29, 2017 at 9:48 am</p>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 col-md-6">
                                                            <!-- Single Blog Post -->
                                                            <div class="single-blog-post post-style-2 d-flex align-items-center mb-1">
                                                                <!-- Post Thumbnail -->
                                                                <div class="post-thumbnail">
                                                                    <img src="img/Lokdal_content/5.PNG" alt="">
                                                                </div>
                                                                <!-- Post Content -->
                                                                <div class="post-content">
                                                                    <a data-lightbox="charan" href="img/Lokdal_content/5.PNG" class="headline">
                                                                        <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most How Did van Gogh’s Turbulent</h5>
                                                                        
                                                                        <!-- Post Meta -->
                                                                        <div class="post-meta">
                                                                            <p>Lokdal on Sep 29, 2017 at 9:48 am</p>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 col-md-6">
                                                            <!-- Single Blog Post -->
                                                            <div class="single-blog-post post-style-2 d-flex align-items-center mb-1">
                                                                <!-- Post Thumbnail -->
                                                                <div class="post-thumbnail">
                                                                    <img src="img/img/featured3.jpg" alt="">
                                                                </div>
                                                                <!-- Post Content -->
                                                                <div class="post-content">
                                                                    <a data-lightbox="charan" href="img/img/featured3.jpg" class="headline">
                                                                        <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
                                                                    
                                                                        <!-- Post Meta -->
                                                                        <div class="post-meta">
                                                                            <p>Lokdal on Sep 29, 2017 at 9:48 am</p>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 col-md-6">
                                                            <!-- Single Blog Post -->
                                                            <div class="single-blog-post post-style-2 d-flex align-items-center mb-1">
                                                                <!-- Post Thumbnail -->
                                                                <div class="post-thumbnail">
                                                                    <img src="img/img/featured1.jpg" alt="">
                                                                </div>
                                                                <!-- Post Content -->
                                                                <div class="post-content">
                                                                    <a data-lightbox="charan" href="img/img/featured1.jpg" class="headline">
                                                                        <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
                                                                    
                                                                        <!-- Post Meta -->
                                                                        <div class="post-meta">
                                                                            <p>Lokdal on Sep 29, 2017 at 9:48 am</p>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="world-tab-11" role="tabpanel" aria-labelledby="tab11">
                                    <div class="row">
                                        <div class="col-12 col-md-6">
                                            <!-- Single Blog Post -->
                                            <div class="single-blog-post">
                                                <!-- Post Thumbnail -->
                                                <div class="post-thumbnail">
                                                    <img src="img/Lokdal_content/6.JPG" alt="">
                                                    <!-- Catagory -->
                                                </div>
                                                <!-- Post Content -->
                                                <div class="post-content">
                                                    <a data-lightbox="sunil" href="img/Lokdal_content/6.JPG" class="headline">
                                                        <h5>Government Meet</h5>
                                                        
                                                        <p>Chaudhary Sunil Singh</p>
                                                        <!-- Post Meta -->
                                                        <div class="post-meta">
                                                            <p>Lokdal on Feb 25, 2017 at 2:55 pm</p>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <!-- Single Blog Post -->
                                            <div class="single-blog-post">
                                                <!-- Post Thumbnail -->
                                                <div class="post-thumbnail">
                                                    <img src="img/Lokdal_content/a.JPG" alt="">
                                                    <!-- Catagory -->
                                                </div>
                                                <!-- Post Content -->
                                                <div class="post-content">
                                                    <a data-lightbox="sunil" href="img/Lokdal_content/a.JPG" class="headline">
                                                        <h5>Alligarh</h5>
                                                        
                                                        <p>Chaudhary Sunil Singh</p>
                                                        <!-- Post Meta -->
                                                        <div class="post-meta">
                                                            <p>Lokdal on Feb 25, 2017 at 2:55 pm</p>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <!-- Single Blog Post -->
                                            <div class="single-blog-post post-style-2 d-flex align-items-center mb-1">
                                                <!-- Post Thumbnail -->
                                                <div class="post-thumbnail">
                                                    <img src="img/img/featured1.jpg" alt="">
                                                </div>
                                                <!-- Post Content -->
                                                <div class="post-content">
                                                    <a data-lightbox="sunil" href="img/img/featured1.jpg" class="headline">
                                                        <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
                                                    
                                                        <!-- Post Meta -->
                                                        <div class="post-meta">
                                                            <p>Lokdal on Feb 25, 2017 at 2:55 pm</p>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <!-- Single Blog Post -->
                                            <div class="single-blog-post post-style-2 d-flex align-items-center mb-1">
                                                <!-- Post Thumbnail -->
                                                <div class="post-thumbnail">
                                                    <img src="img/img/featured2.jpg" alt="">
                                                </div>
                                                <!-- Post Content -->
                                                <div class="post-content">
                                                    <a data-lightbox="sunil" href="img/img/featured2.jpg" class="headline">
                                                        <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
                                                    
                                                        <!-- Post Meta -->
                                                        <div class="post-meta">
                                                            <p>Lokdal on Feb 25, 2017 at 2:55 pm</p>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <!-- Single Blog Post -->
                                            <div class="single-blog-post post-style-2 d-flex align-items-center mb-1">
                                                <!-- Post Thumbnail -->
                                                <div class="post-thumbnail">
                                                    <img src="img/img/featured3.jpg" alt="">
                                                </div>
                                                <!-- Post Content -->
                                                <div class="post-content">
                                                    <a data-lightbox="sunil" href="img/img/featured3.jpg" class="headline">
                                                        <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
                                                        
                                                        <!-- Post Meta -->
                                                        <div class="post-meta">
                                                            <p>Lokdal on Feb 25, 2017 at 2:55 pm</p>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <!-- Single Blog Post -->
                                            <div class="single-blog-post post-style-2 d-flex align-items-center mb-1">
                                                <!-- Post Thumbnail -->
                                                <div class="post-thumbnail">
                                                    <img src="img/img/featured1.jpg" alt="">
                                                </div>
                                                <!-- Post Content -->
                                                <div class="post-content">
                                                    <a data-lightbox="sunil" href="img/img/featured1.jpg" class="headline">
                                                        <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
                                                        
                                                        <!-- Post Meta -->
                                                        <div class="post-meta">
                                                            <p>Lokdal on Feb 25, 2017 at 2:55 pm</p>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ========== Sidebar Area ========== -->
                <?php include_once("sidebar.php"); ?>
            </div>
            <div class="world-latest-articles">
                <div class="row">
                    <div class="col-12 col-lg-8">
                        <div class="title">
                            <h5>Daily Updates</h5>
                        </div>
                        <?php
                        while($row=mysqli_fetch_assoc($result)){
											  
                        ?>
                        <!-- Single Blog Post -->
                        <div class="single-blog-post post-style-4 d-flex align-items-center wow fadeInUpBig" data-wow-delay="0.2s">
                            <!-- Post Thumbnail -->
                            <a data-lightbox="articals" href="../dashboard/<?= $row['img'];?>">
                                    <img src="../dashboard/<?= $row['img'];?>" alt="">
                                <!-- Post Content -->
                                <div class="post-content">
                                        <h5><?= $row['title'];?></h5>
                                    <p><?= $row['description'];?></p>
                                </div>
                            </a>
                        </div>
                        <?php
                        }
                        ?>
                        
                    </div>
                    <div class="col-12 col-lg-4">
                        <div class="title">
                            <h5>Most Popular Videos</h5>
                        </div>
                        <!-- Single Blog Post -->
                        <div class="single-blog-post wow fadeInUpBig" data-wow-delay="0.2s">
                            <!-- Post Thumbnail -->
                            <div class="post-thumbnail">
                                <img src="video/vid3.jpg" alt="">
                                <!-- Video Button -->
                                <a href="video/3.mp4" class="video-btn"><i class="fa fa-play"></i></a>
                            </div>
                            <!-- Post Content -->
                            <div class="post-content">
                                <a href="video/3.mp4" class="headline video-btn">
                                    <h5>Chaudhary Charan Singh</h5>
                                
                                    <p>Speech Delivery</p>
                                    <!-- Post Meta -->
                                    <div class="post-meta">
                                        <p>Lokdal on Feb 25, 2017 at 2:55 pm</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <!-- Single Blog Post -->
                        <div class="single-blog-post wow fadeInUpBig" data-wow-delay="0.4s">
                            <!-- Post Thumbnail -->
                            <div class="post-thumbnail">
                                <img src="video/vid5.jpg" alt="">
                                <!-- Video Button -->
                                <a href="video/5.mp4" class="video-btn"><i class="fa fa-play"></i></a>
                            </div>
                            <!-- Post Content -->
                            <div class="post-content">
                                <a href="video/5.mp4" class="headline video-btn">
                                    <h5>Lokdal Party</h5>
                                
                                    <p>Chaudhary Charan Singh</p>
                                    <!-- Post Meta -->
                                    <div class="post-meta">
                                        <p>Lokdal on Feb 25, 2017 at 2:55 pm</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <!-- Single Blog Post -->
                        <div class="single-blog-post wow fadeInUpBig" data-wow-delay="0.4s">
                            <!-- Post Thumbnail -->
                            <div class="post-thumbnail">
                                <img src="video/vid6.jpg" alt="">
                                <!-- Video Button -->
                                <a href="video/6.mp4" class="video-btn"><i class="fa fa-play"></i></a>
                            </div>
                            <!-- Post Content -->
                            <div class="post-content">
                                <a href="video/6.mp4" class="headline video-btn">
                                    <h5>Lokdal Party</h5>
                                
                                    <p>Chaudhary Charan Singh</p>
                                    <!-- Post Meta -->
                                    <div class="post-meta">
                                        <p>Lokdal on Feb 25, 2017 at 2:55 pm</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <!-- Single Blog Post -->
                        <div class="single-blog-post wow fadeInUpBig" data-wow-delay="0.4s">
                            <!-- Post Thumbnail -->
                            <div class="post-thumbnail">
                                <img src="video/vid7.jpg" alt="">
                                <!-- Video Button -->
                                <a href="video/7.mp4" class="video-btn"><i class="fa fa-play"></i></a>
                            </div>
                            <!-- Post Content -->
                            <div class="post-content">
                                <a href="video/7.mp4" class="headline video-btn">
                                    <h5>Lokdal Party</h5>
                                
                                    <p>Chaudhary Charan Singh</p>
                                    <!-- Post Meta -->
                                    <div class="post-meta">
                                        <p>Lokdal on Feb 25, 2017 at 2:55 pm</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <!-- Single Blog Post -->
                        <div class="single-blog-post wow fadeInUpBig" data-wow-delay="0.4s">
                            <!-- Post Thumbnail -->
                            <div class="post-thumbnail">
                                <img src="video/vid8.jpg" alt="">
                                <!-- Video Button -->
                                <a href="video/8.mp4" class="video-btn"><i class="fa fa-play"></i></a>
                            </div>
                            <!-- Post Content -->
                            <div class="post-content">
                                <a href="video/8.mp4" class="headline video-btn">
                                    <h5>Lokdal Party</h5>
                                    
                                    <p>Chaudhary Charan Singh</p>
                                    <!-- Post Meta -->
                                    <div class="post-meta">
                                        <p>Lokdal on Feb 25, 2017 at 2:55 pm</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <!-- Single Blog Post -->
                        <div class="single-blog-post wow fadeInUpBig" data-wow-delay="0.4s">
                            <!-- Post Thumbnail -->
                            <div class="post-thumbnail">
                                <img src="video/vid9.jpg" alt="">
                                <!-- Video Button -->
                                <a href="video/9.mp4" class="video-btn"><i class="fa fa-play"></i></a>
                            </div>
                            <!-- Post Content -->
                            <div class="post-content">
                                <a href="video/9.mp4" class="headline video-btn">
                                    <h5>Lokdal Party</h5>
                                
                                    <p>Chaudhary Charan Singh</p>
                                    <!-- Post Meta -->
                                    <div class="post-meta">
                                        <p>Lokdal on Feb 25, 2017 at 2:55 pm</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <!-- Single Blog Post -->
                        <div class="single-blog-post wow fadeInUpBig" data-wow-delay="0.4s">
                            <!-- Post Thumbnail -->
                            <div class="post-thumbnail">
                                <img src="video/vid10.jpg" alt="">
                                <!-- Video Button -->
                                <a href="video/10.mp4" class="video-btn"><i class="fa fa-play"></i></a>
                            </div>
                            <!-- Post Content -->
                            <div class="post-content">
                                <a href="video/10.mp4" class="headline video-btn">
                                    <h5>Lokdal Party</h5>
                                
                                    <p>Chaudhary Charan Singh</p>
                                    <!-- Post Meta -->
                                    <div class="post-meta">
                                        <p>Lokdal on Feb 25, 2017 at 2:55 pm</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <?php include_once("footer.php"); ?>

    
    <!-- jQuery (Necessary for All JavaScript Plugins) -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Plugins js -->
    <script src="js/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'UA-23581568-13');
</script>
</body>
</html>