
<!DOCTYPE html>
<html class="no-js"> 
<html lang="en">

<head>
<style type="text/css">
	ul{
		color: black
	}
</style>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>CMD-ESO (2)</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom CSS -->
	<link rel="stylesheet" href="css/main.css">
    <link href="css/custom.css" rel="stylesheet">
	
	<script src="//use.edgefonts.net/bebas-neue.js"></script>

    <!-- Custom Fonts & Icons -->
    <!-- <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,600,800' rel='stylesheet' type='text/css'> -->
	<link rel="stylesheet" href="css/icomoon-social.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	
	<script src="js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
	<style type="text/css">
		
		li{
			color: white;
		}
	</style>

</head>

<body>

        

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
                    <li class="active"><a href="index.php">Home</a></li>
                    <li><a href="blog-post.php">Jobs</a></li>  
                    <li><a href="portfolio.php">Company</a></li>
                    
                   
                    <li><a href="contact-us.php">Contact</a></li>
                    <li class=""><a href="about-us.php">About Us</a></li>
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


	
	
    <section id="main-slider" class="no-margin">
        <div class="carousel slide" data-ride="carousel">

            <ol class="carousel-indicators" >
                <li data-target="#main-slider" data-slide-to="0" class="active"></li>
                <li data-target="#main-slider" data-slide-to="1"></li>
                <li data-target="#main-slider" data-slide-to="2"></li>
              
            </ol>
            <div class="carousel-inner" style="height: 100%;">


            	 <?php
                	$conn = mysql_connect("localhost","root")or die(mysql_error());
					$db = mysql_select_db("cmdeso_db")or die(mysql_error()); 
          //       		$sql = mysql_query("SELECT * FROM jobfair_info LIMIT 1  ");
          //       		$num ="";
										// while ($row = mysql_fetch_array($sql))
										// {//## echo fetched data to display
										// $num += 1;
                	?> 

                <div class="item active"   >
                <img src="img/Tarlac.jpg" style="height: 100%; width: 100%;">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="carousel-content centered">
                                	<!--  </br>/../home3/Admin/assets/img/wa
                                	  </br>
                                	   </br>
                                    <h2 class="animation animated-item-1"><p class="animation animated-item-2">Learn to balance a dream and a job until your</p> DREAM becomes your JOB</h2> -->

                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--/.item-->
               
               
                <div class="item" >
                	<img src="img/Tarlac1.jpg" style="height: 100%; width: 100%;">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="carousel-content center centered">
                                   <!--  <h2 class="animation animated-item-1">Powerful and Responsive HTML Template</h2>
                                    <p class="animation animated-item-2">Phasellus adipiscing felis a dictum dictum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec at ligula risus. </p>
                                    <br>
                                    <a class="btn btn-md animation animated-item-3" href="#">Learn More</a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--/.item-->
                <div class="item" >
                	<img src="img/banner.jpg" style="height: 100%; width: 100%;">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="carousel-content centered">
                                   <!--  <h2 class="animation animated-item-1">Works Seamlessly Well on All Devices</h2>
                                    <p class="animation animated-item-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vitae euismod lacus. Maecenas in tempor lectus. Nam mattis, odio ut dapibus ornare, libero. </p>
                                    <br>
									<a class="btn btn-md animation animated-item-3" href="#">Learn More</a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--/.item-->
                
            </div><!--/.carousel-inner-->
        </div><!--/.carousel-->
        <a class="prev hidden-xs" href="#main-slider" data-slide="prev">
            <i class="icon-angle-left"></i>
        </a>
        <a class="next hidden-xs" href="#main-slider" data-slide="next">
            <i class="icon-angle-right"></i>
        </a>
    </section><!--/#main-slider-->
    	<div class="clients-logo-wrapper text-center row">
					<div class="col-lg-3 col-md-1 col-sm-4 col-xs-6"><a href="https://www.dole.gov.ph/" title="DOLE"><img src="img/logos/logo-1.png" alt="Client Name"></a></div>
					<div class="col-lg-3 col-md-1 col-sm-4 col-xs-6"><a href="https://www.dti.gov.ph/" title="TESDA"><img src="img/logos/logo-2.png" alt="Client Name"></a></div>
					<div class="col-lg-3 col-md-1 col-sm-4 col-xs-6"><a title="Tarlac Province" href="tarlac.com.ph/"><img src="img/logos/logo-3.png" alt="Client Name"></a></div>
					<div class="col-lg-3 col-md-1 col-sm-4 col-xs-6"><a title="PESO" href="http://www.ble.dole.gov.ph/index.php/porgrams-projects/2013-12-16-01-22-48/about-peso" title=""><img src="img/logos/logo-4.png" alt="Client Name"></a></div>
					
		
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="col-lg-3 col-md-1 col-sm-4 col-xs-6" style="background-color: red;"><a href="#"></a></div>
					<div class="col-lg-3 col-md-1 col-sm-4 col-xs-6" style="background-color: red;"><a href="#"></a></div>
					<div class="col-lg-3 col-md-1 col-sm-4 col-xs-6" style="background-color: red;"><a href="#"></a></div>
					<div class="col-lg-3 col-md-1 col-sm-4 col-xs-6" style="background-color: red;"><a href="#"></a></div>
					</div>
				</div>
			</div>
		
				</div>	
	
		<!-- Call to Action Bar -->
	   <div class="section section-breadcrumbs">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h1>Take an easy step</h1>
					</div>
				</div>
			</div>
		</div>
		<!-- End Call to Action Bar -->


		<!-- Services -->
        <div class="section section-white">
	        <div class="container">
	        	<div class="row">
	        		<div class="col-md-4 col-sm-6">
	        			<div class="service-wrapper">
		        			<i class="icon-user"></i>
		        			<h3>Step 1</h3>
		        			<p>Create your own account <br/>and manage it in your own.</p>
		        			<a href="signup/index.php" class="btn btn-red">Register</a>
		        		</div>
	        		</div>
	        		<div class="col-md-4 col-sm-6">
	        			<div class="service-wrapper">
		        			<i class="icon-briefcase"></i>
		        			<h3>Step 2</h3>
		        			<p>Use your account to create CV <br/>and securely modify your information.</p>
		        			<a href="signup/index.php" class="btn btn-red">Login </a>
		        		</div>
	        		</div>
	        		<div class="col-md-4 col-sm-6">
	        			<div class="service-wrapper">
		        			<i class="icon-calendar"></i>
		        			<h3>Step 3</h3>
		        			<p>See the match job on your account<br/> that you can send your CV.
		        			</p>
		        			<a href="../user/index.php" class="btn btn-red">View Job Match</a>
		        		</div>
	        		</div>
	        	</div>
	        </div>
	    </div>

	    <!-- End Services -->
