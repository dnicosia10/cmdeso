<?php
session_start();

   if((!isset($_SESSION["uName"]))&&(!isset($_SESSION["uPass"]))&&('admin'!=$_SESSION["name"]) ) {
  
    header("Location:\.\home3/home/signup/login.php");
  }if ('admin'!=$_SESSION["name"]) {
  	 
    header("Location:\.\home3/home/signup/login.php");
  	  }

?>
<?php
	$num_appl = 0;
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
} 	 if (isset($_POST['send_bttn'])) {

	$id = $_GET['id'];
									$sql1 = mysql_query("SELECT * FROM job_appl_info WHERE onjob_id = '$id' ");
									while ($row1 = mysql_fetch_array($sql1))
									{
										$acct = $row1['acct_id'];
									$sql = mysql_query("SELECT * FROM appl_info WHERE acct_id = '$acct' ");
									while ($row = mysql_fetch_array($sql))
									{//## echo fetched data to display
					
									  
	$url = 'https://rest.nexmo.com/sms/json?' . http_build_query([
       'api_key' => "3478beac",
        'api_secret' => "w3npNx7JyaYgtT2A",
        'to' => $row['appl_contactn'],
        'from' => "CMD-ESO",
        'text' => $_POST['message']
    ]);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
echo "<script type='text/javascript'>alert('Message has been Send Successfully to ".$row['appl_fname']."')</script>";
}}}
 if (isset($_POST['send_one_bttn'])) {


	$url = 'https://rest.nexmo.com/sms/json?' . http_build_query([
        'api_key' => "3478beac",
        'api_secret' => "w3npNx7JyaYgtT2A",
        'to' => $_POST['Contact'],
        'from' => "CMD-ESO",
        'text' => $_POST['message']
    ]);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
echo "<script type='text/javascript'>alert('Message has been Send Successfully')</script>";
}
  	 	
  	 		// $number = $_POST['Contact'];
  	 		// $message = $_POST['message'];
  	 		// $apicode = $_POST['code'];
//   	 	function itexmo($number,$message,$apicode){
//   	 		$number = $_POST['Contact'];
//   	 		$message = $_POST['message'];
//   	 		$apicode = $_POST['code'];
// $url = 'https://www.itexmo.com/php_api/api.php';
// $itexmo = array('1' => $number, '2' => $message, '3' => $apicode);
// $param = array(
//     'http' => array(
//         'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
//         'method'  => 'POST',
//         'content' => http_build_query($itexmo),
//     ),
// );
// $context  = stream_context_create($param);
// return file_get_contents($url, false, $context);

