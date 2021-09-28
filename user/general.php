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
     $conn = mysql_connect("localhost","root")or die(mysql_error());
   $db = mysql_select_db("cmdeso_db")or die(mysql_error()); 
    $fk =$_SESSION['num'];


if (isset($_POST['pic-bttn'])) {
	$fk =$_SESSION['num'];
	$id = $_POST['id'];
	$target = "assets/img/" . basename($_FILES['image']['name']);
	$image = $_FILES['image']['name'];
	
	$updates = mysql_query("UPDATE appl_info SET appl_img='$image'  WHERE acct_id='$fk' AND appl_id ='$id' ");
	if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {

				echo "<script type='text/javascript'>alert('Successful added')</script>";
				
				}


}
if (isset($_POST['update-bttn'])) {
	 		$fk =$_SESSION['num'];
			$id = $_POST['id'];
			$appl_fname = ucfirst( strtolower($_POST['appl_fname']));
			$appl_lname = ucfirst( strtolower($_POST['appl_lname']));
			$appl_mname = ucfirst( strtolower($_POST['appl_mname']));
			$appl_birthp = ucfirst( strtolower($_POST['appl_birthp']));
			$appl_birthd = $_POST['appl_birthd'];
			$appl_email = $_POST['appl_email'];
			$appl_nationality = ucfirst( strtolower($_POST['appl_nationality']));
			$appl_religion = ucfirst(strtolower($_POST['appl_religion']));
			$appl_zipc = $_POST['appl_zipc'];
			// $appl_email = $_POST['appl_email'];
			$appl_sex = ucfirst( strtolower($_POST['appl_sex']));
			$appl_civils = mysql_real_escape_string($_POST['appl_civils']);
			$appl_prov = mysql_real_escape_string($_POST['appl_prov']);
			$appl_contactn = $_POST['appl_contactn'];
			$appl_street = mysql_real_escape_string( $_POST['appl_street']);
			$appl_sname = mysql_real_escape_string($_POST['appl_sname']);
			$appl_disability = $_POST['appl_disability'];
			$appl_employed = $_POST['appl_employed'];
			$appl_employed_status = $_POST['appl_employed_status'];
			$appl_educational_attain = $_POST['confirm'];

				$update = mysql_query("UPDATE appl_info SET 
					appl_fname='$appl_fname' ,
					appl_lname='$appl_lname' ,
					appl_mname='$appl_mname' ,
					appl_birthp='$appl_birthp' ,
					appl_birthd='$appl_birthd' ,
					appl_email='$appl_email' ,
					appl_nationality='$appl_nationality', 
					appl_religion='$appl_religion' ,
					appl_zipc='$appl_zipc' ,
					appl_sex='$appl_sex' ,
					appl_civils='$appl_civils' ,
					appl_prov='$appl_prov' ,
					appl_contactn='$appl_contactn' ,
					appl_street='$appl_street',
					appl_sname='$appl_sname',
					appl_disability='$appl_disability',
					appl_employed='$appl_employed',
					appl_employed_status='$appl_employed_status',
					appl_educational_attain='$appl_educational_attain'  WHERE acct_id='$fk' AND appl_id ='$id' ");

				// $sql = mysql_query("INSERT INTO appl_info(acct_id,appl_fname,appl_lname,appl_mname,appl_birthp,appl_birthd,appl_age,appl_nationality,appl_religion,appl_zipc,appl_email,appl_sex,appl_civils,appl_prov,appl_contactn,appl_street,appl_img)VALUES('$num','$appl_fname','$appl_lname','$appl_mname','$appl_birthp','$appl_birthd','$appl_age','$appl_nationality','$appl_religion','$appl_zipc','$appl_email','$appl_sex','$appl_civils','$appl_prov','$appl_contactn','$appl_street','$image')");


	 	echo "<script type='text/javascript'>alert('Successful')</script>";
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
							  <?php 


// session_start();
//  session_destroy();
//   if( (!isset($_SESSION["uName"])) && (!isset($_SESSION["hashed_pass"])) ) {
//     header("Location:\.\home3/home/signup/login.php");
//   }
//     $b="";
  

      $four = mysql_query("SELECT * FROM appl_info WHERE acct_id = '$fk'  ");
  while ($row = mysql_fetch_array($four)) {
   $date=date_create($row['appl_birthd']);
$format =  date_format($date," F  d,  Y ");
$id = $row['appl_id'];

		?>
							<li class="dropdown">
								<a class="dropdown-toggle" data-toggle="dropdown" href="#">
									<i class="fa fa-user-circle" aria-hidden="true"></i>
								</a>
								<ul class="dropdown-menu dropdown-user">
									
									<li><a href="my-account.php"><i class="fa fa-gear fa-fw"></i> Settings</a>
									</li>
									<li class="divider"></li>
									<li><a href="\.\home3/home/signup/login.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
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
						
						<img src="assets/img/<?php echo $row["appl_img"]; ?>"  class="img-responsive img-circle" style="height: 150px;  padding-left: 10%;padding-right: 10%; width:100%;">
					</span>
					</div>
					<ul class="nav" id="main-menu">
						
						<ul class="nav" id="main-menu">
						
						<li class="">
							<a href="index.php"><i class="fa fa-cog" aria-hidden="true"></i>Job Offering</a>
						</li>
						<!-- <li>
							<a href="messages.php"><i class="fa fa-envelope-open" aria-hidden="true"></i>Messages</a>
						</li> -->
						<li>
							
							<li class="active" >
							<a href="javascript:void(0)"><i class="fa fa-upload" aria-hidden="true"></i>Update CV <span class="fa arrow"></span></a>
							<ul class="nav nav-second-level">
								<li class="active">
									<a href="general.php"><i class="pending-job fa fa-circle-o-notch" aria-hidden="true"></i>General</a>
								</li>
								<li>
									<a href="education.php"><i class="pending-job fa fa-circle-o-notch" aria-hidden="true"></i>Education</a>
								</li>
								<li>
									<a href="seminar.php"><i class="pending-job fa fa-circle-o-notch" aria-hidden="true"></i>Seminar</a>
								</li>
								<li>
									<a href="work_expirience.php"><i class="pending-job fa fa-circle-o-notch" aria-hidden="true"></i>work Experience</a>
								</li>
								<li>
									<a href="reference.php"><i class="pending-job fa fa-circle-o-notch" aria-hidden="true"></i>Reference</a>
								</li>
							   
							</ul>
						</li>
						</li>
						<li>
							
							<li >
							<a href="javascript:void(0)"><i class="fa fa-plus-circle" aria-hidden="true"></i>Add in CV <span class="fa arrow"></span></a>
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
									<a href="work_expirience-add.php"><i class="pending-job fa fa-circle-o-notch" aria-hidden="true"></i>Work Experience</a>
								</li>
							   
							</ul>
						</li>
						</li>
					 
					
						<li >
							<a href="my-profile.php"><i class="fa fa-user-circle" aria-hidden="true"></i>My CV</a>
						</li>
						
						<li class="log-off">
							<a href="\.\home3/home/signup/login.php"><i class="fa fa-power-off" aria-hidden="true"></i>Logout</a>
						</li>
					</ul>
				</div>
			</nav>
			<!-- /. NAV SIDE  -->
			
			<div id="page-wrapper" >
				 <div class="row bg-title">
					<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
						<h4 class="page-title">My Profile</h4>
					</div>
					<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
						<ol class="breadcrumb">
							
							<li class="active">General </li>
							<li ><a href="education.php">Education </a> </li>
							<li><a href="seminar.php">Seminar </a></li>
							
							<li><a href="work_expirience.php">Work Experience</a></li>
							<li ><a href="reference.php">Reference </a></li>

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
								
									<div class="row no-ext-mrg sm-plix">
										<div class="col-sm-6 col-sm-8 col-sm-offset-2 col-md-offset-3">
											<div class="main-profile-detail">
												<form method="POST" enctype="multipart/form-data">
											<input name="id" type="hidden" class="form-control" value=" <?php echo $row["appl_id"]; ?>" >
												
												<img src="assets/img/<?php echo $row["appl_img"]; ?>" id="img" alt="" class=" img-responsive" style="height:200px;" >
												<span class="btn btn-default btn-file">
													Change Photo <input type="file" name="image" id="files" value="">
												</span>	
												
												
												
												<div class="row no-ext-mrg">
									<div class="col-sm-12">
										<input type="submit" name="pic-bttn" class="button submit" value="Save Changes">
										</form>
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
											</div>
										</div>
									</div>
								</div>
								
								
								<!-- / General Information -->
								<div class="job-box">
								
									<div class="job-box-filter">
										<div class="row">
											<div class="col-md-6 col-sm-6">
												<h4><i class="fa fa-tasks" aria-hidden="true"></i>General Information</h4>


											</div>
											<div class="col-md-2 col-sm-2" style="background-color: ; padding-top: 0px; float: right;">
												<div class="job-action">
													

													
													
													
												</div>
											</div>
										</div>
									</div>
									
									<div class="row no-ext-mrg sm-plix">
										<div class="col-sm-3"><form method="POST">
											<h5 style="text-align:center;">First Name</h5>
											<input name="id" type="hidden" class="form-control" value=" <?php echo $row["appl_id"]; ?>" >
											<input name="appl_fname" type="text" class="form-control" value="<?php echo $row["appl_fname"]; ?>" >
										</div>
										<div class="col-sm-3">
											<h5 style="text-align:center;">Middle Name</h5>
											<input name="appl_lname" type="text" class="form-control" value="<?php echo $row["appl_lname"] ;?>" >
										</div>
										<div class="col-sm-3">
											<h5 style="text-align:center;">Last Name</h5>
											<input name="appl_mname" type="text" class="form-control" value="<?php echo $row["appl_mname"];?>" >

										</div>
										<div class="col-sm-3" >
											<h5>Suffix (Sr.,Jr.)<span class="error"></span>Suffix Name</h5>
											<input name="appl_sname" type="text" class="form-control" placeholder="Suffix Name" value="<?php echo $row["appl_sname"]; ?> " >
										</div>
									</div>
									<div class="row no-ext-mrg sm-plix">	
										<div class="col-sm-6">
											<h5>Birth Date</h5>
											<input type="date" name="appl_birthd" class="form-control" value ='<?php echo $row["appl_birthd"]; ?> '>
										</div>
										<div class="col-sm-6">
											<h5>Age</h5>
											<input type="email" name="appl_email" class="form-control" value ='<?php echo $row["appl_email"]; ?>'>
										</div>
										<div class="col-sm-6">
											<h5>Birth Place</h5>
											<input type="text" name="appl_birthp" class="form-control" value="<?php echo $row["appl_birthp"]; ?>" >
										</div>
										<div class="col-sm-6">
											<h5>Religion</h5>
											<input type="text" name="appl_religion" class="form-control" value="<?php echo $row["appl_religion"]; ?>" >
										</div>
									</div>

									<div class="row no-ext-mrg sm-plix">
										<div class="col-sm-6">
											<h5>Province</h5>
											
											<select name="appl_prov" class="form-control input-lg">
											<option><?php echo $row["appl_prov"]; ?></option>
												<option>Select City</option>
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
										<div class="col-sm-6">
											<h5>Address</h5>
											<input name="appl_street" class="form-control" value="<?php echo $row["appl_street"]; ?>">
										</div>
									</div>
										<div class="row no-ext-mrg sm-plix">
										<div class="col-sm-6">
											<h5>Phone</h5>
											<input name="appl_contactn" type="text" class="form-control" value="<?php echo $row["appl_contactn"]; ?>">
										</div>
										
										<div class="col-sm-6">
											<h5 style="text-align:center;">Citizenship</h5>
											<input name="appl_nationality" type="text" class="form-control" value="<?php echo $row["appl_nationality"]; ?>">
										</div><div class="col-sm-3">
											<h5>Zipcode</h5>
											<input name="appl_zipc" type="text" class="form-control input-lg" value="<?php echo $row["appl_zipc"]; ?>" >
										</div>
										<div class="col-sm-3">
											<h5 style="text-align:center;">Civil Status</h5>
											<select name="appl_civils" class="form-control input-lg">
												<option><?php echo $row["appl_civils"]; ?></option>
												<option>Single</option>
												<option>Married</option>
											</select>
										</div>
										<div class="col-sm-3">
											<h5 style="text-align:center;">Sex</h5>
											<select name="appl_sex" class="form-control input-lg">
												<option><?php echo $row["appl_sex"]; ?></option>
												<option>Male</option>
												<option>Female</option>
											</select>
										

										
										</div>
										<div class="col-sm-3">
											<h5>Disability<span class="error"></span></h5>
											<select name="appl_disability" class="form-control input-lg">
												<option><?php echo $row["appl_disability"]; ?></option>
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
												<option><?php echo $row["appl_educational_attain"]; ?></option>
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
											<h5>Employed<span class="error"></span></h5>
											<select name="appl_employed" class="form-control input-lg">
												<option><?php echo $row["appl_employed"]; ?></option>
												<option>Employed</option>
												<option>Unemployed</option>
											</select>
										</div>
										<div class="col-sm-4">
											<h5>Status <span class="error"></span></h5>
											<select name="appl_employed_status" class="form-control input-lg">
												<option><?php echo $row["appl_employed_status"]; ?></option>
												
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
										<div class="row no-ext-mrg">
									<div class="col-sm-12">
										<input type="submit" name="update-bttn" class="button submit" value="Update">
										
									</div>
								</div>
								</form>
												
									

									


								<?php
		}
			?>
							
								<!-- / Full Detail -->
								<!-- / Full Detail -->
								
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
