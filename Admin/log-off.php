<?php
	session_start();
    
     if((!isset($_SESSION["uName"]))&&(!isset($_SESSION["uPass"]))&&('admin'!=$_SESSION["name"]) ) {
    	header("Location:\.\home3/home/signup/login.php");
    }if ('admin'!=$_SESSION["name"]) {
  	 
    header("Location:\.\home3/home/signup/login.php");
  	  }
?>
<?php
 
$error1 = "";

    if(isset($_POST['submit-but'])){
      // require 'login/connect.php';
       $server = "127.0.0.1";
  $user = "root";
  $con = mysql_connect("$server","$user");
  $db = mysql_select_db("cmdeso_db");
  if (!$con) {
    echo "1";
  }if (!$db) {
    echo "2";
  } 
  $check = "";

    $a = $b =$b1 = $a1 ="";
 
if  ((!empty($_POST['fname'])) && (!empty($_POST['lname'])) && (!empty($_POST['email'])) &&
      (!empty($_POST['pass'])) && (!empty($_POST['pass2'])) )  {
  $sql1 = mysql_query("SELECT * FROM appl_acct WHERE acct_email = '$_POST[email]' AND acct_number = '$_POST[cp]' ");
  while ($row = mysql_fetch_array($sql1)) {
    $a = $row['acct_email'];
    $a1 = $row['acct_number'];
    
  }
  $sql1 = mysql_query("SELECT * FROM admin_acct WHERE acct_email = '$_POST[email]' ");
   while ($row = mysql_fetch_array($sql1)) {
    $b = $row['acct_email'];
    $b1 = $row['acct_number'];
    
  }
  $email = strtolower($_POST['email']);
  $password = $_POST['pass'];
  $confirm_password = $_POST['pass2'];
  $number = $_POST['cp'];

 $fname = ucfirst( strtolower($_POST['fname']));
      $lname = ucfirst( strtolower($_POST['lname']));
  
  if (( $a == $email )||( $b == $email)||( $a1 == $number )||( $b1 == $number)) { 
    echo "<script type='text/javascript'>alert('email or number already exist!')</script>";
  }else{
    if ($password == $confirm_password) {
      $password = sha1($password);
    $sql = mysql_query("INSERT INTO admin_acct(acct_fname,acct_lname,acct_email,acct_pass,acct_number)
      VALUES('$fname','$lname','$email','$password','$number' )");
    
    echo "<script type='text/javascript' onClick='window.location.reload(true)'>alert('Successful registered')</script>"; 

    // $desc = "The admin ADD in Logs information ID " . $username ;
    // $act = "ADD";
    // $audit = mysql_query("INSERT INTO sdmo_audit(AUDIT_DESC,AUDIT_ACTION,AUDIT_DATE)VALUES('$desc','$act',now())");
    echo "<script> location.replace('index.php'); </script>";
    }else {echo "<script type='text/javascript'>alert('Password does not match!')</script>";}
    
  
  }
  
    }else {echo "<script type='text/javascript'>alert('fill all field')</script>";}
          //header("location:SDMO_EQUIPMENTS_ADD.php");
      
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

		<title>Job Stock - Responsive Job Stock Dashboard Template | ThemezHub</title>
		
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
		  
		
			        
			<!-- /. NAV TOP  -->
		
			<!-- /. NAV SIDE  -->
			
			          
				 <!-- /. ROW  -->
				<div id="page-inner" style="background-image: url(../home/img/Tarlac.jpg); background-repeat: no-repeat; background-size: 200vh;height: 900px;margin: 0px">
				   <div class="row">
						<div class="col-md-12">
							<div class="add-job_container">
								<div class="job-box" style="background-color: transparent; height: 800px; border-color: transparent;" >
									<form method="POST">
									<div class="row no-ext-mrg sm-plix">
										<div class="col-sm-6 col-sm-8 col-sm-offset-2 col-md-offset-3">
											<div class="log-off-wrap" style="height: 500px;background-color: #b11717ad;">
												<img src="assets/img/logo.png" class="img-responsive" alt=""><label>
												<input type="text" name="fname" class="form-control" placeholder="First name" required=""></label>
												<label>
												<input type="text" name="lname" class="form-control" placeholder="Last name" required=""></label>
												<input type="Email" name="email" class="form-control" placeholder="Email " required="">
												<input type="password" name="pass" class="form-control" placeholder="Password" required="">
												<input type="password" name="pass2" class="form-control" placeholder="Confirm Password" required="">
												<input type="text" name="cp" class="form-control" placeholder="Recovery Number (63 123456789)" required="">
												</br>
												</br>
												<button type="submit" name="submit-but" class="btn btn-logoff">Ok</button>
											</br>
												<span style="color: red;"><?php echo $error1; ?></span>
											</div>
										</div>
									</div>
								</form>
								</div>
								<!-- / General Information -->
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

</html>
