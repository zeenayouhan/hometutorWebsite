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
<?php
$sno=$_SESSION["var1"]	;
  $no=$sno;?>
   <?php
   if(isset($_REQUEST["submit"])){
	 
   $parentname=$login_session;
   $teachername=$no;
   $monday=$_REQUEST["Monday"];
   $tuesday=$_REQUEST["Tuesday"];
   $wednesday=$_REQUEST["Wednesday"];
   $thursday=$_REQUEST["Thursday"];
   $friday=$_REQUEST["Friday"];
   $saturday=$_REQUEST["Saturday"];
   $sunday=$_REQUEST["Sunday"];
   
     $sql2="INSERT INTO `ClassDates`(`ID`, `TeacherName`, `ParentName`, `Monday`, `Tuesday`, `Wednesday`, `Thursday`, `Friday`, `Saturday`, `Sunday`) VALUES ('','".$no."','".$parentname."','".$monday."','".$tuesday."','".$wednesday."','".$thursday."','".$friday."','".$saturday."','".$sunday."')";
	    $conn->query($sql2);
		$sql7="INSERT INTO `teachersbookings`( `Parent Name`, `TeacherName`) VALUES ('".$parentname."','".$no."')";
		$conn->query($sql7);
		header("location: success.php");
		  
		
		
   }
   ?>
   
<!DOCTYPE html>
<html lang="en">
  <head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Wasara - HomeTutor.lk </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Great+Vibes&display=swap" rel="stylesheet">
  <!-- <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css"> -->
  <link href="css/bootstrap-3.3.6.css" rel="stylesheet" type="text/css">
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
  <style>
	    label{ width:40%;
	}
	@media screen and (max-width: 1000px)
	{
		label{
			font-size:70%;
			width:45%}
		}
    </style>
  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
  </head>
  <body>
  <?php
include "db.php";

$sno=$_SESSION["var1"]	;
  $no=$sno;

?>
   <?php include"tutor.php";?>

    <!-- END nav -->
    
  

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
         <div class="col-md-10 ftco-animate">

     <h1 class="mb-2 bread">Enter your free time for classes</h1>
     


</div>
</div>
</div>
</section>


		
		<section class="ftco-section">
			<div class="container">
				<div class="row">
          <div class="col-lg-6 ftco-animate">
            
         <form action="" style="margin-left:25%;">
     <label for="">Monday</label><select name="Monday" id="" style=" padding:1%; width:60%;" >
     <option value="No free time">No free time</option>
<option value="Morning">Morning Session</option>
<option value="Evening">Evening Session</option>
<option value="Night">Night Session</option>


</select>

<label for="">Tuesday</label><select name="Tuesday" id="" style="padding:1%; width:60%;" >
<option value="No free time">No free time</option>
<option value="Morning">Morning Session</option>
<option value="Evening">Evening Session</option>
<option value="Night">Night Session</option>


</select>
<label for="">Wednesday</label><select name="Wednesday" id="" style=" padding:1%; width:60%;" >
<option value="No free time">No free time</option>
<option value="Morning">Morning Session</option>
<option value="Evening">Evening Session</option>
<option value="Night">Night Session</option>


</select>
<label for="">Thursday</label><select name="Thursday" id="" style=" padding:1%; width:60%;" >
<option value="No free time">No free time</option>
<option value="Morning">Morning Session</option>
<option value="Evening">Evening Session</option>
<option value="Night">Night Session</option>


</select>
<label for="">Friday</label><select name="Friday" id="" style=" padding:1%; width:60%;" >
<option value="No free time">No free time</option>
<option value="Morning">Morning Session</option>
<option value="Evening">Evening Session</option>
<option value="Night">Night Session</option>


</select>
<label for="">Saturday</label><select name="Saturday" id="" style=" padding:1%; width:60%;" >
<option value="No free time">No free time</option>
<option value="Morning">Morning Session</option>
<option value="Evening">Evening Session</option>
<option value="Night">Night Session</option>


</select>
<label for="">Sunday</label><select name="Sunday" id="" style=" padding:1%; width:60%;" >
<option value="No free time">No free time</option>
<option value="Morning">Morning Session</option>
<option value="Evening">Evening Session</option>
<option value="Night">Night Session</option>


</select><br>
<input type="submit" value="submit" name="submit" class="btn-lg btn-primary" style="margin-left:20%;">
</form>
    </div>
        </section>
        <footer>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright&copy;  <script>document.write(new Date().getFullYear());</script> All rights reserved </p>
          </div>
        </div>
      
    </footer>
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <!-- <script src="js/bootstrap.min.js"></script> -->
  <script src="js/bootstrap-3.3.6.js"></script>
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