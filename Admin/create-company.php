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
		
	

		if ( (!empty($_POST['company-name'])) && (!empty($_POST['company-slogan']))&& (!empty($_POST['city'])) && (!empty($_POST['Zip-Code'])) && (!empty($_POST['About-company'])) && (!empty($_POST['street'])) )
		{
			
			
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
			$Archive = "OFF";

			
			$fk= 1;
			
			 $target = "assets/img/" . basename($_FILES['image']['name']);
			 $image = $_FILES['image']['name'];

			 $target1 = "assets/img/" . basename($_FILES['image1']['name']);
			 $image1 = $_FILES['image1']['name'];
			 
			// if ($a != $_POST["appl_email"])
			// {
			 $sql = mysql_query("INSERT INTO admin_job_fair_info
			 	(jobfair_id,
			 	job_company_name,
			 	job_company_slogan,
			 	job_city,
			 	job_street,
			 	job_Zip_Code,
			 	job_About_company,
			 	job_Website,
			 	job_pinterest,
			 	job_call,
			 	job_mail,
			 	job_facebook,
			 	job_Google,
			 	job_twitter,
			 	job_LinkedIn,
			 	job_instagram,
			 	job_img,
			 	job_img_logo,
			 	job_archive,
			 	job_log
			 )VALUES
			 	('$fk',
			 	'$company_name',
			 	'$company_slogan',
			 	'$city',
			 	'$street',
			 	'$Zip_Code',
			 	'$About_company',
			 	'$Website',
			 	'$pinterest',
			 	'$call',
			 	'$email',
			 	'$facebook',
			 	'$Google',
			 	'$twitter',
			 	'$LinkedIn',
			 	'$instagram',
			 	'$image',
			 	'$image1',
			 	'$Archive',
			 	now() )");
			// // $desc = "The admin ADD in Athletes information ID " . $stud_no. " and NAME:" .$fname." ".$lname ;
			// // $act = "ADD";
			// // $audit = mysql_query("INSERT INTO sdmo_audit(AUDIT_DESC,AUDIT_ACTION,AUDIT_DATE)VALUES('$desc','$act',now())");
			//  mysql_query($sql);
			// //ho "<script> location.replace('resume-elem.php'); </script>";
			// //uploading the image file
			 if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {

				
				
				 }if (move_uploaded_file($_FILES['image1']['tmp_name'], $target1)) {

				 
				
				 }
				
		// 	}else{
				
		// $error11 =  "*";
		
		// 	}



			

		}
		else{echo "<script type='text/javascript'>alert('Fill the field')</script>";}
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
						<li class="active">
							<a href="javascript:void(0)"><i class="fa fa-clone" aria-hidden="true"></i>Manage Company <span class="fa arrow"></span></a>
							<ul class="nav nav-second-level">
								<li class="active">
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
						<h4 class="page-title">Add Company</h4>
					</div>
					<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
						<ol class="breadcrumb">
							<li><a href="index.php">Dashboard</a></li>
							<li class="active">Add Company</li>
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
												<h4><i class="fa fa-picture-o" aria-hidden="true"></i>Company Banner and Logo</h4>
											</div>
										</div>
									</div>

									<div class="row no-ext-mrg sm-plix">
										
									</div>


									<div class="row no-ext-mrg sm-plix" style="height: 300px;">
										<div class="col-sm-8">
												<img src="assets/img/banner.jpg" id="img1" alt=""  style="width: 100%;height: 300px;border: 3px solid #07b107;display: table;margin: 10px auto; border-style: solid;" >
												<span class="btn btn-default btn-file">
													Upload Banner <input type="file" name="image1" id="files1" value="">
												</span>	
										</div>
										<script type="text/javascript">
					 			document.getElementById("files1").onchange = function(){
					 				var reader = new FileReader();
					 				reader.onload = function(e){
					 					document.getElementById("img1").src = e.target.result;
					 				};
					 				reader.readAsDataURL(this.files[0]);
					 			};
					 		</script>

										<div class="col-sm-4" style="height: 5	0px;	">
											<img src="assets/img/banner.jpg" id="img" alt=""  style="width: 50%;height: 150px;    max-width: 240px;border: 3px solid #07b107;display: table;margin: 10px auto; border-style: solid;" >
												<span class="btn btn-default btn-file">
													Upload Logo <input type="file" name="image" id="files" value="">
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
								<div class="job-box" style="height: 450px;">
									<div class="job-box-filter">
										<div class="row">
											<div class="col-md-6 col-sm-6">
												<h4><i class="fa fa-file" aria-hidden="true"></i>General Information</h4>
											</div>
										</div>
									</div>
									<div class="row no-ext-mrg sm-plix">
										
										<div class="col-sm-12">
											<h5>Company Name<span class="error"><?php echo $error1 ?></span></h5>
											<input name="company-name" type="text" class="form-control" placeholder="Company Name">
										</div>

										<div class="col-sm-12">
											<h5>Company Slogan<span class="error"><?php echo $error2 ?></span></h5>
											<textarea name="company-slogan" class="form-control textarea" placeholder="Enter Company Slogan"></textarea>
										</div>
									
										
									</div>
								
								</div>
								<!-- / General Information -->
								<div class="job-box" style="height: 400px;">
									<div class="job-box-filter">
										<div class="row">
											<div class="col-md-6 col-sm-6">
												<h4><i class="fa fa-map-marker" aria-hidden="true"></i>Location</h4>
											</div>
										</div>
									</div>
									<div class="row no-ext-mrg sm-plix">
										<div class="col-sm-6">
											<h5>Province <span class="error"><?php echo $error5 ?></span></h5>
											
											<select name="city" class="form-control input-lg">
												<option>Select Province</option>
												<option>Abra</option>
												<option>Agusan del Norte</option>
												<option>Agusan del Sur</option>
												<option>Aklan</option>
												<option>Albay</option>
												<option>Antique</option>
												<option>Apayao</option>
												<option>Aurora</option>
												<option>Basilan</option>
												<option>Bataan</option>
												<option>Batanes</option>
												<option>Batangas</option>
												<option>Benguet</option>
												<option>Biliran</option>
												<option>Bohol</option>
												<option>Bukidnon</option>
												<option>Bulacan</option>
												<option>Cagayan</option>
												<option>Camarines Norte</option>
												<option>Camarines Sur</option>
												<option>Camiguin</option>
												<option>Capiz</option>
												<option>Catanduanes</option>
												<option>Cavite</option>
												<option>Cebu</option>
												<option>Compostela Valley</option>
												<option>Cotabato</option>
												<option>Davao del Norte</option>
												<option>Davao del Sur</option>
												<option>Davao Oriental</option>
												<option>Dinagat Islands</option>
												<option>Eastern Samar</option>
												<option>Guimaras</option>
												<option>Ifugao</option>
												<option>Ilocos Norte</option>
												<option>Ilocos Sur</option>
												<option>Iloilo</option>
												<option>Isabela</option>
												<option>Kalinga</option>
												<option>La Union</option>
												<option>Laguna</option>
												<option>Lanao del Norte</option>
												<option>Lanao del Sur</option>
												<option>Leyte</option>
												<option>Maguindanao</option>
												<option>Marinduque</option>
												<option>Masbate</option>
												<option>Metro Manila</option>
												<option>Misamis Occidental</option>
												<option>Misamis Oriental</option>
												<option>Mountain Province</option>
												<option>Negros Occidental</option>
												<option>Negros Oriental</option>
												<option>Northern Samar</option>
												<option>Nueva Ecija</option>
												<option>Nueva Vizcaya</option>
												<option>Occidental Mindoro</option>
												<option>Oriental Mindoro</option>
												<option>Palawan</option>
												<option>Pampanga</option>
												<option>Pangasinan</option>
												<option>Quezon</option>
												<option>Quirino</option>
												<option>Rizal</option>
												<option>Romblon</option>
												<option>Samar</option>
												<option>Sarangani</option>
												<option>Shariff Kabunsuan</option>
												<option>Siquijor</option>
												<option>Sorsogon</option>
												<option>South Cotabato</option>
												<option>Southern Leyte</option>
												<option>Sultan Kudarat</option>
												<option>Sulu</option>
												<option>Surigao del Norte</option>
												<option>Surigao del Sur</option>
												<option>Tarlac</option>
												<option>Tawi-Tawi</option>
												<option>Zambales</option>
												<option>Zamboanga del Norte</option>
												<option>Zamboanga del Sur</option>
												<option>Zamboanga Sibugay</option>
											</select>
										</div>
										<div class="col-sm-6">
											<h5>Zip-Code<span class="error"><?php echo $error7 ?></span></h5>
											<input name="Zip-Code" type="text" class="form-control" placeholder="e.g. 170025">
										</div>
									</div>
									<div class="row no-ext-mrg sm-plix">
										<div class="col-sm-12">
											<h5>Address<span class="error"><?php echo $error20 ?></span></h5>
											<input name="street" type="text" class="form-control" placeholder="e.g. Street 2580">
										</div>
										
									</div>
									
								</div>


								
								<div class="job-box" style="height: 400px;">
									<div class="job-box-filter">
										<div class="row">
											<div class="col-md-6 col-sm-6">
												<h4><i class="fa fa-picture-o" aria-hidden="true"></i>Full Detail<span class="error"><?php echo $error8 ?></span></h4>
											</div>
										</div>
									</div>
									<div class="row no-ext-mrg sm-plix">
										<div class="col-sm-12">
											<textarea name="About-company" class="form-control textarea" placeholder="About Company"></textarea>
										</div>
									</div>
									<div class="row no-ext-mrg sm-plix">
										<div class="col-sm-4">
											<h5>Website<span class="error"><?php echo $error9 ?></span></h5>
											<input name="Website" type="text" class="form-control" placeholder="http://yoursite.com/">
										</div>
										<div class="col-sm-4">
											<h5>Contact<span class="error"><?php echo $error10 ?></span></h5>
											<input name="call" type="text" class="form-control" placeholder="+63 123 4569 785">
										</div>
										<div class="col-sm-4">
											<h5>Email<span class="error"><?php echo $error11 ?></span></h5>
											<input name="email" type="text" class="form-control" placeholder="example@gmail.com">
										</div>
									</div>
								</div>
								<!-- / Full Detail -->
								<div class="job-box" style="height: 400px;"	>
									<div class="job-box-filter">
										<div class="row">
											<div class="col-md-6 col-sm-6">
												<h4><i class="fa fa-users" aria-hidden="true"></i>Social Profile</h4>
											</div>
										</div>
									</div>
									<div class="row no-ext-mrg sm-plix">
										<div class="col-sm-4">
											<h5 class="sl-profile"><i class="fa fa-facebook"></i>Facebook<span class="error"><?php echo $error12 ?></span></h5>
											<input name="facebook" type="text" class="form-control" placeholder="https://facebook.com/">
										</div>
										<div class="col-sm-4">
											<h5 class="sl-profile"><i class="fa fa-google-plus"></i>Google Plus<span class="error"><?php echo $error13 ?></span></h5>
											<input name="Google" type="text" class="form-control" placeholder="https://plus.google.com/">
										</div>
										<div class="col-sm-4">
											<h5 class="sl-profile"><i class="fa fa-twitter"></i>Twitter<span class="error"><?php echo $error14 ?></span></h5>
											<input name="twitter" type="text" class="form-control" placeholder="https://twitter.com/">
										</div>
									</div>
									<div class="row no-ext-mrg sm-plix">
										<div class="col-sm-4">
											<h5 class="sl-profile"><i class="fa fa-linkedin"></i>LinkedIn <span class="error"><?php echo $error15 ?></span></h5>
											<input name="LinkedIn" type="text" class="form-control" placeholder="https://linkedin.com/">
										</div>
										<div class="col-sm-4">
											<h5 class="sl-profile"><i class="fa fa-instagram"></i>Instagram<span class="error"><?php echo $error16 ?></span></h5>
											<input name="instagram" type="text" class="form-control" placeholder="https://instagram.com/">
										</div>
										<div class="col-sm-4">
											<h5 class="sl-profile"><i class="fa fa-pinterest"></i>Pinterest <span class="error"><?php echo $error17 ?></span></h5>
											<input name="pinterest" type="text" class="form-control" placeholder="https://pinterest.com/">
										</div>
									</div>
								</div>
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
