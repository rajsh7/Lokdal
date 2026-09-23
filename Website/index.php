<?php
  include_once("db.php");
  
  $sql="SELECT * FROM daily_update order by id desc;";
  $result = $con ? mysqli_query($con,$sql) : false;
  
  
  $sql="SELECT * FROM activities;";
  $activities = $con ? mysqli_query($con,$sql) : false;
  
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
  .world-catagory-slider2 .owl-controls {
    display: none!important;
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
    <script src="js/googletranslation.js"></script>
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
                  <!--  <li class="nav-item">
                    <a class="nav-link active tb-link" id="tab1" data-toggle="tab" href="#world-tab-0" role="tab" aria-controls="world-tab-0" aria-selected="true">Lokdal Jansabha</a>
                    </li> -->
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
                             <a href="https://youtu.be/1sJB7x3NSOE?si=zaO4LPSMuI9tBriI" target="_blank" class="headline">
                               <div class="post-thumbnail">
                                 <img src="https://img.youtube.com/vi/1sJB7x3NSOE/hqdefault.jpg" alt="">
                               </div>
                               <div class="post-content">
                                 <h5>अखिलेश यादव का बड़ा दांव! जयंत चौधरी बनाम सुनील सिंह</h5>
                                 <p>By YBN News</p>
                                 <div class="post-meta">
                                   <p>YBN News (YouTube) - 19 Sep 2026</p>
                                 </div>
                               </div>
                             </a>
                           </div>
                           <div class="single-blog-post">
                             <a href="https://youtu.be/jpAGYMw7tx4?si=7eSnCgmibiJV-8yZ" target="_blank" class="headline">
                               <div class="post-thumbnail">
                                 <img src="https://img.youtube.com/vi/jpAGYMw7tx4/hqdefault.jpg" alt="">
                               </div>
                               <div class="post-content">
                                 <h5>अखिलेश-सुनील सिंह मुलाकात! पश्चिमी UP में सीटों का दांव</h5>
                                 <p>By TV100 News</p>
                                 <div class="post-meta">
                                   <p>TV100 News (YouTube) - 19 Sep 2026</p>
                                 </div>
                               </div>
                             </a>
                           </div>
                           <div class="single-blog-post">
                             <a href="https://youtu.be/cvdSkNNIgwU?si=N9G_00dO7r2cLQ2_" target="_blank" class="headline">
                               <div class="post-thumbnail">
                                 <img src="https://img.youtube.com/vi/cvdSkNNIgwU/hqdefault.jpg" alt="">
                               </div>
                               <div class="post-content">
                                 <h5>लोकदल अध्यक्ष सुनील सिंह व अखिलेश यादव की विशेष मुलाकात</h5>
                                 <p>By YouTube News</p>
                                 <div class="post-meta">
                                   <p>YouTube News - 19 Sep 2026</p>
                                 </div>
                               </div>
                             </a>
                           </div>
                           <div class="single-blog-post">
                             <a href="https://x.com/aajtak/status/2100949903572967630" target="_blank" class="headline">
                               <div class="post-thumbnail">
                                 <img src="img/news/latest-news/wp-image-1.jpeg" alt="">
                               </div>
                               <div class="post-content">
                                 <h5>आजतक: 2027 में अखिलेश यादव को मुख्यमंत्री बनाना है — लोकदल अध्यक्ष चौधरी सुनील सिंह</h5>
                                 <p>By AajTak (@aajtak)</p>
                                 <div class="post-meta">
                                   <p>AajTak News (X) - 18 Sep 2026</p>
                                 </div>
                               </div>
                             </a>
                           </div>
                           <div class="single-blog-post">
                             <a data-lightbox="jansabha" href="img/news/latest-news/news-32.jpeg" class="headline">
                               <div class="post-thumbnail">
                                 <img src="img/news/latest-news/news-32.jpeg" alt="">
                               </div>
                               <div class="post-content">
                                 <h5>लोकदल प्रेस वार्ता एवं ताजा समाचार</h5>
                                 <p>By Chaudhary Sunil Singh</p>
                                 <div class="post-meta">
                                   <p>Lokdal Update - 19 Sep 2026</p>
                                 </div>
                               </div>
                             </a>
                           </div>
                           <div class="single-blog-post">
                             <a data-lightbox="jansabha" href="img/news/latest-news/news-33.jpeg" class="headline">
                               <div class="post-thumbnail">
                                 <img src="img/news/latest-news/news-33.jpeg" alt="">
                               </div>
                               <div class="post-content">
                                 <h5>किसान अधिकार एवं प्रदेश स्तरीय संवाद</h5>
                                 <p>By Chaudhary Sunil Singh</p>
                                 <div class="post-meta">
                                   <p>Lokdal Update - 19 Sep 2026</p>
                                 </div>
                               </div>
                             </a>
                           </div>
                           <div class="single-blog-post">
                             <a data-lightbox="jansabha" href="img/news/latest-news/news-34.jpeg" class="headline">
                               <div class="post-thumbnail">
                                 <img src="img/news/latest-news/news-34.jpeg" alt="">
                               </div>
                               <div class="post-content">
                                 <h5>लोकदल संगठन विस्तार एवं विचार गोष्ठी</h5>
                                 <p>By Chaudhary Sunil Singh</p>
                                 <div class="post-meta">
                                   <p>Lokdal Update - 19 Sep 2026</p>
                                 </div>
                               </div>
                             </a>
                           </div>
                           <div class="single-blog-post">
                             <a data-lightbox="jansabha" href="img/news/latest-news/news-35.jpeg" class="headline">
                               <div class="post-thumbnail">
                                 <img src="img/news/latest-news/news-35.jpeg" alt="">
                               </div>
                               <div class="post-content">
                                 <h5>किसान मजदूर अधिकार महापंचायत</h5>
                                 <p>By Chaudhary Sunil Singh</p>
                                 <div class="post-meta">
                                   <p>Lokdal Update - 19 Sep 2026</p>
                                 </div>
                               </div>
                             </a>
                           </div>
                           <div class="single-blog-post">
                             <a href="https://www.facebook.com/share/v/1BZzB4rn1W/" target="_blank" class="headline">
                               <div class="post-thumbnail">
                                 <img src="video/fb-gathbandhan.jpg" alt="">
                               </div>
                               <div class="post-content">
                                 <h5>अखिलेश यादव से मुलाकात पर विशेष कवरेज (2027 चुनाव व लोकदल-सपा विमर्श)</h5>
                                 <p>By Chaudhary Sunil Singh</p>
                                 <div class="post-meta">
                                   <p>Facebook Video - 18 Sep 2026</p>
                                 </div>
                               </div>
                             </a>
                           </div>
                           <div class="single-blog-post">
                             <a href="https://www.amarujala.com/video/lucknow/video-video-akhalsha-yathava-sa-mal-lkathal-athhayakashha-sanal-saha-2027-canava-samata-kaii-mathatha-para-caraca-2026-09-18" target="_blank" class="headline">
                               <div class="post-thumbnail">
                                 <img src="img/news/latest-news/news-31.jpeg" alt="">
                               </div>
                               <div class="post-content">
                                 <h5>अमर उजाला: अखिलेश यादव से मिले लोकदल अध्यक्ष सुनील सिंह</h5>
                                 <p>By Amar Ujala News</p>
                                 <div class="post-meta">
                                   <p>Amar Ujala - 18 Sep 2026</p>
                                 </div>
                               </div>
                             </a>
                           </div>
                           <div class="single-blog-post">
                             <a href="https://www.facebook.com/share/v/1BswAU7aGt/" target="_blank" class="headline">
                               <div class="post-thumbnail">
                                 <img src="video/fb-soochana.jpg" alt="">
                               </div>
                               <div class="post-content">
                                 <h5>लोकदल विशेष वक्तव्य & प्रेस संवाद</h5>
                                 <p>By Chaudhary Sunil Singh</p>
                                 <div class="post-meta">
                                   <p>Facebook Video Update</p>
                                 </div>
                               </div>
                             </a>
                           </div>
                           <div class="single-blog-post">
                             <a href="https://www.facebook.com/share/v/1C1DqRiMa4/" target="_blank" class="headline">
                               <div class="post-thumbnail">
                                 <img src="video/fb-divya.jpg" alt="">
                               </div>
                               <div class="post-content">
                                 <h5>लोकदल मीडिया संवाद & नवीन संबोधन</h5>
                                 <p>By Chaudhary Sunil Singh</p>
                                 <div class="post-meta">
                                   <p>Facebook Video Update</p>
                                 </div>
                               </div>
                             </a>
                           </div>
                          <div class="single-blog-post">
                            <a data-lightbox="jansabha" href="img/news/latest-news/wp-image-1.jpeg" class="headline">
                              <div class="post-thumbnail">
                                <img src="img/news/latest-news/wp-image-1.jpeg" alt="">
                              </div>
                              <div class="post-content">
                                <h5>अखिलेश यादव से मिले लोकदल अध्यक्ष सुनील सिंह, 2027 चुनाव पर मंथन</h5>
                                <p>By Chaudhary Sunil Singh</p>
                                <div class="post-meta">
                                  <p>Lokdal Statement - 18 Sep 2026</p>
                                </div>
                              </div>
                            </a>
                          </div>
                          <div class="single-blog-post">
                            <a data-lightbox="jansabha" href="img/news/latest-news/news-31.jpeg" class="headline">
                              <div class="post-thumbnail">
                                <img src="img/news/latest-news/news-31.jpeg" alt="">
                              </div>
                              <div class="post-content">
                                <h5>आलू किसान तीन तरफा मार में: खाद कालाबाजारी व मंडी संकट पर लोकदल</h5>
                                <p>By Chaudhary Sunil Singh</p>
                                <div class="post-meta">
                                  <p>Lokdal Statement - 17 Sep 2026</p>
                                </div>
                              </div>
                            </a>
                          </div>
                          <div class="single-blog-post">
                            <a data-lightbox="jansabha" href="video/yt-wE9bWrA-IrI.jpg" class="headline">
                              <div class="post-thumbnail">
                                <img src="video/yt-wE9bWrA-IrI.jpg" alt="">
                              </div>
                              <div class="post-content">
                                <h5>चौधरी सुनील सिंह जी का विशेष पॉडकास्ट — किसान विमर्श</h5>
                                <p>By Saargarbhit Podcast</p>
                                <div class="post-meta">
                                  <p>Lokdal Video - 16 Sep 2026</p>
                                </div>
                              </div>
                            </a>
                          </div>
                          <div class="single-blog-post">
                            <a data-lightbox="jansabha" href="img/news/latest-news/news-29.jpeg" class="headline">
                              <div class="post-thumbnail">
                                <img src="img/news/latest-news/news-29.jpeg" alt="">
                              </div>
                              <div class="post-content">
                                <h5>बेबाक सवाल पूछना क्या गुनाह? पत्रकार दिव्य श्रीवास्तव के समर्थन में लोकदल</h5>
                                <p>By Chaudhary Sunil Singh</p>
                                <div class="post-meta">
                                  <p>Lokdal Official Statement - 13 Sep 2026</p>
                                </div>
                              </div>
                            </a>
                          </div>
                          <div class="single-blog-post">
                            <a data-lightbox="jansabha" href="img/news/latest-news/news-1.jpeg" class="headline">
                              <div class="post-thumbnail">
                                <img src="img/news/latest-news/news-1.jpeg" alt="">
                              </div>
                              <div class="post-content">
                                <h5>चीनी-इथेनॉल नीति पर लोकदल का सरकार पर हमला</h5>
                                <p>By Chaudhary Sunil Singh</p>
                                <div class="post-meta">
                                  <p>Lokdal Latest Press Update</p>
                                </div>
                              </div>
                            </a>
                          </div>
                          <div class="single-blog-post">
                            <a data-lightbox="jansabha" href="img/gallery/latest-gallery/gallery-1.jpeg" class="headline">
                              <div class="post-thumbnail">
                                <img src="img/gallery/latest-gallery/gallery-1.jpeg" alt="">
                              </div>
                              <div class="post-content">
                                <h5>किसान अधिकार आंदोलन व जनसभा</h5>
                                <p>By Chaudhary Sunil Singh</p>
                                <div class="post-meta">
                                  <p>Lokdal Assembly Event</p>
                                </div>
                              </div>
                            </a>
                          </div>
                          <?php
                            $sql="SELECT * FROM activities;";
                            if($con && $activities = mysqli_query($con,$sql)){
                            while($rows=mysqli_fetch_assoc($activities))
                                {?>
                          <div class="single-blog-post">
                            <a data-lightbox="jansabha" href="../dashboard/<?= $rows['img1'];?>" class="headline">
                              <div class="post-thumbnail">
                                <img src="../dashboard/<?= $rows['img1'];?>" alt="">
                              </div>
                              <div class="post-content">
                                <h5><?= $rows['t1'];?></h5>
                                <p><?= $rows['s1'];?></p>
                                <div class="post-meta">
                                  <p>Lokdal on <?= $rows['date'];?></p>
                                </div>
                              </div>
                            </a>
                          </div>
                          <?php
                            }}
                            ?>          
                        </div>
                      </div>
                      <div class="col-12 col-md-6">
                         <!-- Single Blog Post (Homepage Exclusive News 48) -->
                         <div class="single-blog-post post-style-2 d-flex align-items-center wow fadeInUpBig" data-wow-delay="0.0001s">
                           <div class="post-thumbnail">
                             <img src="img/news/latest-news/news-48.jpeg" alt="">
                           </div>
                           <div class="post-content ">
                             <a data-lightbox="jansabha" href="img/news/latest-news/news-48.jpeg" class="headline">
                               <div class="headline">
                                 <h5>लोकदल राष्ट्रीय अध्यक्ष चौधरी सुनील सिंह — नवीन प्रेस वक्तव्य</h5>
                               </div>
                               <div class="post-meta">
                                 <p>Lokdal Press Update - 23 Sep 2026</p>
                               </div>
                             </a>
                           </div>
                         </div>
                         <!-- Single Blog Post (Homepage Exclusive News 49) -->
                         <div class="single-blog-post post-style-2 d-flex align-items-center wow fadeInUpBig" data-wow-delay="0.0002s">
                           <div class="post-thumbnail">
                             <img src="img/news/latest-news/news-49.jpeg" alt="">
                           </div>
                           <div class="post-content ">
                             <a data-lightbox="jansabha" href="img/news/latest-news/news-49.jpeg" class="headline">
                               <div class="headline">
                                 <h5>लोकदल प्रेस वार्ता एवं 2027 उत्तर प्रदेश चुनाव विमर्श</h5>
                               </div>
                               <div class="post-meta">
                                 <p>Lokdal Press Update - 23 Sep 2026</p>
                               </div>
                             </a>
                           </div>
                         </div>
                         <!-- Single Blog Post (Homepage Exclusive News 50) -->
                         <div class="single-blog-post post-style-2 d-flex align-items-center wow fadeInUpBig" data-wow-delay="0.0003s">
                           <div class="post-thumbnail">
                             <img src="img/news/latest-news/news-50.jpeg" alt="">
                           </div>
                           <div class="post-content ">
                             <a data-lightbox="jansabha" href="img/news/latest-news/news-50.jpeg" class="headline">
                               <div class="headline">
                                 <h5>चौधरी सुनील सिंह जी का विशेष किसान अधिकार संदेश</h5>
                               </div>
                               <div class="post-meta">
                                 <p>Lokdal Update - 23 Sep 2026</p>
                               </div>
                             </a>
                           </div>
                         </div>
                         <!-- Single Blog Post (Homepage Exclusive News 51) -->
                         <div class="single-blog-post post-style-2 d-flex align-items-center wow fadeInUpBig" data-wow-delay="0.0004s">
                           <div class="post-thumbnail">
                             <img src="img/news/latest-news/news-51.jpeg" alt="">
                           </div>
                           <div class="post-content ">
                             <a data-lightbox="jansabha" href="img/news/latest-news/news-51.jpeg" class="headline">
                               <div class="headline">
                                 <h5>लोकदल प्रदेश कार्यकारिणी विचार-विमर्श एवं संगठन विस्तार</h5>
                               </div>
                               <div class="post-meta">
                                 <p>Lokdal Assembly - 23 Sep 2026</p>
                               </div>
                             </a>
                           </div>
                         </div>
                         <!-- Single Blog Post (Homepage Exclusive News 52) -->
                         <div class="single-blog-post post-style-2 d-flex align-items-center wow fadeInUpBig" data-wow-delay="0.0005s">
                           <div class="post-thumbnail">
                             <img src="img/news/latest-news/news-52.jpeg" alt="">
                           </div>
                           <div class="post-content ">
                             <a data-lightbox="jansabha" href="img/news/latest-news/news-52.jpeg" class="headline">
                               <div class="headline">
                                 <h5>राष्ट्रीय किसान मोर्चा महापंचायत एवं जनसभा</h5>
                               </div>
                               <div class="post-meta">
                                 <p>Lokdal Event - 23 Sep 2026</p>
                               </div>
                             </a>
                           </div>
                         </div>
                         <!-- Single Blog Post (Homepage Exclusive News 53) -->
                         <div class="single-blog-post post-style-2 d-flex align-items-center wow fadeInUpBig" data-wow-delay="0.0006s">
                           <div class="post-thumbnail">
                             <img src="img/news/latest-news/news-53.jpeg" alt="">
                           </div>
                           <div class="post-content ">
                             <a data-lightbox="jansabha" href="img/news/latest-news/news-53.jpeg" class="headline">
                               <div class="headline">
                                 <h5>लोकदल राष्ट्रीय नेतृत्व विशेष प्रेस कवरेज</h5>
                               </div>
                               <div class="post-meta">
                                 <p>Lokdal Press Coverage - 23 Sep 2026</p>
                               </div>
                             </a>
                           </div>
                         </div>
                         <!-- Single Blog Post (Homepage Exclusive News 54) -->
                         <div class="single-blog-post post-style-2 d-flex align-items-center wow fadeInUpBig" data-wow-delay="0.0007s">
                           <div class="post-thumbnail">
                             <img src="img/news/latest-news/news-54.jpeg" alt="">
                           </div>
                           <div class="post-content ">
                             <a data-lightbox="jansabha" href="img/news/latest-news/news-54.jpeg" class="headline">
                               <div class="headline">
                                 <h5>किसान अधिकार सम्मेलन एवं जनसभा संबोधन</h5>
                               </div>
                               <div class="post-meta">
                                 <p>Lokdal Event - 23 Sep 2026</p>
                               </div>
                             </a>
                           </div>
                         </div>
                         <!-- Single Blog Post (Homepage Exclusive News 55) -->
                         <div class="single-blog-post post-style-2 d-flex align-items-center wow fadeInUpBig" data-wow-delay="0.0008s">
                           <div class="post-thumbnail">
                             <img src="img/news/latest-news/news-55.jpeg" alt="">
                           </div>
                           <div class="post-content ">
                             <a data-lightbox="jansabha" href="img/news/latest-news/news-55.jpeg" class="headline">
                               <div class="headline">
                                 <h5>लोकदल मीडिया संवाद व नवीन प्रेस रिपोर्ट</h5>
                               </div>
                               <div class="post-meta">
                                 <p>Lokdal Press Report - 23 Sep 2026</p>
                               </div>
                             </a>
                           </div>
                         </div>
                         <!-- Single Blog Post (Homepage Exclusive News 56) -->
                         <div class="single-blog-post post-style-2 d-flex align-items-center wow fadeInUpBig" data-wow-delay="0.0009s">
                           <div class="post-thumbnail">
                             <img src="img/news/latest-news/news-56.jpeg" alt="">
                           </div>
                           <div class="post-content ">
                             <a data-lightbox="jansabha" href="img/news/latest-news/news-56.jpeg" class="headline">
                               <div class="headline">
                                 <h5>चौधरी सुनील सिंह जी का नवीन प्रेस वक्तव्य</h5>
                               </div>
                               <div class="post-meta">
                                 <p>Lokdal Press Release - 23 Sep 2026</p>
                               </div>
                             </a>
                           </div>
                         </div>
                         <!-- Single Blog Post (Homepage Exclusive Image 1) -->
                         <div class="single-blog-post post-style-2 d-flex align-items-center wow fadeInUpBig" data-wow-delay="0.001s">
                           <div class="post-thumbnail">
                             <img src="img/news/latest-news/news-46.jpeg" alt="">
                           </div>
                           <div class="post-content ">
                             <a data-lightbox="jansabha" href="img/news/latest-news/news-46.jpeg" class="headline">
                               <div class="headline">
                                 <h5>राहुल गांधी एवं लोकदल राष्ट्रीय अध्यक्ष - 2027 चुनाव व किसान विमर्श</h5>
                               </div>
                               <div class="post-meta">
                                 <p>Lokdal Exclusive Update - 23 Sep 2026</p>
                               </div>
                             </a>
                           </div>
                         </div>
                         <!-- Single Blog Post (Homepage Exclusive Image 2) -->
                         <div class="single-blog-post post-style-2 d-flex align-items-center wow fadeInUpBig" data-wow-delay="0.002s">
                           <div class="post-thumbnail">
                             <img src="img/news/latest-news/news-47.jpeg" alt="">
                           </div>
                           <div class="post-content ">
                             <a data-lightbox="jansabha" href="img/news/latest-news/news-47.jpeg" class="headline">
                               <div class="headline">
                                 <h5>चौधरी सुनील सिंह एवं राहुल गांधी मुलाकात - विशेष संवाद</h5>
                               </div>
                               <div class="post-meta">
                                 <p>Lokdal Exclusive Update - 23 Sep 2026</p>
                               </div>
                             </a>
                           </div>
                         </div>
                         <!-- Single Blog Post (Zee News Hindi) -->
                         <div class="single-blog-post post-style-2 d-flex align-items-center wow fadeInUpBig" data-wow-delay="0.003s">
                           <div class="post-thumbnail">
                             <img src="img/news/latest-news/news-46.jpeg" alt="">
                           </div>
                           <div class="post-content ">
                             <a href="https://zeenews.india.com/hindi/india/up-uttarakhand/up-politics/lokdal-leader-sunil-singh-meet-rahul-gandhi-demands-seats-in-up-election/3304111/amp" target="_blank" class="headline">
                               <div class="headline">
                                 <h5>ज़ी न्यूज़: सुनील सिंह ने की राहुल गांधी से मुलाकात, UP चुनाव में मांगी 35 सीटें</h5>
                               </div>
                               <div class="post-meta">
                                 <p>Zee News Hindi Report - 23 Sep 2026</p>
                               </div>
                             </a>
                           </div>
                         </div>
                         <!-- Single Blog Post (Dainik Jagran) -->
                         <div class="single-blog-post post-style-2 d-flex align-items-center wow fadeInUpBig" data-wow-delay="0.004s">
                           <div class="post-thumbnail">
                             <img src="img/news/latest-news/news-47.jpeg" alt="">
                           </div>
                           <div class="post-content ">
                             <a href="https://www.jagran.com/uttar-pradesh/lucknow-city-sunil-singh-meets-rahul-gandhi-lokdal-claims-35-up-seats-40381773.html" target="_blank" class="headline">
                               <div class="headline">
                                 <h5>दैनिक जागरण: सुनील सिंह ने राहुल गांधी से की मुलाकात, लोकदल ने UP में मांगी सीटें</h5>
                               </div>
                               <div class="post-meta">
                                 <p>Dainik Jagran Report - 23 Sep 2026</p>
                               </div>
                             </a>
                           </div>
                         </div>
                         <!-- Single Blog Post (Pratyaksh Darshi Samachar) -->
                         <div class="single-blog-post post-style-2 d-flex align-items-center wow fadeInUpBig" data-wow-delay="0.005s">
                           <div class="post-thumbnail">
                             <img src="img/news/latest-news/news-46.jpeg" alt="">
                           </div>
                           <div class="post-content ">
                             <a href="https://www.pratyakshdarshisamachar.com/state/uttar-pradesh/first-akhilesh-now-met-rahul-gandhi-lok-dal-president-asked/article-2154" target="_blank" class="headline">
                               <div class="headline">
                                 <h5>प्रत्यक्षदर्शी समाचार: पहले अखिलेश, अब राहुल गांधी से मिले लोकदल अध्यक्ष</h5>
                               </div>
                               <div class="post-meta">
                                 <p>Pratyaksh Darshi Samachar - 23 Sep 2026</p>
                               </div>
                             </a>
                           </div>
                         </div>
                         <!-- Single Blog Post (IANS Khabar X) -->
                         <div class="single-blog-post post-style-2 d-flex align-items-center wow fadeInUpBig" data-wow-delay="0.006s">
                           <div class="post-thumbnail">
                             <img src="img/news/latest-news/news-47.jpeg" alt="">
                           </div>
                           <div class="post-content ">
                             <a href="https://x.com/ianskhabar/status/2102302191000416405?s=46&t=_2mEBmLj46j89OPjnvYbbg" target="_blank" class="headline">
                               <div class="headline">
                                 <h5>IANS खबर (X): लोकदल अध्यक्ष चौधरी सुनील सिंह की राहुल गांधी से मुलाकात</h5>
                               </div>
                               <div class="post-meta">
                                 <p>IANS Khabar (X/Twitter) - 23 Sep 2026</p>
                               </div>
                             </a>
                           </div>
                         </div>
                         <!-- Single Blog Post (AajTak X) -->
                         <div class="single-blog-post post-style-2 d-flex align-items-center wow fadeInUpBig" data-wow-delay="0.007s">
                           <div class="post-thumbnail">
                             <img src="img/news/latest-news/news-46.jpeg" alt="">
                           </div>
                           <div class="post-content ">
                             <a href="https://x.com/aajtak/status/2102412612915138588?s=46&t=_2mEBmLj46j89OPjnvYbbg" target="_blank" class="headline">
                               <div class="headline">
                                 <h5>आजतक (X): राहुल गांधी से मिले लोकदल अध्यक्ष सुनील सिंह — 2027 चुनावी दांव</h5>
                               </div>
                               <div class="post-meta">
                                 <p>AajTak News (X/Twitter) - 23 Sep 2026</p>
                               </div>
                             </a>
                           </div>
                         </div>
                         <!-- Single Blog Post (Facebook Share) -->
                         <div class="single-blog-post post-style-2 d-flex align-items-center wow fadeInUpBig" data-wow-delay="0.008s">
                           <div class="post-thumbnail">
                             <img src="img/news/latest-news/news-47.jpeg" alt="">
                           </div>
                           <div class="post-content ">
                             <a href="https://www.facebook.com/share/1CbCxAp6fx/?mibextid=wwXIfr" target="_blank" class="headline">
                               <div class="headline">
                                 <h5>फेसबुक: लोकदल अध्यक्ष सुनील सिंह व राहुल गांधी मुलाकात विशेष वीडियो कवरेज</h5>
                               </div>
                               <div class="post-meta">
                                 <p>Facebook Video Update - 23 Sep 2026</p>
                               </div>
                             </a>
                           </div>
                         </div>
                         <!-- Single Blog Post (YouTube Video HbrkBb0k52k) -->
                         <div class="single-blog-post post-style-2 d-flex align-items-center wow fadeInUpBig" data-wow-delay="0.009s">
                           <div class="post-thumbnail">
                             <img src="https://img.youtube.com/vi/HbrkBb0k52k/hqdefault.jpg" alt="">
                           </div>
                           <div class="post-content ">
                             <a href="https://youtu.be/HbrkBb0k52k?si=JO7X4H9lkIJ0Porm" target="_blank" class="headline">
                               <div class="headline">
                                 <h5>लोकदल विशेष वीडियो: राहुल गांधी से मुलाकात व 2027 चुनावी रणनीति</h5>
                               </div>
                               <div class="post-meta">
                                 <p>YouTube Video - 23 Sep 2026</p>
                               </div>
                             </a>
                           </div>
                         </div>
                         <!-- Single Blog Post (YouTube Video zGhhFQ4u6p8) -->
                         <div class="single-blog-post post-style-2 d-flex align-items-center wow fadeInUpBig" data-wow-delay="0.01s">
                           <div class="post-thumbnail">
                             <img src="https://img.youtube.com/vi/zGhhFQ4u6p8/hqdefault.jpg" alt="">
                           </div>
                           <div class="post-content ">
                             <a href="https://youtu.be/zGhhFQ4u6p8?si=cgtgVgLQHJAf3YfB" target="_blank" class="headline">
                               <div class="headline">
                                 <h5>लोकदल संवाद: राहुल गांधी एवं सुनील सिंह मुलाकात पर विस्तृत चर्चा</h5>
                               </div>
                               <div class="post-meta">
                                 <p>YouTube Video - 23 Sep 2026</p>
                               </div>
                             </a>
                           </div>
                         </div>
                        <!-- Single Blog Post (Important Video) -->
                        <div class="single-blog-post post-style-2 d-flex align-items-center wow fadeInUpBig" data-wow-delay="0.01s">
                          <div class="post-thumbnail">
                            <img src="https://img.youtube.com/vi/UU1yv-FN344/hqdefault.jpg" alt="">
                          </div>
                          <div class="post-content ">
                            <a href="https://youtu.be/UU1yv-FN344?si=RAZzzR4t9sMS1g80" target="_blank" class="headline">
                              <div class="headline">
                                <h5>चौधरी सुनील सिंह जी का विशेष वीडियो संदेश — SIR मतदाता सूची एवं जनहित विमर्श</h5>
                              </div>
                              <div class="post-meta">
                                <p>Lokdal YouTube Video - 22 Sep 2026</p>
                              </div>
                            </a>
                          </div>
                        </div>
                        <div class="single-blog-post post-style-2 d-flex align-items-center wow fadeInUpBig" data-wow-delay="0.015s">
                          <div class="post-thumbnail">
                            <img src="https://prakashprabhaw.com/public/storage/posts/DhbUP9RJ77CEQNEs4tFnLDepQCYnRP0H2UwTPnO5.jpeg" alt="">
                          </div>
                          <div class="post-content ">
                            <a href="https://prakashprabhaw.com/khabar-hatke/sir-short-comings/detail" target="_blank" class="headline">
                              <div class="headline">
                                <h5>PPN: SIR में दिग्गजों के नाम सामने आए तो गरीब और आम मतदाता का क्या होगा — सुनील सिंह</h5>
                              </div>
                              <div class="post-meta">
                                <p>Prakash Prabhaw News (PPN) - 22 Sep 2026</p>
                              </div>
                            </a>
                          </div>
                        </div>
                        <div class="single-blog-post post-style-2 d-flex align-items-center wow fadeInUpBig" data-wow-delay="0.018s">
                          <div class="post-thumbnail">
                            <img src="https://www.cherishtimes.in/wp-content/uploads/2026/09/IMG-20260908-WA0984.jpg" alt="">
                          </div>
                          <div class="post-content ">
                            <a href="https://www.cherishtimes.in/uttar-pradesh/90222" target="_blank" class="headline">
                              <div class="headline">
                                <h5>Cherish Times: SIR में दिग्गजों के नाम सामने आए तो गरीब और आम मतदाता का क्या होगा : सुनील सिंह</h5>
                              </div>
                              <div class="post-meta">
                                <p>Cherish Times News - 22 Sep 2026</p>
                              </div>
                            </a>
                          </div>
                        </div>
                        <div class="single-blog-post post-style-2 d-flex align-items-center wow fadeInUpBig" data-wow-delay="0.015s">
                          <div class="post-thumbnail">
                            <img src="img/news/latest-news/news-45.jpeg" alt="">
                          </div>
                          <div class="post-content ">
                            <a data-lightbox="jansabha" href="img/news/latest-news/news-45.jpeg" class="headline">
                              <div class="headline">
                                <h5>लोकदल राष्ट्रीय कार्यकारिणी एवं नवीन प्रेस वार्ता</h5>
                              </div>
                              <div class="post-meta">
                                <p>Lokdal Latest Press Update - 22 Sep 2026</p>
                              </div>
                            </a>
                          </div>
                        </div>
                        <div class="single-blog-post post-style-2 d-flex align-items-center wow fadeInUpBig" data-wow-delay="0.02s">
                          <div class="post-thumbnail">
                            <img src="img/news/latest-news/news-42.jpeg" alt="">
                          </div>
                          <div class="post-content ">
                            <a data-lightbox="jansabha" href="img/news/latest-news/news-42.jpeg" class="headline">
                              <div class="headline">
                                <h5>RLD अपने मंचों पर लोकदल का नाम लेकर चौधरी चरण सिंह का अपमान बंद करे: लोकदल</h5>
                              </div>
                              <div class="post-meta">
                                <p>Lucknow Press Update - 22 Sep 2026</p>
                              </div>
                            </a>
                          </div>
                        </div>
                        <div class="single-blog-post post-style-2 d-flex align-items-center wow fadeInUpBig" data-wow-delay="0.03s">
                          <div class="post-thumbnail">
                            <img src="img/news/latest-news/news-43.jpeg" alt="">
                          </div>
                          <div class="post-content ">
                            <a data-lightbox="jansabha" href="img/news/latest-news/news-43.jpeg" class="headline">
                              <div class="headline">
                                <h5>एसआईआर में दिग्गजों के नाम सामने आए, अब आम मतदाता का क्या होगा : सुनील सिंह</h5>
                              </div>
                              <div class="post-meta">
                                <p>SIR Voter Revision Update - 22 Sep 2026</p>
                              </div>
                            </a>
                          </div>
                        </div>
                        <div class="single-blog-post post-style-2 d-flex align-items-center wow fadeInUpBig" data-wow-delay="0.04s">
                          <div class="post-thumbnail">
                            <img src="img/news/latest-news/news-44.jpeg" alt="">
                          </div>
                          <div class="post-content ">
                            <a data-lightbox="jansabha" href="img/news/latest-news/news-44.jpeg" class="headline">
                              <div class="headline">
                                <h5>एसआईआर में बड़े नाम दस्तावेजी उलझनों में कटें तो आम आदमी की चिंता लाजमी : सुनील सिंह</h5>
                              </div>
                              <div class="post-meta">
                                <p>Public Asia Bureau Report - 22 Sep 2026</p>
                              </div>
                            </a>
                          </div>
                        </div>
                        <div class="single-blog-post post-style-2 d-flex align-items-center wow fadeInUpBig" data-wow-delay="0.05s">
                          <div class="post-thumbnail">
                            <img src="https://img.youtube.com/vi/1sJB7x3NSOE/hqdefault.jpg" alt="">
                          </div>
                          <div class="post-content ">
                            <a href="https://youtu.be/1sJB7x3NSOE?si=zaO4LPSMuI9tBriI" target="_blank" class="headline">
                              <div class="headline">
                                <h5>अखिलेश यादव का बड़ा दांव! जयंत चौधरी बनाम सुनील सिंह (YBN News)</h5>
                              </div>
                              <div class="post-meta">
                                <p>YBN News (YouTube) - 19 Sep 2026</p>
                              </div>
                            </a>
                          </div>
                        </div>
                        <div class="single-blog-post post-style-2 d-flex align-items-center wow fadeInUpBig" data-wow-delay="0.06s">
                          <div class="post-thumbnail">
                            <img src="https://img.youtube.com/vi/jpAGYMw7tx4/hqdefault.jpg" alt="">
                          </div>
                          <div class="post-content ">
                            <a href="https://youtu.be/jpAGYMw7tx4?si=7eSnCgmibiJV-8yZ" target="_blank" class="headline">
                              <div class="headline">
                                <h5>अखिलेश-सुनील सिंह मुलाकात! पश्चिमी UP में सीटों का दांव (TV100)</h5>
                              </div>
                              <div class="post-meta">
                                <p>TV100 News (YouTube) - 19 Sep 2026</p>
                              </div>
                            </a>
                          </div>
                        </div>
                        <div class="single-blog-post post-style-2 d-flex align-items-center wow fadeInUpBig" data-wow-delay="0.07s">
                          <div class="post-thumbnail">
                            <img src="https://img.youtube.com/vi/cvdSkNNIgwU/hqdefault.jpg" alt="">
                          </div>
                          <div class="post-content ">
                            <a href="https://youtu.be/cvdSkNNIgwU?si=N9G_00dO7r2cLQ2_" target="_blank" class="headline">
                              <div class="headline">
                                <h5>लोकदल अध्यक्ष सुनील सिंह व अखिलेश यादव विशेष मुलाकात</h5>
                              </div>
                              <div class="post-meta">
                                <p>YouTube News - 19 Sep 2026</p>
                              </div>
                            </a>
                          </div>
                        </div>
                        <div class="single-blog-post post-style-2 d-flex align-items-center wow fadeInUpBig" data-wow-delay="0.08s">
                          <div class="post-thumbnail">
                            <img src="img/news/latest-news/wp-image-1.jpeg" alt="">
                          </div>
                          <div class="post-content ">
                            <a href="https://x.com/aajtak/status/2100949903572967630" target="_blank" class="headline">
                              <div class="headline">
                                <h5>आजतक: लखनऊ में लोकदल अध्यक्ष सुनील सिंह ने अखिलेश यादव से की मुलाकात (2027 चुनाव चर्चा)</h5>
                              </div>
                              <div class="post-meta">
                                <p>AajTak News (X) - 18 Sep 2026</p>
                              </div>
                            </a>
                          </div>
                        </div>
                        <div class="single-blog-post post-style-2 d-flex align-items-center wow fadeInUpBig" data-wow-delay="0.1s">
                          <div class="post-thumbnail">
                            <img src="img/news/latest-news/news-32.jpeg" alt="">
                          </div>
                          <div class="post-content ">
                            <a data-lightbox="jansabha" href="img/news/latest-news/news-32.jpeg" class="headline">
                              <div class="headline">
                                <h5>लोकदल प्रेस वार्ता एवं ताजा समाचार कटिंग</h5>
                              </div>
                              <div class="post-meta">
                                <p>Lokdal Newspaper Update - 19 Sep 2026</p>
                              </div>
                            </a>
                          </div>
                        </div>
                        <div class="single-blog-post post-style-2 d-flex align-items-center wow fadeInUpBig" data-wow-delay="0.12s">
                          <div class="post-thumbnail">
                            <img src="img/news/latest-news/news-33.jpeg" alt="">
                          </div>
                          <div class="post-content ">
                            <a data-lightbox="jansabha" href="img/news/latest-news/news-33.jpeg" class="headline">
                              <div class="headline">
                                <h5>किसान अधिकार एवं प्रदेश स्तरीय संवाद कटिंग</h5>
                              </div>
                              <div class="post-meta">
                                <p>Lokdal Newspaper Update - 19 Sep 2026</p>
                              </div>
                            </a>
                          </div>
                        </div>
                        <div class="single-blog-post post-style-2 d-flex align-items-center wow fadeInUpBig" data-wow-delay="0.14s">
                          <div class="post-thumbnail">
                            <img src="img/news/latest-news/news-34.jpeg" alt="">
                          </div>
                          <div class="post-content ">
                            <a data-lightbox="jansabha" href="img/news/latest-news/news-34.jpeg" class="headline">
                              <div class="headline">
                                <h5>लोकदल संगठन विस्तार एवं विचार गोष्ठी कटिंग</h5>
                              </div>
                              <div class="post-meta">
                                <p>Lokdal Newspaper Update - 19 Sep 2026</p>
                              </div>
                            </a>
                          </div>
                        </div>
                        <div class="single-blog-post post-style-2 d-flex align-items-center wow fadeInUpBig" data-wow-delay="0.16s">
                          <div class="post-thumbnail">
                            <img src="img/news/latest-news/news-35.jpeg" alt="">
                          </div>
                          <div class="post-content ">
                            <a data-lightbox="jansabha" href="img/news/latest-news/news-35.jpeg" class="headline">
                              <div class="headline">
                                <h5>किसान मजदूर अधिकार महापंचायत कटिंग</h5>
                              </div>
                              <div class="post-meta">
                                <p>Lokdal Newspaper Update - 19 Sep 2026</p>
                              </div>
                            </a>
                          </div>
                        </div>
                        <div class="single-blog-post post-style-2 d-flex align-items-center wow fadeInUpBig" data-wow-delay="0.18s">
                          <div class="post-thumbnail">
                            <img src="video/fb-gathbandhan.jpg" alt="">
                          </div>
                          <div class="post-content ">
                            <a href="https://www.facebook.com/share/v/1BZzB4rn1W/" target="_blank" class="headline">
                              <div class="headline">
                                <h5>अखिलेश यादव से मुलाकात पर विशेष कवरेज (2027 चुनाव चर्चा)</h5>
                              </div>
                              <div class="post-meta">
                                <p>Facebook Video - 18 Sep 2026</p>
                              </div>
                            </a>
                          </div>
                        </div>
                        <div class="single-blog-post post-style-2 d-flex align-items-center wow fadeInUpBig" data-wow-delay="0.15s">
                          <div class="post-thumbnail">
                            <img src="img/news/latest-news/news-31.jpeg" alt="">
                          </div>
                          <div class="post-content ">
                            <a href="https://www.amarujala.com/video/lucknow/video-video-akhalsha-yathava-sa-mal-lkathal-athhayakashha-sanal-saha-2027-canava-samata-kaii-mathatha-para-caraca-2026-09-18" target="_blank" class="headline">
                              <div class="headline">
                                <h5>अमर उजाला: अखिलेश यादव से मिले लोकदल अध्यक्ष सुनील सिंह</h5>
                              </div>
                              <div class="post-meta">
                                <p>Amar Ujala Video - 18 Sep 2026</p>
                              </div>
                            </a>
                          </div>
                        </div>
                        <div class="single-blog-post post-style-2 d-flex align-items-center wow fadeInUpBig" data-wow-delay="0.2s">
                          <div class="post-thumbnail">
                            <img src="img/news/latest-news/wp-image-1.jpeg" alt="">
                          </div>
                          <div class="post-content ">
                            <a data-lightbox="jansabha" href="img/news/latest-news/wp-image-1.jpeg" class="headline">
                              <div class="headline">
                                <h5>अखिलेश यादव से मिले लोकदल अध्यक्ष सुनील सिंह, बोले- 2027 में अखिलेश को बनाएंगे मुख्यमंत्री</h5>
                              </div>
                              <div class="post-meta">
                                <p>मुलाकात व चुनावी रणनीति - 18 Sep 2026</p>
                              </div>
                            </a>
                          </div>
                        </div>
                        <div class="single-blog-post post-style-2 d-flex align-items-center wow fadeInUpBig" data-wow-delay="0.2s">
                          <div class="post-thumbnail">
                            <img src="img/news/latest-news/news-31.jpeg" alt="">
                          </div>
                          <div class="post-content ">
                            <a data-lightbox="jansabha" href="img/news/latest-news/news-31.jpeg" class="headline">
                              <div class="headline">
                                <h5>आलू किसान तीन तरफा मार में — काला बाज़ार खाद व मंडी संकट पर लोकदल</h5>
                              </div>
                              <div class="post-meta">
                                <p>किसान अधिकार मुद्दा - 17 Sep 2026</p>
                              </div>
                            </a>
                          </div>
                        </div>
                        <div class="single-blog-post post-style-2 d-flex align-items-center wow fadeInUpBig" data-wow-delay="0.3s">
                          <div class="post-thumbnail">
                            <img src="video/yt-wE9bWrA-IrI.jpg" alt="">
                          </div>
                          <div class="post-content ">
                            <a data-lightbox="jansabha" href="video/yt-wE9bWrA-IrI.jpg" class="headline">
                              <div class="headline">
                                <h5>चौधरी सुनील सिंह जी का विशेष पॉडकास्ट (Saargarbhit)</h5>
                              </div>
                              <div class="post-meta">
                                <p>लोकदल पॉडकास्ट - 16 Sep 2026</p>
                              </div>
                            </a>
                          </div>
                        </div>
                        <div class="single-blog-post post-style-2 d-flex align-items-center wow fadeInUpBig" data-wow-delay="0.4s">
                          <div class="post-thumbnail">
                            <img src="img/news/latest-news/news-29.jpeg" alt="">
                          </div>
                          <div class="post-content ">
                            <a data-lightbox="jansabha" href="img/news/latest-news/news-29.jpeg" class="headline">
                              <div class="headline">
                                <h5>बेबाक सवाल पूछना अपराध नहीं, पत्रकार का अधिकार: लोकदल</h5>
                              </div>
                              <div class="post-meta">
                                <p>प्रेस की आजादी - 13 Sep 2026</p>
                              </div>
                            </a>
                          </div>
                        </div>
                        <?php if($con && $activities = mysqli_query($con,$sql)){
                          while($rows=mysqli_fetch_assoc($activities))
                          {?>
                        <div class="single-blog-post post-style-2 d-flex align-items-center wow fadeInUpBig" data-wow-delay="0.2s">
                          <div class="post-thumbnail">
                            <img src="../dashboard/<?= $rows['img1'];?>" alt="">
                          </div>
                          <div class="post-content ">
                            <a data-lightbox="jansabha" href="../dashboard/<?= $rows['img1'];?>" class="headline">
                              <div class="headline">
                                <h5 class=""><?= $rows['t1'];?></h5>
                              </div>
                              <div class="post-meta">
                                <p class=""><?= $rows['s1'];?></p>
                              </div>
                            </a>
                          </div>
                        </div>
                        <?php }} ?>
                      </div>
                    </div>
                  </div>
                  <?php
                    $sql="SELECT * FROM activities;";
                    if($con && $activities = mysqli_query($con,$sql)){
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
                    </div>
                    <div class="row">
                      <div class="col-12">
                        <div class="world-catagory-slider2 owl-carousel wow fadeInUpBig" data-wow-delay="0.4s">
                          <!-- ========= Single Catagory Slide ========= -->
                          <div class="single-cata-slide">
                            <div class="row">
                              <?php 
                                $ourServicesArr = [
                                     ['img' => 'https://img.youtube.com/vi/1sJB7x3NSOE/hqdefault.jpg',
                                      'title' => 'अखिलेश यादव का बड़ा दांव! जयंत चौधरी बनाम सुनील सिंह — YBN News',
                                      'desc' => 'YBN News - 19 Sep 2026',
                                      'url' => 'https://youtu.be/1sJB7x3NSOE?si=zaO4LPSMuI9tBriI'],
                                     ['img' => 'https://img.youtube.com/vi/jpAGYMw7tx4/hqdefault.jpg',
                                      'title' => 'अखिलेश-सुनील सिंह की मुलाकात! पश्चिमी UP में सीटों का दांव — TV100',
                                      'desc' => 'TV100 News - 19 Sep 2026',
                                      'url' => 'https://youtu.be/jpAGYMw7tx4?si=7eSnCgmibiJV-8yZ'],
                                     ['img' => 'https://img.youtube.com/vi/cvdSkNNIgwU/hqdefault.jpg',
                                      'title' => 'लोकदल अध्यक्ष सुनील सिंह व अखिलेश यादव की विशेष मुलाकात (किसान व 2027 चुनाव)',
                                      'desc' => 'YouTube News - 19 Sep 2026',
                                      'url' => 'https://youtu.be/cvdSkNNIgwU?si=N9G_00dO7r2cLQ2_'],
                                     ['img' => 'video/fb-gathbandhan.jpg',
                                      'title' => 'लोकदल विशेष फेसबुक वीडियो संवाद — चौधरी सुनील सिंह',
                                      'desc' => 'Facebook Video - Lokdal',
                                      'url' => 'https://www.facebook.com/share/v/1g6JDkys3f/'],
                                     ['img' => 'video/wp-video-thumb.jpeg',
                                      'title' => 'लोकदल विशेष वक्तव्य & चुनावी चर्चा — चौधरी सुनील सिंह फेसबुक रील',
                                      'desc' => 'Facebook Reel - Lokdal',
                                      'url' => 'https://www.facebook.com/share/r/1Djy88pHFG/'],
                                     ['img' => 'video/wp-video-thumb.jpeg',
                                      'title' => 'मिशन 2027: लोकदल और सपा गठबंधन रील — चौधरी सुनील सिंह',
                                      'desc' => 'Facebook Reel - Lokdal',
                                      'url' => 'https://www.facebook.com/share/r/1BSXXSL8wh/'],
                                     ['img' => 'img/news/latest-news/wp-image-1.jpeg',
                                      'title' => 'आजतक: लखनऊ में लोकदल के राष्ट्रीय अध्यक्ष चौधरी सुनील सिंह ने सपा प्रमुख अखिलेश यादव से की मुलाकात, 2027 में अखिलेश को बनाएंगे मुख्यमंत्री',
                                      'desc' => 'AajTak News (X) - 18 Sep 2026',
                                      'url' => 'https://x.com/aajtak/status/2100949903572967630'],
                                     ['img' => 'img/news/latest-news/wp-image-1.jpeg',
                                      'title' => 'अखिलेश यादव से मिले लोकदल अध्यक्ष सुनील सिंह, बोले- 2027 में अखिलेश को बनाएंगे मुख्यमंत्री',
                                      'desc' => 'Suryoday Bharat - 18 Sep 2026',
                                      'url' => 'https://suryodaybharat.com/lokdal-president-sunil-singh-met-akhilesh-yadav-said-he-would-make-akhilesh-the-chief-minister-in-2027/'],
                                     ['img' => 'img/news/latest-news/wp-image-1.jpeg',
                                      'title' => 'अखिलेश यादव से सुनील सिंह: 2027 के लिए सपा-लोकदल समीकरण पर विशेष चर्चा',
                                      'desc' => 'Karmakshetra TV - 18 Sep 2026',
                                      'url' => 'https://karmakshetratv.com/%e0%a4%85%e0%a4%96%e0%a4%bf%e0%a4%b2%e0%a5%87%e0%a4%b6-%e0%a4%af%e0%a4%be%e0%a4%a6%e0%a4%b5-%e0%a4%b8%e0%a5%87-%e0%a4%b8%e0%a5%81%e0%a4%a8%e0%a5%80%e0%a4%b2-%e0%a4%b8%e0%a4%bf%e0%a4%82%e0%a4%b9/'],
                                     ['img' => 'video/wp-video-thumb.jpeg',
                                      'title' => 'लोकदल राष्ट्रीय अध्यक्ष चौधरी सुनील सिंह — एक्सक्लूसिव वीडियो रील',
                                      'desc' => 'Instagram Reel - Lokdal',
                                      'url' => 'https://instagram.com/reel/Dda7EYEFM1b/?utm_source=ig_web_copy_link&stkn=MzRlODBiNWFlZA=='],
                                     ['img' => 'video/wp-video-thumb.jpeg',
                                      'title' => 'मिशन 2027: लोकदल और सपा — चौधरी सुनील सिंह का विशेष संदेश',
                                      'desc' => 'Instagram Reel - Lokdal',
                                      'url' => 'https://www.instagram.com/reel/DdbRqLFjIgQ/?stkn=MTg4Z2pxYzZ6dXIydg=='],
                                     ['img' => 'img/news/latest-news/news-31.jpeg',
                                      'title' => 'आलू किसान तीन तरफा मार में — काला बाज़ार खाद, मंडी का सस्ता भाव और कोल्ड स्टोरेज संकट पर लोकदल',
                                      'desc' => 'Lokdal Facebook - 17 Sep 2026',
                                      'url' => 'https://m.facebook.com/story.php?story_fbid=pfbid0d56tZkTwzxkDDcBHY3WAZTmr8MsXzLAEdpkXdE7f3pfW7theU89sLC2j2jqSKHQcl&id=100050662051558&mibextid=wwXIfr'],
                                     ['img' => 'video/yt-wE9bWrA-IrI.jpg',
                                      'title' => 'चौधरी सुनील सिंह जी का विशेष पॉडकास्ट — लोकदल की नीतियां एवं किसान विमर्श (Saargarbhit)',
                                      'desc' => 'Saargarbhit YouTube Podcast - 16 Sep 2026',
                                      'url' => 'https://youtu.be/wE9bWrA-IrI?si=G2Phiyf6mh7xUhwC'],
                                     ['img' => 'img/news/latest-news/news-29.jpeg',
                                      'title' => 'बेबाक सवाल पूछना क्या गुनाह? पत्रकार दिव्य श्रीवास्तव के समर्थन में मजबूती से खड़ा है लोकदल',
                                      'desc' => 'Lokdal on 13 Sep 2026',
                                      'url' => 'https://x.com/lokdalindia/status/2098828845801718195?s=46&t=_2mEBmLj46j89OPjnvYbbg'],
                                     ['img' => 'video/fb-divya.jpg',
                                      'title' => 'पत्रकार दिव्य श्रीवास्तव द्वारा सीएम से जनहित के सवाल पूछने पर धमकियां — लोकदल ने उठाया सवाल',
                                      'desc' => 'Lokdal Facebook - 13 Sep 2026',
                                      'url' => 'https://www.facebook.com/share/v/1BQDKTYZNM/'],
                                     ['img' => 'video/yt-xn6Rz6LzjuY.jpg',
                                      'title' => 'जयंत के खिलाफ सुनील सिंह का बड़ा ऐलान, अखिलेश का खुला समर्थन ! — SPN9 News',
                                      'desc' => 'SPN9 News (YouTube) - 10 Sep 2026',
                                      'url' => 'https://youtu.be/xn6Rz6LzjuY?si=zstMa59slG9jxE_K'],
                                     ['img' => 'video/fb-gathbandhan.jpg',
                                      'title' => 'लोकदल से सपा का गठबंधन फाइनल! पश्चिमी यूपी में जयंत चौधरी को बड़ा झटका? — टीम अखिलेश',
                                      'desc' => 'Team Akhilesh - 10 Sep 2026',
                                      'url' => 'https://www.facebook.com/share/v/19SzkEL4Sm/'],
                                     ['img' => 'video/fb-soochana.jpg',
                                      'title' => 'सूचना विभाग में ही महिला सुरक्षित नहीं तो प्रदेश की महिलाओं की सुरक्षा का दावा कितना सच? — लोकदल',
                                      'desc' => 'Lokdal Facebook - 14 Sep 2026',
                                      'url' => 'https://www.facebook.com/share/v/1He834mCUj/'],
                                     ['img' => 'video/fb-jayant.jpg',
                                      'title' => 'जयंत चौधरी केवल चौ. चरण सिंह जी की विरासत को बेच रहे हैं — लोकदल अध्यक्ष सुनील सिंह',
                                      'desc' => 'Rashtriya Voice Reel - 11 Sep 2026',
                                      'url' => 'https://www.facebook.com/share/r/1TBmP28okz/'],
                                     ['img' => 'img/news/latest-news/news-29.jpeg',
                                      'title' => 'योगी से सवाल की ऐसी सज़ा दी! महिला पत्रकार का सुपर एक्सक्लूसिव इंटरव्यू — अभिषेक उपाध्याय',
                                      'desc' => 'Interview Reel - 13 Sep 2026',
                                      'url' => 'https://www.facebook.com/share/v/19X3VC8bgo/'],
                                     ['img' => 'img/news/latest-news/news-1.jpeg',
                                      'title' => 'BRICS की शान, किसानों की बर्बादी — भारत को मिला क्या? लोकदल का केंद्र सरकार से तीखा सवाल',
                                      'desc' => 'Lokdal Official - 14 Sep 2026',
                                      'url' => 'https://www.facebook.com/share/p/1Lka4h3MdN/?mibextid=wwXIfr'],
                                     ['img' => 'img/news/latest-news/news-2.jpeg',
                                      'title' => 'नॉर्वे में मोदी, लखनऊ में योगी — एक ही शैली: सवाल से भागना और प्रेस को दबाना',
                                      'desc' => 'Lokdal Analysis - 12 Sep 2026',
                                      'url' => 'https://www.facebook.com/share/v/1C6Fj6Sxww/?mibextid=wwXIfr'],
                                     ['img' => 'img/news/latest-news/news-1.jpeg',
                                      'title' => 'अखिलेश यादव से मिले लोकदल अध्यक्ष सुनील सिंह, चुनावी रणनीति पर मंथन - नवभारत टाइम्स',
                                      'desc' => 'Navbharat Times News',
                                      'url' => 'https://navbharattimes.indiatimes.com/state/uttar-pradesh/lucknow/lokdal-president-sunil-singh-meets-akhilesh-yadav/amp_articleshow/133970907.cms'],
                                     ['img' => 'img/news/latest-news/news-2.jpeg',
                                      'title' => 'लोकदल अध्यक्ष सुनील सिंह एवं अखिलेश यादव की मुलाकात - BSTV News',
                                      'desc' => 'BSTV Live (X)',
                                      'url' => 'https://x.com/bstvlive/status/2097642131708055807'],
                                     ['img' => 'img/news/latest-news/news-3.jpeg',
                                      'title' => 'लोकदल राष्ट्रीय अध्यक्ष सुनील सिंह का विशेष संदेश एवं प्रेस कवरेज',
                                      'desc' => 'IANS India (X)',
                                      'url' => 'https://x.com/ians_india/status/2097648641682837966'],
                                     ['img' => 'img/news/latest-news/news-4.jpeg',
                                      'title' => 'लोकदल राष्ट्रीय अध्यक्ष चौधरी सुनील सिंह - विशेष वीडियो संवाद',
                                      'desc' => 'Facebook Video',
                                      'url' => 'https://www.facebook.com/share/v/1BtQzxgdP7/'],
                                     ['img' => 'img/news/latest-news/news-1.jpeg',
                                      'title' => 'लखनऊ में चीनी-इथेनॉल नीति पर लोकदल का सरकार पर हमला - अमर उजाला',
                                      'desc' => 'Chini-Ethanol Policy Probe Demand',
                                      'url' => 'https://www.amarujala.com/video/lucknow/video-video-lkhanauu-ma-cana-ithanal-nata-para-lkathal-ka-sarakara-para-hamal-2026-09-05'],
                                     ['img' => 'img/news/latest-news/news-2.jpeg',
                                      'title' => 'चीनी-इथेनॉल नीति पर लोकदल अध्यक्ष सुनील सिंह की किसानों के लिए सीबीआई जांच मांग',
                                      'desc' => 'Dainik Bhaskar News',
                                      'url' => 'https://www.bhaskar.com/amp/local/uttar-pradesh/lucknow/news/lucknow-lokdal-sunil-singh-sugar-ethanol-policy-farmers-demand-138942059.html'],
                                     ['img' => 'img/news/latest-news/news-3.jpeg',
                                      'title' => 'चीनी-इथेनॉल के नाम पर किसानों के साथ बड़ा अन्याय - हिंदुस्तान समाचार',
                                      'desc' => 'Hindustan Samachar Statement',
                                      'url' => 'https://www.hindusthansamachar.in/Encyc/2026/9/5/LOKDAL-PRESIDENT-STATEMENT-.php'],
                                     ['img' => 'img/news/latest-news/news-4.jpeg',
                                      'title' => 'चीनी-इथेनॉल नीति पर लोकदल का हमला, सीबीआई जांच की मांग - समर सलील',
                                      'desc' => 'Samar Saleel Press Release',
                                      'url' => 'https://samarsaleel.com/lok-dal-sunil-singh-sugar-ethanol-policy-farmers-cbi-inquiry/526586'],
                                     ['img' => 'img/news/latest-news/news-5.jpeg',
                                      'title' => 'यूपी राजनीति: चीनी-इथेनॉल नीति पर सीबीआई जांच की मांग - प्रयागराज न्यूज',
                                      'desc' => 'Prayagraj News Special Report',
                                      'url' => 'https://www.prayagrajnews.co.in/up-politics-sunil-singh-sugar-ethanol-policy-cbi-probe-farmers'],
                                    ['img' => 'img/linkedImage/6.jpg',
                                     'title' => '2024 लोकसभा चुनाव के लिए लोकदल ने कसी कमर, यूपी की 80 सीटों पर लड़ने की तैयारी कर रहा है लोकदल',
                                     'desc' => 'Kisan Sangthan baithak',
                                     'url' => 'https://thelucknowtribune.com/2024-%e0%a4%b2%e0%a5%8b%e0%a4%95%e0%a4%b8%e0%a4%ad%e0%a4%be-%e0%a4%9a%e0%a5%81%e0%a4%a8%e0%a4%be%e0%a4%b5-%e0%a4%95%e0%a5%87-%e0%a4%b2%e0%a4%bf%e0%a4%8f-%e0%a4%b2%e0%a5%8b%e0%a4%95%e0%a4%a6%e0%a4%b2/'],
                                    ['img' => 'img/linkedImage/5.jpg',
                                     'title' => '2024 लोकसभा चुनाव के लिए लोकदल ने कसी कमर, यूपी की 80 सीटों पर लड़ने की तैयारी',
                                     'desc' => 'Kisan Sangthan baithak',
                                     'url' => 'https://samarsaleel.com/lok-dal-gears-up-for-2024-lok-sabha-elections-preparing-to-contest-on-80-seats-of-up/367181'],
                                    
                                ];
                                ?>
                              <?php foreach ($ourServicesArr as $key => $value): ?>
                              <div class="col-12 col-md-6">
                                <!-- Single Blog Post -->
                                <div class="single-blog-post post-style-2 d-flex align-items-center mb-1">
                                  <!-- Post Thumbnail -->
                                  <div class="post-thumbnail">
                                    <img src="<?php echo $value['img']; ?>" alt="">
                                  </div>
                                  <!-- Post Content -->
                                  <div class="post-content">
                                    <a data-lightbox="charan" href="<?php echo $value['img']; ?>" class="headline">
                                    </a>
                                    <a href="<?php echo $value['url']; ?>" target="_blank" >
                                      <h5 style="font-size: 12px;"><?php echo $value['title']; ?></h5>
                                      <!-- Post Meta -->
                                      <div class="post-meta">
                                        <p><?php echo $value['desc']; ?></p>
                                      </div>
                                    </a>
                                  </div>
                                </div>
                              </div>
                              <?php endforeach; ?>
                            </div>
                          </div>
                          <div class="col-12">
                            <div class="world-catagory-slider2 owl-carousel wow fadeInUpBig" data-wow-delay="0.4s">
                              <!-- ========= Single Catagory Slide ========= -->
                              <div class="single-cata-slide">
                                <div class="row">
                                  <?php 
                                    $ourServicesArr = [
                                        ['img' => 'img/linkedImage/2.jpg',
                                        'title' => 'किसान,मजदूर संगठनों की बैठक में लोकसभा चुनाव को लेकर हुआ मंथन',
                                        'desc' => 'Kisan Sangthan baithak',
                                        'url' => 'https://azamgarhexpresstv.in/2023/5776/politics/'],
                                       ['img' => 'img/linkedImage/3.jpg',
                                        'title' => 'लोक दल का संदेश, इस बार किसान मजदूर जवान एवं महिला शक्ति बचाएगा देश,2024 के लोकसभा चुनाव में भारत के किसान भी लड़ेंगे चुनाव-सुनील सिंह',
                                        'desc' => 'Kisan Sangthan baithak',
                                        'url' => 'https://youtu.be/5LdIhC6bcno?si=2UauTDJAlZpW6Sb-'],
                                       
                                    ];
                                    ?>
                                  <?php foreach ($ourServicesArr as $key => $value): ?>
                                  <div class="col-12 col-md-6">
                                    <!-- Single Blog Post -->
                                    <div class="single-blog-post post-style-2 d-flex align-items-center mb-1">
                                      <!-- Post Thumbnail -->
                                      <div class="post-thumbnail">
                                        <img src="<?php echo $value['img']; ?>" alt="">
                                      </div>
                                      <!-- Post Content -->
                                      <div class="post-content">
                                        <a data-lightbox="charan" href="<?php echo $value['img']; ?>" class="headline">
                                        </a>
                                        <a href="<?php echo $value['url']; ?>" target="_blank" >
                                          <h5 style="font-size: 12px;"><?php echo $value['title']; ?></h5>
                                          <!-- Post Meta -->
                                          <div class="post-meta">
                                            <p><?php echo $value['desc']; ?></p>
                                          </div>
                                        </a>
                                      </div>
                                    </div>
                                  </div>
                                  <?php endforeach; ?>
                                </div>
                              </div>
                              <!-- ========= Single Catagory Slide ========= -->
                              <div class="single-cata-slide">
                                <div class="row">
                                  <?php 
                                    $ourServicesArr = [
                                        ['img' => 'img/linkedImage/4.jpg',
                                        'title' => 'भारत के किसानों और जवानों को किसी सहारे की ज़रूरत नहीं- सुनील सिंह',
                                        'desc' => 'Kisan Sangthan baithak',
                                        'url' => 'https://prakashprabhaw.com/khabar-hatke/indian-former/detail'],
                                       ['img' => 'img/linkedImage/1.jpg',
                                        'title' => 'भारत के किसानों और जवानों को किसी सहारे की ज़रूरत नहीं- सुनील सिंह',
                                        'desc' => 'Kisan Sangthan baithak',
                                        'url' => 'https://prakashprabhaw.com/khabar-hatke/indian-former/detail'],
                                    ];
                                    ?>
                                  <?php foreach ($ourServicesArr as $key => $value): ?>
                                  <div class="col-12 col-md-6">
                                    <!-- Single Blog Post -->
                                    <div class="single-blog-post post-style-2 d-flex align-items-center mb-1">
                                      <!-- Post Thumbnail -->
                                      <div class="post-thumbnail">
                                        <img src="<?php echo $value['img']; ?>" alt="">
                                      </div>
                                      <!-- Post Content -->
                                      <div class="post-content">
                                        <a data-lightbox="charan" href="<?php echo $value['img']; ?>" class="headline">
                                        </a>
                                        <a href="<?php echo $value['url']; ?>" target="_blank" >
                                          <h5 style="font-size: 12px;"><?php echo $value['title']; ?></h5>
                                          <!-- Post Meta -->
                                          <div class="post-meta">
                                            <p><?php echo $value['desc']; ?></p>
                                          </div>
                                        </a>
                                      </div>
                                    </div>
                                  </div>
                                  <?php endforeach; ?>
                                </div>
                              </div>
                               <!-- ========= Single Catagory Slide ========= -->
                              <div class="single-cata-slide">
                                <div class="row">
                                  <?php 
                                    $ourServicesArr = [
                                        ['img' => 'img/linkedImage/4.jpg',
                                        'title' => 'देश की संसद में बैठेगा किसान का बेटा: चौधरी सुनील सिंह',
                                        'desc' => 'Kisan Sangthan baithak',
                                        'url' => 'https://samarsaleel.com/farmers-son-chaudhary-sunil-singh-will-sit-in-the-countrys-parliament/368520'],
                                       ['img' => 'img/linkedImage/1.jpg',
                                        'title' => 'किसान की हुंकार मिशन 2024, देश की संसद में अब होगी किसान की भागीदारी',
                                        'desc' => 'Kisan Sangthan baithak',
                                        'url' => 'https://publicwatch.in/Farmers-Hunkar-Mission-2024-Farmers-participation-will-now-take-place-in-the-c'],
                                    ];
                                    ?>
                                  <?php foreach ($ourServicesArr as $key => $value): ?>
                                  <div class="col-12 col-md-6">
                                    <!-- Single Blog Post -->
                                    <div class="single-blog-post post-style-2 d-flex align-items-center mb-1">
                                      <!-- Post Thumbnail -->
                                      <div class="post-thumbnail">
                                        <img src="<?php echo $value['img']; ?>" alt="">
                                      </div>
                                      <!-- Post Content -->
                                      <div class="post-content">
                                        <a data-lightbox="charan" href="<?php echo $value['img']; ?>" class="headline">
                                        </a>
                                        <a href="<?php echo $value['url']; ?>" target="_blank" >
                                          <h5 style="font-size: 12px;"><?php echo $value['title']; ?></h5>
                                          <!-- Post Meta -->
                                          <div class="post-meta">
                                            <p><?php echo $value['desc']; ?></p>
                                          </div>
                                        </a>
                                      </div>
                                    </div>
                                  </div>
                                  <?php endforeach; ?>
                                </div>
                              </div>
                               <!-- ========= Single Catagory Slide ========= -->
                              <div class="single-cata-slide">
                                <div class="row">
                                  <?php 
                                    $ourServicesArr = [
                                        ['img' => 'img/linkedImage/4.jpg',
                                        'title' => 'राष्ट्रीय किसान मोर्चा देश का बनेगा तीसरा विकल्प,किसान की हुंकार, मिशन 2024 में देश की संसद में बैठेगा किसान का बेटा',
                                        'desc' => 'Kisan Sangthan baithak',
                                        'url' => 'https://youtu.be/warRxwwev2c?si=j5c33Us-oVBhp3IL'],
                                       ['img' => 'img/linkedImage/7.jpg',
                                        'title' => 'किसान की हुंकार मिशन 2024 में संसद तक पहुंचना है : चौ. सुनील सिंह',
                                        'desc' => 'Kisan Sangthan baithak',
                                        'url' => 'https://www.cherishtimes.in/uttar-pradesh/41865F'],
                                    ];
                                    ?>
                                  <?php foreach ($ourServicesArr as $key => $value): ?>
                                  <div class="col-12 col-md-6">
                                    <!-- Single Blog Post -->
                                    <div class="single-blog-post post-style-2 d-flex align-items-center mb-1">
                                      <!-- Post Thumbnail -->
                                      <div class="post-thumbnail">
                                        <img src="<?php echo $value['img']; ?>" alt="">
                                      </div>
                                      <!-- Post Content -->
                                      <div class="post-content">
                                        <a data-lightbox="charan" href="<?php echo $value['img']; ?>" class="headline">
                                        </a>
                                        <a href="<?php echo $value['url']; ?>" target="_blank" >
                                          <h5 style="font-size: 12px;"><?php echo $value['title']; ?></h5>
                                          <!-- Post Meta -->
                                          <div class="post-meta">
                                            <p><?php echo $value['desc']; ?></p>
                                          </div>
                                        </a>
                                      </div>
                                    </div>
                                  </div>
                                  <?php endforeach; ?>
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
                          <div class="post-thumbnail">
                            <img src="img/gallery/latest-gallery/gallery-31.jpeg" alt="">
                          </div>
                          <div class="post-content">
                            <a data-lightbox="sunil" href="img/gallery/latest-gallery/gallery-31.jpeg" class="headline">
                              <h5>राहुल गांधी एवं लोकदल राष्ट्रीय अध्यक्ष चौधरी सुनील सिंह — विशेष मुलाकात एवं विमर्श</h5>
                              <div class="post-meta">
                                <p>Rahul Gandhi & Lokdal Update - 22 Sep 2026</p>
                              </div>
                            </a>
                          </div>
                        </div>
                      </div>
                      <div class="col-12 col-md-6">
                        <!-- Single Blog Post -->
                        <div class="single-blog-post post-style-2 d-flex align-items-center mb-1">
                          <div class="post-thumbnail">
                            <img src="img/gallery/latest-gallery/gallery-1.jpeg" alt="">
                          </div>
                          <div class="post-content">
                            <a data-lightbox="sunil" href="img/gallery/latest-gallery/gallery-1.jpeg" class="headline">
                              <h5>किसान अधिकार सम्मेलन एवं जनसभा</h5>
                              <div class="post-meta">
                                <p>Lokdal Latest Event</p>
                              </div>
                            </a>
                          </div>
                        </div>
                      </div>
                      <div class="col-12 col-md-6">
                        <div class="single-blog-post post-style-2 d-flex align-items-center mb-1">
                          <div class="post-thumbnail">
                            <img src="img/gallery/latest-gallery/gallery-2.jpeg" alt="">
                          </div>
                          <div class="post-content">
                            <a data-lightbox="sunil" href="img/gallery/latest-gallery/gallery-2.jpeg" class="headline">
                              <h5>राष्ट्रीय किसान मोर्चा महापंचायत</h5>
                              <div class="post-meta">
                                <p>Lokdal Assembly Event</p>
                              </div>
                            </a>
                          </div>
                        </div>
                      </div>
                      <div class="col-12 col-md-6">
                        <div class="single-blog-post post-style-2 d-flex align-items-center mb-1">
                          <div class="post-thumbnail">
                            <img src="img/gallery/latest-gallery/gallery-3.jpeg" alt="">
                          </div>
                          <div class="post-content">
                            <a data-lightbox="sunil" href="img/gallery/latest-gallery/gallery-3.jpeg" class="headline">
                              <h5>लोकदल कार्यकर्ता सम्मलेन व विचार गोष्ठी</h5>
                              <div class="post-meta">
                                <p>Lokdal Official Meeting</p>
                              </div>
                            </a>
                          </div>
                        </div>
                      </div>
                      <div class="col-12 col-md-6">
                        <div class="single-blog-post post-style-2 d-flex align-items-center mb-1">
                          <div class="post-thumbnail">
                            <img src="img/gallery/latest-gallery/gallery-4.jpeg" alt="">
                          </div>
                          <div class="post-content">
                            <a data-lightbox="sunil" href="img/gallery/latest-gallery/gallery-4.jpeg" class="headline">
                              <h5>चौधरी सुनील सिंह जी का संबोधन</h5>
                              <div class="post-meta">
                                <p>Lokdal National Press Speech</p>
                              </div>
                            </a>
                          </div>
                        </div>
                      </div>
                      <div class="col-12 col-md-6">
                        <div class="single-blog-post post-style-2 d-flex align-items-center mb-1">
                          <div class="post-thumbnail">
                            <img src="img/gallery/latest-gallery/gallery-11.jpeg" alt="">
                          </div>
                          <div class="post-content">
                            <a data-lightbox="sunil" href="img/gallery/latest-gallery/gallery-11.jpeg" class="headline">
                              <h5>लोकदल प्रदेश बैठक एवं कार्यक्रम</h5>
                              <div class="post-meta">
                                <p>Lokdal Event</p>
                              </div>
                            </a>
                          </div>
                        </div>
                      </div>
                      <div class="col-12 col-md-6">
                        <div class="single-blog-post post-style-2 d-flex align-items-center mb-1">
                          <div class="post-thumbnail">
                            <img src="img/gallery/latest-gallery/gallery-12.jpeg" alt="">
                          </div>
                          <div class="post-content">
                            <a data-lightbox="sunil" href="img/gallery/latest-gallery/gallery-12.jpeg" class="headline">
                              <h5>लोकदल राष्ट्रीय अध्यक्ष मुलाकात एवं संवाद</h5>
                              <div class="post-meta">
                                <p>Lokdal Update</p>
                              </div>
                            </a>
                          </div>
                        </div>
                      </div>
                      <div class="col-12 col-md-6">
                        <div class="single-blog-post post-style-2 d-flex align-items-center mb-1">
                          <div class="post-thumbnail">
                            <img src="img/gallery/latest-gallery/gallery-13.jpeg" alt="">
                          </div>
                          <div class="post-content">
                            <a data-lightbox="sunil" href="img/gallery/latest-gallery/gallery-13.jpeg" class="headline">
                              <h5>लोकदल प्रदेश कार्यकारिणी विचार-विमर्श</h5>
                              <div class="post-meta">
                                <p>Lokdal Assembly</p>
                              </div>
                            </a>
                          </div>
                        </div>
                      </div>
                      <div class="col-12 col-md-6">
                        <div class="single-blog-post post-style-2 d-flex align-items-center mb-1">
                          <div class="post-thumbnail">
                            <img src="img/gallery/latest-gallery/gallery-14.jpeg" alt="">
                          </div>
                          <div class="post-content">
                            <a data-lightbox="sunil" href="img/gallery/latest-gallery/gallery-14.jpeg" class="headline">
                              <h5>चौधरी सुनील सिंह जनसंपर्क अभियान</h5>
                              <div class="post-meta">
                                <p>Lokdal Campaign</p>
                              </div>
                            </a>
                          </div>
                        </div>
                      </div>
                      <div class="col-12 col-md-6">
                        <div class="single-blog-post post-style-2 d-flex align-items-center mb-1">
                          <div class="post-thumbnail">
                            <img src="img/gallery/latest-gallery/gallery-15.jpeg" alt="">
                          </div>
                          <div class="post-content">
                            <a data-lightbox="sunil" href="img/gallery/latest-gallery/gallery-15.jpeg" class="headline">
                              <h5>लोकदल किसान अधिकार जनसभा</h5>
                              <div class="post-meta">
                                <p>Lokdal Event</p>
                              </div>
                            </a>
                          </div>
                        </div>
                      </div>
                      <div class="col-12 col-md-6">
                        <div class="single-blog-post post-style-2 d-flex align-items-center mb-1">
                          <div class="post-thumbnail">
                            <img src="img/news/latest-news/news-32.jpeg" alt="">
                          </div>
                          <div class="post-content">
                            <a data-lightbox="sunil" href="img/news/latest-news/news-32.jpeg" class="headline">
                              <h5>लोकदल प्रेस वार्ता एवं ताजा समाचार कटिंग</h5>
                              <div class="post-meta">
                                <p>Lokdal Newspaper Update - 19 Sep 2026</p>
                              </div>
                            </a>
                          </div>
                        </div>
                      </div>
                      <div class="col-12 col-md-6">
                        <div class="single-blog-post post-style-2 d-flex align-items-center mb-1">
                          <div class="post-thumbnail">
                            <img src="img/news/latest-news/news-33.jpeg" alt="">
                          </div>
                          <div class="post-content">
                            <a data-lightbox="sunil" href="img/news/latest-news/news-33.jpeg" class="headline">
                              <h5>किसान अधिकार एवं प्रदेश स्तरीय संवाद कटिंग</h5>
                              <div class="post-meta">
                                <p>Lokdal Newspaper Update - 19 Sep 2026</p>
                              </div>
                            </a>
                          </div>
                        </div>
                      </div>
                      <div class="col-12 col-md-6">
                        <div class="single-blog-post post-style-2 d-flex align-items-center mb-1">
                          <div class="post-thumbnail">
                            <img src="img/news/latest-news/news-34.jpeg" alt="">
                          </div>
                          <div class="post-content">
                            <a data-lightbox="sunil" href="img/news/latest-news/news-34.jpeg" class="headline">
                              <h5>लोकदल संगठन विस्तार एवं विचार गोष्ठी कटिंग</h5>
                              <div class="post-meta">
                                <p>Lokdal Newspaper Update - 19 Sep 2026</p>
                              </div>
                            </a>
                          </div>
                        </div>
                      </div>
                      <div class="col-12 col-md-6">
                        <div class="single-blog-post post-style-2 d-flex align-items-center mb-1">
                          <div class="post-thumbnail">
                            <img src="img/news/latest-news/news-35.jpeg" alt="">
                          </div>
                          <div class="post-content">
                            <a data-lightbox="sunil" href="img/news/latest-news/news-35.jpeg" class="headline">
                              <h5>किसान मजदूर अधिकार महापंचायत कटिंग</h5>
                              <div class="post-meta">
                                <p>Lokdal Newspaper Update - 19 Sep 2026</p>
                              </div>
                            </a>
                          </div>
                        </div>
                      </div>
                      <div class="col-12 col-md-6">
                        <div class="single-blog-post post-style-2 d-flex align-items-center mb-1">
                          <div class="post-thumbnail">
                            <img src="img/news/latest-news/news-24.jpeg" alt="">
                          </div>
                          <div class="post-content">
                            <a data-lightbox="sunil" href="img/news/latest-news/news-24.jpeg" class="headline">
                              <h5>लोकदल जनसभा एवं किसान संवाद सम्मलेन</h5>
                              <div class="post-meta">
                                <p>Lokdal Latest Event</p>
                              </div>
                            </a>
                          </div>
                        </div>
                      </div>
                      <div class="col-12 col-md-6">
                        <div class="single-blog-post post-style-2 d-flex align-items-center mb-1">
                          <div class="post-thumbnail">
                            <img src="img/news/latest-news/news-25.jpeg" alt="">
                          </div>
                          <div class="post-content">
                            <a data-lightbox="sunil" href="img/news/latest-news/news-25.jpeg" class="headline">
                              <h5>चौधरी सुनील सिंह जी का किसान अधिकार अभियान</h5>
                              <div class="post-meta">
                                <p>Lokdal Campaign Update</p>
                              </div>
                            </a>
                          </div>
                        </div>
                      </div>
                      <div class="col-12 col-md-6">
                        <div class="single-blog-post post-style-2 d-flex align-items-center mb-1">
                          <div class="post-thumbnail">
                            <img src="img/news/latest-news/news-26.jpeg" alt="">
                          </div>
                          <div class="post-content">
                            <a data-lightbox="sunil" href="img/news/latest-news/news-26.jpeg" class="headline">
                              <h5>लोकदल प्रदेश कार्यकारिणी विचार-विमर्श व बैठक</h5>
                              <div class="post-meta">
                                <p>Lokdal Press Coverage</p>
                              </div>
                            </a>
                          </div>
                        </div>
                      </div>
                      <div class="col-12 col-md-6">
                        <div class="single-blog-post post-style-2 d-flex align-items-center mb-1">
                          <div class="post-thumbnail">
                            <img src="img/news/latest-news/news-27.jpeg" alt="">
                          </div>
                          <div class="post-content">
                            <a data-lightbox="sunil" href="img/news/latest-news/news-27.jpeg" class="headline">
                              <h5>राष्ट्रीय किसान मोर्चा महापंचायत एवं जनसभा</h5>
                              <div class="post-meta">
                                <p>Lokdal National Event</p>
                              </div>
                            </a>
                          </div>
                        </div>
                      </div>
                      <div class="col-12 col-md-6">
                        <div class="single-blog-post post-style-2 d-flex align-items-center mb-1">
                          <div class="post-thumbnail">
                            <img src="img/news/latest-news/news-28.jpeg" alt="">
                          </div>
                          <div class="post-content">
                            <a data-lightbox="sunil" href="img/news/latest-news/news-28.jpeg" class="headline">
                              <h5>लोकदल सदस्यता एवं संगठन विस्तार कार्यक्रम</h5>
                              <div class="post-meta">
                                <p>Lokdal Assembly Update</p>
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
                $latestDailyUpdates = [
                  ['img' => 'img/news/latest-news/news-45.jpeg', 'title' => 'लोकदल राष्ट्रीय कार्यकारिणी एवं नवीन प्रेस वार्ता — 22 Sep 2026', 'desc' => 'Lokdal Latest News - 22 Sep 2026'],
                  ['img' => 'https://img.youtube.com/vi/UU1yv-FN344/hqdefault.jpg', 'title' => 'चौधरी सुनील सिंह जी का विशेष वीडियो संदेश — SIR मतदाता सूची एवं जनहित विमर्श', 'desc' => 'Lokdal YouTube Video - 22 Sep 2026', 'url' => 'https://youtu.be/UU1yv-FN344?si=RAZzzR4t9sMS1g80'],
                  ['img' => 'https://prakashprabhaw.com/public/storage/posts/DhbUP9RJ77CEQNEs4tFnLDepQCYnRP0H2UwTPnO5.jpeg', 'title' => 'PPN: SIR में दिग्गजों के नाम सामने आए तो गरीब और आम मतदाता का क्या होगा — सुनील सिंह', 'desc' => 'Prakash Prabhaw News (PPN) - 22 Sep 2026', 'url' => 'https://prakashprabhaw.com/khabar-hatke/sir-short-comings/detail'],
                  ['img' => 'https://www.cherishtimes.in/wp-content/uploads/2026/09/IMG-20260908-WA0984.jpg', 'title' => 'Cherish Times: SIR में दिग्गजों के नाम सामने आए तो गरीब और आम मतदाता का क्या होगा : सुनील सिंह', 'desc' => 'Cherish Times News - 22 Sep 2026', 'url' => 'https://www.cherishtimes.in/uttar-pradesh/90222'],
                  ['img' => 'img/news/latest-news/news-42.jpeg', 'title' => 'RLD अपने मंचों पर लोकदल का नाम लेकर चौधरी चरण सिंह का अपमान बंद करे: लोकदल', 'desc' => 'Lucknow Press Update - 22 Sep 2026'],
                  ['img' => 'img/news/latest-news/news-43.jpeg', 'title' => 'एसआईआर में दिग्गजों के नाम सामने आए, अब आम मतदाता का क्या होगा : सुनील सिंह', 'desc' => 'SIR Voter Revision Update - 22 Sep 2026'],
                  ['img' => 'img/news/latest-news/news-44.jpeg', 'title' => 'एसआईआर में बड़े नाम दस्तावेजी उलझनों में कटें तो आम आदमी की चिंता लाजमी : सुनील सिंह', 'desc' => 'Public Asia Bureau Report - 22 Sep 2026'],
                  ['img' => 'https://img.youtube.com/vi/1sJB7x3NSOE/hqdefault.jpg', 'title' => 'अखिलेश यादव का बड़ा दांव! जयंत चौधरी बनाम सुनील सिंह', 'desc' => 'YBN News (YouTube) - 19 Sep 2026', 'url' => 'https://youtu.be/1sJB7x3NSOE?si=zaO4LPSMuI9tBriI'],
                  ['img' => 'https://img.youtube.com/vi/jpAGYMw7tx4/hqdefault.jpg', 'title' => 'अखिलेश-सुनील सिंह की मुलाकात! पश्चिमी UP में 35 सीटों का दांव', 'desc' => 'TV100 News (YouTube) - 19 Sep 2026', 'url' => 'https://youtu.be/jpAGYMw7tx4?si=7eSnCgmibiJV-8yZ'],
                  ['img' => 'https://img.youtube.com/vi/cvdSkNNIgwU/hqdefault.jpg', 'title' => 'लोकदल अध्यक्ष सुनील सिंह व अखिलेश यादव की विशेष मुलाकात', 'desc' => 'YouTube News - 19 Sep 2026', 'url' => 'https://youtu.be/cvdSkNNIgwU?si=N9G_00dO7r2cLQ2_'],
                  ['img' => 'video/fb-gathbandhan.jpg', 'title' => 'लोकदल विशेष फेसबुक वीडियो संवाद — चौधरी सुनील सिंह', 'desc' => 'Facebook Video Update', 'url' => 'https://www.facebook.com/share/v/1g6JDkys3f/'],
                  ['img' => 'video/wp-video-thumb.jpeg', 'title' => 'लोकदल विशेष वक्तव्य & चुनावी चर्चा — फेसबुक रील', 'desc' => 'Facebook Reel Update', 'url' => 'https://www.facebook.com/share/r/1Djy88pHFG/'],
                  ['img' => 'video/wp-video-thumb.jpeg', 'title' => 'मिशन 2027: लोकदल और सपा गठबंधन रील — चौधरी सुनील सिंह', 'desc' => 'Facebook Reel Update', 'url' => 'https://www.facebook.com/share/r/1BSXXSL8wh/'],
                  ['img' => 'img/news/latest-news/wp-image-1.jpeg', 'title' => 'आजतक: 2027 में अखिलेश यादव को मुख्यमंत्री बनाना है — लोकदल अध्यक्ष चौधरी सुनील सिंह', 'desc' => 'AajTak News (X) - 18 Sep 2026', 'url' => 'https://x.com/aajtak/status/2100949903572967630'],
                  ['img' => 'img/news/latest-news/news-31.jpeg', 'title' => 'आलू किसान तीन तरफा मार में — काला बाज़ार खाद व मंडी संकट पर लोकदल', 'desc' => 'Lokdal Kisan Update - 17 Sep 2026'],
                  ['img' => 'video/yt-wE9bWrA-IrI.jpg', 'title' => 'चौधरी सुनील सिंह जी का विशेष पॉडकास्ट — लोकदल संगठन व किसान विमर्श', 'desc' => 'Saargarbhit Podcast - 16 Sep 2026'],
                  ['img' => 'img/news/latest-news/news-29.jpeg', 'title' => 'बेबाक सवाल पूछना क्या गुनाह? पत्रकार दिव्य श्रीवास्तव के समर्थन में लोकदल', 'desc' => 'Lokdal Press Release - 13 Sep 2026'],
                  ['img' => 'video/fb-divya.jpg', 'title' => 'पत्रकार को धमकियों पर लोकदल का तीखा हमला, निष्पक्ष जांच की मांग', 'desc' => 'Lokdal Statement - 13 Sep 2026'],
                  ['img' => 'video/yt-xn6Rz6LzjuY.jpg', 'title' => 'जयंत के खिलाफ सुनील सिंह का बड़ा ऐलान, अखिलेश का खुला समर्थन !', 'desc' => 'SPN9 News Coverage - 10 Sep 2026'],
                  ['img' => 'video/fb-gathbandhan.jpg', 'title' => 'लोकदल से सपा का गठबंधन फाइनल! पश्चिमी यूपी में नए सियासी समीकरण', 'desc' => 'UP Politics News - 10 Sep 2026'],
                  ['img' => 'video/fb-soochana.jpg', 'title' => 'सूचना विभाग में महिला सुरक्षा पर लोकदल का सरकार से तीखा सवाल', 'desc' => 'Lokdal Official Update - 14 Sep 2026'],
                  ['img' => 'video/fb-jayant.jpg', 'title' => 'जयंत चौधरी केवल चौ. चरण सिंह जी की विरासत को बेच रहे हैं: सुनील सिंह', 'desc' => 'Rashtriya Voice - 11 Sep 2026'],
                  ['img' => 'img/news/latest-news/news-1.jpeg', 'title' => 'BRICS की शान, किसानों की बर्बादी — भारत को मिला क्या?', 'desc' => 'Lokdal Farmers Update - 14 Sep 2026'],
                  ['img' => 'img/news/latest-news/news-24.jpeg', 'title' => 'लोकदल जनसभा एवं किसान संवाद सम्मलेन', 'desc' => 'Lokdal Latest Update'],
                  ['img' => 'img/news/latest-news/news-25.jpeg', 'title' => 'चौधरी सुनील सिंह जी का किसान अधिकार अभियान', 'desc' => 'Lokdal Campaign Update'],
                  ['img' => 'img/news/latest-news/news-26.jpeg', 'title' => 'लोकदल प्रदेश कार्यकारिणी विचार-विमर्श व बैठक', 'desc' => 'Lokdal Press Coverage'],
                  ['img' => 'img/news/latest-news/news-27.jpeg', 'title' => 'राष्ट्रीय किसान मोर्चा महापंचायत एवं जनसभा', 'desc' => 'Lokdal National Event'],
                  ['img' => 'img/news/latest-news/news-28.jpeg', 'title' => 'लोकदल सदस्यता एवं संगठन विस्तार कार्यक्रम', 'desc' => 'Lokdal Assembly Update'],
                  ['img' => 'img/news/latest-news/news-1.jpeg', 'title' => 'लखनऊ में चीनी-इथेनॉल नीति पर लोकदल का सरकार पर हमला - अमर उजाला', 'desc' => 'Chini-Ethanol Policy Probe Demand by Lokdal'],
                  ['img' => 'img/news/latest-news/news-2.jpeg', 'title' => 'चीनी-इथेनॉल नीति पर लोकदल अध्यक्ष सुनील सिंह की सीबीआई जांच मांग', 'desc' => 'Dainik Bhaskar News Coverage'],
                  ['img' => 'img/news/latest-news/news-3.jpeg', 'title' => 'चीनी-इथेनॉल के नाम पर किसानों के साथ बड़ा अन्याय - हिंदुस्तान समाचार', 'desc' => 'Hindustan Samachar Statement'],
                  ['img' => 'img/news/latest-news/news-4.jpeg', 'title' => 'चीनी-इथेनॉल नीति पर लोकदल का हमला, सीबीआई जांच की मांग - समर सलील', 'desc' => 'Samar Saleel Press Report'],
                  ['img' => 'img/news/latest-news/news-5.jpeg', 'title' => 'यूपी राजनीति: चीनी-इथेनॉल नीति पर सीबीआई जांच की मांग - प्रयागराज न्यूज', 'desc' => 'Prayagraj News Report'],
                  ['img' => 'img/news/latest-news/news-6.jpeg', 'title' => 'लोकदल प्रेस कॉन्फ्रेंस एवं किसान अधिकार आंदोलन', 'desc' => 'Lokdal Press Coverage'],
                  ['img' => 'img/news/latest-news/news-7.jpeg', 'title' => 'किसानों की न्याय यात्रा - लोकदल संदेश', 'desc' => 'Lokdal News Update'],
                  ['img' => 'img/news/latest-news/news-8.jpeg', 'title' => 'लोकदल कार्यकारिणी बैठक एवं निर्णय', 'desc' => 'Lokdal News Update'],
                  ['img' => 'img/news/latest-news/news-9.jpeg', 'title' => 'किसानों के अधिकारों की रक्षा हेतु लोकदल का संकल्प', 'desc' => 'Lokdal Press Coverage'],
                  ['img' => 'img/news/latest-news/news-10.jpeg', 'title' => 'लोकदल राष्ट्रीय अध्यक्ष चौधरी सुनील सिंह का प्रेस संबोधन', 'desc' => 'Lokdal Press Coverage'],
                  ['img' => 'img/news/latest-news/news-11.jpeg', 'title' => 'किसान, मजदूर संगठनों की बैठक में बड़ा निर्णय', 'desc' => 'Lokdal Meeting Update'],
                  ['img' => 'img/news/latest-news/news-12.jpeg', 'title' => 'लोकदल राष्ट्रीय कार्यकारिणी बैठक', 'desc' => 'Lokdal Meeting Update'],
                  ['img' => 'img/news/latest-news/news-13.jpeg', 'title' => 'किसान मोर्चा एवं लोकदल का संयुक्त वक्तव्य', 'desc' => 'Lokdal Statement'],
                  ['img' => 'img/news/latest-news/news-14.jpeg', 'title' => 'कृषि एवं किसान कल्याण नीतियों पर लोकदल का सुझाव', 'desc' => 'Lokdal Policy Statement'],
                  ['img' => 'img/news/latest-news/news-15.jpeg', 'title' => 'लोकदल का संदेश: किसान बचाएगा देश', 'desc' => 'Lokdal National Message'],
                  ['img' => 'img/news/latest-news/news-16.jpeg', 'title' => 'उत्तर प्रदेश लोकदल कार्यकारिणी सम्मलेन', 'desc' => 'Lokdal State Meeting'],
                  ['img' => 'img/news/latest-news/news-17.jpeg', 'title' => 'चौधरी सुनील सिंह जी का विशेष साक्षात्कार', 'desc' => 'Lokdal Media Interview'],
                  ['img' => 'img/news/latest-news/news-18.jpeg', 'title' => 'किसान आंदोलन व समर्थन प्रदर्शन', 'desc' => 'Lokdal Campaign Update'],
                  ['img' => 'img/news/latest-news/news-19.jpeg', 'title' => 'लोकदल की जनसुनवाई एवं किसान संवाद', 'desc' => 'Lokdal Dialogue'],
                  ['img' => 'img/news/latest-news/news-20.jpeg', 'title' => 'चीनी-इथेनॉल मामले में व्यापक जांच की मांग', 'desc' => 'Lokdal Press Release'],
                  ['img' => 'img/news/latest-news/news-21.jpeg', 'title' => 'राष्ट्रीय किसान मोर्चा की आगामी योजना', 'desc' => 'Lokdal Strategic Plan'],
                  ['img' => 'img/news/latest-news/news-22.jpeg', 'title' => 'लोकदल सदस्यता अभियान व संगठन विस्तार', 'desc' => 'Lokdal Membership Drive'],
                  ['img' => 'img/news/latest-news/news-23.jpeg', 'title' => 'लोकदल आधिकारिक विज्ञप्ति व सम्मलेन', 'desc' => 'Lokdal Official Statement']
                ];
                foreach ($latestDailyUpdates as $update) {
                ?>
              <!-- Single Blog Post -->
              <div class="single-blog-post post-style-4 d-flex align-items-center wow fadeInUpBig" data-wow-delay="0.2s">
                <!-- Post Thumbnail -->
                <a <?= isset($update['url']) ? 'href="'.$update['url'].'" target="_blank"' : 'data-lightbox="articals" href="'.$update['img'].'"'; ?> class="headline">
                  <img src="<?= $update['img'];?>" alt="">
                  <!-- Post Content -->
                  <div class="post-content">
                    <h5><?= $update['title'];?></h5>
                    <p><?= $update['desc'];?></p>
                  </div>
                </a>
              </div>
              <?php
                }
                if($con && $result = mysqli_query($con, "SELECT * FROM daily_update order by id desc;")){
                  while($row=mysqli_fetch_assoc($result)){
                ?>
              <div class="single-blog-post post-style-4 d-flex align-items-center wow fadeInUpBig" data-wow-delay="0.2s">
                <a data-lightbox="articals" href="../dashboard/<?= $row['img'];?>">
                  <img src="../dashboard/<?= $row['img'];?>" alt="">
                  <div class="post-content">
                    <h5><?= $row['title'];?></h5>
                    <p><?= $row['description'];?></p>
                  </div>
                </a>
              </div>
              <?php
                  }
                }
                ?>
            </div>
            <?php 
              $ourServicesArr = [
                ['img' => 'img/news/latest-news/news-46.jpeg','video' => 'video/wp-video-4.mp4', 'name' => 'लोकदल नवीन वीडियो संवाद — चौधरी सुनील सिंह', 'desc' => 'चौधरी सुनील सिंह जी का विशेष वीडियो वक्तव्य व किसान विमर्श', 'date' => '23 Sep 2026'],
                ['img' => 'img/news/latest-news/news-47.jpeg','video' => 'video/wp-video-5.mp4', 'name' => 'लोकदल प्रेस एवं जनसभा वीडियो वक्तव्य', 'desc' => 'मिशन 2027 एवं उत्तर प्रदेश विकास रणनीति', 'date' => '23 Sep 2026'],
                ['img' => 'img/news/latest-news/news-45.jpeg','video' => 'video/wp-video-6.mp4', 'name' => 'लोकदल राष्ट्रीय कार्यकारिणी वीडियो संवाद', 'desc' => 'चौधरी सुनील सिंह संबोधन व संगठन चर्चा', 'date' => '23 Sep 2026'],
                ['img' => 'video/vid30.jpg','video' => 'video/wp-video-3.mp4', 'name' => 'राहुल गांधी एवं लोकदल राष्ट्रीय अध्यक्ष - विशेष वीडियो वक्तव्य', 'desc' => 'राहुल गांधी एवं चौधरी सुनील सिंह - किसान अधिकार एवं जनहित चर्चा', 'date' => '22 Sep 2026'],
                ['img' => 'https://img.youtube.com/vi/UU1yv-FN344/hqdefault.jpg','video' => 'https://youtu.be/UU1yv-FN344?si=RAZzzR4t9sMS1g80', 'name' => 'चौधरी सुनील सिंह जी का विशेष वीडियो संदेश', 'desc' => 'SIR मतदाता सूची एवं जनहित विमर्श पर लोकदल वक्तव्य', 'date' => 'YouTube Video - 22 Sep 2026'],
                ['img' => 'https://img.youtube.com/vi/1sJB7x3NSOE/hqdefault.jpg','video' => 'https://youtu.be/1sJB7x3NSOE?si=zaO4LPSMuI9tBriI', 'name' => 'अखिलेश यादव का बड़ा दांव! जयंत चौधरी बनाम सुनील सिंह', 'desc' => 'YBN News Special Coverage - लोकदल व सपा 2027 चुनावी रणनीति', 'date' => 'YBN News (YouTube) - 19 Sep 2026'],
                ['img' => 'https://img.youtube.com/vi/jpAGYMw7tx4/hqdefault.jpg','video' => 'https://youtu.be/jpAGYMw7tx4?si=7eSnCgmibiJV-8yZ', 'name' => 'अखिलेश-सुनील सिंह मुलाकात! पश्चिमी UP में सीटों का दांव', 'desc' => 'TV100 News - लोकदल अध्यक्ष चौधरी सुनील सिंह विशेष रिपोर्ट', 'date' => 'TV100 News (YouTube) - 19 Sep 2026'],
                ['img' => 'https://img.youtube.com/vi/cvdSkNNIgwU/hqdefault.jpg','video' => 'https://youtu.be/cvdSkNNIgwU?si=N9G_00dO7r2cLQ2_', 'name' => 'लोकदल अध्यक्ष सुनील सिंह व अखिलेश यादव विशेष मुलाकात', 'desc' => 'किसान अधिकार, महंगाई, बेरोजगारी व 2027 चुनाव पर विमर्श', 'date' => 'YouTube News - 19 Sep 2026'],
                ['img' => 'video/fb-gathbandhan.jpg','video' => 'https://www.facebook.com/share/v/1g6JDkys3f/', 'name' => 'लोकदल विशेष फेसबुक वीडियो संवाद — चौधरी सुनील सिंह', 'desc' => 'लोकदल अध्यक्ष चौधरी सुनील सिंह का विशेष संदेश व प्रेस संवाद', 'date' => 'Facebook Video'],
                ['img' => 'video/wp-video-thumb.jpeg','video' => 'https://www.facebook.com/share/r/1Djy88pHFG/', 'name' => 'लोकदल विशेष वक्तव्य & चुनावी चर्चा — फेसबुक रील', 'desc' => 'चौधरी सुनील सिंह एवं अखिलेश यादव मुलाकात पर विशेष कवरेज', 'date' => 'Facebook Reel'],
                ['img' => 'video/wp-video-thumb.jpeg','video' => 'https://www.facebook.com/share/r/1BSXXSL8wh/', 'name' => 'मिशन 2027: लोकदल और सपा गठबंधन रील — चौधरी सुनील सिंह', 'desc' => 'उत्तर प्रदेश 2027 चुनाव रणनीति व लोकदल संदेश', 'date' => 'Facebook Reel'],
                ['img' => 'img/news/latest-news/wp-image-1.jpeg','video' => 'https://x.com/aajtak/status/2100949903572967630', 'name' => 'आजतक (AajTak): अखिलेश यादव से मिले लोकदल अध्यक्ष', 'desc' => '2027 में अखिलेश यादव को मुख्यमंत्री बनाना है — सुनील सिंह', 'date' => 'AajTak News (X) - 18 Sep 2026'],
                ['img' => 'video/fb-gathbandhan.jpg','video' => 'https://www.facebook.com/share/v/1BZzB4rn1W/', 'name' => 'अखिलेश यादव से मुलाकात पर विशेष कवरेज', 'desc' => '2027 चुनाव व लोकदल-सपा विमर्श', 'date' => 'Facebook Video - 18 Sep 2026'],
                ['img' => 'img/news/latest-news/news-31.jpeg','video' => 'https://www.amarujala.com/video/lucknow/video-video-akhalsha-yathava-sa-mal-lkathal-athhayakashha-sanal-saha-2027-canava-samata-kaii-mathatha-para-caraca-2026-09-18', 'name' => 'अमर उजाला: अखिलेश यादव से मिले लोकदल अध्यक्ष', 'desc' => '2027 चुनाव समेत कई मुद्दों पर चर्चा', 'date' => 'Amar Ujala - 18 Sep 2026'],
                ['img' => 'video/vid21.jpg','video' => 'https://www.facebook.com/share/p/1JiTTomifm/', 'name' => 'लोकदल आधिकारिक फेसबुक पोस्ट', 'desc' => 'चौधरी सुनील सिंह जी का विशेष संदेश', 'date' => 'Facebook Post'],
                ['img' => 'video/fb-soochana.jpg','video' => 'https://www.facebook.com/share/v/1BswAU7aGt/', 'name' => 'लोकदल विशेष फेसबुक वक्तव्य', 'desc' => 'चौधरी सुनील सिंह प्रेस संवाद', 'date' => 'Facebook Video'],
                ['img' => 'video/fb-divya.jpg','video' => 'https://www.facebook.com/share/v/1C1DqRiMa4/', 'name' => 'लोकदल मीडिया संवाद वीडियो', 'desc' => 'चौधरी सुनील सिंह का नवीन संबोधन', 'date' => 'Facebook Video'],
                ['img' => 'https://img.youtube.com/vi/L_3Whkd7ryM/hqdefault.jpg','video' => 'https://www.youtube.com/watch?v=L_3Whkd7ryM', 'name' => 'चौधरी सुनील सिंह विशेष यूट्यूब वक्तव्य', 'desc' => 'लोकदल राष्ट्रीय अध्यक्ष चौधरी सुनील सिंह का नया वीडियो संबोधन', 'date' => '19 Sep 2026'],
                ['img' => 'video/fb-gathbandhan.jpg','video' => 'https://www.facebook.com/share/v/1BZzB4rn1W/', 'name' => 'लोकदल फेसबुक विशेष वीडियो', 'desc' => 'चौधरी सुनील सिंह एवं लोकदल फेसबुक वीडियो कवरेज', 'date' => '19 Sep 2026'],
                ['img' => 'https://img.youtube.com/vi/BehjfXr1NSs/hqdefault.jpg','video' => 'https://www.youtube.com/watch?v=BehjfXr1NSs', 'name' => 'लोकदल नवीन यूट्यूब संदेश', 'desc' => 'चौधरी सुनील सिंह का विशेष संदेश एवं विचार', 'date' => '19 Sep 2026'],
                ['img' => 'video/wp-video-thumb.jpeg','video' => 'video/wp-video-1.mp4', 'name' => 'चौधरी सुनील सिंह व अखिलेश यादव संवाद', 'desc' => 'लोकदल और सपा नेतृत्व की विशेष बैठक', 'date' => '18 Sep 2026'],
                ['img' => 'video/wp-video-thumb.jpeg','video' => 'video/wp-video-2.mp4', 'name' => 'लोकदल राष्ट्रीय अध्यक्ष का विशेष वक्तव्य', 'desc' => 'मिशन 2027 — उत्तर प्रदेश बदलाव संकल्प', 'date' => '18 Sep 2026'],
                ['img' => 'video/wp-video-thumb.jpeg','video' => 'https://instagram.com/reel/Dda7EYEFM1b/?utm_source=ig_web_copy_link&stkn=MzRlODBiNWFlZA==', 'name' => 'लोकदल वीडियो रील — चौधरी सुनील सिंह', 'desc' => 'सुनील सिंह जी का विशेष संदेश', 'date' => 'Instagram Reel'],
                ['img' => 'video/wp-video-thumb.jpeg','video' => 'https://www.instagram.com/reel/DdbRqLFjIgQ/?stkn=MTg4Z2pxYzZ6dXIydg==', 'name' => 'मिशन 2027: लोकदल और सपा', 'desc' => 'अखिलेश यादव से मुलाकात पर विशेष कवरेज', 'date' => 'Instagram Reel'],
                ['img' => 'video/yt-wE9bWrA-IrI.jpg','video' => 'https://www.youtube.com/watch?v=wE9bWrA-IrI', 'name' => 'चौधरी सुनील सिंह विशेष पॉडकास्ट', 'desc' => 'लोकदल नीतियां एवं किसान विमर्श (Saargarbhit)', 'date' => 'YouTube - 16 Sep 2026'],
                ['img' => 'img/news/latest-news/news-31.jpeg','video' => 'https://m.facebook.com/story.php?story_fbid=pfbid0d56tZkTwzxkDDcBHY3WAZTmr8MsXzLAEdpkXdE7f3pfW7theU89sLC2j2jqSKHQcl&id=100050662051558&mibextid=wwXIfr', 'name' => 'आलू किसान तीन तरफा मार में', 'desc' => 'खाद कालाबाजारी व मंडी संकट पर लोकदल', 'date' => 'Facebook - 17 Sep 2026'],
                ['img' => 'video/fb-divya.jpg','video' => 'https://www.facebook.com/share/v/1BQDKTYZNM/', 'name' => 'बेबाक सवाल पूछना क्या गुनाह?', 'desc' => 'पत्रकार दिव्य श्रीवास्तव के समर्थन में लोकदल', 'date' => '13 Sep 2026'],
                ['img' => 'video/yt-xn6Rz6LzjuY.jpg','video' => 'https://www.youtube.com/watch?v=xn6Rz6LzjuY', 'name' => 'जयंत के खिलाफ सुनील सिंह का बड़ा ऐलान', 'desc' => 'अखिलेश यादव का खुला समर्थन (SPN9 News)', 'date' => '10 Sep 2026'],
                ['img' => 'video/fb-soochana.jpg','video' => 'https://www.facebook.com/share/v/1He834mCUj/', 'name' => 'सूचना विभाग में महिला सुरक्षा पर सवाल', 'desc' => 'सरकारी विभागों में महिलाओं की सुरक्षा पर सवाल', 'date' => '14 Sep 2026'],
                ['img' => 'video/fb-gathbandhan.jpg','video' => 'https://www.facebook.com/share/v/19SzkEL4Sm/', 'name' => 'लोकदल-सपा गठबंधन चर्चा', 'desc' => 'पश्चिमी यूपी में सियासी हलचल (टीम अखिलेश)', 'date' => '10 Sep 2026'],
                ['img' => 'video/fb-jayant.jpg','video' => 'https://www.facebook.com/share/r/1TBmP28okz/', 'name' => 'चौ. चरण सिंह की विरासत पर बयान', 'desc' => 'सुनील सिंह का जयंत चौधरी पर तीखा हमला (राष्ट्रीय वॉयस)', 'date' => '11 Sep 2026'],
                ['img' => 'video/fb-divya.jpg','video' => 'https://www.facebook.com/share/v/19X3VC8bgo/', 'name' => 'योगी से सवाल की ऐसी सज़ा दी!', 'desc' => 'दिव्या श्रीवास्तव इंटरव्यू (अभिषेक उपाध्याय)', 'date' => '13 Sep 2026'],
                ['img' => 'video/fb-divya.jpg','video' => 'https://www.facebook.com/share/v/1C6Fj6Sxww/?mibextid=wwXIfr', 'name' => 'नॉर्वे में मोदी, लखनऊ में योगी', 'desc' => 'एक ही शैली: सवाल से भागना और प्रेस को दबाना', 'date' => '12 Sep 2026'],
                ['img' => 'video/vid21.jpg','video' => 'video/21.mp4', 'name' => 'लोकदल विशेष संदेश', 'desc' => 'चौधरी सुनील सिंह संबोधन', 'date' => 'Lokdal Video'],
                ['img' => 'video/vid22.jpg','video' => 'video/22.mp4', 'name' => 'किसान अधिकार संवाद', 'desc' => 'लोकदल प्रेस वार्ता', 'date' => 'Lokdal Video'],
                ['img' => 'video/vid23.jpg','video' => 'video/23.mp4', 'name' => 'लोकदल संगठन बैठक', 'desc' => 'चौधरी सुनील सिंह वक्तव्य', 'date' => 'Lokdal Video'],
                ['img' => 'video/vid24.jpg','video' => 'video/24.mp4', 'name' => 'लोकदल प्रदेश कार्यकारिणी', 'desc' => 'किसान मुद्दे व चुनावी चर्चा', 'date' => 'Lokdal Video'],
                ['img' => 'video/vid25.jpg','video' => 'video/25.mp4', 'name' => 'किसान मजदूर कल्याण संदेश', 'desc' => 'लोकदल संबोधन', 'date' => 'Lokdal Video'],
                ['img' => 'video/vid26.jpg','video' => 'video/26.mp4', 'name' => 'लोकदल मीडिया वार्ता', 'desc' => 'प्रेस ब्रीफिंग', 'date' => 'Lokdal Video'],
                ['img' => 'video/vid27.jpg','video' => 'video/27.mp4', 'name' => 'लोकदल जनसभा कवरेज', 'desc' => 'किसान अधिकार यात्रा', 'date' => 'Lokdal Video'],
                ['img' => 'video/vid28.jpg','video' => 'video/28.mp4', 'name' => 'लोकदल किसान संदेश', 'desc' => 'चौधरी सुनील सिंह वक्तव्य', 'date' => 'Lokdal Video'],
                ['img' => 'video/vid29.jpg','video' => 'video/29.mp4', 'name' => 'लोकदल प्रेस ब्रीफिंग', 'desc' => 'जांच व किसान मांगें', 'date' => 'Lokdal Video'],
                ['img' => 'https://img.youtube.com/vi/wE9bWrA-IrI/hqdefault.jpg','video' => 'https://www.youtube.com/watch?v=wE9bWrA-IrI', 'name' => 'लोकदल यूट्यूब संदेश', 'desc' => 'चौधरी सुनील सिंह वक्तव्य', 'date' => 'YouTube Video'],
                ['img' => 'video/vid21.jpg','video' => 'https://m.facebook.com/story.php?story_fbid=pfbid0d56tZkTwzxkDDcBHY3WAZTmr8MsXzLAEdpkXdE7f3pfW7theU89sLC2j2jqSKHQcl&id=100050662051558&mibextid=wwXIfr', 'name' => 'लोकदल फेसबुक अपडेट', 'desc' => 'चौधरी सुनील सिंह विशेष पोस्ट', 'date' => 'Facebook Post'],
                ['img' => 'video/vid21.jpg','video' => 'https://www.facebook.com/share/v/1BtQzxgdP7/', 'name' => 'लोकदल फेसबुक वीडियो', 'desc' => 'चौधरी सुनील सिंह विशेष कवरेज', 'date' => 'Facebook Video'],
                ['img' => 'video/vid22.jpg','video' => 'https://x.com/bstvlive/status/2097642131708055807', 'name' => 'BSTV Live कवरेज', 'desc' => 'अखिलेश यादव से मुलाकात अपडेट', 'date' => 'BSTV Live (X)'],
                ['img' => 'video/vid23.jpg','video' => 'https://x.com/ians_india/status/2097648641682837966', 'name' => 'IANS India कवरेज', 'desc' => 'लोकदल अध्यक्ष प्रेस अपडेट', 'date' => 'IANS India (X)'],
                ['img' => 'https://img.youtube.com/vi/syTx9KCPhSc/hqdefault.jpg','video' => 'https://www.youtube.com/watch?v=syTx9KCPhSc', 'name' => 'लोकदल राष्ट्रीय अध्यक्ष सुनील सिंह', 'desc' => 'चीनी-इथेनॉल नीति पर हमला', 'date' => 'Lokdal Update'],
                ['img' => 'https://img.youtube.com/vi/SQv0_9oXSpY/hqdefault.jpg','video' => 'https://www.youtube.com/watch?v=SQv0_9oXSpY', 'name' => 'लोकदल प्रेस कॉन्फ्रेंस', 'desc' => 'किसान अधिकार मुद्दा', 'date' => 'Lokdal Update'],
                ['img' => 'https://img.youtube.com/vi/3hCkHK9I_UA/hqdefault.jpg','video' => 'https://www.youtube.com/watch?v=3hCkHK9I_UA', 'name' => 'चौधरी सुनील सिंह वक्तव्य', 'desc' => 'लोकदल किसान संदेश', 'date' => 'Lokdal Update'],
                ['img' => 'https://img.youtube.com/vi/qoQrdj2y4gU/hqdefault.jpg','video' => 'https://www.youtube.com/watch?v=qoQrdj2y4gU', 'name' => 'लोकदल मीडिया वार्ता', 'desc' => 'किसान आंदोलन', 'date' => 'Lokdal Update'],
                ['img' => 'https://img.youtube.com/vi/v0c9QYq9Cwg/hqdefault.jpg','video' => 'https://www.youtube.com/watch?v=v0c9QYq9Cwg', 'name' => 'लोकदल प्रेस ब्रीफिंग', 'desc' => 'जांच की मांग', 'date' => 'Lokdal Update'],
                ['img' => 'https://img.youtube.com/vi/vE5AoEUFwxo/hqdefault.jpg','video' => 'https://www.youtube.com/watch?v=vE5AoEUFwxo', 'name' => 'चौधरी सुनील सिंह जनसभा', 'desc' => 'किसानों की न्याय यात्रा', 'date' => 'Lokdal Update'],
                ['img' => 'https://img.youtube.com/vi/N_JQCzOyY0Q/hqdefault.jpg','video' => 'https://www.youtube.com/watch?v=N_JQCzOyY0Q', 'name' => 'लोकदल कार्यकारिणी', 'desc' => 'किसान मांगें', 'date' => 'Lokdal Update'],
                ['img' => 'https://img.youtube.com/vi/-LEs_SmAQJ4/hqdefault.jpg','video' => 'https://www.youtube.com/watch?v=-LEs_SmAQJ4', 'name' => 'लोकदल विशेष संबोधन', 'desc' => 'किसान मजदूर कल्याण', 'date' => 'Lokdal Update'],
                ['img' => 'https://img.youtube.com/vi/UqTp-oKWYA8/hqdefault.jpg','video' => 'https://www.youtube.com/watch?v=UqTp-oKWYA8', 'name' => 'PPN News कवरेज', 'desc' => 'चीनी-इथेनॉल नीति पर अन्याय', 'date' => 'Lokdal News'],
                ['img' => 'https://img.youtube.com/vi/0b0Irc1PA2U/hqdefault.jpg','video' => 'https://www.youtube.com/watch?v=0b0Irc1PA2U', 'name' => 'सीबीआई जांच की मांग', 'desc' => 'लोकदल बयान', 'date' => 'Lokdal News'],
                ['img' => 'https://img.youtube.com/vi/MqEc_stvrP4/hqdefault.jpg','video' => 'https://www.youtube.com/watch?v=MqEc_stvrP4', 'name' => 'लोकदल UP सम्मलेन', 'desc' => 'चौधरी सुनील सिंह सम्बोधन', 'date' => 'Lokdal Event'],
                ['img' => 'https://img.youtube.com/vi/BLoGcnK6umQ/hqdefault.jpg','video' => 'https://www.youtube.com/watch?v=BLoGcnK6umQ', 'name' => 'लोकदल शार्ट्स', 'desc' => 'किसान आवाज', 'date' => 'Lokdal Update'],
                ['img' => 'https://img.youtube.com/vi/1CM9BmdFsj4/hqdefault.jpg','video' => 'https://www.youtube.com/watch?v=1CM9BmdFsj4', 'name' => 'किसान महापंचायत', 'desc' => 'किसान हुंकार', 'date' => 'Lokdal Event'],
                ['img' => 'https://img.youtube.com/vi/SxnXT1Xh0uA/hqdefault.jpg','video' => 'https://www.youtube.com/watch?v=SxnXT1Xh0uA', 'name' => 'लोकदल साक्षात्कार', 'desc' => 'किसान अधिकार नीति', 'date' => 'Lokdal News'],
                ['img' => 'https://img.youtube.com/vi/dTsso2bFSm0/hqdefault.jpg','video' => 'https://www.youtube.com/watch?v=dTsso2bFSm0', 'name' => 'अमर उजाला न्यूज', 'desc' => 'चीनी-इथेनॉल नीति पर हमला', 'date' => 'Lokdal News'],
                ['img' => 'https://img.youtube.com/vi/sWqkaLzdcEA/hqdefault.jpg','video' => 'https://www.youtube.com/watch?v=sWqkaLzdcEA', 'name' => 'समर सलील न्यूज', 'desc' => 'सीबीआई जांच मांग', 'date' => 'Lokdal News'],
                ['img' => 'video/vid20.jpg','video' => 'video/20.mp4', 'name' => 'Delhi Chalo', 'desc' => 'Speech Delivery', 'date' => 'Lokdal on Dec 23, 2023 at 2:55 pm'],
                ['img' => 'video/vid19.jpg','video' => 'video/19.mp4', 'name' => 'Delhi Chalo', 'desc' => 'Speech Delivery', 'date' => 'Lokdal on Dec 23, 2023 at 2:55 pm'],
                ['img' => 'video/vid18.jpg','video' => 'video/18.mp4', 'name' => 'Delhi Chalo', 'desc' => 'Speech Delivery', 'date' => 'Lokdal on Dec 23, 2023 at 2:55 pm'],
                ['img' => 'video/16.png','video' => 'video/16.mp4', 'name' => 'Kisan Sangthan Baithak', 'desc' => 'Speech Delivery', 'date' => 'Lokdal on Nov 18, 2023 at 2:55 pm'],
                ['img' => 'video/15.png','video' => 'video/15.mp4', 'name' => 'Kisan Sangthan Baithak', 'desc' => 'Speech Delivery', 'date' => 'Lokdal on Nov 18, 2023 at 2:55 pm'],
                ['img' => 'video/14.png','video' => 'video/14.mp4', 'name' => 'Kisan Sangthan Baithak', 'desc' => 'Speech Delivery', 'date' => 'Lokdal on Nov 18, 2023 at 2:55 pm'],
                  ['img' => 'video/vid11.jpg','video' => 'video/14.mp4', 'name' => 'Kisan Sangthan Baithak', 'desc' => 'Speech Delivery', 'date' => 'Lokdal on Nov 2, 2023 at 2:55 pm'],
                  ['img' => 'video/vid12.jpg','video' => 'video/12.mp4', 'name' => 'Kisan Sangthan Baithak', 'desc' => 'Speech Delivery', 'date' => 'Lokdal on Nov 2, 2023 at 2:55 pm'],
                  ['img' => 'video/vid13.jpg','video' => 'video/13.mp4', 'name' => 'Kisan Sangthan Baithak', 'desc' => 'Speech Delivery', 'date' => 'Lokdal on Nov 2, 2023 at 2:55 pm'],
                  ['img' => 'video/vid3.jpg','video' => 'video/3.mp4', 'name' => 'Chaudhary Charan Singh', 'desc' => 'Speech Delivery', 'date' => 'Lokdal on Feb 25, 2017 at 2:55 pm'],
                  ['img' => 'video/vid5.jpg','video' => 'video/5.mp4', 'name' => 'Chaudhary Charan Singh', 'desc' => 'Speech Delivery', 'date' => 'Lokdal on Feb 25, 2017 at 2:55 pm'],
                  ['img' => 'video/vid6.jpg','video' => 'video/6.mp4', 'name' => 'Chaudhary Charan Singh', 'desc' => 'Speech Delivery', 'date' => 'Lokdal on Feb 25, 2017 at 2:55 pm'],
                  ['img' => 'video/vid7.jpg','video' => 'video/7.mp4', 'name' => 'Chaudhary Charan Singh', 'desc' => 'Speech Delivery', 'date' => 'Lokdal on Feb 25, 2017 at 2:55 pm'],
                  ['img' => 'video/vid8.jpg','video' => 'video/8.mp4', 'name' => 'Chaudhary Charan Singh', 'desc' => 'Speech Delivery', 'date' => 'Lokdal on Feb 25, 2017 at 2:55 pm'],
                  ['img' => 'video/vid9.jpg','video' => 'video/9.mp4', 'name' => 'Chaudhary Charan Singh', 'desc' => 'Speech Delivery', 'date' => 'Lokdal on Feb 25, 2017 at 2:55 pm'],
                  ['img' => 'video/vid10.jpg','video' => 'video/10.mp4', 'name' => 'Chaudhary Charan Singh', 'desc' => 'Speech Delivery', 'date' => 'Lokdal on Feb 25, 2017 at 2:55 pm'],
                
              ];
              ?>
            <div class="col-12 col-lg-4">
              <div class="title">
                <h5>Most Popular Videos</h5>
              </div>
              <!-- Single Blog Post -->
              <?php foreach ($ourServicesArr as $key => $value): ?>
              <div class="single-blog-post wow fadeInUpBig" data-wow-delay="0.2s">
                <!-- Post Thumbnail -->
                <div class="post-thumbnail">
                  <img src="<?php echo $value['img']; ?>" alt="">
                  <!-- Video Button -->
                  <a href="<?php echo $value['video']; ?>" target="_blank" class="video-btn"><i class="fa fa-play"></i></a>
                </div>
                <!-- Post Content -->
                <div class="post-content">
                  <a href="<?php echo $value['video']; ?>" target="_blank" class="headline video-btn">
                    <h5><?php echo $value['name']; ?></h5>
                    <p><?php echo $value['desc']; ?></p>
                    <!-- Post Meta -->
                    <div class="post-meta">
                      <p><?php echo $value['date']; ?></p>
                    </div>
                  </a>
                </div>
              </div>
              <?php endforeach; ?>
            </div>
          </div>
          <?php 
            $ourServicesArr = [
              ['img' => 'img/news/latest-news/news-42.jpeg'],
              ['img' => 'img/news/latest-news/news-43.jpeg'],
              ['img' => 'img/news/latest-news/news-44.jpeg'],
              ['img' => 'img/news/latest-news/news-32.jpeg'],
              ['img' => 'img/news/latest-news/news-33.jpeg'],
              ['img' => 'img/news/latest-news/news-34.jpeg'],
              ['img' => 'img/news/latest-news/news-35.jpeg'],
              ['img' => 'img/news/latest-news/news-31.jpeg'],
              ['img' => 'video/yt-wE9bWrA-IrI.jpg'],
              ['img' => 'img/news/latest-news/news-29.jpeg'],
              ['img' => 'video/fb-divya.jpg'],
              ['img' => 'video/yt-xn6Rz6LzjuY.jpg'],
              ['img' => 'video/fb-soochana.jpg'],
              ['img' => 'video/fb-gathbandhan.jpg'],
              ['img' => 'video/fb-jayant.jpg'],
              ['img' => 'img/news/latest-news/news-1.jpeg'],
              ['img' => 'img/news/latest-news/news-2.jpeg'],
              ['img' => 'img/news/latest-news/news-3.jpeg'],
              ['img' => 'img/news/latest-news/news-4.jpeg'],
              ['img' => 'img/news/latest-news/news-5.jpeg'],
              ['img' => 'img/news/latest-news/news-6.jpeg'],
              ['img' => 'img/news/latest-news/news-7.jpeg'],
              ['img' => 'img/news/latest-news/news-8.jpeg'],
              ['img' => 'img/news/latest-news/news-9.jpeg'],
              ['img' => 'img/news/latest-news/news-10.jpeg'],
              ['img' => 'img/news/latest-news/news-11.jpeg'],
              ['img' => 'img/news/latest-news/news-12.jpeg'],
              ['img' => 'img/news/latest-news/news-13.jpeg'],
              ['img' => 'img/news/latest-news/news-14.jpeg'],
              ['img' => 'img/news/latest-news/news-15.jpeg'],
              ['img' => 'img/news/latest-news/news-16.jpeg'],
              ['img' => 'img/news/latest-news/news-17.jpeg'],
              ['img' => 'img/news/latest-news/news-18.jpeg'],
              ['img' => 'img/news/latest-news/news-19.jpeg'],
              ['img' => 'img/news/latest-news/news-20.jpeg'],
              ['img' => 'img/news/latest-news/news-21.jpeg'],
              ['img' => 'img/news/latest-news/news-22.jpeg'],
              ['img' => 'img/news/latest-news/news-23.jpeg'],
              ['img' => 'img/news/2nov-news/news-111.jpg'],
              ['img' => 'img/news/2nov-news/news-110.jpg'],
              ['img' => 'img/news/2nov-news/news-109.jpg'],
              ['img' => 'img/news/2nov-news/news-108.jpg'],
              ['img' => 'img/news/2nov-news/news-107.jpg'],
              ['img' => 'img/news/2nov-news/news-106.jpg'],
              ['img' => 'img/news/2nov-news/news-105.jpg'],
              ['img' => 'img/news/2nov-news/news-104.jpg'],
              ['img' => 'img/news/2nov-news/news-103.jpg'],
              ['img' => 'img/news/2nov-news/news-102.jpg'],
              ['img' => 'img/news/2nov-news/news-101.jpg'],
              ['img' => 'img/news/2nov-news/news-100.jpg'],
              ['img' => 'img/news/2nov-news/news-99.jpg'],
              ['img' => 'img/news/2nov-news/news-98.jpg'],
              ['img' => 'img/news/2nov-news/news-97.jpg'],
              ['img' => 'img/news/2nov-news/news-96.jpg'],
              ['img' => 'img/news/2nov-news/news-95.jpg'],
              ['img' => 'img/news/2nov-news/news-94.jpg'],
              ['img' => 'img/news/2nov-news/news-93.jpg'],
              ['img' => 'img/news/2nov-news/news-92.jpg'],
              ['img' => 'img/news/2nov-news/news-91.jpg'],
              ['img' => 'img/news/2nov-news/news-90.jpg'],
              ['img' => 'img/news/2nov-news/news-89.jpg'],
              ['img' => 'img/news/2nov-news/news-88.jpg'],
              ['img' => 'img/news/2nov-news/news-87.jpg'],
              ['img' => 'img/news/2nov-news/news-86.jpg'],
              ['img' => 'img/news/2nov-news/news-85.jpg'],
              ['img' => 'img/news/2nov-news/news-84.jpg'],
              ['img' => 'img/news/2nov-news/news-83.jpg'],
              ['img' => 'img/news/2nov-news/news-82.jpg'],
              ['img' => 'img/news/2nov-news/news-81.jpg'],
              ['img' => 'img/news/2nov-news/news-80.jpg'],
              ['img' => 'img/news/2nov-news/news-79.jpg'],
              ['img' => 'img/news/2nov-news/news-78.jpg'],
              ['img' => 'img/news/2nov-news/news-77.jpg'],
              ['img' => 'img/news/2nov-news/news-76.jpg'],
              ['img' => 'img/news/2nov-news/news-75.jpg'],
              ['img' => 'img/news/2nov-news/news-74.jpg'],
              ['img' => 'img/news/2nov-news/news-73.jpg'],
              ['img' => 'img/news/2nov-news/news-72.jpg'],
              ['img' => 'img/news/2nov-news/news-71.jpg'],
              ['img' => 'img/news/2nov-news/news-70.jpg'],
              ['img' => 'img/news/2nov-news/news-69.jpg'],
              ['img' => 'img/news/2nov-news/news-68.jpg'],
              ['img' => 'img/news/2nov-news/news-67.jpg'],
              ['img' => 'img/news/2nov-news/news-66.jpg'],
              ['img' => 'img/news/2nov-news/news-65.jpg'],
              ['img' => 'img/news/2nov-news/news-64.jpg'],
              ['img' => 'img/news/2nov-news/news-63.jpg'],
              ['img' => 'img/news/2nov-news/news-62.jpg'],
              ['img' => 'img/news/2nov-news/news-61.jpg'],
              ['img' => 'img/news/2nov-news/news-60.jpg'],
              ['img' => 'img/news/2nov-news/news-59.jpg'],
              ['img' => 'img/news/2nov-news/news-58.jpg'],
              ['img' => 'img/news/2nov-news/news-57.jpg'],
              ['img' => 'img/news/2nov-news/news-56.jpg'],
              ['img' => 'img/news/2nov-news/news-55.jpg'],
              ['img' => 'img/news/2nov-news/news-54.jpg'],
              ['img' => 'img/news/2nov-news/news-53.jpg'],
              ['img' => 'img/news/2nov-news/news-52.jpg'],
              ['img' => 'img/news/2nov-news/2novnews-51.jpg'],
              ['img' => 'img/news/2nov-news/2novnews-50.jpg'],
              ['img' => 'img/news/2nov-news/2novnews-49.jpg'],
              ['img' => 'img/news/2nov-news/2novnews-48.jpg'],
              ['img' => 'img/news/2nov-news/2novnews-47.jpg'],
              ['img' => 'img/news/2nov-news/2novnews-46.jpg'],
              ['img' => 'img/news/2nov-news/2novnews-45.jpg'],
              ['img' => 'img/news/2nov-news/2novnews-44.jpg'],
              ['img' => 'img/news/2nov-news/2novnews-43.jpg'],
              ['img' => 'img/news/2nov-news/2novnews-42.jpg'],
              ['img' => 'img/news/2nov-news/2novnews-41.jpg'],
              ['img' => 'img/news/2nov-news/2novnews-40.jpg'],
              ['img' => 'img/news/2nov-news/2novnews-39.jpg'],
              ['img' => 'img/news/2nov-news/2novnews-38.jpg'],
              ['img' => 'img/news/2nov-news/2novnews-37.jpg'],
                ['img' => 'img/news/2nov-news/2novnews-36.jpg'],
                ['img' => 'img/news/2nov-news/2novnews-1.jpg'],
                ['img' => 'img/news/2nov-news/2novnews-2.jpg'],
                ['img' => 'img/news/2nov-news/2novnews-3.jpg'],
                ['img' => 'img/news/2nov-news/2novnews-4.jpg'],
                ['img' => 'img/news/2nov-news/2novnews-5.jpg'],
                ['img' => 'img/news/2nov-news/2novnews-6.jpg'],
                ['img' => 'img/news/2nov-news/2novnews-7.jpg'],
                ['img' => 'img/news/2nov-news/2novnews-8.jpg'],
                ['img' => 'img/news/2nov-news/2novnews-9.jpg'],
                ['img' => 'img/news/2nov-news/2novnews-10.jpg'],
                ['img' => 'img/news/2nov-news/2novnews-11.jpg'],
                ['img' => 'img/news/2nov-news/2novnews-12.jpg'],
                ['img' => 'img/news/2nov-news/2novnews-13.jpg'],
                ['img' => 'img/news/2nov-news/2novnews-14.jpg'],
                ['img' => 'img/news/2nov-news/2novnews-15.jpg'],
                ['img' => 'img/news/2nov-news/2novnews-16.jpg'],
                ['img' => 'img/news/2nov-news/2novnews-17.jpg'],
                ['img' => 'img/news/2nov-news/2novnews-18.jpg'],
                ['img' => 'img/news/2nov-news/2novnews-19.jpg'],
                ['img' => 'img/news/2nov-news/2novnews-20.jpg'],
                ['img' => 'img/news/2nov-news/2novnews-21.jpg'],
                ['img' => 'img/news/2nov-news/2novnews-22.jpg'],
                ['img' => 'img/news/2nov-news/2novnews-23.jpg'],
                ['img' => 'img/news/2nov-news/2novnews-24.jpg'],
                ['img' => 'img/news/2nov-news/2novnews-25.jpg'],
                ['img' => 'img/news/2nov-news/2novnews-26.jpg'],
                ['img' => 'img/news/2nov-news/2novnews-27.jpg'],
                ['img' => 'img/news/2nov-news/2novnews-28.jpg'],
                ['img' => 'img/news/2nov-news/2novnews-29.jpg'],
                ['img' => 'img/news/2nov-news/2novnews-30.jpg'],
                ['img' => 'img/news/2nov-news/2novnews-31.jpg'],
                ['img' => 'img/news/2nov-news/2novnews-32.jpg'],
                ['img' => 'img/news/2nov-news/2novnews-33.jpg'],
                ['img' => 'img/news/2nov-news/2novnews-34.jpg'],
                ['img' => 'img/news/2nov-news/2novnews-35.jpg'],
            ];
            ?>
          <div class="row">
            <div class="col-12">
              <div class="title">
                <h5>News</h5>
              </div>
              <div class="hero-post-slide">
                <?php foreach ($ourServicesArr as $key => $value): ?>
                <!-- Single Blog Post -->
                <div class="single-slide single-blog-post post-style-4 d-flex align-items-center wow fadeInUpBig" data-wow-delay="0.2s">
                  <!-- Post Thumbnail -->
                  <a data-lightbox="articals" href="<?php echo $value['img']; ?>">
                  <img src="<?php echo $value['img']; ?>" alt="">
                  </a>
                </div>
                <?php endforeach; ?>
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