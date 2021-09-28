<?php
session_start();
// session_destroy();
  if( (!isset($_SESSION["uName"])) && (!isset($_SESSION["hashed_pass"])) ) {
    header("Location:\.\home3/home/login_v2/index.php");
    echo "error";
  }

 	$conn = mysql_connect("localhost","root")or die(mysql_error());
 	$db = mysql_select_db("cmdeso_db")or die(mysql_error()); 
	
// $a = $b ="";
//  $num=$_SESSION['num'] ;
 	$error1 = $error2 = $error3 = $error5 =" ";


 if (isset($_POST['bttn'])) {
 		
 	
 	if ($_POST['confirm'] == 'No Formal Education') {
 		echo "<script> location.replace('resume-working.php'); </script>";
 	}elseif ($_POST['confirm'] == 'Elementary Level') {
 		echo "<script> location.replace('resume-elem.php?id=1'); </script>";
 	}elseif ($_POST['confirm'] == 'Elementary Graduate') {
 		echo "<script> location.replace('resume-elem.php?id=2'); </script>";
 	}elseif ($_POST['confirm'] == 'High School Level') {
 		echo "<script> location.replace('resume-high.php?id=1'); </script>";
 	}elseif ($_POST['confirm'] == 'High School Graduate') {
 		echo "<script> location.replace('resume-high.php?id=2'); </script>";
 	}elseif ($_POST['confirm'] == 'College Level') {
 		echo "<script> location.replace('resume-college.php?id=1'); </script>";
 	}elseif ($_POST['confirm'] == 'College Graduate') {
 		echo "<script> location.replace('resume-college.php?id=2'); </script>";
 	}elseif ($_POST['confirm'] == 'Post Graduate') {
 		echo "<script> location.replace('resume-college.php?id=3'); </script>";
 	}elseif ($_POST['confirm'] == 'Technical Vocational Graduate') {
 		echo "<script> location.replace('resume-vocational.php'); </script>";
 	}
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
		<style type="text/css">
			.error{
		color:red;
		font-size: 25px;
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
			<div class="navbar navbar-inverse navbar-fixed-top" >
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href=""><img src="assets/img/logo.png" class="img-responsive" alt=""></a>
					</div>
					<div class="navbar-collapse">
						<ul class="nav navbar-top-links navbar-right"> 
							
							<!-- /.dropdown -->
							
							<!-- /.dropdown -->
							<li class="dropdown">
								<a class="dropdown-toggle" data-toggle="dropdown" href="#">
									<img src="assets/img/user.jpg" class="img-responsive img-circle" alt="user">
								</a>
								<ul class="dropdown-menu dropdown-user">
									<li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
									</li>
									<li><a href="my-account.php"><i class="fa fa-gear fa-fw"></i> Settings</a>
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
			
			<!-- /. NAV SIDE  -->
			
			<div id="page"  style="width: 100%;">
				 <div class="row bg-title">
					<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
						<h4 class="page-title">Education Information</h4>
					</div>
					
					<!-- /.col-lg-12 -->
				</div>              
				 <!-- /. ROW  -->
				<div id="page-inner">
				   <div class="row">
						<div class="col-md-12">
							<div class="add-job_container">
								<div class="job-box">
								</div>
							
								<div class="job-box" style="height: 300px;">
									

									<div class="job-box-filter">
										<div class="row">
											<div class="col-md-6 col-sm-6">
												<h4><i class="fa fa-map-marker" aria-hidden="true"></i>Highest Educational Level</h4>
											</div>
										</div>
									</div>
									<form method="POST" action="">
									<div class="row no-ext-mrg sm-plix">
										<div class="col-sm-12" style=" ">

											<select name="confirm" class="form-control input-lg" required="" style="width: 300px;margin: auto;">
												<option>No Formal Education</option>
												<option>Elementary Level</option>
												<option>Elementary Graduate</option>
												<option>High School Level </option>
												<option>High School Graduate</option>
												<option>College Level</option>
												<option>College Graduate </option>
												<option>Post Graduate </option>
												<option>Technical Vocational Graduate</option>

											</select>
											
										</div>
										
									</div>
											
								</div>
								<div class="row no-ext-mrg">
									<div class="col-sm-12">
										<input type="submit" name="bttn" class="button submit" value="Next">
										
									</div>
								</div>
								</form>	
								
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
