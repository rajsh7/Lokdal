<?php

include_once("db.php");

$sql="SELECT * FROM contact;";
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
		 $page="messages.php";
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
								<h3 class="mb-0">Inbox</h3>
								<div class="input-group width-auto">
									<input type="text" class="form-control" placeholder="Search for...">
									<span class="input-group-btn d-intable">
										<button class="btn btn-secondary height-40" type="button">Go!</button>
									</span>
								</div>
							</div>
						</div>
						<div class="card">
							
							<!-- mail Option -->
							<div class="mail-option padd-10 bb-1">
								<span class="custom-checkbox">
									<input type="checkbox" id="checkbox0" name="options[]" value="0">
									<label for="checkbox0"></label>
								</span>
								All
								
								<div class="btn-group mrg-l-10">
									<button type="button" class="btn btn-secondary">
										<i class=" fa fa-refresh"></i>
									</button>
								</div>
								
								<div class="btn-group">
									<button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										More
									</button>
									<div class="dropdown-menu">
										<a href="#"><i class="fa fa-pencil"></i> Mark as Read</a>
										<a href="#"><i class="fa fa-ban"></i> Spam</a>
										<a href="#"><i class="fa fa-trash-o"></i> Delete</a>
									</div>
								</div>
								
								<div class="pull-right">
									<span>1-50 of 234</span>
									<div class="btn-group mrg-l-5">
										<button type="button" class="btn btn-secondary">
											<i class="fa fa-angle-right pagination-left"></i>
										</button>
									</div>
									<div class="btn-group mrg-l-5">
										<button type="button" class="btn btn-secondary">
											<i class="fa fa-angle-right pagination-right"></i>
										</button>
									</div>
								</div>
							</div>
							<?php
                        				  while($row=mysqli_fetch_assoc($result)){
											  
                        				?>
							<ul class="mail_list list-group list-unstyled">
								<!-- Single Mail -->
								<li class="ground-single-list">
									<div class="ground">
										<div class="pull-left">
											<div class="controls">
												<span class="custom-checkbox">
													<input type="checkbox" id="checkbox1" name="options[]" value="1">
													<label for="checkbox1"></label>
												</span>
											</div>
											<div class="thumb hidden-sm-down m-r-20"> <img src="assets/dist/img/user-1.jpg" class="avatar avatar-lg" alt=""> </div>
										</div>
										
										<div class="media-body">
										
											<div class="media-heading">
												<a href="mail-single.html" class="m-r-10"><?= $row['name'];?></a>
												
												<small class="float-right text-muted"><time class="hidden-sm-down" datetime="2017"><?= $row['time'];?></time><i class="zmdi zmdi-attachment-alt"></i> </small>
											</div>
											<p class="msg"><?= $row['msg'];?></p>
										</div>
										
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