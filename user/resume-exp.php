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
  ?>
<?php
	$conn = mysql_connect("localhost","root")or die(mysql_error());
	$db = mysql_select_db("cmdeso_db")or die(mysql_error()); 


if (isset($_POST['skip'])) {
	echo "<script> location.replace('resume-seminar.php'); </script>";
}
	$error1 = $error2 = $error3 = $error3_1 =$error4 =$error5 = $error6= " ";
if (isset($_POST['resume-bttn-submit']))
{

	 //restriction variable
	if (empty($_POST['name'])) {
		$error1 = "*";
	}else{
		$error1 = "";
	}if (empty($_POST['date_start'])) {
		$error2 =   "*";
	}else{
		$error2 = "";
	}if (empty($_POST['date_end'])) {
		$error3_1 =   "*";
	}else{
		$error3_1 = "";
	}if (empty($_POST['Position'])) {
		$error4 =   "*";
	}else{
		$error4 = "";
	}if (empty($_POST['desc'])) {
		$error5 =   "*";
	}else{
		$error5 = "";
	}if (empty($_POST['title'])) {
		$error6 =   "*";
	}else{
		$error6 = "";
	}
//restriction for fill all the field
		if ( (!empty($_POST['name'])) && (!empty($_POST['date_start']))&& (!empty($_POST['date_end'])) && (!empty($_POST['Position'])) && (!empty($_POST['desc']))   )
		{
			
			$title = mysql_real_escape_string('Work');
			$name = mysql_real_escape_string($_POST['name']);
			$date_start = $_POST['date_start'];
			$date_end = $_POST['date_end'];
			$desc = mysql_real_escape_string($_POST['desc']);
			$Position = mysql_real_escape_string($_POST['Position']);
			
			$fk = 1;


			
			$sql = mysql_query("INSERT INTO appl_info_exp(acct_id,exp_title,exp_company,exp_position,exp_desc,exp_date_start,exp_date_end)VALUES('$fk','$title','$name','$Position','$desc','$date_start','$date_end')");
			// $desc = "The admin ADD in Athletes information ID " . $stud_no. " and NAME:" .$fname." ".$lname ;
			// $act = "ADD";
			// $audit = mysql_query("INSERT INTO sdmo_audit(AUDIT_DESC,AUDIT_ACTION,AUDIT_DATE)VALUES('$desc','$act',now())");
			 mysql_query($sql);
			 echo "<script type='text/javascript'>alert('Successful')</script>";
			
			
			echo "<script> location.replace('resume-seminar.php'); </script>";

		}
		else
		{
			echo "<script type='text/javascript'>alert('Fill the field')</script>";
		}
}if (isset($_POST['resume-bttn-add']))
{

	 //restriction variable
	if (empty($_POST['name'])) {
		$error1 = "*";
	}else{
		$error1 = "";
	}if (empty($_POST['date_start'])) {
		$error2 =   "*";
	}else{
		$error2 = "";
	}if (empty($_POST['date_end'])) {
		$error3_1 =   "*";
	}else{
		$error3_1 = "";
	}if (empty($_POST['Position'])) {
		$error4 =   "*";
	}else{
		$error4 = "";
	}if (empty($_POST['desc'])) {
		$error5 =   "*";
	}else{
		$error5 = "";
	}if (empty($_POST['title'])) {
		$error6 =   "*";
	}else{
		$error6 = "";
	}
//restriction for fill all the field
		if ( (!empty($_POST['name'])) && (!empty($_POST['date_start']))&& (!empty($_POST['date_end'])) && (!empty($_POST['Position'])) && (!empty($_POST['desc']))&&  (!empty($_POST['title']))   )
		{
			
			$title = mysql_real_escape_string('Empl  ');
			$name = mysql_real_escape_string($_POST['name']);
			$date_start = $_POST['date_start'];
			$date_end = $_POST['date_end'];
			$desc = mysql_real_escape_string($_POST['desc']);
			$Position = mysql_real_escape_string($_POST['Position']);
			
			$fk = 1;


			
			$sql = mysql_query("INSERT INTO appl_info_exp(acct_id,exp_title,exp_company,exp_position,exp_desc,exp_date_start,exp_date_end)VALUES('$fk','$title','$name','$Position','$desc','$date_start','$date_end')");
			// $desc = "The admin ADD in Athletes information ID " . $stud_no. " and NAME:" .$fname." ".$lname ;
			// $act = "ADD";
			// $audit = mysql_query("INSERT INTO sdmo_audit(AUDIT_DESC,AUDIT_ACTION,AUDIT_DATE)VALUES('$desc','$act',now())");
			 mysql_query($sql);
			 echo "<script type='text/javascript'>alert('Successful')</script>";
			
			
			

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
						<a class="navbar-brand" href=""><img src="assets/img/logo.png" class="img-responsive" alt=""></a>
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
								
								<div class="job-box" style="height: 450px;">

								<form method="POST" action="">
									<div class="job-box-filter">
										<div class="row">
											<div class="col-md-10 col-sm-10">
												<h4><i class="fa fa-map-marker" aria-hidden="true"></i>Work Expirience(Limit the occupation for the last 10 years. Start with the most recent employment)</h4>
											</div>
											<div class="col-sm-2" >
												<button type="submit" name="skip" class="form-control button" >Skip</button>
											</div>
										</div>
									</div>
									
										<div class="row no-ext-mrg sm-plix">
										
										
								</div>
									<div class="row no-ext-mrg sm-plix">

										<div class="col-sm-6" >
											<h5>Name of the Company/Office<span class="error"><?php echo $error1 ?></span></h5>
											<input name="name" class="form-control" >
												
										</div>
										<div class="col-sm-6"  >
											<h5>Address<span class="error"><?php echo $error5 ?></span></h5>
											<input name="desc" type="text" class="form-control"  >
											
										</div>
										
										

									</div>
									<div class="row no-ext-mrg sm-plix">
										
										<div class="col-sm-6" >
											<h5>Position Held<span class="error"><?php echo $error4 ?></span></h5>
											<input name="Position" type="text" class="form-control"  >
											
										</div>
										<div class="col-sm-3" style=" width:;">
											<h5 style="">Start<span class="error"><?php echo $error2 ?></span></h5>
											<input name="date_start" type="Date" class="form-control"  >
										</div>
										<div class="col-sm-3" style=" width: ;">
											<h5 >End<span class="error"><?php echo $error3_1 ?></span></h5>
											<input name="date_end" type="Date" class="form-control">
										</div>
									</div>
									
								</div>
								
								<div class="row no-ext-mrg">
									<div class="col-sm-6" >
										<input type="submit" name="resume-bttn-add" class="button submit" value="Add More" style="float: right; border-style: none;">
									
									</div>
									<div class="col-sm-6" >
										<input type="submit" name="resume-bttn-submit" class="button submit" value="Next" style="float: left; border-style: none;">
										
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
