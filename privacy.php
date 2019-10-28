<!DOCTYPE html>
<html lang="en">
  <head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Feliciano - Free Bootstrap 4 Template by Colorlib</title>
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
  <?php
include "db.php";
$sqlyz="SELECT * FROM teacherfeedback ;";
$resultyz= $conn->query($sqlyz);
$Z1=mysqli_num_rows($resultyz);
$X1=$Z1-1;
$Y1=$Z1-2;
$H1=$Z1-3;

$tsql11="SELECT * FROM teacherfeedback where ID='".$Z1."';";
$tresult11 = $conn->query($tsql11);

while($row = $tresult11->fetch_assoc()) {
		$tF1=$row["TeacherFeedback"]."<br>";
		$t1=$row["TeacherName"]."<br>";
}
$tsql22="SELECT * FROM teacherfeedback where ID='".$X1."';";
$tresult22 = $conn->query($tsql22);

while($row = $tresult22->fetch_assoc()) {
		$tF2=$row["TeacherFeedback"]."<br>";
		$t2=$row["TeacherName"]."<br>";
}
$tsql33="SELECT * FROM teacherfeedback where ID='".$Y1."';";
$tresult33 = $conn->query($tsql33);

while($row = $tresult33->fetch_assoc()) {
		$tF3=$row["TeacherFeedback"]."<br>";
		$t3=$row["TeacherName"]."<br>";
}
$tsql44="SELECT * FROM teacherfeedback where ID='".$H1."';";
$tresult44 = $conn->query($tsql44);

while($row = $tresult44->fetch_assoc()) {
		$tF4=$row["TeacherFeedback"]."<br>";
		$t4=$row["TeacherName"]."<br>";
}



$sqlz="SELECT * FROM parentfeedback ;";
$resultz= $conn->query($sqlz);
$Z=mysqli_num_rows($resultz);
$X=$Z-1;
$Y=$Z-2;
$H=$Z-3;

$sql11="SELECT * FROM parentfeedback where ID='".$Z."';";
$result11 = $conn->query($sql11);

while($row = $result11->fetch_assoc()) {
		$parentF1=$row["ParentFeedback"]."<br>";
		$pname1=$row["ParentName"]."<br>";
}
$sql22="SELECT * FROM parentfeedback where ID='".$X."';";
$result22 = $conn->query($sql22);

while($row = $result22->fetch_assoc()) {
		$parentF2=$row["ParentFeedback"]."<br>";
		$pname2=$row["ParentName"]."<br>";
}
$sql33="SELECT * FROM parentfeedback where ID='".$Y."';";
$result33 = $conn->query($sql33);

while($row = $result33->fetch_assoc()) {
		$parentF3=$row["ParentFeedback"]."<br>";
		$pname3=$row["ParentName"]."<br>";
}
$sql44="SELECT * FROM parentfeedback where ID='".$H."';";
$result44 = $conn->query($sql44);

while($row = $result44->fetch_assoc()) {
		$parentF4=$row["ParentFeedback"]."<br>";
		$pname4=$row["ParentName"]."<br>";
}


$sql="SELECT * FROM teacher ;";
$result= $conn->query($sql);
$N=mysqli_num_rows($result);
$S=$N-2;
$D=$N-6;
$F=$N-10;
$P=$N-14;
$K=$N-30;


$sql1="SELECT * FROM teacher where ID='".$N."';";
$result1 = $conn->query($sql1);

while($row = $result1->fetch_assoc()) {
		$name1=$row["FullName"]."<br>";
		$image1=$row["Photo"]."<br>";
		$subject1=$row["Subject"]."<br>";
		$medium1=$row["Medium"]."<br>";
		$teacherF1=$row["TeacherFeedback"]."<br>";
}
$sql2="SELECT * FROM teacher where ID='".$S."';";
$result2 = $conn->query($sql2);

while($row = $result2->fetch_assoc()) {
		$name2=$row["FullName"]."<br>";
		$image2=$row["Photo"]."<br>";
		$subject2=$row["Subject"]."<br>";
		$medium2=$row["Medium"]."<br>";
		$teacherF2=$row["TeacherFeedback"]."<br>";
}

$sql3="SELECT * FROM teacher where ID='".$D."';";
$result3 = $conn->query($sql3);

while($row = $result3->fetch_assoc()) {
		$name3=$row["FullName"]."<br>";
		$image3=$row["Photo"]."<br>";
		$subject3=$row["Subject"]."<br>";
		$medium3=$row["Medium"]."<br>";
		$teacherF3=$row["TeacherFeedback"]."<br>";

}
$sql4="SELECT * FROM teacher where ID='".$F."';";
$result4 = $conn->query($sql4);

