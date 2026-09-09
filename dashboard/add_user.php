<?php 





session_start();
if(isset($_SESSION['user'])){

    
if(isset($_GET["submit"])){
    $name=$_POST["name"];
    $pass1=$_POST['pass1'];
    $pass2=$_POST['pass2'];
	$email=$_POST['email'];
	$contact=$_POST['contact'];

	$img=$_FILES["img"]["name"];
    $img_temp=$_FILES["img"]["tmp_name"];
    $folder="img/users/".$img;
    move_uploaded_file($img_temp,$folder);

    if($pass1==$pass2){
        include_once("db.php");
        $sql="INSERT INTO `users`(`user`, `pass`, `email`, `contact`, `dp`) VALUES ('$name','$pass1','$email','$contact','$folder');";
        $result = mysqli_query($con,$sql);
        echo "<script>alert('New User Successfully Created');</script>";
    }
    else{
        echo "<script>alert('Please Check your password');</script>";
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
                $page="user.php";
                require_once("navbar.php")

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

		<!-- ================================================
				Start Container Wrapper
		================================================== -->
		<div class="content-wrapper">
			<div class="container-fluid">
			
				<!-- Title & Breadcrumbs-->
				<div class="row page-titles">
					<div class="col-md-12 align-self-center">
						<h4 class="theme-cl">Add New User</h4>
                        <input type="submit" id="submitbtn" form="new_user" value="Create User">
					</div>
				</div>
				<!-- Title & Breadcrumbs-->

				<!-- row -->
				<div class="row">
					<div class="col-md-12">
					    <div class="card">
							
							<div class="card-block padd-0 translateY-50 text-center">
								

                                <div style="margin-top:50px;">
                                    <form action="?submit" id="new_user" method="post"  style="padding-top:30px; padding-bottom:30px;" enctype="multipart/form-data" class="dropzone dz-clickable success-dropzone">
                                        <label for="">User Name : </label>
                                        <input type="text" name="name" class="font-normal mrg-bot-0 font-18 card-title" required> <br><br>
                                        <label for="">User Email : </label>
                                        <input type="email" name="email" class="font-normal mrg-bot-0 font-18 card-title" required> <br><br>
                                        <label for="">User Mobile : </label>
                                        <input type="tel" name="contact" class="font-normal mrg-bot-0 font-18 card-title" required><br><br>
                                        <label id="l1">Create Password : </label>
                                        <input id="p1" name="pass1" type="password" required><br><br>
										<label id="l1">Confirm Password : </label>
                                        <input id="p1" name="pass2" type="password" required><br><br>
                                        <input id="upload" type="file" name="img" style="border:1px dotted Green; padding:15px;" required><br>
										<label>Upload Profile Picture Here</label><br><br>
                                    </form>
                                </div>
							</div>
							
						</div>
                        
					  
					</div>
					<!-- /.col-md-4 -->
					
                    
				</div>
				<!-- /row -->
				
				

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