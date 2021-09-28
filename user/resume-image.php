<?php
	$conn = mysql_connect("localhost","root")or die(mysql_error());
	$db = mysql_select_db("cmdeso_db")or die(mysql_error()); 
$a ="";
	$error1 = $error2 = $error3 = $error4 = $error5 = $error6 = $error7 = $error8 = $error9 = $error10 = $error11 = " ";
if (isset($_POST['resume-bttn']))
{

	 //restriction variable
	// if (empty($_POST['appl_fname'])) {
	// 	$error1 = "*";
	// }else{
	// 	$error1 = "";
	// }if (empty($_POST['appl_lname'])) {
	// 	$error2 = "*";
	// }else{
	// 	$error2 = "";
	// }if (empty($_POST['appl_mname'])) {
	// 	$error3 =   "*";
	// }else{
	// 	$error3 = "";
	// }if (empty($_POST['appl_birthp'])) {
	// 	$error4 =  "*";
	// }else{
	// 	$error4 = "";
	// }if (empty($_POST['appl_birthd'])) {
	// 	$error5 =  "*";
	// }else{
	// 	$error5 = "";
	// }
	// if (empty($_POST['appl_age'])) {
	// 	$error6 =  "*";
	// }else{
	// 	$error6 = "";
	// }
	// if (empty($_POST['appl_nationality'])) {
	// 	$error7 =  "*";
	// }else{
	// 	$error7 = "";
	// }if (empty($_POST['appl_religion'])) {
	// 	$error8 =  "*";
	// }else{
	// 	$error8 = "";
	// }if (empty($_POST['appl_street'])) {
	// 	$error9 =  "*";
	// }else{
	// 	$error9 = "";
	// }if (empty($_POST['appl_zipc'])) {
	// 	$error10 =  "*";
	// }else{
	// 	$error10 = "";
	// }if (empty($_POST['appl_email'])) {
	// 	$error11 =  "*";
	// }else{
	// 	$error11 = "";
	// }
//restriction for fill all the field
	// $one = mysql_query("SELECT * FROM appl_info WHERE appl_email = '$_POST[appl_email]' ");
	// while ($row = mysql_fetch_array($one)) {
	// 	$a = $row['appl_email'];
	// }

	// 	if ( (!empty($_POST['appl_fname'])) && (!empty($_POST['appl_lname'])) && (!empty($_POST['appl_mname'])) && (!empty($_POST['appl_birthp']))
	// 		&& (!empty($_POST['appl_birthd'])) && (!empty($_POST['appl_nationality'])) && (!empty($_POST['appl_religion'])) && (!empty($_POST['appl_street'])) && (!empty($_POST['appl_zipc'])) && (!empty($_POST['appl_email'])) )
	// 	{
			$target = "../images/" . basename($_FILES['image']['name']);
			$image = $_FILES['image']['name'];
			// $target = "img/" . basename($_FILES['img']['name']);
			// $image = $_FILES['img']['name'];

			// $appl_fname = $_POST['appl_fname'];
			// $appl_lname = $_POST['appl_lname'];
			// $appl_mname = $_POST['appl_mname'];
			// $appl_birthp = $_POST['appl_birthp'];
			// $appl_birthd = $_POST['appl_birthd'];
			// $appl_age = date('Y') - substr($appl_birthd, 0, 4);
			// $appl_nationality = $_POST['appl_nationality'];
			// $appl_religion = $_POST['appl_religion'];
			// $appl_zipc = $_POST['appl_zipc'];
			// $appl_email = $_POST['appl_email'];
			// $appl_sex = $_POST['appl_sex'];
			// $appl_civils = $_POST['appl_civils'];
			// $appl_prov = $_POST['appl_prov'];
			// $appl_contactn = $_POST['appl_contactn'];
			// $appl_street = $_POST['appl_street'];




			// $stud_no = $_POST['stud_no'];
			// $fname = ucfirst(strtolower($_POST['fname']));
			// $lname = ucfirst(strtolower($_POST['lname']));
			// $mname = ucfirst(strtolower($_POST['mname']));
			
			// $sex = ucfirst(strtolower($_POST['sex']));
			// $course = ucfirst(strtolower($_POST['course']));
			// $dept = strtoupper($_POST['department']);
			// $address = ucfirst(strtolower($_POST['address']));
			// $yearlvl = $_POST['yearlvl'];
			// $cnumber = $_POST['cnumber'];
			// $bday = $_POST['bday'];
			// $age = date('Y') - substr($bday, 0, 4);
			// if (strtotime(date('Y-m-d')) - strtotime(date('Y') . substr($appl_birthd, 4, 6)) < 0)
			// {
			//     $appl_age--;

			// }
			// $email = $_POST['email'];
			// $status = $_POST['status'];
			// $eventc = $_POST['eventc'];
			//$name = $fname . $space . $mname . "." . $space . $lname;
			
			$sql = mysql_query("INSERT INTO appl_info(appl_img)VALUES('$image')");
			// $desc = "The admin ADD in Athletes information ID " . $stud_no. " and NAME:" .$fname." ".$lname ;
			// $act = "ADD";
			// $audit = mysql_query("INSERT INTO sdmo_audit(AUDIT_DESC,AUDIT_ACTION,AUDIT_DATE)VALUES('$desc','$act',now())");
			 mysql_query($sql);

			//uploading the image file
				// if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {

				// echo "<script type='text/javascript'>alert('Successful added')</script>";
				// }
				if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {

				echo "<script type='text/javascript'>alert('Successful added')</script>";
				}

			
			

		// }
		
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
									<li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
									</li>
									<li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
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
				 <form method="POST" action="">
				<div id="page-inner">
				   <div class="row">
						<div class="col-md-12">
							<div class="add-job_container">
								<div class="job-box">
									<div class="row no-ext-mrg sm-plix">
										<div class="col-sm-6 col-sm-8 col-sm-offset-2 col-md-offset-3">
											<div class="main-profile-detail">
												
												<!-- <img src="assets/img/img-2.jpg" id="img" alt="" class="img-circle img-responsive">
												<span class="btn btn-default btn-file">
													Upload Photo <input type="file" name="img" id="files" value="">
												</span> -->
												<input type="file" name="image" id="files" value=""><div class="container-fluid"><br></div>
												<img src="assets/img/img-2.jpg" id="image" class="thumbnail" style="height: 150px;width: 150px; overflow: hidden;" alt="Image">
												<script type="text/javascript">
					 			document.getElementById("files").onchange = function(){
					 				var reader = new FileReader();
					 				reader.onload = function(e){
					 					document.getElementById("image").src = e.target.result;
					 				};
					 				reader.readAsDataURL(this.files[0]);
					 			};
					 		</script>
											</div>
										</div>
									</div>
								</div>
								<!-- <script type="text/javascript">
					 			document.getElementById("files").onchange = function(){
					 				var reader = new FileReader();
					 				reader.onload = function(e){
					 					document.getElementById("img").src = e.target.result;
					 				};
					 				reader.readAsDataURL(this.files[0]);
					 			};
					 		</script>
								 -->
								<div class="row no-ext-mrg">
									<div class="col-sm-12">
										<a  class="button submit"><input type="submit" name="resume-bttn" class="button submit" value="Next">
										<i class="fa fa-arrow-circle-right"></i></a>
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


</html>
