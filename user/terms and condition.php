<?php
session_start();
//session_destroy();
  if( (!isset($_SESSION["uName"])) && (!isset($_SESSION["hashed_pass"])) 
  	&& ( 'user'!=$_SESSION["name"]) ) {
    header("Location:\.\home3/home/signup/login.php");
    echo "error";
  }if ('user'!=$_SESSION["name"]) {
    	header("Location:\.\home3/home/signup/login.php");
    }

	$conn = mysql_connect("localhost","root")or die(mysql_error());
	$db = mysql_select_db("cmdeso_db")or die(mysql_error()); 
	$num = $_SESSION['num'];
	$_SESSION['num'] = $num;


	$error1 = $error2 = $error3 = " ";

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
		
		<style type="text/css">
			.error{
		color:red;
		font-size: 25px;
	}
		</style>
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
						<a class="navbar-brand" href="index.html"><img src="assets/img/logo.png" class="img-responsive" alt=""></a>
					</div>
					<div class="navbar-collapse">
						<ul class="nav navbar-top-links navbar-right"> 
							
							<!-- /.dropdown -->
							
							<!-- /.dropdown -->
							<li class="dropdown">
								<a class="dropdown-toggle" data-toggle="dropdown" href="#">
									<i class="fa fa-user-circle fa-fw"></i>
								</a>
								<ul class="dropdown-menu dropdown-user">
									<li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
									</li>
									<li><a href="my-account.php"><i class="fa fa-gear fa-fw"></i> Settings</a>
									</li>
									<li class="divider"></li>
									<li><a href="http://themezhub.com/"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
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
			
			<!-- /. NAV SIDE  -->
			
			<div id="page"  style="width: 100%;">
				           
				 <!-- /. ROW  -->
				<div id="page-inner">
				   <div class="row">
						<div class="col-md-12">
							<div class="add-job_container">
								
								<div class="job-box" style="height: 450px;">
