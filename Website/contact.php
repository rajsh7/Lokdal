<?php



    include_once("db.php");



    if(isset($_POST["submit"])){
        $name=$_POST["name"];
        $email=$_POST["email"];
        $mobile=$_POST["mobile"];
        $address=$_POST["address"];
        $msg=$_POST["msg"];
        
       

        $sql="INSERT INTO `contact`(`name`, `email`,`mobile`, `address`, `msg`) VALUES ('$name','$email','$mobile','$address','$msg');";

        if($con->query($sql)==true){
            //echo "successfully inserted";
            //echo $sql;
            
            echo "<script>alert('Your message is sent.');</script>";
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
    <meta name="google-translate-customization" content="9f841e7780177523-3214ceb76f765f38-gc38c6fe6f9d06436-c"></meta>

    <!-- Title  -->
    <title>Lokdal | Contact Us</title>
    <!-- Favicon  -->
    <link rel="icon" href="img/img/logo1.png">
    <!-- Style CSS -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/google translator.css">
    <link href="https://fonts.googleapis.com/css?family=Rubik" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald:300,400,500,700%7CRoboto:300,400,700" rel="stylesheet">



    
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
 
  <?php include_once("header.php") ?>

<!-- ***** Header Area End ***** -->
    <!-- ********** Hero Area Start ********** -->
    <div class="hero-area height-400 bg-img background-overlay" id="subheading">
        <h1 style="color: aliceblue; text-align: center; padding-top: 180px;">Contact Us</h1>
    </div>
    <!-- ********** Hero Area End ********** -->
    <section class="contact-area section-padding-100">
        <div class="container">
            <div class="row justify-content-center">
                <!-- Contact Form Area -->
                <div class="col-12 col-md-10 col-lg-8">
                    <div class="contact-form">
                        <h5>Message</h5>
                        <!-- Contact Form -->
                        <form action="contact.php" method="post">
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
                                        <input type="text" name="mobile" id="mobile" required>
                                        <span class="highlight"></span>
                                        <span class="bar"></span>
                                        <label>Mobile No</label>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="group">
                                        <input type="text" name="address" id="address" required>
                                        <span class="highlight"></span>
                                        <span class="bar"></span>
                                        <label>Enter your Address</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="group">
                                        <textarea name="msg" id="msg" required></textarea>
                                        <span class="highlight"></span>
                                        <span class="bar"></span>
                                        <label>Enter your message</label>
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