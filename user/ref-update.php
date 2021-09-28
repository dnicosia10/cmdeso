<?php
 session_start();
// session_destroy();
   if( (!isset($_SESSION["uName"])) && (!isset($_SESSION["hashed_pass"])) ) {
  //   header("Location:\.\home3/home/login_v2/index.php");
   	echo "error";
   }

	$conn = mysql_connect("localhost","root")or die(mysql_error());
	$db = mysql_select_db("cmdeso_db")or die(mysql_error()); 
	$num = $_SESSION['num'];
	
	$id = $_GET['pk_ref'];
$a ="";
	$error1 = $error2 = $error3 = $error4 = $error5 = $error6 = $error7 = " ";

if (isset($_POST['resume-bttn-add']))
{


		 $fk= $_SESSION['num'];
		 $pk_ref = $_GET['pk_ref'];
		 $Position = mysql_real_escape_string($_POST['Position']);
	 	 $company = mysql_real_escape_string($_POST['company']);
	 	 $fname = $_POST['fname'];
	 	 $lname = $_POST['lname'];
	 	 $mname = $_POST['mname'];
	 	 $Address = mysql_real_escape_string($_POST['Address']);
	 	 $Contact = mysql_real_escape_string($_POST['Contact']);
	 	
	 	$update = mysql_query("UPDATE appl_info_ref SET ref_fname='$fname',ref_lname='$lname' ,ref_mname = '$mname' ,ref_company = '$company' ,ref_position = '$Position',ref_address = '$Address' ,ref_contact = '$Contact'  WHERE acct_id='$fk' AND ref_id ='$id' ");
	 	echo "<script type='text/javascript'>alert('Successful')</script>";
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
						<a class="navbar-brand" href="index.html"><img src="assets/img/logo.png" class="img-responsive" alt=""></a>
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
			
			<!-- /. NAV SIDE  -->
			
			<div id="page"  style="width: 100%;">
				 <div class="row bg-title">
					<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
						<h4 class="page-title">General Information</h4>
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
				 <form method="POST" action="" enctype="multipart/form-data">
				<div id="page-inner">
				   <div class="row">
						<div class="col-md-12">
							<div class="add-job_container">
								
								
								<!-- / General Information -->

								

								<div class="job-box">


									<div class="job-box-filter">
										<div class="row">
											<div class="col-md-6 col-sm-6">
												<h4><i class="fa fa-map-marker" aria-hidden="true"></i>Reference Information (Give atleast 3)</h4>
											</div>
										</div>
									</div>
									<?php
										 $conn = mysql_connect("localhost","root")or die(mysql_error());
										 $db = mysql_select_db("cmdeso_db")or die(mysql_error()); 

										 $three = mysql_query("SELECT * FROM appl_info_ref WHERE acct_id = $num AND ref_id = $id ");
										 while ($row = mysql_fetch_array($three)) {
    
									?>
									
									<div class="row no-ext-mrg sm-plix">
										<div class="col-sm-6">
											<h5>First Name</h5>
											<input name="fname" class="form-control" type="text" value="<?php echo $row["ref_fname"]; ?>" >
												
										</div>
										<div class="col-sm-6" ">

											<h5>Last Name</h5>
											<input name="lname" type="text" class="form-control" value="<?php echo $row["ref_lname"]; ?>" >
										</div>
										<div class="col-sm-6" >
											<h5>Middle Initial</h5>
											<input name="mname" type="text" class="form-control" value="<?php echo $row["ref_mname"]; ?>"  >
										</div>
										
									</div>
									<div class="row no-ext-mrg sm-plix">
										<div class="col-sm-6">
											<h5>Company</h5>
											<input name="company" type="text" value="<?php echo $row["ref_company"]; ?>" class="form-control" >
										</div>
										<div class="col-sm-6" >
											<h5>Position</h5>
											<input name="Position" value="<?php echo $row["ref_position"]; ?>" type="text" class="form-control" >
										</div>
										
									</div>
									<div class="row no-ext-mrg sm-plix">
										<div class="col-sm-6">
											<h5>Address</h5>
											<input name="Address" value="<?php echo $row["ref_address"]; ?>" type="text" class="form-control" >
										</div>
										<div class="col-sm-6" >
											<h5>Contact Number</h5>
											<input name="Contact" value="<?php echo $row["ref_contact"]; ?>" type="text" class="form-control" value="+63" >
										</div>
										
									</div>

									<?php 
										}
									?>
									
								</div>
								<!-- / Location -->

								

									<div class="row no-ext-mrg">
									<div class="col-sm-6" style="width: 100%;">
										<input type="submit" name="resume-bttn-add" class="button submit" value="Update" style="float: ; border-style: none;">
									
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
