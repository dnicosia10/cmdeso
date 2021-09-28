<?php
session_start();
 // session_destroy();
   if( (!isset($_SESSION["uName"])) && (!isset($_SESSION["hashed_pass"])) 
  	&& ( 'user'!=$_SESSION["name"]) ) {
    header("Location:\.\home3/home/signup/login.php");
    echo "error";
  }if ('user'!=$_SESSION["name"]) {
    	header("Location:\.\home3/home/signup/login.php");
    }
  	$b = $a ="";
	$conn = mysql_connect("localhost","root")or die(mysql_error());
	$db = mysql_select_db("cmdeso_db")or die(mysql_error()); 
$num = $_SESSION['num'];


	$two = mysql_query("SELECT * FROM appl_info WHERE acct_id = '$num' ");
	while ($row = mysql_fetch_array($two)) {
		$b = $row['acct_id'];
		$a = $row['appl_id'];
	}

	$error1 = $error2 = $error3 = $error4 = $error5 = $error6 = $error7 = $error8 = $error9 = $error10 = $error11 =$error12 = $error13 = $error14 =$error15= " ";

if ( ($b !=  $num) ) {
				
	if (isset($_POST['resume-bttn']))
	{

	 //restriction variable
	if (empty($_POST['appl_fname'])) {
		$error1 = "*";
	}else{
		$error1 = "";
	}if (empty($_POST['appl_lname'])) {
		$error2 = "*";
	}else{
		$error2 = "";
	}if (empty($_POST['appl_mname'])) {
		$error3 =   "*";
	}else{
		$error3 = "";
	}if (empty($_POST['appl_birthp'])) {
		$error4 =  "*";
	}else{
		$error4 = "";
	}if (empty($_POST['appl_birthd'])) {
		$error5 =  "*";
	}else{
		$error5 = "";
	}
	
	if (empty($_POST['appl_nationality'])) {
		$error7 =  "*";
	}else{
		$error7 = "";
	}if (empty($_POST['appl_religion'])) {
		$error8 =  "*";
	}else{
		$error8 = "";
	}if (empty($_POST['appl_street'])) {
		$error9 =  "*";
	}else{
		$error9 = "";
	}if (empty($_POST['appl_zipc'])) {
		$error10 =  "*";
	}else{
		$error10 = "";
	}if (empty($_POST['appl_email'])) {
		$error11 =  "*";
	}else{
		$error11 = "";
	}if (empty($_POST['appl_sname'])) {
		$error12 =  "*";
	}else{
		$error12 = "";
	}if (empty($_POST['appl_disability'])) {
		$error13 =  "*";
	}else{
		$error13 = "";
	}if (empty($_POST['appl_employed'])) {
		$error14 =  "*";
	}else{
		$error14 = "";
	}if (empty($_POST['appl_employed_status'])) {
		$error15 =  "*";
	}else{
		$error15 = "";
	}
//restriction for fill all the field
	$one = mysql_query("SELECT * FROM appl_info WHERE appl_email = '$_POST[appl_email]' ");
	while ($row = mysql_fetch_array($one)) {
		$a = $row['appl_email'];
	}
	

		if ( (!empty($_POST['appl_fname'])) && (!empty($_POST['appl_lname']))  && (!empty($_POST['appl_birthp']))
			&& (!empty($_POST['appl_birthd'])) && (!empty($_POST['appl_nationality'])) && (!empty($_POST['appl_religion'])) && (!empty($_POST['appl_street']))  && (!empty($_POST['appl_disability'])) && (!empty($_POST['appl_employed'])) && (!empty($_POST['appl_employed_status'])) )
		{
			
			$target = "assets/img/" . basename($_FILES['image']['name']);
			$image = $_FILES['image']['name'];
			$num = $_SESSION["num"];
			$appl_fname = ucfirst( strtolower($_POST['appl_fname']));
			$appl_lname = ucfirst( strtolower($_POST['appl_lname']));
			$appl_mname = ucfirst( strtolower($_POST['appl_mname']));
			$appl_birthp = ucfirst( strtolower($_POST['appl_birthp']));
			$appl_birthd = $_POST['appl_birthd'];
			$appl_age = date('Y') - substr($appl_birthd, 0, 4);
			$appl_nationality = ucfirst( strtolower($_POST['appl_nationality']));
			$appl_religion = ucfirst(strtolower($_POST['appl_religion']));
			$appl_zipc = $_POST['appl_zipc'];
			$appl_email = $_POST['appl_email'];
			$appl_sex = ucfirst( strtolower($_POST['appl_sex']));
			$appl_civils = ucfirst( strtolower($_POST['appl_civils']));
			$appl_prov = ucfirst( strtolower($_POST['appl_prov']));
			$appl_contactn = $_POST['appl_contactn'];
			$appl_street = $_POST['appl_street'];
			$appl_sname = $_POST['appl_sname'];
			$appl_disability = $_POST['appl_disability'];
			$appl_employed = $_POST['appl_employed'];
			$appl_employed_status = $_POST['appl_employed_status'];
			$appl_educational_attain = $_POST['confirm'];
			$appl_sms="NO";





			if (strtotime(date('Y-m-d')) - strtotime(date('Y') . substr($appl_birthd, 4, 6)) < 0)
			{
			    $appl_age--;

			}
			
			
			if ($a != $_POST["appl_email"])
			{
			$sql = mysql_query("INSERT INTO appl_info(acct_id,appl_fname,appl_lname,appl_mname,appl_birthp,appl_birthd,appl_age,appl_nationality,appl_religion,appl_zipc,appl_email,appl_sex,appl_civils,appl_prov,appl_contactn,appl_street,
				appl_sname,
				appl_disability,
				appl_employed,
				appl_employed_status,appl_educational_attain,
				appl_img,appl_sms,appl_log_date)
				VALUES('$num','$appl_fname','$appl_lname','$appl_mname','$appl_birthp','$appl_birthd','$appl_age','$appl_nationality','$appl_religion','$appl_zipc','$appl_email','$appl_sex','$appl_civils','$appl_prov','$appl_contactn','$appl_street'
				,'$appl_sname',
				'$appl_disability',
				'$appl_employed',
				'$appl_employed_status','$appl_educational_attain',
				'$image','$appl_sms',now())");
			// $desc = "The admin ADD in Athletes information ID " . $stud_no. " and NAME:" .$fname." ".$lname ;
			// $act = "ADD";
			// $audit = mysql_query("INSERT INTO sdmo_audit(AUDIT_DESC,AUDIT_ACTION,AUDIT_DATE)VALUES('$desc','$act',now())");
			 mysql_query($sql);
			 if ($_POST['confirm'] == 'No Formal Education') {
 		echo "<script> location.replace('resume-exp.php'); </script>";
 	}elseif ($_POST['confirm'] == 'Elementary Level') {
 		echo "<script> location.replace('resume-elem.php?id=1'); </script>";
 	}elseif ($_POST['confirm'] == 'Elementary Graduate') {
 		echo "<script> location.replace('resume-elem.php?id=2'); </script>";
 	}elseif ($_POST['confirm'] == 'High School Level') {
 		echo "<script> location.replace('resume-high.php?id=1'); </script>";
 	}elseif ($_POST['confirm'] == 'High School Graduate') {
 		echo "<script> location.replace('resume-high.php?id=2'); </script>";
 	}elseif ($_POST['confirm'] == 'College Level') {
 		echo "<script> location.replace('resume-college.php?id=1'); </script>";
 	}elseif ($_POST['confirm'] == 'College Graduate') {
 		echo "<script> location.replace('resume-college.php?id=2'); </script>";
 	}elseif ($_POST['confirm'] == 'Technical Vocational Graduate') {
 		echo "<script> location.replace('resume-vocational.php'); </script>";
 	}
			 //echo "<script> location.replace('resume-elem.php'); </script>";
			//uploading the image file
				if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {

				echo "<script type='text/javascript'>alert('Successful added')</script>";
				
				}
				
			}else{
				
		$error11 =  "*";
		
			}



			

		}
		else
		{
			echo "<script type='text/javascript'>alert('Fill the field')</script>";
		}
}
}else{
	 echo "<script> location.replace('././index.php'); </script>";
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
				 
					<!-- /.col-lg-12 -->
				</div>              
				 <!-- /. ROW  -->
				 <form method="POST" action="" enctype="multipart/form-data">
				<div id="page-inner">
				   <div class="row">
						<div class="col-md-12">
							<div class="add-job_container">
								
								
								<!-- / General Information -->

								
									<style type="text/css">
										input{
											padding-top: none;padding-right: none;padding-left:none; 
										}
									</style>
								<div class="job-box">


									<div class="job-box-filter">
										<div class="row">
											<div class="col-md-6 col-sm-6">
												<h4><i class="fa fa-map-marker" aria-hidden="true"></i>Personal Information</h4>
											</div>
										</div>
									</div>
									<div class="row no-ext-mrg sm-plix">
										<div class="col-sm-6 col-sm-6 col-sm-offset-1 col-md-offset-3" >
											<div class="main-profile-detail" style="padding-top: 0px;">
												
												<img src="assets/img/q.png" id="img" alt="" class="img-circle img-responsive" style="height:200px;" >
												<span class="btn btn-default btn-file">
													Upload Photo <input type="file" name="image" id="files" value="">
												</span>
												<script type="text/javascript">
					 			document.getElementById("files").onchange = function(){
					 				var reader = new FileReader();
					 				reader.onload = function(e){
					 					document.getElementById("img").src = e.target.result;
					 				};
					 				reader.readAsDataURL(this.files[0]);
					 			};
					 		</script>
											</div>
										</div>
									</div>
									<div class="row no-ext-mrg sm-plix">
										<div class="col-sm-3">
											<h5>First Name<span class="error"><?php echo $error1 ?></span></h5>
											<input name="appl_fname" required="" class="form-control" type="text" placeholder="First Name">
												
										</div>
										<div class="col-sm-3" ">

											<h5>Last Name<span class="error"><?php echo $error2 ?></span></h5>
											<input name="appl_lname" type="text" class="form-control" placeholder="Last Name" style="" required="">
										</div>
										<div class="col-sm-3" >
											<h5>Middle Initial<span class="error"><?php echo $error3 ?></span></h5>
											<input name="appl_mname" type="text" class="form-control" placeholder="Middle Name" >
										</div>
										<div class="col-sm-3" >
											<h5>Suffix (Sr.,Jr.)<span class="error"><?php echo $error12 ?></span></h5>
											<input name="appl_sname" type="text" class="form-control" placeholder="Suffix Name" >
										</div>
										
									</div>
									<div class="job-box-filter">
										<div class="row">
											<div class="col-md-6 col-sm-6">
												
											</div>
										</div>
									</div>
									<div class="row no-ext-mrg sm-plix">
										<div class="col-sm-3" >
											<h5>Date of Birth<span class="error"><?php echo $error5 ?></span></h5>
											<input name="appl_birthd" type="date" class="form-control" required="">
										</div>
										
										<div class="col-sm-6">
											<h5>Place of Birth<span class="error"><?php echo $error4 ?></span></h5>
											<input name="appl_birthp" type="text" class="form-control" placeholder="Ex. Tarlac City" required="">
										</div>

										<div class="col-sm-3" >
											<h5>Sex</h5>
											<select name="appl_sex" class="form-control input-lg" required="">
												<option>Male</option>
												<option>Female</option>
											</select>
										</div>
										
									</div>

									
									<div class="row no-ext-mrg sm-plix">
										<div class="col-sm-2">
											<h5>Civil Status</h5>
											<select name="appl_civils" class="form-control input-lg" required="">
												<option>Single</option>
												<option>Married</option>
												<option>Widowed</option>
												<option>Seperated</option>
											</select>
										</div>
										<div class="col-sm-7">
											<h5>Citezenship<span class="error"><?php echo $error7 ?></span></h5>
											<input name="appl_nationality" type="text" class="form-control" placeholder="Ex. Filipino" required="">
										</div>
										<div class="col-sm-3" >
											<h5>Religion<span class="error"><?php echo $error8 ?></span></h5>
											<input name="appl_religion" type="text" class="form-control" placeholder="Ex. Roman Catholic" >
										</div>
										
									</div>
									<div class="job-box-filter">
										
									</div>
									<div class="row no-ext-mrg sm-plix">
										<div class="col-sm-4" >
											<h5>Provinces</h5>
											<select name="appl_prov" class="form-control input-lg" required="">
												<option>Select Province</option>
												<option>Abra</option>
												<option>Agusan del Norte</option>
												<option>Agusan del Sur</option>
												<option>Aklan</option>
												<option>Albay</option>
												<option>Antique</option>
												<option>Apayao</option>
												<option>Aurora</option>
												<option>Basilan</option>
												<option>Bataan</option>
												<option>Batanes</option>
												<option>Batangas</option>
												<option>Benguet</option>
												<option>Biliran</option>
												<option>Bohol</option>
												<option>Bukidnon</option>
												<option>Bulacan</option>
												<option>Cagayan</option>
												<option>Camarines Norte</option>
												<option>Camarines Sur</option>
												<option>Camiguin</option>
												<option>Capiz</option>
												<option>Catanduanes</option>
												<option>Cavite</option>
												<option>Cebu</option>
												<option>Compostela Valley</option>
												<option>Cotabato</option>
												<option>Davao del Norte</option>
												<option>Davao del Sur</option>
												<option>Davao Oriental</option>
												<option>Dinagat Islands</option>
												<option>Eastern Samar</option>
												<option>Guimaras</option>
												<option>Ifugao</option>
												<option>Ilocos Norte</option>
												<option>Ilocos Sur</option>
												<option>Iloilo</option>
												<option>Isabela</option>
												<option>Kalinga</option>
												<option>La Union</option>
												<option>Laguna</option>
												<option>Lanao del Norte</option>
												<option>Lanao del Sur</option>
												<option>Leyte</option>
												<option>Maguindanao</option>
												<option>Marinduque</option>
												<option>Masbate</option>
												<option>Metro Manila</option>
												<option>Misamis Occidental</option>
												<option>Misamis Oriental</option>
												<option>Mountain Province</option>
												<option>Negros Occidental</option>
												<option>Negros Oriental</option>
												<option>Northern Samar</option>
												<option>Nueva Ecija</option>
												<option>Nueva Vizcaya</option>
												<option>Occidental Mindoro</option>
												<option>Oriental Mindoro</option>
												<option>Palawan</option>
												<option>Pampanga</option>
												<option>Pangasinan</option>
												<option>Quezon</option>
												<option>Quirino</option>
												<option>Rizal</option>
												<option>Romblon</option>
												<option>Samar</option>
												<option>Sarangani</option>
												<option>Shariff Kabunsuan</option>
												<option>Siquijor</option>
												<option>Sorsogon</option>
												<option>South Cotabato</option>
												<option>Southern Leyte</option>
												<option>Sultan Kudarat</option>
												<option>Sulu</option>
												<option>Surigao del Norte</option>
												<option>Surigao del Sur</option>
												<option>Tarlac</option>
												<option>Tawi-Tawi</option>
												<option>Zambales</option>
												<option>Zamboanga del Norte</option>
												<option>Zamboanga del Sur</option>
												<option>Zamboanga Sibugay</option>
											</select>
										</div>
										<div class="col-sm-6" >
											<h5>House & Street<span class="error"><?php echo $error9 ?></span></h5>
											<input name="appl_street" type="text" class="form-control" placeholder="e.g. Street 2580" required="">
										</div>
										<div class="col-sm-2" >
											<h5>Zip-Code<span class="error"><?php echo $error10 ?></span></h5>
											<input name="appl_zipc" type="text" class="form-control" placeholder="e.g. 170025" >
										</div>
										
									</div>
									<div class="job-box-filter">
										<div class="row">
											<div class="col-md-6 col-sm-6">
												
											</div>
										</div>
									</div>
									<div class="row no-ext-mrg sm-plix">
								
										
										<div class="col-sm-4" >
											<h5>Contact Number PH(63 9123456789)</h5>
											<input name="appl_contactn" type="text" class="form-control" value="63" required="" maxlength="13" min="13">
										</div>
										<div class="col-sm-4">
											<h5>Email Address<span class="error"><?php echo $error11 ?></span></h5>
											<input name="appl_email" type="Email" class="form-control" placeholder="Ex. a@gmail.com" >
										</div>
										<div class="col-sm-4">
											<h5>Disability<span class="error"><?php echo $error13 ?></span></h5>
											<select name="appl_disability" class="form-control input-lg">
												<option>None</option>
												<option>Visual</option>
												<option>Hearing</option>
												<option>Speech</option>
												<option>Physical</option>
											</select>
										</div>
									</div>
									
									<div class="row no-ext-mrg sm-plix">
								
										
										
										<div class="col-sm-3" style=" ">
											<h5>Highest Educational Level</h5>
											<select name="confirm" class="form-control input-lg" required="" ">
												<option>No Formal Education</option>
												<option>Elementary Level</option>
												<option>Elementary Graduate</option>
												<option>High School Level </option>
												<option>High School Graduate</option>
												<option>College Level</option>
												<option>College Graduate </option>
												<option>Post Graduate </option>
												<option>Technical Vocational Graduate</option>

											</select>
											
										</div>
										<div class="col-sm-5">
											<h5>Employed<span class="error"><?php echo $error14 ?></span></h5>
											<select name="appl_employed" class="form-control input-lg">
												<option>Employed</option>
												<option>Unemployed</option>
											</select>
										</div>
										<div class="col-sm-4">
											<h5>Status <span class="error"><?php echo $error15 ?></span></h5>
											<select name="appl_employed_status" class="form-control input-lg">
												<option></option>
												
												<option>Wage Employed</option>
												<option>Self Employed</option>
												<option ></option>
												<option>Retired</option>
												<option>Resigned</option>
												
												<option>Finished Contract</option>
												<option>New Entrant/Fresh Graduate</option>
												
												<option>Terminated/Laidoff(Local)</option>
												<option>Terminated/Laidoff(Local)</option>
											</select>
										</div>
									</div>
								</div>
								<!-- / Location -->

							
								
								<div class="row no-ext-mrg">
									<div class="col-sm-12">
										<input type="submit" name="resume-bttn" class="button submit" value="Next">
										
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
