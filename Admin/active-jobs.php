﻿<?php
session_start();

  if((!isset($_SESSION["uName"]))&&(!isset($_SESSION["uPass"]))&&('admin'!=$_SESSION["name"]) ) {
  
    header("Location:\.\home3/admin/log-off.php");
  }if ('admin'!=$_SESSION["name"]) {
  		echo "error_log";
  	  }

  	  echo $_SESSION['name'];

?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="zxx">
	
<!-- Mirrored from live.themezhub.com/job-stock-large-preview/job-stock/dashboard/active-jobs.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 14 Mar 2018 17:09:41 GMT -->
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
								<a class="dropdown-toggle" data-toggle="dropdown" href="">
									<img src="assets/img/user.jpg" class="img-responsive img-circle" alt="user">
								</a>
								<ul class="dropdown-menu dropdown-user">
									<li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
									</li>
									<li><a href="account-setting.php"><i class="fa fa-gear fa-fw"></i>Account Settings</a>
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
					<ul class="nav" id="main-menu">
						
						<li class="">
							<a href="index.php"><i class="fa fa-cog" aria-hidden="true"></i>Dashboard</a>
						</li>
						<li>
							<a href="messages.php"><i class="fa fa-envelope-open" aria-hidden="true"></i>Messages</a>
						</li>
						<li>
							<a href="javascript:void(0)"><i class="fa fa-clone" aria-hidden="true"></i>Manage Jobs Fair <span class="fa arrow"></span></a>
							<ul class="nav nav-second-level">
								<li>
									<a href="my-jobfair.php"><i class="active-job fa fa-circle-o-notch" aria-hidden="true"></i>View Jobfair</a>
								</li>
								<li>
									<a href="my-jobfair-archive.php"><i class="expire-job fa fa-circle-o-notch" aria-hidden="true"></i>Archive Jobfair</a>
								</li>
							  
							</ul>
						</li>
						<li>
							<a href="javascript:void(0)"><i class="fa fa-clone" aria-hidden="true"></i>Manage Jobs Company <span class="fa arrow"></span></a>
							<ul class="nav nav-second-level">
								<li>
									<a href="my-company.php"><i class="active-job fa fa-circle-o-notch" aria-hidden="true"></i>View Company</a>
								</li>
								<li>
									<a href="my-company-archive.php"><i class="expire-job fa fa-circle-o-notch" aria-hidden="true"></i>Archived Company</a>
								</li>
							  
							</ul>
						</li>


						<li class="Active">
							<a href="javascript:void(0)"><i class="fa fa-clone" aria-hidden="true"></i>Manage Jobs <span class="fa arrow"></span></a>
							<ul class="nav nav-second-level">
								<li class="Active">
									<a href="my-job-active.php"><i class="active-job fa fa-circle-o-notch" aria-hidden="true"></i>Active Jobs</a>
								</li>
								<li>
									<a href="my-job-expired.php"><i class="pending-job fa fa-circle-o-notch" aria-hidden="true"></i>Expired Jobs</a>
								</li>
							   <li>
									<a href="my-job-archive.php"><i class="expire-job fa fa-circle-o-notch" aria-hidden="true"></i>Archive Jobs</a>
								</li>
							</ul>
						</li>
					 
						<li>
							<a href="candidate.php"><i class="fa fa-user-circle-o" aria-hidden="true"></i>My Candidate</a>
						</li>
						<li>
							<a href="job-fair.php"><i class="fa fa-file-text" aria-hidden="true"></i>Create Jobfair</a>
						</li>
						<li>
							<a href="create-company.php"><i class="fa fa-file-text" aria-hidden="true"></i>Create Company</a>
						</li>
						<li>
							<a href="add-job.php"><i class="fa fa-plus-circle" aria-hidden="true"></i>Add Jobs</a>
						</li>
						<li>
							<a href="my-profile.php"><i class="fa fa-user-circle" aria-hidden="true"></i>My Profile</a>
						</li>
						
						<li class="log-off">
							<a href="log-off.php"><i class="fa fa-power-off" aria-hidden="true"></i>Logout</a>
						</li>
					</ul>
				</div>
			</nav>
			<!-- /. NAV SIDE  -->
			
			<div id="page-wrapper" >
				 <div class="row bg-title">
					<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
						<h4 class="page-title">Active Jobs</h4>
					</div>
					<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
						<ol class="breadcrumb">
							<li><a href="index.php">Dashboard</a></li>
							<li class="active">Active Jobs</li>
						</ol>
					</div>
					<!-- /.col-lg-12 -->
				</div>              
				 <!-- /. ROW  -->
				<div id="page-inner">
				   <div class="row">
						<div class="col-md-12">
							<div class="chat_container">
								<div class="job-box">
									<div class="job-box-filter">
										<div class="row">
											<div class="col-md-6 col-sm-6">
											<label>Show 
											<select name="datatable_length" class="form-control input-sm">
											<option value="10">10</option>
											<option value="25">25</option>
											<option value="50">50</option>
											<option value="100">100</option>
											</select>
											entries</label>
											</div>
											<div class="col-md-6 col-sm-6">
												<div class="filter-search-box text-right">
													<label>Search:<input type="search" class="form-control input-sm" placeholder=""></label>
												</div>
											</div>
										</div>
									</div>
									<article>
										<div class="brows-job-list">
											<div class="col-md-1 col-sm-2 small-padding">
												<div class="brows-job-company-img">
													<img src="assets/img/com-1.jpg" class="img-responsive" alt="" />
												</div>
											</div>
											<div class="col-md-6 col-sm-5">
												<div class="brows-job-position">
													<h3>Senior front-end Developer</h3>
													<p><span>Autodesk</span><span class="brows-job-status"><strong>Status:</strong> Active</span></p>
												</div>
											</div>
											<div class="col-md-3 col-sm-3">
												<div class="brows-job-location">
													<p><i class="fa fa-map-marker"></i>QBL Park, C40</p>
												</div>
											</div>
											<div class="col-md-2 col-sm-2">
												<div class="job-action">
													<a class="edit" href="#" title="Edit"><i class="fa fa-pencil" aria-hidden="true"></i></a>
													<a class="delete" href="#" title="Delete"><i class="fa fa-trash" aria-hidden="true"></i></a>
												</div>
											</div>
										</div>
									</article>
									<article>
										<div class="brows-job-list">
											<div class="col-md-1 col-sm-2 small-padding">
												<div class="brows-job-company-img">
													<img src="assets/img/com-2.jpg" class="img-responsive" alt="" />
												</div>
											</div>
											<div class="col-md-6 col-sm-5">
												<div class="brows-job-position">
													<h3>Senior front-end Developer</h3>
													<p><span>Autodesk</span><span class="brows-job-status"><strong>Status:</strong> Active</span></p>
												</div>
											</div>
											<div class="col-md-3 col-sm-3">
												<div class="brows-job-location">
													<p><i class="fa fa-map-marker"></i>QBL Park, C40</p>
												</div>
											</div>
											<div class="col-md-2 col-sm-2">
												<div class="job-action">
													<a class="edit" href="#" title="Edit"><i class="fa fa-pencil" aria-hidden="true"></i></a>
													<a class="delete" href="#" title="Delete"><i class="fa fa-trash" aria-hidden="true"></i></a>
												</div>
											</div>
										</div>
									</article>
									<article>
										<div class="brows-job-list">
											<div class="col-md-1 col-sm-2 small-padding">
												<div class="brows-job-company-img">
													<img src="assets/img/com-3.jpg" class="img-responsive" alt="" />
												</div>
											</div>
											<div class="col-md-6 col-sm-5">
												<div class="brows-job-position">
													<h3>Senior front-end Developer</h3>
													<p><span>Autodesk</span><span class="brows-job-status"><strong>Status:</strong> Active</span></p>
												</div>
											</div>
											<div class="col-md-3 col-sm-3">
												<div class="brows-job-location">
													<p><i class="fa fa-map-marker"></i>QBL Park, C40</p>
												</div>
											</div>
											<div class="col-md-2 col-sm-2">
												<div class="job-action">
													<a class="edit" href="#" title="Edit"><i class="fa fa-pencil" aria-hidden="true"></i></a>
													<a class="delete" href="#" title="Delete"><i class="fa fa-trash" aria-hidden="true"></i></a>
												</div>
											</div>
										</div>
									</article>
									<article>
										<div class="brows-job-list">
											<div class="col-md-1 col-sm-2 small-padding">
												<div class="brows-job-company-img">
													<img src="assets/img/com-4.jpg" class="img-responsive" alt="" />
												</div>
											</div>
											<div class="col-md-6 col-sm-5">
												<div class="brows-job-position">
													<h3>Senior front-end Developer</h3>
													<p><span>Autodesk</span><span class="brows-job-status"><strong>Status:</strong> Active</span></p>
												</div>
											</div>
											<div class="col-md-3 col-sm-3">
												<div class="brows-job-location">
													<p><i class="fa fa-map-marker"></i>QBL Park, C40</p>
												</div>
											</div>
											<div class="col-md-2 col-sm-2">
												<div class="job-action">
													<a class="edit" href="#" title="Edit"><i class="fa fa-pencil" aria-hidden="true"></i></a>
													<a class="delete" href="#" title="Delete"><i class="fa fa-trash" aria-hidden="true"></i></a>
												</div>
											</div>
										</div>
									</article>
									<article>
										<div class="brows-job-list">
											<div class="col-md-1 col-sm-2 small-padding">
												<div class="brows-job-company-img">
													<img src="assets/img/com-5.jpg" class="img-responsive" alt="" />
												</div>
											</div>
											<div class="col-md-6 col-sm-5">
												<div class="brows-job-position">
													<h3>Senior front-end Developer</h3>
													<p><span>Autodesk</span><span class="brows-job-status"><strong>Status:</strong> Active</span></p>
												</div>
											</div>
											<div class="col-md-3 col-sm-3">
												<div class="brows-job-location">
													<p><i class="fa fa-map-marker"></i>QBL Park, C40</p>
												</div>
											</div>
											<div class="col-md-2 col-sm-2">
												<div class="job-action">
													<a class="edit" href="#" title="Edit"><i class="fa fa-pencil" aria-hidden="true"></i></a>
													<a class="delete" href="#" title="Delete"><i class="fa fa-trash" aria-hidden="true"></i></a>
												</div>
											</div>
										</div>
									</article>
									<!--row Pagination-->
									<div class="row">
										<ul class="pagination">
											<li><a href="#">&laquo;</a></li>
											<li class="active"><a href="#">1</a></li>
											<li><a href="#">2</a></li>
											<li><a href="#">3</a></li> 
											<li><a href="#">4</a></li> 
											<li><a href="#"><i class="fa fa-ellipsis-h"></i></a></li> 
											<li><a href="#">&raquo;</a></li> 
										</ul>
									</div>
									<!--./row Pagination-->
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

</html>
