<?php
  include_once("db.php");
  
  $dailyUpdatesDb = [];
  if ($con && ($res = mysqli_query($con, "SELECT * FROM daily_update ORDER BY id DESC;"))) {
    while ($r = mysqli_fetch_assoc($res)) {
      $dailyUpdatesDb[] = $r;
    }
  }
  
  $activitiesDb = [];
  if ($con && ($resAct = mysqli_query($con, "SELECT * FROM activities;"))) {
    while ($r = mysqli_fetch_assoc($resAct)) {
      $activitiesDb[] = $r;
    }
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="description" content="Lokdal Official Website">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Title  -->
    <title>Lokdal</title>
    <!-- Preconnect & Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://img.youtube.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500;700&family=Red+Hat+Display:ital,wght@1,500&family=Roboto:wght@300;400;700&family=Rubik:wght@400;500&display=swap" rel="stylesheet">
    <!-- Favicon  -->
    <link rel="icon" href="img/img/logo1.png">
    <!-- Preload critical CSS in parallel to avoid @import waterfall -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <!--LightBox-->
    <link rel="stylesheet" href="assets/vendor/lightbox/lightbox.min.css">
    <!-- Style CSS -->
    <link rel="stylesheet" href="style.css">
    <!--Google Translate API-->
    <link rel="stylesheet" href="css/google translator.css">
    <style>
      /* width */
      ::-webkit-scrollbar { width: 5px; }
      /* Track */
      ::-webkit-scrollbar-track { box-shadow: inset 0 0 5px grey; border-radius: 10px; }
      /* Handle */
      ::-webkit-scrollbar-thumb { background: #00772D; border-radius: 10px; }
      /* Handle on hover */
      ::-webkit-scrollbar-thumb:hover { background: #0b923f; }
      .post-number .fa { margin-top:10px; }
      .fa { margin-top:4px; }
      .world-catagory-slider2 .owl-controls { display: none!important; }
      .goog-logo-link { display:none !important; } 
      .goog-te-gadget { color: transparent !important; }
      .goog-te-banner-frame.skiptranslate { display: none !important; }
      body {
        top: 0px !important;
        font-family: Oswald, "Helvetica Neue", -apple-system, BlinkMacSystemFont, "Segoe UI", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
      }
      @keyframes autoHidePreloader {
        to { opacity: 0; visibility: hidden; pointer-events: none; }
      }
      #preloader {
        pointer-events: none;
        animation: autoHidePreloader 0.2s ease 0.25s forwards;
      }
    </style>
    <script defer src="js/googletranslation.js"></script>
    <script async defer src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit" type="text/javascript"></script>
  </head>
  <body>
    <!-- Preloader Start -->
    <div id="preloader">
      <img src="img/img/logo green.png" style="height: 50px;" alt="">
      <div class="preload-content"></div>
      <div id="world-load"></div>
    </div>
    <!-- Preloader End -->
    <!-- ***** Header Area Start ***** -->
    <?php include_once("header.php"); ?>
    
    <!-- Top Breaking News Bar Start -->
    <div class="top-breaking-news-bar" style="background: #00772D; color: #fff; padding: 10px 0; border-bottom: 3px solid #ffcc00; box-shadow: 0 3px 10px rgba(0,0,0,0.18);">
      <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-between">
          <div class="d-flex align-items-center mb-1 mb-md-0" style="white-space: nowrap;">
            <span class="badge badge-danger text-uppercase px-2 py-1 mr-2" style="background-color: #d90429; font-size: 13px; font-weight: 700; letter-spacing: 0.5px;">
              <i class="fa fa-bullhorn"></i> ताज़ा समाचार
            </span>
            <strong style="color: #ffeb3b; font-size: 14.5px;">03 Oct 2026:</strong>
          </div>
          <div class="flex-grow-1 mx-md-3 text-truncate" style="font-size: 14.5px; color: #ffffff;">
            <a href="#swadesh-special" style="color: #fff; text-decoration: underline; font-weight: 600;" title="स्वदेश (03 Oct 2026): 2027 का रण - लोकदल इंडिया गठबंधन का मजबूत घटक है">
              <strong>स्वदेश (03 Oct):</strong> 2027 का रण: सपा का पीडीए रथ — “लोकदल इंडिया गठबंधन का मजबूत घटक है” : चौधरी सुनील सिंह | जंतर-मंतर जेल भरो आंदोलन
            </a>
          </div>
          <div class="d-flex flex-wrap align-items-center mt-1 mt-lg-0" style="gap: 5px;">
            <a href="#exclusive-videos" class="btn btn-sm" style="background:#ff0000; color:#fff; font-weight:800; font-size:11.5px; padding:3px 8px; border-radius:3px; box-shadow: 0 0 12px rgba(255,0,0,0.8);"><i class="fa fa-play-circle"></i> 🔴 2 लाइव वीडियो</a>
            <a data-lightbox="breaking-news" href="img/news/latest-news/news-76.jpeg" class="btn btn-sm" style="background:#ffeb3b; color:#000; font-weight:700; font-size:11.5px; padding:3px 8px; border-radius:3px;"><i class="fa fa-newspaper-o"></i> स्वदेश (03 Oct)</a>
            <a data-lightbox="breaking-news" href="img/news/latest-news/news-77.jpeg" class="btn btn-sm" style="background:#fff; color:#00772D; font-weight:700; font-size:11.5px; padding:3px 8px; border-radius:3px;"><i class="fa fa-newspaper-o"></i> राष्ट्रीय सुदर्शन</a>
            <a data-lightbox="breaking-news" href="img/news/latest-news/news-78.jpeg" class="btn btn-sm" style="background:#ff3333; color:#fff; font-weight:700; font-size:11.5px; padding:3px 8px; border-radius:3px;"><i class="fa fa-camera"></i> पुलिस बस फोटो</a>
            <a href="https://www.cherishtimes.in/uttar-pradesh/90755" target="_blank" class="btn btn-sm" style="background:#fff; color:#00772D; font-weight:700; font-size:11.5px; padding:3px 8px; border-radius:3px;">Cherish Times</a>
            <a href="https://suryodaybharat.com/lokdals-fill-the-jails-protest-against-the-election-commissioner-at-jantar-mantar-national-president-chaudhary-sunil-singh-in-police-custody/" target="_blank" class="btn btn-sm" style="background:#fff; color:#00772D; font-weight:700; font-size:11.5px; padding:3px 8px; border-radius:3px;">सूर्योदय भारत</a>
            <a href="https://youtu.be/6Tz2jiiP7G0?si=_fLFHVCDp-0oT_Jc" target="_blank" class="btn btn-sm" style="background:#ff0000; color:#fff; font-weight:700; font-size:11.5px; padding:3px 8px; border-radius:3px;"><i class="fa fa-youtube-play"></i> 4tv News</a>
            <a href="https://prakashprabhaw.com/khabar-hatke/jail-bharo-andolan/detail" target="_blank" class="btn btn-sm" style="background:#fff; color:#00772D; font-weight:700; font-size:11.5px; padding:3px 8px; border-radius:3px;">PPN News</a>
            <a href="https://swarnapriya.com/?p=37012" target="_blank" class="btn btn-sm" style="background:#fff; color:#00772D; font-weight:700; font-size:11.5px; padding:3px 8px; border-radius:3px;">स्वर्णप्रिया</a>
            <a href="https://bahujanvichar.com/raising-questions-regarding-voters-rights-and-the-accountability-of-democratic-institutions-is-the-democratic-right-of-any-citizen/" target="_blank" class="btn btn-sm" style="background:#fff; color:#00772D; font-weight:700; font-size:11.5px; padding:3px 8px; border-radius:3px;">बहुजन विचार</a>
            <a href="https://www.facebook.com/share/18LQencKAf/?mibextid=wwXIfr" target="_blank" class="btn btn-sm" style="background:#1877f2; color:#fff; font-weight:700; font-size:11.5px; padding:3px 8px; border-radius:3px;"><i class="fa fa-facebook"></i> Post</a>
          </div>
        </div>
      </div>
    </div>
    <!-- Top Breaking News Bar End -->
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
        <!-- ============= 03 Oct 2026 Swadesh Special Feature Banner Start ============= -->
        <div class="row mb-4" id="swadesh-special">
          <div class="col-12">
            <div style="background: #f4fbf7; border: 2px solid #00772D; border-radius: 8px; padding: 22px 24px; box-shadow: 0 4px 14px rgba(0,119,45,0.12);">
              <div class="d-flex flex-wrap justify-content-between align-items-center mb-3 pb-2" style="border-bottom: 2px solid #00772D;">
                <span style="background: #00772D; color: #fff; font-weight: 700; font-size: 14px; padding: 5px 14px; border-radius: 4px; letter-spacing: 0.5px;">
                  <i class="fa fa-newspaper-o" aria-hidden="true"></i> राष्ट्रीय दैनिक समाचार पत्र कवरेज • स्वदेश (SWADESH)
                </span>
                <span style="color: #00772D; font-weight: 700; font-size: 14px;">लखनऊ (मुख्य संस्करण) | 03 Oct 2026 | पृष्ठ - 12</span>
              </div>
              <h4 style="color: #004d1a; font-weight: 700; line-height: 1.4; margin-bottom: 16px;">
                2027 का रण: सपा का पीडीए रथ तैयार पर मजबूत सारथी की दरकार — “लोकदल इंडिया गठबंधन का मजबूत घटक है, मिलकर बनाएंगे सरकार” : राष्ट्रीय अध्यक्ष चौधरी सुनील सिंह
              </h4>
              <div class="row align-items-start">
                <div class="col-12 col-lg-4 mb-3 mb-lg-0">
                  <a data-lightbox="press-clippings" href="img/news/latest-news/news-76.jpeg" title="स्वदेश समाचार पत्र (03 Oct 2026) बड़ा देखने के लिए क्लिक करें">
                    <img src="img/news/latest-news/news-76.jpeg" alt="स्वदेश समाचार पत्र कवरेज - 03 Oct 2026" style="width: 100%; border-radius: 6px; border: 1px solid #00772D; box-shadow: 0 2px 8px rgba(0,0,0,0.15);" loading="lazy" decoding="async">
                  </a>
                  <div class="text-center mt-2">
                    <a data-lightbox="press-clippings" href="img/news/latest-news/news-76.jpeg" class="btn btn-sm btn-outline-success" style="font-weight: 600; width: 100%;">
                      <i class="fa fa-search-plus"></i> स्वदेश पूरा अख़बार बड़ा देखें
                    </a>
                  </div>
                </div>
                <div class="col-12 col-lg-8" style="font-size: 15.5px; line-height: 1.8; color: #1f2937; text-align: justify;">
                  <p class="mb-2"><strong>लखनऊ।</strong> प्रमुख राष्ट्रीय दैनिक <strong>‘स्वदेश’</strong> के 3 अक्टूबर 2026 के मुख्य संस्करण (पेज 12) में उत्तर प्रदेश विधानसभा चुनाव 2027 के सियासी समीकरणों और विपक्षी एकजुटता पर विस्तृत चुनावी विश्लेषण प्रकाशित हुआ है।</p>
                  <div style="background: #e8f5e9; border-left: 4px solid #00772D; padding: 14px 18px; margin: 12px 0; border-radius: 0 6px 6px 0;">
                    <p style="color: #004d1a; font-weight: 700; font-size: 16px; margin-bottom: 6px;">
                      <i class="fa fa-quote-left"></i> लोकदल राष्ट्रीय अध्यक्ष चौधरी सुनील सिंह का वक्तव्य:
                    </p>
                    <p style="font-size: 15px; font-weight: 600; color: #1b5e20; line-height: 1.7; margin-bottom: 0;">
                      “लोकदल इंडिया गठबंधन का मजबूत घटक है। यूपी में गठबंधन के साथ मिलकर विधानसभा चुनाव लड़ा जाएगा। लोकदल अपनी ऐतिहासिक विचारधारा, संगठनात्मक ताकत, किसानों, गरीबों एवं युवाओं के मुद्दों को लेकर पूरी मजबूती से जनता के बीच जाएगा। उम्मीद है कि इंडिया एलायंस 27 में सरकार बनाएगा।”
                    </p>
                  </div>
                  <p class="mb-2">अख़बार ने रेखांकित किया है कि 2027 के चुनाव में सपा के पीडीए रथ के लिए लोकदल जैसा मजबूत सारथी किसान-मजदूर वर्ग को एकजुट करने में सबसे निर्णायक भूमिका निभाएगा।</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- ============= 03 Oct 2026 Swadesh Special Feature Banner End ============= -->

        <!-- ============= Official Press Statement Full-Text Banner Start ============= -->
        <div class="row mb-4">
          <div class="col-12">
            <div style="background: #fff8f8; border: 2px solid #b30000; border-radius: 8px; padding: 22px 24px; box-shadow: 0 4px 14px rgba(179,0,0,0.12);">
              <div class="d-flex flex-wrap justify-content-between align-items-center mb-3 pb-2" style="border-bottom: 2px solid #b30000;">
                <span style="background: #b30000; color: #fff; font-weight: 700; font-size: 14px; padding: 5px 14px; border-radius: 4px; letter-spacing: 0.5px;">
                  <i class="fa fa-bullhorn" aria-hidden="true"></i> लोकदल ताज़ा प्रेस अपडेट • LOKDAL BREAKING UPDATE
                </span>
                <span style="color: #b30000; font-weight: 700; font-size: 14px;">नई दिल्ली (जंतर-मंतर) | 02 Oct 2026</span>
              </div>
              <h4 style="color: #111; font-weight: 700; line-height: 1.4; margin-bottom: 16px;">
                गांधी जयंती पर जंतर-मंतर से लोकदल ने शुरू किया ‘जेल भरो आंदोलन’ : राष्ट्रीय अध्यक्ष चौधरी सुनील सिंह समेत सैकड़ों कार्यकर्ता पुलिस हिरासत में
              </h4>
              <div class="row align-items-start">
                <div class="col-12 col-lg-5 mb-3 mb-lg-0">
                  <!-- Main Live Image: Police Detention Bus -->
                  <a data-lightbox="jansabha" href="img/news/latest-news/news-78.jpeg" title="जंतर-मंतर पर दिल्ली पुलिस बस में हिरासत के दौरान राष्ट्रीय अध्यक्ष चौधरी सुनील सिंह एवं नेतागण">
                    <img src="img/news/latest-news/news-78.jpeg" alt="दिल्ली पुलिस बस में राष्ट्रीय अध्यक्ष चौधरी सुनील सिंह" style="width: 100%; max-height: 380px; object-fit: cover; border-radius: 6px; border: 2px solid #b30000; box-shadow: 0 2px 8px rgba(0,0,0,0.18);" loading="lazy" decoding="async">
                  </a>
                  <p class="text-center font-weight-bold mt-1 mb-2" style="font-size: 12.5px; color: #b30000;">
                    <i class="fa fa-camera"></i> जंतर-मंतर: दिल्ली पुलिस हिरासत बस से राष्ट्रीय अध्यक्ष चौधरी सुनील सिंह व नेता
                  </p>

                  <!-- Thumbnail Gallery -->
                  <div class="row no-gutters mb-3" style="gap: 6px;">
                    <div class="col">
                      <a data-lightbox="jansabha" href="img/news/latest-news/news-77.jpeg" title="राष्ट्रीय सुदर्शन अख़बार रिपोर्ट: गांधी जयंती पर जंतर-मंतर से लोकदल ने शुरू किया जेल भरो आंदोलन">
                        <img src="img/news/latest-news/news-77.jpeg" alt="राष्ट्रीय सुदर्शन रिपोर्ट" style="width: 100%; height: 70px; object-fit: cover; border-radius: 4px; border: 1px solid #999;">
                        <span class="d-block text-center" style="font-size: 10.5px; color: #444; line-height: 1.2; margin-top: 2px;">सुदर्शन अख़बार</span>
                      </a>
                    </div>
                    <div class="col">
                      <a data-lightbox="jansabha" href="img/news/latest-news/news-71.jpeg" title="Cherish Times: जंतर-मंतर विरोध-प्रदर्शन ग्राउंड फोटो">
                        <img src="img/news/latest-news/news-71.jpeg" alt="जंतर-मंतर प्रदर्शन" style="width: 100%; height: 70px; object-fit: cover; border-radius: 4px; border: 1px solid #999;">
                        <span class="d-block text-center" style="font-size: 10.5px; color: #444; line-height: 1.2; margin-top: 2px;">प्रदर्शन ग्राउंड</span>
                      </a>
                    </div>
                    <div class="col">
                      <a data-lightbox="jansabha" href="img/news/latest-news/news-76.jpeg" title="स्वदेश (03 Oct 2026): 2027 का रण: सपा का पीडीए रथ">
                        <img src="img/news/latest-news/news-76.jpeg" alt="स्वदेश अख़बार 03 Oct" style="width: 100%; height: 70px; object-fit: cover; border-radius: 4px; border: 1px solid #999;">
                        <span class="d-block text-center" style="font-size: 10.5px; color: #444; line-height: 1.2; margin-top: 2px;">स्वदेश (03 Oct)</span>
                      </a>
                    </div>
                  </div>

                  <div class="d-flex flex-column" style="gap: 8px;">
                    <a href="#exclusive-videos" class="btn btn-sm" style="background: #ff0000; color: #fff; font-weight: 700; border-radius: 4px; padding: 8px 10px; text-align: center; box-shadow: 0 0 10px rgba(255,0,0,0.5);">
                      <i class="fa fa-play-circle" aria-hidden="true"></i> 🔴 2 एक्सक्लूसिव लाइव वीडियो देखें (Police Bus & Ground)
                    </a>
                    <a href="https://youtu.be/6Tz2jiiP7G0?si=_fLFHVCDp-0oT_Jc" target="_blank" class="btn btn-sm" style="background: #cc0000; color: #fff; font-weight: 600; border-radius: 4px; padding: 7px 10px; text-align: center;">
                      <i class="fa fa-youtube-play" aria-hidden="true"></i> 4tv News पर वीडियो देखें
                    </a>
                    <a href="https://www.facebook.com/share/18LQencKAf/?mibextid=wwXIfr" target="_blank" class="btn btn-sm" style="background: #1877f2; color: #fff; font-weight: 600; border-radius: 4px; padding: 7px 10px; text-align: center;">
                      <i class="fa fa-facebook-official" aria-hidden="true"></i> लोकदल आधिकारिक फेसबुक पोस्ट देखें
                    </a>
                    <a href="https://www.facebook.com/share/v/1QLV5avxig/" target="_blank" class="btn btn-sm" style="background: #2d88ff; color: #fff; font-weight: 600; border-radius: 4px; padding: 7px 10px; text-align: center;">
                      <i class="fa fa-play-circle" aria-hidden="true"></i> बहुजन विचार फेसबुक वीडियो देखें
                    </a>
                    <a href="https://www.facebook.com/share/v/18CwLzxjMe/" target="_blank" class="btn btn-sm" style="background: #0056b3; color: #fff; font-weight: 600; border-radius: 4px; padding: 7px 10px; text-align: center;">
                      <i class="fa fa-video-camera" aria-hidden="true"></i> PPN News फेसबुक लाइव वीडियो देखें
                    </a>
                  </div>
                </div>
                <div class="col-12 col-lg-7" style="font-size: 15.5px; line-height: 1.75; color: #1f2937; text-align: justify;">
                  <p class="mb-2"><strong>नई दिल्ली।</strong> 2 अक्टूबर को गांधी जयंती के पावन अवसर पर दिल्ली के ऐतिहासिक जंतर-मंतर पर मतदाता अधिकारों, निष्पक्ष व पारदर्शी चुनावी प्रक्रिया और लोकतांत्रिक संस्थाओं की जवाबदेही को लेकर आयोजित विशाल विरोध-प्रदर्शन में लोकदल के राष्ट्रीय अध्यक्ष एवं पूर्व एमएलसी <strong>चौधरी सुनील सिंह</strong> के नेतृत्व में <strong>‘जेल भरो आंदोलन’</strong> का आगाज किया गया।</p>
                  <p class="mb-2">प्रदर्शन के दौरान भारी पुलिस बल की तैनाती के बीच दिल्ली पुलिस ने राष्ट्रीय अध्यक्ष चौधरी सुनील सिंह सहित किसानों, युवाओं और आंदोलनकारियों को हिरासत में लिया।</p>
                  <p class="mb-2">हिरासत में लिए जाने के दौरान चौधरी सुनील सिंह ने मीडिया से कहा कि <em>“यह आंदोलन किसी व्यक्ति विशेष के खिलाफ नहीं है, बल्कि देश के मतदाता के संवैधानिक अधिकार, पारदर्शी व निष्पक्ष चुनावी व्यवस्था और लोकतांत्रिक संस्थाओं की जवाबदेही को सुनिश्चित करने के लिए है। वोटर लिस्ट में गड़बड़ी और संवैधानिक संस्थाओं पर उठ रहे सवालों का समाधान संविधान के दायरे में होना ही चाहिए।”</em></p>
                  <p class="mb-2" style="background: #fde8e8; border-left: 4px solid #b30000; padding: 10px 14px; font-weight: 600; color: #7f0000;">
                    चौधरी सुनील सिंह ने हुंकार भरते हुए कहा: <strong>“यह सिर्फ शुरुआत है! लोकदल और इंडिया गठबंधन का जेल भरो आंदोलन शुरू हो चुका है — अब देश का किसान और नौजवान अपने अधिकारों की रक्षा के लिए रुकने वाले नहीं हैं।”</strong>
                  </p>
                  <div class="mt-3 pt-2" style="border-top: 1px solid #e5e7eb;">
                    <strong style="color: #111; font-size: 14px; display: block; margin-bottom: 8px;">विस्तृत मीडिया कवरेज एवं समाचार रिपोर्ट्स पढ़ें:</strong>
                    <div class="d-flex flex-wrap" style="gap: 8px;">
                      <a href="https://www.cherishtimes.in/uttar-pradesh/90755" target="_blank" class="btn btn-sm btn-outline-danger" style="font-weight: 600;">
                        <i class="fa fa-newspaper-o"></i> Cherish Times रिपोर्ट
                      </a>
                      <a href="https://suryodaybharat.com/lokdals-fill-the-jails-protest-against-the-election-commissioner-at-jantar-mantar-national-president-chaudhary-sunil-singh-in-police-custody/" target="_blank" class="btn btn-sm btn-outline-danger" style="font-weight: 600;">
                        <i class="fa fa-newspaper-o"></i> सूर्योदय भारत रिपोर्ट
                      </a>
                      <a href="https://swarnapriya.com/?p=37012" target="_blank" class="btn btn-sm btn-outline-danger" style="font-weight: 600;">
                        <i class="fa fa-newspaper-o"></i> स्वर्णप्रिया न्यूज़
                      </a>
                      <a href="https://bahujanvichar.com/raising-questions-regarding-voters-rights-and-the-accountability-of-democratic-institutions-is-the-democratic-right-of-any-citizen/" target="_blank" class="btn btn-sm btn-outline-danger" style="font-weight: 600;">
                        <i class="fa fa-newspaper-o"></i> बहुजन विचार रिपोर्ट
                      </a>
                      <a href="https://prakashprabhaw.com/khabar-hatke/jail-bharo-andolan/detail" target="_blank" class="btn btn-sm btn-outline-danger" style="font-weight: 600;">
                        <i class="fa fa-newspaper-o"></i> Prakash Prabhaw News
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Previous Statement Toggle / Archive Section -->
            <div class="mt-3" style="background: #f7fbf8; border: 1px solid #00772D; border-radius: 6px; padding: 12px 18px;">
              <div class="d-flex flex-wrap justify-content-between align-items-center">
                <span style="color: #00772D; font-weight: 700; font-size: 13.5px;">
                  <i class="fa fa-file-text-o"></i> पूर्व प्रेस विज्ञप्ति (28 Sep 2026): गठबंधन को कमजोर करने वाले बयानों से बचें, सभी साथी एकजुट रहें : सुनील सिंह
                </span>
                <a class="btn btn-sm btn-success" data-toggle="collapse" href="#prevStatementCollapse" role="button" aria-expanded="false" aria-controls="prevStatementCollapse" style="font-size: 12px; padding: 3px 10px; background: #00772D;">
                  पढ़ें / Read <i class="fa fa-angle-down"></i>
                </a>
              </div>
              <div class="collapse mt-3 pt-3" id="prevStatementCollapse" style="border-top: 1px dashed #00772D;">
                <div class="row align-items-start">
                  <div class="col-12 col-lg-3 mb-2 mb-lg-0">
                    <a data-lightbox="jansabha" href="img/news/latest-news/news-63.jpeg" title="प्रेस विज्ञप्ति बड़ा देखने के लिए क्लिक करें">
                      <img src="img/news/latest-news/news-63.jpeg" alt="गठबंधन को कमजोर करने वाले बयानों से बचें" style="width: 100%; border-radius: 4px;" loading="lazy" decoding="async">
                    </a>
                  </div>
                  <div class="col-12 col-lg-9" style="font-size: 14px; line-height: 1.6; color: #333;">
                    <p class="mb-1"><strong>लखनऊ।</strong> लोकदल के राष्ट्रीय अध्यक्ष एवं पूर्व एमएलसी चौधरी सुनील सिंह ने कहा कि उत्तर प्रदेश में INDIA गठबंधन को मजबूत बनाए रखने की जरूरत है। गठबंधन के किसी भी साथी अथवा नेता की ओर से ऐसे बयान नहीं आने चाहिए, जिससे विपक्षी एकता कमजोर हो। सपा और कांग्रेस नेतृत्व अपने नेताओं के बयानों पर ध्यान दें ताकि विपक्षी एकता अटूट रहे।</p>
                    <div class="mt-2">
                      <a href="https://x.com/lokdalindia/status/2104572588303565103?s=46&t=_2mEBmLj46j89OPjnvYbbg" target="_blank" class="btn btn-sm btn-dark" style="font-size: 11px;"><i class="fa fa-twitter"></i> X Video</a>
                      <a href="https://www.facebook.com/share/v/19fTgFLpLJ/?mibextid=wwXIfr" target="_blank" class="btn btn-sm btn-primary" style="font-size: 11px;"><i class="fa fa-facebook"></i> FB Video</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
        <!-- ============= Official Press Statement Full-Text Banner End ============= -->

        <!-- ============= EXCLUSIVE LIVE VIDEO COVERAGE SECTION START ============= -->
        <div class="row mb-5" id="exclusive-videos">
          <div class="col-12">
            <div style="background: linear-gradient(135deg, #1a0000 0%, #380000 50%, #1a0000 100%); border: 3px solid #ffcc00; border-radius: 12px; padding: 25px 24px; box-shadow: 0 10px 35px rgba(179,0,0,0.4); position: relative; overflow: hidden;">
              <!-- Header -->
              <div class="d-flex flex-wrap justify-content-between align-items-center mb-4 pb-3" style="border-bottom: 2px solid rgba(255, 204, 0, 0.45);">
                <div class="d-flex align-items-center flex-wrap mb-2 mb-md-0">
                  <span style="background: #ff0000; color: #fff; font-weight: 800; font-size: 14.5px; padding: 6px 16px; border-radius: 30px; letter-spacing: 0.8px; display: inline-flex; align-items: center; box-shadow: 0 0 16px rgba(255,0,0,0.7);">
                    <i class="fa fa-circle mr-2" style="font-size: 11px; animation: blinker 1s linear infinite;"></i>
                    एक्सक्लूसिव लाइव वीडियो • EXCLUSIVE LIVE FOOTAGE
                  </span>
                  <span class="ml-md-3 mt-2 mt-md-0 font-weight-bold" style="color: #ffeb3b; font-size: 15px;">
                    <i class="fa fa-star text-warning"></i> अत्यंत महत्वपूर्ण — जंतर-मंतर जेल भरो आंदोलन (02 Oct 2026)
                  </span>
                </div>
                <div>
                  <span class="badge badge-warning px-3 py-2 font-weight-bold" style="font-size: 13px; color: #111;">
                    <i class="fa fa-shield"></i> ग्राउंड रिपोर्ट व वीडियो साक्ष्य
                  </span>
                </div>
              </div>

              <!-- Two Featured Video Players -->
              <div class="row">
                <!-- Video 1 -->
                <div class="col-12 col-lg-6 mb-4 mb-lg-0">
                  <div style="background: rgba(255,255,255,0.06); border: 2px solid rgba(255, 204, 0, 0.6); border-radius: 10px; padding: 18px; height: 100%; display: flex; flex-direction: column; justify-content: space-between; box-shadow: 0 4px 18px rgba(0,0,0,0.5);">
                    <div>
                      <div class="d-flex justify-content-between align-items-center mb-2">
                        <span class="badge badge-danger px-2 py-1" style="font-size: 12px; font-weight: 700; background: #e60000;">
                          <i class="fa fa-video-camera"></i> वीडियो 1: हिरासत बस से लाइव संदेश
                        </span>
                        <span style="color: #ffeb3b; font-size: 12.5px; font-weight: 700;">
                          <i class="fa fa-clock-o"></i> 0:40 Min • HD
                        </span>
                      </div>
                      <h5 style="color: #ffffff; font-size: 16px; font-weight: 700; line-height: 1.45; margin-bottom: 14px;">
                        जंतर-मंतर: दिल्ली पुलिस हिरासत बस से राष्ट्रीय अध्यक्ष चौधरी सुनील सिंह व लोकदल कार्यकर्ताओं का लाइव संदेश
                      </h5>
                    </div>
                    
                    <div style="position: relative; border-radius: 8px; overflow: hidden; background: #000; border: 2px solid #555;">
                      <video controls preload="metadata" poster="img/news/latest-news/news-78.jpeg" style="width: 100%; height: 360px; object-fit: contain; background: #000;">
                        <source src="video/wp-video-7.mp4" type="video/mp4">
                        आपका ब्राउज़र वीडियो प्लेबैक को सपोर्ट नहीं करता।
                      </video>
                    </div>

                    <div class="mt-3" style="color: #e2e8f0; font-size: 13.5px; line-height: 1.6;">
                      <p class="mb-0">
                        <strong style="color: #ffcc00;"><i class="fa fa-info-circle"></i> वीडियो विवरण:</strong> 
                        गांधी जयंती पर जंतर-मंतर पर पुलिस द्वारा हिरासत में लिए जाने के बाद पुलिस वैन के अंदर से राष्ट्रीय अध्यक्ष <strong>चौधरी सुनील सिंह</strong> एवं युवा व किसान नेताओं द्वारा लोकतंत्र और मतदाता अधिकारों की रक्षा के संकल्प का सीधा लाइव वीडियो।
                      </p>
                    </div>
                  </div>
                </div>

                <!-- Video 2 -->
                <div class="col-12 col-lg-6">
                  <div style="background: rgba(255,255,255,0.06); border: 2px solid rgba(255, 204, 0, 0.6); border-radius: 10px; padding: 18px; height: 100%; display: flex; flex-direction: column; justify-content: space-between; box-shadow: 0 4px 18px rgba(0,0,0,0.5);">
                    <div>
                      <div class="d-flex justify-content-between align-items-center mb-2">
                        <span class="badge badge-warning px-2 py-1 text-dark" style="font-size: 12px; font-weight: 700; background: #ffc107;">
                          <i class="fa fa-television"></i> वीडियो 2: ग्राउंड कवरेज व मीडिया घेराव
                        </span>
                        <span style="color: #ffeb3b; font-size: 12.5px; font-weight: 700;">
                          <i class="fa fa-clock-o"></i> 0:25 Min • Ground TV Report
                        </span>
                      </div>
                      <h5 style="color: #ffffff; font-size: 16px; font-weight: 700; line-height: 1.45; margin-bottom: 14px;">
                        जंतर-मंतर ग्राउंड कवरेज: धारा 163 लागू होने के बीच भारी पुलिस बल, नेशनल मीडिया और लोकदल का विशाल आंदोलन
                      </h5>
                    </div>
                    
                    <div style="position: relative; border-radius: 8px; overflow: hidden; background: #000; border: 2px solid #555;">
                      <video controls preload="metadata" poster="video/wp-video-8-thumb.jpg" style="width: 100%; height: 360px; object-fit: contain; background: #000;">
                        <source src="video/wp-video-8.mp4" type="video/mp4">
                        आपका ब्राउज़र वीडियो प्लेबैक को सपोर्ट नहीं करता।
                      </video>
                    </div>

                    <div class="mt-3" style="color: #e2e8f0; font-size: 13.5px; line-height: 1.6;">
                      <p class="mb-0">
                        <strong style="color: #ffcc00;"><i class="fa fa-info-circle"></i> वीडियो विवरण:</strong> 
                        दिल्ली में धारा 163 लागू होने के बावजूद जंतर-मंतर पर पुलिस बसों और छावनी में तब्दील क्षेत्र में नेशनल मीडिया के कैमरों से घिरा लोकदल का ऐतिहासिक 'जेल भरो आंदोलन'।
                      </p>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Quick Video Actions Bar -->
              <div class="mt-4 pt-3 d-flex flex-wrap justify-content-between align-items-center" style="border-top: 1px dashed rgba(255, 204, 0, 0.45);">
                <div class="d-flex align-items-center text-white" style="font-size: 14px;">
                  <i class="fa fa-check-circle text-success mr-2 font-weight-bold"></i>
                  <span>सीधे यहीं प्ले करें या डाउनलोड करके साझा करें — किसान व संविधान विरोधी नीतियों के खिलाफ साक्ष्य</span>
                </div>
                <div class="d-flex flex-wrap mt-2 mt-md-0" style="gap: 8px;">
                  <a href="video/wp-video-7.mp4" download class="btn btn-sm btn-outline-warning" style="font-weight: 700; border-width: 1.5px;">
                    <i class="fa fa-download"></i> वीडियो 1 डाउनलोड करें (4.8 MB)
                  </a>
                  <a href="video/wp-video-8.mp4" download class="btn btn-sm btn-outline-warning" style="font-weight: 700; border-width: 1.5px;">
                    <i class="fa fa-download"></i> वीडियो 2 डाउनलोड करें (5.0 MB)
                  </a>
                </div>
              </div>

            </div>
          </div>
        </div>
        <!-- ============= EXCLUSIVE LIVE VIDEO COVERAGE SECTION END ============= -->
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
                    foreach($activitiesDb as $row){
                    
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
                      <div class="col-12 col-md-6 d-flex flex-column justify-content-between">
                        <div class="world-catagory-slider owl-carousel wow fadeInUpBig" data-wow-delay="0.1s">
                          <!-- Single Blog Post (Exclusive Video 1: Bus Message) -->
                          <div class="single-blog-post">
                            <a href="#exclusive-videos" class="headline">
                              <div class="post-thumbnail" style="position: relative;">
                                <img src="img/news/latest-news/news-78.jpeg" alt="जंतर-मंतर हिरासत बस से लाइव वीडियो संदेश" loading="lazy" decoding="async">
                                <span class="video-btn"><i class="fa fa-play"></i></span>
                                <span style="position: absolute; top: 10px; left: 10px; background: #ff0000; color: #fff; font-size: 11px; font-weight: 800; padding: 3px 8px; border-radius: 4px; box-shadow: 0 2px 8px rgba(0,0,0,0.5);">🔴 EXCLUSIVE VIDEO</span>
                              </div>
                              <div class="post-content">
                                <h5>🔴 जंतर-मंतर: दिल्ली पुलिस हिरासत बस से राष्ट्रीय अध्यक्ष चौधरी सुनील सिंह का लाइव संदेश</h5>
                                <p>By लोकदल मीडिया टीम (Live On-Spot Footage)</p>
                                <div class="post-meta">
                                  <p>Delhi Police Custody Video - 02 Oct 2026</p>
                                </div>
                              </div>
                            </a>
                          </div>
                          <!-- Single Blog Post (Exclusive Video 2: Ground Coverage) -->
                          <div class="single-blog-post">
                            <a href="#exclusive-videos" class="headline">
                              <div class="post-thumbnail" style="position: relative;">
                                <img src="video/wp-video-8-thumb.jpg" alt="जंतर-मंतर ग्राउंड टीवी कवरेज" loading="lazy" decoding="async">
                                <span class="video-btn"><i class="fa fa-play"></i></span>
                                <span style="position: absolute; top: 10px; left: 10px; background: #ff9900; color: #000; font-size: 11px; font-weight: 800; padding: 3px 8px; border-radius: 4px; box-shadow: 0 2px 8px rgba(0,0,0,0.5);">🔴 GROUND REPORT VIDEO</span>
                              </div>
                              <div class="post-content">
                                <h5>🔴 जंतर-मंतर ग्राउंड कवरेज: धारा 163 के बीच नेशनल मीडिया व भारी पुलिस बल का घेराव</h5>
                                <p>By नेशनल मीडिया ग्राउंड रिपोर्ट</p>
                                <div class="post-meta">
                                  <p>Ground TV Coverage - 02 Oct 2026</p>
                                </div>
                              </div>
                            </a>
                          </div>
                          <!-- Single Blog Post (Swadesh 03 Oct 2026) -->
                          <div class="single-blog-post">
                            <a data-lightbox="jansabha" href="img/news/latest-news/news-76.jpeg" class="headline">
                              <div class="post-thumbnail">
                                <img src="img/news/latest-news/news-76.jpeg" alt="स्वदेश (03 Oct): 2027 का रण: सपा का पीडीए रथ — “लोकदल इंडिया गठबंधन का मजबूत घटक है” : चौधरी सुनील सिंह" loading="lazy" decoding="async">
                              </div>
                              <div class="post-content">
                                <h5>2027 का रण: सपा का पीडीए रथ तैयार पर मजबूत सारथी की दरकार — “लोकदल इंडिया गठबंधन का मजबूत घटक है” : सुनील सिंह</h5>
                                <p>By स्वदेश (Swadesh National Daily)</p>
                                <div class="post-meta">
                                  <p>Swadesh Lucknow - 03 Oct 2026</p>
                                </div>
                              </div>
                            </a>
                          </div>
                          <!-- Single Blog Post (Rashtriya Sudarshan Paper) -->
                          <div class="single-blog-post">
                            <a data-lightbox="jansabha" href="img/news/latest-news/news-77.jpeg" class="headline">
                              <div class="post-thumbnail">
                                <img src="img/news/latest-news/news-77.jpeg" alt="राष्ट्रीय सुदर्शन: गांधी जयंती पर जंतर-मंतर से लोकदल का जेल भरो आंदोलन : चौधरी सुनील सिंह" loading="lazy" decoding="async">
                              </div>
                              <div class="post-content">
                                <h5>गांधी जयंती पर जंतर-मंतर से लोकदल ने शुरू किया जेल भरो आंदोलन : चौधरी सुनील सिंह</h5>
                                <p>By राष्ट्रीय सुदर्शन (Rashtriya Sudarshan)</p>
                                <div class="post-meta">
                                  <p>Rashtriya Sudarshan - 02 Oct 2026</p>
                                </div>
                              </div>
                            </a>
                          </div>
                          <!-- Single Blog Post (Police Detention Bus Live Photo) -->
                          <div class="single-blog-post">
                            <a data-lightbox="jansabha" href="img/news/latest-news/news-78.jpeg" class="headline">
                              <div class="post-thumbnail">
                                <img src="img/news/latest-news/news-78.jpeg" alt="जंतर-मंतर जेल भरो आंदोलन: दिल्ली पुलिस बस में राष्ट्रीय अध्यक्ष चौधरी सुनील सिंह एवं नेतागण" loading="lazy" decoding="async">
                              </div>
                              <div class="post-content">
                                <h5>जंतर-मंतर जेल भरो आंदोलन: दिल्ली पुलिस बस में राष्ट्रीय अध्यक्ष चौधरी सुनील सिंह एवं लोकदल नेतागण</h5>
                                <p>By लोकदल मीडिया टीम (Live On-Spot Photo)</p>
                                <div class="post-meta">
                                  <p>Delhi Police Custody - 02 Oct 2026</p>
                                </div>
                              </div>
                            </a>
                          </div>
                          <!-- Single Blog Post (Cherish Times) -->
                          <div class="single-blog-post">
                            <a href="https://www.cherishtimes.in/uttar-pradesh/90755" target="_blank" class="headline">
                              <div class="post-thumbnail">
                                <img src="img/news/latest-news/news-71.jpeg" alt="गांधी जयंती पर जंतर-मंतर से लोकदल ने शुरू किया जेल भरो आंदोलन : चौधरी सुनील सिंह" loading="lazy" decoding="async">
                              </div>
                              <div class="post-content">
                                <h5>गांधी जयंती पर जंतर-मंतर से लोकदल ने शुरू किया जेल भरो आंदोलन : चौधरी सुनील सिंह</h5>
                                <p>By Cherish Times</p>
                                <div class="post-meta">
                                  <p>Cherish Times News - 02 Oct 2026</p>
                                </div>
                              </div>
                            </a>
                          </div>
                          <!-- Single Blog Post (Suryoday Bharat) -->
                          <div class="single-blog-post">
                            <a href="https://suryodaybharat.com/lokdals-fill-the-jails-protest-against-the-election-commissioner-at-jantar-mantar-national-president-chaudhary-sunil-singh-in-police-custody/" target="_blank" class="headline">
                              <div class="post-thumbnail">
                                <img src="img/news/latest-news/news-70.jpeg" alt="जंतर-मंतर पर लोकदल का चुनाव आयुक्त के विरुद्ध 'जेल भरो आंदोलन'" loading="lazy" decoding="async">
                              </div>
                              <div class="post-content">
                                <h5>जंतर-मंतर पर लोकदल का चुनाव आयुक्त के विरुद्ध 'जेल भरो आंदोलन'; राष्ट्रीय अध्यक्ष चौधरी सुनील सिंह पुलिस हिरासत में</h5>
                                <p>By Suryoday Bharat</p>
                                <div class="post-meta">
                                  <p>Suryoday Bharat - 02 Oct 2026</p>
                                </div>
                              </div>
                            </a>
                          </div>
                          <!-- Single Blog Post (4tv News Satellite YouTube) -->
                          <div class="single-blog-post">
                            <a href="https://youtu.be/6Tz2jiiP7G0?si=_fLFHVCDp-0oT_Jc" target="_blank" class="headline">
                              <div class="post-thumbnail">
                                <img src="img/news/latest-news/news-69.jpeg" alt="4tv News Satellite: गांधी जयंती पर जंतर-मंतर से लोकदल का जेल भरो आंदोलन" loading="lazy" decoding="async">
                              </div>
                              <div class="post-content">
                                <h5>गांधी जयंती पर जंतर-मंतर से लोकदल ने शुरू किया जेल भरो आंदोलन : चौधरी सुनील सिंह — 4tv News</h5>
                                <p>By 4tv News Satellite</p>
                                <div class="post-meta">
                                  <p>YouTube Video - 02 Oct 2026</p>
                                </div>
                              </div>
                            </a>
                          </div>
                          <!-- Single Blog Post (Prakash Prabhaw News) -->
                          <div class="single-blog-post">
                            <a href="https://prakashprabhaw.com/khabar-hatke/jail-bharo-andolan/detail" target="_blank" class="headline">
                              <div class="post-thumbnail">
                                <img src="img/news/latest-news/news-74.jpeg" alt="PPN: गांधी जयंती पर जंतर-मंतर से लोकदल ने शुरू किया जेल भरो आंदोलन" loading="lazy" decoding="async">
                              </div>
                              <div class="post-content">
                                <h5>PPN: गांधी जयंती पर जंतर-मंतर से लोकदल ने शुरू किया जेल भरो आंदोलन : चौधरी सुनील सिंह</h5>
                                <p>By Prakash Prabhaw News</p>
                                <div class="post-meta">
                                  <p>PPN News - 02 Oct 2026</p>
                                </div>
                              </div>
                            </a>
                          </div>
                          <!-- Single Blog Post (Swarnapriya) -->
                          <div class="single-blog-post">
                            <a href="https://swarnapriya.com/?p=37012" target="_blank" class="headline">
                              <div class="post-thumbnail">
                                <img src="img/news/latest-news/news-72.jpeg" alt="स्वर्णप्रिया: जंतर-मंतर से लोकदल का ‘जेल भरो’ आंदोलन" loading="lazy" decoding="async">
                              </div>
                              <div class="post-content">
                                <h5>गांधी जयंती पर जंतर-मंतर से लोकदल का ‘जेल भरो’ आंदोलन, चौधरी सुनील सिंह समेत प्रदर्शनकारी हिरासत में</h5>
                                <p>By Swarnapriya News Agency</p>
                                <div class="post-meta">
                                  <p>Swarnapriya - 02 Oct 2026</p>
                                </div>
                              </div>
                            </a>
                          </div>
                          <!-- Single Blog Post (Bahujan Vichar) -->
                          <div class="single-blog-post">
                            <a href="https://bahujanvichar.com/raising-questions-regarding-voters-rights-and-the-accountability-of-democratic-institutions-is-the-democratic-right-of-any-citizen/" target="_blank" class="headline">
                              <div class="post-thumbnail">
                                <img src="img/news/latest-news/news-73.png" alt="बहुजन विचार: गांधी जयंती पर जंतर-मंतर से लोकदल ने शुरू किया जेल भरो आंदोलन" loading="lazy" decoding="async">
                              </div>
                              <div class="post-content">
                                <h5>गांधी जयंती पर जंतर-मंतर से लोकदल ने शुरू किया जेल भरो आंदोलन : चौधरी सुनील सिंह</h5>
                                <p>By Bahujan Vichar</p>
                                <div class="post-meta">
                                  <p>Bahujan Vichar - 02 Oct 2026</p>
                                </div>
                              </div>
                            </a>
                          </div>
                          <!-- Single Blog Post (Lokdal Official Facebook Post) -->
                          <div class="single-blog-post">
                            <a href="https://www.facebook.com/share/18LQencKAf/?mibextid=wwXIfr" target="_blank" class="headline">
                              <div class="post-thumbnail">
                                <img src="img/news/latest-news/news-75.jpeg" alt="लोकदल आधिकारिक संदेश — जेल भरो आंदोलन" loading="lazy" decoding="async">
                              </div>
                              <div class="post-content">
                                <h5>यह सिर्फ शुरुआत है! लोकदल और इंडिया गठबंधन का जेल भरो आंदोलन शुरू — किसान और युवा रुकेंगे नहीं!</h5>
                                <p>By Chaudhary Sunil Singh (Lokdal Official)</p>
                                <div class="post-meta">
                                  <p>Facebook Post - 02 Oct 2026</p>
                                </div>
                              </div>
                            </a>
                          </div>
                          <!-- Single Blog Post (Bahujan Vichar Video) -->
                          <div class="single-blog-post">
                            <a href="https://www.facebook.com/share/v/1QLV5avxig/" target="_blank" class="headline">
                              <div class="post-thumbnail">
                                <img src="img/news/latest-news/news-73.png" alt="बहुजन विचार वीडियो: आंदोलन की औपचारिक घोषणा" loading="lazy" decoding="async">
                              </div>
                              <div class="post-content">
                                <h5>लोकदल राष्ट्रीय अध्यक्ष सुनील सिंह ने की पीएम मोदी और गृह मंत्री शाह के खिलाफ आंदोलन चलाने की घोषणा</h5>
                                <p>By Bahujan Vichar (Facebook Video)</p>
                                <div class="post-meta">
                                  <p>Facebook Video - 02 Oct 2026</p>
                                </div>
                              </div>
                            </a>
                          </div>
                          <!-- Single Blog Post (PPN Facebook Video) -->
                          <div class="single-blog-post">
                            <a href="https://www.facebook.com/share/v/18CwLzxjMe/" target="_blank" class="headline">
                              <div class="post-thumbnail">
                                <img src="img/news/latest-news/news-74.jpeg" alt="PPN वीडियो: जंतर-मंतर से लोकदल का जेल भरो आंदोलन" loading="lazy" decoding="async">
                              </div>
                              <div class="post-content">
                                <h5>गांधी जयंती पर जंतर-मंतर से लोकदल का जेल भरो आंदोलन — चौधरी सुनील सिंह पुलिस हिरासत में</h5>
                                <p>By Prakash Prabhaw News (PPN)</p>
                                <div class="post-meta">
                                  <p>Facebook Video - 02 Oct 2026</p>
                                </div>
                              </div>
                            </a>
                          </div>
                          <!-- Single Blog Post (Facebook Video - UN & SIR Voter List Report) -->
                           <div class="single-blog-post">
                              <a href="https://www.facebook.com/share/v/1GrxzshzGh/" target="_blank" class="headline">
                                <div class="post-thumbnail">
                                  <img src="img/news/latest-news/news-68.jpeg" alt="SIR को लेकर भारत की इंटरनेशनल बेइज्जती: ज्ञानेश कुमार पर बुरी तरह भड़का UN" loading="lazy" decoding="async">
                                </div>
                                <div class="post-content">
                                  <h5>SIR को लेकर भारत की इंटरनेशनल बेइज्जती: ज्ञानेश कुमार पर बुरी तरह भड़का UN, 60 दिन में मांगा जवाब!</h5>
                                  <p>By GlobalNews360</p>
                                  <div class="post-meta">
                                    <p>Facebook Video - 29 Sep 2026</p>
                                  </div>
                                </div>
                              </a>
                            </div>
                          <!-- Single Blog Post (Facebook Video - 4PM News Live) -->
                           <div class="single-blog-post">
                              <a href="https://www.facebook.com/share/v/1EZDeNhw2D/" target="_blank" class="headline">
                                <div class="post-thumbnail">
                                  <img src="img/news/latest-news/news-67.jpeg" alt="ज्योतिषी का चौंकाने वाला दावा, ग्रहों ने तय कर दी मोदी और ज्ञानेश कुमार की विदाई!" loading="lazy" decoding="async">
                                </div>
                                <div class="post-content">
                                  <h5>ज्योतिषी का चौंकाने वाला दावा, ग्रहों ने तय कर दी मोदी और ज्ञानेश कुमार की विदाई! — 4PM News LIVE</h5>
                                  <p>By 4PM News Network</p>
                                  <div class="post-meta">
                                    <p>Facebook Video - 29 Sep 2026</p>
                                  </div>
                                </div>
                              </a>
                            </div>
                          <!-- Single Blog Post (Instagram Reel - Tadipaar Analysis) -->
                           <div class="single-blog-post">
                              <a href="https://www.instagram.com/reel/Dc957qETrZV/?stkn=M3dvNjlpZzd4eWs1" target="_blank" class="headline">
                                <div class="post-thumbnail">
                                  <img src="img/news/latest-news/news-66.jpeg" alt="TADIPAAR: अमित शाह और सत्ता की राजनीति का अनसुना सच" loading="lazy" decoding="async">
                                </div>
                                <div class="post-content">
                                  <h5>TADIPAAR: अमित शाह और सत्ता की राजनीति का अनसुना सच — विशेष वीडियो रील</h5>
                                  <p>By Gaurav Shukla</p>
                                  <div class="post-meta">
                                    <p>Instagram Reel - 29 Sep 2026</p>
                                  </div>
                                </div>
                              </a>
                            </div>
                          <!-- Single Blog Post (Official Press Statement - INDIA Alliance Unity) -->
                           <div class="single-blog-post">
                              <a data-lightbox="jansabha" href="img/news/latest-news/news-63.jpeg" class="headline">
                                <div class="post-thumbnail">
                                  <img src="img/news/latest-news/news-63.jpeg" alt="गठबंधन को कमजोर करने वाले बयानों से बचें, सभी साथी एकजुट रहें : सुनील सिंह" loading="lazy" decoding="async">
                                </div>
                                <div class="post-content">
                                  <h5>गठबंधन को कमजोर करने वाले बयानों से बचें, सभी साथी एकजुट रहें : सुनील सिंह</h5>
                                  <p>By Chaudhary Sunil Singh</p>
                                  <div class="post-meta">
                                    <p>Lokdal Press Statement - 28 Sep 2026</p>
                                  </div>
                                </div>
                              </a>
                            </div>
                          <!-- Single Blog Post (X Post - Sunil Singh Video Message) -->
                           <div class="single-blog-post">
                              <a href="https://x.com/lokdalindia/status/2104572588303565103?s=46&t=_2mEBmLj46j89OPjnvYbbg" target="_blank" class="headline">
                                <div class="post-thumbnail">
                                  <img src="img/news/latest-news/news-64.jpeg" alt="लोकदल राष्ट्रीय अध्यक्ष सुनील सिंह का तीखा संदेश — X Video" loading="lazy" decoding="async">
                                </div>
                                <div class="post-content">
                                  <h5>इंडिया गठबंधन उत्तर प्रदेश में पूरी तरह मजबूत, 300+ सीटें लाकर भाजपा को चित करेंगे : सुनील सिंह</h5>
                                  <p>By Lokdal Official (@Lokdalindia)</p>
                                  <div class="post-meta">
                                    <p>X (Twitter) Video - 28 Sep 2026</p>
                                  </div>
                                </div>
                              </a>
                            </div>
                          <!-- Single Blog Post (Facebook Video - Sunil Singh Message) -->
                           <div class="single-blog-post">
                              <a href="https://www.facebook.com/share/v/19fTgFLpLJ/?mibextid=wwXIfr" target="_blank" class="headline">
                                <div class="post-thumbnail">
                                  <img src="img/news/latest-news/news-65.jpeg" alt="लोकदल राष्ट्रीय अध्यक्ष सुनील सिंह का तीखा संदेश — Facebook Video" loading="lazy" decoding="async">
                                </div>
                                <div class="post-content">
                                  <h5>लोकदल राष्ट्रीय अध्यक्ष सुनील सिंह का तीखा संदेश — देशहित का INDIA गठबंधन कमजोर नहीं पड़ना चाहिए</h5>
                                  <p>By Chaudhary Sunil Singh</p>
                                  <div class="post-meta">
                                    <p>Facebook Video - 28 Sep 2026</p>
                                  </div>
                                </div>
                              </a>
                            </div>
                          <!-- Single Blog Post (Instagram Reel) -->
                           <div class="single-blog-post">
                              <a href="https://www.instagram.com/reel/DdyuL0DvquJ/?stkn=eG0zZmVkOWo3YjI4" target="_blank" class="headline">
                                <div class="post-thumbnail">
                                  <img src="video/wp-video-thumb.jpeg" alt="लोकदल वीडियो रील" loading="lazy" decoding="async">
                                </div>
                                <div class="post-content">
                                  <h5>लोकदल विशेष वीडियो रील — राष्ट्रीय अध्यक्ष चौधरी सुनील सिंह</h5>
                                  <p>By Lokdal Team</p>
                                  <div class="post-meta">
                                    <p>Instagram Reel - 28 Sep 2026</p>
                                  </div>
                                </div>
                              </a>
                            </div>
                          <!-- Single Blog Post (Facebook Post - Sunil Singh Statement) -->
                           <div class="single-blog-post">
                              <a href="https://www.facebook.com/share/p/1c9wGrwSyc/?mibextid=wwXIfr" target="_blank" class="headline">
                                <div class="post-thumbnail">
                                  <img src="img/news/latest-news/news-61.jpeg" alt="मुख्य चुनाव आयुक्त ज्ञानेश कुमार पर सुनील सिंह का बयान" loading="lazy" decoding="async">
                                </div>
                                <div class="post-content">
                                  <h5>मुख्य चुनाव आयुक्त ज्ञानेश कुमार को न PM बनना है न CM, फिर सत्ता की बेचैनी क्यों?: सुनील सिंह</h5>
                                  <p>By Chaudhary Sunil Singh</p>
                                  <div class="post-meta">
                                    <p>Facebook Post - 28 Sep 2026</p>
                                  </div>
                                </div>
                              </a>
                            </div>
                          <!-- Single Blog Post (Facebook Video - 4PM News Live) -->
                           <div class="single-blog-post">
                              <a href="https://www.facebook.com/share/v/1Hn2YdNYMt/" target="_blank" class="headline">
                                <div class="post-thumbnail">
                                  <img src="img/news/latest-news/news-60.jpeg" alt="ज्ञानेश कुमार की फजीहत LIVE" loading="lazy" decoding="async">
                                </div>
                                <div class="post-content">
                                  <h5>ज्ञानेश कुमार की फजीहत LIVE || CEC के खिलाफ फिर एकजुट होगा विपक्ष? इस्तीफे के लिए मोर्चेबंदी</h5>
                                  <p>By Ajit Anjum</p>
                                  <div class="post-meta">
                                    <p>Facebook Video - 28 Sep 2026</p>
                                  </div>
                                </div>
                              </a>
                            </div>
                          <!-- Single Blog Post (Rashtriya Sudarshan Paper Clipping) -->
                           <div class="single-blog-post">
                              <a data-lightbox="jansabha" href="img/news/latest-news/news-62.jpeg" class="headline">
                                <div class="post-thumbnail">
                                  <img src="img/news/latest-news/news-62.jpeg" alt="राष्ट्रीय सुदर्शन रिपोर्ट" loading="lazy" decoding="async">
                                </div>
                                <div class="post-content">
                                  <h5>मुख्य चुनाव आयुक्त ज्ञानेश कुमार पर तीखा हमला: राष्ट्रीय सुदर्शन रिपोर्ट</h5>
                                  <p>By Rashtriya Sudarshan</p>
                                  <div class="post-meta">
                                    <p>राष्ट्रीय सुदर्शन - 26 Sep 2026</p>
                                  </div>
                                </div>
                              </a>
                            </div>
                          <!-- Single Blog Post -->
                           <div class="single-blog-post">
                             <a href="https://youtu.be/1sJB7x3NSOE?si=zaO4LPSMuI9tBriI" target="_blank" class="headline">
                               <div class="post-thumbnail">
                                 <img src="https://img.youtube.com/vi/1sJB7x3NSOE/hqdefault.jpg" alt="" loading="lazy" decoding="async">
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
                                 <img src="https://img.youtube.com/vi/jpAGYMw7tx4/hqdefault.jpg" alt="" loading="lazy" decoding="async">
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
                                 <img src="https://img.youtube.com/vi/cvdSkNNIgwU/hqdefault.jpg" alt="" loading="lazy" decoding="async">
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
                                 <img src="img/news/latest-news/wp-image-1.jpeg" alt="" loading="lazy" decoding="async">
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
                                 <img src="img/news/latest-news/news-32.jpeg" alt="" loading="lazy" decoding="async">
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
                                 <img src="img/news/latest-news/news-33.jpeg" alt="" loading="lazy" decoding="async">
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
                                 <img src="img/news/latest-news/news-34.jpeg" alt="" loading="lazy" decoding="async">
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
                                 <img src="img/news/latest-news/news-35.jpeg" alt="" loading="lazy" decoding="async">
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
                                 <img src="video/fb-gathbandhan.jpg" alt="" loading="lazy" decoding="async">
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
                                 <img src="img/news/latest-news/news-31.jpeg" alt="" loading="lazy" decoding="async">
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
                                 <img src="video/fb-soochana.jpg" alt="" loading="lazy" decoding="async">
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
                                 <img src="video/fb-divya.jpg" alt="" loading="lazy" decoding="async">
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
                                <img src="img/news/latest-news/wp-image-1.jpeg" alt="" loading="lazy" decoding="async">
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
                                <img src="img/news/latest-news/news-31.jpeg" alt="" loading="lazy" decoding="async">
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
                                <img src="video/yt-wE9bWrA-IrI.jpg" alt="" loading="lazy" decoding="async">
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
                                <img src="img/news/latest-news/news-29.jpeg" alt="" loading="lazy" decoding="async">
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
                                <img src="img/news/latest-news/news-1.jpeg" alt="" loading="lazy" decoding="async">
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
                                <img src="img/gallery/latest-gallery/gallery-1.jpeg" alt="" loading="lazy" decoding="async">
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
                            foreach($activitiesDb as $rows)
                                {?>
                          <div class="single-blog-post">
                            <a data-lightbox="jansabha" href="../dashboard/<?= $rows['img1'];?>" class="headline">
                              <div class="post-thumbnail">
                                <img src="../dashboard/<?= $rows['img1'];?>" alt="" loading="lazy" decoding="async">
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
                            }
                            ?>          
                        </div>
                          <!-- Single Blog Post (Swadesh 03 Oct 2026) -->
                          <div class="single-blog-post post-style-2 d-flex align-items-center wow fadeInUpBig" data-wow-delay="0.000001s">
                            <div class="post-thumbnail">
                              <a data-lightbox="jansabha" href="img/news/latest-news/news-76.jpeg">
                                <img src="img/news/latest-news/news-76.jpeg" alt="स्वदेश: 2027 का रण: सपा का पीडीए रथ" loading="lazy" decoding="async">
                              </a>
                            </div>
                            <div class="post-content">
                              <a data-lightbox="jansabha" href="img/news/latest-news/news-76.jpeg" class="headline">
                                <div class="headline">
                                  <h5>स्वदेश (03 Oct): 2027 का रण — “लोकदल इंडिया गठबंधन का मजबूत घटक है” : चौधरी सुनील सिंह</h5>
                                </div>
                                <div class="post-meta">
                                  <p>Swadesh Lucknow - 03 Oct 2026</p>
                                </div>
                              </a>
                            </div>
                          </div>
                          <!-- Single Blog Post (Rashtriya Sudarshan Paper) -->
                          <div class="single-blog-post post-style-2 d-flex align-items-center wow fadeInUpBig" data-wow-delay="0.000001s">
                            <div class="post-thumbnail">
                              <a data-lightbox="jansabha" href="img/news/latest-news/news-77.jpeg">
                                <img src="img/news/latest-news/news-77.jpeg" alt="राष्ट्रीय सुदर्शन: गांधी जयंती पर जंतर-मंतर से लोकदल का जेल भरो आंदोलन" loading="lazy" decoding="async">
                              </a>
                            </div>
                            <div class="post-content">
                              <a data-lightbox="jansabha" href="img/news/latest-news/news-77.jpeg" class="headline">
                                <div class="headline">
                                  <h5>गांधी जयंती पर जंतर-मंतर से लोकदल ने शुरू किया जेल भरो आंदोलन : चौधरी सुनील सिंह</h5>
                                </div>
                                <div class="post-meta">
                                  <p>राष्ट्रीय सुदर्शन - 02 Oct 2026</p>
                                </div>
                              </a>
                            </div>
                          </div>
                          <!-- Single Blog Post (Police Detention Bus Live Photo) -->
                          <div class="single-blog-post post-style-2 d-flex align-items-center wow fadeInUpBig" data-wow-delay="0.000001s">
                            <div class="post-thumbnail">
                              <a data-lightbox="jansabha" href="img/news/latest-news/news-78.jpeg">
                                <img src="img/news/latest-news/news-78.jpeg" alt="जंतर-मंतर जेल भरो आंदोलन: दिल्ली पुलिस बस में सुनील सिंह" loading="lazy" decoding="async">
                              </a>
                            </div>
                            <div class="post-content">
                              <a data-lightbox="jansabha" href="img/news/latest-news/news-78.jpeg" class="headline">
                                <div class="headline">
                                  <h5>जंतर-मंतर जेल भरो आंदोलन: दिल्ली पुलिस बस में राष्ट्रीय अध्यक्ष चौधरी सुनील सिंह व नेतागण</h5>
                                </div>
                                <div class="post-meta">
                                  <p>लोकदल लाइव कवरेज (Police Bus) - 02 Oct 2026</p>
                                </div>
                              </a>
                            </div>
                          </div>
                          <!-- Single Blog Post (Cherish Times) -->
                          <div class="single-blog-post post-style-2 d-flex align-items-center wow fadeInUpBig" data-wow-delay="0.000001s">
                            <div class="post-thumbnail">
                              <a href="https://www.cherishtimes.in/uttar-pradesh/90755" target="_blank">
                                <img src="img/news/latest-news/news-71.jpeg" alt="गांधी जयंती पर जंतर-मंतर से लोकदल का जेल भरो आंदोलन" loading="lazy" decoding="async">
                              </a>
                            </div>
                            <div class="post-content">
                              <a href="https://www.cherishtimes.in/uttar-pradesh/90755" target="_blank" class="headline">
                                <div class="headline">
                                  <h5>गांधी जयंती पर जंतर-मंतर से लोकदल ने शुरू किया जेल भरो आंदोलन : चौधरी सुनील सिंह</h5>
                                </div>
                                <div class="post-meta">
                                  <p>Cherish Times News - 02 Oct 2026</p>
                                </div>
                              </a>
                            </div>
                          </div>
                          <!-- Single Blog Post (Suryoday Bharat) -->
                          <div class="single-blog-post post-style-2 d-flex align-items-center wow fadeInUpBig" data-wow-delay="0.000002s">
                            <div class="post-thumbnail">
                              <a href="https://suryodaybharat.com/lokdals-fill-the-jails-protest-against-the-election-commissioner-at-jantar-mantar-national-president-chaudhary-sunil-singh-in-police-custody/" target="_blank">
                                <img src="img/news/latest-news/news-70.jpeg" alt="जंतर-मंतर पर लोकदल का चुनाव आयुक्त के विरुद्ध जेल भरो आंदोलन" loading="lazy" decoding="async">
                              </a>
                            </div>
                            <div class="post-content">
                              <a href="https://suryodaybharat.com/lokdals-fill-the-jails-protest-against-the-election-commissioner-at-jantar-mantar-national-president-chaudhary-sunil-singh-in-police-custody/" target="_blank" class="headline">
                                <div class="headline">
                                  <h5>जंतर-मंतर पर लोकदल का 'जेल भरो आंदोलन'; राष्ट्रीय अध्यक्ष चौधरी सुनील सिंह पुलिस हिरासत में</h5>
                                </div>
                                <div class="post-meta">
                                  <p>सूर्योदय भारत - 02 Oct 2026</p>
                                </div>
                              </a>
                            </div>
                          </div>
                          <!-- Single Blog Post (4tv News Satellite YouTube) -->
                          <div class="single-blog-post post-style-2 d-flex align-items-center wow fadeInUpBig" data-wow-delay="0.000003s">
                            <div class="post-thumbnail">
                              <a href="https://youtu.be/6Tz2jiiP7G0?si=_fLFHVCDp-0oT_Jc" target="_blank">
                                <img src="img/news/latest-news/news-69.jpeg" alt="4tv News: जेल भरो आंदोलन" loading="lazy" decoding="async">
                              </a>
                            </div>
                            <div class="post-content">
                              <a href="https://youtu.be/6Tz2jiiP7G0?si=_fLFHVCDp-0oT_Jc" target="_blank" class="headline">
                                <div class="headline">
                                  <h5>गांधी जयंती पर जंतर-मंतर से लोकदल का जेल भरो आंदोलन : सुनील सिंह — 4tv Video</h5>
                                </div>
                                <div class="post-meta">
                                  <p>4tv News Satellite (YouTube) - 02 Oct 2026</p>
                                </div>
                              </a>
                            </div>
                          </div>
                          <!-- Single Blog Post (Prakash Prabhaw News) -->
                          <div class="single-blog-post post-style-2 d-flex align-items-center wow fadeInUpBig" data-wow-delay="0.000004s">
                            <div class="post-thumbnail">
                              <a href="https://prakashprabhaw.com/khabar-hatke/jail-bharo-andolan/detail" target="_blank">
                                <img src="img/news/latest-news/news-74.jpeg" alt="PPN: जेल भरो आंदोलन" loading="lazy" decoding="async">
                              </a>
                            </div>
                            <div class="post-content">
                              <a href="https://prakashprabhaw.com/khabar-hatke/jail-bharo-andolan/detail" target="_blank" class="headline">
                                <div class="headline">
                                  <h5>PPN: गांधी जयंती पर जंतर-मंतर से लोकदल ने शुरू किया जेल भरो आंदोलन : चौधरी सुनील सिंह</h5>
                                </div>
                                <div class="post-meta">
                                  <p>Prakash Prabhaw News - 02 Oct 2026</p>
                                </div>
                              </a>
                            </div>
                          </div>
                          <!-- Single Blog Post (Facebook Video - UN & SIR Voter List Report) -->
                           <div class="single-blog-post post-style-2 d-flex align-items-center wow fadeInUpBig" data-wow-delay="0.000005s">
                             <div class="post-thumbnail">
                               <a href="https://www.facebook.com/share/v/1GrxzshzGh/" target="_blank">
                                 <img src="img/news/latest-news/news-68.jpeg" alt="SIR को लेकर भारत की इंटरनेशनल बेइज्जती: ज्ञानेश कुमार पर बुरी तरह भड़का UN" loading="lazy" decoding="async">
                               </a>
                             </div>
                             <div class="post-content ">
                               <a href="https://www.facebook.com/share/v/1GrxzshzGh/" target="_blank" class="headline">
                                 <div class="headline">
                                   <h5>SIR को लेकर भारत की इंटरनेशनल बेइज्जती: ज्ञानेश कुमार पर बुरी तरह भड़का UN, 60 दिन में मांगा जवाब!</h5>
                                 </div>
                                 <div class="post-meta">
                                   <p>GlobalNews360 (Facebook Video) - 29 Sep 2026</p>
                                 </div>
                               </a>
                             </div>
                           </div>
                          <!-- Single Blog Post (Facebook Video - 4PM News Live) -->
                           <div class="single-blog-post post-style-2 d-flex align-items-center wow fadeInUpBig" data-wow-delay="0.000003s">
                             <div class="post-thumbnail">
                               <a href="https://www.facebook.com/share/v/1EZDeNhw2D/" target="_blank">
                                 <img src="img/news/latest-news/news-67.jpeg" alt="ज्योतिषी का चौंकाने वाला दावा, ग्रहों ने तय कर दी मोदी और ज्ञानेश कुमार की विदाई!" loading="lazy" decoding="async">
                               </a>
                             </div>
                             <div class="post-content ">
                               <a href="https://www.facebook.com/share/v/1EZDeNhw2D/" target="_blank" class="headline">
                                 <div class="headline">
                                   <h5>ज्योतिषी का चौंकाने वाला दावा, ग्रहों ने तय कर दी मोदी और ज्ञानेश कुमार की विदाई! — 4PM News LIVE</h5>
                                 </div>
                                 <div class="post-meta">
                                   <p>4PM News LIVE (Facebook Video) - 29 Sep 2026</p>
                                 </div>
                               </a>
                             </div>
                           </div>
                          <!-- Single Blog Post (Official Press Statement - INDIA Alliance Unity) -->
                           <div class="single-blog-post post-style-2 d-flex align-items-center wow fadeInUpBig" data-wow-delay="0.000005s">
                             <div class="post-thumbnail">
                               <a data-lightbox="jansabha" href="img/news/latest-news/news-63.jpeg">
                                 <img src="img/news/latest-news/news-63.jpeg" alt="गठबंधन को कमजोर करने वाले बयानों से बचें, सभी साथी एकजुट रहें : सुनील सिंह" loading="lazy" decoding="async">
                               </a>
                             </div>
                             <div class="post-content ">
                               <a data-lightbox="jansabha" href="img/news/latest-news/news-63.jpeg" class="headline">
                                 <div class="headline">
                                   <h5>गठबंधन को कमजोर करने वाले बयानों से बचें, सभी साथी एकजुट रहें : सुनील सिंह</h5>
                                 </div>
                                 <div class="post-meta">
                                   <p>Lokdal Official Press Statement - 28 Sep 2026</p>
                                 </div>
                               </a>
                             </div>
                           </div>
                          <!-- Single Blog Post (X Post - Sunil Singh Video Message) -->
                           <div class="single-blog-post post-style-2 d-flex align-items-center wow fadeInUpBig" data-wow-delay="0.000007s">
                             <div class="post-thumbnail">
                               <a href="https://x.com/lokdalindia/status/2104572588303565103?s=46&t=_2mEBmLj46j89OPjnvYbbg" target="_blank">
                                 <img src="img/news/latest-news/news-64.jpeg" alt="लोकदल राष्ट्रीय अध्यक्ष सुनील सिंह का तीखा संदेश — X Video" loading="lazy" decoding="async">
                               </a>
                             </div>
                             <div class="post-content ">
                               <a href="https://x.com/lokdalindia/status/2104572588303565103?s=46&t=_2mEBmLj46j89OPjnvYbbg" target="_blank" class="headline">
                                 <div class="headline">
                                   <h5>इंडिया गठबंधन उत्तर प्रदेश में पूरी तरह मजबूत, 300+ सीटें लाकर भाजपा को चित करेंगे : सुनील सिंह</h5>
                                 </div>
                                 <div class="post-meta">
                                   <p>Lokdal Official (@Lokdalindia - X Video) - 28 Sep 2026</p>
                                 </div>
                               </a>
                             </div>
                           </div>
                          <!-- Single Blog Post (Facebook Video - Sunil Singh Message) -->
                           <div class="single-blog-post post-style-2 d-flex align-items-center wow fadeInUpBig" data-wow-delay="0.000009s">
                             <div class="post-thumbnail">
                               <a href="https://www.facebook.com/share/v/19fTgFLpLJ/?mibextid=wwXIfr" target="_blank">
                                 <img src="img/news/latest-news/news-65.jpeg" alt="लोकदल राष्ट्रीय अध्यक्ष सुनील सिंह का तीखा संदेश — Facebook Video" loading="lazy" decoding="async">
                               </a>
                             </div>
                             <div class="post-content ">
                               <a href="https://www.facebook.com/share/v/19fTgFLpLJ/?mibextid=wwXIfr" target="_blank" class="headline">
                                 <div class="headline">
                                   <h5>लोकदल राष्ट्रीय अध्यक्ष सुनील सिंह का तीखा संदेश — देशहित का INDIA गठबंधन कमजोर नहीं पड़ना चाहिए</h5>
                                 </div>
                                 <div class="post-meta">
                                   <p>Chaudhary Sunil Singh (Facebook Video) - 28 Sep 2026</p>
                                 </div>
                               </a>
                             </div>
                           </div>
                          <!-- Single Blog Post (Instagram Reel) -->
                           <div class="single-blog-post post-style-2 d-flex align-items-center wow fadeInUpBig" data-wow-delay="0.00001s">
                             <div class="post-thumbnail">
                               <a href="https://www.instagram.com/reel/DdyuL0DvquJ/?stkn=eG0zZmVkOWo3YjI4" target="_blank">
                                 <img src="video/wp-video-thumb.jpeg" alt="लोकदल वीडियो रील" loading="lazy" decoding="async">
                               </a>
                             </div>
                             <div class="post-content ">
                               <a href="https://www.instagram.com/reel/DdyuL0DvquJ/?stkn=eG0zZmVkOWo3YjI4" target="_blank" class="headline">
                                 <div class="headline">
                                   <h5>लोकदल विशेष वीडियो रील — राष्ट्रीय अध्यक्ष चौधरी सुनील सिंह</h5>
                                 </div>
                                 <div class="post-meta">
                                   <p>Instagram Reel - 28 Sep 2026</p>
                                 </div>
                               </a>
                             </div>
                           </div>
                          <!-- Single Blog Post (Facebook Post - Sunil Singh Statement) -->
                          <div class="single-blog-post post-style-2 d-flex align-items-center wow fadeInUpBig" data-wow-delay="0.00002s">
                            <div class="post-thumbnail">
                              <a href="https://www.facebook.com/share/p/1c9wGrwSyc/?mibextid=wwXIfr" target="_blank">
                                <img src="img/news/latest-news/news-61.jpeg" alt="लोकदल आधिकारिक फेसबुक पोस्ट" loading="lazy" decoding="async">
                              </a>
                            </div>
                            <div class="post-content ">
                              <a href="https://www.facebook.com/share/p/1c9wGrwSyc/?mibextid=wwXIfr" target="_blank" class="headline">
                                <div class="headline">
                                  <h5>मुख्य चुनाव आयुक्त ज्ञानेश कुमार को न PM बनना है न CM, फिर सत्ता की बेचैनी क्यों?: सुनील सिंह</h5>
                                </div>
                                <div class="post-meta">
                                  <p>Chaudhary Sunil Singh (Facebook Post) - 28 Sep 2026</p>
                                </div>
                              </a>
                            </div>
                          </div>
                          <!-- Single Blog Post (Facebook Video - 4PM News Live) -->
                          <div class="single-blog-post post-style-2 d-flex align-items-center wow fadeInUpBig" data-wow-delay="0.00003s">
                            <div class="post-thumbnail">
                              <a href="https://www.facebook.com/share/v/1Hn2YdNYMt/" target="_blank">
                                <img src="img/news/latest-news/news-60.jpeg" alt="ज्ञानेश कुमार की फजीहत LIVE" loading="lazy" decoding="async">
                              </a>
                            </div>
                            <div class="post-content ">
                              <a href="https://www.facebook.com/share/v/1Hn2YdNYMt/" target="_blank" class="headline">
                                <div class="headline">
                                  <h5>ज्ञानेश कुमार की फजीहत LIVE || CEC के खिलाफ फिर एकजुट होगा विपक्ष? इस्तीफे के लिए मोर्चेबंदी</h5>
                                </div>
                                <div class="post-meta">
                                  <p>Ajit Anjum (Facebook Video) - 28 Sep 2026</p>
                                </div>
                              </a>
                            </div>
                          </div>
                          <!-- Single Blog Post (Rashtriya Sudarshan Paper Clipping) -->
                          <div class="single-blog-post post-style-2 d-flex align-items-center wow fadeInUpBig" data-wow-delay="0.00004s">
                            <div class="post-thumbnail">
                              <a data-lightbox="jansabha" href="img/news/latest-news/news-62.jpeg">
                                <img src="img/news/latest-news/news-62.jpeg" alt="राष्ट्रीय सुदर्शन रिपोर्ट" loading="lazy" decoding="async">
                              </a>
                            </div>
                            <div class="post-content ">
                              <a data-lightbox="jansabha" href="img/news/latest-news/news-62.jpeg" class="headline">
                                <div class="headline">
                                  <h5>मुख्य चुनाव आयुक्त ज्ञानेश कुमार पर तीखा हमला: राष्ट्रीय सुदर्शन रिपोर्ट</h5>
                                </div>
                                <div class="post-meta">
                                  <p>राष्ट्रीय सुदर्शन - 26 Sep 2026</p>
                                </div>
                              </a>
                            </div>
                          </div>
                          <!-- Single Blog Post (Homepage Exclusive News 48) -->
                         <div class="single-blog-post post-style-2 d-flex align-items-center wow fadeInUpBig" data-wow-delay="0.0001s">
                           <div class="post-thumbnail">
                             <img src="img/news/latest-news/news-48.jpeg" alt="" loading="lazy" decoding="async">
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
                             <img src="img/news/latest-news/news-49.jpeg" alt="" loading="lazy" decoding="async">
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
                             <img src="img/news/latest-news/news-50.jpeg" alt="" loading="lazy" decoding="async">
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
                             <img src="img/news/latest-news/news-51.jpeg" alt="" loading="lazy" decoding="async">
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
                             <img src="img/news/latest-news/news-52.jpeg" alt="" loading="lazy" decoding="async">
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
                             <img src="img/news/latest-news/news-53.jpeg" alt="" loading="lazy" decoding="async">
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
                             <img src="img/news/latest-news/news-54.jpeg" alt="" loading="lazy" decoding="async">
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
                             <img src="img/news/latest-news/news-55.jpeg" alt="" loading="lazy" decoding="async">
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
                             <img src="img/news/latest-news/news-56.jpeg" alt="" loading="lazy" decoding="async">
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
                             <img src="img/news/latest-news/news-46.jpeg" alt="" loading="lazy" decoding="async">
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
                             <img src="img/news/latest-news/news-47.jpeg" alt="" loading="lazy" decoding="async">
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
                             <img src="img/news/latest-news/news-46.jpeg" alt="" loading="lazy" decoding="async">
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
                             <img src="img/news/latest-news/news-47.jpeg" alt="" loading="lazy" decoding="async">
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
                             <img src="img/news/latest-news/news-46.jpeg" alt="" loading="lazy" decoding="async">
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
                             <img src="img/news/latest-news/news-47.jpeg" alt="" loading="lazy" decoding="async">
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
                       </div>
                      <div class="col-12 col-md-6 d-flex flex-column justify-content-between">
                         <!-- Single Blog Post (Instagram Reel - Tadipaar Analysis) -->
                         <div class="single-blog-post post-style-2 d-flex align-items-center wow fadeInUpBig" data-wow-delay="0.0065s">
                           <div class="post-thumbnail">
                             <a href="https://www.instagram.com/reel/Dc957qETrZV/?stkn=M3dvNjlpZzd4eWs1" target="_blank">
                               <img src="img/news/latest-news/news-66.jpeg" alt="TADIPAAR: अमित शाह और सत्ता की राजनीति का अनसुना सच" loading="lazy" decoding="async">
                             </a>
                           </div>
                           <div class="post-content ">
                             <a href="https://www.instagram.com/reel/Dc957qETrZV/?stkn=M3dvNjlpZzd4eWs1" target="_blank" class="headline">
                               <div class="headline">
                                 <h5>TADIPAAR: अमित शाह और सत्ता की राजनीति का अनसुना सच — विशेष वीडियो रील</h5>
                               </div>
                               <div class="post-meta">
                                 <p>Instagram Reel - 29 Sep 2026</p>
                               </div>
                             </a>
                           </div>
                         </div>
                         <!-- Single Blog Post (Official Press Statement Highlight) -->
                         <div class="single-blog-post post-style-2 d-flex align-items-center wow fadeInUpBig" data-wow-delay="0.0075s">
                           <div class="post-thumbnail">
                             <a data-lightbox="jansabha" href="img/news/latest-news/news-63.jpeg">
                               <img src="img/news/latest-news/news-63.jpeg" alt="लोकदल प्रेस वक्तव्य" loading="lazy" decoding="async">
                             </a>
                           </div>
                           <div class="post-content ">
                             <a data-lightbox="jansabha" href="img/news/latest-news/news-63.jpeg" class="headline">
                               <div class="headline">
                                 <h5>लोकदल का मुख्य उद्देश्य लोकतांत्रिक संस्थाओं की मजबूती व किसानों-युवाओं के अधिकारों की रक्षा : सुनील सिंह</h5>
                               </div>
                               <div class="post-meta">
                                 <p>Lokdal Press Statement - 28 Sep 2026</p>
                               </div>
                             </a>
                           </div>
                         </div>
                         <!-- Single Blog Post (AajTak X) -->
                         <div class="single-blog-post post-style-2 d-flex align-items-center wow fadeInUpBig" data-wow-delay="0.007s">
                           <div class="post-thumbnail">
                             <img src="img/news/latest-news/news-46.jpeg" alt="" loading="lazy" decoding="async">
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
                             <img src="img/news/latest-news/news-47.jpeg" alt="" loading="lazy" decoding="async">
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
                             <img src="https://img.youtube.com/vi/HbrkBb0k52k/hqdefault.jpg" alt="" loading="lazy" decoding="async">
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
                             <img src="https://img.youtube.com/vi/zGhhFQ4u6p8/hqdefault.jpg" alt="" loading="lazy" decoding="async">
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
                            <img src="https://img.youtube.com/vi/UU1yv-FN344/hqdefault.jpg" alt="" loading="lazy" decoding="async">
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
                            <img src="https://prakashprabhaw.com/public/storage/posts/DhbUP9RJ77CEQNEs4tFnLDepQCYnRP0H2UwTPnO5.jpeg" alt="" loading="lazy" decoding="async">
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
                            <img src="https://www.cherishtimes.in/wp-content/uploads/2026/09/IMG-20260908-WA0984.jpg" alt="" loading="lazy" decoding="async">
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
                            <img src="img/news/latest-news/news-45.jpeg" alt="" loading="lazy" decoding="async">
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
                            <img src="img/news/latest-news/news-42.jpeg" alt="" loading="lazy" decoding="async">
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
                            <img src="img/news/latest-news/news-43.jpeg" alt="" loading="lazy" decoding="async">
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
                            <img src="img/news/latest-news/news-44.jpeg" alt="" loading="lazy" decoding="async">
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
                            <img src="https://img.youtube.com/vi/1sJB7x3NSOE/hqdefault.jpg" alt="" loading="lazy" decoding="async">
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
                            <img src="https://img.youtube.com/vi/jpAGYMw7tx4/hqdefault.jpg" alt="" loading="lazy" decoding="async">
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
                            <img src="https://img.youtube.com/vi/cvdSkNNIgwU/hqdefault.jpg" alt="" loading="lazy" decoding="async">
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
                            <img src="img/news/latest-news/wp-image-1.jpeg" alt="" loading="lazy" decoding="async">
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
                            <img src="img/news/latest-news/news-32.jpeg" alt="" loading="lazy" decoding="async">
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
                            <img src="img/news/latest-news/news-33.jpeg" alt="" loading="lazy" decoding="async">
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
                            <img src="img/news/latest-news/news-34.jpeg" alt="" loading="lazy" decoding="async">
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
                            <img src="img/news/latest-news/news-35.jpeg" alt="" loading="lazy" decoding="async">
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
                            <img src="video/fb-gathbandhan.jpg" alt="" loading="lazy" decoding="async">
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
                            <img src="img/news/latest-news/news-31.jpeg" alt="" loading="lazy" decoding="async">
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
                            <img src="img/news/latest-news/wp-image-1.jpeg" alt="" loading="lazy" decoding="async">
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
                            <img src="img/news/latest-news/news-31.jpeg" alt="" loading="lazy" decoding="async">
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
                            <img src="video/yt-wE9bWrA-IrI.jpg" alt="" loading="lazy" decoding="async">
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
                            <img src="img/news/latest-news/news-29.jpeg" alt="" loading="lazy" decoding="async">
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
                        <?php foreach($activitiesDb as $rows)
                          {?>
                        <div class="single-blog-post post-style-2 d-flex align-items-center wow fadeInUpBig" data-wow-delay="0.2s">
                          <div class="post-thumbnail">
                            <img src="../dashboard/<?= $rows['img1'];?>" alt="" loading="lazy" decoding="async">
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
                        <?php } ?>
                      </div>
                    </div>
                  </div>
                  <?php
                    foreach($activitiesDb as $rows){
                    
                    ?>
                  <div class="tab-pane fade" id="world-tab-<?= $rows['id'];?>" role="tabpanel" aria-labelledby="tab<?= $rows['id'];?>">
                    <div class="row">
                      <div class="col-12 col-md-6">
                        <!-- Single Blog Post -->
                        <div class="single-blog-post">
                          <!-- Post Thumbnail -->
                          <div class="post-thumbnail">
                            <img src="../dashboard/<?= $rows['img1'];?>" alt="" loading="lazy" decoding="async">
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
                            <img src="../dashboard/<?= $rows['img2'];?>" alt="" loading="lazy" decoding="async">
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
                            <img src="../dashboard/<?= $rows['img3'];?>" alt="" loading="lazy" decoding="async">
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
                            <img src="../dashboard/<?= $rows['img4'];?>" alt="" loading="lazy" decoding="async">
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
                            <img src="../dashboard/<?= $rows['img5'];?>" alt="" loading="lazy" decoding="async">
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
                            <img src="../dashboard/<?= $rows['img6'];?>" alt="" loading="lazy" decoding="async">
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
                            <img src="img/Lokdal_content/1.jpeg" alt="" loading="lazy" decoding="async">
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
                            <img src="img/Lokdal_content/2.PNG" alt="" loading="lazy" decoding="async">
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
                          <?php 
                            $ourServicesArr = [
                                     ['img' => 'img/news/latest-news/news-78.jpeg',
                                      'title' => '🔴 [लाइव वीडियो] दिल्ली पुलिस हिरासत बस से राष्ट्रीय अध्यक्ष चौधरी सुनील सिंह का संदेश',
                                      'desc' => '02 Oct 2026 • Exclusive Ground Video Footage',
                                      'url' => '#exclusive-videos'],
                                     ['img' => 'video/wp-video-8-thumb.jpg',
                                      'title' => '🔴 [ग्राउंड वीडियो] जंतर-मंतर जेल भरो आंदोलन: धारा 163 व मीडिया घेराव कवरेज',
                                      'desc' => '02 Oct 2026 • Ground TV Report',
                                      'url' => '#exclusive-videos'],
                                     ['img' => 'img/news/latest-news/news-76.jpeg',
                                      'title' => '2027 का रण: सपा का पीडीए रथ — “लोकदल इंडिया गठबंधन का मजबूत घटक है” : चौधरी सुनील सिंह',
                                      'desc' => 'स्वदेश (Swadesh) राष्ट्रीय समाचार पत्र (लखनऊ) - 03 Oct 2026',
                                      'url' => 'img/news/latest-news/news-76.jpeg'],
                                     ['img' => 'img/news/latest-news/news-77.jpeg',
                                      'title' => 'गांधी जयंती पर जंतर-मंतर से लोकदल ने शुरू किया जेल भरो आंदोलन : चौधरी सुनील सिंह — राष्ट्रीय सुदर्शन',
                                      'desc' => 'राष्ट्रीय सुदर्शन (Rashtriya Sudarshan) - 02 Oct 2026',
                                      'url' => 'img/news/latest-news/news-77.jpeg'],
                                     ['img' => 'img/news/latest-news/news-78.jpeg',
                                      'title' => 'जंतर-मंतर जेल भरो आंदोलन: दिल्ली पुलिस बस में राष्ट्रीय अध्यक्ष चौधरी सुनील सिंह एवं नेतागण',
                                      'desc' => 'लोकदल लाइव कवरेज (Police Bus) - 02 Oct 2026',
                                      'url' => 'img/news/latest-news/news-78.jpeg'],
                                     ['img' => 'img/news/latest-news/news-71.jpeg',
                                      'title' => 'गांधी जयंती पर जंतर-मंतर से लोकदल ने शुरू किया जेल भरो आंदोलन : चौधरी सुनील सिंह — Cherish Times',
                                      'desc' => 'Cherish Times News - 02 Oct 2026',
                                      'url' => 'https://www.cherishtimes.in/uttar-pradesh/90755'],
                                     ['img' => 'img/news/latest-news/news-70.jpeg',
                                      'title' => 'जंतर-मंतर पर चुनाव आयुक्त के विरुद्ध \'जेल भरो आंदोलन\'; राष्ट्रीय अध्यक्ष चौधरी सुनील सिंह हिरासत में',
                                      'desc' => 'सूर्योदय भारत - 02 Oct 2026',
                                      'url' => 'https://suryodaybharat.com/lokdals-fill-the-jails-protest-against-the-election-commissioner-at-jantar-mantar-national-president-chaudhary-sunil-singh-in-police-custody/'],
                                     ['img' => 'img/news/latest-news/news-69.jpeg',
                                      'title' => 'गांधी जयंती पर जंतर-मंतर से लोकदल का जेल भरो आंदोलन : सुनील सिंह — 4tv News Video',
                                      'desc' => '4tv News Satellite (YouTube) - 02 Oct 2026',
                                      'url' => 'https://youtu.be/6Tz2jiiP7G0?si=_fLFHVCDp-0oT_Jc'],
                                     ['img' => 'img/news/latest-news/news-74.jpeg',
                                      'title' => 'PPN News: गांधी जयंती पर जंतर-मंतर से लोकदल ने शुरू किया जेल भरो आंदोलन : चौधरी सुनील सिंह',
                                      'desc' => 'Prakash Prabhaw News - 02 Oct 2026',
                                      'url' => 'https://prakashprabhaw.com/khabar-hatke/jail-bharo-andolan/detail'],
                                     ['img' => 'img/news/latest-news/news-72.jpeg',
                                      'title' => 'स्वर्णप्रिया: जंतर-मंतर से लोकदल का ‘जेल भरो’ आंदोलन, चौधरी सुनील सिंह समेत प्रदर्शनकारी हिरासत में',
                                      'desc' => 'Swarnapriya - 02 Oct 2026',
                                      'url' => 'https://swarnapriya.com/?p=37012'],
                                     ['img' => 'img/news/latest-news/news-73.png',
                                      'title' => 'बहुजन विचार: मतदाता अधिकार और लोकतांत्रिक संस्थाओं की जवाबदेही पर जेल भरो आंदोलन — सुनील सिंह',
                                      'desc' => 'Bahujan Vichar - 02 Oct 2026',
                                      'url' => 'https://bahujanvichar.com/raising-questions-regarding-voters-rights-and-the-accountability-of-democratic-institutions-is-the-democratic-right-of-any-citizen/'],
                                     ['img' => 'img/news/latest-news/news-75.jpeg',
                                      'title' => 'लोकदल आधिकारिक फेसबुक: यह सिर्फ शुरुआत है! जेल भरो आंदोलन शुरू, रुकेंगे नहीं किसान और युवा',
                                      'desc' => 'Facebook Post - 02 Oct 2026',
                                      'url' => 'https://www.facebook.com/share/18LQencKAf/?mibextid=wwXIfr'],
                                     ['img' => 'img/news/latest-news/news-73.png',
                                      'title' => 'बहुजन विचार वीडियो: पीएम और गृह मंत्री के खिलाफ आंदोलन की औपचारिक घोषणा — सुनील सिंह',
                                      'desc' => 'Facebook Video - 02 Oct 2026',
                                      'url' => 'https://www.facebook.com/share/v/1QLV5avxig/'],
                                     ['img' => 'img/news/latest-news/news-74.jpeg',
                                      'title' => 'PPN वीडियो: जंतर-मंतर से लोकदल का जेल भरो आंदोलन, सुनील सिंह पुलिस हिरासत में — Facebook Live',
                                      'desc' => 'Facebook Video - 02 Oct 2026',
                                      'url' => 'https://www.facebook.com/share/v/18CwLzxjMe/'],
                                     ['img' => 'img/news/latest-news/news-68.jpeg',
                                      'title' => 'SIR को लेकर भारत की इंटरनेशनल बेइज्जती: ज्ञानेश कुमार पर बुरी तरह भड़का UN, 60 दिन में मांगा जवाब!',
                                      'desc' => 'GlobalNews360 (Facebook Video) - 29 Sep 2026',
                                      'url' => 'https://www.facebook.com/share/v/1GrxzshzGh/'],
                                     ['img' => 'img/news/latest-news/news-67.jpeg',
                                      'title' => 'ज्योतिषी का चौंकाने वाला दावा, ग्रहों ने तय कर दी मोदी और ज्ञानेश कुमार की विदाई! — 4PM News LIVE',
                                      'desc' => '4PM News LIVE (Facebook Video) - 29 Sep 2026',
                                      'url' => 'https://www.facebook.com/share/v/1EZDeNhw2D/'],
                                     ['img' => 'img/news/latest-news/news-66.jpeg',
                                      'title' => 'TADIPAAR: अमित शाह और सत्ता की राजनीति का अनसुना सच — विशेष वीडियो रील',
                                      'desc' => 'Instagram Reel - 29 Sep 2026',
                                      'url' => 'https://www.instagram.com/reel/Dc957qETrZV/?stkn=M3dvNjlpZzd4eWs1'],
                                     ['img' => 'img/news/latest-news/news-62.jpeg',
                                      'title' => 'मुख्य चुनाव आयुक्त ज्ञानेश कुमार पर तीखा हमला: राष्ट्रीय सुदर्शन विशेष प्रेस रिपोर्ट',
                                      'desc' => 'Rashtriya Sudarshan - 26 Sep 2026',
                                      'url' => 'img/news/latest-news/news-62.jpeg'],
                                     ['img' => 'img/news/latest-news/news-63.jpeg',
                                      'title' => 'गठबंधन को कमजोर करने वाले बयानों से बचें, सभी साथी एकजुट रहें : सुनील सिंह',
                                      'desc' => 'Lokdal Press Statement - 28 Sep 2026',
                                      'url' => 'img/news/latest-news/news-63.jpeg'],
                                     ['img' => 'img/news/latest-news/news-64.jpeg',
                                      'title' => 'इंडिया गठबंधन उत्तर प्रदेश में पूरी तरह मजबूत, 300+ सीटें लाकर भाजपा को चित करेंगे : सुनील सिंह',
                                      'desc' => 'Lokdal Official (X Video) - 28 Sep 2026',
                                      'url' => 'https://x.com/lokdalindia/status/2104572588303565103?s=46&t=_2mEBmLj46j89OPjnvYbbg'],
                                     ['img' => 'img/news/latest-news/news-65.jpeg',
                                      'title' => 'लोकदल राष्ट्रीय अध्यक्ष सुनील सिंह का तीखा संदेश — देशहित का INDIA गठबंधन कमजोर नहीं पड़ना चाहिए',
                                      'desc' => 'Facebook Video - 28 Sep 2026',
                                      'url' => 'https://www.facebook.com/share/v/19fTgFLpLJ/?mibextid=wwXIfr'],
                                     ['img' => 'img/news/latest-news/news-61.jpeg',
                                      'title' => 'मुख्य चुनाव आयुक्त ज्ञानेश कुमार को न PM बनना है न CM, फिर सत्ता की बेचैनी क्यों?: सुनील सिंह',
                                      'desc' => 'Lokdal Press Statement - 28 Sep 2026',
                                      'url' => 'https://www.facebook.com/share/p/1c9wGrwSyc/?mibextid=wwXIfr'],
                                     ['img' => 'video/wp-video-thumb.jpeg',
                                      'title' => 'लोकदल विशेष वीडियो रील — राष्ट्रीय अध्यक्ष चौधरी सुनील सिंह',
                                      'desc' => 'Instagram Reel - 28 Sep 2026',
                                      'url' => 'https://www.instagram.com/reel/DdyuL0DvquJ/?stkn=eG0zZmVkOWo3YjI4'],
                                     ['img' => 'video/fb-gathbandhan.jpg',
                                      'title' => 'CEC Gyanesh Kumar के खिलाफ फिर एकजुट होगा विपक्ष? इस्तीफे के लिए मोर्चेबंदी — Ajit Anjum',
                                      'desc' => 'Facebook Video - 28 Sep 2026',
                                      'url' => 'https://www.facebook.com/share/v/1Hn2YdNYMt/'],
                                     ['img' => 'img/news/latest-news/news-56.jpeg',
                                      'title' => 'लोकदल आधिकारिक संदेश: राष्ट्रीय नेतृत्व का विशेष वक्तव्य एवं विचार',
                                      'desc' => 'Facebook Post - 28 Sep 2026',
                                      'url' => 'https://www.facebook.com/share/p/1c9wGrwSyc/?mibextid=wwXIfr'],
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
                                     ['img' => 'img/linkedImage/2.jpg',
                                      'title' => 'किसान,मजदूर संगठनों की बैठक में लोकसभा चुनाव को लेकर हुआ मंथन',
                                      'desc' => 'Kisan Sangthan baithak',
                                      'url' => 'https://azamgarhexpresstv.in/2023/5776/politics/'],
                                     ['img' => 'img/linkedImage/3.jpg',
                                      'title' => 'लोक दल का संदेश, इस बार किसान मजदूर जवान एवं महिला शक्ति बचाएगा देश,2024 के लोकसभा चुनाव में भारत के किसान भी लड़ेंगे चुनाव-सुनील सिंह',
                                      'desc' => 'Kisan Sangthan baithak',
                                      'url' => 'https://youtu.be/5LdIhC6bcno?si=2UauTDJAlZpW6Sb-'],
                                     ['img' => 'img/linkedImage/4.jpg',
                                      'title' => 'भारत के किसानों और जवानों को किसी सहारे की ज़रूरत नहीं- सुनील सिंह',
                                      'desc' => 'Kisan Sangthan baithak',
                                      'url' => 'https://prakashprabhaw.com/khabar-hatke/indian-former/detail'],
                                     ['img' => 'img/linkedImage/1.jpg',
                                      'title' => 'भारत के किसानों और जवानों को किसी सहारे की ज़रूरत नहीं- सुनील सिंह',
                                      'desc' => 'Kisan Sangthan baithak',
                                      'url' => 'https://prakashprabhaw.com/khabar-hatke/indian-former/detail'],
                                     ['img' => 'img/linkedImage/4.jpg',
                                      'title' => 'देश की संसद में बैठेगा किसान का बेटा: चौधरी सुनील सिंह',
                                      'desc' => 'Kisan Sangthan baithak',
                                      'url' => 'https://samarsaleel.com/farmers-son-chaudhary-sunil-singh-will-sit-in-the-countrys-parliament/368520'],
                                     ['img' => 'img/linkedImage/1.jpg',
                                      'title' => 'किसान की हुंकार मिशन 2024, देश की संसद में अब होगी किसान की भागीदारी',
                                      'desc' => 'Kisan Sangthan baithak',
                                      'url' => 'https://publicwatch.in/Farmers-Hunkar-Mission-2024-Farmers-participation-will-now-take-place-in-the-c'],
                                     ['img' => 'img/linkedImage/4.jpg',
                                      'title' => 'राष्ट्रीय किसान मोर्चा देश का बनेगा तीसरा विकल्प,किसान की हुंकार, मिशन 2024 में देश की संसद में बैठेगा किसान का बेटा',
                                      'desc' => 'Kisan Sangthan baithak',
                                      'url' => 'https://youtu.be/warRxwwev2c?si=j5c33Us-oVBhp3IL'],
                                     ['img' => 'img/linkedImage/7.jpg',
                                      'title' => 'किसान की हुंकार मिशन 2024 में संसद तक पहुंचना है : चौ. सुनील सिंह',
                                      'desc' => 'Kisan Sangthan baithak',
                                      'url' => 'https://www.cherishtimes.in/uttar-pradesh/41865F'],
                                 ];
                                 $inspirationSlides = array_chunk($ourServicesArr, ceil(count($ourServicesArr) / 2));
                                 ?>
                           <?php foreach ($inspirationSlides as $slideIndex => $slideItems): ?>
                           <!-- ========= Single Catagory Slide ========= -->
                           <div class="single-cata-slide">
                             <div class="row">
                               <?php foreach ($slideItems as $key => $value): ?>
                               <div class="col-12 col-md-6 d-flex">
                                 <!-- Single Blog Post -->
                                 <div class="single-blog-post post-style-2 d-flex align-items-center mb-1 w-100">
                                   <!-- Post Thumbnail -->
                                   <div class="post-thumbnail">
                                     <img src="<?php echo $value['img']; ?>" alt="" loading="lazy" decoding="async">
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
                           <?php endforeach; ?>
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
                            <img src="img/Lokdal_content/6.JPG" alt="" loading="lazy" decoding="async">
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
                            <img src="img/Lokdal_content/a.JPG" alt="" loading="lazy" decoding="async">
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
                        <!-- Single Blog Post (Video 1) -->
                        <div class="single-blog-post post-style-2 d-flex align-items-center mb-1" style="border: 2px solid #b30000; border-radius: 6px; padding: 4px; background: #fff8f8;">
                          <div class="post-thumbnail" style="position: relative;">
                            <a href="#exclusive-videos">
                              <img src="img/news/latest-news/news-78.jpeg" alt="" loading="lazy" decoding="async">
                              <span class="video-btn"><i class="fa fa-play"></i></span>
                            </a>
                          </div>
                          <div class="post-content">
                            <a href="#exclusive-videos" class="headline">
                              <h5 style="color: #b30000; font-weight: 700;">🔴 [लाइव वीडियो] दिल्ली पुलिस हिरासत बस से चौधरी सुनील सिंह का संदेश</h5>
                              <div class="post-meta">
                                <p>02 Oct 2026 • Exclusive Video</p>
                              </div>
                            </a>
                          </div>
                        </div>
                      </div>
                      <div class="col-12 col-md-6">
                        <!-- Single Blog Post (Video 2) -->
                        <div class="single-blog-post post-style-2 d-flex align-items-center mb-1" style="border: 2px solid #e67e22; border-radius: 6px; padding: 4px; background: #fffaf5;">
                          <div class="post-thumbnail" style="position: relative;">
                            <a href="#exclusive-videos">
                              <img src="video/wp-video-8-thumb.jpg" alt="" loading="lazy" decoding="async">
                              <span class="video-btn"><i class="fa fa-play"></i></span>
                            </a>
                          </div>
                          <div class="post-content">
                            <a href="#exclusive-videos" class="headline">
                              <h5 style="color: #b30000; font-weight: 700;">🔴 [ग्राउंड वीडियो] जंतर-मंतर पर धारा 163 व मीडिया घेराव कवरेज</h5>
                              <div class="post-meta">
                                <p>02 Oct 2026 • Ground Report</p>
                              </div>
                            </a>
                          </div>
                        </div>
                      </div>
                      <div class="col-12 col-md-6">
                        <!-- Single Blog Post (Swadesh 03 Oct 2026) -->
                        <div class="single-blog-post post-style-2 d-flex align-items-center mb-1">
                          <div class="post-thumbnail">
                            <a data-lightbox="sunil" href="img/news/latest-news/news-76.jpeg">
                              <img src="img/news/latest-news/news-76.jpeg" alt="" loading="lazy" decoding="async">
                            </a>
                          </div>
                          <div class="post-content">
                            <a data-lightbox="sunil" href="img/news/latest-news/news-76.jpeg" class="headline">
                              <h5>स्वदेश (03 Oct): 2027 का रण — “लोकदल इंडिया गठबंधन का मजबूत घटक है” : चौधरी सुनील सिंह</h5>
                              <div class="post-meta">
                                <p>Swadesh Lucknow - 03 Oct 2026</p>
                              </div>
                            </a>
                          </div>
                        </div>
                      </div>
                      <div class="col-12 col-md-6">
                        <!-- Single Blog Post (Rashtriya Sudarshan Paper) -->
                        <div class="single-blog-post post-style-2 d-flex align-items-center mb-1">
                          <div class="post-thumbnail">
                            <a data-lightbox="sunil" href="img/news/latest-news/news-77.jpeg">
                              <img src="img/news/latest-news/news-77.jpeg" alt="" loading="lazy" decoding="async">
                            </a>
                          </div>
                          <div class="post-content">
                            <a data-lightbox="sunil" href="img/news/latest-news/news-77.jpeg" class="headline">
                              <h5>गांधी जयंती पर जंतर-मंतर से लोकदल ने शुरू किया जेल भरो आंदोलन : चौधरी सुनील सिंह</h5>
                              <div class="post-meta">
                                <p>राष्ट्रीय सुदर्शन - 02 Oct 2026</p>
                              </div>
                            </a>
                          </div>
                        </div>
                      </div>
                      <div class="col-12 col-md-6">
                        <!-- Single Blog Post (Police Detention Bus Live Photo) -->
                        <div class="single-blog-post post-style-2 d-flex align-items-center mb-1">
                          <div class="post-thumbnail">
                            <a data-lightbox="sunil" href="img/news/latest-news/news-78.jpeg">
                              <img src="img/news/latest-news/news-78.jpeg" alt="" loading="lazy" decoding="async">
                            </a>
                          </div>
                          <div class="post-content">
                            <a data-lightbox="sunil" href="img/news/latest-news/news-78.jpeg" class="headline">
                              <h5>जंतर-मंतर जेल भरो आंदोलन: दिल्ली पुलिस बस में राष्ट्रीय अध्यक्ष चौधरी सुनील सिंह व नेता</h5>
                              <div class="post-meta">
                                <p>लोकदल लाइव कवरेज (Police Bus) - 02 Oct 2026</p>
                              </div>
                            </a>
                          </div>
                        </div>
                      </div>
                      <div class="col-12 col-md-6">
                        <!-- Single Blog Post -->
                        <div class="single-blog-post post-style-2 d-flex align-items-center mb-1">
                          <div class="post-thumbnail">
                            <img src="img/news/latest-news/news-71.jpeg" alt="" loading="lazy" decoding="async">
                          </div>
                          <div class="post-content">
                            <a href="https://www.cherishtimes.in/uttar-pradesh/90755" target="_blank" class="headline">
                              <h5>गांधी जयंती पर जंतर-मंतर से लोकदल ने शुरू किया जेल भरो आंदोलन : चौधरी सुनील सिंह</h5>
                              <div class="post-meta">
                                <p>Cherish Times - 02 Oct 2026</p>
                              </div>
                            </a>
                          </div>
                        </div>
                      </div>
                      <div class="col-12 col-md-6">
                        <!-- Single Blog Post -->
                        <div class="single-blog-post post-style-2 d-flex align-items-center mb-1">
                          <div class="post-thumbnail">
                            <img src="img/news/latest-news/news-70.jpeg" alt="" loading="lazy" decoding="async">
                          </div>
                          <div class="post-content">
                            <a href="https://suryodaybharat.com/lokdals-fill-the-jails-protest-against-the-election-commissioner-at-jantar-mantar-national-president-chaudhary-sunil-singh-in-police-custody/" target="_blank" class="headline">
                              <h5>जंतर-मंतर पर चुनाव आयुक्त के विरुद्ध 'जेल भरो आंदोलन'; चौधरी सुनील सिंह पुलिस हिरासत में</h5>
                              <div class="post-meta">
                                <p>सूर्योदय भारत - 02 Oct 2026</p>
                              </div>
                            </a>
                          </div>
                        </div>
                      </div>
                      <div class="col-12 col-md-6">
                        <!-- Single Blog Post -->
                        <div class="single-blog-post post-style-2 d-flex align-items-center mb-1">
                          <div class="post-thumbnail">
                            <img src="img/news/latest-news/news-68.jpeg" alt="" loading="lazy" decoding="async">
                          </div>
                          <div class="post-content">
                            <a href="https://www.facebook.com/share/v/1GrxzshzGh/" target="_blank" class="headline">
                              <h5>SIR को लेकर भारत की इंटरनेशनल बेइज्जती: ज्ञानेश कुमार पर बुरी तरह भड़का UN, 60 दिन में मांगा जवाब!</h5>
                              <div class="post-meta">
                                <p>GlobalNews360 (Facebook Video) - 29 Sep 2026</p>
                              </div>
                            </a>
                          </div>
                        </div>
                      </div>
                      <div class="col-12 col-md-6">
                        <!-- Single Blog Post -->
                        <div class="single-blog-post post-style-2 d-flex align-items-center mb-1">
                          <div class="post-thumbnail">
                            <img src="img/news/latest-news/news-67.jpeg" alt="" loading="lazy" decoding="async">
                          </div>
                          <div class="post-content">
                            <a href="https://www.facebook.com/share/v/1EZDeNhw2D/" target="_blank" class="headline">
                              <h5>ज्योतिषी का चौंकाने वाला दावा, ग्रहों ने तय कर दी मोदी और ज्ञानेश कुमार की विदाई! — 4PM News LIVE</h5>
                              <div class="post-meta">
                                <p>4PM News LIVE (Facebook Video) - 29 Sep 2026</p>
                              </div>
                            </a>
                          </div>
                        </div>
                      </div>
                      <div class="col-12 col-md-6">
                        <!-- Single Blog Post -->
                        <div class="single-blog-post post-style-2 d-flex align-items-center mb-1">
                          <div class="post-thumbnail">
                            <img src="img/news/latest-news/news-63.jpeg" alt="" loading="lazy" decoding="async">
                          </div>
                          <div class="post-content">
                            <a data-lightbox="sunil" href="img/news/latest-news/news-63.jpeg" class="headline">
                              <h5>गठबंधन को कमजोर करने वाले बयानों से बचें, सभी साथी एकजुट रहें : सुनील सिंह</h5>
                              <div class="post-meta">
                                <p>Lokdal Press Statement - 28 Sep 2026</p>
                              </div>
                            </a>
                          </div>
                        </div>
                      </div>
                      <div class="col-12 col-md-6">
                        <!-- Single Blog Post -->
                        <div class="single-blog-post post-style-2 d-flex align-items-center mb-1">
                          <div class="post-thumbnail">
                            <img src="img/news/latest-news/news-64.jpeg" alt="" loading="lazy" decoding="async">
                          </div>
                          <div class="post-content">
                            <a href="https://x.com/lokdalindia/status/2104572588303565103?s=46&t=_2mEBmLj46j89OPjnvYbbg" target="_blank" class="headline">
                              <h5>इंडिया गठबंधन उत्तर प्रदेश में पूरी तरह मजबूत, 300+ सीटें लाकर भाजपा को चित करेंगे : सुनील सिंह</h5>
                              <div class="post-meta">
                                <p>Lokdal Official (X Video) - 28 Sep 2026</p>
                              </div>
                            </a>
                          </div>
                        </div>
                      </div>
                      <div class="col-12 col-md-6">
                        <!-- Single Blog Post -->
                        <div class="single-blog-post post-style-2 d-flex align-items-center mb-1">
                          <div class="post-thumbnail">
                            <img src="img/gallery/latest-gallery/gallery-31.jpeg" alt="" loading="lazy" decoding="async">
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
                            <img src="img/gallery/latest-gallery/gallery-1.jpeg" alt="" loading="lazy" decoding="async">
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
                            <img src="img/gallery/latest-gallery/gallery-2.jpeg" alt="" loading="lazy" decoding="async">
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
                            <img src="img/gallery/latest-gallery/gallery-3.jpeg" alt="" loading="lazy" decoding="async">
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
                            <img src="img/gallery/latest-gallery/gallery-4.jpeg" alt="" loading="lazy" decoding="async">
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
                            <img src="img/gallery/latest-gallery/gallery-11.jpeg" alt="" loading="lazy" decoding="async">
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
                            <img src="img/gallery/latest-gallery/gallery-12.jpeg" alt="" loading="lazy" decoding="async">
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
                            <img src="img/gallery/latest-gallery/gallery-13.jpeg" alt="" loading="lazy" decoding="async">
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
                            <img src="img/gallery/latest-gallery/gallery-14.jpeg" alt="" loading="lazy" decoding="async">
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
                            <img src="img/gallery/latest-gallery/gallery-15.jpeg" alt="" loading="lazy" decoding="async">
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
                            <img src="img/news/latest-news/news-32.jpeg" alt="" loading="lazy" decoding="async">
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
                            <img src="img/news/latest-news/news-33.jpeg" alt="" loading="lazy" decoding="async">
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
                            <img src="img/news/latest-news/news-34.jpeg" alt="" loading="lazy" decoding="async">
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
                            <img src="img/news/latest-news/news-35.jpeg" alt="" loading="lazy" decoding="async">
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
                            <img src="img/news/latest-news/news-24.jpeg" alt="" loading="lazy" decoding="async">
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
                            <img src="img/news/latest-news/news-25.jpeg" alt="" loading="lazy" decoding="async">
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
                            <img src="img/news/latest-news/news-26.jpeg" alt="" loading="lazy" decoding="async">
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
                            <img src="img/news/latest-news/news-27.jpeg" alt="" loading="lazy" decoding="async">
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
                            <img src="img/news/latest-news/news-28.jpeg" alt="" loading="lazy" decoding="async">
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
                      <div class="col-12 col-md-6">
                        <div class="single-blog-post post-style-2 d-flex align-items-center mb-1">
                          <div class="post-thumbnail">
                            <img src="img/news/latest-news/news-61.jpeg" alt="" loading="lazy" decoding="async">
                          </div>
                          <div class="post-content">
                            <a data-lightbox="sunil" href="img/news/latest-news/news-61.jpeg" class="headline">
                              <h5>मुख्य चुनाव आयुक्त ज्ञानेश कुमार को न PM बनना है न CM, फिर सत्ता की बेचैनी क्यों?: सुनील सिंह</h5>
                              <div class="post-meta">
                                <p>Lokdal Official Statement - 28 Sep 2026</p>
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
          <div class="row align-items-stretch">
            <div class="col-12 col-lg-8 d-flex flex-column justify-content-between">
              <div class="title">
                <h5>Daily Updates</h5>
              </div>
              <?php
                $latestDailyUpdates = [
                  ['img' => 'img/news/latest-news/news-78.jpeg', 'title' => '🔴 [एक्सक्लूसिव वीडियो 1] जंतर-मंतर हिरासत बस से चौधरी सुनील सिंह का लाइव संदेश', 'desc' => 'दिल्ली पुलिस हिरासत बस से सीधा उद्बोधन - 02 Oct 2026', 'url' => '#exclusive-videos'],
                  ['img' => 'video/wp-video-8-thumb.jpg', 'title' => '🔴 [ग्राउंड वीडियो 2] जंतर-मंतर पर धारा 163 व मीडिया घेराव कवरेज', 'desc' => 'जंतर-मंतर ग्राउंड कवरेज वीडियो - 02 Oct 2026', 'url' => '#exclusive-videos'],
                  ['img' => 'img/news/latest-news/news-76.jpeg', 'title' => '2027 का रण: सपा का पीडीए रथ — “लोकदल इंडिया गठबंधन का मजबूत घटक है” : चौधरी सुनील सिंह', 'desc' => 'स्वदेश (Swadesh) लखनऊ - 03 Oct 2026', 'url' => 'img/news/latest-news/news-76.jpeg'],
                  ['img' => 'img/news/latest-news/news-77.jpeg', 'title' => 'गांधी जयंती पर जंतर-मंतर से लोकदल ने शुरू किया जेल भरो आंदोलन : चौधरी सुनील सिंह — राष्ट्रीय सुदर्शन', 'desc' => 'राष्ट्रीय सुदर्शन - 02 Oct 2026', 'url' => 'img/news/latest-news/news-77.jpeg'],
                  ['img' => 'img/news/latest-news/news-78.jpeg', 'title' => 'जंतर-मंतर जेल भरो आंदोलन: दिल्ली पुलिस बस में राष्ट्रीय अध्यक्ष चौधरी सुनील सिंह एवं नेतागण', 'desc' => 'लोकदल लाइव कवरेज (Police Bus) - 02 Oct 2026', 'url' => 'img/news/latest-news/news-78.jpeg'],
                  ['img' => 'img/news/latest-news/news-71.jpeg', 'title' => 'गांधी जयंती पर जंतर-मंतर से लोकदल ने शुरू किया जेल भरो आंदोलन : चौधरी सुनील सिंह — Cherish Times', 'desc' => 'Cherish Times News - 02 Oct 2026', 'url' => 'https://www.cherishtimes.in/uttar-pradesh/90755'],
                  ['img' => 'img/news/latest-news/news-70.jpeg', 'title' => 'जंतर-मंतर पर चुनाव आयुक्त के विरुद्ध \'जेल भरो आंदोलन\'; राष्ट्रीय अध्यक्ष चौधरी सुनील सिंह हिरासत में', 'desc' => 'सूर्योदय भारत - 02 Oct 2026', 'url' => 'https://suryodaybharat.com/lokdals-fill-the-jails-protest-against-the-election-commissioner-at-jantar-mantar-national-president-chaudhary-sunil-singh-in-police-custody/'],
                  ['img' => 'img/news/latest-news/news-69.jpeg', 'title' => 'गांधी जयंती पर जंतर-मंतर से लोकदल का जेल भरो आंदोलन : सुनील सिंह — 4tv News Video', 'desc' => '4tv News Satellite (YouTube) - 02 Oct 2026', 'url' => 'https://youtu.be/6Tz2jiiP7G0?si=_fLFHVCDp-0oT_Jc'],
                  ['img' => 'img/news/latest-news/news-74.jpeg', 'title' => 'PPN News: गांधी जयंती पर जंतर-मंतर से लोकदल ने शुरू किया जेल भरो आंदोलन : चौधरी सुनील सिंह', 'desc' => 'Prakash Prabhaw News - 02 Oct 2026', 'url' => 'https://prakashprabhaw.com/khabar-hatke/jail-bharo-andolan/detail'],
                  ['img' => 'img/news/latest-news/news-72.jpeg', 'title' => 'स्वर्णप्रिया: जंतर-मंतर से लोकदल का ‘जेल भरो’ आंदोलन, चौधरी सुनील सिंह समेत प्रदर्शनकारी हिरासत में', 'desc' => 'Swarnapriya - 02 Oct 2026', 'url' => 'https://swarnapriya.com/?p=37012'],
                  ['img' => 'img/news/latest-news/news-73.png', 'title' => 'बहुजन विचार: मतदाता अधिकार और लोकतांत्रिक संस्थाओं की जवाबदेही पर जेल भरो आंदोलन — सुनील सिंह', 'desc' => 'Bahujan Vichar - 02 Oct 2026', 'url' => 'https://bahujanvichar.com/raising-questions-regarding-voters-rights-and-the-accountability-of-democratic-institutions-is-the-democratic-right-of-any-citizen/'],
                  ['img' => 'img/news/latest-news/news-75.jpeg', 'title' => 'लोकदल आधिकारिक फेसबुक: यह सिर्फ शुरुआत है! जेल भरो आंदोलन शुरू, रुकेंगे नहीं किसान और युवा', 'desc' => 'Facebook Post - 02 Oct 2026', 'url' => 'https://www.facebook.com/share/18LQencKAf/?mibextid=wwXIfr'],
                  ['img' => 'img/news/latest-news/news-73.png', 'title' => 'बहुजन विचार वीडियो: पीएम और गृह मंत्री के खिलाफ आंदोलन की औपचारिक घोषणा — सुनील सिंह', 'desc' => 'Facebook Video - 02 Oct 2026', 'url' => 'https://www.facebook.com/share/v/1QLV5avxig/'],
                  ['img' => 'img/news/latest-news/news-74.jpeg', 'title' => 'PPN वीडियो: जंतर-मंतर से लोकदल का जेल भरो आंदोलन, सुनील सिंह पुलिस हिरासत में — Facebook Live', 'desc' => 'Facebook Video - 02 Oct 2026', 'url' => 'https://www.facebook.com/share/v/18CwLzxjMe/'],
                  ['img' => 'img/news/latest-news/news-68.jpeg', 'title' => 'SIR को लेकर भारत की इंटरनेशनल बेइज्जती: ज्ञानेश कुमार पर बुरी तरह भड़का UN, 60 दिन में मांगा जवाब!', 'desc' => 'GlobalNews360 (Facebook Video) - 29 Sep 2026', 'url' => 'https://www.facebook.com/share/v/1GrxzshzGh/'],
                  ['img' => 'img/news/latest-news/news-67.jpeg', 'title' => 'ज्योतिषी का चौंकाने वाला दावा, ग्रहों ने तय कर दी मोदी और ज्ञानेश कुमार की विदाई! — 4PM News LIVE', 'desc' => '4PM News LIVE (Facebook Video) - 29 Sep 2026', 'url' => 'https://www.facebook.com/share/v/1EZDeNhw2D/'],
                  ['img' => 'img/news/latest-news/news-66.jpeg', 'title' => 'TADIPAAR: अमित शाह और सत्ता की राजनीति का अनसुना सच — विशेष वीडियो रील', 'desc' => 'Instagram Reel - 29 Sep 2026', 'url' => 'https://www.instagram.com/reel/Dc957qETrZV/?stkn=M3dvNjlpZzd4eWs1'],
                  ['img' => 'img/news/latest-news/news-63.jpeg', 'title' => 'गठबंधन को कमजोर करने वाले बयानों से बचें, सभी साथी एकजुट रहें : सुनील सिंह', 'desc' => 'Lokdal Official Press Statement - 28 Sep 2026', 'url' => 'img/news/latest-news/news-63.jpeg'],
                  ['img' => 'img/news/latest-news/news-64.jpeg', 'title' => 'इंडिया गठबंधन उत्तर प्रदेश में पूरी तरह मजबूत, 300+ सीटें लाकर भाजपा को चित करेंगे : सुनील सिंह', 'desc' => 'Lokdal Official (@Lokdalindia - X Video) - 28 Sep 2026', 'url' => 'https://x.com/lokdalindia/status/2104572588303565103?s=46&t=_2mEBmLj46j89OPjnvYbbg'],
                  ['img' => 'img/news/latest-news/news-65.jpeg', 'title' => 'लोकदल राष्ट्रीय अध्यक्ष सुनील सिंह का तीखा संदेश — देशहित का INDIA गठबंधन कमजोर नहीं पड़ना चाहिए', 'desc' => 'Chaudhary Sunil Singh (Facebook Video) - 28 Sep 2026', 'url' => 'https://www.facebook.com/share/v/19fTgFLpLJ/?mibextid=wwXIfr'],
                  ['img' => 'video/wp-video-thumb.jpeg', 'title' => 'लोकदल विशेष वीडियो रील — राष्ट्रीय अध्यक्ष चौधरी सुनील सिंह', 'desc' => 'Instagram Reel - 28 Sep 2026', 'url' => 'https://www.instagram.com/reel/DdyuL0DvquJ/?stkn=eG0zZmVkOWo3YjI4'],
                  ['img' => 'img/news/latest-news/news-61.jpeg', 'title' => 'मुख्य चुनाव आयुक्त ज्ञानेश कुमार को न PM बनना है न CM, फिर सत्ता की बेचैनी क्यों?: सुनील सिंह', 'desc' => 'Chaudhary Sunil Singh (Facebook Post) - 28 Sep 2026', 'url' => 'https://www.facebook.com/share/p/1c9wGrwSyc/?mibextid=wwXIfr'],
                  ['img' => 'img/news/latest-news/news-60.jpeg', 'title' => 'ज्ञानेश कुमार की फजीहत LIVE || CEC के खिलाफ फिर एकजुट होगा विपक्ष? इस्तीफे के लिए मोर्चेबंदी', 'desc' => 'Ajit Anjum (Facebook Video) - 28 Sep 2026', 'url' => 'https://www.facebook.com/share/v/1Hn2YdNYMt/'],
                  ['img' => 'img/news/latest-news/news-62.jpeg', 'title' => 'मुख्य चुनाव आयुक्त ज्ञानेश कुमार पर तीखा हमला: राष्ट्रीय सुदर्शन रिपोर्ट', 'desc' => 'Rashtriya Sudarshan - 26 Sep 2026', 'url' => 'img/news/latest-news/news-62.jpeg'],
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
                  $linkAttr = isset($update['url']) ? 'href="'.$update['url'].'" target="_blank"' : 'data-lightbox="articals" href="'.$update['img'].'"';
                ?>
              <!-- Single Blog Post -->
              <div class="single-blog-post post-style-4 d-flex align-items-center wow fadeInUpBig" data-wow-delay="0.2s">
                <div class="post-thumbnail">
                  <a <?= $linkAttr; ?>>
                    <img src="<?= $update['img'];?>" alt="" loading="lazy" decoding="async">
                  </a>
                </div>
                <div class="post-content">
                  <a <?= $linkAttr; ?> class="headline">
                    <h5><?= $update['title'];?></h5>
                    <p><?= $update['desc'];?></p>
                  </a>
                </div>
              </div>
              <?php
                }
                foreach($dailyUpdatesDb as $row){
                ?>
              <div class="single-blog-post post-style-4 d-flex align-items-center wow fadeInUpBig" data-wow-delay="0.2s">
                <div class="post-thumbnail">
                  <a data-lightbox="articals" href="../dashboard/<?= $row['img'];?>">
                    <img src="../dashboard/<?= $row['img'];?>" alt="" loading="lazy" decoding="async">
                  </a>
                </div>
                <div class="post-content">
                  <a data-lightbox="articals" href="../dashboard/<?= $row['img'];?>" class="headline">
                    <h5><?= $row['title'];?></h5>
                    <p><?= $row['description'];?></p>
                  </a>
                </div>
              </div>
              <?php
                }
                ?>
            </div>
            <?php 
              $ourServicesArr = [
                ['img' => 'img/news/latest-news/news-78.jpeg','video' => 'video/wp-video-7.mp4', 'name' => '🔴 [एक्सक्लूसिव वीडियो 1] दिल्ली पुलिस हिरासत बस से चौधरी सुनील सिंह का लाइव संदेश', 'desc' => 'जंतर-मंतर पर पुलिस हिरासत के दौरान दिल्ली पुलिस बस से राष्ट्रीय अध्यक्ष जी का उद्बोधन', 'date' => '02 Oct 2026 • Exclusive Video'],
                ['img' => 'video/wp-video-8-thumb.jpg','video' => 'video/wp-video-8.mp4', 'name' => '🔴 [एक्सक्लूसिव वीडियो 2] जंतर-मंतर ग्राउंड कवरेज — धारा 163 व मीडिया घेराव', 'desc' => 'जंतर-मंतर पर भारी पुलिस बल व नेशनल मीडिया के कैमरों के बीच जेल भरो आंदोलन', 'date' => '02 Oct 2026 • Ground Report'],
                ['img' => 'img/news/latest-news/news-76.jpeg','video' => 'img/news/latest-news/news-76.jpeg', 'name' => 'स्वदेश (03 Oct): 2027 का रण: सपा का पीडीए रथ — “लोकदल इंडिया गठबंधन का मजबूत घटक है” : सुनील सिंह', 'desc' => 'स्वदेश राष्ट्रीय दैनिक (पेज 12) विशेष चुनावी विश्लेषण व लोकदल वक्तव्य', 'date' => 'Swadesh News - 03 Oct 2026'],
                ['img' => 'img/news/latest-news/news-77.jpeg','video' => 'img/news/latest-news/news-77.jpeg', 'name' => 'गांधी जयंती पर जंतर-मंतर से लोकदल ने शुरू किया जेल भरो आंदोलन : चौधरी सुनील सिंह — राष्ट्रीय सुदर्शन', 'desc' => 'राष्ट्रीय सुदर्शन अख़बार विस्तृत रिपोर्ट', 'date' => 'राष्ट्रीय सुदर्शन - 02 Oct 2026'],
                ['img' => 'img/news/latest-news/news-78.jpeg','video' => 'img/news/latest-news/news-78.jpeg', 'name' => 'जंतर-मंतर जेल भरो आंदोलन: दिल्ली पुलिस बस में राष्ट्रीय अध्यक्ष चौधरी सुनील सिंह एवं नेतागण', 'desc' => 'पुलिस हिरासत के दौरान बस से ऑन-द-स्पॉट लाइव फोटो कवरेज', 'date' => 'Live Photo - 02 Oct 2026'],
                ['img' => 'img/news/latest-news/news-71.jpeg','video' => 'https://www.cherishtimes.in/uttar-pradesh/90755', 'name' => 'गांधी जयंती पर जंतर-मंतर से लोकदल ने शुरू किया जेल भरो आंदोलन : चौधरी सुनील सिंह', 'desc' => 'मतदाता अधिकारों और लोकतांत्रिक संस्थाओं की जवाबदेही पर बड़ा आंदोलन', 'date' => 'Cherish Times News - 02 Oct 2026'],
                ['img' => 'img/news/latest-news/news-70.jpeg','video' => 'https://suryodaybharat.com/lokdals-fill-the-jails-protest-against-the-election-commissioner-at-jantar-mantar-national-president-chaudhary-sunil-singh-in-police-custody/', 'name' => 'जंतर-मंतर पर चुनाव आयुक्त के विरुद्ध \'जेल भरो आंदोलन\'; राष्ट्रीय अध्यक्ष चौधरी सुनील सिंह हिरासत में', 'desc' => 'सैकड़ों कार्यकर्ताओं के साथ सुनील सिंह पुलिस हिरासत में', 'date' => 'सूर्योदय भारत - 02 Oct 2026'],
                ['img' => 'img/news/latest-news/news-69.jpeg','video' => 'https://youtu.be/6Tz2jiiP7G0?si=_fLFHVCDp-0oT_Jc', 'name' => 'गांधी जयंती पर जंतर-मंतर से लोकदल का जेल भरो आंदोलन : सुनील सिंह — 4tv News', 'desc' => '4tv News Satellite विशेष वीडियो रिपोर्ट', 'date' => 'YouTube Video - 02 Oct 2026'],
                ['img' => 'img/news/latest-news/news-74.jpeg','video' => 'https://prakashprabhaw.com/khabar-hatke/jail-bharo-andolan/detail', 'name' => 'PPN News: गांधी जयंती पर जंतर-मंतर से लोकदल ने शुरू किया जेल भरो आंदोलन : चौधरी सुनील सिंह', 'desc' => 'Prakash Prabhaw News (PPN) विशेष ग्राउंड रिपोर्ट', 'date' => 'PPN News - 02 Oct 2026'],
                ['img' => 'img/news/latest-news/news-72.jpeg','video' => 'https://swarnapriya.com/?p=37012', 'name' => 'स्वर्णप्रिया: जंतर-मंतर से लोकदल का ‘जेल भरो’ आंदोलन, चौधरी सुनील सिंह समेत प्रदर्शनकारी हिरासत में', 'desc' => 'मतदाता अधिकारों पर लोकदल का हल्लाबोल', 'date' => 'Swarnapriya - 02 Oct 2026'],
                ['img' => 'img/news/latest-news/news-73.png','video' => 'https://bahujanvichar.com/raising-questions-regarding-voters-rights-and-the-accountability-of-democratic-institutions-is-the-democratic-right-of-any-citizen/', 'name' => 'बहुजन विचार: मतदाता अधिकार और लोकतांत्रिक संस्थाओं की जवाबदेही पर जेल भरो आंदोलन — सुनील सिंह', 'desc' => 'पारदर्शी चुनावी प्रक्रिया के लिए लोकदल का संघर्ष', 'date' => 'Bahujan Vichar - 02 Oct 2026'],
                ['img' => 'img/news/latest-news/news-75.jpeg','video' => 'https://www.facebook.com/share/18LQencKAf/?mibextid=wwXIfr', 'name' => 'लोकदल आधिकारिक फेसबुक: यह सिर्फ शुरुआत है! जेल भरो आंदोलन शुरू, रुकेंगे नहीं किसान और युवा', 'desc' => 'चौधरी सुनील सिंह जी का आधिकारिक संदेश', 'date' => 'Facebook Post - 02 Oct 2026'],
                ['img' => 'img/news/latest-news/news-73.png','video' => 'https://www.facebook.com/share/v/1QLV5avxig/', 'name' => 'बहुजन विचार वीडियो: पीएम और गृह मंत्री के खिलाफ आंदोलन की औपचारिक घोषणा — सुनील सिंह', 'desc' => 'Bahujan Vichar विशेष फेसबुक वीडियो कवरेज', 'date' => 'Facebook Video - 02 Oct 2026'],
                ['img' => 'img/news/latest-news/news-74.jpeg','video' => 'https://www.facebook.com/share/v/18CwLzxjMe/', 'name' => 'PPN वीडियो: जंतर-मंतर से लोकदल का जेल भरो आंदोलन, सुनील सिंह पुलिस हिरासत में — Facebook Live', 'desc' => 'PPN News Facebook Live कवरेज', 'date' => 'Facebook Video - 02 Oct 2026'],
                ['img' => 'img/news/latest-news/news-68.jpeg','video' => 'https://www.facebook.com/share/v/1GrxzshzGh/', 'name' => 'SIR को लेकर भारत की इंटरनेशनल बेइज्जती: ज्ञानेश कुमार पर बुरी तरह भड़का UN', 'desc' => 'वोटर सूची (SIR) और चुनाव आयोग की प्रक्रिया पर संयुक्त राष्ट्र में उठे गंभीर सवाल — 60 दिन में मांगा जवाब!', 'date' => 'GlobalNews360 (Facebook Video) - 29 Sep 2026'],
                ['img' => 'img/news/latest-news/news-67.jpeg','video' => 'https://www.facebook.com/share/v/1EZDeNhw2D/', 'name' => 'ज्योतिषी का चौंकाने वाला दावा, ग्रहों ने तय कर दी मोदी और ज्ञानेश कुमार की विदाई!', 'desc' => '4PM News LIVE — संजय शर्मा व आचार्य राजीव नारायण शर्मा की विशेष चर्चा', 'date' => '4PM News LIVE (Facebook Video) - 29 Sep 2026'],
                ['img' => 'img/news/latest-news/news-66.jpeg','video' => 'https://www.instagram.com/reel/Dc957qETrZV/?stkn=M3dvNjlpZzd4eWs1', 'name' => 'TADIPAAR: अमित शाह और सत्ता की राजनीति का अनसुना सच — विशेष वीडियो रील', 'desc' => 'सत्ता और सियासत के इतिहास पर विशेष वीडियो विश्लेषण', 'date' => 'Instagram Reel - 29 Sep 2026'],
                ['img' => 'img/news/latest-news/news-64.jpeg','video' => 'https://x.com/lokdalindia/status/2104572588303565103?s=46&t=_2mEBmLj46j89OPjnvYbbg', 'name' => 'इंडिया गठबंधन यूपी में 300+ सीटें लाकर भाजपा को चित करेगा : सुनील सिंह', 'desc' => 'लोकदल राष्ट्रीय अध्यक्ष चौधरी सुनील सिंह का तीखा वीडियो संदेश', 'date' => 'Lokdal Official (X Video) - 28 Sep 2026'],
                ['img' => 'img/news/latest-news/news-65.jpeg','video' => 'https://www.facebook.com/share/v/19fTgFLpLJ/?mibextid=wwXIfr', 'name' => 'लोकदल राष्ट्रीय अध्यक्ष सुनील सिंह का तीखा संदेश — सहयोगी दल अपने नेताओं पर लगाम लगाएं', 'desc' => 'देशहित का INDIA गठबंधन कमजोर नहीं पड़ना चाहिए — चौधरी सुनील सिंह', 'date' => 'Facebook Video - 28 Sep 2026'],
                ['img' => 'img/news/latest-news/news-63.jpeg','video' => 'img/news/latest-news/news-63.jpeg', 'name' => 'गठबंधन को कमजोर करने वाले बयानों से बचें, सभी साथी एकजुट रहें : सुनील सिंह', 'desc' => 'लोकदल आधिकारिक प्रेस विज्ञप्ति — चौधरी सुनील सिंह', 'date' => 'Lokdal Press Statement - 28 Sep 2026'],
                ['img' => 'video/wp-video-thumb.jpeg','video' => 'https://www.instagram.com/reel/DdyuL0DvquJ/?stkn=eG0zZmVkOWo3YjI4', 'name' => 'लोकदल विशेष वीडियो रील — चौधरी सुनील सिंह', 'desc' => 'राष्ट्रीय नेतृत्व का विशेष वीडियो संदेश', 'date' => 'Instagram Reel - 28 Sep 2026'],
                ['img' => 'img/news/latest-news/news-61.jpeg','video' => 'https://www.facebook.com/share/p/1c9wGrwSyc/?mibextid=wwXIfr', 'name' => 'मुख्य चुनाव आयुक्त ज्ञानेश कुमार को न PM बनना है न CM: सुनील सिंह', 'desc' => 'लोकदल आधिकारिक फेसबुक पोस्ट — चौधरी सुनील सिंह', 'date' => 'Facebook Post - 28 Sep 2026'],
                ['img' => 'img/news/latest-news/news-60.jpeg','video' => 'https://www.facebook.com/share/v/1Hn2YdNYMt/', 'name' => 'CEC Gyanesh Kumar के खिलाफ फिर एकजुट होगा विपक्ष? इस्तीफे के लिए मोर्चेबंदी', 'desc' => 'Ajit Anjum विशेष विश्लेषण (Facebook Video)', 'date' => 'Facebook Video - 28 Sep 2026'],
                ['img' => 'img/news/latest-news/news-62.jpeg','video' => 'img/news/latest-news/news-62.jpeg', 'name' => 'मुख्य चुनाव आयुक्त ज्ञानेश कुमार पर तीखा हमला: राष्ट्रीय सुदर्शन रिपोर्ट', 'desc' => 'राष्ट्रीय सुदर्शन प्रेस रिपोर्ट', 'date' => '26 Sep 2026'],
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
              ];
              ?>
            <div class="col-12 col-lg-4 d-flex flex-column justify-content-between">
              <div class="title">
                <h5>Most Popular Videos</h5>
              </div>
              <!-- Single Blog Post -->
              <?php foreach ($ourServicesArr as $key => $value): ?>
              <?php if ($key < 8): ?>
              <div class="single-blog-post wow fadeInUpBig" data-wow-delay="0.2s">
                <!-- Post Thumbnail -->
                <div class="post-thumbnail">
                  <img src="<?php echo $value['img']; ?>" alt="" loading="lazy" decoding="async">
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
              <?php else: ?>
              <div class="single-blog-post post-style-2 d-flex align-items-center wow fadeInUpBig" data-wow-delay="0.2s">
                <div class="post-thumbnail" style="position: relative;">
                  <img src="<?php echo $value['img']; ?>" alt="" loading="lazy" decoding="async">
                  <a href="<?php echo $value['video']; ?>" target="_blank" class="video-btn" style="width: 26px; height: 26px; line-height: 26px;"><i class="fa fa-play" style="line-height: 26px; font-size: 11px;"></i></a>
                </div>
                <div class="post-content">
                  <a href="<?php echo $value['video']; ?>" target="_blank" class="headline">
                    <h5><?php echo $value['name']; ?></h5>
                    <div class="post-meta">
                      <p><?php echo $value['date']; ?></p>
                    </div>
                  </a>
                </div>
              </div>
              <?php endif; ?>
              <?php endforeach; ?>
            </div>
          </div>
          <?php 
            $ourServicesArr = [
              ['img' => 'img/news/latest-news/news-76.jpeg'],
              ['img' => 'img/news/latest-news/news-77.jpeg'],
              ['img' => 'img/news/latest-news/news-78.jpeg'],
              ['img' => 'img/news/latest-news/news-71.jpeg'],
              ['img' => 'img/news/latest-news/news-70.jpeg'],
              ['img' => 'img/news/latest-news/news-69.jpeg'],
              ['img' => 'img/news/latest-news/news-74.jpeg'],
              ['img' => 'img/news/latest-news/news-72.jpeg'],
              ['img' => 'img/news/latest-news/news-73.png'],
              ['img' => 'img/news/latest-news/news-75.jpeg'],
              ['img' => 'img/news/latest-news/news-68.jpeg'],
              ['img' => 'img/news/latest-news/news-67.jpeg'],
              ['img' => 'img/news/latest-news/news-66.jpeg'],
              ['img' => 'img/news/latest-news/news-63.jpeg'],
              ['img' => 'img/news/latest-news/news-64.jpeg'],
              ['img' => 'img/news/latest-news/news-65.jpeg'],
              ['img' => 'img/news/latest-news/news-61.jpeg'],
              ['img' => 'img/news/latest-news/news-62.jpeg'],
              ['img' => 'img/news/latest-news/news-60.jpeg'],
              ['img' => 'img/news/latest-news/news-57.jpeg'],
              ['img' => 'img/news/latest-news/news-58.jpeg'],
              ['img' => 'img/news/latest-news/news-59.jpeg'],
              ['img' => 'img/news/latest-news/news-56.jpeg'],
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
                  <img src="<?php echo $value['img']; ?>" alt="" loading="lazy" decoding="async">
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
    <!-- Lightbox + jQuery -->
    <script src="assets/vendor/lightbox/lightbox-plus-jquery.min.js"></script>
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