<p id="pss" align="center">Terms of Use</p>
									<div id="cont4">


	Please read these Terms of Use carefully, they contain important information about your rights and obligations in accessing and using cmd-eso.com  ("our website"). These Terms of Use govern your use of our website and your subscription to the services available through our website (the "Service", "Service Account") provided by Flowing Air Studios LLC, 770 E Main St. #250, Lehi, UT 84043, 1-888-416-0925 ("OnlineJobs", "cmd-eso.com ", "we" or "us") to you.
            Each time you use our website, you agree to be bound by these Terms of Use, as amended from time to time with or without notice to you. If you are entering into this Terms of Use on behalf of a company or other legal entity, you represent you have the authority to bind such entity to these Terms of Use, in which case the terms "you" or "your" shall refer to such entity. If you do not have such authority, or if you do not agree with these Terms of Use, you may not use our website or Service. Please see our Privacy Statement, which is incorporated into these Terms of Use by reference.
            <h3> 1. our service</h3>
            1.1 Our website and Service provided to you through our website are provided on an AS IS basis. You agree that OnlineJobs exclusively reserves the right and may, at any time and without notice and any liability to you, modify or discontinue this website and its services or delete the data you provide, whether temporarily or permanently. OnlineJobs shall have no responsibility or liability for the timeliness, deletion, failure to store, inaccuracy, or improper delivery of any data or information. OnlineJobs also reserves the right to control the amount of sales to the service at its sole discretion.
            1.2 Unless explicitly stated, any new features, including new content and Services, shall be subject to these Terms of Use.
            1.3 If any modification of the Service is unacceptable to you, your only recourse is to cancel your subscription. Your continued use of the Service following our posting of a change to the conditions or the website will constitute a binding acceptance of that change.
            <h3> 2. YOUR RESPONSIBILITIES AND REGISTRATION OBLIGATIONS</h3>
            In order to purchase the Service, you must register on our site, agree to provide truthful information when requested, be at least the age of eighteen (18) or older, and follow the purchase procedure displayed in "Order/Pricing" and described below in Clause 5. When registering, you explicitly agree to our Terms of Use and as may be modified by us from time to time and available here.
            <h3> 3. PRIVACY POLICY</h3>
            Registration data and other personally identifiable information that we may collect is subject to the terms of our Privacy Statement.
            <h3> 4. SERVICE ACCOUNT AND PASSWORD</h3>
            4.1 The Service is supplied to you via a Service Account in consideration of the payment of the price defined in Clause 5.1.
            4.2 After receipt of your payment in accordance with Clause 5.4, OnlineJobs will create a Service Account in your name by which you will be permitted to access the Service in accordance with these Terms of Use.
            4.3 The Service Account is accessed by an individual password that will be sent to you on receipt of payment of the price and in accordance with these Terms of Use.
            4.4 You are responsible to maintain the confidentiality of your password and shall be responsible for all uses via your password, whether authorized or unauthorized by you. You agree to immediately notify us of any unauthorized use of your Service Account or password.
            4.5 When using a public computer, you must sign out when you have finished using our website.
            4.6 You may only open one Service Account and you agree that the operation of your Service Account is exclusive to you. Furthermore you agree that only you will receive the Services via your Service Account. NOTE: This includes Recruiting agencies. If your company uses our service to hire a worker for a DIFFERENT company....i.e., a client of your agency, that is considered a breach of our terms. You may only hire for your OWN company, not for that of a client, or any other 3rd party.
            4.7 By allowing others to use your Service Account and/or password you will be in breach of these terms and conditions and OnlineJobs will be entitled to terminate this Agreement in accordance with Clause 10.
            4.8 Delivery times of your account should be within 10 minutes of ordering. However, this delivery time is an estimate and may vary due to exceptional or unforeseen circumstances.
            4.9 In the unlikely event that you have not received access to your account within 30 minutes from acceptance of your order, or if you have any complaints, please contact us via support@cmd-eso.com  or by regular mail to OnlineJobs,  770 E Main St. #250, Lehi, UT 84043.
            <h3> 5. PRICES AND PAYMENT</h3>
            5.1 Prices charged are as shown on the website at the time and date of your purchase. We may change the price of the Service before you place an order for a subscription. We try to ensure that the prices displayed on our website are accurate but the price on your order will need to be validated by us as part of the acceptance procedure. We will inform you if a Service's price is higher than stated in your order and you may cancel the order.
            5.2 Prices are shown in US Dollars on the website.
            5.3 All the prices shown are inclusive of any taxes.
            5.4 Before your order can be accepted we must receive payment in full. Payment shall only be deemed to have occurred once we are in receipt of cleared funds.
            5.5 When ordering via the website, you must pay by credit or debit card at the time of the order. We accept Visa, MasterCard, American Express, and Discover.
            5.6 We do not accept payment by mail or fax.
            5.7 You confirm that all details provided by you to us for the purpose of purchasing the Service will be correct. We reserve the right to obtain validation of your credit or debit card details before providing the Service to you.
            5.8 We may refuse any order placed by you.
            <h3> 6. REFUNDS</h3>
            You expressly acknowledge that all Services are non-refundable. However, in accordance with our 100% satisfaction guarantee, we will honor refunds for customers that have a legitimate grievance against the site. Only the most recent subscription payment will be refunded (i.e., the last payment made to cmd-eso.com  will be the only payment refunded), and no payment older than 31 days will be refunded. One refund per customer.
            <h3> 7. LICENSE GRANT &amp; RESTRICTIONS</h3>
            7.1 Upon satisfactory payment as described in Article 5, OnlineJobs hereby grants you a non-exclusive, non-transferable, worldwide right to use the Service, solely for your own internal business purposes, subject to the terms and conditions of this Terms of Use. All rights not expressly granted to you are reserved by OnlineJobs.
            7.2 You may not access the Service if you are a direct competitor of OnlineJobs. In addition, you may not access the Service for purposes of monitoring its availability, performance or functionality, or for any other benchmarking or competitive purposes. You are also prohibited from enticing or inviting users to signup or use another website.
            7.3 You shall not (i) license, sublicense, sell, resell, transfer, assign, distribute, or otherwise commercially exploit or make available to any third party the Service in any way; (ii) modify or make derivative works based upon the Service; (iii) create Internet "links" to the Service or "frame" or "mirror" the Service on any other server or wireless or Internet-based device; or (iv) reverse engineer or access the Service in order to (a) build a competitive product or service, (b) build a product using similar ideas, features, functions or graphics of the Service, or (c) copy any ideas, features or graphics of the Service.
            7.4 You are only permitted to use the Service personally and agree to do so without the use of any automated means including but not limited to the use of robotic tools except where permission has been expressly granted by OnlineJobs.
            7.5 You shall not: (i) send or store material containing software viruses, worms, Trojan horses or other harmful computer code, files, scripts, agents or programs; (ii) interfere with or disrupt the integrity or performance of the Service or the data contained therein; or (iii) attempt to gain unauthorized access to the Service or its related systems or networks.
            <h3> 8. INTELLECTUAL PROPERTY OWNERSHIP</h3>
            Flowing Air Studios LLC alone (and its licensors, where applicable) shall own all right, title and interest, including all related intellectual property rights including unpatented inventions, patent applications, patents, design rights, copyrights, trademarks, service marks, trade names, domain name rights, know-how and other trade secret rights, and all other intellectual property rights, derivatives thereof, and forms of protection of a similar nature anywhere in the world, in and to the cmd-eso.com  technology (including software, hardware, products, processes, algorithms, user interfaces, know-how, techniques, designs and other tangible or intangible technical material or information) and Service and any suggestions, ideas, enhancement requests, feedback, recommendations or other information provided by you or any other party relating to the Service. This Terms of Use is not a sale and does not convey to you any rights of ownership in or related to the Service, cmd-eso.com  technology or the intellectual property rights owned by cmd-eso.com . The cmd-eso.com  na
