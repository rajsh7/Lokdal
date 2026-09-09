<?php 

include_once("db.php");
$sql="SELECT * FROM users;";
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
		<link href="assets/plugins/datatables/dataTables.bootstrap4.css" rel="stylesheet">

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
            $page="user.php";
            require_once("navbar.php");
        ?>



<style>
#submitbtn{
float:right;
padding:10px;
padding-left:30px;
padding-right:30px;
font-weight:bolder;
border:1px solid green;
color:green;
border-radius:50px;
}

#submitbtn:hover{
background-color:green;
color:white;
}
</style>

		<!-- =====================================================
						Start Container Wrapper
		==================================================== -->
		<div class="content-wrapper">
			<div class="container-fluid">
			
				<!-- Title & Breadcrumbs-->
				<div class="row page-titles">
					<div class="col-md-5 align-self-center">
						<h4 class="theme-cl">Manage All Users</h4>
					</div>

                    <a id="submitbtn" href="add_user.php"><i class="fa fa-user-plus" style="font-size:30px; margin-right:10px;"></i> Add New User Account </a>
					
				</div>
				<!-- Title & Breadcrumbs-->
				
				<!-- All Contact List -->	
				<div class="row">
					
                <?php
                        while($row=mysqli_fetch_assoc($result)){
											  
                ?>

					<!-- Single Contact List -->
					<div class="col-md-4 col-sm-6 mb-4">
						<div class="contact-box">
						
							<div class="contact-img">
								<img src="<?= $row['dp'];?>" class="img-circle img-responsive" alt="">
							</div>
							
							<div class="contact-caption">
								<h4><?= $row['user'];?></h4>
								<span>User ID : <?= $row['id'];?></span>
							</div>
							
							<div class="contact-action">
								<a href="profile.php?user_id=<?= $row['id'];?>" class="bg-default br-default btn-circle-40" data-toggle="tooltip" title="Edit">
									<i class="light-cl fa fa-pencil" aria-hidden="true"></i>
								</a>
								<a href="delete_user.php?delete_user=<?= $row['user'];?>" class="bg-success br-success btn-circle-40" data-toggle="tooltip" title="Delete">
									<i class="light-cl fa fa-trash-o" aria-hidden="true"></i>
								</a>
							</div>
							
							<div class="contact-footer">
								<a href="#" class="col-half"><span class="con-message">
									<i class="ti-email"></i>Message</span>
								</a>
								
								<a href="#" class="left-br col-half"><span class="con-profile">
									<i class="ti-user"></i>Change Access</span>
								</a>
							</div>
							
						</div>
					</div>
					
                    <?php
                        }
                    ?>
					
				</div>
				<!-- End All Contact List -->
				
				
			
				<!-- Add Contact Popup -->
				<div class="add-popup modal fade" id="addcontact" tabindex="-1" role="dialog" aria-labelledby="addcontact">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header theme-bg">
								<ul class="card-actions icons right-top">
									<li>
										<a href="javascript:void(0)" class="text-white" data-dismiss="modal" aria-label="Close">
											<i class="ti-close"></i>
										</a>
									</li>
								</ul>
								<h4 class="modal-title">New Contact</h4>
								<div class="user-avatar-wrapper">
									<figure>
										<div class="icon-upload">
											<label for="file-input">
												<span class="edit-avatar">
													<span class="no-avatar app_primary_lighten_bg animated zoomIn"></span>
												</span>
											</label>
											<input id="file-input" type="file">
										</div>
									</figure>
								</div>
							</div>
							<div class="modal-body">
								<div class="form-group">
									<label class="control-label">Full Name</label>
									<div class="input-group">
										<span class="input-group-addon br br-light no-br"><i class="ti-user"></i></span>
										<input type="text" class="form-control no-bl" id="add_name" value="">
									</div>
								</div>
								<div class="form-group">
									<label class="control-label">Email Address</label>
									<div class="input-group">
										<span class="input-group-addon br br-light no-br"><i class="ti-email"></i></span>
										<input type="email" class="form-control no-bl" id="add_email" value="">
									</div>
								</div>
								<div class="form-group">
									<label class="control-label">Phone Number</label>
									<div class="input-group">
										<span class="input-group-addon br br-light no-br"><i class="ti-mobile"></i></span>
										<input type="text" class="form-control no-bl" id="add_phone" value="">
									</div>
								</div>
								<div class="form-group">
									<label class="control-label">Location</label>
									<div class="input-group">
										<span class="input-group-addon br br-light no-br"><i class="ti-location-pin"></i></span>
										<input type="text" class="form-control no-bl" id="add_address">
									</div>
								</div>
							</div>
							<div class="modal-footer">
								<button class="btn btn-default btn-flat pull-left">Delete</button>
								<button class="btn btn-dark btn-flat" data-dismiss="modal" aria-label="Close">Cancel</button>
								<button class="btn gredient-btn">Save</button>
							</div>
						</div>
					</div>
				</div>
				<!-- End Add Contact Popup -->
		
			</div>  
			<!-- /.content-wrapper-->
			
			
<?php
 
        require_once("footer.php");

?>
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