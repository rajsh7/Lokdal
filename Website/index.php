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
                        <!-- Single Blog Post -->
                        <div class="single-blog-post post-style-2 d-flex align-items-center wow fadeInUpBig" data-wow-delay="0.2s">
                          <div class="post-thumbnail">
                            <img src="img/news/latest-news/news-2.jpeg" alt="">
                          </div>
                          <div class="post-content ">
                            <a data-lightbox="jansabha" href="img/news/latest-news/news-2.jpeg" class="headline">
                              <div class="headline">
                                <h5>चीनी-इथेनॉल नीति पर सीबीआई जांच की मांग</h5>
                              </div>
                              <div class="post-meta">
                                <p>दैनिक भास्कर न्यूज कवरेज</p>
                              </div>
                            </a>
                          </div>
                        </div>
                        <div class="single-blog-post post-style-2 d-flex align-items-center wow fadeInUpBig" data-wow-delay="0.3s">
                          <div class="post-thumbnail">
                            <img src="img/news/latest-news/news-3.jpeg" alt="">
                          </div>
                          <div class="post-content ">
                            <a data-lightbox="jansabha" href="img/news/latest-news/news-3.jpeg" class="headline">
                              <div class="headline">
                                <h5>किसानों के साथ अन्याय पर लोकदल का बयान</h5>
                              </div>
                              <div class="post-meta">
                                <p>हिंदुस्तान समाचार कवरेज</p>
                              </div>
                            </a>
                          </div>
                        </div>
                        <div class="single-blog-post post-style-2 d-flex align-items-center wow fadeInUpBig" data-wow-delay="0.4s">
                          <div class="post-thumbnail">
                            <img src="img/gallery/latest-gallery/gallery-2.jpeg" alt="">
                          </div>
                          <div class="post-content ">
                            <a data-lightbox="jansabha" href="img/gallery/latest-gallery/gallery-2.jpeg" class="headline">
                              <div class="headline">
                                <h5>राष्ट्रीय किसान मोर्चा महापंचायत</h5>
                              </div>
                              <div class="post-meta">
                                <p>चौधरी सुनील सिंह जनसभा</p>
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
                <a data-lightbox="articals" href="<?= $update['img'];?>">
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
                ['img' => 'video/vid21.jpg','video' => 'video/21.mp4', 'name' => 'लोकदल विशेष संदेश', 'desc' => 'चौधरी सुनील सिंह संबोधन', 'date' => 'Lokdal Video'],
                ['img' => 'video/vid22.jpg','video' => 'video/22.mp4', 'name' => 'किसान अधिकार संवाद', 'desc' => 'लोकदल प्रेस वार्ता', 'date' => 'Lokdal Video'],
                ['img' => 'video/vid23.jpg','video' => 'video/23.mp4', 'name' => 'लोकदल संगठन बैठक', 'desc' => 'चौधरी सुनील सिंह वक्तव्य', 'date' => 'Lokdal Video'],
                ['img' => 'video/vid24.jpg','video' => 'video/24.mp4', 'name' => 'लोकदल प्रदेश कार्यकारिणी', 'desc' => 'किसान मुद्दे व चुनावी चर्चा', 'date' => 'Lokdal Video'],
                ['img' => 'video/vid25.jpg','video' => 'video/25.mp4', 'name' => 'किसान मजदूर कल्याण संदेश', 'desc' => 'लोकदल संबोधन', 'date' => 'Lokdal Video'],
                ['img' => 'video/vid26.jpg','video' => 'video/26.mp4', 'name' => 'लोकदल मीडिया वार्ता', 'desc' => 'प्रेस ब्रीफिंग', 'date' => 'Lokdal Video'],
                ['img' => 'video/vid27.jpg','video' => 'video/27.mp4', 'name' => 'लोकदल जनसभा कवरेज', 'desc' => 'किसान अधिकार यात्रा', 'date' => 'Lokdal Video'],
                ['img' => 'video/vid28.jpg','video' => 'video/28.mp4', 'name' => 'लोकदल किसान संदेश', 'desc' => 'चौधरी सुनील सिंह वक्तव्य', 'date' => 'Lokdal Video'],
                ['img' => 'video/vid29.jpg','video' => 'video/29.mp4', 'name' => 'लोकदल प्रेस ब्रीफिंग', 'desc' => 'जांच व किसान मांगें', 'date' => 'Lokdal Video'],
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