<?php
	session_start();
// session_destroy();
  if( (!isset($_SESSION["uName"])) && (!isset($_SESSION["hashed_pass"])) ) {
   // header("Location:\.\home3/home/signup/login.php");
  	echo "error";
  }
  $fk = $_SESSION['num'];
  $conn = mysql_connect("localhost","root")or die(mysql_error());
	$db = mysql_select_db("cmdeso_db")or die(mysql_error()); 
	
	$error1 = $error2 = $error3  = " ";



	 if (isset($_POST['submit'])) {

	 	if( (!empty($_POST['oldemail']))&&(!empty($_POST['newemail']))&&(!empty($_POST['confemail'])) ) {
	 		
	 	 $fk= $_SESSION['num'];

	 	$confirm = mysql_query("SELECT * FROM appl_acct WHERE acct_id = '$fk'");
	 	while ($row = mysql_fetch_array($confirm)) {
	 	
	 	$email = $row['acct_email'];
	 	$password = $row['acct_pass'];
	 	}

	 $newemail = strtolower($_POST['newemail']);
 	 $oldemail = trim($_POST['oldemail']);
 	 $confemail = strtolower($_POST['confemail']);
 	 $confpass = sha1($_POST['confpass']);
	if ($confpass != $password) {
 	 	$error1 = '<div class="alert alert-danger text-center" role="alert">
            <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
            <label>Confirmation password did not exist!</label>
            </div>';
 	 }
 	 if ($email != $oldemail) {
 	 	$error1 = '<div class="alert alert-danger text-center" role="alert">
            <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
            <label>Old Email did not exist!</label>
            </div>';
 	 }
 	  if ($newemail != $confemail) {
 	 	$error1 = '<div class="alert alert-danger text-center" role="alert">
            <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
            <label>New Email did not match!</label>
            </div>';
 	 }
 	 

	 if (($email == $oldemail)&&($newemail == $confemail)&&($password == $confpass) ) {
	 	$error1 ="";
	 	
	 		$update = mysql_query("UPDATE appl_acct SET acct_email = '$newemail'   WHERE acct_id='$fk' ");
	 		
 	 	$error1 = '<div class="alert alert-success text-center" role="alert">
              <span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
              <label>Change Email Successful</label>
             
              </div>';
 	 
	 		
	 	}
	 
 	
	
 	
 	  
 	
		
 }else{

 	 	$error1 = '<div class="alert alert-danger text-center" role="alert">
            <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
            <label>Fill all field!</label>
            </div>';
 	 
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
				font-size: 50px;
				
				height: 10px;

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
						<a class="navbar-brand" href="index.php"><img src="assets/img/logo.png" class="img-responsive" alt=""></a>
					</div>
					<div class="navbar-collapse">
						<ul class="nav navbar-top-links navbar-right"> 
							
							<!-- /.dropdown -->
							  <?php 



  $fk = $_SESSION['num'];
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

			?>
							<li class="dropdown">
								<a class="dropdown-toggle" data-toggle="dropdown" href="#">
									<i class="fa fa-user-circle" aria-hidden="true"></i>
								</a>
								<ul class="dropdown-menu dropdown-user">
									
									<li><a href="my-account.php"><i class="fa fa-gear fa-fw"></i> Account Setting</a>
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
						
						<img src="assets/img/<?php echo $row["appl_img"]; ?> "  class="img-responsive img-circle" style="height: 150px;  padding-left: 10%;padding-right: 10%; width:100%;">
					</span>
					</div>
					<ul class="nav" id="main-menu">
						
						<li class="active">
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
					 
					
						<li >
							<a href="my-profile.php"><i class="fa fa-user-circle" aria-hidden="true"></i>My CV</a>
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
						<h4 class="page-title">My Account</h4>
					</div>
					<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
						<ol class="breadcrumb">
							Change:
							<li class="active">Email</li>
							<li ><a href="my-account.php">Password</a></li>
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
											<div class="log-off-wrap">
												<form method="POST">
												<h4>Change Email Address</h4>
												
												<input type="email" name="oldemail" class="form-control" placeholder="Enter Old Email">
												
												<input type="email" name="newemail" class="form-control" placeholder="Enter New Email">
												
												<input type="email" name="confemail" class="form-control" placeholder="Confirm New Email">
												<input type="password" name="confpass" class="form-control" placeholder="Enter Password">
												<?php echo $error1; ?>
												<button type="submit" name="submit" class="btn btn-logoff">Save Changes</button>

												</form>
											</div>
										</div>
									</div>
								</div>
								<!-- / Location -->

								<!-- / Full Detail -->
							<?php
							}
							
								?>
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
