<?php
session_start();
//session_destroy();
  if( (!isset($_SESSION["uName"])) && (!isset($_SESSION["hashed_pass"])) 
  	&& ( 'user'!=$_SESSION["name"]) ) {
    header("Location:\.\home3/home/signup/login.php");
    echo "error";
  }
  if ('user'!=$_SESSION["name"]) {
    	header("Location:\.\home3/home/signup/login.php");
    }

	$conn = mysql_connect("localhost","root")or die(mysql_error());
	$db = mysql_select_db("cmdeso_db")or die(mysql_error()); 
	
$a = $b ="";
 $num=$_SESSION['num'] ;
	$error1 = $error2 = $error3 = $error5 =" ";

	$section = $_GET['id'];


if (isset($_POST['resume-bttn']))
{

	 //restriction variable
	if (empty($_POST['name'])) {
		$error1 = "*";
	}else{
		$error1 = "";
	}if (empty($_POST['date'])) {
		$error2 = "*";
	}else{
		$error2 = "";
	}if (empty($_POST['Address'])) {
		$error3 =   "*";
	}else{
		$error3 = "";
	}
//restriction for fill all the field
		if ( (!empty($_POST['name'])) && (!empty($_POST['date'])) && (!empty($_POST['Address']))  )
		{
			
			$title = ucfirst( strtolower('Elementary'));
			$name = mysql_real_escape_string($_POST['name']);
			$date = $_POST['date'];
			$date_end = $_POST['date_end'];
			$Address = mysql_real_escape_string($_POST['Address']);
			$fk = $num;


			
			$sql = mysql_query("INSERT INTO appl_info_edu(acct_id,edu_title,edu_name,edu_addr,edu_date_grad_start,edu_date_grad_end)VALUES('$fk','$title','$name','$Address','$date','$date_end')");
			// $desc = "The admin ADD in Athletes information ID " . $stud_no. " and NAME:" .$fname." ".$lname ;
			// $act = "ADD";
			// $audit = mysql_query("INSERT INTO sdmo_audit(AUDIT_DESC,AUDIT_ACTION,AUDIT_DATE)VALUES('$desc','$act',now())");
			 mysql_query($sql);
			 
			 echo "<script> location.replace('resume-vocational.php'); </script>";
			
			
			

		}
		else
		{
			echo "<script type='text/javascript'>alert('Fill the field')</script>";
		}
}
if (isset($_POST['resume-bttn1']))
{

	 //restriction variable
	if (empty($_POST['name'])) {
		$error1 = "*";
	}else{
		$error1 = "";
	}if (empty($_POST['date'])) {
		$error2 = "*";
	}else{
		$error2 = "";
	}if (empty($_POST['Address'])) {
		$error3 =   "*";
	}else{
		$error3 = "";
	}
//restriction for fill all the field
		if ( (!empty($_POST['name'])) && (!empty($_POST['Address']))  )
		{
			
			$title = ucfirst( strtolower('Elementary'));
			$name = mysql_real_escape_string($_POST['name']);
			//$date = $_POST['date'];
			$date_end = $_POST['date_end'];
			$Address = mysql_real_escape_string($_POST['Address']);
			$fk = $num;


			
			$sql = mysql_query("INSERT INTO appl_info_edu(acct_id,edu_title,edu_name,edu_addr,edu_date_grad_end)VALUES('$fk','$title','$name','$Address','$date_end')");
			// $desc = "The admin ADD in Athletes information ID " . $stud_no. " and NAME:" .$fname." ".$lname ;
			// $act = "ADD";
			// $audit = mysql_query("INSERT INTO sdmo_audit(AUDIT_DESC,AUDIT_ACTION,AUDIT_DATE)VALUES('$desc','$act',now())");
			 mysql_query($sql);
			 
			 echo "<script> location.replace('resume-vocational.php'); </script>";
			
			
			

		}
		else
		{
			echo "<script type='text/javascript'>alert('Fill the field')</script>";
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
						<a class="navbar-brand" href="index.html"><img src="assets/img/logo.png" class="img-responsive" alt=""></a>
					</div>
					<div class="navbar-collapse">
						
						<!-- /.navbar-top-links -->
					</div>
				</div>
			</div>         
			<!-- /. NAV TOP  -->
			
			<!-- /. NAV SIDE  -->
			
			<div id="page"  style="width: 100%;">
				           
				 <!-- /. ROW  -->
				<div id="page-inner">
				   <div class="row">
						<div class="col-md-12">
							<div class="add-job_container">
							
							<?php
							$section = $_GET['id'];
								if ($section == 1) {
									
								
							?>
								<div class="job-box" style="height: 450px;">
									<div class="job-box-filter">
										<div class="row">
											<div class="col-md-6 col-sm-6">
												<h4><i class="fa fa-map-marker" aria-hidden="true"></i>Elementary School</h4>
											</div>
										</div>
									</div>
									<form method="POST" action="">
									<div class="row no-ext-mrg sm-plix">
										<div class="col-sm-6" >
											<h5>School Name<span class="error"><?php echo $error1 ?></span></h5>
											<input name="title" type="hidden" class="form-control" value="Elementary">
											<input name="name" class="form-control" placeholder="Enter School Name">
												
										</div>
										
										<div class="col-sm-6" style="">
											<h5>Last Attend<span class="error"><?php echo $error5 ?></span></h5>
											<input name="date_end" type="Date" class="form-control" >
										</div>
										<div class="col-sm-6" style="width: 100%">
											<h5>Address<span class="error"><?php echo $error3 ?></span></h5>
											<input name="Address" type="text" class="form-control" placeholder="Ex. Tarlac city, Gerona Street #..." >
										</div>
										
									</div>
											
								</div>
								
								<div class="row no-ext-mrg">
									<div class="col-sm-12">
										<input type="submit" name="resume-bttn1" class="button submit" value="Next">
										
									</div>
								</div>
								</form>	
								<?php
									}
								$section = $_GET['id'];
								if ($section == 2) {
									# code...
								
							?>
								<div class="job-box" style="height: 450px;">
									<div class="job-box-filter">
										<div class="row">
											<div class="col-md-6 col-sm-6">
												<h4><i class="fa fa-map-marker" aria-hidden="true"></i>Elementary School</h4>
											</div>
										</div>
									</div>
									<form method="POST" action="">
									<div class="row no-ext-mrg sm-plix">
										<div class="col-sm-6" >
											<h5>School Name<span class="error"><?php echo $error1 ?></span></h5>
											<input name="title" type="hidden" class="form-control" value="Elementary">
											<input name="name" class="form-control" placeholder="Enter School Name">
												
										</div>
										<div class="col-sm-3" style="">
											<h5>Date Graduated start<span class="error"><?php echo $error2 ?></span></h5>
											<input name="date" type="Date" class="form-control"  >
										</div>
										<div class="col-sm-3" style="">
											<h5>Date Graduated end<span class="error"><?php echo $error5 ?></span></h5>
											<input name="date_end" type="Date" class="form-control" >
										</div>
										<div class="col-sm-6" style="width: 100%">
											<h5>Address<span class="error"><?php echo $error3 ?></span></h5>
											<input name="Address" type="text" class="form-control" placeholder="Ex. Tarlac city, Gerona Street #..." >
										</div>
										
									</div>
											
								</div>
								
								<div class="row no-ext-mrg">
									<div class="col-sm-12">
										<input type="submit" name="resume-bttn" class="button submit" value="Next">
										
									</div>
								</div>
								</form>	
								<?php } ?>
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
