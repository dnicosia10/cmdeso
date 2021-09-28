<?php
session_start();
//session_destroy();
  if( (!isset($_SESSION["uName"])) && (!isset($_SESSION["hashed_pass"])) 
  	&& ( 'user'!=$_SESSION["name"]) ) {
    header("Location:\.\home3/home/signup/login.php");
    echo "error";
  }if ('user'!=$_SESSION["name"]) {
    	header("Location:\.\home3/home/signup/login.php");
    }
	$conn = mysql_connect("localhost","root")or die(mysql_error());
	$db = mysql_select_db("cmdeso_db")or die(mysql_error()); 
	


		 if (isset($_POST['submit'])) {
		 
	 	 $fk= $_SESSION['num'];
		 $pk_seminar = $_GET['pk_seminar'];

	 	 $title = mysql_real_escape_string($_POST['title']);
	 	 $date = $_POST['date'];
	 	 $Address = mysql_real_escape_string($_POST['Address']);
	 	  $Organizer = mysql_real_escape_string($_POST['Organizer']);
	 	  $vp = mysql_real_escape_string($_POST['vp']);
	 	 "</div>";
	 	$update = mysql_query("UPDATE appl_info_seminar SET seminar_title='$title',seminar_date='$date' ,seminar_addr = '$Address' ,seminar_orga = '$Organizer' ,seminar_vp = '$vp'   WHERE acct_id='$fk' AND seminar_id ='$pk_seminar' ");
			
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
								
								<!-- / General Information -->

							<div class="job-box">


									<div class="job-box-filter">
										<div class="row">
											<div class="col-md-6 col-sm-6">
												<h4><i class="fa fa-map-marker" aria-hidden="true"></i>Seminar Attended</h4>
											</div>
										</div>
									</div>
									
									<?php
									
									$fk= $_SESSION['num'];
									$pk_seminar = $_GET['pk_seminar'];

								// echo "<script> location.replace('seminar-update.php?pk_seminar=". $pk_seminar ."'); </script>";
								  $six = mysql_query("SELECT * FROM appl_info_seminar WHERE acct_id = '$fk'  AND seminar_id ='$pk_seminar' ");
							      while ($row = mysql_fetch_array($six)) {
							      $date_start=date_create($row['seminar_date']);
							      //$date_end=date_create($row['edu_date_grad_end']);
							      $format_start =  date_format($date_start,"  F  d,  Y ");
							      //$format_end =  date_format($date_end," Y ");
         ?>

									<form method="POST" >
									<div class="row no-ext-mrg sm-plix">
										<div class="col-sm-6" >
											<h5>Title</h5>
											<input type="text" name="title" class="form-control"  value="<?php echo $row["seminar_title"]; ?>">
												
										</div>
										<div class="col-sm-6" style="">
											<h5>Date</h5>
											<input name="date" type="Date" class="form-control"  value="<?php echo $row["seminar_date"]; ?>">
										</div>
										<div class="col-sm-6" style="width: 100%;">
											<h5>Address</h5>
											<input name="Address" type="text" class="form-control" value="<?php echo $row["seminar_addr"]; ?>"  >
										</div>
										<div class="col-sm-6" >
											<h5>Organizer</h5>
											<input name="Organizer" type="text" class="form-control"  value="<?php echo $row["seminar_orga"]; ?>">
										</div>
										<div class="col-sm-6" >
											<h5>Venue/Place</h5>
											<input name="vp" type="text" class="form-control" value="<?php echo $row["seminar_vp"]; ?>" >
									
									</div>
										
										
									</div>
							
								</div>
								
								<div class="row no-ext-mrg">
									<div class="col-sm-12">
										<input type="submit" name="submit" class="button submit" value="Update">
										
									</div>
								</div></form>
								
								
										
									
									</div>
									<div class="col-sm-6" >
										</form>
										<?php
										 }


										
										?>

									</div>

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
