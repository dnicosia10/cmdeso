<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Creative CV</title>
    <meta name="description" content="Creative CV is a HTML resume template for professionals. Built with Bootstrap 4, Now UI Kit and FontAwesome, this modern and responsive design template is perfect to showcase your portfolio, skils and experience."/>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href="cv/css/aos.css" rel="stylesheet">
    <link href="cv/css/bootstrap.min.css" rel="stylesheet">
    <link href="cv/styles/main.css" rel="stylesheet">
  </head>
  <body id="top">
    
    <div class="page-content">
      <div>
<div class="profile-page">
  
         <?php 


// session_start();
//  session_destroy();
//   if( (!isset($_SESSION["uName"])) && (!isset($_SESSION["hashed_pass"])) ) {
//     header("Location:\.\home3/home/signup/login.php");
//   }
//     $b="";
   $conn = mysql_connect("localhost","root")or die(mysql_error());
   $db = mysql_select_db("cmdeso_db")or die(mysql_error()); 

        
      $three = mysql_query("SELECT * FROM appl_info WHERE acct_id = 1 ");
  while ($row = mysql_fetch_array($three)) {
    

  

        echo ' <div class="h2 title">
           <div class="cc-profile-image"><a href="#"><img src="assets/img/'. $row["appl_img"] .'" alt="Image"/></a></div>'. $row["appl_fname"]." " . $row["appl_mname"] . " " . $row["appl_lname"] .'</div>
          
        </div>
      </div>';
      }
      $four = mysql_query("SELECT * FROM appl_info WHERE acct_id = 1  ");
  while ($row = mysql_fetch_array($four)) {
   $date=date_create($row['appl_birthd']);
$format =  date_format($date," F  d,  Y ");
  
     
echo '<div class="section" id="about">
  <div class="container">
  <div class="h4 text-center mb-4 title">Personal Information</div>
    <div class="card" data-aos="fade-up" data-aos-offset="10">
      <div class="row" style="padding-top:50px;">
        <div class="col-lg-6 col-md-12" >

          
            

            
            <div class="card-body">
            
            <div class="row">
              <div class="col-sm-4"><strong class="text-uppercase">Name (F/M/L):</strong></div>
              <div class="col-sm-8">'. $row["appl_fname"] ." " .$row["appl_mname"]." " .$row["appl_lname"].'</div>
            </div>
            <div class="row mt-3">
              <div class="col-sm-4"><strong class="text-uppercase">Birth Date:</strong></div>
              <div class="col-sm-8">'. $format .'</div>
            </div>
            <div class="row mt-3">
              <div class="col-sm-4"><strong class="text-uppercase">Birth Place:</strong></div>
              <div class="col-sm-8">'. $row["appl_birthp"] .'</div>
            </div>
            <div class="row mt-3">
              <div class="col-sm-4"><strong class="text-uppercase">Address:</strong></div>
              <div class="col-sm-8">'. $row["appl_prov"] . ", " . $row["appl_street"] .'</div>
            </div>
            <div class="row mt-3">
              <div class="col-sm-4"><strong class="text-uppercase">Sex:</strong></div>
              <div class="col-sm-8">'. $row["appl_sex"] .'</div>
            </div>
            <div class="row mt-3">
              <div class="col-sm-4"><strong class="text-uppercase">Nationality:</strong></div>
              <div class="col-sm-8">'. $row["appl_nationality"] .'</div></div>

            
          </div>
        </div><div class="col-lg-6 col-md-12">
          <div class="card-body">
            
            <div class="row">
              <div class="col-sm-4"><strong class="text-uppercase">Age:</strong></div>
              <div class="col-sm-8">'. $row["appl_age"] .'</div>
            </div>
            <div class="row mt-3">
              <div class="col-sm-4"><strong class="text-uppercase">Religion:</strong></div>
              <div class="col-sm-8">'. $row["appl_religion"] .'</div>
            </div>
            <div class="row mt-3">
              <div class="col-sm-4"><strong class="text-uppercase">Phone:</strong></div>
              <div class="col-sm-8">'. $row["appl_contactn"] .'</div>
            </div>
            <div class="row mt-3">
              <div class="col-sm-4"><strong class="text-uppercase">Email:</strong></div>
              <div class="col-sm-8">'. $row["appl_email"] .'</div>
            </div>
            <div class="row mt-3">
              <div class="col-sm-4"><strong class="text-uppercase">Zip-code:</strong></div>
              <div class="col-sm-8">'. $row["appl_zipc"] .'</div>
            </div>
            <div class="row mt-3">
              <div class="col-sm-4"><strong class="text-uppercase">Civil Status:</strong></div>
              <div class="col-sm-8">'. $row["appl_civils"] .'</div></div>';
            }
              ?>
            
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="section" id="experience">
  <div class="container cc-experience">
    <div class="h4 text-center mb-4 title">Work Experience</div>
   
          <?php

           $five = mysql_query("SELECT * FROM appl_info_exp WHERE acct_id = 1  ");
              while ($row = mysql_fetch_array($five)) {
              $date_start=date_create($row['exp_date_start']);
              $date_end=date_create($row['exp_date_end']);
              $format_start =  date_format($date_start," F  Y ");
              $format_end =  date_format($date_end," F  Y ");
          echo' <div class="card">
      <div class="row">
        <div class="col-md-3 bg-primary" data-aos="fade-right" data-aos-offset="50" data-aos-duration="500"><div class="card-body cc-experience-header">
            <p>'.$format_start. " - " .$format_end . '</p>
            <div class="h5">'. $row["exp_company"] .'</div>
          </div>
        </div>
        <div class="col-md-9" data-aos="fade-left" data-aos-offset="50" data-aos-duration="500">
          <div class="card-body">
            <div class="h5">'. $row["exp_position"] .'</div>
            <p>'. $row["exp_desc"] .'</p>
          </div>
        </div>
      </div>
    </div>
    ';
}
echo " </div>
</div>";
?>


