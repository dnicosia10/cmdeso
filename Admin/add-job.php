
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

	$error1 = $error2 = $error3 = $error4 = $error5 = $error6 = $error7 = $error8 = $error9 = $error10 = $error11  = $error12 = $error13 = $error14 = $error15 = $error16 = $error17 = $error19 = $error18 = $error19 = $error21 = $error22 =$error23 = $error24 = " ";

// if ( ($b !=  $num) ) {



				
	if (isset($_POST['company-bttn']))
	{

	 //restriction variable
	if (empty($_POST['title'])) {
		$error1 = "*";
	}else{
		$error1 = "";
	}if (empty($_POST['Address'])) {
		$error2 = "*";
	}else{
		$error2 = "";
	}if (empty($_POST['position'])) {
		$error3 =   "*";
	}else{
		$error3 = "";
	}if (empty($_POST['course'])) {
		$error4 =  "*";
	}else{
		$error4 = "";
	}if (empty($_POST['job-type'])) {
		$error6 =  "*";
	}else{
		$error6 = "";
	}

	if (empty($_POST['About-job'])) {
		$error5 =  "*";
	}else{
		$error5 = "";
	}if (empty($_POST['jobfair_title'])) {
		$error21 =  "*";
	}else{
		$error21 = "";
	}
	if (empty($_POST['company_name'])) {
		$error22 =  "*";
	}else{
		$error22 = "";
	}
	if (empty($_POST['summ-job'])) {
		$error23 =  "*";
	}else{
		$error23 = "";
	}	if (empty($_POST['datetime-job'])) {
		$error24 =  "*";
	}else{
		$error25 = "";
	}	if (empty($_POST['int_date'])) {
		$error25 =  "*";
	}else{
		$error25 = "";
	}
}
//restriction for fill all the field
	// $one = mysql_query("SELECT * FROM appl_info WHERE appl_email = '$_POST[appl_email]' ");
	// while ($row = mysql_fetch_array($one)) {
	// 	$a = $row['appl_email'];
	// }
	if (isset($_POST['company-bttn'])) {
		
				

		if ( (!empty($_POST['condition'])) && (!empty($_POST['title'])) && (!empty($_POST['Address'])) && (!empty($_POST['position'])) && (!empty($_POST['course']))&& (!empty($_POST['About-job']))&& (!empty($_POST['job-type']))&& (!empty($_POST['company_name']))&& (!empty($_POST['summ-job']))&& (!empty($_POST['int_date'])) )
		{
			
			
			// $num = $_SESSION["num"];
			$title = mysql_real_escape_string($_POST['title']);
			$Address = mysql_real_escape_string($_POST['Address']);
			$course = mysql_real_escape_string($_POST['course']);
			$About = mysql_real_escape_string($_POST['About-job']);
			$type = mysql_real_escape_string($_POST['job-type']);
			$inter = mysql_real_escape_string($_POST['inter-ann']);
			$int_date = mysql_real_escape_string($_POST['int_date']);
			$company_name = $_POST['company_name'];
			$summ_job = mysql_real_escape_string($_POST['summ-job']);
			$prov = mysql_real_escape_string($_POST['prov']);
			$city = mysql_real_escape_string($_POST['city']);
			$position = $_POST['position'];
			$condition = mysql_real_escape_string($_POST['condition']);
			$compared_datetime=$_POST['interview'];
			//$datetime = $_POST['datetime-job'];
			$status = "Active";
			$fk= 1;
			$Archive = "OFF";

			
			
			 // $target = "assets/img/" . basename($_FILES['image']['name']);
			 // $image = $_FILES['image']['name'];
			 
			// if ($a != $_POST["appl_email"])
			// {
			 $sql = mysql_query("INSERT INTO job_onjob_info
			 	(job_id,
			 	
			 	onjob_title,
			 	onjob_position,
			 	onjob_req_course,
			 	onjob_location,
			 	onjob_status,
			 	onjob_type,
			 	onjob_req,
			 	onjob_summary,
			 	onjob_archive,
			 	onjob_datetime,
			 	onjob_province,
			 	onjob_municipality,
			 	interview_ann,
			 	date_inter,
			 	
			 	onjob_gov,
			 	mess_send


			 	
			 )VALUES
			 	('$company_name',
			 	
			 	'$title',
			 	'$position',
			 	'$course',
			 	'$Address',
			 	'$status',
			 	'$type',
			 	'$About',
			 	'$summ_job',
			 	'$Archive',
			 	'$compared_datetime',
			 	'$prov',
			 	'$city',
			 	'$inter',
			 	'$int_date',
			 	'$condition',
			 	'NO'
			 		
			 	)");
			 echo "<script type='text/javascript'>alert('Successfully Added')</script>";
			// // $desc = "The admin ADD in Athletes information ID " . $stud_no. " and NAME:" .$fname." ".$lname ;
			// // $act = "ADD";
			// // $audit = mysql_query("INSERT INTO sdmo_audit(AUDIT_DESC,AUDIT_ACTION,AUDIT_DATE)VALUES('$desc','$act',now())");
			//  mysql_query($sql);
			// //ho "<script> location.replace('resume-elem.php'); </script>";
			// //uploading the image file
			 // if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {

				//  echo "<script type='text/javascript'>alert('Successful added')</script>";
				
				//  }
				
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
						
						<li class="">
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


						<li class="active">
							<a href="javascript:void(0)"><i class="fa fa-clone" aria-hidden="true"></i>Manage Jobs <span class="fa arrow"></span></a>
							<ul class="nav nav-second-level">
								<li class="active">
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
						<h4 class="page-title">Add Job</h4>
					</div>
					<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
						<ol class="breadcrumb">
							<li><a href="index.php">Dashboard</a></li>
							<li class="active">Add Job</li>
						</ol>
					</div>
					<!-- /.col-lg-12 -->
				</div>              
				 <!-- /. ROW  --><form method="POST">
				<div id="page-inner">
				   <div class="row">
						<div class="col-md-12">
							<div class="add-job_container">
								<div class="job-box" style="height: auto;">
									<div class="job-box-filter">
										<div class="row">
											<div class="col-md-6 col-sm-6">
												<h4><i class="fa fa-file" aria-hidden="true"></i>Job Information</h4>

												<div class="col-sm-4">

											<h5>City Goverment of Tarlac Job<span class="error"><?php echo $error1 ?></span></h5>
											<select name="condition" required="" class="form-control input-lg">
												<option value="">Select Option</option>
												<option>Yes</option>
												<option>No</option>
												
											</select>
										</div>
										</div>
											</div>
										</div>
									
									<div class="row no-ext-mrg sm-plix">
										

										<div class="col-sm-4">

											<h5>Job Name<span class="error"><?php echo $error1 ?></span></h5>
											<input name="title" type="text" class="form-control" placeholder="Enter job title">
										</div>
										
										<div class="col-sm-3">
											<h5>Company Name<span class="error"><?php echo $error22 ?></span></h5>
											<select class="form-control input-lg" name="company_name">
												<option value="">Select Company</option>
												<?php
												  $one = mysql_query("SELECT * FROM admin_job_fair_info ");
													while ($row = mysql_fetch_array($one)) {
														
												 ?>
												
												<option value="<?php echo $row["job_id"]; ?>"><?php echo $row['job_company_name']; ?></option>
												
												
												<?php 
													}
												?>
												<option>None</option>
											</select>
										</div>
										<div class="col-sm-3">

											<h5>Date of Interview<span class="error"><?php echo $error1 ?></span></h5>
											<input name="interview" type="date" class="form-control" placeholder="Enter job title">
										</div>
										<div class="col-sm-2">

											<h5>Date Announcement<span class="error"><?php echo $error1 ?></span></h5>
											<input name="int_date" type="date" class="form-control" placeholder="Enter job title">
										</div>
										<div class="col-sm-3">
											<h5>Province <span class="error"><?php echo $error5 ?></span></h5>
											
											<select name="prov" class="form-control input-lg">
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
										<div class="col-sm-3">
											<h5>Municipality <span class="error"><?php echo $error5 ?></span></h5>
											
											<select name="city" class="form-control input-lg">
												<option>Select Municipality</option>
												<option>Abuyog</option>
<option>Adams</option>
<option>Agdangan</option>
<option>Aglipay</option>
<option>Agno</option>
<option>Agoncillo</option>
<option>Agoo</option>
<option>Aguilar</option>
<option>Aguinaldo</option>
<option>Agutaya</option>
<option>Ajuy</option>
<option>Akbar</option>
<option>Al-Barka</option>
<option>Alabat</option>
<option>Alabel</option>
<option>Alamada</option>
<option>Alaminos</option>
<option>Alaminos</option>
<option>Alangalang</option>
<option>Albuera</option>
<option>Alburquerque</option>
<option>Alcala</option>
<option>Alcala</option>
<option>Alcantara</option>
<option>Alcantara</option>
<option>Alcoy</option>
<option>Alegria</option>
<option>Alegria</option>
<option>Aleosan</option>
<option>Alfonso</option>
<option>Alfonso Castañeda</option>
<option>Alfonso Lista (Potia)</option>
<option>Aliaga</option>
<option>Alicia</option>
<option>Alicia</option>
<option>Alicia</option>
<option>Alilem</option>
<option>Alimodian</option>
<option>Alitagtag</option>
<option>Allacapan</option>
<option>Allen</option>
<option>Almagro</option>
<option>Almeria</option>
<option>Aloguinsan</option>
<option>Aloran</option>
<option>Altavas</option>
<option>Alubijid</option>
<option>Amadeo</option>
<option>Amai Manabilang (Bumbaran)</option>
<option>Ambaguio</option>
<option>Amlan (Ayuquitan)</option>
<option>Ampatuan</option>
<option>Amulung</option>
<option>Anahawan</option>
<option>Anao</option>
<option>Anda</option>
<option>Anda</option>
<option>Angadanan</option>
<option>Angat</option>
<option>Angeles</option>
<option>Angono</option>
<option>Anilao</option>
<option>Anini-y</option>
<option>Antequera</option>
<option>Antipas</option>
<option>Antipolo</option>
<option>Apalit</option>
<option>Aparri</option>
<option>Araceli</option>
<option>Arakan</option>
<option>Arayat</option>
<option>Argao</option>
<option>Aringay</option>
<option>Aritao</option>
<option>Aroroy</option>
<option>Arteche</option>
<option>Asingan</option>
<option>Asipulo</option>
<option>Asturias</option>
<option>Asuncion (Saug)</option>
<option>Atimonan</option>
<option>Atok</option>
<option>Aurora</option>
<option>Aurora</option>
<option>Ayungon</option>
<option>Baao</option>
<option>Babatngon</option>
<option>Bacacay</option>
<option>Bacarra</option>
<option>Baclayon</option>
<option>Bacnotan</option>
<option>Baco</option>
<option>Bacolod</option>
<option>Bacolod</option>
<option>Bacolod-Kalawi (Bacolod-Grande)</option>
<option>Bacolor</option>
<option>Bacong</option>
<option>Bacoor</option>
<option>Bacuag</option>
<option>Badian</option>
<option>Badiangan</option>
<option>Badoc</option>
<option>Bagabag</option>
<option>Bagac</option>
<option>Bagamanoc</option>
<option>Baganga</option>
<option>Baggao</option>
<option>Bago</option>
<option>Baguio</option>
<option>Bagulin</option>
<option>Bagumbayan</option>
<option>Bais</option>
<option>Bakun</option>
<option>Balabac</option>
<option>Balabagan</option>
<option>Balagtas (Bigaa)</option>
<option>Balamban</option>
<option>Balanga</option>
<option>Balangiga</option>
<option>Balangkayan</option>
<option>Balaoan</option>
<option>Balasan</option>
<option>Balatan</option>
<option>Balayan</option>
<option>Balbalan</option>
<option>Baleno</option>
<option>Baler</option>
<option>Balete</option>
<option>Balete</option>
<option>Baliangao</option>
<option>Baliguian</option>
<option>Balilihan</option>
<option>Balindong (Watu)</option>
<option>Balingasag</option>
<option>Balingoan</option>
<option>Baliuag</option>
<option>Ballesteros</option>
<option>Baloi</option>
<option>Balud</option>
<option>Balungao</option>
<option>Bamban</option>
<option>Bambang</option>
<option>Banate</option>
<option>Banaue</option>
<option>Banaybanay</option>
<option>Banayoyo</option>
<option>Banga</option>
<option>Banga</option>
<option>Bangar</option>
<option>Bangued</option>
<option>Bangui</option>
<option>Banguingui (Tongkil)</option>
<option>Bani</option>
<option>Banisilan</option>
<option>Banna (Espiritu)</option>
<option>Bansalan</option>
<option>Bansud</option>
<option>Bantay</option>
<option>Bantayan</option>
<option>Banton (Jones)</option>
<option>Baras</option>
<option>Baras</option>
<option>Barbaza</option>
<option>Barcelona</option>
<option>Barili</option>
<option>Barira</option>
<option>Barlig</option>
<option>Barobo</option>
<option>Barotac Nuevo</option>
<option>Barotac Viejo</option>
<option>Baroy</option>
<option>Barugo</option>
<option>Basay</option>
<option>Basco</option>
<option>Basey</option>
<option>Basilisa (Rizal)</option>
<option>Basista</option>
<option>Basud</option>
<option>Batac</option>
<option>Batad</option>
<option>Batan</option>
<option>Batangas City</option>
<option>Bataraza</option>
<option>Bato</option>
<option>Bato</option>
<option>Bato</option>
<option>Batuan</option>
<option>Batuan</option>
<option>Bauan</option>
<option>Bauang</option>
<option>Bauko</option>
<option>Baungon</option>
<option>Bautista</option>
<option>Bay</option>
<option>Bayabas</option>
<option>Bayambang</option>
<option>Bayang</option>
<option>Bayawan (Tulong)</option>
<option>Baybay</option>
<option>Bayog</option>
<option>Bayombong</option>
<option>Bayugan</option>
<option>Belison</option>
<option>Benito Soliven</option>
<option>Besao</option>
<option>Bien Unido</option>
<option>Bilar</option>
<option>Biliran</option>
<option>Binalbagan</option>
<option>Binalonan</option>
<option>Binangonan</option>
<option>Bindoy (Payabon)</option>
<option>Bingawan</option>
<option>Binidayan</option>
<option>Binmaley</option>
<option>Binuangan</option>
<option>Biri</option>
<option>Bislig</option>
<option>Biñan</option>
<option>Boac</option>
<option>Bobon</option>
<option>Bocaue</option>
<option>Bogo</option>
<option>Bokod</option>
<option>Bolinao</option>
<option>Boliney</option>
<option>Boljoon</option>
<option>Bombon</option>
<option>Bongabon</option>
<option>Bongabong</option>
<option>Bongao</option>
<option>Bonifacio</option>
<option>Bontoc</option>
<option>Bontoc</option>
<option>Borbon</option>
<option>Borongan</option>
<option>Boston</option>
<option>Botolan</option>
<option>Braulio E. Dujali</option>
<option>Brooke's Point</option>
<option>Buadiposo-Buntong</option>
<option>Bubong</option>
<option>Bucay</option>
<option>Bucloc</option>
<option>Buenavista</option>
<option>Buenavista</option>
<option>Buenavista</option>
<option>Buenavista</option>
<option>Buenavista</option>
<option>Bugallon</option>
<option>Bugasong</option>
<option>Buguey</option>
<option>Buguias</option>
<option>Buhi</option>
<option>Bula</option>
<option>Bulakan</option>
<option>Bulalacao (San Pedro)</option>
<option>Bulan</option>
<option>Buldon</option>
<option>Buluan</option>
<option>Bulusan</option>
<option>Bunawan</option>
<option>Burauen</option>
<option>Burdeos</option>
<option>Burgos</option>
<option>Burgos</option>
<option>Burgos</option>
<option>Burgos</option>
<option>Burgos</option>
<option>Burgos</option>
<option>Buruanga</option>
<option>Bustos</option>
<option>Busuanga</option>
<option>Butig</option>
<option>Butuan</option>
<option>Buug</option>
<option>Caba</option>
<option>Cabadbaran</option>
<option>Cabagan</option>
<option>Cabanatuan</option>
<option>Cabangan</option>
<option>Cabanglasan</option>
<option>Cabarroguis</option>
<option>Cabatuan</option>
<option>Cabatuan</option>
<option>Cabiao</option>
<option>Cabucgayan</option>
<option>Cabugao</option>
<option>Cabusao</option>
<option>Cabuyao</option>
<option>Cadiz</option>
<option>Cagayan de Oro</option>
<option>Cagayancillo</option>
<option>Cagdianao</option>
<option>Cagwait</option>
<option>Caibiran</option>
<option>Cainta</option>
<option>Cajidiocan</option>
<option>Calabanga</option>
<option>Calaca</option>
<option>Calamba</option>
<option>Calamba</option>
<option>Calanasan (Bayag)</option>
<option>Calanogas</option>
<option>Calapan</option>
<option>Calape</option>
<option>Calasiao</option>
<option>Calatagan</option>
<option>Calatrava</option>
<option>Calatrava</option>
<option>Calauag</option>
<option>Calauan</option>
<option>Calayan</option>
<option>Calbayog</option>
<option>Calbiga</option>
<option>Calinog</option>
<option>Calintaan</option>
<option>Caloocan</option>
<option>Calubian</option>
<option>Calumpit</option>
<option>Caluya</option>
<option>Camalaniugan</option>
<option>Camalig</option>
<option>Camaligan</option>
<option>Camiling</option>
<option>Can-avid</option>
<option>Canaman</option>
<option>Candaba</option>
<option>Candelaria</option>
<option>Candelaria</option>
<option>Candijay</option>
<option>Candon</option>
<option>Candoni</option>
<option>Canlaon</option>
<option>Cantilan</option>
<option>Caoayan</option>
<option>Capalonga</option>
<option>Capas</option>
<option>Capoocan</option>
<option>Capul</option>
<option>Caraga</option>
<option>Caramoan</option>
<option>Caramoran</option>
<option>Carasi</option>
<option>Carcar</option>
<option>Cardona</option>
<option>Carigara</option>
<option>Carles</option>
<option>Carmen</option>
<option>Carmen</option>
<option>Carmen</option>
<option>Carmen</option>
<option>Carmen</option>
<option>Carmen</option>
<option>Carmona</option>
<option>Carranglan</option>
<option>Carrascal</option>
<option>Casiguran</option>
<option>Casiguran</option>
<option>Castilla</option>
<option>Castillejos</option>
<option>Cataingan</option>
<option>Catanauan</option>
<option>Catarman</option>
<option>Catarman</option>
<option>Catbalogan</option>
<option>Cateel</option>
<option>Catigbian</option>
<option>Catmon</option>
<option>Catubig</option>
<option>Cauayan</option>
<option>Cauayan</option>
<option>Cavinti</option>
<option>Cavite City</option>
<option>Cawayan</option>
<option>Cebu City</option>
<option>Cervantes</option>
<option>Clarin</option>
<option>Clarin</option>
<option>Claver</option>
<option>Claveria</option>
<option>Claveria</option>
<option>Claveria</option>
<option>Columbio</option>
<option>Compostela</option>
<option>Compostela</option>
<option>Concepcion</option>
<option>Concepcion</option>
<option>Concepcion</option>
<option>Concepcion</option>
<option>Conner</option>
<option>Consolacion</option>
<option>Corcuera</option>
<option>Cordon</option>
<option>Cordova</option>
<option>Corella</option>
<option>Coron</option>
<option>Cortes</option>
<option>Cortes</option>
<option>Cotabato City</option>
<option>Cuartero</option>
<option>Cuenca</option>
<option>Culaba</option>
<option>Culasi</option>
<option>Culion</option>
<option>Currimao</option>
<option>Cuyapo</option>
<option>Cuyo</option>
<option>Daanbantayan</option>
<option>Daet</option>
<option>Dagami</option>
<option>Dagohoy</option>
<option>Daguioman</option>
<option>Dagupan</option>
<option>Dalaguete</option>
<option>Damulog</option>
<option>Danao</option>
<option>Danao</option>
<option>Dangcagan</option>
<option>Danglas</option>
<option>Dao</option>
<option>Dapa</option>
<option>Dapitan</option>
<option>Daraga (Locsin)</option>
<option>Daram</option>
<option>Dasmariñas</option>
<option>Dasol</option>
<option>Datu Abdullah Sangki</option>
<option>Datu Anggal Midtimbang</option>
<option>Datu Blah T. Sinsuat</option>
<option>Datu Hoffer Ampatuan</option>
<option>Datu Montawal (Pagagawan)</option>
<option>Datu Odin Sinsuat (Dinaig)</option>
<option>Datu Paglas</option>
<option>Datu Piang (Dulawan)</option>
<option>Datu Salibo</option>
<option>Datu Saudi-Ampatuan</option>
<option>Datu Unsay</option>
<option>Dauin</option>
<option>Dauis</option>
<option>Davao City</option>
<option>Del Carmen</option>
<option>Del Gallego</option>
<option>Delfin Albano (Magsaysay)</option>
<option>Diadi</option>
<option>Diffun</option>
<option>Digos</option>
<option>Dilasag</option>
<option>Dimasalang</option>
<option>Dimataling</option>
<option>Dimiao</option>
<option>Dinagat</option>
<option>Dinalungan</option>
<option>Dinalupihan</option>
<option>Dinapigue</option>
<option>Dinas</option>
<option>Dingalan</option>
<option>Dingle</option>
<option>Dingras</option>
<option>Dipaculao</option>
<option>Diplahan</option>
<option>Dipolog</option>
<option>Ditsaan-Ramain</option>
<option>Divilacan</option>
<option>Dolores</option>
<option>Dolores</option>
<option>Dolores</option>
<option>Don Carlos</option>
<option>Don Marcelino</option>
<option>Don Victoriano Chiongbian (Don Mariano Marcos)</option>
<option>Donsol</option>
<option>Doña Remedios Trinidad</option>
<option>Duero</option>
<option>Dueñas</option>
<option>Dulag</option>
<option>Dumaguete</option>
<option>Dumalag</option>
<option>Dumalinao</option>
<option>Dumalneg</option>
<option>Dumangas</option>
<option>Dumanjug</option>
<option>Dumaran</option>
<option>Dumarao</option>
<option>Dumingag</option>
<option>Dupax del Norte</option>
<option>Dupax del Sur</option>
<option>Echague</option>
<option>El Nido (Bacuit)</option>
<option>El Salvador</option>
<option>Enrile</option>
<option>Enrique B. Magalona (Saravia)</option>
<option>Enrique Villanueva</option>
<option>Escalante</option>
<option>Esperanza</option>
<option>Esperanza</option>
<option>Esperanza</option>
<option>Estancia</option>
<option>Famy</option>
<option>Ferrol</option>
<option>Flora</option>
<option>Floridablanca</option>
<option>Gabaldon (Bitulok & Sabani)</option>
<option>Gainza</option>
<option>Galimuyod</option>
<option>Gamay</option>
<option>Gamu</option>
<option>Ganassi</option>
<option>Gandara</option>
<option>Gapan</option>
<option>Garchitorena</option>
<option>Garcia Hernandez</option>
<option>Gasan</option>
<option>Gattaran</option>
<option>General Emilio Aguinaldo</option>
<option>General Luna</option>
<option>General Luna</option>
<option>General MacArthur</option>
<option>General Mamerto Natividad</option>
<option>General Mariano Alvarez</option>
<option>General Nakar</option>
<option>General Salipada K. Pendatun</option>
<option>General Santos (Dadiangas)</option>
<option>General Tinio (Papaya)</option>
<option>General Trias</option>
<option>Gerona</option>
<option>Getafe</option>
<option>Gigaquit</option>
<option>Gigmoto</option>
<option>Ginatilan</option>
<option>Gingoog</option>
<option>Giporlos</option>
<option>Gitagum</option>
<option>Glan</option>
<option>Gloria</option>
<option>Goa</option>
<option>Godod</option>
<option>Gonzaga</option>
<option>Governor Generoso</option>
<option>Gregorio del Pilar (Concepcion)</option>
<option>Guagua</option>
<option>Gubat</option>
<option>Guiguinto</option>
<option>Guihulngan</option>
<option>Guimba</option>
<option>Guimbal</option>
<option>Guinayangan</option>
<option>Guindulman</option>
<option>Guindulungan</option>
<option>Guinobatan</option>
<option>Guinsiliban</option>
<option>Guipos</option>
<option>Guiuan</option>
<option>Gumaca</option>
<option>Gutalac</option>
<option>Hadji Mohammad Ajul</option>
<option>Hadji Muhtamad</option>
<option>Hadji Panglima Tahil (Marunggas)</option>
<option>Hagonoy</option>
<option>Hagonoy</option>
<option>Hamtic</option>
<option>Hermosa</option>
<option>Hernani</option>
<option>Hilongos</option>
<option>Himamaylan</option>
<option>Hinabangan</option>
<option>Hinatuan</option>
<option>Hindang</option>
<option>Hingyon</option>
<option>Hinigaran</option>
<option>Hinoba-an (Asia)</option>
<option>Hinunangan</option>
<option>Hinundayan</option>
<option>Hungduan</option>
<option>Iba</option>
<option>Ibaan</option>
<option>Ibajay</option>
<option>Igbaras</option>
<option>Iguig</option>
<option>Ilagan</option>
<option>Iligan</option>
<option>Ilog</option>
<option>Iloilo City</option>
<option>Imelda</option>
<option>Impasugong</option>
<option>Imus</option>
<option>Inabanga</option>
<option>Indanan</option>
<option>Indang</option>
<option>Infanta</option>
<option>Infanta</option>
<option>Initao</option>
<option>Inopacan</option>
<option>Ipil</option>
<option>Iriga</option>
<option>Irosin</option>
<option>Isabel</option>
<option>Isabela</option>
<option>Isabela City</option>
<option>Isulan</option>
<option>Itbayat</option>
<option>Itogon</option>
<option>Ivana</option>
<option>Ivisan</option>
<option>Jabonga</option>
<option>Jaen</option>
<option>Jagna</option>
<option>Jalajala</option>
<option>Jamindan</option>
<option>Janiuay</option>
<option>Jaro</option>
<option>Jasaan</option>
<option>Javier (Bugho)</option>
<option>Jiabong</option>
<option>Jimalalud</option>
<option>Jimenez</option>
<option>Jipapad</option>
<option>Jolo</option>
<option>Jomalig</option>
<option>Jones</option>
<option>Jordan</option>
<option>Jose Abad Santos (Trinidad)</option>
<option>Jose Dalman (Ponot)</option>
<option>Jose Panganiban</option>
<option>Josefina</option>
<option>Jovellar</option>
<option>Juban</option>
<option>Julita</option>
<option>Kabacan</option>
<option>Kabankalan</option>
<option>Kabasalan</option>
<option>Kabayan</option>
<option>Kabugao</option>
<option>Kabuntalan (Tumbao)</option>
<option>Kadingilan</option>
<option>Kalamansig</option>
<option>Kalawit</option>
<option>Kalayaan</option>
<option>Kalayaan</option>
<option>Kalibo</option>
<option>Kalilangan</option>
<option>Kalingalan Caluang</option>
<option>Kananga</option>
<option>Kapai</option>
<option>Kapalong</option>
<option>Kapangan</option>
<option>Kapatagan</option>
<option>Kapatagan</option>
<option>Kasibu</option>
<option>Katipunan</option>
<option>Kauswagan</option>
<option>Kawayan</option>
<option>Kawit</option>
<option>Kayapa</option>
<option>Kiamba</option>
<option>Kiangan</option>
<option>Kibawe</option>
<option>Kiblawan</option>
<option>Kibungan</option>
<option>Kidapawan</option>
<option>Kinoguitan</option>
<option>Kitaotao</option>
<option>Kitcharao</option>
<option>Kolambugan</option>
<option>Koronadal</option>
<option>Kumalarang</option>
<option>La Carlota</option>
<option>La Castellana</option>
<option>La Libertad</option>
<option>La Libertad</option>
<option>La Paz</option>
<option>La Paz</option>
<option>La Paz</option>
<option>La Paz</option>
<option>La Trinidad</option>
<option>Laak (San Vicente)</option>
<option>Labangan</option>
<option>Labason</option>
<option>Labo</option>
<option>Labrador</option>
<option>Lacub</option>
<option>Lagangilang</option>
<option>Lagawe</option>
<option>Lagayan</option>
<option>Lagonglong</option>
<option>Lagonoy</option>
<option>Laguindingan</option>
<option>Lake Sebu</option>
<option>Lakewood</option>
<option>Lal-lo</option>
<option>Lala</option>
<option>Lambayong (Mariano Marcos)</option>
<option>Lambunao</option>
<option>Lamitan</option>
<option>Lamut</option>
<option>Langiden</option>
<option>Languyan</option>
<option>Lantapan</option>
<option>Lantawan</option>
<option>Lanuza</option>
<option>Laoac</option>
<option>Laoag</option>
<option>Laoang</option>
<option>Lapinig</option>
<option>Lapu-Lapu (Opon)</option>
<option>Lapuyan</option>
<option>Larena</option>
<option>Las Navas</option>
<option>Las Nieves</option>
<option>Las Piñas</option>
<option>Lasam</option>
<option>Laua-an</option>
<option>Laur</option>
<option>Laurel</option>
<option>Lavezares</option>
<option>Lawaan</option>
<option>Lazi</option>
<option>Lebak</option>
<option>Leganes</option>
<option>Legazpi</option>
<option>Lemery</option>
<option>Lemery</option>
<option>Leon</option>
<option>Leon B. Postigo (Bacungan)</option>
<option>Leyte</option>
<option>Lezo</option>
<option>Lian</option>
<option>Lianga</option>
<option>Libacao</option>
<option>Libagon</option>
<option>Libertad</option>
<option>Libertad</option>
<option>Libjo (Albor)</option>
<option>Libmanan</option>
<option>Libon</option>
<option>Libona</option>
<option>Libungan</option>
<option>Licab</option>
<option>Licuan-Baay (Licuan)</option>
<option>Lidlidda</option>
<option>Ligao</option>
<option>Lila</option>
<option>Liliw</option>
<option>Liloan</option>
<option>Liloan</option>
<option>Liloy</option>
<option>Limasawa</option>
<option>Limay</option>
<option>Linamon</option>
<option>Linapacan</option>
<option>Lingayen</option>
<option>Lingig</option>
<option>Lipa</option>
<option>Llanera</option>
<option>Llorente</option>
<option>Loay</option>
<option>Lobo</option>
<option>Loboc</option>
<option>Looc</option>
<option>Looc</option>
<option>Loon</option>
<option>Lope de Vega</option>
<option>Lopez</option>
<option>Lopez Jaena</option>
<option>Loreto</option>
<option>Loreto</option>
<option>Los Baños</option>
<option>Luba</option>
<option>Lubang</option>
<option>Lubao</option>
<option>Lubuagan</option>
<option>Lucban</option>
<option>Lucena</option>
<option>Lugait</option>
<option>Lugus</option>
<option>Luisiana</option>
<option>Lumba-Bayabao (Maguing)</option>
<option>Lumbaca-Unayan</option>
<option>Lumban</option>
<option>Lumbatan</option>
<option>Lumbayanague</option>
<option>Luna</option>
<option>Luna</option>
<option>Luna</option>
<option>Lupao</option>
<option>Lupi</option>
<option>Lupon</option>
<option>Lutayan</option>
<option>Luuk</option>
<option>M'lang</option>
<option>Maasim</option>
<option>Maasin</option>
<option>Maasin</option>
<option>Maayon</option>
<option>Mabalacat</option>
<option>Mabinay</option>
<option>Mabini</option>
<option>Mabini</option>
<option>Mabini</option>
<option>Mabini (Doña Alicia)</option>
<option>Mabitac</option>
<option>Mabuhay</option>
<option>Macabebe</option>
<option>Macalelon</option>
<option>MacArthur</option>
<option>Maco</option>
<option>Maconacon</option>
<option>Macrohon</option>
<option>Madalag</option>
<option>Madalum</option>
<option>Madamba</option>
<option>Maddela</option>
<option>Madrid</option>
<option>Madridejos</option>
<option>Magalang</option>
<option>Magallanes</option>
<option>Magallanes</option>
<option>Magallanes</option>
<option>Magarao</option>
<option>Magdalena</option>
<option>Magdiwang</option>
<option>Magpet</option>
<option>Magsaysay</option>
<option>Magsaysay</option>
<option>Magsaysay</option>
<option>Magsaysay</option>
<option>Magsaysay (Linugos)</option>
<option>Magsingal</option>
<option>Maguing</option>
<option>Mahaplag</option>
<option>Mahatao</option>
<option>Mahayag</option>
<option>Mahinog</option>
<option>Maigo</option>
<option>Maimbung</option>
<option>Mainit</option>
<option>Maitum</option>
<option>Majayjay</option>
<option>Makati</option>
<option>Makato</option>
<option>Makilala</option>
<option>Malabang</option>
<option>Malabon</option>
<option>Malabuyoc</option>
<option>Malalag</option>
<option>Malangas</option>
<option>Malapatan</option>
<option>Malasiqui</option>
<option>Malay</option>
<option>Malaybalay</option>
<option>Malibcong</option>
<option>Malilipot</option>
<option>Malimono</option>
<option>Malinao</option>
<option>Malinao</option>
<option>Malita</option>
<option>Malitbog</option>
<option>Malitbog</option>
<option>Mallig</option>
<option>Malolos</option>
<option>Malungon</option>
<option>Maluso</option>
<option>Malvar</option>
<option>Mamasapano</option>
<option>Mambajao</option>
<option>Mamburao</option>
<option>Mambusao</option>
<option>Manabo</option>
<option>Manaoag</option>
<option>Manapla</option>
<option>Manay</option>
<option>Mandaluyong</option>
<option>Mandaon</option>
<option>Mandaue</option>
<option>Mangaldan</option>
<option>Mangatarem</option>
<option>Mangudadatu</option>
<option>Manila</option>
<option>Manito</option>
<option>Manjuyod</option>
<option>Mankayan</option>
<option>Manolo Fortich</option>
<option>Mansalay</option>
<option>Manticao</option>
<option>Manukan</option>
<option>Mapanas</option>
<option>Mapandan</option>
<option>Mapun (Cagayan de Tawi-Tawi)</option>
<option>Marabut</option>
<option>Maragondon</option>
<option>Maragusan (San Mariano)</option>
<option>Maramag</option>
<option>Marantao</option>
<option>Marawi</option>
<option>Marcos</option>
<option>Margosatubig</option>
<option>Maria</option>
<option>Maria Aurora</option>
<option>Maribojoc</option>
<option>Marihatag</option>
<option>Marikina</option>
<option>Marilao</option>
<option>Maripipi</option>
<option>Mariveles</option>
<option>Marogong</option>
<option>Masantol</option>
<option>Masbate City</option>
<option>Masinloc</option>
<option>Masiu</option>
<option>Maslog</option>
<option>Mataasnakahoy</option>
<option>Matag-ob</option>
<option>Matalam</option>
<option>Matalom</option>
<option>Matanao</option>
<option>Matanog</option>
<option>Mati</option>
<option>Matnog</option>
<option>Matuguinao</option>
<option>Matungao</option>
<option>Mauban</option>
<option>Mawab</option>
<option>Mayantoc</option>
<option>Maydolong</option>
<option>Mayorga</option>
<option>Mayoyao</option>
<option>Medellin</option>
<option>Medina</option>
<option>Mendez (Mendez-Nuñez)</option>
<option>Mercedes</option>
<option>Mercedes</option>
<option>Merida</option>
<option>Mexico</option>
<option>Meycauayan</option>
<option>Miagao</option>
<option>Midsalip</option>
<option>Midsayap</option>
<option>Milagros</option>
<option>Milaor</option>
<option>Mina</option>
<option>Minalabac</option>
<option>Minalin</option>
<option>Minglanilla</option>
<option>Moalboal</option>
<option>Mobo</option>
<option>Mogpog</option>
<option>Moises Padilla (Magallon)</option>
<option>Molave</option>
<option>Moncada</option>
<option>Mondragon</option>
<option>Monkayo</option>
<option>Monreal</option>
<option>Montevista</option>
<option>Morong</option>
<option>Morong</option>
<option>Motiong</option>
<option>Mulanay</option>
<option>Mulondo</option>
<option>Munai</option>
<option>Muntinlupa</option>
<option>Murcia</option>
<option>Mutia</option>
<option>Muñoz</option>
<option>Naawan</option>
<option>Nabas</option>
<option>Nabua</option>
<option>Nabunturan</option>
<option>Naga</option>
<option>Naga</option>
<option>Naga</option>
<option>Nagbukel</option>
<option>Nagcarlan</option>
<option>Nagtipunan</option>
<option>Naguilian</option>
<option>Naguilian</option>
<option>Naic</option>
<option>Nampicuan</option>
<option>Narra</option>
<option>Narvacan</option>
<option>Nasipit</option>
<option>Nasugbu</option>
<option>Natividad</option>
<option>Natonin</option>
<option>Naujan</option>
<option>Naval</option>
<option>Navotas</option>
<option>New Bataan</option>
<option>New Corella</option>
<option>New Lucena</option>
<option>New Washington</option>
<option>Norala</option>
<option>Northern Kabuntalan</option>
<option>Norzagaray</option>
<option>Noveleta</option>
<option>Nueva Era</option>
<option>Nueva Valencia</option>
<option>Numancia</option>
<option>Nunungan</option>
<option>Oas</option>
<option>Obando</option>
<option>Ocampo</option>
<option>Odiongan</option>
<option>Old Panamao</option>
<option>Olongapo</option>
<option>Olutanga</option>
<option>Omar</option>
<option>Opol</option>
<option>Orani</option>
<option>Oras</option>
<option>Orion</option>
<option>Ormoc</option>
<option>Oroquieta</option>
<option>Oslob</option>
<option>Oton</option>
<option>Ozamiz</option>
<option>Padada</option>
<option>Padre Burgos</option>
<option>Padre Burgos</option>
<option>Padre Garcia</option>
<option>Paete</option>
<option>Pagadian</option>
<option>Pagalungan</option>
<option>Pagayawan (Tatarikan)</option>
<option>Pagbilao</option>
<option>Paglat</option>
<option>Pagsanghan</option>
<option>Pagsanjan</option>
<option>Pagudpud</option>
<option>Pakil</option>
<option>Palanan</option>
<option>Palanas</option>
<option>Palapag</option>
<option>Palauig</option>
<option>Palayan</option>
<option>Palimbang</option>
<option>Palo</option>
<option>Palompon</option>
<option>Paluan</option>
<option>Pambujan</option>
<option>Pamplona</option>
<option>Pamplona</option>
<option>Pamplona</option>
<option>Panabo</option>
<option>Panaon</option>
<option>Panay</option>
<option>Pandag</option>
<option>Pandami</option>
<option>Pandan</option>
<option>Pandan</option>
<option>Pandi</option>
<option>Panganiban (Payo)</option>
<option>Pangantucan</option>
<option>Pangil</option>
<option>Panglao</option>
<option>Panglima Estino (New Panamao)</option>
<option>Panglima Sugala (Balimbing)</option>
<option>Pangutaran</option>
<option>Paniqui</option>
<option>Panitan</option>
<option>Pantabangan</option>
<option>Pantao Ragat</option>
<option>Pantar</option>
<option>Pantukan</option>
<option>Panukulan</option>
<option>Paoay</option>
<option>Paombong</option>
<option>Paracale</option>
<option>Paracelis</option>
<option>Paranas (Wright)</option>
<option>Parang</option>
<option>Parang</option>
<option>Parañaque</option>
<option>Pasacao</option>
<option>Pasay</option>
<option>Pasig</option>
<option>Pasil</option>
<option>Passi</option>
<option>Pastrana</option>
<option>Pasuquin</option>
<option>Pata</option>
<option>Pateros</option>
<option>Patikul</option>
<option>Patnanungan</option>
<option>Patnongon</option>
<option>Pavia</option>
<option>Payao</option>
<option>Perez</option>
<option>Peñablanca</option>
<option>Peñaranda</option>
<option>Peñarrubia</option>
<option>Piagapo</option>
<option>Piat</option>
<option>Picong (Sultan Gumander)</option>
<option>Piddig</option>
<option>Pidigan</option>
<option>Pigcawayan</option>
<option>Pikit</option>
<option>Pila</option>
<option>Pilar</option>
<option>Pilar</option>
<option>Pilar</option>
<option>Pilar</option>
<option>Pilar</option>
<option>Pilar</option>
<option>Pilar</option>
<option>Pili</option>
<option>Pililla</option>
<option>Pinabacdao</option>
<option>Pinamalayan</option>
<option>Pinamungajan</option>
<option>Pinili</option>
<option>Pintuyan</option>
<option>Pinukpuk</option>
<option>Pio Duran</option>
<option>Pio V. Corpuz (Limbuhan)</option>
<option>Pitogo</option>
<option>Pitogo</option>
<option>Piñan (New Piñan)</option>
<option>Placer</option>
<option>Placer</option>
<option>Plaridel</option>
<option>Plaridel</option>
<option>Plaridel</option>
<option>Pola</option>
<option>Polanco</option>
<option>Polangui</option>
<option>Polillo</option>
<option>Polomolok</option>
<option>Pontevedra</option>
<option>Pontevedra</option>
<option>Poona Bayabao (Gata)</option>
<option>Poona Piagapo</option>
<option>Porac</option>
<option>Poro</option>
<option>Pototan</option>
<option>Pozorrubio</option>
<option>Presentacion (Parubcan)</option>
<option>President Carlos P. Garcia (Pitogo)</option>
<option>President Manuel A. Roxas</option>
<option>President Quirino</option>
<option>President Roxas</option>
<option>President Roxas</option>
<option>Prieto Diaz</option>
<option>Prosperidad</option>
<option>Pualas</option>
<option>Pudtol</option>
<option>Puerto Galera</option>
<option>Puerto Princesa</option>
<option>Pugo</option>
<option>Pulilan</option>
<option>Pulupandan</option>
<option>Pura</option>
<option>Quezon</option>
<option>Quezon</option>
<option>Quezon</option>
<option>Quezon</option>
<option>Quezon</option>
<option>Quezon</option>
<option>Quezon City</option>
<option>Quinapondan</option>
<option>Quirino</option>
<option>Quirino (Angkaki)</option>
<option>Ragay</option>
<option>Rajah Buayan</option>
<option>Ramon</option>
<option>Ramon Magsaysay (Liargo)</option>
<option>Ramos</option>
<option>Rapu-Rapu</option>
<option>Real</option>
<option>Reina Mercedes</option>
<option>Remedios T. Romualdez</option>
<option>Rizal</option>
<option>Rizal</option>
<option>Rizal</option>
<option>Rizal</option>
<option>Rizal</option>
<option>Rizal (Liwan)</option>
<option>Rizal (Marcos)</option>
<option>Rodriguez (Montalban)</option>
<option>Romblon</option>
<option>Ronda</option>
<option>Rosales</option>
<option>Rosario</option>
<option>Rosario</option>
<option>Rosario</option>
<option>Rosario</option>
<option>Rosario</option>
<option>Roseller Lim</option>
<option>Roxas</option>
<option>Roxas</option>
<option>Roxas</option>
<option>Roxas City</option>
<option>Sabangan</option>
<option>Sablan</option>
<option>Sablayan</option>
<option>Sabtang</option>
<option>Sadanga</option>
<option>Sagada</option>
<option>Sagay</option>
<option>Sagay</option>
<option>Sagbayan (Borja)</option>
<option>Saguday</option>
<option>Saguiaran</option>
<option>Sagñay</option>
<option>Saint Bernard</option>
<option>Salay</option>
<option>Salcedo</option>
<option>Salcedo (Baugen)</option>
<option>Sallapadan</option>
<option>Salug</option>
<option>Salvador</option>
<option>Salvador Benedicto</option>
<option>Samal</option>
<option>Samal</option>
<option>Samboan</option>
<option>Sampaloc</option>
<option>San Agustin</option>
<option>San Agustin</option>
<option>San Agustin</option>
<option>San Andres</option>
<option>San Andres</option>
<option>San Andres (Calolbon)</option>
<option>San Antonio</option>
<option>San Antonio</option>
<option>San Antonio</option>
<option>San Antonio</option>
<option>San Benito</option>
<option>San Carlos</option>
<option>San Carlos</option>
<option>San Clemente</option>
<option>San Dionisio</option>
<option>San Emilio</option>
<option>San Enrique</option>
<option>San Enrique</option>
<option>San Esteban</option>
<option>San Fabian</option>
<option>San Felipe</option>
<option>San Fernando</option>
<option>San Fernando</option>
<option>San Fernando</option>
<option>San Fernando</option>
<option>San Fernando</option>
<option>San Fernando</option>
<option>San Fernando</option>
<option>San Francisco</option>
<option>San Francisco</option>
<option>San Francisco</option>
<option>San Francisco (Anao-Aon)</option>
<option>San Francisco (Aurora)</option>
<option>San Gabriel</option>
<option>San Guillermo</option>
<option>San Ildefonso</option>
<option>San Ildefonso</option>
<option>San Isidro</option>
<option>San Isidro</option>
<option>San Isidro</option>
<option>San Isidro</option>
<option>San Isidro</option>
<option>San Isidro</option>
<option>San Isidro</option>
<option>San Isidro</option>
<option>San Isidro</option>
<option>San Jacinto</option>
<option>San Jacinto</option>
<option>San Joaquin</option>
<option>San Jorge</option>
<option>San Jose</option>
<option>San Jose</option>
<option>San Jose</option>
<option>San Jose</option>
<option>San Jose</option>
<option>San Jose</option>
<option>San Jose</option>
<option>San Jose</option>
<option>San Jose</option>
<option>San Jose de Buan</option>
<option>San Jose de Buenavista</option>
<option>San Jose del Monte</option>
<option>San Juan</option>
<option>San Juan</option>
<option>San Juan</option>
<option>San Juan</option>
<option>San Juan</option>
<option>San Juan (Cabalian)</option>
<option>San Juan (Lapog)</option>
<option>San Julian</option>
<option>San Leonardo</option>
<option>San Lorenzo</option>
<option>San Lorenzo Ruiz (Imelda)</option>
<option>San Luis</option>
<option>San Luis</option>
<option>San Luis</option>
<option>San Luis</option>
<option>San Manuel</option>
<option>San Manuel</option>
<option>San Manuel (Callang)</option>
<option>San Marcelino</option>
<option>San Mariano</option>
<option>San Mateo</option>
<option>San Mateo</option>
<option>San Miguel</option>
<option>San Miguel</option>
<option>San Miguel</option>
<option>San Miguel</option>
<option>San Miguel</option>
<option>San Miguel</option>
<option>San Miguel</option>
<option>San Narciso</option>
<option>San Narciso</option>
<option>San Nicolas</option>
<option>San Nicolas</option>
<option>San Nicolas</option>
<option>San Pablo</option>
<option>San Pablo</option>
<option>San Pablo</option>
<option>San Pascual</option>
<option>San Pascual</option>
<option>San Pedro</option>
<option>San Policarpo</option>
<option>San Quintin</option>
<option>San Quintin</option>
<option>San Rafael</option>
<option>San Rafael</option>
<option>San Remigio</option>
<option>San Remigio</option>
<option>San Ricardo</option>
<option>San Roque</option>
<option>San Sebastian</option>
<option>San Simon</option>
<option>San Teodoro</option>
<option>San Vicente</option>
<option>San Vicente</option>
<option>San Vicente</option>
<option>San Vicente</option>
<option>Sanchez-Mira</option>
<option>Santa</option>
<option>Santa Ana</option>
<option>Santa Ana</option>
<option>Santa Barbara</option>
<option>Santa Barbara</option>
<option>Santa Catalina</option>
<option>Santa Catalina</option>
<option>Santa Cruz</option>
<option>Santa Cruz</option>
<option>Santa Cruz</option>
<option>Santa Cruz</option>
<option>Santa Cruz</option>
<option>Santa Cruz</option>
<option>Santa Elena</option>
<option>Santa Fe</option>
<option>Santa Fe</option>
<option>Santa Fe</option>
<option>Santa Fe (Imugan)</option>
<option>Santa Ignacia</option>
<option>Santa Josefa</option>
<option>Santa Lucia</option>
<option>Santa Magdalena</option>
<option>Santa Marcela</option>
<option>Santa Margarita</option>
<option>Santa Maria</option>
<option>Santa Maria</option>
<option>Santa Maria</option>
<option>Santa Maria</option>
<option>Santa Maria</option>
<option>Santa Maria</option>
<option>Santa Maria (Imelda)</option>
<option>Santa Monica (Sapao)</option>
<option>Santa Praxedes</option>
<option>Santa Rita</option>
<option>Santa Rita</option>
<option>Santa Rosa</option>
<option>Santa Rosa</option>
<option>Santa Teresita</option>
<option>Santa Teresita</option>
<option>Santander</option>
<option>Santiago</option>
<option>Santiago</option>
<option>Santiago</option>
<option>Santo Domingo</option>
<option>Santo Domingo</option>
<option>Santo Domingo (Libog)</option>
<option>Santo Niño</option>
<option>Santo Niño</option>
<option>Santo Niño (Faire)</option>
<option>Santo Tomas</option>
<option>Santo Tomas</option>
<option>Santo Tomas</option>
<option>Santo Tomas</option>
<option>Santo Tomas</option>
<option>Santo Tomas</option>
<option>Santol</option>
<option>Sapa-Sapa</option>
<option>Sapad</option>
<option>Sapang Dalaga</option>
<option>Sapian</option>
<option>Sara</option>
<option>Sarangani</option>
<option>Sariaya</option>
<option>Sarrat</option>
<option>Sasmuan (Sexmoan)</option>
<option>Sebaste</option>
<option>Senator Ninoy Aquino</option>
<option>Sergio Osmeña Sr.</option>
<option>Sevilla</option>
<option>Shariff Aguak (Maganoy)</option>
<option>Shariff Saydona Mustapha</option>
<option>Siasi</option>
<option>Siaton</option>
<option>Siay</option>
<option>Siayan</option>
<option>Sibagat</option>
<option>Sibalom</option>
<option>Sibonga</option>
<option>Sibuco</option>
<option>Sibulan</option>
<option>Sibunag</option>
<option>Sibutad</option>
<option>Sibutu</option>
<option>Sierra Bullones</option>
<option>Sigay</option>
<option>Sigma</option>
<option>Sikatuna</option>
<option>Silago</option>
<option>Silang</option>
<option>Silay</option>
<option>Silvino Lobos</option>
<option>Simunul</option>
<option>Sinacaban</option>
<option>Sinait</option>
<option>Sindangan</option>
<option>Siniloan</option>
<option>Siocon</option>
<option>Sipalay</option>
<option>Sipocot</option>
<option>Siquijor</option>
<option>Sirawai</option>
<option>Siruma</option>
<option>Sison</option>
<option>Sison</option>
<option>Sitangkai</option>
<option>Socorro</option>
<option>Socorro</option>
<option>Sofronio Española</option>
<option>Sogod</option>
<option>Sogod</option>
<option>Solana</option>
<option>Solano</option>
<option>Solsona</option>
<option>Sominot (Don Mariano Marcos)</option>
<option>Sorsogon City</option>
<option>South Ubian</option>
<option>South Upi</option>
<option>Sual</option>
<option>Subic</option>
<option>Sudipen</option>
<option>Sugbongcogon</option>
<option>Sugpon</option>
<option>Sulat</option>
<option>Sulop</option>
<option>Sultan Dumalondong</option>
<option>Sultan Kudarat (Nuling)</option>
<option>Sultan Mastura</option>
<option>Sultan Naga Dimaporo (Karomatan)</option>
<option>Sultan sa Barongis (Lambayong)</option>
<option>Sultan Sumagka (Talitay)</option>
<option>Sumilao</option>
<option>Sumisip</option>
<option>Surallah</option>
<option>Surigao City</option>
<option>Suyo</option>
<option>T'Boli</option>
<option>Taal</option>
<option>Tabaco</option>
<option>Tabango</option>
<option>Tabina</option>
<option>Tabogon</option>
<option>Tabontabon</option>
<option>Tabuan-Lasa</option>
<option>Tabuelan</option>
<option>Tabuk</option>
<option>Tacloban</option>
<option>Tacurong</option>
<option>Tadian</option>
<option>Taft</option>
<option>Tagana-an</option>
<option>Tagapul-an</option>
<option>Tagaytay</option>
<option>Tagbilaran</option>
<option>Tagbina</option>
<option>Tagkawayan</option>
<option>Tago</option>
<option>Tagoloan</option>
<option>Tagoloan</option>
<option>Tagoloan II</option>
<option>Tagudin</option>
<option>Taguig</option>
<option>Tagum</option>
<option>Talacogon</option>
<option>Talaingod</option>
<option>Talakag</option>
<option>Talalora</option>
<option>Talavera</option>
<option>Talayan</option>
<option>Talibon</option>
<option>Talipao</option>
<option>Talisay</option>
<option>Talisay</option>
<option>Talisay</option>
<option>Talisay</option>
<option>Talisayan</option>
<option>Talugtug</option>
<option>Talusan</option>
<option>Tambulig</option>
<option>Tampakan</option>
<option>Tamparan</option>
<option>Tampilisan</option>
<option>Tanauan</option>
<option>Tanauan</option>
<option>Tanay</option>
<option>Tandag</option>
<option>Tandubas</option>
<option>Tangalan</option>
<option>Tangcal</option>
<option>Tangub</option>
<option>Tanjay</option>
<option>Tantangan</option>
<option>Tanudan</option>
<option>Tanza</option>
<option>Tapaz</option>
<option>Tapul</option>
<option>Taraka</option>
<option>Tarangnan</option>
<option>Tarlac City</option>
<option>Tarragona</option>
<option>Tayabas</option>
<option>Tayasan</option>
<option>Taysan</option>
<option>Taytay</option>
<option>Taytay</option>
<option>Tayug</option>
<option>Tayum</option>
<option>Teresa</option>
<option>Ternate</option>
<option>Tiaong</option>
<option>Tibiao</option>
<option>Tigaon</option>
<option>Tigbao</option>
<option>Tigbauan</option>
<option>Tinambac</option>
<option>Tineg</option>
<option>Tinglayan</option>
<option>Tingloy</option>
<option>Tinoc</option>
<option>Tipo-Tipo</option>
<option>Titay</option>
<option>Tiwi</option>
<option>Tobias Fornier (Dao)</option>
<option>Toboso</option>
<option>Toledo</option>
<option>Tolosa</option>
<option>Tomas Oppus</option>
<option>Torrijos</option>
<option>Trece Martires</option>
<option>Trento</option>
<option>Trinidad</option>
<option>Tuao</option>
<option>Tuba</option>
<option>Tubajon</option>
<option>Tubao</option>
<option>Tubaran</option>
<option>Tubay</option>
<option>Tubigon</option>
<option>Tublay</option>
<option>Tubo</option>
<option>Tubod</option>
<option>Tubod</option>
<option>Tubungan</option>
<option>Tuburan</option>
<option>Tuburan</option>
<option>Tudela</option>
<option>Tudela</option>
<option>Tugaya</option>
<option>Tuguegarao</option>
<option>Tukuran</option>
<option>Tulunan</option>
<option>Tumauini</option>
<option>Tunga</option>
<option>Tungawan</option>
<option>Tupi</option>
<option>Turtle Islands (Taganak)</option>
<option>Tuy</option>
<option>Ubay</option>
<option>Umingan</option>
<option>Ungkaya Pukan</option>
<option>Unisan</option>
<option>Upi</option>
<option>Urbiztondo</option>
<option>Urdaneta</option>
<option>Uson</option>
<option>Uyugan</option>
<option>Valderrama</option>
<option>Valencia</option>
<option>Valencia</option>
<option>Valencia (Luzurriaga)</option>
<option>Valenzuela</option>
<option>Valladolid</option>
<option>Vallehermoso</option>
<option>Veruela</option>
<option>Victoria</option>
<option>Victoria</option>
<option>Victoria</option>
<option>Victoria</option>
<option>Victorias</option>
<option>Viga</option>
<option>Vigan</option>
<option>Villaba</option>
<option>Villanueva</option>
<option>Villareal</option>
<option>Villasis</option>
<option>Villaverde (Ibung)</option>
<option>Villaviciosa</option>
<option>Vincenzo A. Sagun</option>
<option>Vintar</option>
<option>Vinzons</option>
<option>Virac</option>
<option>Wao</option>
<option>Zamboanga City</option>
<option>Zamboanguita</option>
<option>Zaragoza</option>
<option>Zarraga</option>
<option>Zumarraga</option>

											</select>
										</div>
										
										<div class="col-sm-6">
											<h5>Job Address<span class="error"><?php echo $error2 ?></span></h5>
											<input name="Address" type="text" class="form-control" placeholder="Enter job address">
										</div>
										
										
									</div>
									<div class="row no-ext-mrg sm-plix">
										<div class="col-sm-4">
											<h5>Job type<span class="error"><?php echo $error6 ?></span></h5>
											<select class="form-control input-lg" name="job-type">
												<option value=" ">Select Job Type</option>
												<option>Full Time</option>
												<option>Part Time</option>
												<option>Freelancer</option>
												<option>Internship</option>
												<option>Other</option>
											</select>
										</div>
										<div class="col-sm-4">
											<h5>Job Position<span class="error"><?php echo $error3 ?></span></h5>
											<input name="position" type="text" class="form-control" placeholder="Enter job position">
										</div>
										<div class="col-sm-4">
											<h5>Educational Level<span class="error"><?php echo $error4 ?></span></h5>
											<select name="course" class="form-control input-lg" required="" ">
												<option>No Formal Education</option>
												<option>Elementary Level</option>
												<option>Elementary Graduate</option>
												<option>High School Level </option>
												<option>High School Graduate</option>
												<option>College Level</option>
												<option>College Graduate </option>
												<option>Post Graduate </option>
												<option>Technical Vocational Graduate</option>
												<option >All</option>


											</select>
											
										</div>
										
									</div>
									
									<div class="job-box-filter">
										<div class="row">
											<div class="col-md-6 col-sm-6">
												<h4><i class="fa fa-picture-o" aria-hidden="true"></i>Interview Announcement<span class="error"><?php echo $error5 ?></span></h4>
											</div>
										</div>
									</div>
									<div class="row no-ext-mrg sm-plix">
										<div class="col-sm-12">
											<textarea name="inter-ann" class="form-control textarea" placeholder="About job"></textarea>
										</div>
									</div>


									<div class="job-box-filter">
										<div class="row">
											<div class="col-md-6 col-sm-6">
												<h4><i class="fa fa-picture-o" aria-hidden="true"></i>Job Requirements<span class="error"><?php echo $error5 ?></span></h4>
											</div>
										</div>
									</div>
									<div class="row no-ext-mrg sm-plix">
										<div class="col-sm-12">
											<textarea name="About-job" class="form-control textarea" placeholder="About job"></textarea>
										</div>
									</div>
									
								
								
									<div class="job-box-filter">
										<div class="row">
											<div class="col-md-6 col-sm-6">
												<h4><i class="fa fa-picture-o" aria-hidden="true"></i>Job Description<span class="error"><?php echo $error23 ?></span></h4>
											</div>
										</div>
									</div>
									
									<div class="row no-ext-mrg sm-plix">
										
										<div class="col-sm-12">
											<textarea name="summ-job" class="form-control textarea" placeholder="Job Summary"></textarea>
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
					</div>       
					 <!-- /. ROW  -->           
				</div>
				</form>
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
