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
  

//condition for redunduncy restriction
  if (isset($_POST['submit'])) {
  
  $a = $b ="";
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
      

}
?> 
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

   
 <link rel="stylesheet" href="css&java/style.css">
  <link rel="stylesheet" href="css&java/set1.css">

  <!--Google Fonts-->
  <link href='css&java/font1.ccs' rel='stylesheet' type='text/css'>
  <link href='css&java/font2.ccs' rel='stylesheet' type='text/css'>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom CSS -->
	<link rel="stylesheet" href="css/main.css">
    <link href="css/custom.css" rel="stylesheet">
	
	<script src="//use.edgefonts.net/bebas-neue.js"></script>

    <!-- Custom Fonts & Icons -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,600,800' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/icomoon-social.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	
	<script src="js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
	

</head>

    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->
        

       <header class="navbar navbar-inverse navbar-fixed-top" role="banner" style="background: #339933; color: black;">
        <div class="container" >
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html"><img src="img/logo.png" alt="Basica"></a>
            </div>
            <div class="collapse navbar-collapse" style=" color: black;">
                <ul class="nav navbar-nav navbar-right" >
                    <li ><a href="index.html" style=" color: white;" >Home</a></li>
                     <li><a href="portfolio.html" style=" color: white;">Job Fair</a></li>
                    <li><a href="about-us.html" style=" color: white;">About Us</a></li>
                    <li><a href="term.php" style=" color: white;">Term of Use</a></li>
                   
                   
                    <!-- <li><a href="blog.html" style=" color: white;">Blog</a></li>  -->
                    <li><a href="contact-us.html" style=" color: white;">Contact</a></li>
                     <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" style=" color: white;" class="active">Other <i class="icon-angle-down"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="register.php" style=" color: black;">Sign up</a></li>
                            <li class="divider"></li>
                            <li><a href="Login_v2/index.html" style=" color: black;">Login</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </header><!--/header-->



        <!-- Page Title -->
		<div class="section section-breadcrumbs">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h1>Create Account</h1>
					</div>
				</div>
			</div>
		</div>
		
		
        <div class="section">
	    	<div class="container">
				<div class="row">
				<div class="col-sm-12">
				  <form method="POST">
  
      
      <div class="col-md-6 right-side">
        <span class="input input--hoshi">
          <input class="input__field input__field--hoshi"  type="text" name="fname" id="fname" >
          <label class="input__label input__label--hoshi input__label--hoshi-color-3" for="name">
            <span class="input__label-content input__label-content--hoshi">First Name</span>
          </label>
        </span>
         <span class="input input--hoshi">
          <input  class="input__field input__field--hoshi"  type="text" name="lname" id="lname" >
          <label class="input__label input__label--hoshi input__label--hoshi-color-3" for="name">
            <span class="input__label-content input__label-content--hoshi">Last Name</span>
          </label>
        </span>
        
        <span class="input input--hoshi">
          <input class="input__field input__field--hoshi" type="text" name="email" id="email" >
          <label class="input__label input__label--hoshi input__label--hoshi-color-3" for="email">
            <span class="input__label-content input__label-content--hoshi">E-mail</span>
          </label>
        </span>
        <span class="input input--hoshi">
        
          <input class="input__field input__field--hoshi" type="password" name="password" id="password" >
          <label class="input__label input__label--hoshi input__label--hoshi-color-3" for="password">
            <span class="input__label-content input__label-content--hoshi">Password</span></label>
        </span>
        <span class="input input--hoshi">
          <input class="input__field input__field--hoshi" type="password" name="confirm_password" id="confirm_password" >
          <label  class="input__label input__label--hoshi input__label--hoshi-color-3" for="password1">
            <span  class="input__label-content input__label-content--hoshi">Repeat Passowrd</span></label>
        </span>
        <div class="cta">
          <input type="submit" value="Sign-Up Now" class="btn btn-primary pull-left" id="post();">
           
          <span><a href="#">I am already a member</a></span>
        </div>
       
      </div>
  
</form>		
	

<head>

  <meta charset="UTF-8">
 

  
  
      <style>
      #success_message{ display: none;}
    </style>

  <script>
  window.console = window.console || function(t) {};
</script>

  
  
  <script>
  if (document.location.search.match(/type=embed/gi)) {
    window.parent.postMessage("resize", "*");
  }
</script>



</head>

<body translate="no" >






















  <div class="container">

    <form class="well form-horizontal" action=" " method="POST" >
<fieldset>

<!-- Form Name -->
<legend>Sign up now!</legend>

<!-- Text input-->
 
 





















<div class="form-group">
  
  <label class="col-md-4 control-label">First Name</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input  name="fname" placeholder="First Name" class="form-control"  type="text"  required="" autocomplete="off" minlength="2">
    </div>
  </div>
</div>

<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label" >Last Name</label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input name="lname" placeholder="Last Name" class="form-control"  type="text" required="" autocomplete="off" minlength="2">
    </div>
  </div>
</div>

