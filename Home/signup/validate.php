<?php
echo $_POST['postfname'];
 $server = "127.0.0.1";
  $user = "root";
  $con = mysql_connect("$server","$user");
  $db = mysql_select_db("cmdeso_db");
  if (!$con) {
    echo "1";
  }if (!$db) {
    echo "2";
  }

  $a = $b ="";
  $fname = $_POST['postfname'];
  $lname =  $_POST['postlname'];
  $email =  $_POST['postemail'];
  $password =  $_POST['postpassword'];
  $confirm_password =  $_POST['postconfirm_password'];
if  ((!empty($_POST['fname'])) && (!empty($_POST['lname'])) && (!empty($_POST['email'])) &&
      (!empty($_POST['password'])) && (!empty($_POST['confirm_password'])) )  {
  $sql1 = mysql_query("SELECT * FROM appl_acct WHERE acct_email = '$_POST[email]' ");
  while ($row = mysql_fetch_array($sql1)) {
    $a = $row['acct_email'];
    
  }
  $sql1 = mysql_query("SELECT * FROM admin_acct WHERE acct_email = '$_POST[email]' ");
   while ($row = mysql_fetch_array($sql1)) {
    $b = $row['acct_email'];
    
  }
  $email = strtolower($_POST['email']);
  $password = $_POST['password'];
  $confirm_password = $_POST['confirm_password'];
 $fname = ucfirst( strtolower($_POST['fname']));
      $lname = ucfirst( strtolower($_POST['lname']));
  
  if (( $a == $email )||( $b == $email)) { 
    echo "<script type='text/javascript'>alert('email already exist!')</script>";
  }else{
    if ($password == $confirm_password) {
      $password = sha1($password);
    $sql = mysql_query("INSERT INTO appl_acct(acct_fname,acct_lname,acct_email,acct_pass)
      VALUES('$fname','$lname','$email','$password')");
    
    echo "<script type='text/javascript' onClick='window.location.reload(true)'>alert('Successful registered')</script>"; 

    // $desc = "The admin ADD in Logs information ID " . $username ;
    // $act = "ADD";
    // $audit = mysql_query("INSERT INTO sdmo_audit(AUDIT_DESC,AUDIT_ACTION,AUDIT_DATE)VALUES('$desc','$act',now())");
    // echo "<script> location.replace('../index.php'); </script>";
    }else {echo "<script type='text/javascript'>alert('Password does not match!')</script>";}
    
  
  }
  
    }
          //header("location:SDMO_EQUIPMENTS_ADD.php");
      
?>