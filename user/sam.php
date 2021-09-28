<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="zxx">
	
<!-- Mirrored from live.themezhub.com/job-stock-large-preview/job-stock/dashboard/my-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 14 Mar 2018 17:09:41 GMT -->
<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="Best Responsive job portal template build on Latest Bootstrap.">
		<meta name="keywords" content="job, nob board, job portal, job listing">
		<meta name="robots" content="index,follow">

		<title>Job Stock - Responsive Job Stock Dashboard Template | ThemezHub</title>
		
		<!-- BOOTSTRAP STYLES-->
		<link href="assets/css/bootstrap.css" rel="stylesheet" />
		<!-- FONTAWESOME STYLES-->
		<link href="assets/css/font-awesome.css" rel="stylesheet" />
		<!-- Line Font STYLES-->
		<link href="assets/css/line-font.css" rel="stylesheet" />
		<!-- Dropzone Style-->
		<link href="assets/css/dropzone.css" rel="stylesheet" />
		<!-- Bootstrap Editor-->
		<link href="assets/css/bootstrap-wysihtml5.css" rel="stylesheet" />
		<!-- CUSTOM STYLES-->
		<link href="assets/css/custom.css" rel="stylesheet" />
	</head>
	<body>

		  
		<div id="wrapper">
			<div class="navbar navbar-inverse navbar-fixed-top" >
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="index.html"><img src="assets/img/logo.png" class="img-responsive" alt=""></a>
					</div>
					<div class="navbar-collapse">
						<ul class="nav navbar-top-links navbar-right"> 
							<li class="dropdown">
								<a class="dropdown-toggle" data-toggle="dropdown" href="#">
									<i class="fa fa-envelope fa-fw"></i>
									<span class="count-notification green">7</span>
								</a>
								<ul class="dropdown-menu dropdown-messages">
									<li>
										<a href="#">
											<div>
												<strong>John Smith</strong>
												<span class="pull-right text-muted">
													<em>Yesterday</em>
												</span>
											</div>
											<div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
										</a>
									</li>
									<li class="divider"></li>
									<li>
										<a href="#">
											<div>
												<strong>John Smith</strong>
												<span class="pull-right text-muted">
													<em>Yesterday</em>
												</span>
											</div>
											<div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
										</a>
									</li>
									<li class="divider"></li>
									<li>
										<a href="#">
											<div>
												<strong>John Smith</strong>
												<span class="pull-right text-muted">
													<em>Yesterday</em>
												</span>
											</div>
											<div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
										</a>
									</li>
									<li class="divider"></li>
									<li>
										<a class="text-center btn-bott green" href="#">
											<strong>Read All Messages</strong>
											<i class="fa fa-angle-right"></i>
										</a>
									</li>
								</ul>
								<!-- /.dropdown-messages -->
							</li>
							<!-- /.dropdown -->
							<li class="dropdown">
								<a class="dropdown-toggle" data-toggle="dropdown" href="#">
									<i class="fa fa-bell fa-fw"></i>
									<span class="count-notification">4</span>
								</a>
								<ul class="dropdown-menu dropdown-alerts">
									<li>
										<a href="#">
											<div>
												<i class="fa fa-comment fa-fw"></i> New Comment
												<span class="pull-right text-muted small">4 minutes ago</span>
											</div>
										</a>
									</li>
									<li class="divider"></li>
									<li>
										<a href="#">
											<div>
												<i class="fa fa-twitter fa-fw"></i> 3 New Followers
												<span class="pull-right text-muted small">12 minutes ago</span>
											</div>
										</a>
									</li>
									<li class="divider"></li>
									<li>
										<a href="#">
											<div>
												<i class="fa fa-envelope fa-fw"></i> Message Sent
												<span class="pull-right text-muted small">4 minutes ago</span>
											</div>
										</a>
									</li>
									<li class="divider"></li>
									<li>
										<a href="#">
											<div>
												<i class="fa fa-tasks fa-fw"></i> New Task
												<span class="pull-right text-muted small">4 minutes ago</span>
											</div>
										</a>
									</li>
									<li class="divider"></li>
									<li>
										<a href="#">
											<div>
												<i class="fa fa-upload fa-fw"></i> Server Rebooted
												<span class="pull-right text-muted small">4 minutes ago</span>
											</div>
										</a>
									</li>
									<li class="divider"></li>
									<li>
										<a class="text-center btn-bott" href="#">
											<strong>See All Alerts</strong>
											<i class="fa fa-angle-right"></i>
										</a>
									</li>
								</ul>
								<!-- /.dropdown-alerts -->
							</li>
							<!-- /.dropdown -->
							  <?php 


