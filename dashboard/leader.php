<?php




session_start();
if(isset($_SESSION['user'])){

    include_once("db.php");

    if(isset($_GET['delete_id'])){
        $del=$_GET['delete_id'];
        $sql="DELETE FROM `leaders` WHERE id='$del';";
        $result = mysqli_query($con,$sql);
    }



    $sql="SELECT * FROM leaders;";
    $result = mysqli_query($con,$sql);




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




		<!-- =========== Main Container =================== -->
		<div class="content-wrapper">
			<div class="container-fluid">
			
			  <!-- Title & Breadcrumbs-->
			<div class="row page-titles">
				<div class="col-md-12 align-self-center">
					<h4 class="theme-cl">Lokdal Leaders -> Manage Lokdal Leaders</h4>
                    <a href="add_leader.php" id="submitbtn">Add More <strong>+</strong></a>
				</div>
			</div>
			<!-- Title & Breadcrumbs-->
			  
				<!-- row -->
				<div class="row">
                <?php
                        while($row=mysqli_fetch_assoc($result)){
                            $img="img/leaders/".$row['img'];
											  
                ?>
					<!-- Single Team -->
					<div class="col-md-4 col-sm-6">
						<div class="our-team">
							<div class="pic">
								<img src="<?= $img;?>" alt="leader">
							</div>
							<div class="description">
								<div class="team-prof">
									<h4>Name : <?= $row['name'];?></h4>
									
                                    <span><span class="theme-cl">Page Link : </span><?= $row['link'];?></span>
								</div>
								 <ul class="social-links">
									<li><a href="modify_leader.php?modify_id=<?= $row['id'];?>" class="fa fa-edit"></a></li>
									<li><a href="leader.php?delete_id=<?= $row['id'];?>" class="fa fa-trash-o"></a></li>
								</ul> 
							</div>
						</div>
					</div>
                    <?php
                            }				  
                    ?>
					
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