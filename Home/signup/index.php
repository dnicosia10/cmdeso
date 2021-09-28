<?php

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
   
 
if  ((!empty($_POST['fname'])) && (!empty($_POST['lname'])) && (!empty($_POST['email'])) &&
      (!empty($_POST['password'])) && (!empty($_POST['confirm_password'])) )  {
  $sql1 = mysql_query("SELECT * FROM appl_acct WHERE acct_email = '$_POST[email]' AND acct_number = '$_POST[number]' ");
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
  $password = $_POST['password'];
  $confirm_password = $_POST['confirm_password'];
  $number = $_POST['number'];

 $fname = ucfirst( strtolower($_POST['fname']));
      $lname = ucfirst( strtolower($_POST['lname']));
  
  if (( $a == $email )||( $b == $email)||( $a1 == $number )||( $b1 == $number)) { 
    echo "<script type='text/javascript'>alert('email or number already exist!')</script>";
  }else{
    if ($password == $confirm_password) {
      $password = sha1($password);
      $verify = $result = mb_substr(sha1($fname), 0, 5);
      session_start();
      $_SESSION['verify'] = $verify;
    $sql = mysql_query("INSERT INTO appl_acct(acct_fname,acct_lname,acct_email,acct_pass,acct_number,acct_status,acct_verify,acct_date_open,acct_date_expire)
      VALUES('$fname','$lname','$email','$password','$number','Inactive','$verify',now(),DATE_ADD(now(), INTERVAL 365 day) )");
    
  $url = 'https://rest.nexmo.com/sms/json?' . http_build_query([
        'api_key' => "220fabae",
        'api_secret' => "4aFAcHodKzEVcxAj",
        'to' => $number,
        'from' => "CMD-ESO",
        'text' => $verify
    ]);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
    echo "<script type='text/javascript' onClick='window.location.reload(true)'>alert('Successful registered')</script>"; 

    // $desc = "The admin ADD in Logs information ID " . $username ;
    // $act = "ADD";
    // $audit = mysql_query("INSERT INTO sdmo_audit(AUDIT_DESC,AUDIT_ACTION,AUDIT_DATE)VALUES('$desc','$act',now())");
    echo "<script> location.replace('verify.php'); </script>";
    }else {echo "<script type='text/javascript'>alert('Password does not match!')</script>";}
    
  
  }
  
    }else {echo "<script type='text/javascript'>alert('fill all field')</script>";}
          //header("location:SDMO_EQUIPMENTS_ADD.php");
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
      <div class="col-md-6 right-side">
       <span class="input input--hoshi">
          <input style="text-align: center;" class="input__field input__field--hoshi"  type="text" name="fname"  >
         
            <label class="input__label input__label--hoshi input__label--hoshi-color-3" for="name">
            <span class="input__label-content input__label-content--hoshi" style=" ">First Name</span>
          </label>
        </span>
         <span class="input input--hoshi">
          <input style="text-align: center;" class="input__field input__field--hoshi"  type="text" name="lname"  >
          <label class="input__label input__label--hoshi input__label--hoshi-color-3" for="name">
            <span class="input__label-content input__label-content--hoshi">Last Name</span>
          </label>
        </span>
        
        <span class="input input--hoshi">
          <input style="text-align: center;" class="input__field input__field--hoshi" type="text" name="email"  >
          <label class="input__label input__label--hoshi input__label--hoshi-color-3" for="email">
            <span class="input__label-content input__label-content--hoshi">E-mail</span>
          </label>
        </span>
        <span class="input input--hoshi">
        
          <input style="text-align: center;" class="input__field input__field--hoshi" type="password" name="password"  >
          <label class="input__label input__label--hoshi input__label--hoshi-color-3" for="password">
            <span class="input__label-content input__label-content--hoshi">Password</span></label>
        </span>
         
        <span class="input input--hoshi">
          <input style="text-align: center;" class="input__field input__field--hoshi" type="password" name="confirm_password"  >
          <label  class="input__label input__label--hoshi input__label--hoshi-color-3" for="password1">
            <span  class="input__label-content input__label-content--hoshi">Re-Password</span></label>
        </span>
         <span class="input input--hoshi">
          <input style="text-align: center;" class="input__field input__field--hoshi" type="text" name="number"  >
          <label  class="input__label input__label--hoshi input__label--hoshi-color-3" for="password1">
            <span  class="input__label-content input__label-content--hoshi">Recovery Number( ex. 639159798816)</span></label>
        </span>
        <div class="cta">
          <input type="submit" value="Sign-Up Now" class="btn btn-primary pull-left" name="submit" ">
            <div id="result"> </div>
          <span><a href="login.php">I am already a member</a></span>
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
