
<?php 
    session_start();
	include_once("db.php");
	if(isset($_GET['id'])){
		$id=$_GET['id'];
		$sql="DELETE FROM `executives` WHERE id='$id';";
		$result = mysqli_query($con,$sql);
		header("location:executives.php");
	}

    if(isset($_SESSION['user'])){
		if(isset($_GET['delete_id'])){
			$delete_id=$_GET['delete_id'];
			$sql="SELECT * FROM `executives` WHERE id='$delete_id';";
			$result = mysqli_query($con,$sql);
			$row=mysqli_fetch_assoc($result);
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
	
		


        <?php 
                require_once("navbar.php");
        ?>





		<!-- ================================================
				Start Container Wrapper
		================================================== -->
		<div class="content-wrapper">
			<div class="container-fluid">
			
				<!-- Title & Breadcrumbs-->
				<div class="row page-titles">
					<div class="col-md-12 align-self-center">
						<h4 class="theme-cl">Delete Executive : <?= $row['name']; ?></h4>
					</div>
				</div>
				<!-- Title & Breadcrumbs-->
				
				<!--row -->
				<div class="row">
					<div class="col-md-12">
						<div class="card">
                            <br>
                            <h2 style="text-align:center;">Are you Sure to Delete the Executive : <?= $row['name']; ?></h2><br><br>
							<div>
                                <a href="?id=<?=$delete_id?>" style="float:left; margin-left:40%" id="submitbtn">Yes, Delete It</a>
                                <a href="executives.php" style="float:right; margin-right:40%" id="submitbtn">No, Leave It</a>
                                
                            </div><br><br>
						</div>
					</div>
                    
				</div>
				<!-- /row -->

			</div>  
			<!-- /.content-wrapper-->
			
            <style>
                #submitbtn{
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
			
			<!-- Custom Theme JavaScript -->
			<script src="assets/dist/js/custom/form-wizard.js"></script>
			
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