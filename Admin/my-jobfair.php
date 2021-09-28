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

}if (isset($_POST['pic-bttn'])) {		
			$id = $_POST['val']; 
			 $target = "assets/img/" . basename($_FILES['image']['name']);
			 $image = $_FILES['image']['name'];
			 $sql = mysql_query("UPDATE jobfair_info SET
			 	
			 	jobfair_img='$image'
			 	WHERE jobfair_id = '$id'
			 ");
			// // $desc = "The admin ADD in Athletes information ID " . $stud_no. " and NAME:" .$fname." ".$lname ;
			// // $act = "ADD";
			// // $audit = mysql_query("INSERT INTO sdmo_audit(AUDIT_DESC,AUDIT_ACTION,AUDIT_DATE)VALUES('$desc','$act',now())");
			//  mysql_query($sql);
			// //ho "<script> location.replace('resume-elem.php'); </script>";
			// //uploading the image file
			 if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {

				 echo "<script type='text/javascript'>alert('Successful added')</script>";
				
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
						
						<li class="active">
							<a href="javascript:void(0)"><i class="fa fa-clone" aria-hidden="true"></i>Manage Jobs Fair <span class="fa arrow"></span></a>
							<ul class="nav nav-second-level">
								<li class="">
							<a href="job-fair.php"><i class="fa fa-file-text" aria-hidden="true"></i>Create Job Fair</a>
								</li>
								<li class="active">
									<a href="my-jobfair.php"><i class="active-job fa fa-circle-o-notch" aria-hidden="true"></i>View Job Fair</a>
								</li>
								<li>
									<a href="my-jobfair-archive.php"><i class="expire-job fa fa-circle-o-notch" aria-hidden="true"></i>Archive Job Fair</a>
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

				 <div class="row bg-title">

					<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">

						<h4 class="page-title">View Job Fair</h4>
					</div>
					<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
						<ol class="breadcrumb">
							<li><a href="index.php">Dashboard</a></li>
							<li class="active">View Job Fair</li>
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
													$sql2 = mysql_query("SELECT * FROM jobfair_info ");
									
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
											
											</div>
											<div class="col-md-6 col-sm-6">
												<div class="filter-search-box text-right">
													<form method="POST">
													<label>Search:<input type="search" name="eventc" class="form-control input-sm" placeholder="Title of Job Fair. . . "><button type="submit" name="okay">Search</button></label>
													</form>
												</div>
											</div>
										</div>
									</div>


						
								<?php 
								$num="";
								if (isset($_POST['okay'])) {


								?>
								<?php
								$search = $_POST['eventc'];

								$sqll = mysql_query("SELECT * FROM jobfair_info  WHERE jobfair_title LIKE '%$search%' OR jobfair_datetime_start LIKE '%$search%' OR jobfair_datetime_end LIKE '%$search%' AND jobfair_archive = 'ON' ");

								//### fetch data as array
								while ($row = mysql_fetch_array($sqll))
								{//## echo fetched data to display
								$num += 1;
								$format = date_format(date_create($row['jobfair_date'])," F  d,  Y ");
								?>


								<article>
										<div class="brows-job-list">
											<div class="col-md-12 col-sm-12 small-padding">
												
													<img src="assets/img/<?php echo $row["jobfair_img"]?>" style="width: 100%;height: 300px;"  alt="">
												
											</div>
											<div class="col-md-12 col-sm-12" style="text-align: center">
												<div class="brows-job-position">
													<h4><?php echo $row['jobfair_title']; ?></h4>
													<p><?php echo $row['jobfair_address']; ?></p>
													
												</div>
											</div>
											<div class="col-md-12 col-sm-12" style="text-align: center;">
												<div class="brows-job-location">
													<span class="recent-job-status"><?php echo $format ." ". $row['jobfair_datetime_start']." - ". $row['jobfair_datetime_end']; ?></span>
												</div>
											</div>
											<div class="col-md-12 col-sm-12" style="text-align: center;">
												<div class="job-action">
													<form method="POST">
												<input type="hidden" name="val" value="<?php echo $row['jobfair_id']; ?>">
												<button name="edit" style="background-color: transparent;border-style: none; padding-right: 0px;"><a class="edit"  title="Edit"><i class="fa fa-pencil" aria-hidden="true"></i></a></button>
								 				<button name="Archive" style="background-color: transparent;border-style: none;"><a class="delete"  title="Archive"><i class="fa fa-trash" aria-hidden="true"></i></a></button>
												</form>		
												</div>
											</div>
										</div>
									</article>


									<?php
									}

									}if( (!isset($_POST['okay']))&&(!isset($_POST['entries']))&&(!isset($_POST['edit'])) ){
									?>
									
									<?php
									$num ="";
									$sql = mysql_query("SELECT * FROM jobfair_info WHERE jobfair_archive = 'OFF' LIMIT 10  ");
									while ($row = mysql_fetch_array($sql))
									{//## echo fetched data to display
									$num += 1;
									//$datatable_length = 10;
									$format = date_format(date_create($row['jobfair_date'])," F  d,  Y ");
									?>
									<article>
										<div class="brows-job-list">
											<div class="col-md-12 col-sm-12 small-padding">
												
													<img src="assets/img/<?php echo $row["jobfair_img"]?>" style="width: 100%;height: 300px;"  alt="">
												
											</div>
											<div class="col-md-12 col-sm-12" style="text-align: center">
												<div class="brows-job-position">
													<h4><?php echo $row['jobfair_title']; ?></h4>
													<p><?php echo $row['jobfair_address']; ?></p>
													
												</div>
											</div>
											<div class="col-md-12 col-sm-12" style="text-align: center;">
												<div class="brows-job-location">
													<span class="recent-job-status"><?php echo $format ." ". $row['jobfair_datetime_start']." - ". $row['jobfair_datetime_end']; ?></span>
												</div>
											</div>
											<div class="col-md-12 col-sm-12" style="text-align: center;">
												<div class="job-action">
													<form method="POST">
												<input type="hidden" name="val" value="<?php echo $row['jobfair_id']; ?>">
												<button name="edit" style="background-color: transparent;border-style: none; padding-right: 0px;"><a class="edit"  title="Edit"><i class="fa fa-pencil" aria-hidden="true"></i></a></button>
								 				<button name="Archive" style="background-color: transparent;border-style: none;"><a class="delete"  title="Archive"><i class="fa fa-trash" aria-hidden="true"></i></a></button>
												</form>		
												</div>
											</div>
										</div>
									</article>
									<?php 
									} 
									}if(isset($_POST['entries'])){
										?>
										
										<?php

										$datatable_length = $_POST['datatable_length'];

										//$datatable_length = 10;

										$num ="";
										$sql = mysql_query("SELECT * FROM jobfair_info WHERE jobfair_archive = 'OFF'  LIMIT $datatable_length");
										while ($row = mysql_fetch_array($sql))
										{//## echo fetched data to display
										$num += 1;
										$format = date_format(date_create($row['jobfair_date'])," F  d,  Y ");
										?>
										<article>
										<div class="brows-job-list">
											<div class="col-md-12 col-sm-12 small-padding">
												
													<img src="assets/img/<?php echo $row["jobfair_img"]?>" style="width: 100%;height: 300px;"  alt="">
												
											</div>
											<div class="col-md-12 col-sm-12" style="text-align: center">
												<div class="brows-job-position">
													<h4><?php echo $row['jobfair_title']; ?></h4>
													<p><?php echo $row['jobfair_address']; ?></p>
													
												</div>
											</div>
											<div class="col-md-12 col-sm-12" style="text-align: center;">
												<div class="brows-job-location">
													<span class="recent-job-status"><?php echo $format ." ". $row['jobfair_datetime_start']." - ". $row['jobfair_datetime_end']; ?></span>
												</div>
											</div>
											<div class="col-md-12 col-sm-12" style="text-align: center;">
												<div class="job-action">
													<form method="POST">
												<input type="hidden" name="val" value="<?php echo $row['jobfair_id']; ?>">
												<button name="edit" style="background-color: transparent;border-style: none; padding-right: 0px;"><a class="edit"  title="Edit"><i class="fa fa-pencil" aria-hidden="true"></i></a></button>
								 				<button name="Archive" style="background-color: transparent;border-style: none;"><a class="delete"  title="Archive"><i class="fa fa-trash" aria-hidden="true"></i></a></button>
												</form>		
												</div>
											</div>
										</div>
									</article>
										<?php 
										}
										}if (isset($_POST['edit'])) {
											
											$id = $_POST['val']; 
											$sql = mysql_query("SELECT * FROM jobfair_info WHERE jobfair_id = '$id'  ");
											while ($row = mysql_fetch_array($sql))
											{//## echo fetched data to display
											$num += 1;

											?>
											
											<div class="job-box" style="height: 500px;">
												<form method="POST" enctype="multipart/form-data">
													<div class="job-box-filter">
														<div class="row">
															<div class="col-md-12 col-sm-12">
																<h4><i class="fa fa-picture-o" aria-hidden="true"></i>Company Logo Or Banner</h4>
															</div>
														</div>
													</div>
													<div class="row no-ext-mrg sm-plix" style="height: 100px;">
														<div class="col-sm-12" style="height: 5	0px;	">
															
																
																	
														<img src="assets/img/<?php echo $row["jobfair_img"]; ?>" id="img" alt=""  style="width: 80%;height: 250px;    
														    border: 3px solid #07b107;
														    display: table;
														    margin: 10px auto;" >							
				   
																<span class="btn btn-default btn-file">
																	
																	Upload Photo <input type="file" name="image" id="files" value="">
																	<input type="hidden" name="val" value="<?php echo $row['jobfair_id']; ?>">
																</span>
												<div class="row no-ext-mrg">
									<div class="col-sm-12">
										<input type="submit" name="pic-bttn" class="button submit" value="Save Changes">
												
												</form>
										</div>
									</div>
								</div>
							</div>
						</div>
						<script type="text/javascript">
					 			document.getElementById("files").onchange = function(){
					 				var reader = new FileReader();
					 				reader.onload = function(e){
					 					document.getElementById("img").src = e.target.result;
					 				};
					 				reader.readAsDataURL(this.files[0]);
					 			};
					 		</script>


					 		<form method="POST">
					 			<div class="job-box" style="height: 550px;">
									<div class="job-box-filter">
										<div class="row">
											<div class="col-md-6 col-sm-6">
												<h4><i class="fa fa-file" aria-hidden="true"></i>General Information</h4>
											</div>
										</div>
									</div>
									<div class="row no-ext-mrg sm-plix">
										
										<div class="col-sm-12">
											<h5>Job Fair Title</h5>
											<input name="Jobfair-name" type="text" class="form-control" value="<?php echo $row["jobfair_title"]; ?>" >
										</div>

										<div class="col-sm-12">
											<h5>Job Fair Address</h5>
											<textarea name="Jobfair-venue" class="form-control textarea" ><?php echo $row["jobfair_address"]; ?></textarea>
										</div>
									
										
									</div>
									<div class="row no-ext-mrg sm-plix">
										
										<div class="col-sm-4">
											<h5>Date</h5>
											<input name="Jobfair-date" type="date" class="form-control" value="<?php echo $row["jobfair_title"]; ?>" placeholder="Company Name">
										</div>
										<div class="col-sm-4">
											<h5>Time Start</h5>
											<input name="Jobfair-start" type="time" class="form-control" value="<?php echo $row["jobfair_datetime_start"]; ?>" placeholder="Company Name">
										</div>
										<div class="col-sm-4">
											<h5>Time End</h5>
											<input name="Jobfair-end" type="time" class="form-control" value="<?php echo $row["jobfair_datetime_end"]; ?>" placeholder="Company Name">
										</div>
										<div class="col-sm-12" style="padding-top: 50px;">
											<input type="hidden" name="val" value="<?php echo $row['jobfair_id']; ?>">
											<button class="submit" style="background-color: #1FB81F; padding-left: auto;padding-right: auto;  margin: 0 auto display: table; padding: 12px 25px;background: #07b107;color: #ffffff; text-transform: capitalize;font-size: 17px;border-radius: 50px;min-width: 160px; text-align: center;border: none;" type="submit" name="update-bttn"  value="">
											Update <i class="fa fa-upload"></i>
											</button>
										</div>
									</div>
								</div>
											
											</form>
											
											<?php

											}
												}if (isset($_POST['Archive'])) {
													$id = $_POST['val']; 
													
													$Archive = "ON";
											 	
											 		$update = mysql_query("UPDATE jobfair_info SET jobfair_archive='$Archive' WHERE jobfair_id = '$id' ");
											 		echo "<script> location.replace('my-jobfair.php'); </script>";
												}
												?>

							
							
							
								
						
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
		
	</body>

</html>