// session_start();
//  session_destroy();
//   if( (!isset($_SESSION["uName"])) && (!isset($_SESSION["hashed_pass"])) ) {
//     header("Location:\.\home3/home/signup/login.php");
//   }
//     $b="";
   $conn = mysql_connect("localhost","root")or die(mysql_error());
   $db = mysql_select_db("cmdeso_db")or die(mysql_error()); 

    $three = mysql_query("SELECT * FROM appl_info WHERE acct_id = 1 ");
  while ($row = mysql_fetch_array($three)) {
    

  

      }
      $four = mysql_query("SELECT * FROM appl_info WHERE acct_id = 1  ");
  while ($row = mysql_fetch_array($four)) {
   $date=date_create($row['appl_birthd']);
$format =  date_format($date," F  d,  Y ");

			echo'
							<li class="dropdown">
								<a class="dropdown-toggle" data-toggle="dropdown" href="#">
									<i class="fa fa-user-circle" aria-hidden="true"></i>
								</a>
								<ul class="dropdown-menu dropdown-user">
									<li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
									</li>
									<li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
									</li>
									<li class="divider"></li>
									<li><a href="http://themezhub.com/"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
									</li>
								</ul>
								<!-- /.dropdown-user -->
							</li>
							<!-- /.dropdown -->
						</ul>
						<!-- /.navbar-top-links -->
					</div>
				</div>
			</div>         
			<!-- /. NAV TOP  -->

       <nav class="navbar navbar-side">
				<div class="sidebar-collapse">
					<div style="margin-top:10%; margin-left: 10%; margin-bottom: 10%;margin-right: 10%;">
						<span >
						
						<img src="assets/img/'.$row["appl_img"] .'"  class="img-responsive img-circle" style="height: 150px;  padding-left: 10%;padding-right: 10%; width:100%;">
					</span>
					</div>
					<ul class="nav" id="main-menu">
						
						<ul class="nav" id="main-menu">
						
						<li >
							<a href="index.html"><i class="fa fa-cog" aria-hidden="true"></i>Job Offering</a>
						</li>
						<!-- <li>
							<a href="messages.html"><i class="fa fa-envelope-open" aria-hidden="true"></i>Messages</a>
						</li> -->
						
							<li>
							<a href="javascript:void(0)"><i class="fa fa-clone" aria-hidden="true"></i>Manage CV <span class="fa arrow"></span></a>
							<ul class="nav nav-second-level">
								<li>
									<a href="my-profile.php"><i class="active-job fa fa-circle-o-notch" aria-hidden="true"></i>View CV</a>
								</li>
								<li>
									<a href="my-profile-update.php"><i class="pending-job fa fa-circle-o-notch" aria-hidden="true"></i>Update CV</a>
								</li>
							   
							</ul>
						</li>
						</li>
							   
							
						</li>
							
						</li>
					 
						<!-- <li>
							<a href="candidate.html"><i class="fa fa-user-circle-o" aria-hidden="true"></i>My Candidate</a>
						</li>
						<li>
							<a href="create-company.html"><i class="fa fa-file-text" aria-hidden="true"></i>Create Company</a>
						</li>
						<li>
							<a href="add-job.html"><i class="fa fa-plus-circle" aria-hidden="true"></i>Add Jobs</a>
						</li> -->
						<li class="active">
							<a href="my-profile.html"><i class="fa fa-user-circle" aria-hidden="true"></i>My Profile</a>
						</li>
						<li>
							<a href="chatting.html"><i class="fa fa-comments-o" aria-hidden="true"></i>Chatting</a>
						</li>
						<li class="log-off">
							<a href="log-off.html"><i class="fa fa-power-off" aria-hidden="true"></i>Logout</a>
						</li>
					</ul>
				</div>
			</nav>
			<!-- /. NAV SIDE  -->
			
			<div id="page-wrapper" >
				 <div class="row bg-title">
					<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
						<h4 class="page-title">My Profile</h4>
					</div>
					<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
						<ol class="breadcrumb">
							<li class="active">Photo</li>
							<li><a href="index.html">General </a></li>
							<li ><a href="index.html">Education </a> </li>
							<li><a href="index.html">Seminar </a></li>
							
							<li><a href="index.html">Work Expirience</a></li>
							<li ><a href="index.html">Reference </a></li>

						</ol>
					</div>
					<!-- /.col-lg-12 -->
				</div>              
				 <!-- /. ROW  -->
				<div id="page-inner">
				   <div class="row">
						<div class="col-md-12">
							<div class="add-job_container">
								
								
								<!-- / General Information -->
								
												
									

									


										
									';
		}
			?>
								<!-- / Location -->

								<div class="job-box">
									<div class="job-box-filter">
										<div class="row">
											<div class="col-md-6 col-sm-6">
												<h4><i class="fa fa-picture-o" aria-hidden="true"></i>Work Expirience</h4>

											</div>
											<div class="col-md-2 col-sm-2" style="background-color: ; padding-top: 0px; float: right;">
												<div class="job-action">
													<a class="edit" href="#" title="Add"><i class="fa fa-plus-circle" aria-hidden="true"></i></a>
													<a class="delete" href="#" title="Edit"><i class="fa fa-pencil" aria-hidden="true"></i></a>
												</div>
											</div>
										</div>
									
									<div class="row no-ext-mrg sm-plix">
										<div class="col-sm-12">
											
											<?php

           $five = mysql_query("SELECT * FROM appl_info_exp WHERE acct_id = 1  ");
              while ($row = mysql_fetch_array($five)) {
              $date_start=date_create($row['exp_date_start']);
              $date_end=date_create($row['exp_date_end']);
              $format_start =  date_format($date_start,"  Y ");
              $format_end =  date_format($date_end,"  Y ");
          echo'

											<div class="brows-job-list">



											
											<div class="col-md-6 col-sm-5">
												<div class="brows-job-position">



													<h4><h5 style="text-align:center;">Company Name</h5>
											<textarea type="text" class="form-control">'. $row["exp_company"] .'</textarea></h>
													<p><span><h5 style="text-align:center;">Position</h5>
											<textarea type="text" class="form-control">'. $row["exp_position"] . '</textarea></span></p>
												</div>
											</div>
											<div class="col-md-3 col-sm-3">
												<div class="brows-job-location">
													<p><h5 style="text-align:center;">Address</h5>
											<textarea type="text" class="form-control">'.$row["exp_desc"]  .'</textarea></p>
												</div>
											</div>
											<div class="col-md-3 col-sm-3">
												<div class="job-action" >
													<span class="brows-job-status"> <h5 style="text-align:center;">Date Start</h5>
											<input type="date" class="form-control" 
												value ='. $row["exp_date_start"] . '></span>

												<span class="brows-job-status"> <h5 style="text-align:center;">Date End</h5>
											<input type="date" class="form-control" 
												value ='. $row["exp_date_end"] . '></span>
												</div>
											</div>
											
										</div>



										
									';
							}
								?>
									
								
								<!-- / Full Detail -->
								
								
						

							</div>

								</div>
								</div>
							</div>
						</div>
					</div>       
					 <!-- /. ROW  -->           
				</div>
				 <!-- /. PAGE INNER  -->
			</div>
			 <!-- /. PAGE WRAPPER  -->
			
			<footer class="main-footer">
				<div class="pull-right hidden-xs">
				  <b>Version</b> 1.1
				</div>
				<strong>©Copyright 2017 <a href="index.html">Job Stock</a>.</strong> All rights
				reserved.
			</footer>
		</div>
		<!-- /. WRAPPER  -->
		 
		<!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
		<!-- JQUERY SCRIPTS -->
		<script src="assets/js/jquery-1.10.2.js"></script>
		<!-- BOOTSTRAP SCRIPTS -->
		<script src="assets/js/bootstrap.min.js"></script>
		<!-- METISMENU SCRIPTS -->
		<script src="assets/js/jquery.metisMenu.js"></script>
		<!-- Bootstrap Editor Js -->
		<script src="assets/js/wysihtml5-0.3.0.js"></script>
		<script src="assets/js/bootstrap-wysihtml5.js"></script>
		<!-- Scrollbar Js -->
		<script src="assets/js/jquery.slimscroll.js"></script>
		<!-- Dropzone Js -->
		<script src="assets/js/dropzone.js"></script>
		<!-- CUSTOM SCRIPTS -->
		<script src="assets/js/custom.js"></script>
	</body>

<!-- Mirrored from live.themezhub.com/job-stock-large-preview/job-stock/dashboard/my-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 14 Mar 2018 17:09:41 GMT -->
</html>
