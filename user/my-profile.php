<?php
	session_start();
// session_destroy();
  if( (!isset($_SESSION["uName"])) && (!isset($_SESSION["hashed_pass"])) ) {
   // header("Location:\.\home3/home/signup/login.php");
  	echo "error";
  }
  $fk = $_SESSION['num'];
?>
<!DOCTYPE html>
<html class="no-js" lang="zxx">
	
<!-- Mirrored from live.themezhub.com/job-stock-large-preview/job-stock/dashboard/my-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 14 Mar 2018 17:09:41 GMT -->
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
						<a class="navbar-brand" href="index.php"><img src="assets/img/logo.png" class="img-responsive" alt=""></a>
					</div>
					<div class="navbar-collapse">
						<ul class="nav navbar-top-links navbar-right"> 
							
							<!-- /.dropdown -->
							  <?php 




    $b="";
   $conn = mysql_connect("localhost","root")or die(mysql_error());
   $db = mysql_select_db("cmdeso_db")or die(mysql_error()); 

    $three = mysql_query("SELECT * FROM appl_info WHERE acct_id = '$fk' ");
  while ($row = mysql_fetch_array($three)) {
    

  

      }
      $four = mysql_query("SELECT * FROM appl_info WHERE acct_id = '$fk'  ");
  while ($row = mysql_fetch_array($four)) {
   $date=date_create($row['appl_birthd']);
$format =  date_format($date," F  d,  Y ");

			echo'
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
						
						<img src="assets/img/'.$row["appl_img"] .'"  class="img-responsive img-circle" style="height: 150px;  padding-left: 10%;padding-right: 10%; width:100%;">
					</span>
					</div>
					<ul class="nav" id="main-menu">
						
						<li class="">
							<a href="index.php"><i class="fa fa-cog" aria-hidden="true"></i>Job Offering</a>
						</li>
						<!-- <li>
							<a href="messages.php"><i class="fa fa-envelope-open" aria-hidden="true"></i>Messages</a>
						</li> -->
						<li>
							
							<li >
							<a href="javascript:void(0)"><i class="fa fa-upload" aria-hidden="true"></i>Update CV <span class="fa arrow"></span></a>
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
								<li>
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
					 
					
						<li class="active">
							<a href="my-profile.php"><i class="fa fa-user-circle" aria-hidden="true"></i>My CV</a>
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
							<li><a href="index.php">Dashboard</a></li>
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
										<h4><i class="fa fa-picture-o" aria-hidden="true"></i>Work Expirience</h4>
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

<!-- Mirrored from live.themezhub.com/job-stock-large-preview/job-stock/dashboard/my-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 14 Mar 2018 17:09:41 GMT -->
</html>