while($row = $result4->fetch_assoc()) {
		$name4=$row["FullName"]."<br>";
		$image4=$row["Photo"]."<br>";
		$subject4=$row["Subject"]."<br>";
		$medium4=$row["Medium"]."<br>";
		$teacherF4=$row["TeacherFeedback"]."<br>";
}
$sql5="SELECT * FROM teacher where ID='".$P."';";
$result5 = $conn->query($sql5);

while($row = $result5->fetch_assoc()) {
		$name5=$row["FullName"]."<br>";
		$image5=$row["Photo"]."<br>";
		$subject5=$row["Subject"]."<br>";
		$medium5=$row["Medium"]."<br>";
		$teacherF5=$row["TeacherFeedback"]."<br>";
}
$sql6="SELECT * FROM teacher where ID='".$K."';";
$result6 = $conn->query($sql6);

while($row = $result6->fetch_assoc()) {
		$name6=$row["FullName"]."<br>";
		$image6=$row["Photo"]."<br>";
		$subject6=$row["Subject"]."<br>";
		$medium6=$row["Medium"]."<br>";
		$teacherF6=$row["TeacherFeedback"]."<br>";
}

?>
    <div class="py-1 bg-black top">
    	<div class="container">
    		<div class="row no-gutters d-flex align-items-start align-items-center px-md-0">
	    		<div class="col-lg-12 d-block">
		    		<div class="row d-flex">
		    			<div class="col-md pr-6 d-flex topper align-items-center">
                        <span class="text"><img src="images/bkg_06.jpg" height="30" width="140"alt=""></span>

					    	<div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
						        
                                <span class="text">+ 94 771151706</span>
                            
					    </div>
					    <div class="col-md pr-2 d-flex topper align-items-center">
					    	<div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-paper-plane"></span></div>
						    <span class="text">wasarahometutor@gmail.com</span>
					    </div>
					    <div class="col-md-5 pr-4 d-flex topper align-items-center text-lg-right justify-content-end">
						    <p class="mb-0 register-link"><span>Open hours:</span> <span>Monday - Sunday</span> <span>8:00AM - 9:00PM</span></p>
					    </div>
				    </div>
			    </div>
		    </div>
		  </div>
    </div>
	  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
            <img class="subheading" src="images/hmlk.png" width="8%" height="5%">
	        	<li class="nav-item active"><a href="index.html" class="nav-link">Home</a></li>
	        	<li class="nav-item"><a href="about.html" class="nav-link">About</a></li>
	        	<li class="nav-item"><a href="menu.html" class="nav-link">How it works</a></li>
	        	<li class="nav-item"><a href="blog.html" class="nav-link">Request a home visiting teacher</a></li>
	          <li class="nav-item"><a href="contact.html" class="nav-link">Join as a home visiting teacher</a></li>
	          <li class="nav-item cta"><a href="reservation.html" class="nav-link" style="margin-right:3px;">Sign in</a></li>
                <li class="nav-item cta"><a href="reservation.html" class="nav-link">Log in</a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
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
          <div class="col-md-9 ftco-animate text-center mb-4">
            <h1 class="mb-2 bread">Privacy and Policy</h1>
            
          </div>
        </div>
      </div>
    </section>
		
		<section class="ftco-section">
			<div class="container">
				<div class="row">
          <div class="col-lg-12 ftco-animate">
            <h2 class="subheading">Privacy &amp; Policy</h2>
           
            <p>It would be ideal if you audit the terms of this Privacy Policy. Your entrance and utilization of
this Website are upon your acknowledgment of the terms expressed thus. In the event that
you don't concur with at least one terms expressed in this Privacy Policy, at that point you
can forgo utilizing our Website. This Privacy Policy may change with time.</p>
			<p>You are encouraged to occasionally check this arrangement for changes. You are likewise
required to audit and consent to our Terms of Use, which oversee your utilization of this
Website. If it's not too much trouble take note of that we maintain all authority, as far as
possible, include or erase, without notice, any of the administrations examined in this
PrivacyPolicy.</p>
<h3>Utilization of Your Personal Information</h3>
<p>We naturally gather data about you, including however not restricted to The IP address of
the site from which you connected specifically to our Site The substance or data you submit
the date and time you got to our Site We utilize your Information to screen the viability of the
Site and Products, to recognize zones of intrigue and to think about potential upgrades for
our clients.</p>
            
          <p>We utilize Personal Information got from you to process our administrations. We don't reveal
any Personal Information to non-associated outsiders, aside from as vital for us to give
better administrations to you.</p>
<p>In any case, We may uncover any Personal Information we gather for reasons for inside
review, administration, charging or authoritative purposes including safeguarding and
bringing lawful activities.</p>
<p>Utilization of Your Personal Information We Collect From You We don't reveal any Personal
Information to non-associated outsiders We naturally gather data about you, and we
naturally gather your data for showing our website.</p>
            </div>
         
       
        </div>
        </div>
        </section>
        <footer>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved </p>
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