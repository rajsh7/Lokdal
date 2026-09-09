<?php

include_once("db.php");
$id=$_GET['user_id'];
$sql="SELECT * FROM users where id=$id;";
$result = mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);

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


<script>
    function change(){
		document.getElementById("upload").style.visibility = "visible";
	}
    function pass(){
		document.getElementById("l1").style.visibility = "visible";
        document.getElementById("p1").style.visibility = "visible";
	}
</script>


<body class="fixed-nav sticky-footer red-skin" id="page-top">
	
		

    <?php
		 $page="user.php";
		 include_once("navbar.php"); 
	?>




		<!-- ====================================================
		Content Wrapper
		====================================================== -->
		<div class="content-wrapper">
			<div class="container-fluid">
			
				<!-- Title & Breadcrumbs-->
				<div class="row page-titles">
					<div class="col-md-12 align-self-center">
						<h4 class="theme-cl">User Profile : <?= $row['user'];?></h4>
                        <input type="submit" id="submitbtn" form="profile" value="Save User Settings">
					</div>
				</div>
				<!-- Title & Breadcrumbs-->

				<!-- row -->
				<div class="row">
					<div class="col-md-12">
					    <div class="card">
							
							<div class="card-block padd-0 translateY-50 text-center">
								<div class="card-avatar style-2">
                                    
								<img src="<?= $row['dp'] ?>" class="img-circle img-responsive" alt="" />
								</div>

                                <div style="padding-top:20px;">
                                    <form action="update_user.php?update_id=<?= $row['id'] ?>" id="profile" method="post"  style="padding-top:30px; padding-bottom:30px;" enctype="multipart/form-data" class="dropzone dz-clickable success-dropzone">
                                        <label for="">User Name : </label>
                                        <input type="text" name="name" class="font-normal mrg-bot-0 font-18 card-title" value="<?= $row['user'];?>"></h5> <br><br>
                                        <label for="">User Email : </label>
                                        <input type="email" name="email" class="font-normal mrg-bot-0 font-18 card-title" value="<?= $row['email'];?>"></h5> <br><br>
                                        <label for="">User Mobile : </label>
                                        <input type="tel" name="contact" class="font-normal mrg-bot-0 font-18 card-title" value="<?= $row['contact'];?>"></h5><br><br>
                                        <label id="l1" style=" visibility: hidden;">Enter new Password : </label>
                                        <input id="p1" name="p1" type="password" style=" visibility: hidden;"><br><br>
                                        <input id="upload" type="file" name="img" style="border:1px dotted Green; padding:15px; visibility: hidden;"><br><br>
                                    </form>
                                </div>
							</div>
							<div class="bottom">
								<ul class="social-detail">
									<a href="#" onclick="change();"><li>Change <span>Profile Image</span></li></a>
									<a href="delete_user.php?delete_user=<?= $row['user'];?>"><li>Delete User<span><?= $row['user'];?></span></li></a>
									<a href="#" onclick="pass();"><li>Change<span>Password</span></li></a>
								</ul>
							</div>
						</div>
                        
					  
					</div>
					<!-- /.col-md-4 -->
					
                    
				</div>
				<!-- /row -->
			</div>  
			<!-- /.content-wrapper-->
			
			
            <?php require_once("footer.php") ?>





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