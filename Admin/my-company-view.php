<?php
session_start();

    if((!isset($_SESSION["uName"]))&&(!isset($_SESSION["uPass"]))&&('admin'!=$_SESSION["name"]) ) {
  
   header("Location:\.\home3/home/signup/login.php");
  }if ('admin'!=$_SESSION["name"]) {
  	 
    header("Location:\.\home3/home/signup/login.php");
  	  }

?>
<?php

  	$b = $a ="";
	$conn = mysql_connect("localhost","root")or die(mysql_error());
	$db = mysql_select_db("cmdeso_db")or die(mysql_error()); 
// $num = $_SESSION['num'];
// $_SESSION['num'] = $num;

// 	$two = mysql_query("SELECT * FROM appl_info WHERE acct_id = '$num' ");
// 	while ($row = mysql_fetch_array($two)) {
// 		$b = $row['acct_id'];
// 		$a = $row['appl_id'];
// 	}

	$error1 = $error2 = $error3 = $error4 = $error5 = $error6 = $error7 = $error8 = $error9 = $error10 = $error11  = $error12 = $error13 = $error14 = $error15 = $error16 = $error17 = $error19 = $error18 = $error19 = $error20 = " ";

// if ( ($b !=  $num) ) {
				
	if (isset($_POST['company-bttn']))
	{

	 //restriction variable
	if (empty($_POST['company-name'])) {
		$error1 = "*";
	}else{
		$error1 = "";
	}if (empty($_POST['company-slogan'])) {
		$error2 = "*";
	}else{
		$error2 = "";
	}

	if (empty($_POST['city'])) {
		$error5 =  "*";
	}else{
		$error5 = "";
	}
	
	if (empty($_POST['Zip-Code'])) {
		$error7 =  "*";
	}else{
		$error7 = "";
	}

	if (empty($_POST['About-company'])) {
		$error8 =  "*";
	}else{
		$error8 = "";
	}if (empty($_POST['Website'])) {
		$error9 =  "*";
	}else{
		$error9 = "";
	}if (empty($_POST['call'])) {
		$error10 =  "*";
	}else{
		$error10 = "";
	}if (empty($_POST['email'])) {
		$error11 =  "*";
	}else{
		$error11 = "";
	}

	if (empty($_POST['facebook'])) {
		$error12 =  "*";
	}else{
		$error12 = "";
	}if (empty($_POST['Google'])) {
		$error13 =  "*";
	}else{
		$error13 = "";
	}if (empty($_POST['twitter'])) {
		$error14 =  "*";
	}else{
		$error14 = "";
	}if (empty($_POST['LinkedIn'])) {
		$error15 =  "*";
	}else{
		$error15 = "";
	}if (empty($_POST['instagram'])) {
		$error16 =  "*";
	}else{
		$error16 = "";
	}if (empty($_POST['pinterest'])) {
		$error17 =  "*";
	}else{
		$error17 = "";
	}
	if (empty($_POST['street'])) {
		$error20 =  "*";
	}else{
		$error20 = "";
	}
}
//restriction for fill all the field
	// $one = mysql_query("SELECT * FROM appl_info WHERE appl_email = '$_POST[appl_email]' ");
	// while ($row = mysql_fetch_array($one)) {
	// 	$a = $row['appl_email'];
	// }
	if (isset($_POST['company-bttn'])) {
		
	

		
			$id = $_GET['id'];
			
			// $num = $_SESSION["num"];
			$company_name = mysql_real_escape_string($_POST['company-name']);
			$company_slogan = mysql_real_escape_string($_POST['company-slogan']);
			

			$city = $_POST['city'];
			
			$street = mysql_real_escape_string($_POST['street']);
			$Zip_Code = $_POST['Zip-Code'];


			$About_company = mysql_real_escape_string($_POST['About-company']);
			$Website = $_POST['Website'];
			$call = mysql_real_escape_string($_POST['call']);
			$email = $_POST['email'];
			
			$facebook = $_POST['facebook'];
			$Google = $_POST['Google'];
			$twitter = $_POST['twitter'];
			$LinkedIn = $_POST['LinkedIn'];
			$instagram = $_POST['instagram'];
			$pinterest = $_POST['pinterest'];

			
			$fk= 1;
			
			// if ($a != $_POST["appl_email"])
			// {
			
			 $sql = mysql_query("UPDATE admin_job_fair_info SET
			 	
			 	job_company_name='$company_name',
			 	job_company_slogan ='$company_slogan',
			 	job_city= '$city',
			 	job_street= '$street',
			 	job_Zip_Code='$Zip_Code' ,
			 	job_About_company='$About_company' ,
			 	job_Website='$Website',
			 	job_pinterest='$pinterest',
			 	job_call='$call',
			 	job_mail='$email',
			 	job_facebook='$facebook',
			 	job_Google='$Google',
			 	job_twitter='$twitter',
			 	job_LinkedIn='$LinkedIn',
			 	job_instagram='$instagram'
			 	
			 	WHERE job_id = '$id'
			 ");
			// // $desc = "The admin ADD in Athletes information ID " . $stud_no. " and NAME:" .$fname." ".$lname ;
			// // $act = "ADD";
			// // $audit = mysql_query("INSERT INTO sdmo_audit(AUDIT_DESC,AUDIT_ACTION,AUDIT_DATE)VALUES('$desc','$act',now())");
			//  mysql_query($sql);
			// //ho "<script> location.replace('resume-elem.php'); </script>";
			// //uploading the image file
			
		// 	}else{
				
		// $error11 =  "*";
		
		// 	}



			

		}if (isset($_POST['pic-bttn'])) {
		
	

		
			$id = $_GET['id'];
			
			// $num = $_SESSION["num"];

			 $target = "assets/img/" . basename($_FILES['image']['name']);
			 $image = $_FILES['image']['name'];
			 
			// if ($a != $_POST["appl_email"])
			// {
			
			 $sql = mysql_query("UPDATE admin_job_fair_info SET
			 	
			 	job_img='$image'
			 	WHERE job_id = '$id'
			 ");
			// // $desc = "The admin ADD in Athletes information ID " . $stud_no. " and NAME:" .$fname." ".$lname ;
			// // $act = "ADD";
			// // $audit = mysql_query("INSERT INTO sdmo_audit(AUDIT_DESC,AUDIT_ACTION,AUDIT_DATE)VALUES('$desc','$act',now())");
			//  mysql_query($sql);
			// //ho "<script> location.replace('resume-elem.php'); </script>";
			// //uploading the image file
			 if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {

				 echo "<script type='text/javascript'>alert('Successful added')</script>";
				
				 }
				
		// 	}else{
				
		// $error11 =  "*";
		
		// 	}



			

		}
		

// }else{
// 	// echo "<script> location.replace('././index.php'); </script>";
// }
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
		<style type="text/css">
			.error{
				color: red;
				font-size: 30px;
			}
		</style>
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
						<h4 class="page-title">View Company</h4>
					</div>
					<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
						<ol class="breadcrumb">
							<li><a href="index.php">Dashboard</a></li>
							<li class="active">View Company</li>
						</ol>
					</div>
					<!-- /.col-lg-12 -->
				</div>              
				 <!-- /. ROW  -->
				 <?php
				 $conn = mysql_connect("localhost","root")or die(mysql_error());
	$db = mysql_select_db("cmdeso_db")or die(mysql_error()); 
				 	$id = $_GET['id'];
				 	$sql = mysql_query("SELECT * FROM admin_job_fair_info WHERE job_id = '$id' ");
				 	while ($row = mysql_fetch_array($sql))
											{//## echo fetched data to display

											
				 ?>
				<div id="page-inner">
				   <div class="row">

				   
						<div class="col-md-12">
							<div class="add-job_container">

							
					 		<form method="POST">
								<div class="job-box" style="height: auto; ;">
									<div class="job-box-filter">
										<div class="row">
											<div class="col-md-6 col-sm-6">
												<h4><i class="fa fa-file" aria-hidden="true"></i>General Information</h4>
											</div>
										</div>
									</div>
									<div class="row no-ext-mrg sm-plix">

										
										<div class="col-sm-5" style="height: 5	0px;	">
											
												
													
										<img src="assets/img/<?php echo $row["job_img"]; ?>" id="img" alt=""  style="width: 50%;height: 150px;    max-width: 240px;
										    border: 3px solid #07b107;
										    display: table;
										    margin: 10px auto;" >									
								
									</div>
										
										<div class="col-sm-4">
											<h4>Company Name</h5>
											<p><?php echo $row["job_company_name"]; ?></p>
										</div>

										<div class="col-sm-4">
											<h4>Company Slogan</h5>
											<p><?php echo $row["job_company_slogan"]; ?></p>
										</div>
										<div class="job-box-filter">
										<div class="row">
											<div class="col-md-6 col-sm-6">
												
											</div>
										</div>
									</div>
										<div class="col-sm-12">
											<h4>About Company</h5>
											<p><?php echo $row["job_About_company"]; ?></p>
										</div>
											
								<div class="job-box" style="height: auto;" 	>
									<div class="job-box-filter">
										<div class="row">
											<div class="col-md-6 col-sm-6">
												
											</div>
										</div>
									</div>
									<div class="row no-ext-mrg sm-plix">
										<div class="col-sm-8	">
											<h4>Address </h4>
											
											
												<p><?php echo $row["job_city"]; ?>, <?php echo $row["job_street"]; ?></p>
												
										</div>

										
										<div class="col-sm-4">
											<h4>Zip-Code</h4>
											<p><?php echo $row["job_Zip_Code"]; ?></p>
										</div>
										
									</div>
									
									<div class="row no-ext-mrg sm-plix">
										<div class="col-sm-4">
											<h4>Website</h4>
											<a href="<?php echo $row["job_Website"]; ?>"><?php echo $row["job_Website"]; ?></a>
										</div>
										<div class="col-sm-4">
											<h4>Call</h4>
											<p><?php echo $row["job_call"]; ?></p>
										</div>
										<div class="col-sm-4">
											<h4>Mail</h4>
											<p><?php echo $row["job_mail"]; ?></p>
										</div>
									</div>
									<div class="job-box" style="height: auto;"	>
									<div class="job-box-filter">
										<div class="row">
											<div class="col-md-6 col-sm-6">
												<h4><i class="fa fa-users" aria-hidden="true"></i>Social Profile</h4>
											</div>
										</div>
									</div>
									<div class="row no-ext-mrg sm-plix">
										
										<div class="col-sm-4">
											<h4 class="sl-profile"><i class="fa fa-facebook"></i>Facebook</h4>
											<a href="<?php echo $row["job_facebook"]; ?>"><?php echo $row["job_facebook"]; ?></a>
										</div>
										<div class="col-sm-4">
											<h4 class="sl-profile"><i class="fa fa-google-plus"></i>Google Plus</h4>
											<a href="<?php echo $row["job_Google"]; ?>"><?php echo $row["job_Google"]; ?></a>
										</div>
										<div class="col-sm-4">
											<h4 class="sl-profile"><i class="fa fa-twitter"></i>Twitter</h4>
											<a href="<?php echo $row["job_twitter"]; ?>"><?php echo $row["job_twitter"]; ?></a>
										</div>
									</div>
									
										<div class="col-sm-4">
											<h4 class="sl-profile"><i class="fa fa-linkedin"></i>LinkedIn</h4>
											<a href="<?php echo $row["job_LinkedIn"]; ?>"><?php echo $row["job_LinkedIn"]; ?></a>
										</div>
										<div class="col-sm-4">
											<h4 class="sl-profile"><i class="fa fa-instagram"></i>Instagram</h4>
											<a href="<?php echo $row["job_instagram"]; ?>"><?php echo $row["job_instagram"]; ?></a>
										</div>
										<div class="col-sm-4">
											<h4 class="sl-profile"><i class="fa fa-pinterest"></i>Pinterest </h4>
											<a href="<?php echo $row["job_pinterest"]; ?>"><?php echo $row["job_pinterest"]; ?></a>
										</div>
									
								</div>
								</div>
										
									</div>
								
								</div>
							</div>
						</div>
								<!-- / General Information -->
							
								
								<!-- / Full Detail -->
								
								<!-- / Full Detail -->
						

								<?php }?>
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
