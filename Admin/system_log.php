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
						
						<li class="">
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


						<li>
							<a href="javascript:void(0)"><i class="fa fa-clone" aria-hidden="true"></i>Manage Jobs <span class="fa arrow"></span></a>
							<ul class="nav nav-second-level">
								<li>
							<a href="add-job.php"><i class="fa fa-plus-circle" aria-hidden="true"></i>Add Jobs</a>
								</li>
								<li>
									<a href="my-job-active.php"><i class="active-job fa fa-circle-o-notch" aria-hidden="true"></i>Active Jobs</a>
								</li>
								
							   <li>
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
						<li class="active">
							<a href="system_log.php"><i class="fa fa-user" aria-hidden="true"></i>Activity Log</a>
						</li>
						
						<li class="log-off">
							<a href="../home/signup/login.php"><i class="fa fa-power-off" aria-hidden="true"></i>Logout</a>
						</li>
					</ul>
				</div>
			</nav>      
			<!-- /. NAV TOP  -->
			<!-- /. NAV SIDE  -->
			<div id="page-wrapper" >
				<div class="row bg-title">
					<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
						<h4 class="page-title">History</h4>
					</div>
					<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
						<ol class="breadcrumb">
							<li><a href="index.php">Dashboard</a></li>
							<li class="active">Activity Log</li>
						</ol>
					</div>
					<!-- /.col-lg-12 -->
				</div>              
				 <!-- /. ROW  -->
				<div id="page-inner">
				    <div class="row bott-wid">
						<div class="col-md-3 col-sm-6">
							<div class="widget unique-widget">
								<div class="row"><a href="system_log-employer.php">
									<div class="widget-caption info">
									<div class="col-xs-4 no-pad">
											<i class="icon icon-profile-male"></i>
										</div>
										<div class="col-xs-8 no-pad">
											<div class="widget-detail">
												<h3>Company</h3>
												
											</div>
										</div>
									
									</div>
									</a>
								</div>
							</div>
						</div>
						<div class="col-md-3 col-sm-6">
							<div class="widget unique-widget">
								<div class="row"><a href="system_log-applicants.php">
									<div class="widget-caption danger">
										
										<div class="col-xs-4 no-pad">
											<i class="icon icon-happy"></i>
										</div>
										<div class="col-xs-8 no-pad">
											<div class="widget-detail">
												<h3>Applicants</h3>
												
											</div>
										</div>
									
									</div></a>
								</div>
							</div>
						</div>
						<div class="col-md-3 col-sm-6">
							<div class="widget unique-widget">
								<div class="row">
									<a href="system_log-jobs.php">
									<div class="widget-caption sucess">
										<div class="col-xs-4 no-pad">
											<i class="icon icon-basket"></i>
										</div>
										<div class="col-xs-8 no-pad">
											<div class="widget-detail">
												<h3>Jobs</h3>
												
											</div>
										</div>
									</div>
								</div>
							</a>
							</div>
						</div>
						<div class="col-md-3 col-sm-6">
							<div class="widget unique-widget" style="background-color: #baf7ba;">
								<div class="row" class="">
									<a href="system_log.php">
									<div class="widget-caption warning">
										<div class="col-xs-4 no-pad">
											<i class="icon icon-trophy"></i>
										</div>
										<div class="col-xs-8 no-pad">
											<div class="widget-detail">
												<h3>Job Fair</h3>
												
											</div>
										</div>
									</div>
								</a>
								</div>
							</div>
						</div>
					</div>
				
			          
				 <!-- /. ROW  -->
				
				   <div class="row">
						<div class="col-md-12">
							<form method="POST">
							<div class="chat_container">

								<div class="job-box">
									<div class="job-box-filter">
										<div class="row">
											
											<div class="col-sm-12">
											
											<div class="col-md-2" >
												<label> 
												<select name="datatable_length"  class="form-control ">
													<option value="5">5</option>
													<option value="25">25</option>
													<option value="50">50</option>
													<option value="100">100</option>

													<?php
															$sql2 = mysql_query("SELECT * FROM jobfair_info  ");
											
														//### fetch data as array
														while ($row = mysql_fetch_array($sql2))
														{//## echo fetched data to display
															$num1 += 1;
														 } 
													?>
													<option value="<?php echo $num1; ?>" >All</option>
													<?php?>
											</select>
											</label>
												</div>
												<div class="col-md-1" style="padding-left: 0px;">
													<button class="btn" type="submit" name="entries">Entries</button>
												</div>
												</form>
											
											<div class="col-md-5" style="padding-right: 0px;">
												<form method="POST">
													
													
												<div class="col-md-8" style="padding-right: 0px;">
													<label><input type="date"  name="start" class="form-control" placeholder=""></label>
												
													<label><input style="padding-right: 0px;" type="date"  name="end" class="form-control" placeholder=""></label>
												</div>
												<div class="col-md-4" style="padding-left: 0px;">
													<button type="submit" class="btn" style="height: 70px;float: left;" name="range">Date Range</button>
												</div>

												</form>
											</div>
											<form method="POST">
											<div class="col-md-4">
												
													<label><input style="width: ;" type="search"  name="eventc" class="form-control input-sm" placeholder="Enter text here"><button type="submit" name="okay">Search</button></label>
													
												
											</div>
										</form>
											<div class="limiter">
		
			<div class="wrap-table100">
				
				<div class="table100">
					<table >
						
								<?php 
								
								$num="";
								if (isset($_POST['okay'])) {
								$search = $_POST['eventc'];

								?>
								<thead >
									<tr class="table100-head" >
									<th class="column1"><a href="#" title="All Candidate" class="filtsec active" >All (<?php $sqll = mysql_query("SELECT * FROM jobfair_info  WHERE  jobfair_title LIKE '%$search%' OR jobfair_datetime_start LIKE '%$search%' OR jobfair_datetime_end LIKE '%$search%'  ");
								//### fetch data as array
								$num = mysql_num_rows($sqll); echo $num; ?>)</a></th>
									<th class="column3">Title</th>
									<th class="column3">Date</th>
									<th class="column3">Time </th>
									
									<th class="column3" style="width:450px; text-align: center;	 ">Address</th>
									<th class="column3" style="padding-right:50px text-align:center; ">Date Log</th>
									<th class="column3" style="padding-right:50px text-align:center; "></th>
									</tr>
									</thead>
									<tbody>

								<?php
								
								
								
								$sqll = mysql_query("SELECT * FROM jobfair_info  WHERE  jobfair_title LIKE '%$search%' OR jobfair_datetime_start LIKE '%$search%' OR jobfair_datetime_end LIKE '%$search%'  ");
								//### fetch data as array
								$num = mysql_num_rows($sqll);
								while ($row = mysql_fetch_array($sqll))
								{//## echo fetched data to display
								$format_log = date_format(date_create($row['jobfair_log'])," F  d,  Y ");
								$format = date_format(date_create($row['jobfair_date'])," F  d,  Y");

								?>
									<tr>

									<td class="column2" ></td>
									<td class="column3" style="padding-top: 10px;padding-bottom: 10px;"><?php echo $row['jobfair_title'] ; ?></td>
									<td class="column3" ><?php echo  $format ; ?></td>
									<td class="column3"><?php echo $row['jobfair_datetime_start']." - ".$row['jobfair_datetime_end'] ; ?></td>
									
									<td class="column3 style='padding-right:;'"><?php echo $row['jobfair_address'] ; ?></td>
									<td class="column3 style='padding-right:30px;'">
										<?php echo  $format_log ; ?>
											
									</td>
									<td class="column2"></td>
									</tr>

									<?php
									$num ="";
									}

									}if( (!isset($_POST['okay']))&&(!isset($_POST['range']))&&(!isset($_POST['entries']))&&(!isset($_POST['edit'])) ){
									?>
									<thead >
									<tr class="table100-head" >
									<th class="column1"><a href="#" title="All Candidate" class="filtsec active" >All (<?php $sql = mysql_query("SELECT * FROM jobfair_info    ");
									$num = mysql_num_rows($sql); echo $num; ?>)</a></th>
									<th class="column3">Title</th>
									<th class="column3">Date</th>
									<th class="column3">Time </th>
									
									<th class="column3" style="width:450px; text-align: center;	 ">Address</th>
									<th class="column3" style="padding-right:50px text-align:center; ">Date Log</th>
									<th class="column3" style="padding-right:50px text-align:center; "></th>
									</tr>
									</thead>
									<tbody>

									<?php
									
									$sql = mysql_query("SELECT * FROM jobfair_info   ");
									$num = mysql_num_rows($sql);
									while ($row = mysql_fetch_array($sql))
									{//## echo fetched data to display
									$num ="";
								
									//$datatable_length = 10;
									$format = date_format(date_create($row['jobfair_date'])," F  d,  Y ");
									$format_log = date_format(date_create($row['jobfair_log'])," F  d,  Y ");
									?>
									<tr>

									<td class="column2" ></td>
									<td class="column3" style="padding-top: 10px;padding-bottom: 10px;"><?php echo $row['jobfair_title'] ; ?></td>
									<td class="column3" ><?php echo  $format ; ?></td>
									<td class="column3"><?php echo $row['jobfair_datetime_start']." - ".$row['jobfair_datetime_end'] ; ?></td>
									
									<td class="column3 style='padding-right:;'"><?php echo $row['jobfair_address'] ; ?></td>
									<td class="column3 style='padding-right:30px;'">
										<?php echo  $format_log ; ?>
											
									</td>
									<td class="column2"></td>
									</tr>
									<?php 
									}  }
								$num="";
								if (isset($_POST['range'])) {


								?>
								<thead >
									<tr class="table100-head" >
									<th class="column1"><a href="#" title="All Candidate" class="filtsec active" >All (<?php $start = $_POST['start'];
								$end = $_POST['end'];
								$sqll = mysql_query("SELECT * FROM jobfair_info  WHERE  jobfair_log BETWEEN '$start' AND '$end' ");
								$num = mysql_num_rows($sqll); echo $num; ?>)</a></th>
									<th class="column3">Title</th>
									<th class="column3">Date</th>
									<th class="column3">Time </th>
									
									<th class="column3" style="width:450px; text-align: center;	 ">Address</th>
									<th class="column3" style="padding-right:50px text-align:center; ">Date Log</th>
									<th class="column3" style="padding-right:50px text-align:center; "></th>
									</tr>
									</thead>
									<tbody>

								<?php
								
								$start = $_POST['start'];
								$end = $_POST['end'];
								$sqll = mysql_query("SELECT * FROM jobfair_info  WHERE  jobfair_log BETWEEN '$start' AND '$end' ");
								$num = mysql_num_rows($sqll);
								//### fetch data as array
								while ($row = mysql_fetch_array($sqll))
								{//## echo fetched data to display
								$format_log = date_format(date_create($row['jobfair_log'])," F  d,  Y ");
								$format = date_format(date_create($row['jobfair_date'])," F  d,  Y");
								$num ="";
								
								?>
								<tr>

									<td class="column2" ></td>
									<td class="column3" style="padding-top: 10px;padding-bottom: 10px;"><?php echo $row['jobfair_title'] ; ?></td>
									<td class="column3" ><?php echo  $format ; ?></td>
									<td class="column3"><?php echo $row['jobfair_datetime_start']." - ".$row['jobfair_datetime_end'] ; ?></td>
									
									<td class="column3 style='padding-right:;'"><?php echo $row['jobfair_address'] ; ?></td>
									<td class="column3 style='padding-right:30px;'">
										<?php echo  $format_log ; ?>
											
									</td>
									<td class="column2"></td>
									</tr>

									<?php
									}
									}if(isset($_POST['entries'])){
										?>
										<thead >
									<tr class="table100-head" >
									<th class="column1"><a href="#" title="All Candidate" class="filtsec active" >All (<?php $datatable_length = $_POST['datatable_length'];

										//$datatable_length = 10;

										$num ="";
										$sql = mysql_query("SELECT * FROM jobfair_info  LIMIT $datatable_length ");
										$num = mysql_num_rows($sql); echo $num; ?>)</a></th>
									<th class="column3">Title</th>
									<th class="column3">Date</th>
									<th class="column3">Time </th>
									
									<th class="column3" style="width:450px; text-align: center;	 ">Address</th>
									<th class="column3" style="padding-right:50px text-align:center; ">Date Log</th>
									<th class="column3" style="padding-right:50px text-align:center; "></th>
									</tr>
									</thead>
									<tbody>
										<?php

										$datatable_length = $_POST['datatable_length'];

										//$datatable_length = 10;

										$num ="";
										$sql = mysql_query("SELECT * FROM jobfair_info  LIMIT $datatable_length ");
										$num = mysql_num_rows($sql);
										while ($row = mysql_fetch_array($sql))
										{//## echo fetched data to display
										$num += 1;
										$format_log = date_format(date_create($row['jobfair_log'])," F  d,  Y ");
										$format = date_format(date_create($row['jobfair_date'])," F  d,  Y ");
										?>
										<tr>

									<td class="column2" ></td>
									<td class="column3" style="padding-top: 10px;padding-bottom: 10px;"><?php echo $row['jobfair_title'] ; ?></td>
									<td class="column3" ><?php echo  $format ; ?></td>
									<td class="column3"><?php echo $row['jobfair_datetime_start']." - ".$row['jobfair_datetime_end'] ; ?></td>
									
									<td class="column3 style='padding-right:;'"><?php echo $row['jobfair_address'] ; ?></td>
									<td class="column3 style='padding-right:30px;'">
										<?php echo  $format_log ; ?>
											
									</td>
									<td class="column2"></td>
									</tr>
										<?php 
										}
										
												}if (isset($_POST['edit'])) {
													$id = $_POST['val']; 
													
													$Archive = "OFF";
											 	
											 		$update = mysql_query("UPDATE jobfair_info SET jobfair_archive='$Archive' WHERE jobfair_id = '$id' ");
											 		echo "<script> location.replace('my-jobfair-archive.php'); </script>";
												}
												?>

							
							
							
								
						</tbody>

					</table>
				</div>
				</div>
	</div>
