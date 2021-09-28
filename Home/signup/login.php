<?php
session_start();
session_destroy();
 

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
      
      // if (isset($_POST['login-name'])) {
      //  $error1 ="";
      // }else{
      //  $error1 ="Email Invalid";
      // }if (isset($_POST['login-pass'])) {
      //  $error2 ="";
      // }else{
      //  $error2 ="Password Invalid";
      // }
  if (isset($_POST['submit-recovery'])) {
    $recovery_email = $_POST['login-recovery-email'];
    $results = mysql_query("SELECT * FROM appl_acct WHERE acct_email = '$recovery_email' ");
          $recovery_num = mysql_num_rows($results);
          if ($recovery_num == 1) {
            $results = mysql_query("SELECT * FROM appl_acct WHERE acct_email = '$recovery_email' ");
            while ($row = mysql_fetch_array($results)) {
              $_SESSION['number'] = $row['acct_number'];
            }
          }
  }
if ( (!empty($_POST['login-name'])) && (!empty($_POST['login-pass']))   )
    {
      $check= $_POST['check'];
      if ($check == 'yes') {
       
        # code...
     
  $login_userName = strtolower($_POST['login-name']);
        $login_passWord = $_POST['login-pass'];
        $hashed_pass = sha1($login_passWord);
        $results = mysql_query("SELECT * FROM appl_acct WHERE acct_email = '$login_userName' ");
          $user = mysql_num_rows($results);
         $resultss = mysql_query("SELECT * FROM admin_acct WHERE acct_email = '$login_userName' ");
          $admin = mysql_num_rows($resultss);


        if ($user == 1) { 
          session_start();
          $result = mysql_query("SELECT * FROM appl_acct WHERE acct_status = 'Active' ");
        while ($rows = mysql_fetch_array($result)) {
         $user = $rows['acct_email'];
         $pass = $rows['acct_pass'];
         $acct_id = $rows['acct_id'];

          if (($user == $login_userName)&&($pass == $hashed_pass)){

            
             $_SESSION["uName"] = $login_userName;
             $_SESSION["hashed_pass"] = $login_passWord;
             $_SESSION["num"] = $acct_id;
             $_SESSION["name"] = 'user';
              $result1 = mysql_query("SELECT * FROM appl_info_ref_job WHERE acct_id = '$acct_id' ");
        while ($row1 = mysql_fetch_array($result1)) {

              $_SESSION["job1"] = $row1['ref_job1'];
             $_SESSION["job2"] = $row1['ref_job2'];
              $_SESSION["job3"] = $row1['ref_job3'];

              $_SESSION["prov1"] = $row1['ref_job_loc1'];
             $_SESSION["prov2"] = $row1['ref_job_loc2'];
              $_SESSION["prov3"] = $row1['ref_job_loc3'];

              $_SESSION["muni1"] = $row1['ref_job_municipality1'];
             $_SESSION["muni2"] = $row1['ref_job_municipality2'];
              $_SESSION["muni3"] = $row1['ref_job_municipality3'];
            
             
          }
          $result2 = mysql_query("SELECT * FROM appl_info_ref_job WHERE acct_id = '$acct_id'  ");
        while ($row2 = mysql_fetch_array($result2)) {
          $_SESSION["appl_educ"] = $row2['appl_educational_attain'];
        }
        $result3 = mysql_query("SELECT * FROM appl_info_edu WHERE acct_id = '$acct_id' ");
        while ($row3 = mysql_fetch_array($result3)) {
          $_SESSION["appl_educ_course"] = $row3['edu_course'];
        }
         $sql = mysql_query("UPDATE appl_acct SET
        acct_date_open=now()
        
        
        WHERE acct_id = '$acct_id';
        
       ");
           header("Location: \.\home3/user/resume.php");
            
           
        
          // $desc = "The admin LOG -IN";
          // $act = "LOG";

          // $audit = mysql_query("INSERT INTO sdmo_audit(AUDIT_DESC,AUDIT_ACTION,AUDIT_DATE)VALUES('$desc','$act',now())");

        }else{
         
           $error1 = '<div class="alert alert-danger text-center" role="alert">
            <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
            <label>Email and password did not match!</label>
            </div>';
         }


      }
        }elseif ($admin == 1) {
          

          session_start();
  $login_userName = strtolower($_POST['login-name']);
        $login_passWord = $_POST['login-pass'];
        $hashed_pass = sha1($login_passWord);
        $result = mysql_query("SELECT * FROM admin_acct ");
        while ($row = mysql_fetch_array($result)) {
         $user = $row['acct_email'];
         $pass = $row['acct_pass'];
         $acct_id = $row['acct_id'];
          if (($user == $login_userName)&&($pass == $hashed_pass)){

            
               $_SESSION["uName"] = $login_userName;
             $_SESSION["uPass"] = $login_passWord;
             $_SESSION["num"] = $acct_id;
             $_SESSION["name"]= 'admin';
           header("Location: \.\home3/admin/index.php");
           
        
          // $desc = "The admin LOG -IN";
          // $act = "LOG";

          // $audit = mysql_query("INSERT INTO sdmo_audit(AUDIT_DESC,AUDIT_ACTION,AUDIT_DATE)VALUES('$desc','$act',now())");

        }else{
         
           $error1 = '<div class="alert alert-danger text-center" role="alert">
            <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
            <label>Email and password did not match!</label>
            </div>';
         }


      }


        }else{
          $error1 = '<div class="alert alert-danger text-center" role="alert">
            <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
            <label>Email Dont Exist!</label>
            </div>';
        }
        
              
    }else{
     
      $error1 = '<div class="alert alert-danger text-center" role="alert">
            <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
            <label>You need to Agree if you want to proceed</label>
            </div>';
    }
  }else{
     
       $error1 = '<div class="alert alert-danger text-center" role="alert">
            <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
            <label>Need to Fill up Email and Password</label>
            </div>';
    }
}
        
    ?>