// }
// $result = itexmo($number,$message,$apicode);
// if ($result == ""){
// echo "<script type='text/javascript'>alert('Message Not Send')</script>";
// }else if ($result == 0){
// echo "<script type='text/javascript'>alert('Message has been Send Successfully :)')</script>";
// }
// else{	
// echo "Error Num ". $result . " was encountered!";
// }
//   	 }

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
			<div id="page-wrapper"  style="">
				<div class="row bg-title">
					<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
						<h4 class="page-title">Home</h4>
					</div>
					<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
						<ol class="breadcrumb">
							<li><a href="index.php">Dashboard</a></li>
							<li class="active">Expired Job</li>
						</ol>
					</div>
					<!-- /.col-lg-12 -->
				</div>              
				 <!-- /. ROW  -->
				<div id="page-inner" style="padding-bottom: 0px;">
				    <div class="row bott-wid">
						
							<div class="col-md-12 col-sm-12" >
										<?php 
										$id =$_GET['id'];
									$sqll = mysql_query("SELECT DISTINCT * FROM job_onjob_info   WHERE  onjob_id = '$id' ");

								//### fetch data as array
								while ($row = mysql_fetch_array($sqll))
								{//## echo fetched data to display
								//$num += 1;
								//$format = date_format(date_create($row['jobfair_date'])," F  d,  Y ");
										?>
										
										<article>
										<div class="brows-job-list" style="padding: 0px;">
											<div class="col-md-1 col-sm-2 small-padding" style="padding: 0px;">
												<div class="brows-job-company-img">
													<?php
													$fk = $row['job_id'];
													$sqll1 = mysql_query("SELECT * FROM admin_job_fair_info  WHERE  job_id = '$fk' ");
													while ($row1 = mysql_fetch_array($sqll1))
														{
													?>
													<img src="assets/img/<?php echo $row1["job_img"]; ?>" class="img-responsive" alt="">
													
												</div>
											</div>
											<div class="col-md-11 col-sm-11" >
												<div class="brows-job-position" style="padding-left: 30px;">
													<u><h2><?php echo $row1['job_company_name']; ?></h2></u>
													
													<?php }?>
													<h4><?php echo $row['onjob_title']; ?></h4>
												</div>
											</div>
											
											
											
											
										</div>
									</article>
									<?php 
										}
									?>
											
								<!-- ./Job Lists-->
								<!-- Job Lists-->
 
								
						</div>
					</div>
					</div>
				
			          
				 <!-- /. ROW  -->
				
				   <div class="row" style="margin: auto;">
						<div class="col-md-12">
							<form method="POST">
							<div class="chat_container">

								<div class="job-box">
									<div class="job-box-filter">
										<div class="row">
											
											<div class="col-sm-12">
											
											
						
								<?php 
								
								$num="";
								if (isset($_POST['okay'])) {
								$search = $_POST['eventc'];

								?>
								<form method="POST">
											<div class="col-md-12 col-sm-12" style="float: right;">
												
													<label style="float: right;"><input style="float: right;" type="search"  name="eventc" class="form-control input-sm" placeholder="Search here...."></label>
													
												
											</div>
										</form>
											<div class="limiter">
		
			<div class="wrap-table100">
				
				<div class="table100">
					<table >
									<thead >
									<tr class="table100-head" >
									<th class="column2" style=""></th>
									<th class="column3">Name</th>
									<th class="column3">Educ. Attainment</th>
									<th class="column3">Contact # </th>
									
									<th class="column3" style="width:450px; text-align: center;	 ">Status</th>
									<th class="column3" style="padding-right:50px text-align:center; ">Date Apply</th>
									<th class="column3" style="padding-right:50px text-align:center; "></th>
									</tr>
									</thead>
									<tbody>

									<?php
									$id = $_GET['id'];
									$sql1 = mysql_query("SELECT * FROM job_appl_info WHERE onjob_id = '$id'   ");
									while ($row1 = mysql_fetch_array($sql1))
									{
										$acct = $row1['acct_id'];
									$sql = mysql_query("SELECT * FROM appl_info WHERE acct_id = '$acct' AND    ");
									while ($row = mysql_fetch_array($sql))
									{//## echo fetched data to display
									$num ="";
								
									//$datatable_length = 10;
									
									$format_log = date_format(date_create($row1['job_appl_date']),"Y-m-d h:i:sa");
									?>
									<tr>

									<td class="column2" ></td>
									<td class="column3" style="padding-top: 10px;padding-bottom: 10px;"><?php echo $row['appl_fname'] ." " .$row["appl_mname"]." " .$row["appl_lname"] ." ". $row["appl_sname"]; ?></td>
									<td class="column3" ><?php echo  $row["appl_educational_attain"]; ?></td>
									<td class="column3"><?php echo $row["appl_contactn"] ; ?></td>
									
									<td class="column3 style='padding-right:;'"><?php echo $row['appl_employed'] ; ?></td>
									<td class="column3 style='padding-right:30px;'">
										<?php echo  $format_log ; ?>
											
									</td>
									<td class="column2"><form method="POST"><div class="col-md-1" style="padding-left: 0px;color:red">
													<button style="border: none;background: transparent; width:100px;" type="submit" name="send"><a  class="filtsec" style="width: 100%;"> SEND</a></button>
												</div>
												</form></td>
									</tr>
									<?php
									$num ="";
									}}

									}if( (!isset($_POST['okay']))&&(!isset($_POST['range']))&&(!isset($_POST['send']))&&(!isset($_POST['edit']))&&(!isset($_POST['send_one'])) ){
									?>
									
											<form method="POST">
											<div class="col-md-12 col-sm-12" style="float: right;">
												
													<label style="float: right;"><input style="float: right;" type="search"  name="eventc" class="form-control input-sm" placeholder="Search here...."></label>
													
												
											</div>
										</form>
											<div class="limiter">
		
			<div class="wrap-table100">
				
				<div class="table100">
					<table >
									<thead >
									<tr class="table100-head" >
									<th class="column2" style=""><a style="width: 100%;" href="#" title="All Candidate" class="filtsec active" >All (<?php $id = $_GET['id'];
									$sql1 = mysql_query("SELECT * FROM job_appl_info WHERE onjob_id = '$id'  ");
									while ($row1 = mysql_fetch_array($sql1))
									{
										$acct = $row1['acct_id'];
									$sql = mysql_query("SELECT * FROM appl_info WHERE acct_id = '$acct' ");
									$num_appl +=1;
									 } echo $num_appl; ?>)</a></th>
									<th class="column3">Name</th>
									<th class="column3">Educ. Attainment</th>
									<th class="column3">Contact # </th>
									
									<th class="column3" style="width:450px; text-align: center;	 ">Status</th>
									<th class="column3" style="padding-right:50px text-align:center; ">Date Apply</th>
									<th class="column3" style="padding-right:50px text-align:center; "><form method="POST"><div class="col-md-1" style="padding-left: 0px;color:red">
													<button style="border: none;background: transparent; width:100px;" type="submit" name="send"><a  class="filtsec active" style="width: 100%;"> SEND ALL</a></button>
												</div>
												</form></th>
									</tr>
									</thead>
									<tbody>

									<?php
									$id = $_GET['id'];
									$sql1 = mysql_query("SELECT * FROM job_appl_info WHERE onjob_id = '$id' ");
									while ($row1 = mysql_fetch_array($sql1))
									{
										$acct = $row1['acct_id'];
									$sql = mysql_query("SELECT * FROM appl_info WHERE acct_id = '$acct'  ");
									while ($row = mysql_fetch_array($sql))
									{//## echo fetched data to display
									$num ="";
								
									//$datatable_length = 10;
									
									$format_log = date_format(date_create($row1['job_appl_date']),"Y-m-d h:i:sa");
									?>
									<tr>

									<td class="column2" ></td>
									<td class="column3" style="padding-top: 10px;padding-bottom: 10px;"><?php echo $row['appl_fname'] ." " .$row["appl_mname"]." " .$row["appl_lname"] ." ". $row["appl_sname"]; ?></td>
									<td class="column3" ><?php echo  $row["appl_educational_attain"]; ?></td>
									<td class="column3"><?php echo $row["appl_contactn"] ; ?></td>
									
									<td class="column3 style='padding-right:;'"><?php echo $row['appl_employed'] ; ?></td>
									<td class="column3 style='padding-right:30px;'">
										<?php echo  $format_log ; ?>
											
									</td>

									<td class="column2"><form method="POST">
										<input type="hidden" name="value" value="<?php echo $row['appl_id'];?>">
										<input type="hidden" name="one_name" value="<?php echo $row['appl_fname'];?>">
										<input type="hidden" name="one" value="<?php echo $row['appl_contactn'];?>"><div class="col-md-1" style="padding-left: 0px;color:red">
													<button style="border: none;background: transparent; width:100px;" type="submit" name="send_one"><a  class="filtsec" style="width: 100%;"> SEND</a></button>
												</div>
												</form></td>
									</tr>
									<?php 
										}}}if (isset($_POST['send'])) {
											
								?>
									<div class="row bott-wid">
									<div class="col-md-12 col-sm-12">

									<div class="recent-jobs-pannel">
									<div class="pannel-header" style="margin-bottom: 20px;">
									<h4>Compose Message</h4>
									</div>
									<!-- Job Lists-->

									<section class="content" style="margin: auto;">
									<div class="row" style="margin: auto;">

									<!-- /.col -->
									<div class="col-md-12" style="margin: auto;">
									<div class="box box-primary">

									<!-- /.box-header -->
									<div class="box-body">
									<div class="form-group">
									<?php 
               						
								
               ?>
              	<form method="POST"><label>TO:  <a href="#" title="All Applicants" class="filtsec">Applicants(ALL)</a></label>
              		
              		
              </div>
              
              <div class="form-group">
                    <input class="form-control textarea" type="textarea" placeholder="" value="
                    	<?php
                    $conn = mysql_connect("localhost","root")or die(mysql_error());
					$db = mysql_select_db("cmdeso_db")or die(mysql_error()); 

                    $id = $_GET['id'];
									$sql1 = mysql_query("SELECT * FROM job_onjob_info WHERE onjob_id = '$id' ");
									while ($row1 = mysql_fetch_array($sql1))
									{
										$ann = $row1['Interview_ann'];
										echo"$ann";
									};
										?>
                    "  name="message" style="height: 400px;">
                    	
                    	
                   
              </div>
             
              
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
              <div class="pull-right">
                <!-- <button type="button" class="btn btn-default"><i class="fa fa-pencil"></i> Draft</button> -->
                <input type="submit" name="send_bttn" class="btn btn-primary" value="SEND">
              </div>
             
          </form>
            </div>
           
              		<?php 
										}if (isset($_POST['send_one'])) {
											
								?>
									<div class="row bott-wid">
									<div class="col-md-12 col-sm-12">

									<div class="recent-jobs-pannel">
									<div class="pannel-header" style="margin-bottom: 20px;">
									<h4>Compose Message</h4>
									</div>
									<!-- Job Lists-->

									<section class="content" style="margin: auto;">
									<div class="row" style="margin: auto;">

									<!-- /.col -->
									<div class="col-md-12" style="margin: auto;">
									<div class="box box-primary">

									<!-- /.box-header -->
									<div class="box-body">
									<div class="form-group">
									<?php 
               						$id = $_POST['one'];
									
										
									
								
               ?>
              	<form method="POST"><label>TO:  <a href="#" title="All Applicants" class="filtsec">Applicants(<?php echo $_POST['one_name'].": ".$_POST['one']; ?>)</a></label>
              		<input type="hidden" name="Contact" class="btn btn-primary" value="<?php echo $id; ?>">
              		
              </div>
              
             <div class="form-group">
                    <textarea class="form-control textarea" type="textarea" placeholder="" value=""  name="message" style="height: 400px;">
                    	<?php
                    $conn = mysql_connect("localhost","root")or die(mysql_error());
					$db = mysql_select_db("cmdeso_db")or die(mysql_error()); 

                    $id = $_GET['id'];
									$sql1 = mysql_query("SELECT * FROM job_onjob_info WHERE onjob_id = '$id' ");
									while ($row1 = mysql_fetch_array($sql1))
									{
										$ann = $row1['Interview_ann'];
										echo"$ann";
									};
										?>
                    
                </textarea>
                    	
                    	
                   
              </div>
              
              
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
              <div class="pull-right">
                <!-- <button type="button" class="btn btn-default"><i class="fa fa-pencil"></i> Draft</button> -->
                <input type="submit" name="send_one_bttn" class="btn btn-primary" value="SEND">
              </div>
             
          </form>
            </div>
            <?php 
              			
              		


              		?>
            <!-- /.box-footer -->
          </div>
          <!-- /. box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>

									<?php
									
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