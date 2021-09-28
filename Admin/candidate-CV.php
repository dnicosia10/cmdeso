<?php
session_start();

  if((!isset($_SESSION["uName"]))&&(!isset($_SESSION["uPass"]))&&('admin'!=$_SESSION["name"]) ) {
  
   header("Location:\.\home3/home/signup/login.php");
  }if ('admin'!=$_SESSION["name"]) {
  	 
    header("Location:\.\home3/home/signup/login.php");
  	  }

?>
<?php
	$appl_id = $_GET['a'];
	$fk = $_GET['b'];
  	$b = $a ="";

	$conn = mysql_connect("localhost","root")or die(mysql_error());
	$db = mysql_select_db("cmdeso_db")or die(mysql_error()); 
	

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
			<div class="navbar navbar-inverse navbar-fixed-top"  style="background: ;width: 100%;">
				<div class="container"  style="padding-left: 0px; background-color: ; width: 100%;">
					<div class="navbar-header col-sm-6" style="background: ; " >
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="index.php" style="float: left; background: ;"><img src="assets/img/logo.png" class="img-responsive" alt=""></a>
					</div>
					<div class="navbar-collapse col-sm-6" style="background-color: ; float: right;" >
						<ul class="nav navbar-top-links navbar-right"> 
							
							<!-- /.dropdown -->
							<li class="dropdown">

								<a class="dropdown-toggle" data-toggle="dropdown" href="#">
									<i class="fa fa-bell fa-fw"></i>
									<span class="count-notification"><?php 
									$sql = mysql_query("SELECT * FROM appl_info WHERE appl_log_date = now()    ");
												$num = mysql_num_rows($sql);
									$sql1 = mysql_query("SELECT * FROM job_onjob_info WHERE onjob_datetime = now()    ");
												$num1 = mysql_num_rows($sql1);
									$sql2 = mysql_query("SELECT * FROM admin_job_fair_info WHERE job_log = now()    ");
												$num2 = mysql_num_rows($sql2);
												echo $num2 + $num + $num1;
												
												
									?></span>
								</a>
								<ul class="dropdown-menu dropdown-alerts">
									<li>
										<a href="#">
											<div>
												<i class="fa fa-user fa-fw"></i> 
												<?php
												$sql = mysql_query("SELECT * FROM appl_info WHERE appl_log_date = now()    ");
												$num = mysql_num_rows($sql);
												echo $num;
												$_SESSION['num1'] = $num;
												?>
												New Applicants
												<span class="pull-right text-muted small">Today</span>
											</div>
										</a>
									</li>
									<li class="divider"></li>
									<li>
										<a href="#">
											<div>
												<i class="fa fa-tasks fa-fw"></i><?php
												$sql = mysql_query("SELECT * FROM job_onjob_info WHERE onjob_datetime = now()    ");
												$num = mysql_num_rows($sql);
												echo $num;
												$_SESSION['num2'] = $num;
												?> New Job's
												<span class="pull-right text-muted small">Today</span>
											</div>
										</a>
									</li>
									<li class="divider"></li>
									<li>
										<a href="#">
											<div>
												<i class="fa fa-gear fa-fw"></i><?php
												$sql = mysql_query("SELECT * FROM admin_job_fair_info WHERE job_log = now()    ");
												$num = mysql_num_rows($sql);
												echo $num;
												$_SESSION['num3'] = $num;
												?> New Employer's
												<span class="pull-right text-muted small">Today</span>
											</div>
										</a>
									</li>
									<li class="divider">
										
								
								</ul>

								<!-- /.dropdown-alerts -->
							</li>
							<!-- /.dropdown -->
							<li class="dropdown">
								<a class="dropdown-toggle" data-toggle="dropdown" href="#">
									<i class="fa fa-user-circle-o"></i>
								</a>
								<ul class="dropdown-menu dropdown-user">
									
									<li><a href="account-setting.php"><i class="fa fa-gear fa-fw"></i>Account Settings</a>
									</li>
									<li class="divider"></li>
									<li><a href="../home/signup/login.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
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
					<div style="margin-top:10%; margin-left: 10%; margin-bottom: 10%;margin-right: 10%;background-color: ">
						<span >
						
						<img src="assets/img/cmd.png"  class="img-responsive " style="height: 100px;  padding-left: 10%;padding-right: 10%; width:100%;">
					</span>
					</div>
					<ul class="nav" id="main-menu">
						
						<li class="Active">
							<a href="index.php"><i class="fa fa-cog" aria-hidden="true"></i>Dashboard</a>
						</li>
						
						<li>
							<a href="candidate.php"><i class="fa fa-user-circle-o" aria-hidden="true"></i>My Applicants</a>
						</li>
						
						<li>
							<a href="javascript:void(0)"><i class="fa fa-clone" aria-hidden="true"></i>Manage Jobs Fair <span class="fa arrow"></span></a>
							<ul class="nav nav-second-level">
								<li>
							<a href="job-fair.php"><i class="fa fa-file-text" aria-hidden="true"></i>Create Jobfair</a>
								</li>
								<li>
									<a href="my-jobfair.php"><i class="active-job fa fa-circle-o-notch" aria-hidden="true"></i>View Jobfair</a>
								</li>
								<li>
									<a href="my-jobfair-archive.php"><i class="expire-job fa fa-circle-o-notch" aria-hidden="true"></i>Archive Jobfair</a>
								</li>
							  
							</ul>
						</li>
						<li>
							<a href="javascript:void(0)"><i class="fa fa-clone" aria-hidden="true"></i>Manage Company <span class="fa arrow"></span></a>
							<ul class="nav nav-second-level">
								<li>
							<a href="create-company.php"><i class="fa fa-file-text" aria-hidden="true"></i>Add Company</a>
								</li>
								<li>
									<a href="my-company.php"><i class="active-job fa fa-circle-o-notch" aria-hidden="true"></i>View Company</a>
								</li>
								<li>
									<a href="my-company-archive.php"><i class="expire-job fa fa-circle-o-notch" aria-hidden="true"></i>Archived Company</a>
								</li>
							  
							</ul>
						</li>


						<li>
							<a href="javascript:void(0)"><i class="fa fa-clone" aria-hidden="true"></i>Manage Jobs <span class="fa arrow"></span></a>
							<ul class="nav nav-second-level">
								<li>
							<a href="add-job.php"><i class="fa fa-plus-circle" aria-hidden="true"></i>Add Jobs</a>
								</li>
								<li>
									<a href="my-job-active.php"><i class="active-job fa fa-circle-o-notch" aria-hidden="true"></i>Active Jobs</a>
								</li>
								
							   <li>
									<a href="my-job-archive.php"><i class="expire-job fa fa-circle-o-notch" aria-hidden="true"></i>Archive Jobs</a>
								</li>
							</ul>
						</li>
					 
						
						
						
						<li>
							<a href="my-profile.php"><i class="fa fa-user-circle" aria-hidden="true"></i>My Profile</a>
						</li>
						<li>
							<a href="log-off.php"><i class="fa fa-plus" aria-hidden="true"></i>Add Admin Account</a>
						</li>
						<li>
							<a href="system_log.php"><i class="fa fa-user" aria-hidden="true"></i>Activity Log</a>
						</li>
						
						<li class="log-off">
							<a href="../home/signup/login.php"><i class="fa fa-power-off" aria-hidden="true"></i>Logout</a>
						</li>
					</ul>
				</div>
			</nav>
			<!-- /. NAV SIDE  -->
			
			<div id="page-wrapper" >
				<div class="row bg-title">
					<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
						<h4 class="page-title">Home</h4>
					</div>
					<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
						<ol class="breadcrumb">
							<li><a href="index.php">Dashboard</a></li>
							<li class="active">CV</li>
						</ol>
					</div>
					<!-- /.col-lg-12 -->
				</div>              
				 <!-- /. ROW  -->
				<div id="page-inner">
				    <div class="row bott-wid">
				    	<a href="candidate-CV.php?a=<?php echo $appl_id.'&b='. $fk; ?>" title="View the Curriculum Vitei">
						<div class="col-md-6 col-sm-6">
							<div class="widget unique-widget" style="background-color:#4dd44dc7; ">
								<div class="row">
									<div class="widget-caption info">
										<div class="col-xs-12 no-pad">
											<i class="icon icon-profile-male"></i>
										</div>
										<div class="col-xs-12 no-pad">
											<div class="widget-detail" style="text-align: center;">
												<h2>View CV</h2>
												
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						</a>
						<a href="candidate-matchjob.php?a=<?php echo $appl_id.'&b='. $fk; ?>" title="View the list of job match">
						<div class="col-md-6 col-sm-6">
							<div class="widget unique-widget" style="background-color:; ">
								<div class="row">
									<div class="widget-caption sucess" >
										<div class="col-xs-12 no-pad">
											<i class="icon icon-basket"></i>
										</div>
										<div class="col-xs-12 no-pad">
											<div class="widget-detail" style="text-align: center;">
												<h2>Job Match</h2>
												
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						</a>
					</div>
					
				</div>
			
				              
				 <!-- /. ROW  -->
				<div id="page-inner">
				   <div class="row">
						<div class="col-md-12">
							<div class="chat_container">
								<div class="job-box" style="height: auto;">
									<?php $four = mysql_query("SELECT * FROM appl_info WHERE acct_id = '$fk'  ");
  while ($row = mysql_fetch_array($four)) {
   $date=date_create($row['appl_birthd']);
$format =  date_format($date," F  d,  Y ");
echo '
<div class="job-box">
									<div class="row no-ext-mrg sm-plix">
										<div class="col-sm-6 col-sm-8 col-sm-offset-2 col-md-offset-3">
											<div class="main-profile-detail">
												<img src="assets/img/'. $row["appl_img"] .'" alt="" class=" img-responsive" style="height:200px;">
												<h4>'. $row["appl_fname"] ." " .$row["appl_mname"]." " .$row["appl_lname"].'</h4>
												
												<span class="mail">'. $row["appl_email"] .'</span>
												
												
											</div>
										</div>
									</div>
								</div>
								
								<!-- / General Information -->
								<div class="job-box">
									<div class="job-box-filter">
										<div class="row">
											<div class="col-md-6 col-sm-6">
												<h4><i class="fa fa-tasks" aria-hidden="true"></i>General Information</h4>
											</div>
										</div>
									</div>
									
									<div class="row no-ext-mrg sm-plix">
										<div class="col-sm-6">
											<div class="col-sm-4"><h4 class="text-uppercase">Name :</strong></div></h4>
              								<div class="col-sm-8" style="padding-top:10px; ">'. $row["appl_fname"] ." " .$row["appl_mname"]." " .$row["appl_lname"]." " .$row["appl_sname"].'</div>
										</div>
										<div class="col-sm-6">
											<div class="col-sm-4"><h4 class="text-uppercase">Age :</strong></div></h4>
              								<div class="col-sm-8" style="padding-top:10px;">'. $row["appl_age"] .'</div>
										</div>
											<div class="row no-ext-mrg sm-plix">
										<div class="col-sm-6">
											<div class="col-sm-4"><h4 class="text-uppercase">Birth Date :</strong></div></h4>
              								<div class="col-sm-8" style="padding-top:10px; ">'. $format .'</div>
										</div>
										<div class="col-sm-6">
											<div class="col-sm-4"><h4 class="text-uppercase">Religion :</strong></div></h4>
              								<div class="col-sm-8" style="padding-top:10px;">'. $row["appl_religion"] .'</div>
										</div>
										<div class="col-sm-6">
											<div class="col-sm-4"><h4 class="text-uppercase">Birth Place:</strong></div></h4>
              								<div class="col-sm-8" style="padding-top:10px; ">'. $row["appl_birthp"] .'</div>
										</div>
										<div class="col-sm-6">
											<div class="col-sm-4"><h4 class="text-uppercase">Phone :</strong></div></h4>
              								<div class="col-sm-8" style="padding-top:10px;">'. $row["appl_contactn"] .'</div>
										</div>

										<div class="col-sm-6">
											<div class="col-sm-4"><h4 class="text-uppercase">Address:</strong></div></h4>
              								<div class="col-sm-8" style="padding-top:10px; ">'. $row["appl_prov"] . ", " . $row["appl_street"] .'</div>
										</div>
										<div class="col-sm-6">
											<div class="col-sm-4"><h4 class="text-uppercase">Sex :</strong></div></h4>
              								<div class="col-sm-8" style="padding-top:10px;">'. $row["appl_sex"] .'</div>
										</div>
										<div class="col-sm-6">
											<div class="col-sm-4"><h4 class="text-uppercase">Zipcode:</strong></div></h4>
              								<div class="col-sm-8" style="padding-top:10px; ">'. $row["appl_zipc"] .'</div>
										</div>
										<div class="col-sm-6">
											<div class="col-sm-4"><h4 class="text-uppercase">Citizenship :</strong></div></h4>
              								<div class="col-sm-8" style="padding-top:10px;">'. $row["appl_nationality"] .'</div>
										</div>
										<div class="col-sm-6">
											<div class="col-sm-4"><h4 class="text-uppercase">Birth Place:</strong></div></h4>
              								<div class="col-sm-8" style="padding-top:10px; ">'. $row["appl_birthp"] .'</div>
										</div>
										<div class="col-sm-6">
											<div class="col-sm-4"><h4 class="text-uppercase">Birth Place:</strong></div></h4>
              								<div class="col-sm-8" style="padding-top:10px; ">'. $row["appl_birthp"] .'</div>
										</div>
										<div class="col-sm-6">
											<div class="col-sm-4"><h4 class="text-uppercase">Disability :</strong></div></h4>
              								<div class="col-sm-8" style="padding-top:10px;">'. $row["appl_disability"] .'</div>
										</div>
										<div class="col-sm-6">
											<div class="col-sm-4"><h4 class="text-uppercase">Employment :</strong></div></h4>
              								<div class="col-sm-8" style="padding-top:10px;">'. $row["appl_employed"] .'</div>
										</div>
										<div class="col-sm-6">
											<div class="col-sm-4"><h4 class="text-uppercase">Status :</strong></div></h4>
              								<div class="col-sm-8" style="padding-top:10px;">'. $row["appl_employed_status"] .'</div>
										</div>
										<div class="col-sm-6">
											<div class="col-sm-4"><h4 class="text-uppercase">Highest Educational Level :</strong></div></h4>
              								<div class="col-sm-8" style="padding-top:10px;padding-left:15px;">'. $row["appl_educational_attain"] .'</div>
										</div>

										
									</div>
								</div></div>';
		}
			?>
								<!-- / Location -->

						<div class="job-box">
							<div class="job-box-filter">
								<div class="row">
									<div class="col-md-6 col-sm-6">
										<h4><i class="fa fa-picture-o" aria-hidden="true"></i>Work Experience</h4>
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

									
									<div class="col-md-4 col-sm-4">
										<div class="brows-job-position">
											<h4>'. $row["exp_company"] .'</h>
											<p><span>'. $row["exp_position"] .'</span></p>
										</div>
									</div>
									<div class="col-md-4 col-sm-4">
										<div class="brows-job-location">
											<p><i class="fa fa-map-marker"></i>'. $row["exp_desc"] .'</p>
										</div>
									</div>
									<div class="col-md-3 col-sm-3">
										<div class="job-action">
											<p><span class="brows-job-status"><strong>Date:</strong> '.$format_start. " - " .$format_end . '</span></p>
										</div>
									</div>
								</div>



								
							';
					}
						?>
							
						</div></div></div>
								<!-- / Full Detail -->
								<div class="job-box">
									<div class="job-box-filter">
										<div class="row">
											<div class="col-md-6 col-sm-6">
												<h4><i class="fa fa-users" aria-hidden="true"></i>Education</h4>
											</div>
										</div>
									</div>
									<?php

			          $five = mysql_query("SELECT * FROM appl_info_edu WHERE acct_id = '$fk'  ORDER BY edu_date_grad_start ASC ");
              while ($row = mysql_fetch_array($five)) {
              $date_start=date_create($row['edu_date_grad_start']);
              $date_end=date_create($row['edu_date_grad_end']);
              $format_start =  date_format($date_start,"  Y ");
              $format_end =  date_format($date_end," Y ");
               $format_start1 =  date_format($date_start," F  d,  Y ");
              $format_end2 =  date_format($date_end," F  d,  Y ");
			          echo'

			          			<div class="brows-job-list">

											
											<div class="col-md-4 col-sm-4">
												<div class="brows-job-position">
													<h4>'. $row["edu_title"] .'</h>
													<h5>'. $row["edu_course"] .'</h>
													
												</div>
											</div>
											<div class="col-md-4 col-sm-4">
												<div class="brows-job-location">
													<p><i class="fa fa-map-marker"></i>'. $row["edu_name"] .'</p> 
														<p class="category"> <i class="fa fa-circle-o-notch"></i>'. $row["edu_addr"] .'</p>
													

            											

												</div>
											</div>
											<div class="col-md-3 col-sm-3">
												<div class="job-action">
													<p><span class="brows-job-status"><strong>Date:</strong> ' . $format_start. " - " .$format_end . '</span></p>
												</div>
											</div>
										</div>

									';
							}
								?>
									</div>
								
								<!-- / Full Detail -->
								
								<!-- / Full Detail -->
								<div class="job-box">
									<div class="job-box-filter">
										<div class="row">
											<div class="col-md-6 col-sm-6">
												<h4><i class="fa fa-users" aria-hidden="true"></i>Seminar Attended</h4>
											</div>
										</div>
									</div>
									<?php
						$num=1;
			          $six = mysql_query("SELECT * FROM appl_info_seminar WHERE acct_id = '$fk'  ORDER BY seminar_date ASC ");
              while ($row = mysql_fetch_array($six)) {
              $date_start=date_create($row['seminar_date']);
              //$date_end=date_create($row['edu_date_grad_end']);
              $format_start =  date_format($date_start,"  F  d,  Y ");
              //$format_end =  date_format($date_end," Y ");
			          echo'

			          			<div class="brows-job-list">

											
											<div class="col-md-4 col-sm-4">
												<div class="brows-job-position">
													<h4>'. $row["seminar_title"] .'</h>
													<h5>'. $row["seminar_orga"] .'</h>
													
												</div>
											</div>
											<div class="col-md-4 col-sm-4">
												<div class="brows-job-location">
													<p><i class="fa fa-map-marker"></i>'. $row["seminar_vp"] .'</p> 
														<p class="category"> <i class="fa fa-circle-o-notch"></i>'. $row["seminar_addr"] .'</p>
													

            											

												</div>
											</div>
											<div class="col-md-3 col-sm-3">
												<div class="job-action">
													<p><span class="brows-job-status"><strong>Date:</strong> ' . $format_start . '</span></p>
												</div>
											</div>
										</div>

									';
							}
								?>
									</div>
								</div>
							</div>
								<!-- / Full Detail -->
								<!-- / Full Detail -->
								<div class="job-box">
									<div class="job-box-filter">
										<div class="row">
											<div class="col-md-6 col-sm-6">
												<h4><i class="fa fa-cog" aria-hidden="true"></i>Reference</h4>
											</div>
										</div>
									</div>
									<?php
						$num=1;
			         $seven = mysql_query("SELECT * FROM appl_info_ref WHERE acct_id = '$fk'  ");
              while ($row = mysql_fetch_array($seven)) {

                
        echo'

			          			<div class="brows-job-list">

											
											<div class="col-md-4 col-sm-4">
												<div class="brows-job-position">
													<h4>'. $row["ref_fname"] ." ". $row["ref_mname"] ." ". $row["ref_lname"] .'</h>
													<h5>Company: '.$row["ref_company"] .'</h>
													<p><span class="brows-job-status"><strong>Position:</strong> ' .$row["ref_position"] . '</span></p>
												</div>
											</div>
											<div class="col-md-3 col-sm-3">
												<div class="brows-job-location">
													<p><i class="fa fa-map-marker"></i>'. $row["ref_contact"] .'</p> 
														<p class="category"> <i class="fa fa-circle-o-notch"></i>'. $row["ref_address"] .'</p>
													

            											

												</div>
											</div>
											<div class="col-md-3 col-sm-3">
												<div class="job-action">
													
												</div>
											</div>
										</div>

									';
							}
								?>
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