<!-- Text input-->
       <div class="form-group">
  <label class="col-md-4 control-label">Email</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group" data-validate = "Valid email is: a@b.c">
        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input name="email" placeholder="Email Address" class="form-control"  type="email" required="" >
    </div>
  </div>
</div>


<!-- Text input-->
       
<div class="form-group">
  <label class="col-md-4 control-label">Password</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-ok"></i></span>
  <input name="password" placeholder="Minimum of 8 character" class="form-control" type="Password" required="" minlength="8" maxlength="20">
    </div>
  </div>
</div>

<!-- Text input-->
      </br>
<div class="form-group">
  <label class="col-md-4 control-label"> Re-enter</br>Password</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-ok"></i></span>
  <input name="confirm_password" placeholder="Password Confirmation" class="form-control" type="Password" required="" minlength="8" maxlength="20">
    </div>
  </div>
</div>


  </div>
</div>

<!-- Success message -->
<div class="alert alert-success" role="alert" id="success_message">Success <i class="glyphicon glyphicon-thumbs-up"></i> Thanks for contacting us, we will get back to you shortly.</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label"></label>
  <div class="col-md-4">
    <input name="submit" type="submit" value="Register" class="btn btn-warning" >
  </div>
</div>

</fieldset>
</form>

</div>
    </div><!-- /.container -->
    <script src="//static.codepen.io/assets/common/stopExecutionOnTimeout-b2a7b3fe212eaa732349046d8416e00a9dec26eb7fd347590fbced3ab38af52e.js"></script>

  <script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js'></script>
<script src='//cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.4.5/js/bootstrapvalidator.min.js'></script>
<script type="text/javascript"></script>
<script src="ccs&java/jquery.min.js"></script>
<script src="ccs&java/scripts.js"></script>
<script src="ccs&java/classie.js"></script>
<script type="text/javascript">


  

    <script >
        $(document).ready(function() {
    $('#contact_form').bootstrapValidator({
        // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            fname: {
                validators: {
                        stringLength: {
                        min: 2,
                    },
                        notEmpty: {
                        message: 'Please supply your first name'
                    }
                }
            },
             lname: {
                validators: {
                     stringLength: {
                        min: 2,
                    },
                    notEmpty: {
                        message: 'Please supply your last name'
                    }
                }
            },
            email: {
                 validators: {

                     
                    notEmpty: {
                        message: 'Please supply your Email'
                    },

                }
            },
            password: {
                validators: {
                     stringLength: {
                        min: 5,
                         message: 'Weak'
                    },
                    notEmpty: {
                        message: 'Weak'
                    }
                }
            },
            address: {
                validators: {
                     stringLength: {
                        min: 8,
                    },
                    notEmpty: {
                        message: 'Please Re-enter your Password'
                    }
                }
            }
            }
        })
        .on('success.form.bv', function(e) {
            $('#success_message').slideDown({ opacity: "show" }, "slow") // Do something ...
                $('#contact_form').data('bootstrapValidator').resetForm();

            // Prevent form submission
            e.preventDefault();

            // Get the form instance
            var $form = $(e.target);

            // Get the BootstrapValidator instance
            var bv = $form.data('bootstrapValidator');

            // Use Ajax to submit form data
            $.post($form.attr('action'), $form.serialize(), function(result) {
                console.log(result);
            }, 'json');
        });
});
      //# sourceURL=pen.js

    </script>
	
					</div>
				</div>
			</div>
		</div>


  
  

</body>

</html>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


	    <div class="footer">
	    	<div class="container">
			
		    	<div class="row">
				
		    		<div class="col-footer col-md-4 col-xs-6">
		    			<h3>Contact Us</h3>
		    			<p class="contact-us-details">
	        				<b>Address:</b> 123 Downtown Avenue, Manhattan, New York, United States of America<br/>
	        				<b>Phone:</b> +1 123 45678910<br/>
	        				<b>Fax:</b> +1 123 45678910<br/>
	        				<b>Email:</b> <a href="mailto:info@yourcompanydomain.com">info@yourcompanydomain.com</a>
	        			</p>
		    		</div>				
		    		<div class="col-footer col-md-4 col-xs-6">
		    			<h3>Our Social Networks</h3>
						<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam.</p>
		    			<div>
		    				<img src="img/icons/facebook.png" width="32" alt="Facebook">
		    				<img src="img/icons/twitter.png" width="32" alt="Twitter">
		    				<img src="img/icons/linkedin.png" width="32" alt="LinkedIn">
							<img src="img/icons/rss.png" width="32" alt="RSS Feed">
						</div>
		    		</div>
		    		<div class="col-footer col-md-4 col-xs-6">
		    			<h3>About Our Company</h3>
		    				<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci.</p>
		    		</div>

		    	</div>
		    	<div class="row">
		    		<div class="col-md-12">
		    			<div class="footer-copyright">&copy; 2014 <a href="http://www.vactualart.com/portfolio-item/basica-a-free-html5-template/">Basica</a> Bootstrap HTML Template. By <a href="http://www.vactualart.com">Vactual Art</a>.</div>
		    		</div>
		    	</div>
		    </div>
	    </div>

	</html>



