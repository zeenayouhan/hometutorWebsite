<?php include "db.php"; ?>
 
<?php
   include('db.php');
   session_start();
   
   $user_check = $_SESSION['login_user'];
   
   $ses_sql = mysqli_query($conn,"select FullName from teacher where Email = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['FullName'];
  
   if(!isset($_SESSION['login_user'])){
      header("location:login.php");
      die();
   }
?> 

<!DOCTYPE html>
<html lang="en">
  <head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Wasara - Hometutors.lk Teacher</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
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
  </head>
  <body>
 <?php include "teacherCom.php"?>
    
  

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
            <h1 class="mb-2 bread">Your Classes</h1>
            
          </div>
        </div>
      </div>
    </section>
	
		<section class="ftco-section">
			<div class="container">
				<div class="row">
          <div class="col-md-8 ftco-animate">
            <h2 class="subheading">Your Information</h2>
          
            
         <?php
		
		
$sql1="SELECT * FROM teachersbookings WHERE TeacherName='".$login_session."'";
$result1=$conn->query($sql1);

echo "
<table border='3' style='width:100%;'>
<tr><th id='th1'>Parent Name</th><th id='th2'>Bookings</th><th id='th3'>Confirm classes</th><th id='th4'>Payments</th></tr>";

while($row1=$result1->fetch_assoc()){
	echo"<tr><td>".$row1["Parent_Name"]."</td><td>".$row1["Bookings"]."</td><td>".$row1["Confirm class"]."</td><td>".$row1["Payments"]."</td></tr>";} 
echo"</table>";


             ?>
             </div>
                      
           <!-- .col-md-8 -->
<div class="col-md-4 ftco-animate">

          	
           <section class="ftco-section "  >
          
      <div class="container">
      <h3>Probability of getting a class</h3>
    <div class="piea"></div>
  
  </div>           
           <h4>Feedback on hometutor.lk</h4>
			<div class="container">
            
			<?php  ?>
          
            <form action="#">
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="">Name</label>
                    <input type="text" class="form-control" placeholder="Your Name" name="name">
                  </div>
                </div>
                
                 <div class="col-md-12">
                  <div class="form-group">
                    <label for="">Message</label>
                    <input type="text" class="form-control" placeholder="Message" name="message">
                  </div>
                </div>
               
               
                   
                </div>
                <div class="col-md-12 mt-3">
                  <div class="form-group text-center">
                    <input type="submit" value="submit" class="btn btn-primary" name="submit1" >
                  </div>
                </div>
              </div>
            </form>
            </div>
			</div>
            </div>
		</section>
           <?php 
			   if(isset($_REQUEST['submit1'])){
				   $name=$_REQUEST['name'];
				   $message=$_REQUEST['message'];
				   
				   $sql22="INSERT INTO `teacherfeedback`( `TeacherName`, `TeacherFeedback`) VALUES ('".$name."','".$message."')";
				   $result1= $conn->query($sql22);
				   }
			   ?>
        <?php include "db.php" ;
$sql22="SELECT * FROM probability WHERE TeacherName='".$login_session."';";
$result22 = $conn->query($sql22);

while($row = $result22->fetch_assoc()) {
		$a=$row["Full Details"];
		$b=$row["FirstdayFree"];
		$c=$row["ClassFee"];
		
}
$d=$a+$b+$c;?>
      

  <script src="circularProgressBars.js"></script>
  <script>
    window.addEventListener('DOMContentLoaded', () => {
      new CircularProgressBar({
        percent: <?php echo $d?>,
        pieName: 'piea',
        colorSlice: '#E91E63',
        time: 20
      });
     
    });
  </script>
		<?php
			 
$conn->close();?>
   
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
                <li class="d-flex">Terms &amp; conditions</li>
                <li class="d-flex">Banner advertisement</li>
              
              </ul>
            </div>
          </div>
          <div class="col-md-6 col-lg-6">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">About us</h2>
              <ul class="list-unstyled open-hours" style="color:#F4EBEB">
                <li class="d-flex">Company Name - WASARA Insitute Of Home Tutors.</li>
                <li class="d-flex">Sub Business Platform - Homevisiting teaching platform</li>
                
               <li class="d-flex">Company CEO - C.H.M.W.M Madhurangani</li>
               <li class="d-flex">Director - S.B.N.D.R Senavirathna</li>
              
              </ul>
               <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-3">
                <li class="ftco-animate"><a href="mailto:wasarahometutor@gmail.com"><span class="icon-google"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
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
    
  </body>
</html>