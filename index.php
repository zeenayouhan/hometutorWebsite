<!DOCTYPE html>
<html lang="en">
  <head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Wasara - HomeTutors.lk</title>
 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"><link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<style>

		@-webkit-keyframes color_change {
		  from { background-color: blue; }
		  to { background-color: red; }
		}
		@-moz-keyframes color_change {
		  from { background-color: blue; }
		  to { background-color: red; }
		}
		@-ms-keyframes color_change {
		  from { background-color: blue; }
		  to { background-color: red; }
		}
		@-o-keyframes color_change {
		  from { background-color: blue; }
		  to { background-color: red; }
		}
		@keyframes color_change {
		  from { background-color: blue; }
		  to { background-color: red; }
		}

		.divy {
		    background-color: blue;
		    border: 1px solid ;
		    border-radius: 10px;
		    width: 185px;
		    height: 53px;
		   -webkit-animation: color_change 1s infinite alternate;
		   -moz-animation: color_change 1s infinite alternate;  
		   -ms-animation: color_change 1s infinite alternate;  
		   -o-animation: color_change 1s infinite alternate;  
		   animation: color_change 1s infinite alternate;   
		}
    </style>
    
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
  <style>
  @media screen and (max-width:1000px){
	  .xt{
		  font-size:20%;
		  
		  }
		  .ab{
			  display:none;
			  }
		  
	  
	  }
  </style>
  <body>
  <?php
include "db.php";
$sqlyz1="SELECT * FROM parent ;";
$resultyz1= $conn->query($sqlyz1);
$Q=mysqli_num_rows($resultyz1);

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
		$parentF1=$row["ParentFeed"]."<br>";
		$pname1=$row["ParentName"]."<br>";
}
$sql22="SELECT * FROM parentfeedback where ID='".$X."';";
$result22 = $conn->query($sql22);

while($row = $result22->fetch_assoc()) {
		$parentF2=$row["ParentFeed"]."<br>";
		$pname2=$row["ParentName"]."<br>";
}
$sql33="SELECT * FROM parentfeedback where ID='".$Y."';";
$result33 = $conn->query($sql33);

while($row = $result33->fetch_assoc()) {
		$parentF3=$row["ParentFeed"]."<br>";
		$pname3=$row["ParentName"]."<br>";
}
$sql44="SELECT * FROM parentfeedback where ID='".$H."';";
$result44 = $conn->query($sql44);

while($row = $result44->fetch_assoc()) {
		$parentF4=$row["ParentFeed"]."<br>";
		$pname4=$row["ParentName"]."<br>";
}


$sql="SELECT * FROM teacher ;";
$result= $conn->query($sql);
$N=mysqli_num_rows($result);
$S=$N-1;
$D=$N-2;
$F=$N-3;
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
		$quli1=$row["Qualifications"]."<br>";
}
$sql2="SELECT * FROM teacher where ID='".$S."';";
$result2 = $conn->query($sql2);

while($row = $result2->fetch_assoc()) {
		$name2=$row["FullName"]."<br>";
		$image2=$row["Photo"]."<br>";
		$subject2=$row["Subject"]."<br>";
		$medium2=$row["Medium"]."<br>";
		$teacherF2=$row["TeacherFeedback"]."<br>";
		$quli2=$row["Qualifications"]."<br>";
}

$sql3="SELECT * FROM teacher where ID='".$D."';";
$result3 = $conn->query($sql3);

while($row = $result3->fetch_assoc()) {
		$name3=$row["FullName"]."<br>";
		$image3=$row["Photo"]."<br>";
		$subject3=$row["Subject"]."<br>";
		$medium3=$row["Medium"]."<br>";
		$teacherF3=$row["TeacherFeedback"]."<br>";
		$quli3=$row["Qualifications"]."<br>";

}
$sql4="SELECT * FROM teacher where ID='".$F."';";
$result4 = $conn->query($sql4);

while($row = $result4->fetch_assoc()) {
		$name4=$row["FullName"]."<br>";
		$image4=$row["Photo"]."<br>";
		$subject4=$row["Subject"]."<br>";
		$medium4=$row["Medium"]."<br>";
		$teacherF4=$row["TeacherFeedback"]."<br>";
		$quli4=$row["Qualifications"]."<br>";
}
$sql5="SELECT * FROM teacher where ID='".$P."';";
$result5 = $conn->query($sql5);

