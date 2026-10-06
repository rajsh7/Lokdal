<?php



include_once("db.php");



    if(isset($_POST["submit"])){
        $name=$_POST["name"];
        $email=$_POST["email"];
        $contact=$_POST["contact"];
        $amt=$_POST["amt"];
        $msg=$_POST["msg"];
        
       

        $sql="INSERT INTO `donation`(`name`, `email`, `contact`, `amount`) VALUES ('$name', '$email', '$contact', '$amt');";

        if($con->query($sql)==true){
            //echo "successfully inserted";
            //echo $sql;
            
            echo "<script>alert('Thanks For Your Donation.');</script>";
        }
        else{
            echo "ERROR: $sql <br> $con->error";
        }
        $con->close();
        

    }






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
      </style>







<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <!-- Title  -->
    <title>Lokdal | Donate</title>
    <!-- Favicon  -->
    <link rel="icon" href="img/img/logo1.png">
    <!-- Style CSS -->

    <link rel="stylesheet" href="style.css?v=20261006_3">
    <link rel="stylesheet" href="assets/vendor/lightbox/lightbox.min.css">
    <link rel="stylesheet" href="css/google translator.css">
    <link href="https://fonts.googleapis.com/css?family=Rubik" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald:300,400,500,700%7CRoboto:300,400,700" rel="stylesheet">
    <meta name="google-translate-customization" content="9f841e7780177523-3214ceb76f765f38-gc38c6fe6f9d06436-c"></meta>

    
    <style>
        .goog-logo-link { display:none !important​; } 
        .goog-te-gadget{ color: transparent !important; }
        .goog-te-banner-frame.skiptranslate { display: none !important; } body { top: 0px !important; }

        body{
        font-family: Oswald, "Helvetica Neue", -apple-system, BlinkMacSystemFont, "Segoe UI", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
    }
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
  <!-- ***** Header Area Start ***** -->

  <?php include_once("header.php"); ?>

<!-- ***** Header Area End ***** -->
    <!-- ********** Hero Area Start ********** -->
    <div class="hero-area height-400 bg-img background-overlay" id="subheading">
        <h1 style="color: aliceblue; text-align: center; padding-top: 180px;">Donate</h1>
    </div>
    <!-- ********** Hero Area End ********** -->
    <section class="contact-area section-padding-100">
        <div class="container">
            <div class="row justify-content-center">
                <!-- Recent Donor Acknowledgement / Support Highlight -->
                <div class="col-12 col-md-10 col-lg-8 mb-4">
                    <div class="p-3 p-md-4" style="background: #f4fbf7; border: 2px solid #00772D; border-radius: 12px; box-shadow: 0 4px 15px rgba(0,119,45,0.08);">
                        <div class="d-flex justify-content-between align-items-center mb-3 flex-wrap">
                            <span class="badge badge-success px-3 py-2 font-weight-bold" style="font-size: 13px; background: #00772D;">
                                <i class="fa fa-handshake-o mr-1"></i> हाल ही में प्राप्त आर्थिक सहयोग • Donor Acknowledgment
                            </span>
                            <span class="text-success font-weight-bold" style="font-size: 12.5px;">अक्टूबर 2026</span>
                        </div>
                        <div class="row align-items-center">
                            <div class="col-12 col-md-5 mb-3 mb-md-0 text-center">
                                <a data-lightbox="cheque" href="img/donation/cheque-sandeep-tomar.jpeg" title="श्री संदीप तोमर जी द्वारा लोकदल को ₹50,000/- का चेक सहयोग">
                                    <img src="img/donation/cheque-sandeep-tomar.jpeg" alt="श्री संदीप तोमर जी द्वारा दान का चेक" style="width: 100%; max-height: 200px; object-fit: contain; border-radius: 8px; border: 1.5px solid #00772D; background: #fff;" loading="lazy">
                                </a>
                                <small class="d-block text-muted mt-1 font-weight-bold" style="font-size: 11px;">
                                    <i class="fa fa-search-plus"></i> चेक की प्रति देखने के लिए क्लिक करें
                                </small>
                            </div>
                            <div class="col-12 col-md-7">
                                <h5 class="font-weight-bold mb-1" style="color: #00772D; font-size: 17px;">श्री संदीप तोमर (Mr. Sandeep Tomar)</h5>
                                <div class="badge badge-warning text-dark font-weight-bold px-2 py-1 mb-2" style="font-size: 13px;">
                                    सहयोग राशि: ₹50,000/- (पचास हजार रुपये मात्र)
                                </div>
                                <p style="font-size: 13px; line-height: 1.6; color: #2d3748; margin-bottom: 8px;">
                                    लोकदल के जनहित अभियानों, किसान अधिकार आंदोलन एवं लोकतंत्र-संविधान रक्षा संकल्प हेतु <strong>श्री संदीप तोमर</strong> जी द्वारा <strong>₹50,000/-</strong> का आर्थिक सहयोग चेक के माध्यम से प्रदान किया गया।
                                </p>
                                <div style="background: #e8f5e9; border-left: 3px solid #00772D; padding: 6px 10px; border-radius: 0 4px 4px 0; font-size: 12px; color: #004d1a;">
                                    <strong>लोकदल परिवार</strong> श्री संदीप तोमर जी के इस अमूल्य सहयोग, संबल व विश्वास के लिए हार्दिक आभार एवं धन्यवाद व्यक्त करता है।
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Contact Form Area -->
                <div class="col-12 col-md-10 col-lg-8">
                    <div class="contact-form">
                        <h5>Donation Form • सहयोग प्रपत्र</h5>
                        <!-- Contact Form -->
                        <form action="#" method="post">
                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <div class="group">
                                        <input type="text" name="name" id="name" required>
                                        <span class="highlight"></span>
                                        <span class="bar"></span>
                                        <label>Enter your name</label>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="group">
                                        <input type="email" name="email" id="email" required>
                                        <span class="highlight"></span>
                                        <span class="bar"></span>
                                        <label>Enter your email</label>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="group">
                                        <input type="contact" name="contact" id="contact" required>
                                        <span class="highlight"></span>
                                        <span class="bar"></span>
                                        <label>Enter your Contact No.</label>
                                    </div>
                                </div><div class="col-12 col-md-6">
                                    <div class="group">
                                        <input type="text" name="amt" id="email" required>
                                        <span class="highlight"></span>
                                        <span class="bar"></span>
                                        <label>Enter Donation Amount</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="group">
                                        <textarea name="msg" id="message" required></textarea>
                                        <span class="highlight"></span>
                                        <span class="bar"></span>
                                        <label>Enter your message (Optional*)</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                <input type="submit" name="submit" class="btn world-btn"></input>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include_once("footer.php"); ?>
    
    
    <!-- ***** Footer Area End ***** -->
    
    <!-- jQuery (Necessary for All JavaScript Plugins) -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Plugins js -->
    <script src="js/plugins.js"></script>
    <!-- Lightbox js -->
    <script src="assets/vendor/lightbox/lightbox.min.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'UA-23581568-13');
</script>
</body>
</html>