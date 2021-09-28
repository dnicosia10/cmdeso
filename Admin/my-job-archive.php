<?php
session_start();

    if((!isset($_SESSION["uName"]))&&(!isset($_SESSION["uPass"]))&&('admin'!=$_SESSION["name"]) ) {
  
   header("Location:\.\home3/home/signup/login.php");
  }if ('admin'!=$_SESSION["name"]) {
  	 
    header("Location:\.\home3/home/signup/login.php");
  	  }

?>
<?php

  	$b = $a ="";
	$conn = mysql_connect("localhost","root")or die(mysql_error());
	$db = mysql_select_db("cmdeso_db")or die(mysql_error()); 

if (isset($_POST['update-bttn'])) {
		$id = $_POST['val']; 
			$company_name = mysql_real_escape_string($_POST['Jobfair-name']);
			$company_addr = mysql_real_escape_string($_POST['Jobfair-venue']);
			$date = $_POST['Jobfair-date'];
			$start = $_POST['Jobfair-start'];
			$end = $_POST['Jobfair-end'];
	 	
	 	$update = mysql_query("UPDATE jobfair_info SET jobfair_title='$company_name',jobfair_address='$company_addr',jobfair_date = '$date' ,jobfair_datetime_start = '$start' ,jobfair_datetime_end = '$end' WHERE jobfair_id = '$id' ");
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
		<style type="text/css">

		</style>
	</head>
	<body>
		  
	<div id="wrapper">
			<div class="navbar navbar-inverse navbar-fixed-top"  style="background: ;width: 100%;">
				<div class="container"  style="padding-left: 0px; background-color: ; width: 100%;">
					<div class="navbar-header col-sm-6" style="background: ; " >
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="index.php" style="float: left; background: ;"><img src="assets/img/logo.png" class="img-responsive" alt=""></a>
					</div>
					<div class="navbar-collapse col-sm-6" style="background-color: ; float: right;" >
						<ul class="nav navbar-top-links navbar-right"> 
							
							<!-- /.dropdown -->
							<li class="dropdown">

								<a class="dropdown-toggle" data-toggle="dropdown" href="#">
									<i class="fa fa-bell fa-fw"></i>
									<span class="count-notification"><?php 
									$sql = mysql_query("SELECT * FROM appl_info WHERE appl_log_date = now()    ");
												$num = mysql_num_rows($sql);
									$sql1 = mysql_query("SELECT * FROM job_onjob_info WHERE onjob_datetime = now()    ");
												$num1 = mysql_num_rows($sql1);
									$sql2 = mysql_query("SELECT * FROM admin_job_fair_info WHERE job_log = now()    ");
												$num2 = mysql_num_rows($sql2);
												echo $num2 + $num + $num1;
												
												
									?></span>
								</a>
								<ul class="dropdown-menu dropdown-alerts">
									<li>
										<a href="#">
											<div>
												<i class="fa fa-user fa-fw"></i> 
												<?php
												$sql = mysql_query("SELECT * FROM appl_info WHERE appl_log_date = now()    ");
												$num = mysql_num_rows($sql);
												echo $num;
												$_SESSION['num1'] = $num;
												?>
												New Applicants
												<span class="pull-right text-muted small">Today</span>
											</div>
										</a>
									</li>
									<li class="divider"></li>
									<li>
										<a href="#">
											<div>
												<i class="fa fa-tasks fa-fw"></i><?php
												$sql = mysql_query("SELECT * FROM job_onjob_info WHERE onjob_datetime = now()    ");
												$num = mysql_num_rows($sql);
												echo $num;
												$_SESSION['num2'] = $num;
												?> New Job's
												<span class="pull-right text-muted small">Today</span>
											</div>
										</a>
									</li>
									<li class="divider"></li>
									<li>
										<a href="#">
											<div>
												<i class="fa fa-gear fa-fw"></i><?php
												$sql = mysql_query("SELECT * FROM admin_job_fair_info WHERE job_log = now()    ");
												$num = mysql_num_rows($sql);
												echo $num;
												$_SESSION['num3'] = $num;
												?> New Employer's
												<span class="pull-right text-muted small">Today</span>
											</div>
										</a>
									</li>
									<li class="divider">
										
								
								</ul>

								<!-- /.dropdown-alerts -->
							</li>
							<!-- /.dropdown -->
							<li class="dropdown">
								<a class="dropdown-toggle" data-toggle="dropdown" href="#">
									<i class="fa fa-user-circle-o"></i>
								</a>
								<ul class="dropdown-menu dropdown-user">
									
									<li><a href="account-setting.php"><i class="fa fa-gear fa-fw"></i>Account Settings</a>
									</li>
									<li class="divider"></li>
									<li><a href="../home/signup/login.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
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
					<div style="margin-top:10%; margin-left: 10%; margin-bottom: 10%;margin-right: 10%;background-color: ">
						<span >
						
						<img src="assets/img/cmd.png"  class="img-responsive " style="height: 100px;  padding-left: 10%;padding-right: 10%; width:100%;">
					</span>
					</div>
					<ul class="nav" id="main-menu">
						
						<li class="Active">
							<a href="index.php"><i class="fa fa-cog" aria-hidden="true"></i>Dashboard</a>
						</li>
						
						<li>
							<a href="candidate.php"><i class="fa fa-user-circle-o" aria-hidden="true"></i>My Applicants</a>
						</li>
						
						<li>
							<a href="javascript:void(0)"><i class="fa fa-clone" aria-hidden="true"></i>Manage Jobs Fair <span class="fa arrow"></span></a>
							<ul class="nav nav-second-level">
								<li>
							<a href="job-fair.php"><i class="fa fa-file-text" aria-hidden="true"></i>Create Jobfair</a>
								</li>
								<li>
									<a href="my-jobfair.php"><i class="active-job fa fa-circle-o-notch" aria-hidden="true"></i>View Jobfair</a>
								</li>
								<li>
									<a href="my-jobfair-archive.php"><i class="expire-job fa fa-circle-o-notch" aria-hidden="true"></i>Archive Jobfair</a>
								</li>
							  
							</ul>
						</li>
						<li>
							<a href="javascript:void(0)"><i class="fa fa-clone" aria-hidden="true"></i>Manage Company <span class="fa arrow"></span></a>
							<ul class="nav nav-second-level">
								<li>
							<a href="create-company.php"><i class="fa fa-file-text" aria-hidden="true"></i>Add Company</a>
								</li>
								<li>
									<a href="my-company.php"><i class="active-job fa fa-circle-o-notch" aria-hidden="true"></i>View Company</a>
								</li>
								<li>
									<a href="my-company-archive.php"><i class="expire-job fa fa-circle-o-notch" aria-hidden="true"></i>Archived Company</a>
								</li>
							  
							</ul>
						</li>


						<li class="active">
							<a href="javascript:void(0)"><i class="fa fa-clone" aria-hidden="true"></i>Manage Jobs <span class="fa arrow"></span></a>
							<ul class="nav nav-second-level">
								<li>
							<a href="add-job.php"><i class="fa fa-plus-circle" aria-hidden="true"></i>Add Jobs</a>
								</li>
								<li>
									<a href="my-job-active.php"><i class="active-job fa fa-circle-o-notch" aria-hidden="true"></i>Active Jobs</a>
								</li>
								
							   <li class="active">
									<a href="my-job-archive.php"><i class="expire-job fa fa-circle-o-notch" aria-hidden="true"></i>Archive Jobs</a>
								</li>
							</ul>
						</li>
					 
						
						
						
						<li>
							<a href="my-profile.php"><i class="fa fa-user-circle" aria-hidden="true"></i>My Profile</a>
						</li>
						<li>
							<a href="log-off.php"><i class="fa fa-plus" aria-hidden="true"></i>Add Admin Account</a>
						</li>
						<li>
							<a href="system_log.php"><i class="fa fa-user" aria-hidden="true"></i>Activity Log</a>
						</li>
						
						<li class="log-off">
							<a href="../home/signup/login.php"><i class="fa fa-power-off" aria-hidden="true"></i>Logout</a>
						</li>
					</ul>
				</div>
			</nav>
			<!-- /. NAV SIDE  -->
			
			<div id="page-wrapper" >

				 <div class="row bg-title">

					<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">

						<h4 class="page-title">Archive Jobs</h4>
					</div>
					<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
						<ol class="breadcrumb">
							<li><a href="index.php">Dashboard</a></li>
							<li class="active">Archive Jobs</li>
						</ol>
					</div>
					<!-- /.col-lg-12 -->
				</div>              
				 <!-- /. ROW  -->
					<div id="page-inner" style="height: auto;">
				   <div class="row" style="height: auto;">
						<div class="col-md-12" style="height: auto;">
							<div class="chat_container" style="height: auto;">
								<div class="job-box" style="height: auto;">
									<div class="job-box-filter" style="height: auto;">



										<div class="job-box-filter">
										<div class="row">
											<div class="col-md-6 col-sm-6">
											<form method="POST">
											<label>Show 
											<select name="datatable_length" class="form-control input-sm">
											<option value="10">10</option>
											<option value="25">25</option>
											<option value="50">50</option>
											<option value="100">100</option>
											<?php
													$sql2 = mysql_query("SELECT * FROM job_onjob_info ");
									
												//### fetch data as array
												while ($row = mysql_fetch_array($sql2))
												{//## echo fetched data to display
													$num1 += 1;
												 } 
											?>
											<option value="<?php echo $num1; ?>" >All</option>
											</select>
											<button type="submit" name="entries">Entries</button></label>
										</form>
											entries</label>
											</div>
											<div class="col-md-6 col-sm-6">
												<div class="filter-search-box text-right">
													<form method="POST">
													<label>Search:<input type="search" name="eventc" class="form-control input-sm" placeholder=""><button type="submit" name="okay">Search</button></label>
													</form>
												</div>
											</div>
										</div>
									</div>




 										<?php
									

									if( (!isset($_POST['okay']))&&(!isset($_POST['entries']))&&(!isset($_POST['edit'])) ){
									?>
									
									<?php
									
									
									$sql = mysql_query("SELECT 
										onjob_id,
										onjob_title,
										onjob_position,
										onjob_req_course,
										onjob_status,
										onjob_location,
										onjob_summary,
										onjob_req,
										onjob_type,
										job_img
										 FROM job_onjob_info JOIN admin_job_fair_info WHERE onjob_archive='ON' AND onjob_status = 'Active' AND job_onjob_info.job_id = admin_job_fair_info.job_id LIMIT 10  ");
									//$sql = mysql_query("SELECT * FROM admin_job_fair_info WHERE job_archive = 'ON' LIMIT 10  ");
									while ($row = mysql_fetch_array($sql))
									{//## echo fetched data to display
									//$num += 1;
									//$datatable_length = 10;
									//$format = date_format(date_create($row['jobfair_date'])," F  d,  Y ");
									?>
 										<article>
										<div class="brows-job-list">
											<div class="col-md-1 col-sm-2 small-padding">
												<div class="brows-job-company-img">
													<img src="assets/img/<?php echo $row["job_img"]?>" class="img-responsive" alt="">
												</div>
											</div>
											<div class="col-md-6 col-sm-5">
												<div class="brows-job-position">
													<h4><?php echo $row['onjob_title']; ?></h4>
													<p><?php echo $row['onjob_position']; ?></p>
													
												</div>
											</div>
											<div class="col-md-3 col-sm-3">
												<div class="brows-job-location">
													<span class="recent-job-status"><?php echo $row['onjob_location']; ?></span>
												</div>
											</div>
											<div class="col-md-4 col-sm-4	">
												<div class="job-action">
													<form method="POST">
												<input type="hidden" name="val" value="<?php echo $row['onjob_id']; ?>">
												
												<button name="Archive" style="background-color: transparent;border-style: none;"><a class="delete"  title="Un-Archive"><i class="fa fa-check-square-o" aria-hidden="true"></i></a></button>
												</form>		
												</div>
											</div>
										</div>
									</article>

											
								<!-- ./Job Lists-->
								<!-- Job Lists-->


									<?php 
									} 
									}if (isset($_POST['okay'])) {

										$search = $_POST['eventc'];

								$sqll = mysql_query("SELECT * FROM job_onjob_info  WHERE  onjob_title LIKE '%$search%' OR onjob_position LIKE '%$search%' OR onjob_location LIKE '%$search%' AND onjob_status = 'Active' AND onjob_archive='ON' ");

								//### fetch data as array
								while ($row = mysql_fetch_array($sqll))
								{//## echo fetched data to display
								//$num += 1;
								//$format = date_format(date_create($row['jobfair_date'])," F  d,  Y ");
										?>
										<article>
										<div class="brows-job-list">
											<div class="col-md-1 col-sm-2 small-padding">
												<div class="brows-job-company-img">
													<?php
													$fk = $row['job_id'];
													$sqll1 = mysql_query("SELECT * FROM admin_job_fair_info  WHERE  job_id = '$fk' ");
													while ($row1 = mysql_fetch_array($sqll1))
														{
													?>
													<img src="assets/img/<?php echo $row1["job_img"]; ?>" class="img-responsive" alt="">
													<?php } ?>
												</div>
											</div>
											<div class="col-md-6 col-sm-5">
												<div class="brows-job-position">
													<h4><?php echo $row['onjob_title']; ?></h4>
													<p><?php echo $row['onjob_position']; ?></p>
													
												</div>
											</div>
											<div class="col-md-3 col-sm-3">
												<div class="brows-job-location">
													<span class="recent-job-status"><?php echo $row['onjob_location']; ?></span>
												</div>
											</div>
											<div class="col-md-4 col-sm-4	">
												<div class="job-action">
													<form method="POST">
												<input type="hidden" name="val" value="<?php echo $row['onjob_id']; ?>">
												
												<button name="Archive" style="background-color: transparent;border-style: none;"><a class="delete"  title="Un-Archive"><i class="fa fa-check-square-o" aria-hidden="true"></i></a></button>
												</form>		
												</div>
											</div>
										</div>
									</article>
									<?php }}if(isset($_POST['entries'])){
										$datatable_length = $_POST['datatable_length'];

										//$datatable_length = 10;

										$num ="";
										$sql = mysql_query("SELECT * FROM job_onjob_info WHERE onjob_archive='ON' AND onjob_status = 'Active' LIMIT $datatable_length ");
										while ($row = mysql_fetch_array($sql))
										{//## echo fetched data to display
										//$num += 1;
										//$format = date_format(date_create($row['jobfair_date'])," F  d,  Y ");
									 ?>


									<article>
										<div class="brows-job-list">
											<div class="col-md-1 col-sm-2 small-padding">
												<div class="brows-job-company-img">
													<?php
													$fk = $row['job_id'];
													$sqll1 = mysql_query("SELECT * FROM admin_job_fair_info  WHERE  job_id = '$fk' ");
													while ($row1 = mysql_fetch_array($sqll1))
														{
													?>
													<img src="assets/img/<?php echo $row1["job_img"]; ?>" class="img-responsive" alt="">
													<?php } ?>
												</div>
											</div>
											<div class="col-md-6 col-sm-5">
												<div class="brows-job-position">
													<h4><?php echo $row['onjob_title']; ?></h4>
													<p><?php echo $row['onjob_position']; ?></p>
													
												</div>
											</div>
											<div class="col-md-3 col-sm-3">
												<div class="brows-job-location">
													<span class="recent-job-status"><?php echo $row['onjob_location']; ?></span>
												</div>
											</div>
											<div class="col-md-4 col-sm-4	">
												<div class="job-action">
													<form method="POST">
												<input type="hidden" name="val" value="<?php echo $row['onjob_id']; ?>">
												
												<button name="Archive" style="background-color: transparent;border-style: none;"><a class="delete"  title="Un-Archive"><i class="fa fa-check-square-o" aria-hidden="true"></i></a></button>
												</form>		
												</div>
											</div>
										</div>
									</article>

									 <?php
									}}if (isset($_POST['edit'])) {
											
											$id = $_POST['val']; 
											
											echo "<script> location.replace('my-job-update.php?id=$id'); </script>";
									 
									 	
											 		echo "<script> location.replace('my-job-active.php'); </script>";
												}if (isset($_POST['view'])) {
													$id = $_POST['val']; 
													echo "<script> location.replace('my-job-view.php?id=$id'); </script>";
												}if (isset($_POST['Archive'])) {
													$id = $_POST['val']; 
													
													$Archive = "OFF";
											 	
											 		$update = mysql_query("UPDATE job_onjob_info SET onjob_archive='$Archive' WHERE onjob_id = '$id' ");
											 		echo "<script> location.replace('my-company.php'); </script>";
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