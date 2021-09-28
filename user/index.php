<?php
	session_start();

  if( (!isset($_SESSION["uName"])) && (!isset($_SESSION["hashed_pass"])) 
  	&& ( 'user'!=$_SESSION["name"]) ) {
    header("Location:\.\home3/home/signup/login.php");
    echo "error";
  } if ('user'!=$_SESSION["name"]) {
    	header("Location:\.\home3/home/signup/login.php");
    }


  $conn = mysql_connect("localhost","root")or die(mysql_error());
   $db = mysql_select_db("cmdeso_db")or die(mysql_error()); 

    $b="";
    $fk = $_SESSION['num'];
   
    


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
	</head>
	<body>
		  
		<div id="wrapper">
			<div class="navbar navbar-inverse navbar-fixed-top" >
				<div class="container" >
					<div class="navbar-header" >
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
							  <?php 



   
    $three = mysql_query("SELECT * FROM appl_info WHERE acct_id = '$fk' ");
  while ($row = mysql_fetch_array($three)) {
    

  

      }
      $four = mysql_query("SELECT * FROM appl_info WHERE acct_id = $fk  ");
  while ($row = mysql_fetch_array($four)) {
   $date=date_create($row['appl_birthd']);
$format =  date_format($date," F  d,  Y ");

			echo'
							<li class="dropdown">
								<a class="dropdown-toggle" data-toggle="dropdown" href="#">
									<i class="fa fa-user-circle" aria-hidden="true"></i>
								</a>
								<ul class="dropdown-menu dropdown-user">
									
									<li><a href="my-account.php"><i class="fa fa-gear fa-fw"></i> Settings</a>
									</li>
									<li class="divider"></li>
									<li><a href="log-off.php" ><i class="fa fa-sign-out fa-fw"></i> Logout</a>
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
					<div style="margin-top:10%; margin-left: 10%; margin-bottom: 10%;margin-right: 10%;">
						<span >
						
						<img src="assets/img/'.$row["appl_img"] .'"  class="img-responsive img-circle" style="height: 150px;  padding-left: 10%;padding-right: 10%; width:100%;">
					</span>
					</div>
					<ul class="nav" id="main-menu">
						
						<li class="active">
							<a href="index.php"><i class="fa fa-cog" aria-hidden="true"></i>Job Match</a>
						</li>
						<!-- <li>
							<a href="messages.php"><i class="fa fa-envelope-open" aria-hidden="true"></i>Messages</a>
						</li> -->
						<li>
						<li >
							<a href="javascript:void(0)"><i class="fa fa-clone" aria-hidden="true"></i>Manage CV <span class="fa arrow"></span></a>
							<ul class="nav nav-second-level">
							
							<li >
							<a href="javascript:void(0)"><i class="fa fa-plus-circle" aria-hidden="true"></i>Add Information <span class="fa arrow"></span></a>
							<ul class="nav nav-second-level">
								
								<li>
									<a href="seminar-add.php"><i class="pending-job fa fa-circle-o-notch" aria-hidden="true"></i>Seminar</a>
								</li>
								<li>
									<a href="reference-add.php"><i class="pending-job fa fa-circle-o-notch" aria-hidden="true"></i>Reference</a>
								</li>
								<li>
									<a href="elem-add.php"><i class="pending-job fa fa-circle-o-notch" aria-hidden="true"></i>Education</a>
								</li>
								<li>
									<a href="work_expirience-add.php"><i class="pending-job fa fa-circle-o-notch" aria-hidden="true"></i>Work Expirience</a>
								</li>
							   
							</ul>

						</li>
						</li>
						<li>
							<li >
							<a href="javascript:void(0)"><i class="fa fa-upload" aria-hidden="true"></i>Update Information <span class="fa arrow"></span></a>
							<ul class="nav nav-second-level">
								<li>
									<a href="general.php"><i class="pending-job fa fa-circle-o-notch" aria-hidden="true"></i>General</a>
								</li>
								<li>
									<a href="education.php"><i class="pending-job fa fa-circle-o-notch" aria-hidden="true"></i>Education</a>
								</li>
								<li>
									<a href="seminar.php"><i class="pending-job fa fa-circle-o-notch" aria-hidden="true"></i>Seminar</a>
								</li>
								<li>
									<a href="work_expirience.php"><i class="pending-job fa fa-circle-o-notch" aria-hidden="true"></i>work Expirience</a>
								</li>
								<li>
									<a href="reference.php"><i class="pending-job fa fa-circle-o-notch" aria-hidden="true"></i>Reference</a>
								</li>
							   
							</ul>


							
								</li>
							   
							</ul>
						</li>
						</li>
					 
					
						<li >
							<a href="my-profile.php"><i class="fa fa-user-circle" aria-hidden="true"></i>My CV</a>
						</li>
						
						<li class="log-off">
							<a href="log-off.php"><i class="fa fa-power-off" aria-hidden="true"></i>Logout</a>
						</li>
					</ul>



				</div>
			</nav>';
		}
			?>
			<!-- /. NAV SIDE  -->
			
			<div id="page-wrapper" >
				 <div class="row bg-title">
					<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
						<h4 class="page-title">JOB MATCH</h4>
					</div>
					<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
						<ol class="breadcrumb">
							<li><a href="index.php">Dashboard</a></li>
							<li class="active">Active Jobs</li>
						</ol>
					</div>
					<!-- /.col-lg-12 -->
				</div>              
				 <!-- /. ROW  -->
				<div id="page-inner">
				   <div class="row">
						<div class="col-md-12">
							<div class="chat_container">
								
									<!--row Pagination-->
									







								<div class="job-box" style="height: auto;">
									<div class="job-box-filter" style="height: auto;">



										<div class="job-box-filter">
										<div class="row">
											<div class="col-md-5 col-sm-5">
											<form method="POST">
											<label>Show 
											<select name="datatable_length" class="form-control input-sm">
											<option value="5">5</option>
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
											
											</div>
											<div class="col-md-7 col-sm-7">
												<div class="filter-search-box text-right">
													<form method="POST">
													<label>Search:<input type="search" style="font-size: 10px;" placeholder=" Search Job names, position, location" required="" name="eventc" class="form-control input-sm" placeholder=""><button type="submit" name="okay">Search</button></label>
													</form>
												</div>
											</div>
										</div>
									</div>




 										<?php
									

									if( (!isset($_POST['okay']))&&(!isset($_POST['entries'])) ){
									?>
									
									<?php
									 	$j1 = $_SESSION["job1"] ;
										$j2 = $_SESSION["job2"] ;
										$j3 = $_SESSION["job3"] ;

										$p1 = $_SESSION["prov1"] ;
										$p2 = $_SESSION["prov2"] ;
										$p3 = $_SESSION["prov3"] ;

										$m1 = $_SESSION["muni1"] ;
										$m2 = $_SESSION["muni2"] ;
										$m3 = $_SESSION["muni3"] ;
										$result2 = mysql_query("SELECT * FROM appl_info WHERE acct_id = '$fk' ");
										while ($row2 = mysql_fetch_array($result2)) {
										$_SESSION["appl_educ"] = $row2['appl_educational_attain'];
										}
										$result3 = mysql_query("SELECT * FROM appl_info_edu WHERE acct_id = '$fk' ");
										while ($row3 = mysql_fetch_array($result3)) {
										$_SESSION["appl_educ_course"] = $row3['edu_course'];
										}
										$edu1 =  $_SESSION["appl_educ"] ;
										$edu2 =  $_SESSION["appl_educ_course"] ;
										

									
								
										$id_onjob ;
									
										$sql = mysql_query("SELECT *
											
											 FROM job_onjob_info  WHERE  onjob_req_course = '$edu1' OR  onjob_req_course= '$edu2' AND onjob_status = 'Active' AND onjob_archive='OFF'
										 
										 	   
										 LIMIT 10  ");

									//$sql = mysql_query("SELECT * FROM admin_job_fair_info WHERE job_archive = 'ON' LIMIT 10  ");
									while ($row = mysql_fetch_array($sql))
									{//## echo fetched data to display
									//$num += 1;
									//$datatable_length = 10;
									//$format = date_format(date_create($row['jobfair_date'])," F  d,  Y ");
										$job = $row['onjob_id'];
									?>
									<article>
										<div class="brows-job-list">
											<div class="col-md-1 col-sm-2 small-padding">
												<div class="brows-job-company-img">
													<img src="../admin/assets/img/<?php 
													$fk = $row['job_id'];
													$sqll1 = mysql_query("SELECT * FROM admin_job_fair_info  WHERE  job_id = '$fk' ");
													while ($row1 = mysql_fetch_array($sqll1))
														{
													echo $row1["job_img"];  ?>" class="img-responsive" alt="" />
												</div>
											</div>
											<div class="col-md-4 col-sm-4">
												<div class="brows-job-position">
													<h3><?php echo $row['onjob_position']; ?></h3>
													<p><span><?php echo $row1['job_company_name']; }?></span><span class="brows-job-status"><strong>Type:</strong> <?php echo $row['onjob_type']; ?></span></p>
												</div>
											</div>
											<div class="col-md-5 col-sm-5">
												<div class="brows-job-location">
													<p><i class="fa fa-map-marker"></i><?php echo $row['onjob_province'].", ".$row['onjob_municipality']." ".$row['onjob_location'] ; ?></p>
												</div>
											</div>
											<div class="col-md-2 col-sm-2">
												<div class="job-action">
													<form method="POST">
												<input type="hidden" name="val" value="<?php echo $row['onjob_id']; ?>">
												<input type="hidden" name="valcompany" value="<?php echo $row['job_id']; ?>">
												<input type="hidden" name="valjobfair" value="<?php echo $row['jobfair_id']; ?>">
											
											<?php 
											$fk = $_SESSION['num'];
												
												$sql3 = mysql_query("SELECT * FROM job_appl_info WHERE acct_id = '$fk' AND onjob_id ='$job' ");
												$number = mysql_num_rows($sql3);
												if ($number == 1) {
													?>
														<button name="apply" class="btn btn-default btn-file" style="background-color: white;" ><a class="edit"  title="Already Applied"><i class="fa fa-check" style="color: #07b107;" aria-hidden="true"></i></a></button>
													<?php
												}else{
													?>
														<button type="submit" name="apply" class="btn btn-default btn-file" style="background-color: #07b107;" ><a class="edit"  title="Sending your CV"><i class="fa fa-" style="color: white;" aria-hidden="true">Apply</i></a></button>
													<?php
												}
												?>	
												
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
											$j1 = $_SESSION["job1"] ;
										$j2 = $_SESSION["job2"] ;
										$j3 = $_SESSION["job3"] ;

										$p1 = $_SESSION["prov1"] ;
										$p2 = $_SESSION["prov2"] ;
										$p3 = $_SESSION["prov3"] ;

										$m1 = $_SESSION["muni1"] ;
										$m2 = $_SESSION["muni2"] ;
										$m3 = $_SESSION["muni3"] ;
										$result2 = mysql_query("SELECT * FROM appl_info WHERE acct_id = '$fk' ");
										while ($row2 = mysql_fetch_array($result2)) {
										$_SESSION["appl_educ"] = $row2['appl_educational_attain'];
										}
										$result3 = mysql_query("SELECT * FROM appl_info_edu WHERE acct_id = '$fk' ");
										while ($row3 = mysql_fetch_array($result3)) {
										$_SESSION["appl_educ_course"] = $row3['edu_course'];
										}
										$edu1 =  $_SESSION["appl_educ"] ;
										$edu2 =  $_SESSION["appl_educ_course"] ;
										$sql7 = mysql_query("SELECT DISTINCT * FROM job_onjob_info   WHERE   onjob_req_course = '$edu1' OR  onjob_req_course= '$edu2'
											  AND onjob_position LIKE '%$j1%' OR onjob_position LIKE '%$j2%' OR onjob_position LIKE '%$j3%' 	 
												AND onjob_status = 'Active' AND onjob_archive='OFF'  ");

								//### fetch data as array
								while ($row7 = mysql_fetch_array($sql7))
								{$id7 = $row7['onjob_id'];
								$sqll = mysql_query("SELECT DISTINCT * FROM job_onjob_info   WHERE  onjob_title LIKE '%$search%' OR onjob_position LIKE '%$search%' AND onjob_id = '$id7' ");

								//### fetch data as array
								while ($row = mysql_fetch_array($sqll))
								{
								$job = $row['onjob_id'];
								//## echo fetched data to display
								//$num += 1;
								//$format = date_format(date_create($row['jobfair_date'])," F  d,  Y ");
										?><article>
										<div class="brows-job-list">
											<div class="col-md-1 col-sm-2 small-padding">
												<div class="brows-job-company-img">
													<img src="../admin/assets/img/<?php 
														$fk = $row['job_id'];
													$sqll1 = mysql_query("SELECT * FROM admin_job_fair_info  WHERE  job_id = '$fk' ");
													while ($row1 = mysql_fetch_array($sqll1))
														{
													echo $row1["job_img"];  ?>" class="img-responsive" alt="" />
												</div>
											</div>
											<div class="col-md-4 col-sm-4">
												<div class="brows-job-position">
													<h3><?php echo $row['onjob_position']; ?></h3>
													<p><span><?php echo $row1['job_company_name']; }?></span><span class="brows-job-status"><strong>Type:</strong> <?php echo $row['onjob_type']; ?></span></p>
												</div>
											</div>
											<div class="col-md-5 col-sm-5">
												<div class="brows-job-location">
													<p><i class="fa fa-map-marker"></i><?php echo $row['onjob_province'].", ".$row['onjob_municipality']." ".$row['onjob_location'] ; ?></p>
												</div>
											</div>
											<div class="col-md-2 col-sm-2">
												<div class="job-action">
													<form method="POST">
												<input type="hidden" name="val" value="<?php echo $row['onjob_id']; ?>">
												<input type="hidden" name="valcompany" value="<?php echo $row['job_id']; ?>">
												<input type="hidden" name="valjobfair" value="<?php echo $row['jobfair_id']; ?>">
												

												<?php 
											$fk = $_SESSION['num'];
												
												$sql3 = mysql_query("SELECT * FROM job_appl_info WHERE acct_id = '$fk' AND onjob_id ='$job' ");
												$number = mysql_num_rows($sql3);
												if ($number == 1) {
													?>
														<button name="apply" class="btn btn-default btn-file" style="background-color: white;" ><a class="edit"  title="Already Applied"><i class="fa fa-check" style="color: #07b107;" aria-hidden="true"></i></a></button>
													<?php
												}else{
													?>
														<button name="apply" class="btn btn-default btn-file" style="background-color: #07b107;" ><a class="edit"  title="Sending your CV"><i class="fa fa-" style="color: white;" aria-hidden="true">Apply</i></a></button>
													<?php
												}
												?>	
											</form>
												</div>
											</div>
										</div>
									</article>
										
									
									

									<?php }}}if(isset($_POST['entries'])){
										$datatable_length = $_POST['datatable_length'];

										$j1 = $_SESSION["job1"] ;
										$j2 = $_SESSION["job2"] ;
										$j3 = $_SESSION["job3"] ;

										$p1 = $_SESSION["prov1"] ;
										$p2 = $_SESSION["prov2"] ;
										$p3 = $_SESSION["prov3"] ;

										$m1 = $_SESSION["muni1"] ;
										$m2 = $_SESSION["muni2"] ;
										$m3 = $_SESSION["muni3"] ;
										$result2 = mysql_query("SELECT * FROM appl_info WHERE acct_id = '$fk' ");
										while ($row2 = mysql_fetch_array($result2)) {
										$_SESSION["appl_educ"] = $row2['appl_educational_attain'];
										}
										$result3 = mysql_query("SELECT * FROM appl_info_edu WHERE acct_id = '$fk' ");
										while ($row3 = mysql_fetch_array($result3)) {
										$_SESSION["appl_educ_course"] = $row3['edu_course'];
										}
										$edu1 =  $_SESSION["appl_educ"] ;
										$edu2 =  $_SESSION["appl_educ_course"] ;

									$sql = mysql_query("SELECT DISTINCT *
										
										FROM job_onjob_info  WHERE  onjob_req_course = '$edu1' OR  onjob_req_course= '$edu2'
											  AND onjob_position LIKE '%$j1%' OR onjob_position LIKE '%$j2%' OR onjob_position LIKE '%$j3%' 	 
												AND onjob_status = 'Active' AND onjob_archive='OFF'
										 
										 LIMIT $datatable_length  ");

									



									




									//$sql = mysql_query("SELECT * FROM admin_job_fair_info WHERE job_archive = 'ON' LIMIT 10  ");
									while ($row = mysql_fetch_array($sql))
									{//## echo fetched data to display
									//$num += 1;
									//$datatable_length = 10;
									//$format = date_format(date_create($row['jobfair_date'])," F  d,  Y ");
										$job = $row['onjob_id'];
									?>
									<article>
										<div class="brows-job-list">
											<div class="col-md-1 col-sm-2 small-padding">
												<div class="brows-job-company-img">
													<img src="../admin/assets/img/<?php 
													$fk = $row['job_id'];
													$sqll1 = mysql_query("SELECT * FROM admin_job_fair_info  WHERE  job_id = '$fk' ");
													while ($row1 = mysql_fetch_array($sqll1))
														{
													echo $row1["job_img"];  ?>" class="img-responsive" alt="" />
												</div>
											</div>
											<div class="col-md-4 col-sm-4">
												<div class="brows-job-position">
													<h3><?php echo $row['onjob_position']; ?></h3>
													<p><span><?php echo $row1['job_company_name']; }?></span><span class="brows-job-status"><strong>Type:</strong> <?php echo $row['onjob_type']; ?></span></p>
												</div>
											</div>
											<div class="col-md-5 col-sm-5">
												<div class="brows-job-location">
													<p><i class="fa fa-map-marker"></i><?php echo $row['onjob_province'].", ".$row['onjob_municipality']." ".$row['onjob_location'] ; ?></p>
												</div>
											</div>
											<div class="col-md-2 col-sm-2">
												<div class="job-action">
													<form method="POST">
												<input type="hidden" name="val" value="<?php echo $row['onjob_id']; ?>">
												<input type="hidden" name="valcompany" value="<?php echo $row['job_id']; ?>">
												<input type="hidden" name="valjobfair" value="<?php echo $row['jobfair_id']; ?>">
											
											<?php 
											$fk = $_SESSION['num'];
												
												$sql3 = mysql_query("SELECT * FROM job_appl_info WHERE acct_id = '$fk' AND onjob_id ='$job' ");
												$number = mysql_num_rows($sql3);
												if ($number == 1) {
													?>
														<button name="apply" class="btn btn-default btn-file" style="background-color: white;" ><a class="edit"  title="Already Applied"><i class="fa fa-check" style="color: #07b107;" aria-hidden="true"></i></a></button>
													<?php
												}else{
													?>
														<button name="apply" class="btn btn-default btn-file" style="background-color: #07b107;" ><a class="edit"  title="Sending your CV"><i class="fa fa-" style="color: white;" aria-hidden="true">Apply</i></a></button>
													<?php
												}
												?>	
												
											</form>
												</div>
											</div>
										</div>
									</article>

											
								<!-- ./Job Lists-->
								<!-- Job Lists-->


									<?php 
									} 
									}if (isset($_POST['apply'])) {
										$job = $_POST['val'];
										$four = mysql_query("SELECT * FROM job_appl_info WHERE acct_id = '$fk' AND onjob_id = '$job'  ");
									 $four_num = mysql_num_rows($four);
									 if ($four_num != 1) {
									 	$fk = $_SESSION['num'];
										$three = mysql_query("SELECT * FROM appl_info WHERE acct_id = '$fk' ");
									  while ($row = mysql_fetch_array($three)) {
									  	$fk_appl_id = $row['appl_id'];
									  }

										$fk_job = $_POST['val'];
								$sql = mysql_query("INSERT INTO job_appl_info(onjob_id,acct_id,job_appl_date)VALUES('$fk_job','$fk',now())");
								echo "<script> location.replace('index.php'); </script>";
									 }else{
									 	echo "<script type='text/javascript'>alert('Already Apply :)')</script>";
									 }
										
								//### fetch data as array
								
									}
									 
									?>
								
								
								
			
										<!-- <div class="row">
										<ul class="pagination">
											<li><a href="#">&laquo;</a></li>
											<li class="active"><a href="#">1</a></li>
											<li><a href="#">2</a></li>
											<li><a href="#">3</a></li> 
											<li><a href="#">4</a></li> 
											<li><a href="#"><i class="fa fa-ellipsis-h"></i></a></li> 
											<li><a href="#">&raquo;</a></li> 
										</ul>
									</div> -->
									<!--./row Pagination-->
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

<!-- Mirrored from live.themezhub.com/job-stock-large-preview/job-stock/dashboard/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 14 Mar 2018 17:08:44 GMT -->
</html>