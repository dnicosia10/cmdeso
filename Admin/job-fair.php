<?php
session_start();

   if((!isset($_SESSION["uName"]))&&(!isset($_SESSION["uPass"]))&&('admin'!=$_SESSION["name"]) ) {
  
  header("Location:\.\home3/home/signup/login.php");
  }
if ('admin'!=$_SESSION["name"]) {
  	 
    header("Location:\.\home3/home/signup/login.php");
  	  }
?>
<?php

  	$b = $a ="";
	$conn = mysql_connect("localhost","root")or die(mysql_error());
	$db = mysql_select_db("cmdeso_db")or die(mysql_error()); 


	$error1 = $error2 = $error3 = $error4 = $error5 = " ";
	
	if (isset($_POST['company-bttn']))
	{

	 //restriction variable
	if (empty($_POST['Jobfair-name'])) {
		$error1 = "*";
	}else{
		$error1 = "";
	}if (empty($_POST['Jobfair-venue'])) {
		$error2 = "*";
	}else{
		$error2 = "";
	}if (empty($_POST['Jobfair-start'])) {
		$error4 =   "*";
	}else{
		$error4 = "";
	}if (empty($_POST['Jobfair-end'])) {
		$error5 =  "*";
	}else{
		$error5 = "";
	}
}

	if (isset($_POST['company-bttn'])) {
		
	

		if ( (!empty($_POST['Jobfair-name'])) && (!empty($_POST['Jobfair-venue'])) && (!empty($_POST['Jobfair-start']))&& (!empty($_POST['Jobfair-end'])) )
		{
			
			

			$company_name = mysql_real_escape_string($_POST['Jobfair-name']);
			$company_addr = mysql_real_escape_string($_POST['Jobfair-venue']);
			
			$start = $_POST['Jobfair-start'];
			$end = $_POST['Jobfair-end'];
			

			$fk= 1;
			
			 $target = "assets/img/" . basename($_FILES['image']['name']);
			 $image = $_FILES['image']['name'];
			 $Archive = "ON";

			 $sql = mysql_query("INSERT INTO jobfair_info
			 	(acct_id,
			 	jobfair_title,
			 	jobfair_datetime_start,
			 	jobfair_datetime_end,
			 	jobfair_address,
			 	jobfair_archive,
			 	jobfair_img,
			 	jobfair_log

			 )VALUES
			 	('$fk',
			 	'$company_name',
			 	'$start',
 			 	'$end',
			 	'$company_addr',
			 	'$Archive',
			 	'$image',
			 	now()
			 	)");
			// // $desc = "The admin ADD in Athletes information ID " . $stud_no. " and NAME:" .$fname." ".$lname ;
			// // $act = "ADD";
			// // $audit = mysql_query("INSERT INTO sdmo_audit(AUDIT_DESC,AUDIT_ACTION,AUDIT_DATE)VALUES('$desc','$act',now())");
			//  mysql_query($sql);
			// //ho "<script> location.replace('resume-elem.php'); </script>";
			// //uploading the image file
			 if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {

				 echo "<script type='text/javascript'>alert('Successful added')</script>";
				
				 }

		}
		else{echo "<script type='text/javascript'>alert('Fill the field')</script>";}
}

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
						
						<li class="active">
							<a href="javascript:void(0)"><i class="fa fa-clone" aria-hidden="true"></i>Manage Jobs Fair <span class="fa arrow"></span></a>
							<ul class="nav nav-second-level">
								<li class="active">
							<a href="job-fair.php"><i class="fa fa-file-text" aria-hidden="true"></i>Create Job Fair</a>
								</li>
								<li>
									<a href="my-jobfair.php"><i class="active-job fa fa-circle-o-notch" aria-hidden="true"></i>View Job Fair</a>
								</li>
								<li>
									<a href="my-jobfair-archive.php"><i class="expire-job fa fa-circle-o-notch" aria-hidden="true"></i>Archive Job Fair</a>
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
						<h4 class="page-title">Jobfair</h4>
					</div>
					<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
						<ol class="breadcrumb">
							<li><a href="index.php">Dashboard</a></li>
							<li class="active">Create Job Fair</li>
						</ol>
					</div>
					<!-- /.col-lg-12 -->
				</div>              
				 <!-- /. ROW  -->
				<div id="page-inner">
				   <div class="row">

				   	<form method="POST" enctype="multipart/form-data">
						<div class="col-md-12">
							<div class="add-job_container">

								<div class="job-box" style="height: 500px;">
									<div class="job-box-filter">
										<div class="row">
											<div class="col-md-6 col-sm-6">
												<h4><i class="fa fa-picture-o" aria-hidden="true"></i>Company Banner</h4>
											</div>
										</div>
									</div>
									<div class="row no-ext-mrg sm-plix">
										<div class="col-sm-12">
											
												
													
														<img src="assets/img/banner.jpg" id="img" alt=""  style="width: 100%;height: 300px;" >
												<span class="btn btn-default btn-file">
													Upload Photo <input type="file" name="image" id="files" value="">
												</span>

												
												
											
										</div>
									</div>
								</div>
<script type="text/javascript">
					 			document.getElementById("files").onchange = function(){
					 				var reader = new FileReader();
					 				reader.onload = function(e){
					 					document.getElementById("img").src = e.target.result;
					 				};
					 				reader.readAsDataURL(this.files[0]);
					 			};
					 		</script>
								<div class="job-box" style="height: 400px;">
									<div class="job-box-filter">
										<div class="row">
											<div class="col-md-6 col-sm-6">
												<h4><i class="fa fa-file" aria-hidden="true"></i>General Information</h4>
											</div>
										</div>
									</div>
									<div class="row no-ext-mrg sm-plix">
										<div class="col-sm-12">
											<h5>Job Fair Title<span class="error"><?php echo $error1 ?></span></h5>
											<input name="Jobfair-name" type="text" class="form-control" placeholder="Enter Jobfair Title">
										</div>
										<div class="col-sm-12">
											<h5>Venue Address<span class="error"><?php echo $error2 ?></span></h5>
											<input name="Jobfair-venue" type="text" class="form-control" placeholder="Enter the Venue of Jobfair and Address">
										</div>
										
									</div>
									<div class="row no-ext-mrg sm-plix">
										<div class="col-sm-6">
											
											<h5>Date and Time Start<span class="error"><?php echo $error4 ?></span></h5>
											<input name="Jobfair-start" type="datetime-local" class="form-control" >
										</div>
										
										
											<div class="col-sm-6">
											<h5>Time End<span class="error"><?php echo $error5 ?></span></h5>
											<input name="Jobfair-end" type="time" class="form-control">
										
										</div>
									</div>
								</div>
								<!-- / General Information -->
								
								<!-- / Full Detail -->
								
								<!-- / Full Detail -->
								<div class="row no-ext-mrg" ">
									<div class="col-sm-12" style="text-align: center;">
										<button class="submit" style="background-color: #1FB81F; padding-left: auto;padding-right: auto;  margin: 0 auto display: table; padding: 12px 25px;background: #07b107;color: #ffffff; text-transform: capitalize;font-size: 17px;border-radius: 50px;min-width: 160px; text-align: center;border: none;" type="submit" name="company-bttn"  value="">
													Submit <i class="fa fa-arrow-circle-right"></i>
												</button>	
										<!-- <a href="#" class="button submit">Submit <i class="fa fa-arrow-circle-right"></i></a> -->
									</div>
								</div>
							</div>
						</div>
					</form>
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
