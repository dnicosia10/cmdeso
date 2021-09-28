<?php

session_start();
 // session_destroy();
  if( (!isset($_SESSION["uName"])) && (!isset($_SESSION["hashed_pass"])) ) {
    // header("Location:\.\home3/home/signup/login.php");
    echo "error";
  }
    
    $fk =$_SESSION['num'];
?>
<!DOCTYPE html>

<html class="no-js" lang="zxx">

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
							
							<!-- /.dropdown -->
						
							<li class="dropdown">
								<a class="dropdown-toggle" data-toggle="dropdown" href="#">
									<i class="fa fa-user-circle" aria-hidden="true"></i>
								</a>
								<ul class="dropdown-menu dropdown-user">
									
									<li><a href="my-account.php"><i class="fa fa-gear fa-fw"></i> Settings</a>
									</li>
									<li class="divider"></li>
									<li><a href="log-off.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
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
						 <?php 


   $conn = mysql_connect("localhost","root")or die(mysql_error());
   $db = mysql_select_db("cmdeso_db")or die(mysql_error()); 

   $fk = $_SESSION['num'];


      $four = mysql_query("SELECT * FROM appl_info WHERE acct_id = '$fk'  ");
  while ($row = mysql_fetch_array($four)) {
   $date=date_create($row['appl_birthd']);
$format =  date_format($date," F  d,  Y ");

			echo'
						<img src="assets/img/'.$row["appl_img"] .'" alt=img class="img-responsive img-circle" style="height: 150px;  padding-left: 10%;padding-right: 10%; width:100%;">
							';
		}
		?>
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
						
							<li class="active">
							<a href="javascript:void(0)"><i class="fa fa-clone" aria-hidden="true"></i>Update CV <span class="fa arrow"></span></a>
							<ul class="nav nav-second-level">
								<li>
									<a href="general.php"><i class="pending-job fa fa-circle-o-notch" aria-hidden="true"></i>General</a>
								</li>
								<li>
									<a href="education.php"><i class="pending-job fa fa-circle-o-notch" aria-hidden="true"></i>Education</a>
								</li>
								<li>
									<a href="seminar.php"><i class="pending-job fa fa-circle-o-notch" aria-hidden="true"></i>Seminar</a>
								</li>
								<li class="active">
									<a href="work_expirience.php"><i class="pending-job fa fa-circle-o-notch" aria-hidden="true"></i>work Expirience</a>
								</li>
								<li>
									<a href="reference.php"><i class="pending-job fa fa-circle-o-notch" aria-hidden="true"></i>Reference</a>
								</li>
							   
							</ul>
						</li>
						</li>
						<li>
							
							<li >
							<a href="javascript:void(0)"><i class="fa fa-plus-circle" aria-hidden="true"></i>Add in CV <span class="fa arrow"></span></a>
							<ul class="nav nav-second-level">
								
								<li>
									<a href="seminar-add.php"><i class="pending-job fa fa-circle-o-notch" aria-hidden="true"></i>Seminar</a>
								</li>
								<li>
									<a href="reference-add.php"><i class="pending-job fa fa-circle-o-notch" aria-hidden="true"></i>Reference</a>
								</li>
								<li>
									<a href="elem-add.php"><i class="pending-job fa fa-circle-o-notch" aria-hidden="true"></i>Education</a>
								</li>
								<li>
									<a href="work_expirience-add.php"><i class="pending-job fa fa-circle-o-notch" aria-hidden="true"></i>Work Expirience</a>
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
						<li >
							<a href="my-profile.html"><i class="fa fa-user-circle" aria-hidden="true"></i>My CV</a>
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
						<li ><a href="general.php">General </a></li>
						<li ><a href="education.php">Education </a> </li>
						<li><a href="seminar.php">Seminar </a></li>

						<li class="active">Work Expirience</li>
						<li ><a href="reference.php">Reference </a></li>
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
								
												
									

									


										
					
								<!-- / Location -->

								<div class="job-box">
									<div class="job-box-filter">
										<div class="row">
											<div class="col-md-6 col-sm-6">
												<h4><i class="fa fa-users" aria-hidden="true"></i>Work Expirience</h4>
											</div>
											<div class="col-md-2 col-sm-2" style="background-color: ; padding-top: 0px; float: right;">
												<div class="job-action" style="width: 100%;background-color: green;">
													<a class="edit" href="work_expirience-add.php" title="Add" style="float: right;"><i class="fa fa-plus-circle" aria-hidden="true"></i></a>
													
												</div>
											</div>	
										</div>
									</div>
									<div class="row no-ext-mrg sm-plix">
										<div class="col-sm-12">
											
											<?php

           $five = mysql_query("SELECT * FROM appl_info_exp WHERE acct_id = '$fk'  ");
              while ($row = mysql_fetch_array($five)) {
              $date_start=date_create($row['exp_date_start']);
              $date_end=date_create($row['exp_date_end']);
              $format_start =  date_format($date_start,"  Y ");
              $format_end =  date_format($date_end,"  Y ");
          echo'

											<div class="brows-job-list">

											
											<div class="col-md-6 col-sm-5">
												<div class="brows-job-position">
													<h4>'. $row["exp_company"] .'</h>
													<p><span>'. $row["exp_position"] .'</span><span class="brows-job-status"><strong>Date:</strong> '.$format_start. " - " .$format_end . '</span></p>
												</div>
											</div>
											<div class="col-md-3 col-sm-3">
												<div class="brows-job-location">
													<p><i class="fa fa-map-marker"></i>'. $row["exp_desc"] .'</p>
												</div>
											</div>
											<div class="col-md-2 col-sm-2">
												<div class="job-action">
												
												</div>
												
											</div><div class="job-action">
											<a class="delete" href="work_expirience-update.php?pk_seminar='. $row["exp_id"] .'" title="edit" style="float:right;"><i class="fa fa-pencil" aria-hidden="true"></i></a>
											</div>
										</div>



										
									';
							}
								?>
									
								</div></div></div>
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
