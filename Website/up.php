<!DOCTYPE html>


<?php

include_once("db.php");





$sql="SELECT DISTINCT region FROM executives;";
$results = mysqli_query($con,$sql);


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



    table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
    }

    td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
    }
</style>




<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>UP Executives</title>


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
    <?php require_once("header.php"); ?>
    <!-- ***** Header Area End ***** -->

    <!-- ********** Hero Area Start ********** -->
    <div class="hero-area height-400 bg-img background-overlay" id="subheading">
        <h1 style="color: aliceblue; text-align: center; padding-top: 180px;">UP Executives</h1>
    </div>
    <!-- ********** Hero Area End ********** -->

    <div class="main-content-wrapper section-padding-100">
        <div class="container">
            <div class="row justify-content-center">
                <!-- ============= Post Content Area Start ============= -->
                <div class="col-12 col-lg-8">
                    <div class="post-content-area mb-100">

                   
                        <!-- Catagory Area -->
                        <div class="world-catagory-area">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="title">Regional List : </li>

                                <li class="nav-item">
                                    <a class="nav-link active" id="tab1" data-toggle="tab" href="#tab" role="tab" aria-controls="world-tab-1" aria-selected="true">All</a>
                                </li>

                                <?php
                                while($rows=mysqli_fetch_assoc($results)){
									$region[] = $rows['region'];
                                ?>
                                <li class="nav-item">
                                    <a class="nav-link" id="tab1" data-toggle="tab" href="#<?= $rows['region'];?>" role="tab" aria-controls="world-tab-1" aria-selected="true"><?= $rows['region'];?></a>
                                </li>
                                

                                <?php
                                }
                                ?>
                            </ul>


                      


                            <div class="tab-content" id="myTabContent">

                                <div class="tab-pane fade show active" id="tab" role="tabpanel" aria-labelledby="tab3">
                                    <h1 style="text-align:center;">Regional List Of UP Executives :-</h1><br><br>
                                    
                                <?php
                                $results = mysqli_query($con,$sql);
                                while($rows=mysqli_fetch_assoc($results)){
									$region[] = $rows['region'];
                                ?>

                                    <!-- Single Blog Post -->
                                    
                                    <div class="single-blog-post d-flex align-items-center">
                                        
                                            <h4 style="text-align:center;"><?= $rows['region']; ?></h4>
                                        
                                        
                                    </div>
                                    
                                <?php
                                }
                                ?>

                                    
                                </div>
                                
                                      <?php
                                        foreach($region as $value){
                                            
                                      ?>
                                    
                                            <div class="tab-pane fade" id="<?=$value?>" role="tabpanel" aria-labelledby="<?=$value?>">

                                                <?php

                                                    $sql="SELECT DISTINCT block FROM executives where region='$value';";
                                                    $results = mysqli_query($con,$sql);
                                                    while($rows=mysqli_fetch_assoc($results)){
                                                        $block[]=$rows['block'];
                                                    }




                                                    foreach($block as $bname){
                                                        $sql="SELECT * FROM executives WHERE region='$value' AND block='$bname';";
                                                        $results = mysqli_query($con,$sql);
                                                        
                                                    unset ($block);

                                                ?>
                                                
                                                    <!-- Single Blog Post -->
                                                <div class="single-blog-post post-style-4 d-flex align-items-center">
                                                    
                                                        <!-- Post Content -->
                                                        <div class="post-content">
                                                            
                                                            <h5 style="text-align:center;">Block : <?= $bname; ?></h5>
                                                            
                                                                <table>
                                                                    <tr style="background-color:rgba(0, 128, 0, 0.555);">
                                                                        <th>Designation</th>
                                                                        <th>Name</th>
                                                                        <th>Father's Name</th>
                                                                        <th>Village</th>
                                                                        <th>Contact</th>
                                                                        <th>Address</th>
                                                                    </tr>
                                                                    <?php
                                                                    while($rows=mysqli_fetch_assoc($results)){
                                                                        ?>
                                                                        <tr>
                                                                            <td><?= $rows['designation']; ?></td>
                                                                            <td><?= $rows['name']; ?></td>
                                                                            <td><?= $rows['f_name']; ?></td>
                                                                            <td><?= $rows['village']; ?></td>
                                                                            <td><?= $rows['mobile']; ?></td>
                                                                            <td><?= $rows['address']; ?></td>
                                                                        </tr>
                                                                    
                                                                    <?php
                                                                    }
                                                                    ?>
                                                                    
                                                                    
                                                                    
                                                                </table>
                                                            
                                                        </div>
                                                </div>
                                                   
                                                <?php
                                                        
                                                    }
                                                ?>
                                                
                                            </div>
                                        
                                <?php
                                        }
                                        ?>
                                

                            </div>
                            
                        </div>

                        
                    </div>
                </div>
            

                <!-- ========== Sidebar Area ========== -->
                    <?php require_once("sidebar.php"); ?>
                    <!-- ========== Sidebar Area End ========== -->

            </div>
        </div>
                <!-- ***** Footer Area Start ***** -->
                <?php require_once("footer.php"); ?>
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