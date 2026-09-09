<?php

include_once("db.php");

$sql="SELECT * FROM contact ORDER BY id DESC";
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
		<title>Contact List</title>

		<!-- Bootstrap core CSS -->
		<link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">

		<!-- Custom fonts for this template -->
		<link href="assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

		<!-- Custom fonts for this template -->
		<link href="assets/plugins/themify/css/themify.css" rel="stylesheet" type="text/css">

		<!-- Angular Tooltip Css -->
		<link href="assets/plugins/angular-tooltip/angular-tooltips.css" rel="stylesheet">

		<!-- Page level plugin CSS -->
		<link href="assets/plugins/datatables/dataTables.bootstrap4.css" rel="stylesheet">

		<!-- Page level plugin CSS -->
		<link href="assets/dist/css/animate.css" rel="stylesheet">

		<!-- Custom styles for this template -->
		<link href="assets/dist/css/glovia.css" rel="stylesheet">
		<link href="assets/dist/css/glovia-responsive.css" rel="stylesheet">

		<!-- Custom styles for Color -->
		<link id="jssDefault" rel="stylesheet" href="assets/dist/css/skins/default.css">
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
				<!-- Title & Breadcrumbs-->
				<div class="row page-titles">
					<div class="col-md-5 align-self-center">
						<h4 class="theme-cl">Contacts</h4>
					</div>
				</div>
				<!-- Title & Breadcrumbs-->
				<div class="row">
				<div class="col-md-12 col-sm-12 mb-4">
						<div class="card">
							<div class="table-responsive">
								<table class="table table-2 table-hover mb-0">
									<thead>
										<tr>
											<th>Name</th>
											<th>Email</th>	
											<th>Mobile</th>
											<th>Address</th>
											<th>Message</th>
											<th>Action</th>
										</tr>
									</thead>
									<tbody>
										<?php
                        				  while($row=mysqli_fetch_assoc($result)){
											  
                        				?>
										<tr>
											<td>
												<a href="#"><img src="assets/dist/img/user-1.jpg" class="avatar img-circle" alt="Avatar">
													<?= $row['name'];?>
												</a>
											</td>
											<td><?= $row['email'];?></td> 
											<td><?= $row['mobile'];?></td>							
											<td><?= $row['address'];?></td>
											<td><?= $row['msg'];?></td>
											<td>
												<a href="#" class="show-more" data-toggle="tooltip" title="Go For Detail">
													<i class="ti-arrow-right"></i>
												</a>
											</td>
										</tr>
										<?php
										  }
										?>
									</tbody>
								</table>
							</div>	
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