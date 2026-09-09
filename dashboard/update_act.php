<?php 



if(isset($_GET['update_id'])){
	require_once("db.php");
	$update_id=$_GET['update_id'];
	$sql="SELECT * FROM activities where id=$update_id;";
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

.btn{
padding:10px;
padding-left:30px;
padding-right:30px;
font-weight:bolder;
border:1px solid green;
color:green;
border-radius:50px;
}

.btn:hover{
background-color:green;
color:white !important;
}

.left{
    display:inline-block; 
    margin-right:100px;
}
.right{
    display:inline-block; 
    float:right; 
    margin-right:50px; 
    margin-top:80px;
}
</style>

<script>
	function change1(){
		document.getElementById("btn1").style.visibility = "hidden";
		document.getElementById("img1").style.visibility = "hidden";
		document.getElementById("img1").style.height = "1px";
		document.getElementById("input1").style.visibility = "visible";
	}
	function change2(){
		document.getElementById("btn2").style.visibility = "hidden";
		document.getElementById("img2").style.visibility = "hidden";
		document.getElementById("img2").style.height = "1px";
		document.getElementById("input2").style.visibility = "visible";
	}
	function change3(){
		document.getElementById("btn3").style.visibility = "hidden";
		document.getElementById("img3").style.visibility = "hidden";
		document.getElementById("img3").style.height = "1px";
		document.getElementById("input3").style.visibility = "visible";
	}
	function change4(){
		document.getElementById("btn4").style.visibility = "hidden";
		document.getElementById("img4").style.visibility = "hidden";
		document.getElementById("img4").style.height = "1px";
		document.getElementById("input4").style.visibility = "visible";
	}
	function change5(){
		document.getElementById("btn5").style.visibility = "hidden";
		document.getElementById("img5").style.visibility = "hidden";
		document.getElementById("img5").style.height = "1px";
		document.getElementById("input5").style.visibility = "visible";
	}
	function change6(){
		document.getElementById("btn6").style.visibility = "hidden";
		document.getElementById("img6").style.visibility = "hidden";
		document.getElementById("img6").style.height = "1px";
		document.getElementById("input6").style.visibility = "visible";
	}
</script>


	<div class="content-wrapper">
		<div class="container-fluid">
			
			<!-- Title & Breadcrumbs-->
			<div class="row page-titles">
				<div class="col-md-12 align-self-center">
					<h4 class="theme-cl">Recent Activities -> Manage Recent Activity -> Update Recent Activity</h4><br>
					<input type="submit" id="submitbtn" form="form" value="Update Recent Activity" required>
				</div>
			</div>
			<!-- Title & Breadcrumbs-->


            <?php $img=0;?>

			

			<div style="padding:20px; margin:5px; background-color:white;">
				<form action="upload_act.php?update_id=<?=$update_id?>&img=<?=$img?>" method="POST" id="form" enctype="multipart/form-data" class="dropzone dz-clickable success-dropzone">
					<label>Activity Title : </label>
					<input type="text" name="title" value="<?php echo $rows['title']; ?>" required>
					<div class="dz-default dz-message" style="border:1px solid Green; padding:20px;" name="pic">
                    <i class="ti-cloud-up"><br>Update Post-1</i>
						 
                        <div>
						
                            <img id="img1" src="<?php echo $rows['img1']; ?>"  style="height:200px; padding:8px; margin-bottom:10px;  border: Solid 5px; border-image: linear-gradient(#00772D, #4d9f0c) 30;"  alt="">
                            <br>
                            <a href="#" onclick="change1();" id="btn1" class="btn" style=" font-size:15px;">Change Image</a><br>
							<input id="input1" type="file" name="img1" style="border:1px dotted Green; padding:15px; visibility: hidden;"><br><br>
                        </div>
						<div>
                            <label style="margin-right:5px; margin-top:5px;">Enter Title : </label>
                            <input type="text" name="t1" value="<?php echo $rows['t1']; ?>" required>
                            <label style="margin-right:5px; margin-top:5px;">Enter Sub-Title : </label>
                            <input type="text" name="s1"  value="<?php echo $rows['s1']; ?>" required>
                        </div>
					</div>

					<div class="dz-default dz-message" style="border:1px solid Green; padding:20px;" name="pic">
                    <i class="ti-cloud-up"><br>Update Post-2</i>
                        <div>
                            <img id="img2" src="<?php echo $rows['img2']; ?>"  style="height:200px; padding:8px; margin-bottom:10px;  border: Solid 5px; border-image: linear-gradient(#00772D, #4d9f0c) 30;"  alt="">
                            <br>
                            <a onclick="change2()" id="btn2" class="btn" style="font-size:15px;">Change Image</a><br>
							<input id="input2" type="file" name="img2" style="border:1px dotted Green; padding:15px; visibility: hidden;"><br><br>
                        </div>
						<div>
                            <label style="margin-right:5px; margin-top:5px;">Enter Title : </label>
                            <input type="text" name="t2" value="<?php echo $rows['t2']; ?>" required>
                            <label style="margin-right:5px; margin-top:5px;">Enter Sub-Title : </label>
                            <input type="text" name="s2" value="<?php echo $rows['s2']; ?>" required>
                        </div>
					</div>

					<div class="dz-default dz-message" style="border:1px solid Green; padding:20px;" name="pic">
                    <i class="ti-cloud-up"><br>Update Post-3</i>
                        <div>
                            <img id="img3" src="<?php echo $rows['img3']; ?>"  style="height:200px; padding:8px; margin-bottom:10px;  border: Solid 5px; border-image: linear-gradient(#00772D, #4d9f0c) 30;"  alt="">
                            <br>
                            <a onclick="change3()" id="btn3" class="btn" style="font-size:15px;">Change Image</a><br>
							<input id="input3" type="file" name="img3" style="border:1px dotted Green; padding:15px; visibility: hidden;"><br><br>
                        </div>
						<div>
                            <label style="margin-right:5px; margin-top:5px;">Enter Title : </label>
                            <input type="text" name="t3" value="<?php echo $rows['t3']; ?>" required>
                            <label style="margin-right:5px; margin-top:5px;">Enter Sub-Title : </label>
                            <input type="text" name="s3" value="<?php echo $rows['s3']; ?>" required>
                        </div>
					</div>

					<div class="dz-default dz-message" style="border:1px solid Green; padding:20px;" name="pic">
                    <i class="ti-cloud-up"><br>Update Post-4</i>
                        <div>
                            <img id="img4" src="<?php echo $rows['img4']; ?>"  style="height:200px; padding:8px; margin-bottom:10px;  border: Solid 5px; border-image: linear-gradient(#00772D, #4d9f0c) 30;"  alt="">
                            <br>
                            <a onclick="change4()" id="btn4" class="btn" style="font-size:15px;">Change Image</a><br>
							<input id="input4" type="file" name="img4" style="border:1px dotted Green; padding:15px; visibility: hidden;"><br><br>
                        </div>
                        <div>
                            <label style="margin-right:5px; margin-top:5px;">Enter Title : </label>
                            <input type="text" name="t4" value="<?php echo $rows['t4']; ?>" required>
                            <label style="margin-right:5px; margin-top:5px;">Enter Sub-Title : </label>
                            <input type="text" name="s4" value="<?php echo $rows['s4']; ?>" required>
                        </div>
					</div>

					<div class="dz-default dz-message" style="border:1px solid Green; padding:20px;" name="pic">
                    <i class="ti-cloud-up"><br>Update Post-5</i>
                        <div>
                            <img id="img5" src="<?php echo $rows['img5']; ?>"  style="height:200px; padding:8px; margin-bottom:10px;  border: Solid 5px; border-image: linear-gradient(#00772D, #4d9f0c) 30;"  alt="">
                            <br>
                            <a onclick="change5()" id="btn5" class="btn" style="font-size:15px;">Change Image</a><br>
							<input id="input5" type="file" name="img5" style="border:1px dotted Green; padding:15px; visibility: hidden;"><br><br>
                        </div>
						<div>
                            <label style="margin-right:5px; margin-top:5px;">Enter Title : </label>
                            <input type="text" name="t5" value="<?php echo $rows['t5']; ?>" required>
                            <label style="margin-right:5px; margin-top:5px;">Enter Sub-Title : </label>
                            <input type="text" name="s5" value="<?php echo $rows['s5']; ?>" required>
                        </div>
					</div>

					<div class="dz-default dz-message" style="border:1px solid Green; padding:20px;" name="pic">
                    <i class="ti-cloud-up"><br>Update Post-6</i>
                        <div>
                            <img id="img6" src="<?php echo $rows['img6']; ?>"  style="height:200px; padding:8px; margin-bottom:10px;  border: Solid 5px; border-image: linear-gradient(#00772D, #4d9f0c) 30;"  alt="">
                            <br>
                            <a onclick="change6()" id="btn6" class="btn" style="font-size:15px;">Change Image</a><br>
							<input id="input6" type="file" name="img6" style="border:1px dotted Green; padding:15px; visibility: hidden;"><br><br>
                        </div>
						<div>
                            <label style="margin-right:5px; margin-top:5px;">Enter Title : </label>
                            <input type="text" name="t6" value="<?php echo $rows['t6']; ?>" required>
                            <label style="margin-right:5px; margin-top:5px;">Enter Sub-Title : </label>
                            <input type="text" name="s6" value="<?php echo $rows['s6']; ?>" required>
                        </div>
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
