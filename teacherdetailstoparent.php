<?php

   include('db.php');
   session_start();
   
   $user_check = $_SESSION['login_user'];
   
   $ses_sql = mysqli_query($conn,"select Name from parent where Email = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['Name'];
   

  
   if(!isset($_SESSION['login_user'])){
      header("location:login.php");
      die();
   }
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Feliciano - Free Bootstrap 4 Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Great+Vibes&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
     <style>
	    label{ width:40%;
	}
	.input{
  width:100%;
  color:#fff;
  display:block;
}
.input
{
  border:none;
  padding:15px 20px;
  border-radius:90px;
  background:rgba(255,255,255,.1);
}
.input[data-type="password"]{
  text-security:circle;
  -webkit-text-security:circle;
}
	@media screen and (max-width: 1000px)
	{
		label{
			font-size:70%;
			width:45%}
		}
    </style>
  </head>
  <body>
 
    <?php include"tutor.php";?>
    
    
    <section class="ftco-section ftco-no-pt ftco-no-pb">
    	<div class="container-fluid">
    		<div class="row">
    			<div class="col-md-12">
    				<div class="featured">
    					
    				</div>
    			</div>
    		</div>
    	</div>
    </section>
    
    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_3.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
          <div class="col-md-9 ftco-animate text-center mb-4">
            <h1 class="mb-2 bread">Your Teachers' information</h1>
            
          </div>
        </div>
      </div>
    </section>
    
 <?php 

include "db.php";

 $sql="SELECT
  *
FROM
  teacher
  JOIN teachersbookings ON teachersbookings.TeacherName = teacher.FullName
  JOIN parent ON teachersbookings.Parent_Name = parent.Name
where
  parent.Name ='".$login_session."'";
 $result = $conn->query($sql);

while($row = $result->fetch_assoc()) {
		$name=$row["FullName"]."<br>";
		$grade=$row["Grade"]."<br>";
		$email=$row["Email"]."<br>";
		$image=$row["Photo"]."<br>";
		$subject=$row["Subject"]."<br>";
		$location=$row["Location"]."<br>";
		$medium=$row["Medium"]."<br>";
		$travelD=$row["Travel_Distance"]."<br>";
		$qualifications=$row["Qualifications"]."<br>";
		$fee=$row["Fee_for_a_week"]."<br>";
		$descriptions=$row["Your_description"]."<br>";
		$contactNum=$row["Contact_Number"]."<br>";
	
		$experience=$row["Experience"]."<br>";
		$firstday=$row["FirstDay"];
}
?>		

	             
<form action="" method="post"style=" background:url(http://codinginfinite.com/demo/images/bg.jpg) no-repeat center;">

<div class="row" style="margin:5% 12%; background-color:rgba(40,57,101,.9); color:white; padding:5%;  ">

  <div class="col-md-4"> 

  <?php echo '
  <img src="data:image/jpeg;base64,'.base64_encode($image).'" height="30%" width="70%" />';?>
    <div class="col-md-12"></div>
    				
  </div>
  <div class="col-md-8">

   <label>Name</label><label> <?php echo $name; ?>
   </label><label for="">Subject</label><label>	<?php echo $subject; ?></label>
   <label for="">Location</label><label><?php echo $location; ?></label>
   <label for="">Experience </label><label><?php echo $experience;?></label>
   <label for="">Medium</label> <label> <?php echo $medium; ?></label>
   <label for="">Grade</label>  <label> <?php echo $grade; ?></label>
   <label for="">Travel Distance</label><label> <?php echo $travelD ;?></label>
   <label for="">Charge per week</label><label>  <?php echo $fee; ?>
</label>
   <label for=''>Teacher's desriptions </label><label> <?php echo $descriptions;?></label>
   <label>Qualifications </label><label>  <?php echo $qualifications ?></label>
   <form action="findtutor.php" method="post">
                    <div class="form-group">
                    <label for="">Your FeedBack</label>
                    <textarea type="text" class="" placeholder="Your Feedback" style="border-radius:20px; width:100%;" rows="5" name="comment"></textarea>
                    <input type="submit" name="submit" value="submit your feedback">
                    </form>
                  </div>
                </div>
               
               <br>
               <?php
			   if(isset($_REQUEST["submit"])){
				   $parentname=$login_session;
				   $teachername=$name;
				   $feedback=$_REQUEST['comment'];
				   
				   $sqz="INSERT INTO `Parentscomments`( `ParentName`, `TeacherName`, `Comments`) VALUES ('".$parentname."','".$teachername."','".$feedback."')";
				   
				   $conn->query($sqz); }
			   ?>
  </div>
  

  </div>
</div>
</form>
      <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-6 col-lg-3">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Services</h2>
              <ul type="none" style="color:white;">
              <li>Find a home tutor</li>
              <li>Find an online teacher</li>
              <li>Register as a home tutor</li>
              <li>Register as an online teacher</li>
              <li>Create your own advertisement</li>
              <li>E-Library</li>
              <li>Assignment help</li>
              
              </ul>
             
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Information</h2>
              <ul class="list-unstyled open-hours" style="color:#F4EBEB">
                <li class="d-flex"><a href="aboutus.php">About us</a></li>
                <li class="d-flex"><a href="privacy.php">Privacy &amp; Policy</a></li>
                <li class="d-flex" ><a href="termsnconditions.php">Terms &amp; conditions</a></li>
                <li class="d-flex">Banner advertisement</li>
              
              </ul>
            </div>
          </div>
          <div class="col-md-6 col-lg-6">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">About us</h2>
              <ul class="list-unstyled open-hours" style="color:#F4EBEB">
                <li class="d-flex">Company Name - WASARA Insitute Of Home Tutors.</li>
                <li class="d-flex comment">Sub Business Platform - Homevisiting teaching platform</li><br>
               
               <li class="d-flex"> <div class="vcard bio">
                     <b> Company CEO </b><br> C.H.M.W.M Madhurangani</li></div>
               <li class="d-flex" style="color:white;"><div class="vcard bio"><b>Director </b><br> S.B.N.D.R Senavirathna</li></div>
              
              </ul>
               <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-3">
                <li class="ftco-animate"><a href="mailto:wasarahometutor@gmail.com"><span class="icon-google"></span></a></li>
                <li class="ftco-animate"><a href="facebook/hometutor.lk"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="instagram/hometutor.lk"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved 
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>
  
  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>