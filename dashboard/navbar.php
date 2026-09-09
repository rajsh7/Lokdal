
<?php

$session=$_SESSION['user'];
include_once("db.php");
$sql="SELECT * FROM users where user='$session';";
$resulta = mysqli_query($con,$sql);
$navrow=mysqli_fetch_assoc($resulta);


?>
<!-- ===============================
			Navigation Start
		====================================-->
		<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
			
			<!-- Start Header -->
			<header class="header-logo">
				<a class="nav-link text-center mr-lg-3 hidden-xs" id="sidenavToggler"><i class="ti-align-left"></i></a>
				<a class="navbar-brand" href="index.php"><img src="../Website/img/img/logo white.png" alt=""></a>
			</header>
			<!-- End Header -->
			
			<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
			  <span class="ti-align-left"></span>
			</button>
			
			<div class="collapse navbar-collapse" id="navbarResponsive">
				 
				<!-- =============== Start Side Menu ============== -->
				<div class="navbar-side">
				  <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
				  
				    <!-- Start Dashboard-->
					<li class="nav-item <?php if ($page=='index.php')echo 'active'; ?>" data-toggle="tooltip" data-placement="right" title="Dashboard">
					  <a class="nav-link" href="index.php">
						<img src="https://iconarchive.com/download/i103377/paomedia/small-n-flat/dashboard-alt.ico" height="20" style="margin-right:10px;" alt="">
						<span class="nav-link-text">Dashboard</span>
					  </a>
					</li>
					<!-- End Dashboard -->

					<!-- Start Messages -->
					<li class="nav-item <?php if ($page=='messages.php')echo 'active'; ?>" data-toggle="tooltip" data-placement="right" title="Messages">
					  <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#messages" data-parent="#exampleAccordion">
					  <img src="https://icons.iconarchive.com/icons/johanchalibert/mac-osx-yosemite/512/messages-icon.png" height="20" style="margin-right:10px;" alt="">
						<span class="nav-link-text">Messages</span>
						<span class="pull-right-container">
						</span>
					  </a>
					  <ul class="sidenav-second-level collapse" id="messages">
						
						<li>
						  <a href="inbox.php">Inbox</a>
						</li>
						
						<li>
						  <a href="compose.php">Compose</a>
						</li>
						
					  </ul>
					  
					</li>
					
					<!-- End Messages -->

                    <li class="nav-item <?php if ($page=='activity.php')echo 'active'; ?>" data-toggle="tooltip" data-placement="right" title="Recent Activity">
					  <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#activity">
					  <img src="https://www.nicepng.com/png/full/355-3557565_interactive-whiteboard-activities-learning-activity-icon.png" height="20" style="margin-right:10px;" alt="">
						<span class="nav-link-text">Recent Activities</span>
					  </a>
					  <ul class="sidenav-second-level collapse" id="activity">
						
						<li>
						  <a href="manage_act.php">Manage Activities</a>
						</li>
						
						<li>
						  <a href="new_act.php">Add New Activity</a>
						</li>
					  </ul>
					</li>

					<li class="nav-item <?php if ($page=='updates.php')echo 'active'; ?>" data-toggle="tooltip" data-placement="right" title="Daily Updates">
					  <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#updates">
					  <img src="https://lh3.googleusercontent.com/VPDOwnMnP0F9QONKLDios0QNX0LKHeKV6O9FpJj5y3RwN5Ct9sx-rPqrS8Kktsx3gg" height="20" style="margin-right:10px;" alt="">
						<span class="nav-link-text">Daily Updates</span>
					  </a>
					  <ul class="sidenav-second-level collapse" id="updates">
						
						<li>
						  <a href="manage_updates.php">Manage Daily Updates</a>
						</li>
						
						<li>
						  <a href="add_updates.php">Add Daily Updates</a>
						</li>
					  </ul>
					</li>

					<!-- Start Advance Apps -->
					<li class="nav-item <?php if ($page=='join.php')echo 'active'; ?>"  data-toggle="tooltip" data-placement="right" title="Lokdal">
					  <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#lokdal" data-parent="#lokdal">
					  <img src="https://cdn0.iconfinder.com/data/icons/business-381/500/business-work_7-512.png" height="20" style="margin-right:10px;" alt="">
						<span class="nav-link-text">Lokdal</span>
					  </a>
					  <ul class="sidenav-second-level collapse" id="lokdal">
						
						<li>
						  <a href="new_request.php">Join Requests</a>
						</li>
						
						<li>
						  <a href="executives.php">Lokdal Members</a>
						</li>

						<li>
						  <a href="add_member.php">Add Members</a>
						</li>
						<li>
						  <a href="contact_list.php">Contact list</a>
						</li>
						
					  </ul>
					  
					</li>
					<!-- End Advance Apps -->

					<!-- Start Advance Apps -->
					<li class="nav-item <?php if ($page=='leader.php')echo 'active'; ?>"  data-toggle="tooltip" data-placement="right" title="Lokdal">
					  <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#leader" data-parent="#leader">
					  <img src="https://cdn4.iconfinder.com/data/icons/startup-and-new-business-2-1/52/81-512.png" height="20" style="margin-right:10px;" alt="">
						<span class="nav-link-text">Lokdal Leaders</span>
					  </a>
					  <ul class="sidenav-second-level collapse" id="leader">
						
						<li>
						  <a href="add_leader.php">Add Leader</a>
						</li>
						
						<li>
						  <a href="leader.php">Leader List</a>
						</li>
						
					  </ul>
					  
					</li>
					<!-- End Advance Apps -->

					<!-- Start Advance Apps -->
					<li class="nav-item <?php if ($page=='leader_updates.php')echo 'active'; ?>"  data-toggle="tooltip" data-placement="right" title="Lokdal">
					  <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#leader_updates" data-parent="#leader">
					  <img src="https://getfoxmarketing.com/wp-content/uploads/2021/05/content-blogs-icon.png" height="20" style="margin-right:10px;" alt="">
						<span class="nav-link-text">Leaders Daily Updates</span>
					  </a>
					  <ul class="sidenav-second-level collapse" id="leader_updates">
						
						<li>
						  <a href="add_leader_update.php">Add New Poster</a>
						</li>
						
						<li>
						  <a href="manage_all_posters.php">Manage All Posters</a>
						</li>
						
					  </ul>
					  
					</li>
					<!-- End Advance Apps -->
					
					<!-- Start projects -->
					<li class="nav-item <?php if ($page=='donation.php')echo 'active'; ?>" data-toggle="tooltip" data-placement="right" title="Donation">
					  <a class="nav-link" href="donation.php">
					  <img src="https://icon-library.com/images/make-a-donation-icon/make-a-donation-icon-10.jpg" height="20" style="margin-right:10px;" alt="">
						<span class="nav-link-text">Donation</span>
						<span class="pull-right-container">
						</span>
					  </a>
					</li>
					<!-- End Projects -->
					
					
					<!-- Start Messages -->
					<li class="nav-item <?php if ($page=='user.php')echo 'active'; ?>" data-toggle="tooltip" data-placement="right" title="Manage <?php echo $_SESSION['user']; ?>">
					  <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#User" data-parent="#exampleAccordion">
					  <img src="<?= $navrow['dp'];?>" height="20" style="margin-right:10px; border-radius:50px;" alt="">
						<span class="nav-link-text">Manage <?= $navrow['user'];?></span>
						<span class="pull-right-container">
						</span>
					  </a>
					  <ul class="sidenav-second-level collapse" id="User">
						
						<li>
						  <a href="add_user.php">Create New User</a>
						</li>

						<li>
						  <a href="manage_user.php">Manage All Users</a>
						</li>
						
						<li>
						  <a href="../admin/logout.php?logout">Log Out</a>
						</li>
						
					  </ul>
					  
					</li>
					<!-- End Messages -->
					


					
			 <!-- =============== End Side Menu ============== --> 
			</div>
		</nav>
		<!-- =====================================================
		                    End Navigations
		======================================================= -->
	  



		