<div class="section section-breadcrumbs">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h1>Job Fair</h1>
					</div>
				</div>
			</div>
		</div>
 <div class="section section-white" style="">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="calltoaction-wrapper">
							
							 <?php
	    			 
	                	
						
	                		$sql = mysql_query("SELECT * FROM jobfair_info WHERE jobfair_archive = 'OFF'  ");
	                		
											while ($row = mysql_fetch_array($sql))
											{//## echo fetched data to display
											
	                	?> 
		        	
		        	
	    			<div class="col-sm-12">
	    				<div class="product-image-large">
	    					<img style="height: 338px;width: 1000px;" src="/../home3/Admin/assets/img/<?php echo $row["jobfair_img"] ?>" alt="Item Name">
	    				</div>
						</div>
					<?php }?>
					</div>
				</div>
			</div>
		</div>
<hr>

		<!-- Our Portfolio -->	

        <div class="section section-white">
	        <div class="container">
	        	<div class="row">
	
				<div class="section-title">
				<h1>Our Company</h1>
				</div>
		
		
			<ul class="grid cs-style-3">

					 <?php
	                		
	                		$sql = mysql_query("SELECT * FROM admin_job_fair_info WHERE job_archive = 'OFF' LIMIT 6  ");
	                		$num ="";
											while ($row = mysql_fetch_array($sql))
											{//## echo fetched data to display
											$num += 1;
	                	?> 
		        	<div class="col-md-3 col-sm-5">
						<figure>
							<img style="height: 116px;width: 246px; border: 2px solid transparent;border-color: green;border-radius: 5px;" src="/../home3/Admin/assets/img/<?php echo $row["job_img"] ?>" alt="img04">
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
		<!-- Our Portfolio -->
			
<hr>

		<!-- Our Clients -->
	   
	    	
	    <!-- End Our Clients -->

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