<!doctype html>
<html lang="en">

<!-- Mirrored from dcrazed.net/html/signup-pack/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 04 Apr 2018 08:35:12 GMT -->
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <title>Cmd-Eso</title>
  <style type="text/css">
      .error{
    color:red;
    font-size: 25px;
    background-color: red;
    opacity: 0.5;
  }
    </style>

  <!-- Stylesheets -->
  <link rel="stylesheet" href="css&java/style.css">
  <link rel="stylesheet" href="css&java/set1.css">

  <!--Google Fonts-->
  <link href='css&java/font1.ccs' rel='stylesheet' type='text/css'>
  <link href='css&java/font2.ccs' rel='stylesheet' type='text/css'>
  <link href="css$java/custom.css" rel="stylesheet" />
  <script src="lib/sweet-alert.min.js"></script>
<link rel="stylesheet" type="text/css" href="lib/sweet-alert.css">
 <!--  <script type="text/javascript" src="//code.jquery.com/jquery-1.12.0.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script> -->

</head>

<body>
<div id="main-wrapper" >
 
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-6 left-side">
        <div class="left-opacity">
        <header style="color: black;">
          <span style="color: black;">Need to Apply?</span>
          <h3 ">Create Resume<br>and </br>be Hired Now</h3>
        </header>
        </div>
      </div>
      <?php
          if ((!isset($_POST['forgot']))&&(!isset($_POST['submit-recovery']))) {
            
          
       ?>
      <div class="col-md-6 right-side">
       <form method="POST" >
        <span class="input input--hoshi">
          <input style="text-align: center;" class="input__field input__field--hoshi" type="email" name="login-name" required="" >
          <label class="input__label input__label--hoshi input__label--hoshi-color-3" for="email">
            <span class="input__label-content input__label-content--hoshi">E-mail</span>
          </label>
        </span>
        <span class="input input--hoshi">
        
          <input style="text-align: center;" class="input__field input__field--hoshi" type="password" name="login-pass" required="" >
          <label class="input__label input__label--hoshi input__label--hoshi-color-3" for="password">
            <span class="input__label-content input__label-content--hoshi">Password</span></label>
        </span>

        <span style="color: red;"><?php echo $error1; ?></span>
        <div class="cta" style="padding-top: 20px;">
         
            
      <label class="container"> I agree to the <a href="../terms.php">Terms of User</a>
      <input type="checkbox" class="checkmark" name="check" value="yes" required="" >
      <span class="checkmark" ></span>
      </label>
      
      </label>
         
       </br>
          <input type="submit" value="Login Now" class="btn btn-primary pull-left" name="submit-but" ">
            
            
          <span><a title="Register now!" href="index.php">Dont have account?</a></span>
           </form>
           <form method="POST">
        <span><button style="background: transparent;border: none;" name="forgot"><a > Forgot Password?</a></button></span>
      </form>
        </div>
      <?php }if (isset($_POST['forgot'])) {
        
      
      ?>

       <div class="col-md-6 right-side">
      <form method="POST">
        <span class="input input--hoshi">
          <input style="text-align: center;" class="input__field input__field--hoshi" type="email" name="login-recovery-email" required="" >
          <label class="input__label input__label--hoshi input__label--hoshi-color-3" for="email">
            <span class="input__label-content input__label-content--hoshi">E-mail</span>
          </label>
        </span>
       
        <span style="color: red;"><?php echo $error1; ?></span>
        <div class="cta" style="padding-top: 20px;">
         
            
     
     
      
         
       </br>
          <input type="submit" value="Confirm " class="btn btn-primary pull-left" name="submit-recovery" ">
            
            
          <span><a href="index.php">Create new account?</a></span>
           </form>
        </div>
     <?php
      }
     ?>
   <?php if (isset($_POST['submit-recovery'])) {
	   
    $server = "127.0.0.1";
    $user = "root";
    $con = mysql_connect("$server","$user");
    $db = mysql_select_db("cmdeso_db");
    $recovery = $_POST['login-recovery-email'];
	
         $results = mysql_query("SELECT * FROM appl_acct WHERE acct_email LIKE '$recovery' ");
          $confirmation = mysql_num_rows($results);
          if ($confirmation == 1) {
            while ($row = mysql_fetch_array($results)) {
              $_SESSION['number_re']  = $row['acct_number'];
             
              ?>

<div class="col-md-6 right-side">
      <form method="POST">
        <h4>Enter the recovery number and reset-password will be texted in you.</h4>
        <p>Enter your recovery number:<?php echo substr_replace($_SESSION['number_re'],"xxxxxxx",5);?></p>
         <input style="text-align: center;"  type="hidden" name="login-recovery-number_confirm" value="<?php echo $row['acct_number'];  ?>" required="" >
          <input style="text-align: center;"  type="hidden" name="login-recovery-id" value="<?php echo $row['acct_id'];  ?>" required="" >
          <input style="text-align: center;"  type="hidden" name="pass_re" value="<?php echo $row['acct_fname'].''.$row['acct_lname'];  ?>" required="" >
        <span class="input input--hoshi">
          <input style="text-align: center;" class="input__field input__field--hoshi" type="text" name="login-recovery-number" required="" >
          <label class="input__label input__label--hoshi input__label--hoshi-color-3" for="email">
            <span class="input__label-content input__label-content--hoshi">Number</span>
          </label>
        </span>
       
        <span style="color: red;"><?php echo $error1; ?></span>
        <div class="cta" style="padding-top: 20px;">
         
            
     
     
      
         
       </br>
          <input type="submit" value="Confirm " class="btn btn-primary pull-left" name="submit-recovery-number" ">
            
            
          <span><a href="index.php">Create new account?</a></span>
           </form>
        </div>

              <?php
            }
          }else{
            echo "<script type='text/javascript'>alert('Email dont exist!')</script>";
          }
      
      ?>

       
     <?php
      }if (isset($_POST['submit-recovery-number'])) {
        $c = $_POST['login-recovery-number_confirm'];
        $id = $_POST['login-recovery-id'];
        $n = $_POST['login-recovery-number'];
        $pass_re = sha1($_POST['pass_re']);
        if ($c == $n) {
           // $exp2 = mysql_query("UPDATE appl_acct SET acct_status ='Inactive' WHERE acct_date_expire <= now() ");
           //  mysql_query($exp2);
          
           $server = "127.0.0.1";
    $user = "root";
    $con = mysql_connect("$server","$user");
    $db = mysql_select_db("cmdeso_db");
           $sql = mysql_query("UPDATE appl_acct SET acct_pass='$pass_re' WHERE acct_id = '$id'");

          $url = 'https://rest.nexmo.com/sms/json?' . http_build_query([
        'api_key' => "220fabae",
        'api_secret' => "4aFAcHodKzEVcxAj",
        'to' => $n,
        'from' => "CMD-ESO",
        'text' => "your password has been reset to: ".$_POST['pass_re']
 ]);
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
echo "<script type='text/javascript'>alert('Message has been Send Successfully to ')</script>";
 

          
        }else{echo "<script type='text/javascript'>alert('the number you have entered is not match!')</script>";
 }
      }
     ?>

      
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
