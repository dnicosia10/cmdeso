﻿<?php
	session_start();
	session_destroy();
	 header("Location:\.\home3/home/signup/login.php");
  if( (!isset($_SESSION["uName"])) && (!isset($_SESSION["hashed_pass"])) 
  	&& ( 'user'!=$_SESSION["name"]) ) {
    header("Location:\.\home3/home/signup/login.php");
    echo "error";
  }
    $b="";
    $fk = $_SESSION['num'];
    if ('user'!=$_SESSION["name"]) {
    	header("Location:\.\home3/home/signup/login.php");
    }
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="zxx">
	
<!-- Mirrored from live.themezhub.com/job-stock-large-preview/job-stock/dashboard/log-off.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 14 Mar 2018 17:09:49 GMT -->
<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="Best Responsive job portal template build on Latest Bootstrap.">
		<meta name="keywords" content="job, nob board, job portal, job listing">
		<meta name="robots" content="index,follow">

		<title>CMD-ESO</title>
		
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
							<li class="dropdown">
								<a class="dropdown-toggle" data-toggle="dropdown" href="#">
									<img src="assets/img/user.jpg" class="img-responsive img-circle" alt="user">
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
						
						<img src="img/q.png"  class="img-responsive img-circle" style="height: 150px;  padding-left: 10%;padding-right: 10%;">
					</span>
					</div>
					<ul class="nav" id="main-menu">
						
						<li >
							<a href="index.html"><i class="fa fa-cog" aria-hidden="true"></i>Job Offering</a>
						</li>
						<!-- <li>
							<a href="messages.html"><i class="fa fa-envelope-open" aria-hidden="true"></i>Messages</a>
						</li> -->
						<li>
							<a href="javascript:void(0)"><i class="fa fa-clone" aria-hidden="true"></i>Manage Resume <span class="fa arrow"></span></a>
							<ul class="nav nav-second-level">
								<li>
									<a href="active-jobs.html"><i class="active-job fa fa-circle-o-notch" aria-hidden="true"></i>View Resume</a>
								</li>
								<li>
									<a href="pending-jobs.html"><i class="pending-job fa fa-circle-o-notch" aria-hidden="true"></i>Update Resume</a>
								</li>
							   <li>
									<a href="expire-jobs.html"><i class="expire-job fa fa-circle-o-notch" aria-hidden="true"></i>Delete Resume</a>
								</li>
							</ul>
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
						<li>
							<a href="my-profile.html"><i class="fa fa-user-circle" aria-hidden="true"></i>My Profile</a>
						</li>
						<li>
							<a href="chatting.html"><i class="fa fa-comments-o" aria-hidden="true"></i>Chatting</a>
						</li class="active">
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
							<li><a href="index.html">Dashboard</a></li>
							<li class="active">My Profile</li>
						</ol>
					</div>
					<!-- /.col-lg-12 -->
				</div>              
				 <!-- /. ROW  -->
				<div id="page-inner">
				   <div class="row">
						<div class="col-md-12">
							<div class="add-job_container">
								<div class="job-box">
									<div class="row no-ext-mrg sm-plix">
										<div class="col-sm-6 col-sm-8 col-sm-offset-2 col-md-offset-3">
											<div class="log-off-wrap">
												<img src="assets/img/logo.png" class="img-responsive" alt="">
												<input type="text" name="useranme" class="form-control" placeholder="Email Or Username">
												<input type="password" name="password" class="form-control" placeholder="Password">
												<button type="submit" name="submit" class="btn btn-logoff">Log In</button>
											</div>
										</div>
									</div>
								</div>
								<!-- / General Information -->
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
				  
				</div>
				
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

<!-- Mirrored from live.themezhub.com/job-stock-large-preview/job-stock/dashboard/log-off.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 14 Mar 2018 17:09:49 GMT -->
</html>
