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
	$num = $_SESSION['num'];
	$_SESSION = $num;
$a ="";
	$error1 = $error2 = $error3 = $error4 = $error5 = $error6 = $error7 = " ";
if (isset($_POST['resume-bttn-submit']))
{

	 //restriction variable
	if (empty($_POST['fname'])) {
		$error1 = "*";
	}else{
		$error1 = "";
	}if (empty($_POST['lname'])) {
		$error2 = "*";
	}else{
		$error2 = "";
	}if (empty($_POST['mname'])) {
		$error3 =   "*";
	}else{
		$error3 = "";
	}if (empty($_POST['company'])) {
		$error4 =  "*";
	}else{
		$error4 = "";
	}if (empty($_POST['Position'])) {
		$error5 =  "*";
	}else{
		$error5 = "";
	}if (empty($_POST['Address'])) {
		$error6 =  "*";
	}else{
		$error6 = "";
	}if (empty($_POST['Contact'])) {
		$error7 =  "*";
	}else{
		$error7 = "";
	}
//restriction for fill all the field
	

		if ( (!empty($_POST['fname'])) && (!empty($_POST['lname']))&& (!empty($_POST['company']))
			&& (!empty($_POST['Position']))  && (!empty($_POST['Address'])) && (!empty($_POST['Contact'])) )
		{
			// $image = $_FILES['img']['name'];
			// $target = "img/" . basename($_FILES['img']['name']);
			
			$fk = $num;
			$fname = ucfirst( strtolower($_POST['fname']));
			$lname = ucfirst( strtolower($_POST['lname']));
			$mname = ucfirst( strtolower($_POST['mname']));
			$company = ucfirst( strtolower($_POST['company']));
			$Position = ucfirst( strtolower($_POST['Position']));
			$Contact = $_POST['Contact'];
			$Address = mysql_real_escape_string($_POST['Address']);
			
			$sql = mysql_query("INSERT INTO appl_info_ref(acct_id,ref_fname,ref_lname,ref_mname,ref_company,ref_position,ref_address,ref_contact)VALUES('$fk','$fname','$lname','$mname','$company','$Position','$Address','$Contact')");
			// $desc = "The admin ADD in Athletes information ID " . $stud_no. " and NAME:" .$fname." ".$lname ;
			// $act = "ADD";
			// $audit = mysql_query("INSERT INTO sdmo_audit(AUDIT_DESC,AUDIT_ACTION,AUDIT_DATE)VALUES('$desc','$act',now())");
			 mysql_query($sql);
			echo "<script> location.replace('resume-ref-job.php'); </script>";
			//uploading the image file
				// if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {

				// echo "<script type='text/javascript'>alert('Successful')</script>";
				// }
		}
		else
		{
			echo "<script type='text/javascript'>alert('Fill the field')</script>";
		}
}
if (isset($_POST['resume-bttn-add']))
{

	 //restriction variable
	if (empty($_POST['fname'])) {
		$error1 = "*";
	}else{
		$error1 = "";
	}if (empty($_POST['lname'])) {
		$error2 = "*";
	}else{
		$error2 = "";
	}if (empty($_POST['mname'])) {
		$error3 =   "*";
	}else{
		$error3 = "";
	}if (empty($_POST['company'])) {
		$error4 =  "*";
	}else{
		$error4 = "";
	}if (empty($_POST['Position'])) {
		$error5 =  "*";
	}else{
		$error5 = "";
	}if (empty($_POST['Address'])) {
		$error6 =  "*";
	}else{
		$error6 = "";
	}if (empty($_POST['Contact'])) {
		$error7 =  "*";
	}else{
		$error7 = "";
	}
//restriction for fill all the field
	

		if ( (!empty($_POST['fname'])) && (!empty($_POST['lname'])) && (!empty($_POST['mname'])) && (!empty($_POST['company']))
			&& (!empty($_POST['Position']))  && (!empty($_POST['Address'])) && (!empty($_POST['Contact'])) )
		{
			// $image = $_FILES['img']['name'];
			// $target = "img/" . basename($_FILES['img']['name']);
			
			$fk = $num;
			$fname = ucfirst( strtolower($_POST['fname']));
			$lname = ucfirst( strtolower($_POST['lname']));
			$mname = ucfirst( strtolower($_POST['mname']));
			$company = ucfirst( strtolower($_POST['company']));
			$Position = ucfirst( strtolower($_POST['Position']));
			$Contact = $_POST['Contact'];
			$Address = mysql_real_escape_string($_POST['Address']);
			
			$sql = mysql_query("INSERT INTO appl_info_ref(acct_id,ref_fname,ref_lname,ref_mname,ref_company,ref_position,ref_address,ref_contact)VALUES('$fk','$fname','$lname','$mname','$company','$Position','$Address','$Contact')");
			// $desc = "The admin ADD in Athletes information ID " . $stud_no. " and NAME:" .$fname." ".$lname ;
			// $act = "ADD";
			// $audit = mysql_query("INSERT INTO sdmo_audit(AUDIT_DESC,AUDIT_ACTION,AUDIT_DATE)VALUES('$desc','$act',now())");
			 mysql_query($sql);
			echo "<script type='text/javascript'>alert('Successfully Added')</script>";
			//uploading the image file
				// if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {

				// echo "<script type='text/javascript'>alert('Successful')</script>";
				// }
		}
		else
		{
			echo "<script type='text/javascript'>alert('Fill the field')</script>";
		}
}if (isset($_POST['skip'])) {
	echo "<script> location.replace('resume-ref-job.php'); </script>";
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
				 <form method="POST" action="" enctype="multipart/form-data">
				<div id="page-inner">
				   <div class="row">
						<div class="col-md-12">
							<div class="add-job_container">
								
								
								<!-- / General Information -->

								

								<div class="job-box" style="height: 450px;">


									<div class="job-box-filter">
										<div class="row">
											<div class="col-md-10 col-sm-10">
												<h4><i class="fa fa-map-marker" aria-hidden="true"></i>Character Reference (Give atleast 3)</h4>
											</div>
										
										</div>
									</div>
									
									
									<div class="row no-ext-mrg sm-plix">
										<div class="col-sm-4">
											<h5>First Name<span class="error"><?php echo $error1 ?></span></h5>
											<input name="fname" class="form-control" type="text" placeholder="First Name">
												
										</div>
										<div class="col-sm-4" ">

											<h5>Last Name<span class="error"><?php echo $error2 ?></span></h5>
											<input name="lname" type="text" class="form-control" placeholder="Last Name" style="">
										</div>
										<div class="col-sm-4" >
											<h5>Middle Initial<span class="error"><?php echo $error3 ?></span></h5>
											<input name="mname" type="text" class="form-control" placeholder="Middle Name" >
										</div>
										
									</div>
									<div class="row no-ext-mrg sm-plix">
										<div class="col-sm-6">
											<h5>Company<span class="error"><?php echo $error4 ?></span></h5>
											<input name="company" type="text" class="form-control" >
										</div>
										<div class="col-sm-6" >
											<h5>Position<span class="error"><?php echo $error5 ?></span></h5>
											<input name="Position" type="text" class="form-control" >
										</div>
										
									</div>
									<div class="row no-ext-mrg sm-plix">
										<div class="col-sm-6">
											<h5>Address<span class="error"><?php echo $error6 ?></span></h5>
											<input name="Address" type="text" class="form-control" >
										</div>
										<div class="col-sm-6" >
											<h5>Contact Number<span class="error"><?php echo $error7 ?></span></h5>
											<input name="Contact" type="text" class="form-control" value="63" >
										</div>
										
									</div>

									
									
								</div>
								<!-- / Location -->

								

									<div class="row no-ext-mrg">
									<div class="col-sm-6" >
										<input type="submit" name="resume-bttn-add" class="button submit" value="Add More" style="float: right; border-style: none;">
									
									</div>
									<div class="col-sm-6" >
										<input type="submit" name="resume-bttn-submit" class="button submit" value="Next" style="float: left; border-style: none;">
										
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
