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
	$_SESSION['num'] =$num;


 	$error1 = $error2 = $error3 = $error3_1 =$error4 =$error5 = $error6= " ";
// 		$two = mysql_query("SELECT * FROM appl_info WHERE acct_id = '$_SESSION[num] ' ");
// 	while ($row = mysql_fetch_array($one)) {
// 		$b = $row['acct_id'];
// 	}
// if ($b !=  $num) {


if (isset($_POST['resume-bttn-add']))
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
	}if (empty($_POST['Address'])) {
		$error3 =   "*";
	}else{
		$error3 = "";
	}if (empty($_POST['date_end'])) {
		$error3_1 =   "*";
	}else{
		$error3_1 = "";
	}if (empty($_POST['course'])) {
		$error4 =   "*";
	}else{
		$error4 = "";
	}if (empty($_POST['major'])) {
		$error5 =   "*";
	}else{
		$error5 = "";
	}if (empty($_POST['title'])) {
		$error6 =   "*";
	}else{
		$error6 = "";
	}
//restriction for fill all the field
		if ( (!empty($_POST['name'])) && (!empty($_POST['Address']))&& (!empty($_POST['course'])) && (!empty($_POST['major'])) && (!empty($_POST['date_start']))&& (!empty($_POST['date_end'])) && (!empty($_POST['title']))   )
		{
			
			$title = mysql_real_escape_string($_POST['title']);
			$name = mysql_real_escape_string($_POST['name']);
			$date_start = $_POST['date_start'];
			$date_end = $_POST['date_end'];
			$Address = mysql_real_escape_string($_POST['Address']);
			$course = $_POST['course'];
			$major = $_POST['major'];
			$fk = $num;


			
			$sql = mysql_query("INSERT INTO appl_info_edu(acct_id,edu_title,edu_name,edu_addr,edu_date_grad_start,edu_date_grad_end,edu_course,edu_course_major)VALUES('$fk','$title','$name','$Address','$date_start','$date_end','$course','$major')");
			// $desc = "The admin ADD in Athletes information ID " . $stud_no. " and NAME:" .$fname." ".$lname ;
			// $act = "ADD";
			// $audit = mysql_query("INSERT INTO sdmo_audit(AUDIT_DESC,AUDIT_ACTION,AUDIT_DATE)VALUES('$desc','$act',now())");
			 mysql_query($sql);
			 echo "<script> location.replace('education-elem.php'); </script>";
			
			
			

		}
		else
		{
			echo "<script type='text/javascript'>alert('Fill the field')</script>";
		}
}
// }else{
// 	echo "<script> location.replace('resume-seminar.php'); </script>";
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
						<a class="navbar-brand" href="index.php"><img src="assets/img/logo.png" class="img-responsive" alt=""></a>
					</div>
					<div class="navbar-collapse">
						<ul class="nav navbar-top-links navbar-right"> 
							
							<!-- /.dropdown -->
							
							<!-- /.dropdown -->
							<li class="dropdown">
								<a class="dropdown-toggle" data-toggle="dropdown" href="#">
									<i class="fa fa-user-circle" aria-hidden="true"></i>
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
						<h4 class="page-title">Education Information</h4>
					</div>
					<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
						<ol class="breadcrumb">
							<li ><a href="elem-add.php">Elementary</a></li>
							<li ><a href="college-add.php">Highschool</a></li>
							<li class="active">College and Others</li>
							
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


									<div class="job-box-filter">
										<div class="row">
											<div class="col-md-6 col-sm-6">
												<h4><i class="fa fa-map-marker" aria-hidden="true"></i>College's and Other</h4>
											</div>
										</div>
									</div>
									<form method="POST" action="">
										<div class="row no-ext-mrg sm-plix">
										
										
								</div>
									<div class="row no-ext-mrg sm-plix">
									<div class="col-sm-6" >
											<h5>Educational Level<span class="error"><?php echo $error6 ?></span></h5>
											<select class="form-control input-lg" name="title">
												<option></option>
												<option>Bachelor's Degree</option>
												<option>Master's Degree</option>
												<option>Vocational</option>
												
											</select>
									
										
									</div>
										<div class="col-sm-6" >
											<h5>School Name<span class="error"><?php echo $error1 ?></span></h5>
											<input name="name" class="form-control" placeholder="Ex. Tarlac State...">
												
										</div>

										
										<div class="col-sm-3" style=" width:;">
											<h5 style="">Start<span class="error"><?php echo $error2 ?></span></h5>
											<input name="date_start" type="Date" class="form-control"  >
										</div>
										<div class="col-sm-3" style=" width:;">
											<h5 >End<span class="error"><?php echo $error3_1 ?></span></h5>
											<input name="date_end" type="Date" class="form-control">
										</div>
										<div class="col-sm-6"  style="width: ;">
											<h5>Address<span class="error"><?php echo $error3 ?></span></h5>
											<input name="Address" type="text" class="form-control" placeholder="Ex. Tarlac city, Gerona Street #..." >
									</div>
									<div class="row no-ext-mrg sm-plix">
										
										
											
										</div>
									</div>
									<div class="row no-ext-mrg sm-plix">
										<div class="col-sm-6" >

											<h5>Course<span class="error"><?php echo $error4 ?></span></h5>
											<select class="form-control input-lg" name="course">
												<option></option>
												<option>Bachelor of Agriculture and Related Fields</option>
												<option>Bachelor of Engineering</option>
												<option>Bachelor of Science and Math</option>
												<option>Bachelor of Information Technology</option>
												<option>Bachelor of Teacher Education</option>
												<option>Bachelor of Health Sciences</option>
												<option>Bachelor of Arts and Humanities</option>
												<option>Bachelor of Social and Behavioral Sciences</option>
												<option>Bachelor of Business Administration and Related Courses</option>
												<option>Bachelor of Architecture</option>
												<option>Bachelor of Maritime</option>
												<option>Bachelor of Communication</option>
												<option>Others</option>
											</select>
										</div>
										<div class="col-sm-6">

											<h5>Major<span class="error"><?php echo $error5 ?></span></h5>
											<select class="form-control input-lg" name="major">
												<option></option>
												<option>Agro-Forestry</option>
												<option>Veterinatry Medicine</option>
												<option>Agricultural Engineering</option>
												<option>Agribusiness/Management</option>
												<option>Agricultural Entrepreneurship</option>
												<option>Agricultural Technology</option>
												<option>Agriculture</option>
												<option>Fisheries</option>
												<option>Food Technology</option>
												<option>Agricultural Economics</option>
												<option>Mechanical</option>
												<option>Electronics</option>
												<option>Communication</option>
												<option>Metallurgical/Mining</option>
												<option>Computer</option>
												<option>Biomedical</option>
												<option>Chemical</option>
												<option>Geodetic</option>
												<option>Electrical</option>
												<option>Meteorological</option>
												<option>Goelogical</option>
												<option>Sanitary Engineering</option>
												<option>Chemical Engineering</option>
												<option>Industrial Engineering</option>
												<option>Civil Engineering</option>
												<option>Electronics and Communication Engineering</option>
												<option>Petroleum Engineering</option>
												<option>Bio Chemical Engineering</option>
												<option>Mathematics</option>
												<option>Physics</option>
												<option>Biology</option>
												<option>Chemistry</option>
												<option>Marine Biology/Science</option>
												<option>Applied Physics</option>
												<option>Geology</option>
												<option>Earth Science</option>
												<option>Applied Mathematics</option>
												<option>Statistics/Applied Statistics</option>
												<option>Atmospheric Science</option>
												<option>Environmental Science</option>
												<option>Information Technology and Computing Studies</option>
												<option>Multimedia</option>
												<option>Animation</option>
												<option>Programming</option>
												<option>Computer Science</option>
												<option>Information System Management</option>
												<option>Bachelor in Library Science & Information System Major in System Analysis</option>
												<option>Science</option>
												<option>Reading</option>
												<option>English</option>
												<option>Educational Media/Technology</option>
												<option>Special Education (SPED)</option>
												<option>Human Kinetics</option>
												<option>Physical Education and Sports Science</option>
												<option>Physical Education major in School PE</option>
												<option>Early Childhood Education</option>
												<option>Environmental Planning</option>
												<option>MAPEH</option>
												<option>Music Education</option>
												<option>Art Education</option>
												<option>Health Education</option>
												<option>Pharmacy</option>
												<option>Radiology Technology</option>
												<option>Medical Technology</option>
												<option>Physical Therapy</option>
												<option>Nutrition</option>
												<option>Creative and Performing Arts</option>
												<option>Religious Education</option>
												<option>Philosophy</option>
												<option>Theology</option>
												<option>Psychology</option>
												<option>Social Work</option>
												<option>Human Development</option>
												<option>Guidance and Counseling</option>
												<option>Accountancy</option>
												<option>Business Data Outsourcing</option>
												<option>Business Process Outsourcing</option>
												<option>Construction Management</option>
												<option>Tourism</option>
												<option>Architecture</option>
												<option>Landscape Architecture</option>
												<option>Interior Design</option>
												<option>Environmental Planning</option>
												<option>Fine Arts</option>
												<option>Urban Planning</option>
												<option>Marine Transportation</option>
												<option>Communication</option>
												<option>Journalism</option>
												<option>Broadcasting</option>
												<option>Development Communication</option>
												<option>None</option>
												<option>Others</option>
											</select>
										</div>
										
									</div>	
								</div>
								
								<div class="row no-ext-mrg">
									<div class="col-sm-12">
										<input type="submit" name="resume-bttn-add" class="button submit" value="Add">
										
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
