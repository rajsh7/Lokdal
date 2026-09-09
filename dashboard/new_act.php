<?php 



if(isset($_GET['manage_id'])){
	require_once("db.php");
	$manage_id=$_GET['manage_id'];
	$sql="SELECT * FROM activities where id=$manage_id;";
	$results = mysqli_query($con,$sql);
	$rows=mysqli_fetch_assoc($results);
	
}




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

        <link rel="stylesheet" href="assets/plugins/dropzone/dropzone.css">

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

		<!-- Custom styles for Color -->
		<link rel="stylesheet" href="assets/dist/css/skins/default.css">
		<link rel="icon" href="../Website/img/img/logo1.png">
	</head>

<body class="fixed-nav sticky-footer red-skin" id="page-top">
	
		<?php
		 $page="activity.php";
		 include_once("navbar.php"); 
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




	<div class="content-wrapper">
		<div class="container-fluid">
			
			<!-- Title & Breadcrumbs-->
			<div class="row page-titles">
				<div class="col-md-12 align-self-center">
					<h4 class="theme-cl">Recent Activities -> Add Recent Activity</h4><br>
					<input type="submit" id="submitbtn" form="form" value="Publish Recent Activity">
				</div>
			</div>
			<!-- Title & Breadcrumbs-->




			<div style="padding:20px; margin:5px; background-color:white;">
				<form action="upload_act.php?new" method="POST" id="form" enctype="multipart/form-data" class="dropzone dz-clickable success-dropzone">
					<label>Activity Title : </label>
					<input type="text" name="title" required>
					<div class="dz-default dz-message" style="border:1px solid Green; padding:20px;" name="pic">
						<i class="ti-upload"><br>Upload Image 1</i><br>
						<input type="file" name="img1" style="border:1px dotted Green; padding:15px;" required>
						<label style="margin-right:5px; margin-top:5px;">Enter Title : </label>
						<input type="text" name="t1" required>
						<label style="margin-right:5px; margin-top:5px;">Enter Sub-Title : </label>
						<input type="text" name="s1" required>
					</div>

					<div class="dz-default dz-message" style="border:1px solid Green; padding:20px;" name="pic">
						<i class="ti-upload"><br>Upload Image 2</i><br>
						<input type="file" name="img2" style="border:1px dotted Green; padding:15px;" required>
						<label style="margin-right:5px; margin-top:5px;">Enter Title : </label>
						<input type="text" name="t2" required>
						<label style="margin-right:5px; margin-top:5px;">Enter Sub-Title : </label>
						<input type="text" name="s2" required>
					</div>

					<div class="dz-default dz-message" style="border:1px solid Green; padding:20px;" name="pic">
						<i class="ti-upload"><br>Upload Image 3</i><br>
						<input type="file" name="img3" style="border:1px dotted Green; padding:15px;" required>
						<label style="margin-right:5px; margin-top:5px;">Enter Title : </label>
						<input type="text" name="t3" required>
						<label style="margin-right:5px; margin-top:5px;">Enter Sub-Title : </label>
						<input type="text" name="s3" required>
					</div>

					<div class="dz-default dz-message" style="border:1px solid Green; padding:20px;" name="pic">
						<i class="ti-upload"><br>Upload Image 4</i><br>
						<input type="file" name="img4" style="border:1px dotted Green; padding:15px;" required>
						<label style="margin-right:5px; margin-top:5px;">Enter Title : </label>
						<input type="text" name="t4" required>
						<label style="margin-right:5px; margin-top:5px;">Enter Sub-Title : </label>
						<input type="text" name="s4" required>
					</div>

					<div class="dz-default dz-message" style="border:1px solid Green; padding:20px;" name="pic">
						<i class="ti-upload"><br>Upload Image 5</i><br>
						<input type="file" name="img5" style="border:1px dotted Green; padding:15px;" required>
						<label style="margin-right:5px; margin-top:5px;">Enter Title : </label>
						<input type="text" name="t5" required>
						<label style="margin-right:5px; margin-top:5px;">Enter Sub-Title : </label>
						<input type="text" name="s5" required>
					</div>

					<div class="dz-default dz-message" style="border:1px solid Green; padding:20px;" name="pic">
						<i class="ti-upload"><br>Upload Image 6</i><br>
						<input type="file" name="img6" style="border:1px dotted Green; padding:15px;" required>
						<label style="margin-right:5px; margin-top:5px;">Enter Title : </label>
						<input type="text" name="t6" required>
						<label style="margin-right:5px; margin-top:5px;">Enter Sub-Title : </label>
						<input type="text" name="s6" required>
					</div>
					
				</form>
			</div>









            
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
