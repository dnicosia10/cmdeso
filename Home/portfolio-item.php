<?php
	$conn = mysql_connect("localhost","root")or die(mysql_error());
	$db = mysql_select_db("cmdeso_db")or die(mysql_error()); 
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

    <title>CMD-ESO</title>

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
        

   <header class="navbar navbar-inverse navbar-fixed-top" role="banner" style="background-color:#630b0bde; ">
        <div class="container" style="width: 100%;">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php"><img src="img/logo.png" alt="Basica"></a>
            </div>
            <div class="collapse navbar-collapse" >
                <ul class="nav navbar-nav navbar-right" >
                    <li class=""><a href="index.php">Home</a></li>
                    <li><a href="blog-post.php">Jobs</a></li>  
                    <li><a href="portfolio.php">Company</a></li>
                    
                   
                    <li><a href="contact-us.php">Contact</a></li>
                    <li class="active"><a href="about-us.php">About Us</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Other <i class="icon-angle-down"></i></a>
                        <ul class="dropdown-menu">
                           
                            <li><a href="signup/index.php">Signup</a></li>
                            <li><a href="signup/login.php"><i class="fa fa-user fa-fw"></i>Login</a></li>
                            <li class="divider"></li>
                            
                            <li><a href="terms.php">Terms of Use</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </header>

        <!-- Page Title -->
		<div class="section section-breadcrumbs">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h1>Company Details</h1>
					</div>
				</div>
			</div>
		</div>
        
        <div class="section">
	    	<div class="container">
	    		<div class="row">
	    			 <?php
	    			 
	                	
						$num =$_GET['id'];
	                		$sql = mysql_query("SELECT * FROM admin_job_fair_info WHERE job_archive = 'OFF' AND job_id = '$num'  ");
	                		
											while ($row = mysql_fetch_array($sql))
											{//## echo fetched data to display
											
	                	?> 
		        	
		        	
	    			<div class="col-sm-6">
	    				<div class="product-image-large">
	    					<img style="height: 338px;width: 543px;" src="/../home3/Admin/assets/img/<?php echo $row["job_img_logo"] ?>" alt="Item Name">
	    				</div>
	    				<div class="colors">
							<span class="color-white"></span>
							<span class="color-black"></span>
							<span class="color-blue"></span>
							<span class="color-orange"></span>
							<span class="color-green"></span>
						</div>
	    			</div>
	    			
	    			<!-- End Product Image & Available Colors -->
	    			<!-- Product Summary & Options -->
	    			<div class="col-sm-6 product-details">
	    				<h2><?php echo $row["job_company_name"]; ?></h2>
						<h3> <?php echo $row["job_company_slogan"]; ?>		</h3>
	    				<p>
						   <?php echo $row["job_About_company"]; ?>				
						</p>
	    									
						<h3>Project Details</h3>
						<p><strong>Website:</strong><?php echo $row["job_Website"]; ?></p>
						<p><strong>Contact #: </strong><?php echo $row["job_call"]; ?></p>
						<!-- <p><strong>Tags: </strong>Photography, Art, Graphics</p> -->
	    			</div>
	    			<!-- End Product Summary & Options -->
	    			
	    		</div>
			</div>
		</div>
		
	
		
<hr>
		
        <div class="section">
	    	<div class="container">
				<div class="row">
				
				<div class="section-title">
				<h1>Other Company</h1>
				</div>				
			
			<ul class="grid cs-style-2">

	        	<?php
	                }		
	                		$sql = mysql_query("SELECT * FROM admin_job_fair_info WHERE job_archive = 'OFF'   ");
	                		$num ="";
											while ($row = mysql_fetch_array($sql))
											{//## echo fetched data to display
											
	                	?> 
		        	<div class="col-md-3 col-sm-4">
						<figure>
							<img style="height: 158px;width: 285px; border: 2px solid transparent;border-color: green;border-radius: 5px;" src="/../home3/Admin/assets/img/<?php echo $row["job_img"] ?>" alt="img04">
							<figcaption>
								<h3>Company </h3>
								<span><?php echo $row["job_company_name"]; ?></span>
								<a href="portfolio-item.php?id=<?php echo $row["job_id"] ?>">Take a look</a>
							</figcaption>
						</figure>
		        	</div>	
		        	<?php
		        		}
		        	?>

				
			</ul>

				
				</div>
			</div>
		</div>		

	    <!-- Footer -->
	     <div class="footer">
	    	<div class="container">
			
		    
		    	<div class="row">
		    		<div class="col-md-12">
		    			
		    		</div>
		    	</div>
		    </div>
	    </div>

        <!-- Javascripts -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/jquery-1.9.1.min.js"><\/script>')</script>
        <script src="js/bootstrap.min.js"></script>
		
		<!-- Scrolling Nav JavaScript -->
		<script src="js/jquery.easing.min.js"></script>
		<script src="js/scrolling-nav.js"></script>		