while($row = $result5->fetch_assoc()) {
		$name5=$row["FullName"]."<br>";
		$image5=$row["Photo"]."<br>";
		$subject5=$row["Subject"]."<br>";
		$medium5=$row["Medium"]."<br>";
		$teacherF5=$row["TeacherFeedback"]."<br>";
		$quli5=$row["Qualifications"]."<br>";
}
$sql6="SELECT * FROM teacher where ID='".$K."';";
$result6 = $conn->query($sql6);

while($row = $result6->fetch_assoc()) {
		$name6=$row["FullName"]."<br>";
		$image6=$row["Photo"]."<br>";
		$subject6=$row["Subject"]."<br>";
		$medium6=$row["Medium"]."<br>";
		$teacherF6=$row["TeacherFeedback"]."<br>";
		$quli6=$row["Qualifications"]."<br>";
}
if(isset($_REQUEST['submit1']))
{
	$nam=$_POST['name'];
	$email=$_POST['eamil'];
	$phone=$_POST['phone'];
	$msg=$_POST['msg'];
	$headers = "MIME-Version: 1.0" . "\r\n";
  $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
  $message = "<html>
  <head>
  	<title>New message from website contact form</title>
  </head>
  <body>
  	<h1>" . $subject . "</h1>
  	<p>".$msg."</p>
  </body>
  </html>";
  if (mail('zinayouahn33@gmail.com', $subject, $message, $headers)) {
   echo "Email sent";
  }else{
   echo "Failed to send email. Please try again later";
  }
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
						    <p class="mb-0 register-link"><button class="nav-item divy" style="margin-right:0px; margin-left:0px; height:30px;" data-toggle="modal" data-target="#exampleModal1">Available Vacancies</button></p>
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
	        	<li class="nav-item active"><a href="index.php" class="nav-link">Home</a></li>
	        	<li class="nav-item"><a href="#about" class="nav-link">About</a></li>
	        	<li class="nav-item"><a href="login.php" class="nav-link">How it works</a></li>
	        	<li class="nav-item"><a href="login.php" class="nav-link">Request a home visiting teacher</a></li>
	          <li class="nav-item"><a href="login.php" class="nav-link">Join as a home visiting teacher</a></li>
             
              	          <li class="nav-item cta"><a href="login.php" class="nav-link" style="margin-right:3px;">Sign in</a></li>
                <li class="nav-item cta"><a href="Register.php" class="nav-link">Sign Up</a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
    
    <section class="home-slider owl-carousel js-fullheight">
      <div class="slider-item js-fullheight" style="background-image: url(images/bg_1.jpg);">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row slider-text js-fullheight justify-content-center align-items-center" data-scrollax-parent="true">

            <div class="col-md-12 col-sm-12 text-center ftco-animate">
            	<span class="subheading">Find your home visiting teacher</span>
              <h1 class="mb-4">Best way to learn</h1>
            </div>

          </div>
        </div>
      </div>

      <div class="slider-item js-fullheight" style="background-image: url(images/bg_2.jpg);">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row slider-text js-fullheight justify-content-center align-items-center" data-scrollax-parent="true">

            <div class="col-md-12 col-sm-12 text-center ftco-animate">
            	<span class="subheading" >Find your home tutor job</span>
              <h1 class="mb-4">Best way to earn</h1>
            </div>

          </div>
        </div>
      </div>

      <div class="slider-item js-fullheight" style="background-image: url(images/bg_3.jpg);">
      	<div class="overlay"></div>
        <div class="container">
        
          <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">
				
            <div class="col-md-12 col-md-12 text-center ftco-animate">
            	<div class="container" style="margin:0px 0px 0px 0px;" ><img  src="images/hmt.png" alt="" height="30%" width="70%" style="padding:0% 20%; margin:0px;">
              <span class="subheading" style="margin:-100px; font-size:60px; padding-top:-90px;">Home visiting teaching platform</span>
              </div>
            </div>

          </div>
        </div>
      </div>
      
      <div class="slider-item js-fullheight " style="background-image: url(images/bg_3.jpg);">
      	<div class="overlay"></div>
        <div class="container ab">
        
          <div class="row   align-items-center justify-content-center" data-scrollax-parent="true">
				
            <div class="col-md-12  ftco-animate xt">
            	<div class="container"><img class="bt" src="wasana.jpg" alt="" style=" margin:13% 0% 0% 0% ;float:left; height:30%; width:30%; border:solid thin ; border-radius:10px;"></div><div class="container"><img src="ravishwa.jpg" alt="" class="bt" style=" float:left; margin:13% 0% 0% 30% ; height:28%; width:30%;  border:solid thin ; border-radius:10px;"></div><div class="container" style="float:left;">
     <div class="container " style="color:white; margin-left:0%; margin-top:%; float:left ; font-size:30px; font-family:Palatino">
                
                
                Company CEO <br>
                C. H . M . W . M Madhurangani
                </div>           
              
<div class="container " style="color:white; margin-left:60%; margin-top:-11%; float:left;font-size:30px ; font-family:Palatino">
                
                
                Director <br>
                S. B . N . D . R Senavirathna
                </div>
</div>
          
        </div>
      </div>
    </section>

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
	

		<section class="ftco-section ftco-wrap-about">
			<div class="container">
				<div class="row">
					<div class="col-md-7 d-flex">
						<div class="img img-1 mr-md-2" style="background-image: url(images/about.jpg);"></div>
						<div class="img img-2 ml-md-2" style="background-image: url(images/about-1.jpg);"></div>
					</div>
					<div class="col-md-5 wrap-about pt-5 pt-md-5 pb-md-3 ftco-animate">
	          <div class="heading-section mb-4 my-5 my-md-0">
	          	<span class="subheading"><a id="about">About</a></span>
	            <h2 class="mb-4">HOMETUTOR.LK</h2>
	          </div>
	          <p>Hometutor.lk is the first and leading platform that connects the needs of the home visiting teachers as well as the students who are looking for home visiting teachers. We started our operational activities on 01/07/2019 and now we have a basis of 1000plus students and 1500 plus teachers.</p>
						<p class="time">
							<span>Mon - Sun <strong>8 AM - 11 PM</strong></span>
							<span><a href="#">+ 94771151706</a></span>
						</p>
					</div>
				</div>
			</div>
		</section>

		
		<section class="ftco-section ftco-counter img ftco-no-pt" id="section-counter">
    	<div class="container">
    		<div class="row d-md-flex">
    			<div class="col-md-12">
    				<div class="row d-md-flex align-items-center">
		          <div class="col-md-6 col-lg-6 mb-4 mb-lg-0 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18">
		              <div class="text">
		                <strong class="number" data-number="<?php echo $N; ?>">0</strong>
		                <span>Registered Teachers</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-6 col-lg-6 mb-6 mb-lg-0 d-flex justify-content-center counter-wrap ftco-animate align-content-center">
		            <div class="block-18">
		              <div class="text">
		                <strong class="number" data-number="<?php echo $Q;?>">0</strong>
		                <span>Registered Students</span>
		              </div>
		            </div>
		          </div>
		          
		          
	          </div>
          </div>
          
        </div>
    	</div>
    </section>

		<section class="ftco-section bg-light">
			<div class="container">
				<div class="row justify-content-center mb-5 pb-2">
          <div class="col-md-12 text-center heading-section ftco-animate">
          	<span class="subheading">Services</span>
            <h2 class="mb-4"> The things we provide you</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 d-flex align-self-stretch ftco-animate text-center">
            <div class="media block-6 services d-block">
              <div class="icon d-flex justify-content-center align-items-center">
            		<img src="images/hm.png" height="20%" width="20%" alt="">
              </div>
              <div class="media-body p-2 mt-3">
              
                <h3 class="heading">Find a home tutor</h3>
                <p>Best way to learn</p>
              </div>
            </div>      
          </div>
          <div class="col-md-4 d-flex align-self-stretch ftco-animate text-center">
            <div class="media block-6 services d-block">
              <div class="icon d-flex justify-content-center align-items-center">
            		<img src="images/hm1.png" height="20%" width="20%" alt="">
              </div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading">Find an online teacher</h3>
                <p>Coming Soon.........</p>
              </div>
            </div>    
          </div>
          <div class="col-md-4 d-flex align-self-stretch ftco-animate text-center">
            <div class="media block-6 services d-block">
              <div class="icon d-flex justify-content-center align-items-center">
            		<img src="images/hm2.png" height="20%" width="20%" alt="">
              </div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading">Create your own advertisement</h3>
                <p>Coming Soon.........</p>
              </div>
            </div>      
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 d-flex align-self-stretch ftco-animate text-center">
            <div class="media block-6 services d-block">
              <div class="icon d-flex justify-content-center align-items-center">
            		<img src="images/hm3.png" height="20%" width="20%" alt="">
              </div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading">E-library</h3>
                <p>Coming Soon.........</p>
              </div>
            </div>      
          </div>
          <div class="col-md-4 d-flex align-self-stretch ftco-animate text-center">
            <div class="media block-6 services d-block">
              <div class="icon d-flex justify-content-center align-items-center">
            		<img src="images/hm5.png" height="20%" width="20%" alt="">
              </div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading">Assignment Help</h3>
                <p>Coming Soon.........</p>
              </div>
            </div>    
          </div>
          <div class="col-md-4 d-flex align-self-stretch ftco-animate text-center">
            <div class="media block-6 services d-block">
              <div class="icon d-flex justify-content-center align-items-center">
            		<img src="images/hm4.png" height="20%" width="20%" alt="">
              </div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading">Online-teaching Jobs</h3>
                <p>Coming Soon.........</p>
              </div>
            </div>      
          </div>
        </div>
			</div>
		</section>

    <section class="ftco-section">
    	<div class="container">
    		<div class="row no-gutters justify-content-center mb-5 pb-2">
          <div class="col-md-12 text-center heading-section ftco-animate">
          	<span class="subheading">Recent activities</span>
            <h2 class="mb-4">Newly registered teachers</h2>
          </div>
        </div>
        <div class="row no-gutters d-flex align-items-stretch">
        	<div class="col-md-12 col-lg-6 d-flex align-self-stretch">
        		<div class="menus d-sm-flex ftco-animate align-items-stretch" style="height:50%;">
              <div class="menu-img img" ><?php echo '<img src="data:image/jpeg;base64,'.base64_encode($image1).'" height="275" width="275" style="padding:15%;"  />';?></div>
              <div class="text d-flex align-items-center">
								<div>
	              	<div class="d-flex">
		                <div class="one-half">
		                  <h3><?php echo $name1; ?></h3>
		                </div>
		               
		              </div>
		              <p><span>Subject: </span>:     <span><?php echo $subject1; ?></span></p>
                      <p><span>Medium </span>:  <span><?php echo $medium1; ?></span></p>
                      <p><span>Qualifications </span>:  <span><?php echo $quli1; ?></span></p>
		              
	              </div>
              </div>
            </div>
       	  </div>
        	<div class="col-md-12 col-lg-6 d-flex align-self-stretch">
        		<div class="menus d-sm-flex ftco-animate align-items-stretch" style="height:50%;">
              <div class="menu-img img"><?php echo '<img  src="data:image/jpeg;base64,'.base64_encode($image2).'" height="275" width="275" style="padding:15%;" />';?></div>
              <div class="text d-flex align-items-center">
								<div>
	              	<div class="d-flex">
		                <div class="one-half">
		                  <h3><?php echo $name2; ?></h3>
		                </div>
		               
		              </div>
		              <p><span>Subject: </span>:     <span><?php echo $subject2; ?></span></p>
                      <p><span>Medium </span>:  <span><?php echo $medium2; ?></span></p>
                      <p><span>Qualifications </span>:  <span><?php echo $quli2; ?></span></p>
	              </div>
              </div>
            </div>
        	</div>

        	<div class="col-md-12 col-lg-6 d-flex align-self-stretch">
        		<div class="menus d-sm-flex ftco-animate align-items-stretch" style="height:50%;">
              <div class="menu-img img order-md-last" ><?php echo '<img  src="data:image/jpeg;base64,'.base64_encode($image3).'" height="275" width="275" style="padding:15%;" />';?></div>
              <div class="text d-flex align-items-center">
								<div>
	              	<div class="d-flex">
		                <div class="one-half">
		                  <h3><?php echo $name3; ?></h3>
		                </div>
		               
		              </div>
		              <p><span>Subject: </span>:     <span><?php echo $subject3; ?></span></p>
                      <p><span>Medium </span>:  <span><?php echo $medium3; ?></span></p>
                      <p><span>Qualifications </span>:  <span><?php echo $quli3; ?></span></p>
	              </div>
              </div>
            </div>
        	</div>
        	<div class="col-md-12 col-lg-6 d-flex align-self-stretch">
        		<div class="menus d-sm-flex ftco-animate align-items-stretch" style="height:50%;">
              <div class="menu-img img order-md-last" ><?php echo '<img  src="data:image/jpeg;base64,'.base64_encode($image4).'" height="275" width="275" style="padding:15%;"/>';?></div>
              <div class="text d-flex align-items-center">
								<div>
	              	<div class="d-flex">
		                <div class="one-half">
		                  <h3><?php echo $name4; ?></h3>
		                </div>
		               
		              </div>
		              <p><span>Subject: </span>:     <span><?php echo $subject4; ?></span></p>
                      <p><span>Medium </span>:  <span><?php echo $medium4; ?></span></p>
                      <p><span>Qualifications </span>:  <span><?php echo $quli4; ?></span></p>
	              </div>
              </div>
            </div>
        	</div>

        	<div class="col-md-12 col-lg-6 d-flex align-self-stretch">
        		<div class="menus d-sm-flex ftco-animate align-items-stretch" style="height:50%;">
              <div class="menu-img img" ><?php echo '<img src="data:image/jpeg;base64,'.base64_encode($image5).'" height="275" width="275"  style="padding:15%;" />';?></div>
              <div class="text d-flex align-items-center">
								<div>
	              	<div class="d-flex">
		                <div class="one-half">
		                 <h3><?php echo $name5; ?></h3>
		                </div>
		               
		              </div>
		              <p><span>Subject: </span>:     <span><?php echo $subject5; ?></span></p>
                      <p><span>Medium </span>:  <span><?php echo $medium5; ?></span></p>
                      <p><span>Qualifications </span>:  <span><?php echo $quli5; ?></span></p>
	              </div>
              </div>
            </div>
        	</div>
        	<div class="col-md-12 col-lg-6 d-flex align-self-stretch">
        		<div class="menus d-sm-flex ftco-animate align-items-stretch" style="height:50%;">
              <div class="menu-img img" ><?php echo '<img src="data:image/jpeg;base64,'.base64_encode($image6).'" height="275" width="275"  style="padding:15%;"/>';?></div>
              <div class="text d-flex align-items-center">
								<div>
	              	<div class="d-flex">
		                <div class="one-half">
		                <h3><?php echo $name6; ?></h3>
		                </div>
		               
		              </div>
		              <p><span>Subject: </span>:     <span><?php echo $subject6; ?></span></p>
                      <p><span>Medium </span>:  <span><?php echo $medium6; ?></span></p>
                      <p><span>Qualifications </span>:  <span><?php echo $quli6; ?></span></p>
	              </div>
              </div>
            </div>
        	</div>
        </div>
   	  </div>
    </section>
     <section class="ftco-section">
			<div class="container">
				<div class="row justify-content-center mb-5 pb-2">
          <div class="col-md-12 text-left heading-section ftco-animate">
          	<span class="subheading">Feedbacks</span>
            <h2 class="mb-4">Teachers' Feedback</h2>
            <div class="pt-5 mt-5">
             
              <ul class="comment-list">
                <li class="comment">
                  <div class="vcard bio">
                    <img src="images/pro.jpg" alt="Image placeholder">
                  </div>
                  <div class="comment-body">
                    <h3><?php echo $t1 ?></h3>
                    
                    <p><i>"<?php echo $tF1 ?></i>"</p>
                   
                  </div>
                </li>

                <li class="comment">
                  <div class="vcard bio">
                    <img src="images/pro.jpg" alt="Image placeholder">
                  </div>
                  <div class="comment-body">
                    <h3><?php echo $t2 ?></h3>
                   
                    <p><i>"<?php echo $tF2 ?>"</i></p>
                    
                  </div>

                  
                    <li class="comment">
                      <div class="vcard bio">
                        <img src="images/pro.jpg" alt="Image placeholder">
                      </div>
                      <div class="comment-body">
                        <h3><?php echo $t3 ?></h3>
                        
                        <p><i>"<?php echo $tF3?>"</i></p>
                       
                     </div>    </li>
                            
                        </li>
                      </ul>
                    </li>
                  </ul>
                </li>

                
              </ul>
              </div>
          </div>
        </div>	
	</div>
		</section>
  <section class="ftco-section">
			<div class="container">
				<div class="row justify-content-center mb-5 pb-2">
          <div class="col-md-12 text-left heading-section ftco-animate">
          	<span class="subheading">Feedbacks</span>
            <h2 class="mb-4">Parents' Feedback</h2>
            <div class="pt-5 mt-5">
             
              <ul class="comment-list">
                <li class="comment">
                  <div class="vcard bio">
                    <img src="images/pro.jpg" alt="Image placeholder">
                  </div>
                  <div class="comment-body">
                    <h3><?php echo $pname1 ?></h3>
                   
                    <p><i>"<?php echo $parentF1?>"</i></p>
                    
                  </div>
                </li>

                <li class="comment">
                  <div class="vcard bio">
                    <img src="images/pro.jpg" alt="Image placeholder">
                  </div>
                  <div class="comment-body">
                    <h3><?php echo $pname2 ?></h3>
                    
                    <p><i>"<?php echo $parentF2 ?>"</i></p>
                  
                  </div>

                  
                    <li class="comment">
                      <div class="vcard bio">
                        <img src="images/pro.jpg" alt="Image placeholder">
                      </div>
                      <div class="comment-body">
                        <h3><?php echo $pname3 ?></h3>
                        
                        <p><i>"<?php echo $parentF3 ?>"</i></p>
                        
                     </div>    </li>
                            
                        </li>
                      </ul>
                    </li>
                  </ul>
                </li>

                
              </ul>
              </div>
          </div>
        </div>	
	</div>
		</section>
        

  <section class="ftco-section img" style="background-image: url(images/bg_3.jpg)" data-stellar-background-ratio="0.5">
			<div class="container">
				<div class="row d-flex">
          <div class="col-md-7 ftco-animate makereservation p-4 px-md-5 pb-md-5">
          	<div class="heading-section ftco-animate mb-5 text-center">
	          	<span class="subheading" style="font-family:'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'DejaVu Sans', Verdana, sans-serif">Online Support</span>
	            <h2 class="mb-4">Drop a message to us</h2>
	          </div>
             
            <form action="#">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="">Name</label>
                    <input type="text" class="form-control" placeholder="Your Name">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="">Email</label>
                    <input type="text" class="form-control" placeholder="Your Email" name="email">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="">Phone</label>
                    <input type="text" class="form-control" placeholder="Phone" name="phone">
                  </div>
                </div>
                 <div class="col-md-6">
                  <div class="form-group">
                    <label for="">Message</label>
                    <input type="text" class="form-control" placeholder="Message" name="msg">
                  </div>
                </div>
               
               
                   
                </div>
                <div class="col-md-12 mt-3">
                  <div class="form-group text-center">
                    <input type="submit" value="submit" class="btn btn-primary" name="submit1">
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
			</div>
		</section>
		
	
		
		
		
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
  <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Required Teachers</h5>
        
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <?php 
	  include "db.php";
      $sql44="SELECT * FROM wantedlist;";
$result44 = $conn->query($sql44);

while($row = $result44->fetch_assoc()) {
		$parentName=$row["ParentName"];
		$subject=$row["Subject"];
		$grade=$row["Grade"];
		$syllabus=$row["Syllabus"];
		
		echo'<div style=" border-radius:10px;  background-color:lightblue; margin:2% 10%;" class="align-center">
		<p style="margin-left:20%"> Need a '.$grade.'  '.$subject.' teacher </p>
		<p style="margin-left:20%"> Syllabus :'.$syllabus.'</div><div class="hr"></div>';
}
?>
      </div>
      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <input type="submit" class="btn btn-primary" value="submit" name="submit">
      </div>
      </form>
    </div>
  </div>
</div>
<?php
		include "db.php";

        if(isset($_REQUEST["submit"])){
			
			
			$parentName=$_REQUEST['parentName'];
			$subject=$_REQUEST['subject'];
			$grade=$_REQUEST['grade'];
			$syllabus=$_REQUEST['syllabus'];
			
			$sqll="INSERT INTO `wantedlist`(`ParentName`, `Subject`, `Grade`, `Syllabus`) VALUES ('".$parentName."', '".$subject."', '".$grade."', '".$syllabus."')";
			
$conn->query($sqll);}
?>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <!-- <script src="js/bootstrap.min.js"></script> -->
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <!-- <script src="js/bootstrap-datepicker.js"></script> -->
  <script src="js/bootstrap-3.3.6.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  
  
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>