<div class="section" id="experience">
  <div class="container cc-experience">
    <div class="h4 text-center mb-4 title">Education</div>
   
          <?php

           $five = mysql_query("SELECT * FROM appl_info_edu WHERE acct_id = 1  ORDER BY edu_date_grad_start ASC ");
              while ($row = mysql_fetch_array($five)) {
              $date_start=date_create($row['edu_date_grad_start']);
              $date_end=date_create($row['edu_date_grad_end']);
              $format_start =  date_format($date_start,"  Y ");
              $format_end =  date_format($date_end," Y ");
               $format_start1 =  date_format($date_start," F  d,  Y ");
              $format_end2 =  date_format($date_end," F  d,  Y ");
          echo' <div class="card">
      <div class="row">
        <div class="col-md-3 bg-primary" data-aos="fade-right" data-aos-offset="50" data-aos-duration="500"><div class="card-body cc-experience-header">
            <p>'.$format_start. " - " .$format_end . '</p>
            <div class="h5">'. $row["edu_title"] .'</div>
          </div>
        </div>
        <div class="col-md-9" data-aos="fade-left" data-aos-offset="50" data-aos-duration="500">
          <div class="card-body">
            <div class="h5">'. $row["edu_course"] .'</div>
            
            <p class="category"> '. $row["edu_name"] .'</p>
            <p class="category"> '. $row["edu_course_major"] .'</p>
            <p class="category"> '. $row["edu_addr"] .'</p>
            <p class="category"> '. $format_start1 ." - ". $format_end2 .'</p>
          </div>
        </div>
      </div>
    </div>
    ';
}
echo " </div>
</div>";
?>

<div class="section" id="experience">
  <div class="container cc-experience">
    <div class="h4 text-center mb-4 title">Seminar Attended</div>
   
          <?php

           $six = mysql_query("SELECT * FROM appl_info_seminar WHERE acct_id = 1  ORDER BY seminar_date ASC ");
              while ($row = mysql_fetch_array($six)) {
              $date_start=date_create($row['seminar_date']);
              //$date_end=date_create($row['edu_date_grad_end']);
              $format_start =  date_format($date_start,"  F  d,  Y ");
              //$format_end =  date_format($date_end," Y ");
          echo' <div class="card">
      <div class="row">
        <div class="col-md-3 bg-primary" data-aos="fade-right" data-aos-offset="50" data-aos-duration="500"><div class="card-body cc-experience-header">
            <p>'.$format_start. '</p>
            <div class="h5">'. $row["seminar_title"] .'</div>
          </div>
        </div>
        <div class="col-md-9" data-aos="fade-left" data-aos-offset="50" data-aos-duration="500">
          <div class="card-body">
            <div class="h5">'. $row["seminar_orga"] .'</div>
            <p class="category"> '. $row["seminar_addr"] .'</p>
            <p class="category">'. $row["seminar_vp"] .'</p>
          </div>
        </div>
      </div>
    </div>
    ';
}
echo " </div>
</div>";
?>


 
<div class="h4 mb-4 text-center title">References</div>

<div class="section" id="reference">
        <?php 
        $num=1;
         $seven = mysql_query("SELECT * FROM appl_info_ref WHERE acct_id = 1  ");
              while ($row = mysql_fetch_array($seven)) {

                
        echo'
  <div class="container cc-reference">
    
    <div class="card" data-aos="zoom-in">
      <div class="carousel slide" id="cc-Indicators" data-ride="carousel">
        <div class="carousel-inner">
        
          <div class="carousel-item active">
            <div class="row">
              <div class="col-lg-2 col-md-3 cc-reference-header">
                <div class="h5 pt-2">'.$row["ref_fname"].'</div>
                <p class="category">'.$row["ref_company"] ."/".$row["ref_position"] .'</p>
              </div>
              <div class="col-lg-10 col-md-9">
                
                 <p class="h5">  '. $row["ref_fname"] ." ". $row["ref_mname"] ." ". $row["ref_lname"] .'</p>
                 <p class="category">'. $row["ref_company"] ."/".$row["ref_position"].'</p>
                 <p class="category">'. $row["ref_contact"] .'</p>
                 <p class="category">'. $row["ref_address"] .'</p>
                 

              </div>
            </div>
          </div> </div>
      </div>
    </div>
  </div>
 ';
        }
          ?>
       </div>

        </div>
        </div>
      </div>
    </div>
  </div>
</div></div>
    </div>
    <footer class="footer">
      <div class="container text-center"><a class="cc-facebook btn btn-link" href="#"><i class="fa fa-facebook fa-2x " aria-hidden="true"></i></a><a class="cc-twitter btn btn-link " href="#"><i class="fa fa-twitter fa-2x " aria-hidden="true"></i></a><a class="cc-google-plus btn btn-link" href="#"><i class="fa fa-google-plus fa-2x" aria-hidden="true"></i></a><a class="cc-instagram btn btn-link" href="#"><i class="fa fa-instagram fa-2x " aria-hidden="true"></i></a></div>
     

      </div>
    </footer>
    <script src="cv/js/core/jquery.3.2.1.min.js"></script>
    <script src="cv/js/core/popper.min.js"></script>
    <script src="cv/js/core/bootstrap.min.js"></script>
    <script src="cv/js/now-ui-kit.js?v=1.1.0"></script>
    <script src="cv/js/aos.js"></script>
    <script src="cv/scripts/main.js"></script>
  </body>
</html>