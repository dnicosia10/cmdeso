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
		<?php
	        	
						$comp =$_GET['comp'];

	                		$sql = mysql_query("SELECT * FROM admin_job_fair_info WHERE job_archive = 'OFF' AND job_id = '$comp'  ");
	                		
											while ($row1 = mysql_fetch_array($sql))
											{//## echo fetched data to display
											$num += 1;
											
	                	?> 
	     <div class="section section-breadcrumbs">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h1><?php echo $row1["job_company_name"]; ?> Job</h1>
					</div>
				</div>
			</div>
		</div>
        
        <div class="section">
	    	<div class="container">
				<div class="row">
				<div class="col-sm-12">
				<img class="img-responsive" style="width: 100%;height: 300px; " src="/../home3/Admin/assets/img/<?php echo $row1["job_img_logo"] ?>" alt="Full Width Banner Image">
				<?php
					}
				?>
	</div>
	<?php
	$job =$_GET['job'];
			$sql = mysql_query("SELECT * FROM job_onjob_info WHERE onjob_archive='OFF' AND onjob_status = 'Active' AND onjob_id = '$job'  ");
									//$sql = mysql_query("SELECT * FROM admin_job_fair_info WHERE job_archive = 'ON' LIMIT 10  ");

									while ($row = mysql_fetch_array($sql))
									{//## echo fetched data to display
									//$num += 1;
									//$datatable_length = 10;
									//$format = date_format(date_create($row['jobfair_date'])," F  d,  Y ");
										$date = date_create($row['onjob_datetime']);
											$format = date_format($date, 'g:ia \o\n l ');
									?>
				<div class="col-sm-12">
						<hr>
						<h2><?php echo $row['onjob_title']; ?></h2>
						<h3><?php echo $row['onjob_position']; ?></h3>
						<p><h4>Requirements</h4>
							<?php echo $row['onjob_req']; ?>
						</p>
						<p><h4>Description</h4>
							<?php echo $row['onjob_summary']; ?>
						</p>						
						<h3>Location</h3>
						<p><h4>When?</h4>
							<?php  echo $format; ?>
						</p>
						<p><h4>Where?</h4>
							<?php echo $row['onjob_location']; ?>
						</p>
						
						
						
				<div class="clients-logo-wrapper text-center row">
					<div class="col-lg-2 col-md-1 col-sm-3 col-xs-6"><a href="#"><img src="img/logos/logo-1.jpg" alt="Client Name"></a></div>
					<div class="col-lg-2 col-md-1 col-sm-3 col-xs-6"><a href="#"><img src="img/logos/logo-2.jpg" alt="Client Name"></a></div>
					<div class="col-lg-2 col-md-1 col-sm-3 col-xs-6"><a href="#"><img src="img/logos/logo-3.jpg" alt="Client Name"></a></div>
					<div class="col-lg-2 col-md-1 col-sm-3 col-xs-6"><a href="#"><img src="img/logos/logo-4.jpg" alt="Client Name"></a></div>
					<div class="col-lg-2 col-md-1 col-sm-3 col-xs-6"><a href="#"><img src="img/logos/logo-5.jpg" alt="Client Name"></a></div>
					<div class="col-lg-2 col-md-1 col-sm-3 col-xs-6"><a href="#"><img src="img/logos/logo-6.jpg" alt="Client Name"></a></div>
				</div>						
					</div>

						<?php
							}
						?>

				</div>
			</div>
		</div>
		

<hr>		

	

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

    </body>
</html>