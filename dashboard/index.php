<?php 
session_start();
if(isset($_SESSION['user'])){
require_once('db.php');
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
		
		<!-- Morris Charts CSS -->
		<link href="assets/plugins/morris.js/morris.css" rel="stylesheet">

		<!-- Page level plugin CSS -->
		<link href="assets/dist/css/animate.css" rel="stylesheet">

		<!-- Custom styles for this template -->
		<link href="assets/dist/css/glovia.css" rel="stylesheet">
		<link href="assets/dist/css/glovia-responsive.css" rel="stylesheet">

		<!-- Jvector Map -->
		<link href="assets/plugins/jvectormap/jquery-jvectormap.css" rel="stylesheet">
		<link href="assets/plugins/jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet">

		<!-- Custom styles for Color -->
		<link rel="stylesheet" href="assets/dist/css/skins/default.css">
		<link rel="icon" href="../Website/img/img/logo1.png">
	</head>

	<body class="fixed-nav sticky-footer red-skin" id="page-top">
	
		<?php
		 $page="index.php";
		 include_once("navbar.php"); 
		 ?>


		<div class="content-wrapper">
			<div class="container-fluid">
			
				<!-- Title & Breadcrumbs-->
				<div class="row page-titles">
					<div class="col-md-12 align-self-center">
						<h4 class="theme-cl">Dashboard</h4>
						
					</div>
				</div>
				<!-- Title & Breadcrumbs-->

				<!-- row -->
				<div class="row">
					<?php
									
						$query="select count(*) as total from users";
						$result=mysqli_query($con,$query);
						$row=mysqli_fetch_assoc($result);

					?>
					<div class="col-md-3 col-sm-6">
						<a href="manage_user.php">
							<div class="card">
								<div class="card-body">
									<div class="float-right">
										<i class="icon ti-user blue-cl font-30"></i>
									</div>
									<div class="widget-detail">
										<h4 class="mb-1"><?php echo $row['total']; ?></h4>
										<span>Total Users</span>
									</div>
										
								</div>
							</div>
						</a>
					</div>
					<?php
									
						$query="select count(*) total from contact";
						$result=mysqli_query($con,$query);
						$row=mysqli_fetch_assoc($result);

					?>
					<div class="col-md-3 col-sm-6">
						<a href="inbox.php">
							<div class="card">
								<div class="card-body">
									<div class="float-right">
										<i class="ti-comment-alt red-cl font-30"></i>
									</div>
									<div class="widget-detail">
										<h4 class="mb-1"><?php echo $row['total']; ?></h4>
										<span>Inbox-Messages</span>
									</div>
								</div>
							</div>
						</a>
					</div>
					<?php
									
						$query="select sum(amount) as total from donation";
						$result=mysqli_query($con,$query);
						$row=mysqli_fetch_assoc($result);

					?>
					<div class="col-md-3 col-sm-6">
						<a href="donation.php">
							<div class="card">
								<div class="card-body">
									<div class="float-right">
										<i class="ti-money yellow-cl font-30"></i>
									</div>
									<div class="widget-detail">
										<h4 class="mb-1">₹ <?php echo $row['total']; ?>/-</h4>
										<span>Total Donation Funds</span>
									</div>
								</div>
							</div>
						</a>
					</div>
					<?php
									
						$query="select count(*) total from members";
						$result=mysqli_query($con,$query);
						$row=mysqli_fetch_assoc($result);

					?>
					<div class="col-md-3 col-sm-6">
						<a href="new_request.php">
							<div class="card">
								<div class="card-body">
									<div class="float-right">
										<i class="ti-ticket green-cl font-30"></i>
									</div>
									<div class="widget-detail">
										<h4 class="mb-1"><?php echo $row['total']; ?></h4>
										<span>Join Lokdal Requests</span>
									</div>
								</div>
							</div>
						</a>
					</div>
					
				</div>
				<!-- /row -->
				
				
			</div>  
			<!-- /.content-wrapper -->
			
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
			
			<!-- Morris.js charts -->
		    <script src="assets/plugins/raphael/raphael.min.js"></script>
		    <script src="assets/plugins/morris.js/morris.min.js"></script>
			
			<!-- Custom Chart JavaScript -->
		    <script src="assets/dist/js/custom/dashboard/dashboard.js"></script>
			
			<!-- Custom scripts for all pages -->
			<script src="assets/dist/js/glovia.js"></script>
			<script src="assets/dist/js/jQuery.style.switcher.js"></script>
			
			
			
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
