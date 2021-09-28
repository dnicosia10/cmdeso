<?php
	$conn = mysql_connect("localhost","root")or die(mysql_error());
	$db = mysql_select_db("cmdeso_db")or die(mysql_error()); 



	$error1 = $error2 = $error3 = $error3_1 =$error4 =$error5 = $error6= " ";
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
			
			$title = mysql_real_escape_string($_POST['title']);
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
						<h4 class="page-title">Working Information</h4>
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
								
								<div class="job-box">


									<div class="job-box-filter">
										<div class="row">
											<div class="col-md-6 col-sm-6">
												<h4><i class="fa fa-map-marker" aria-hidden="true"></i>Working Expirience</h4>
											</div>
										</div>
									</div>
									<form method="POST" action="">
										<div class="row no-ext-mrg sm-plix">
										
										<div class="col-sm-6" >
											<h5>Type of Expirience<span class="error"><?php echo $error6 ?></span></h5>
											<select class="form-control input-lg" name="title">
												
												<option>Interm</option>
												<option>Work</option>
												
											</select>
									
										
									</div>
								</div>
									<div class="row no-ext-mrg sm-plix">

										<div class="col-sm-6" >
											<h5>Company Name<span class="error"><?php echo $error1 ?></span></h5>
											<input name="name" class="form-control" placeholder="Ex. Tarlac State...">
												
										</div>

										
										<div class="col-sm-6" style=" width: 25%">
											<h5 style="">Start<span class="error"><?php echo $error2 ?></span></h5>
											<input name="date_start" type="Date" class="form-control"  >
										</div>
										<div class="col-sm-6" style=" width: 25%;">
											<h5 >End<span class="error"><?php echo $error3_1 ?></span></h5>
											<input name="date_end" type="Date" class="form-control">
										</div>
									</div>
									<div class="row no-ext-mrg sm-plix">
										
										<div class="col-sm-6" >
											<h5>Position<span class="error"><?php echo $error4 ?></span></h5>
											<input name="Position" type="text" class="form-control"  >
											
										</div>
										<div class="col-sm-6"  >
											<h5>About<span class="error"><?php echo $error5 ?></span></h5>
											<input name="desc" type="text" class="form-control"  >
											
										</div>
									</div>
									
								</div>
								
								<div class="row no-ext-mrg">
									<div class="col-sm-6" style="width: 100%;">
										<input type="submit" name="resume-bttn-add" class="button submit" value="Add" style="float: ; border-style: none;">
									
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