<form action="index.php">
	  <p id="pss" align="center"> I agree to the <a href="">Terms of Use</a>
      <input type="checkbox" style="width: 40px;padding-top: 5px;" name="check" value="yes" required="" >
      <span class="checkmark" ></span>
      </p>
	<input type="submit" name="go" value="Go!">
</form>
</div>
</div>
									
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

<style type="text/css">
	#cont1{
	/* HEADER */
		background-color:white;
		width:100%;
		height:90px;
		border-bottom-color:white;
		border-bottom-style:solid;
		border-bottom-width:2px;
}
#img1{
	width:10%;
	height:70px;
	float:left;
}
#div{
	padding-top:15px;
	float:left;
	font-size:35px;
}






#cont2{
	/* NAVIGATION */
		background-color:white;
		width:100%;
		height:50px;
		text-align:center;
}

#ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: black;
}

#li {
	
    float: left;
	width:19.99%;
	height:48px;
}

#li #a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

#li #a:hover {
    background-color: dodgerblue;
}

#cont4{
	/* CONTENT */
		background-color:white;
		width:100%;
		height:550px;
		overflow:scroll;
			
}

#content1{
	text-align:center;
	font-size:35px;
	font-weight:bold;
}

#cont4::-webkit-scrollbar {
    width: 12px;
}
#cont4::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3); 
    -webkit-border-radius: 10px;
    border-radius: 10px;
}
 
#cont4::-webkit-scrollbar-thumb {
    -webkit-border-radius: 10px;
    border-radius: 10px;
    background-color:orange; 
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.5); 
}
#cont4::-webkit-scrollbar-thumb:hover {
	background-color:orangered; 
}
#search{
	float:right;
}
#content5{
	position:absolute;
	right:120px;
	top:680px;
	height:60px;
}
input[type=submit], input[type=button], input[type=reset] {
    background-color: #4CAF50;
    border: none;
    color: white;
    height:50px;
    text-decoration: none;
    width:100%;
    cursor: pointer;
}
input:hover{
	background-color: lightgreen;
}
ol{
	margin-left:80px;
	margin-right:80px;
}
li{
	font-family: "Times New Roman", Times, serif;
	font-size:20px;
}
#pss{
	width:99%;
	text-align:center;
    font-family: "Times New Roman", Times, serif;
	font-weight:bold;
	font-size:40px;
}


#content5{
	position:absolute;
	right:120px;
	top:680px;
	height:60px;
}
input{
	height:40px;
	border-radius:8px;
	background-color:transparent;
	border:2px;
	border-style:solid;
	border-color:black;
}
input:hover{
	background-color: lightgreen;
}


#cont5{
	/* FOOTER */
		background-color:black;
		width:100%;
		height:20px;
		text-align:center;
		color:white;
		
}
body{
	
	margin:0px;
	margin-top:20px;
	margin-left:80px;
	margin-bottom:80px;
	margin-right:80px;
	border-left:14px;
	
	border-top:25px;
	
}















#cont6{
	/* HEADER */
		background-color:white;
		width:100%;
		height:50px;
		border-bottom-color:white;
		border-bottom-style:solid;
		border-bottom-width:2px;
}
#div1{
	
}
</style>
</html>
