<?php
session_start();

   if((!isset($_SESSION["uName"]))&&(!isset($_SESSION["uPass"]))&&('admin'!=$_SESSION["name"]) ) {
  
header("Location:\.\home3/home/signup/login.php");
  }
  if ('admin'!=$_SESSION["name"]) {
  	 
    header("Location:\.\home3/home/signup/login.php");
  	  }

	$conn = mysql_connect("localhost","root")or die(mysql_error());
	$db = mysql_select_db("cmdeso_db")or die(mysql_error()); 
$today= date('Y-m-d');
$expiredstart = mysql_query("UPDATE job_onjob_info SET mess_send ='YES' ");
					mysql_query($expiredstart);
					$expiredend = mysql_query("UPDATE job_onjob_info SET mess_send = NO WHERE onjob_datetime < now()  ");
					mysql_query($expiredend);


	$sql = mysql_query("SELECT * FROM job_onjob_info WHERE mess_send ='YES' ");
//### execute query
$res = mysql_num_rows($sql);

	
	if($res == 1 ){
		$today= date('Y-m-d');


$sqll = mysql_query("SELECT * FROM job_onjob_info WHERE mess_send = 'YES' ");

while ($row1 = mysql_fetch_array($sqll))
									{
										
										$id1 = $row1['onjob_id'];
										$appl_mess= $row1['Interview_ann'];
										$_SESSION['appl_mess'] = $appl_mess;
									$sql2 = mysql_query("SELECT * FROM job_appl_info WHERE onjob_id = '$id1' ");
									while ($row2 = mysql_fetch_array($sql2))
									{
										
										
										$acct1 = $row2['acct_id'];
									$sql3 = mysql_query("SELECT * FROM appl_info WHERE acct_id = '$acct1' ");
									while ($row = mysql_fetch_array($sql3))
									{//## echo fetched data to display
									
	$url = 'https://rest.nexmo.com/sms/json?' . http_build_query([
       'api_key' => "3478beac",
        'api_secret' => "w3npNx7JyaYgtT2A",
        'to' => $row['appl_contactn'],
        'from' => "CMD-ESO",
        'text' => $_SESSION['appl_mess']
    ]);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
echo "<script type='text/javascript'>alert('Sending message to ".$row['appl_fname']." please wait a moment')</script>";
$expiredstart = mysql_query("UPDATE appl_info SET appl_sms ='YES'");
	mysql_query($expiredstart);
}}}}else{echo "<script type='text/javascript'>alert(' please wait a moment')</script>";
	
}



 $exp2 = mysql_query("UPDATE appl_acct SET acct_status ='Inactive' WHERE acct_date_expire <= now() ");
            mysql_query($exp2);

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

		<title>Cmd-eso</title>
		
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
			<div class="navbar navbar-inverse navbar-fixed-top"  style="background: ;width: 100%;">
				<div class="container"  style="padding-left: 0px; background-color: ; width: 100%;">
					<div class="navbar-header col-sm-6" style="background: ; " >
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="index.php" style="float: left; background:transparent ;"><img src="assets/img/logo.png" class="img-responsive" alt=""></a>
					</div>
					<div class="navbar-collapse col-sm-6" style="background-color: ; float: right;" >
						<ul class="nav navbar-top-links navbar-right"> 
							
							<!-- /.dropdown -->
							<li class="dropdown">

								<a class="dropdown-toggle" data-toggle="dropdown" href="#">
									<i class="fa fa-bell fa-fw"></i>
									<span class="count-notification"><?php 
									$now = date("Y/m/d");
										$conn = mysql_connect("localhost","root")or die(mysql_error());
	$db = mysql_select_db("cmdeso_db")or die(mysql_error()); 
									$sql = mysql_query("SELECT * FROM appl_info WHERE appl_log_date = '$now' ");
												$num = mysql_num_rows($sql);
									$sql1 = mysql_query("SELECT * FROM job_onjob_info WHERE onjob_datetime = '$now'    ");
												$num1 = mysql_num_rows($sql1);
									$sql2 = mysql_query("SELECT * FROM admin_job_fair_info WHERE job_log = '$now'    ");
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
												$now = date("Y/m/d");
												$sql = mysql_query("SELECT * FROM appl_info WHERE appl_log_date = '$now'    ");
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
												$now = date("Y/m/d");
												$sql = mysql_query("SELECT * FROM job_onjob_info WHERE onjob_datetime = '$now'    ");
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
												$now = date("Y/m/d");
												$sql = mysql_query("SELECT * FROM admin_job_fair_info WHERE job_log = '$now' ");
												$num = mysql_num_rows($sql);
												echo $num;
												$_SESSION['num3'] = $num;
												?> New Company's
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
						
						<li class="active">
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
				          
				 <!-- /. ROW  -->
				<div id="page-inner">
				    <div class="row bott-wid">
						<div class="col-md-3 col-sm-6">
							<div class="widget unique-widget">
								<div class="row">
									<div class="widget-caption info">
										<div class="col-xs-4 no-pad">
											<i class="icon icon-profile-male"></i>
										</div>
										<div class="col-xs-8 no-pad">
											<div class="widget-detail">
												<h3><?php
												$conn = mysql_connect("localhost","root")or die(mysql_error());
													$db = mysql_select_db("cmdeso_db")or die(mysql_error()); 
													$sql = mysql_query("SELECT *
										 FROM appl_acct  WHERE acct_status = 'Active'  ");
												 $num = mysql_num_rows($sql); echo $num;
												?></h3>
												<span>Active Users</span>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-3 col-sm-6">
							<div class="widget unique-widget">
								<div class="row">
									<div class="widget-caption danger">
										<div class="col-xs-4 no-pad">
											<i class="icon icon-happy"></i>
										</div>
										<div class="col-xs-8 no-pad">
											<div class="widget-detail">
												<h3><?php
												$conn = mysql_connect("localhost","root")or die(mysql_error());
													$db = mysql_select_db("cmdeso_db")or die(mysql_error()); 
													$sql = mysql_query("SELECT *
										 FROM appl_info  ");
												 $num = mysql_num_rows($sql); echo $num;
												?></h3>
												<span>User CV</span>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-3 col-sm-6">
							<div class="widget unique-widget">
								<div class="row">
									<div class="widget-caption sucess">
										<div class="col-xs-4 no-pad">
											<i class="icon icon-basket"></i>
										</div>
										<div class="col-xs-8 no-pad">
											<div class="widget-detail">
												<h3><?php
												$conn = mysql_connect("localhost","root")or die(mysql_error());
													$db = mysql_select_db("cmdeso_db")or die(mysql_error()); 
													$sql = mysql_query("SELECT *
										 FROM admin_job_fair_info    ");
												 $num = mysql_num_rows($sql); echo $num;
												?></h3>
												<span>Company</span>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-3 col-sm-6">
							<div class="widget unique-widget">
								<div class="row">
									<div class="widget-caption warning">
										<div class="col-xs-4 no-pad">
											<i class="icon icon-trophy"></i>
										</div>
										<div class="col-xs-8 no-pad">
											<div class="widget-detail">
												<h3><?php
												$conn = mysql_connect("localhost","root")or die(mysql_error());
													$db = mysql_select_db("cmdeso_db")or die(mysql_error()); 
													$sql = mysql_query("SELECT *
										 FROM job_onjob_info WHERE onjob_archive = 'OFF'    ");
												 $num = mysql_num_rows($sql); echo $num;
												?></h3>
												<span>Total Jobs</span>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row bott-wid" style="">




						
						<div class="col-md-12 col-sm-12" style="background-color:;">
							<div class="widget unique-widget">
								<div class="row">
									<div class="widget-caption danger">
										<div class="col-xs-4 no-pad">
											<form method="POST">
											<?php 
 
											$month = date('m');
											$day = date('d');
											$year = date('Y');

											$today= $year . '-' . $month . '-' . $day;?>
											<i class="icon icon-calendar "><input type="date" class="form-control" name="date" style="background-color: transparent; text-align: center; width: ; border-top: none;border-left: none;border-right: none; margin-left:20px; border-bottom: none; ">
												<input style="background-color: transparent; text-align: center; width: ;color: ; " type="submit"  class="form-control " value="SEARCH"  name="set" >
											</i>
											
												
											
										</div>
										<div class="col-xs-8 no-pad">
											<div class="pannel-header" style="margin-bottom: 20px;background-color: #980a0a ;">
									<h3 style="color: white; text-align: center;"><?php 
												if (isset($_POST['set']) ) {
													$date = mysql_real_escape_string($_POST['date']); 
													$time=date("F d, Y",strtotime($_POST['date'])); echo $time;
													
												}elseif(isset($_GET['a'])){
													
												}


												 ?></h3>
								</div>
											<div class="widget-detail" style="text-align: center;">
												<h3>Schedule of Interview</h3>
												<span></span>

											</div>
										</div>
									</div>
								</div>
							</div>
						</div>	

								<?php

								$conn = mysql_connect("localhost","root")or die(mysql_error());
								$db = mysql_select_db("cmdeso_db")or die(mysql_error()); 

									if (isset($_POST['set-bttn'])) {

											$id = $_GET['a'];
												$time_start = mysql_real_escape_string($_POST['time_start']);
												$time_end = mysql_real_escape_string($_POST['time_end']);
												
										 	
										 	$update = mysql_query("UPDATE job_onjob_info SET time_start='$time_start',time_end_inter='$time_end' WHERE onjob_id = '$id' ");

									}

									if ( (isset($_GET['a']))||(isset($_POST['set_bttn'])) ) {
									
									

								?>
				   
						<div class="job-box" >
									
									<div class="row no-ext-mrg sm-plix ">
										
										<div class="col-sm-2 col-sm-2 col-sm-offset-2 col-md-offset-3">
											<h5 style="text-align: center;">START<span class="error"><?php  ?></span></h5>
											<input style="text-align: center; font-size: 22px;" name="time_start" type="time" class="form-control" >
										</div>

										<div class="col-sm-2 col-sm-2 col-sm-offset-2 col-md-offset-2">

											<h5 style="text-align: center;">END<span class="error"><?php  ?></span></h5>
											<input style="text-align: center; font-size: 22px;" name="time_end" type="time" class="form-control" >
										</div>
										
									</div>	
									<div class="row no-ext-mrg" ">
									<div class="col-sm-12" style="text-align: center;">
										<button class="submit" style="background-color: #1FB81F; padding-left: auto;padding-right: auto;  margin: 0 auto display: table; padding: 12px 25px;background: #07b107;color: #ffffff; text-transform: capitalize;font-size: 17px;border-radius: 50px;min-width: 160px; text-align: center;border: none;" type="submit" name="set-bttn"  value="">
													SAVE <i class="fa fa-arrow-circle-down"></i>
												</button>	
												</form>
										<!-- <a href="#" class="button submit">Submit <i class="fa fa-arrow-circle-right"></i></a> -->
									</div>
								</div>
								</div>
								<?php
									}
									if ( (isset($_POST['set']))||(isset($_GET['a'])) ) {
										$date = $_POST['date'];
								?>

							
				

<div class="recent-jobs-pannel " style="margin: auto;">								
	<div class="col-md-12">
		<div class="panel panel-warning">
			<div class="panel-body" style="overflow-y: scroll;height: 500px;padding: 3px;">
				 <?php
				 $conn = mysql_connect("localhost","root")or die(mysql_error());
																	$db = mysql_select_db("cmdeso_db")or die(mysql_error()); 
					$display = mysql_query("SELECT * FROM job_onjob_info  WHERE  onjob_datetime LIKE '$date' ");
						echo "<table class='table table-hover text-left'>
								<tr id='t-heads' style='background-color:lightgreen;'>
									
									<th class='text-center bg-primary' style='width:170px;'>TIME</th>
									<th class='text-center' style='width:300px;'>TITLE</th>
									<th class='text-center'>POSITION </th>
									<th class='text-center'>LOCATION</th>
									
									
								</tr>	";
					while ($row = mysql_fetch_array($display))
					{
						$format_start = date_format(date_create($row['time_start']),"h:i");
						$format_end = date_format(date_create($row['time_end_inter']),"h:i a");
					echo "<tr>
							
							<td class=''>" . "<a style='' class='btn btn-success btn-xs' href='scheduling.php?a=" . $row['onjob_id'] ."&b=". $date . "'>" . $format_start . " - " . $format_end . " <span class='glyphicon glyphicon-pencil'></span> </a>" . "</td>
							<td>" . $row['onjob_title'] . "</td>
							<td>" . $row['onjob_position'] . "</td>
							<td>" . $row['onjob_location'] . "</td>
							"
							;
							}
							echo "</table>";
				 ?>
</div>
</div>

</div>
								<!-- Job Lists-->

								
							</div>
							<?php
						}else{

?>
							<div class="recent-jobs-pannel " style="margin: auto;">								
	<div class="col-md-12">
		<div class="panel panel-warning">
			<div class="panel-body" style="overflow-y: scroll;height: 500px;padding: 3px;">
				 <?php
				 $conn = mysql_connect("localhost","root")or die(mysql_error());
				 $db = mysql_select_db("cmdeso_db")or die(mysql_error()); 
				 
					$display = mysql_query("SELECT * FROM job_onjob_info  WHERE  date_inter LIKE 'now()' ");
						echo "<table class='table table-hover text-left'>
								<tr id='t-heads' style='background-color:lightgreen;'>
									
									<th class='text-center bg-primary' style='width:170px;'>TIME</th>
									<th class='text-center' style='width:300px;'>TITLE</th>
									<th class='text-center'>POSITION </th>
									<th class='text-center'>LOCATION</th>
									
									
								</tr>	";
					while ($row = mysql_fetch_array($display))
					{
					echo "<tr>
							
							<td class=''>" . "<a style='' class='btn btn-success btn-xs' href='scheduling.php?a=" . $row['onjob_id'] . "'>" . $row['time_start'] . " - " . $row['time_end_inter'] . " <span class='glyphicon glyphicon-pencil'></span> </a>" . "</td>
							<td>" . $row['onjob_title'] . "</td>
							<td>" . $row['onjob_position'] . "</td>
							<td>" . $row['onjob_location'] . "</td>
							<td>" .$row['onjob_type'] . "</td>"
							;
							}
							echo "</table>";
				 ?>
</div>
</div>

</div>
								<!-- Job Lists-->

								
							</div>

<?php


						}

							?>
						</div>
					</div>
	
								<!-- ./Job Lists-->
							</div>
						</div>
						
					</div>
				</div>
			</div>
			 <!-- /. PAGE WRAPPER  -->
			
			
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