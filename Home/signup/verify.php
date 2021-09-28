<?php
session_start();
 $server = "127.0.0.1";
  $user = "root";
   $con = mysql_connect("$server","$user");
  $db = mysql_select_db("cmdeso_db");
  if (!$con) {
    echo "1";
  }if (!$db) {
    echo "2";
  }

  $a = $b =$b1 = $a1 ="";
  // $fname = $_POST['postfname'];
  // $lname =  $_POST['postlname'];
  // $email =  $_POST['postemail'];
  // $password =  $_POST['postpassword'];
  // $confirm_password =  $_POST['postconfirm_password'];
  if (isset($_POST['submit'])) {
    $fname = $_POST['fname'];
    $verify = $_SESSION['verify'];
    
  if ($verify == $fname) {
    $update = mysql_query("UPDATE appl_acct SET acct_status = 'Active' WHERE acct_verify = '$fname' ");
 
     echo "<script type='text/javascript' onClick='window.location.reload(true)'>alert('Successfully Verified')</script>"; 
     header("Location:\.\home3/home/signup/login.php");
    //echo "<script> location.replace('login.php'); </script>";
  
  }else{
    echo "<script type='text/javascript' onClick='window.location.reload(true)'>alert('Verification Failed')</script>"; 
  }
    
      
  }
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <title>Cmd-Eso</title>

  <!-- Stylesheets -->
  <link rel="stylesheet" href="css&java/style.css">
  <link rel="stylesheet" href="css&java/set1.css">

  <!--Google Fonts-->
  <link href='css&java/font1.ccs' rel='stylesheet' type='text/css'>
  <link href='css&java/font2.ccs' rel='stylesheet' type='text/css'>
 <!--  <script type="text/javascript" src="//code.jquery.com/jquery-1.12.0.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script> -->

</head>

<body>
<div id="main-wrapper" >
  <form method="POST" >
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-6 left-side">
        <div class="left-opacity">
        <header style="color: black;>
          <span style="color: black;">Need an account?</span>
          <h3 ">Create Account<br>Make CV</h3>
        </header>
        </div>
      </div>
      <div class="col-md-6 right-side"> <p>Enter Verification Number that has been sent to your mobile number. Wait a few second's for you to recieve the text verification.</p>
       <span class="input input--hoshi">
          <input required="" style="text-align: center;" class="input__field input__field--hoshi"  type="text" name="fname"  >
        
            <label class="input__label input__label--hoshi input__label--hoshi-color-3" for="name">
            <span class="input__label-content input__label-content--hoshi" style=" ">Enter Verification code</span>
          </label>
        </span>
        
        <div class="cta">
          <input type="submit" value="Confirm" class="btn btn-primary pull-left" name="submit" ">
            <div id="result"> </div>
          <span><a href="login.php">Login now!</a></span>
        </div>
       </form>
     

       </script>
      </div>
    </div>
  </div>

</div> <!-- end #main-wrapper -->

<!-- Scripts -->
<!-- <script type="text/javascript" src="jquery.js"></script>
<script src="jquery.min.js"></script> -->
<!-- <script src="ccs&java/scripts.js"></script> -->
<!-- <script src="ccs&java/classie.js"></script> -->

</body>

<!-- Mirrored from dcrazed.net/html/signup-pack/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 04 Apr 2018 08:35:12 GMT -->
</html>
