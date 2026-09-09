<?php 
session_start();
if(isset($_SESSION['user'])){



	if(isset($_GET['new'])){

		include_once("db.php");
		$img=$_FILES["img"]["name"];
		$img_temp=$_FILES["img"]["tmp_name"];
		$folder1="img/leaders/".$img;
		move_uploaded_file($img_temp,$folder1);
	
		$name = $_POST['name'];
		$link = $_POST['link'];
	
		$sql="INSERT INTO `leaders` ( `name`,  `img`, `link`) VALUES ('$name', '$img', '$link')";
	
		
	
			if($con->query($sql)==true){
				echo "<script>alert('Successfully Created new Profile');</script>";
				header("location:leader.php");
			}
			else{
			echo "ERROR: $sql <br> $con->error";
	   
	  }
	
	
	
	
		
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
		 $page="leader.php";
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
					<h4 class="theme-cl">Lokdal Leaders -> Add Lokdal Leader</h4>
					<input type="submit" id="submitbtn" form="form" value="Add This Leader">
				</div>
			</div>
			<!-- Title & Breadcrumbs-->



            <!-- row -->
        <div class="row">
				
            <div class="col-md-12 col-sm-12">
				<div class="card">
					
					<div class="card-body">
						<form action="add_leader.php?new" id="form" method="POST" enctype="multipart/form-data" class="dropzone dz-clickable success-dropzone">
                        
								<div>
									<h1 style="text-align:center; margin-bottom:50px;  margin-top:50px; color:#00772D;"><strong>Add Lokdal Leader</strong></h1>
									<hr style="border:green 1px dotted;">
									<h2 style="text-align:center; margin-bottom:50px;  margin-top:50px; color:#00772D;"><strong>Enter Deails</strong></h2>
								</div>

								<div class="dz-default dz-message" style="text-align:center;">
									<h4>Upload Passport Image :-</h4>
									<input type="file" name="img" style="border:1px dotted Green; padding:15px;" required>
								</div>
								<div class="card-header col-md-12">
									<h4 class="header-title m-t-0" style="margin-right:5px; margin-top:5px;">Leader Name : </h4>
									<input type="text" class="col-md-4" name="name" required>
									<h4 class="header-title m-t-0" style="margin-right:5px; margin-top:5px; margin-left:100px;">Page Link : </h4>
									<input type="text" class="col-md-4" name="link"  required>
								</div>
							
							
						</form>
					</div>
					
				</div>
			</div>

		
                                
        </div>
            <!-- /.row -->
            
			

	
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