</div>
								
										
									
										
										
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
		<style type="text/css">
			
			 .container-table100 {
  width: 100%;
  min-height: 100vh;
  background: #c850c0;
  background: -webkit-linear-gradient(45deg, #4158d0, #c850c0);
  background: -o-linear-gradient(45deg, #4158d0, #c850c0);
  background: -moz-linear-gradient(45deg, #4158d0, #c850c0);
  background: linear-gradient(45deg, #4158d0, #c850c0);

  display: -webkit-box;
  display: -webkit-flex;
  display: -moz-box;
  display: -ms-flexbox;
  display: flex;
  align-items: center;
  justify-content: center;
  flex-wrap: wrap;
  padding-right: 10px;
}

.wrap-table100 {
  width: 100%;

}

table {
  border-spacing: 1;
  border-collapse: collapse;
  background: white;
  border-radius: ;
  overflow: hidden;
  width: 100%;
  margin: 0 auto;
  position: relative;
}
table * {
  position: relative;
}
table td, table th {
  padding-left: 8px;
}
table thead tr {
  height: 60px;
  background: #c34a4a;
}
table tbody tr {
  height: 50px;
}
table tbody tr:last-child {
  border: 0;
}
table td, table th {
  text-align: center;
}
table td.l, table th.l {
  text-align: center;
}
table td.c, table th.c {
  text-align: center;
}
table td.r, table th.r {
  text-align: center;
}


.table100-head th{
  font-family: OpenSans-Regular;
  font-size: 18px;
  color: #fff;
  line-height: 1.2;
  font-weight: unset;
}

tbody tr:nth-child(even) {
  background-color: #f5f5f5;
}

tbody tr {
  font-family: OpenSans-Regular;
  font-size: 15px;
  color: #808080;
  line-height: 1.2;
  font-weight: unset;
}

tbody tr:hover {
  color: #555555;
  background-color: #f5f5f5;
  cursor: pointer;
}

.column1 {
  width: 10px;
  padding-left: 10px;

}

.column2 {
  width: 160px;
}

.column3 {
  width: 245px;
}

.column4 {
  width: 110px;
  text-align: right;
}

.column5 {
  width: 170px;
  text-align: right;
}

.column6 {
  width: 222px;
  text-align: right;
  padding-right: 62px;
}


@media screen and (max-width: 992px) {
  table {
    display: block;
  }
  table > *, table tr, table td, table th {
    display: block;
  }
  table thead {
    display: none;
  }
  table tbody tr {
    height: auto;
    padding: 37px 0;
  }
  table tbody tr td {
    padding-left: 40% !important;
    margin-bottom: 0px;
  }
  table tbody tr td:last-child {
    margin-bottom: 0;
  }
  table tbody tr td:before {
    font-family: OpenSans-Regular;
    font-size: 14px;
    color: #999999;
    line-height: 1.2;
    font-weight: unset;
    position: absolute;
    width: 40%;
    left: 30px;
    top: 0;
  }
  

  .column4,
  .column5,
  .column6 {
    text-align: left;
  }

  .column4,
  .column5,
  .column6,
  .column1,
  .column2,
  .column3 {
    width: 100%;
  }

  tbody tr {
    font-size: 14px;
  }
}


/*asamax*/

		</style>
	</body>

</html>