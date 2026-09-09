<?php

include_once("db.php");

$sql="SELECT * FROM members;";
$result = mysqli_query($con,$sql);
session_start();
if(isset($_SESSION['user'])){
?>









<!DOCTYPE html>
<html lang="en">
	
<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="">
		<meta name="author" content="">
		<title>Lokdal | Dashboard</title>

		<!-- Bootstrap core CSS -->
		<link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">

		<!-- Custom fonts for this template -->
		<link href="assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

		<!-- Custom fonts for this template -->
		<link href="assets/plugins/themify/css/themify.css" rel="stylesheet" type="text/css">

		<!-- Angular Tooltip Css -->
		<link href="assets/plugins/angular-tooltip/angular-tooltips.css" rel="stylesheet">

		<!-- Page level plugin CSS -->
		<link href="assets/dist/css/animate.css" rel="stylesheet">

		<!-- Custom styles for this template -->
		<link href="assets/dist/css/glovia.css" rel="stylesheet">
		<link href="assets/dist/css/glovia-responsive.css" rel="stylesheet">

		<!-- Custom styles for Color -->
		<link id="jssDefault" rel="stylesheet" href="assets/dist/css/skins/default.css">
		<link rel="icon" href="../Website/img/img/logo1.png">
	</head>

	<body class="fixed-nav sticky-footer red-skin" id="page-top">
	
	<?php
		 $page="join.php";
		 include_once("navbar.php"); 
	?>
		<!-- ================================================
				Start Container Wrapper
		================================================== -->
		<div class="content-wrapper">
			<div class="container-fluid">
			
				
				
				<div class="row">
					<div class="col-md-12 col-lg-12">
						<div class="card padd-15">
							<div class="flexbox">
								<h3 class="mb-0">New Request to Join Lokdal</h3>
								
							</div>
						</div>
						<div class="card">
							
							<?php
                        				  while($row=mysqli_fetch_assoc($result)){
											  
                        				?>
							<ul class="mail_list list-group list-unstyled">
								<!-- Single Mail -->
								<li class="ground-single-list">
									<div class="ground">
										<div class="pull-left">
											
											<div class="thumb hidden-sm-down m-r-20"> <img style="height:180px;" src="assets/dist/img/user-1.jpg" class="" alt=""> </div>
										</div>
										
										<div class="media-body">
										
											<div class="media-heading">
												<small class="float-right text-muted"><time class="hidden-sm-down" datetime="2017"><?= $row['time'];?></time><i class="zmdi zmdi-attachment-alt"></i> </small>
											</div>
											<div>
                                            <p class="msg"><strong>Name : </strong><?= $row['name'];?></p>
                                                <p class="msg"><strong>Email ID : </strong><?= $row['email'];?></p>
                                                <p class="msg"><strong>Contact No. : </strong><?= $row['contact'];?></p>
                                                <p class="msg"><strong>AADHAR No. : </strong><?= $row['aadhar'];?></p>
                                                <p class="msg"><strong>Address : </strong><?= $row['address'];?></p>
                                            </div>
                                            <a href="#" style="float:right; border:1px solid green; padding:10px; margin-left:5px;" >
                                                <strong>Denay Candidate</strong>
                                            </a>
                                            <a class="allow" href="#" style="float:right; border:1px solid green; padding:10px;" >
                                                <strong>Allow Candidate</strong>
                                            </a>
                                            <br><br><br>
										</div>
										<style>
                                            .allow:hover{
                                                background-color:green;
                                                color:white !important;
                                            }
                                        </style>
									</div>
								</li>
								
								
							</ul>
							<?php
										  }
										?>
							
						</div>
					</div>
				</div>

			</div>  
			<!-- /.content-wrapper-->
			
			<?php require_once("footer.php"); ?>
			
			
			<!-- Scroll to Top Button-->  
			<a class="scroll-to-top rounded cl-white theme-bg" href="#page-top">
			  <i class="ti-angle-double-up"></i>
			</a>

			<!-- Bootstrap core JavaScript-->
			<script src="assets/plugins/jquery/jquery.min.js"></script>
			<script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
			
			<!-- Core plugin JavaScript-->
			<script src="assets/plugins/jquery-easing/jquery.easing.min.js"></script>
			
			 <!-- Slick Slider Js -->
			<script src="assets/plugins/slick-slider/slick.js"></script>
			
			<!-- Slim Scroll -->
			<script src="assets/plugins/slim-scroll/jquery.slimscroll.min.js"></script>
			
			<!-- Angular Tooltip -->
			<script src="assets/plugins/angular-tooltip/angular.js"></script>
			<script src="assets/plugins/angular-tooltip/angular-tooltips.js"></script>
			<script src="assets/plugins/angular-tooltip/index.js"></script>
			
			<!-- Custom scripts for all pages-->
			<script src="assets/dist/js/glovia.js"></script>
			<script src="assets/dist/js/jQuery.style.switcher.js"></script>
			<script>
				function openRightMenu() {
					document.getElementById("rightMenu").style.display = "block";
				}
				function closeRightMenu() {
					document.getElementById("rightMenu").style.display = "none";
				}
			</script>

			<script type="text/javascript">
				$(document).ready(function() {
					$('#styleOptions').styleSwitcher();
				});
			</script>
			
			<script>
			  $('.dropdown-toggle').dropdown()
			  </script>
			
	  </div>
	  <!-- Wrapper -->
	  
	</body>
	
</html>
<?php
 }
else{
  header("location:../admin");
}

?>