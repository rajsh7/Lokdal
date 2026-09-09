<?php

session_start();
if(isset($_SESSION['user'])){


    if(isset($_GET['adding'])){
        $name=$_POST['name'];
        $f_name=$_POST['f_name'];
        $mobile=$_POST['mobile'];
        $state=$_POST['state'];
        $village=$_POST['village'];
        $block=$_POST['block'];
        $address=$_POST['address'];
		$region=$_POST['region'];
		$designation=$_POST['designation'];



        include_once("db.php");

		if($state=='Uttar Pradesh'){
			$sql="INSERT INTO `executives`(`name`, `f_name`, `mobile`, `village`, `block`, `address`, `designation`, `region`) 
			VALUES ('$name', '$f_name', '$mobile', '$village', '$block', '$address', '$designation', '$region');";
		}

        
        $result = mysqli_query($con,$sql);
        
        echo "<script>alert('$name is Registered Successfully with LOKDAL');</script>";
		header("location:executives.php");
    }

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
	


        <style>
#submitbtn{
float:right;
padding:10px;
padding-left:30px;
padding-right:30px;
font-weight:bolder;
border:1px solid green;
margin-left:5px;
color:green;
}

#submitbtn:hover{
background-color:green;
color:white;
}

#btn{
padding:10px;
padding-left:30px;
padding-right:30px;
font-weight:bolder;
border:1px solid green;
color:green;
border-radius:50px;
}

#btn:hover{
background-color:green;
color:white;
}
</style>

		<!-- ===============================
			Navigation Start
		====================================-->

		<?php 
            $page="join.php";
            require_once("navbar.php"); 
        ?>

		<!-- =====================================================
		                    End Navigations
		======================================================= -->
		









		<!-- ================================================
				Start Container Wrapper
		================================================== -->
		<div class="content-wrapper">
			<div class="container-fluid">
			
				<!-- Title & Breadcrumbs-->
				<div class="row page-titles">
					<div class="col-md-12 align-self-center">
						<h4 class="theme-cl">Add Lokdal Members</h4>
                        <input type="submit" form="add" id="submitbtn" value="Add this member">
					</div>
				</div>
				<!-- Title & Breadcrumbs-->
				
				<!-- row -->
				<div class="row">
					<!-- col-md-12 -->
					<div class="col-md-12 col-lg-12 col-sm-12">
						<div class="card">
							<div class="card-header">
								<h4>Basic Fields</h4>
							</div>
							<div class="card-body">
								<form action="add_member.php?adding" method="POST" id="add">
									<div class="row">
										<div class="col-lg-4 col-md-6">
											<div class="form-group">
												<label>Name</label>
												<input type="text" name="name" class="form-control" placeholder="Your Name" required>
											</div>
										</div>
										
										<div class="col-lg-4 col-md-6">
											<div class="form-group">
												<label>Father's Name</label>
												<input type="text" name="f_name" class="form-control" placeholder="Father's Name" required>
											</div>
										</div>
										
										<div class="col-lg-4 col-md-6">
											<div class="form-group">
												<label>Mobile No.</label>
												<input type="text" name="mobile" class="form-control" placeholder="Your Mobile No." required>
											</div>
										</div>

										<div class="col-lg-4 col-md-6">
											<div class="form-group">
												<label>Designation</label>
												<input name="designation" type="text" class="form-control" placeholder="Designation" required>
											</div>
										</div>

                                        <div class="col-lg-4 col-md-6">
                                            <label>Select State</label>
											<select name="state" class="custom-select mb-2 form-control" required>
												<option selected>Choose...</option>
												<option value="National">National</option>
												<option value="Uttar Pradesh">Uttar Pradesh</option>
												<option value="Haryana">Haryana</option>
                                                <option value="Rajasthan">Rajasthan</option>
												<option value="Andhra Pradesh">Andhra Pradesh</option>
												<option value="Bihar">Bihar</option>
                                                <option value="Manipur">Manipur</option>
											</select>
										</div>

										<div class="col-lg-4 col-md-6">
											<div class="form-group">
												<label>Reigon</label>
												<input name="region" type="text" class="form-control" placeholder="Region" required>
											</div>
										</div>

                                        <div class="col-lg-4 col-md-6" required>
											<div class="form-group">
												<label>Village</label>
												<input name="village" type="text" class="form-control" placeholder="Village" required>
											</div>
										</div>

                                        <div class="col-lg-4 col-md-6">
											<div class="form-group">
												<label>Block</label>
												<input name="block" type="text" class="form-control" placeholder="Block" required>
											</div>
										</div>
										
										
										<div class="col-lg-4 col-md-6">
                                            <label>Address</label>
											<textarea name="address" class="form-control" placeholder="Address" required></textarea>
										</div>
										
									</div>
								</form>
							</div>
						</div>
					</div>
					<!-- /.col-md-12 -->
					
				</div>
				<!-- /.row -->
				
				
			</div>  
			<!-- /.content-wrapper-->
			
			<!-- Footer -->
			<?php require_once("footer.php"); ?>
			<!-- /Footer -->
			
			
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