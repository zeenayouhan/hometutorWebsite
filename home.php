<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Feliciano - Free Bootstrap 4 Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Great+Vibes&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="file:///C|/Users/HP/Desktop/feliciano-20190927T042314Z-001/feliciano/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="file:///C|/Users/HP/Desktop/feliciano-20190927T042314Z-001/feliciano/css/animate.css">
    
    <link rel="stylesheet" href="file:///C|/Users/HP/Desktop/feliciano-20190927T042314Z-001/feliciano/css/owl.carousel.min.css">
    <link rel="stylesheet" href="file:///C|/Users/HP/Desktop/feliciano-20190927T042314Z-001/feliciano/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="file:///C|/Users/HP/Desktop/feliciano-20190927T042314Z-001/feliciano/css/magnific-popup.css">

    <link rel="stylesheet" href="file:///C|/Users/HP/Desktop/feliciano-20190927T042314Z-001/feliciano/css/aos.css">

    <link rel="stylesheet" href="file:///C|/Users/HP/Desktop/feliciano-20190927T042314Z-001/feliciano/css/ionicons.min.css">

    <link rel="stylesheet" href="file:///C|/Users/HP/Desktop/feliciano-20190927T042314Z-001/feliciano/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="file:///C|/Users/HP/Desktop/feliciano-20190927T042314Z-001/feliciano/css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="file:///C|/Users/HP/Desktop/feliciano-20190927T042314Z-001/feliciano/css/flaticon.css">
    <link rel="stylesheet" href="file:///C|/Users/HP/Desktop/feliciano-20190927T042314Z-001/feliciano/css/icomoon.css">
    <link rel="stylesheet" href="file:///C|/Users/HP/Desktop/feliciano-20190927T042314Z-001/feliciano/css/style.css">
  </head>
  <body>
  	<?php
include "db.php";



$sqlz="SELECT * FROM parent ;";
$resultz= $conn->query($sqlz);
$Z=mysqli_num_rows($resultz);

while($row = $resultz->fetch_assoc()) {
		$parentF=$row["ParentFeedback"]."<br>";
		$pname=$row["Name"]."<br>";
}


$sql="SELECT * FROM teacher ;";
$result= $conn->query($sql);
$N=mysqli_num_rows($result);
$S=$N-2;
$D=$N-6;


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

?>
    <div class="py-1 bg-black top">
    	<div class="container">
    		<div class="row no-gutters d-flex align-items-start align-items-center px-md-0">
	    		<div class="col-lg-12 d-block">
		    		<div class="row d-flex">
		    			<div class="col-md pr-4 d-flex topper align-items-center">
					    	<div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
						    <span class="text">+ 94 771151706</span>
					    </div>
					    <div class="col-md pr-4 d-flex topper align-items-center">
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
	      <a class="navbar-brand" href="file:///C|/Users/HP/Desktop/feliciano-20190927T042314Z-001/feliciano/index.html">WASARA</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	        	<li class="nav-item active"><a href="file:///C|/Users/HP/Desktop/feliciano-20190927T042314Z-001/feliciano/index.html" class="nav-link">Home</a></li>
	        	<li class="nav-item"><a href="file:///C|/Users/HP/Desktop/feliciano-20190927T042314Z-001/feliciano/about.html" class="nav-link">About</a></li>
	        	<li class="nav-item"><a href="file:///C|/Users/HP/Desktop/feliciano-20190927T042314Z-001/feliciano/menu.html" class="nav-link">How it works</a></li>
	        	<li class="nav-item"><a href="file:///C|/Users/HP/Desktop/feliciano-20190927T042314Z-001/feliciano/blog.html" class="nav-link">Request a home visiting teacher</a></li>
	          <li class="nav-item"><a href="file:///C|/Users/HP/Desktop/feliciano-20190927T042314Z-001/feliciano/contact.html" class="nav-link">Join as a home visiting teacher</a></li>
	          <li class="nav-item cta"><a href="file:///C|/Users/HP/Desktop/feliciano-20190927T042314Z-001/feliciano/reservation.html" class="nav-link" style="margin-right:3px;">Sign in</a></li>
                <li class="nav-item cta"><a href="file:///C|/Users/HP/Desktop/feliciano-20190927T042314Z-001/feliciano/reservation.html" class="nav-link">Log in</a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
    
    <section class="home-slider owl-carousel js-fullheight">
      <div class="slider-item js-fullheight" style="background-image: url(file:///C|/Users/HP/Desktop/feliciano-20190927T042314Z-001/feliciano/images/bg_1.jpg);">
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

      <div class="slider-item js-fullheight" style="background-image: url(file:///C|/Users/HP/Desktop/feliciano-20190927T042314Z-001/feliciano/images/bg_2.jpg);">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row slider-text js-fullheight justify-content-center align-items-center" data-scrollax-parent="true">

            <div class="col-md-12 col-sm-12 text-center ftco-animate">
            	<span class="subheading">Find your home tutor job</span>
              <h1 class="mb-4">Best way to earn</h1>
            </div>

          </div>
        </div>
      </div>

      <div class="slider-item js-fullheight" style="background-image: url(file:///C|/Users/HP/Desktop/feliciano-20190927T042314Z-001/feliciano/images/bg_3.jpg);">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

            <div class="col-md-12 col-sm-12 text-center ftco-animate">
            	
              <h1 class="mb-4">Best things for children</h1>
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
						<div class="img img-1 mr-md-2" style="background-image: url(file:///C|/Users/HP/Desktop/feliciano-20190927T042314Z-001/feliciano/images/about.jpg);"></div>
						<div class="img img-2 ml-md-2" style="background-image: url(file:///C|/Users/HP/Desktop/feliciano-20190927T042314Z-001/feliciano/images/about-1.jpg);"></div>
					</div>
					<div class="col-md-5 wrap-about pt-5 pt-md-5 pb-md-3 ftco-animate">
	          <div class="heading-section mb-4 my-5 my-md-0">
	          	<span class="subheading">About</span>
	            <h2 class="mb-4">WASARA</h2>
	          </div>
	          <p>Hometutor.lk is the first and leading platform that connects the needs of the home visiting teachers as well as the students who are looking for home visiting teachers. We started our operational activities on 01/07/2019 and now we have a basis of 1000plus students and 1500 plus teachers.</p>
						<p class="time">
							<span>Mon - Fri <strong>8 AM - 11 PM</strong></span>
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
		                
		                <span>Registered Teachers</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-6 col-lg-6 mb-4 mb-lg-0 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18">
		              <div class="text">
		                <strong class="number" data-number="9">0</strong>
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
            		<span class="flaticon-cake"></span>
              </div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading">Find a home tutor</h3>
                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
              </div>
            </div>      
          </div>
          <div class="col-md-4 d-flex align-self-stretch ftco-animate text-center">
            <div class="media block-6 services d-block">
              <div class="icon d-flex justify-content-center align-items-center">
            		<span class="flaticon-meeting"></span>
              </div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading">Find an online teacher</h3>
                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
              </div>
            </div>    
          </div>
          <div class="col-md-4 d-flex align-self-stretch ftco-animate text-center">
            <div class="media block-6 services d-block">
              <div class="icon d-flex justify-content-center align-items-center">
            		<span class="flaticon-tray"></span>
              </div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading">Create your own advertisement</h3>
                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
              </div>
            </div>      
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 d-flex align-self-stretch ftco-animate text-center">
            <div class="media block-6 services d-block">
              <div class="icon d-flex justify-content-center align-items-center">
            		<span class="flaticon-cake"></span>
              </div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading">E-library</h3>
                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
              </div>
            </div>      
          </div>
          <div class="col-md-4 d-flex align-self-stretch ftco-animate text-center">
            <div class="media block-6 services d-block">
              <div class="icon d-flex justify-content-center align-items-center">
            		<span class="flaticon-meeting"></span>
              </div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading">Assignment Help</h3>
                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
              </div>
            </div>    
          </div>
          <div class="col-md-4 d-flex align-self-stretch ftco-animate text-center">
            <div class="media block-6 services d-block">
              <div class="icon d-flex justify-content-center align-items-center">
            		<span class="flaticon-tray"></span>
              </div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading">E-learing</h3>
                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
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
        		<div class="menus d-sm-flex ftco-animate align-items-stretch">
              <div class="menu-img img" style="background-image: url(file:///C|/Users/HP/Desktop/feliciano-20190927T042314Z-001/feliciano/images/breakfast-1.jpg);"></div>
              <div class="text d-flex align-items-center">
								<div>
	              	<div class="d-flex">
		                <div class="one-half">
		                  <h3>Grilled Beef with potatoes</h3>
		                </div>
		                <div class="one-forth">
		                  <span class="price">$29</span>
		                </div>
		              </div>
		              <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
		              <p><a href="#" class="btn btn-primary">Order now</a></p>
	              </div>
              </div>
            </div>
        	</div>
        	<div class="col-md-12 col-lg-6 d-flex align-self-stretch">
        		<div class="menus d-sm-flex ftco-animate align-items-stretch">
              <div class="menu-img img" style="background-image: url(file:///C|/Users/HP/Desktop/feliciano-20190927T042314Z-001/feliciano/images/breakfast-2.jpg);"></div>
              <div class="text d-flex align-items-center">
								<div>
	              	<div class="d-flex">
		                <div class="one-half">
		                  <h3>Grilled Beef with potatoes</h3>
		                </div>
		                <div class="one-forth">
		                  <span class="price">$29</span>
		                </div>
		              </div>
		              <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
		              <p><a href="#" class="btn btn-primary">Order now</a></p>
	              </div>
              </div>
            </div>
        	</div>

        	<div class="col-md-12 col-lg-6 d-flex align-self-stretch">
        		<div class="menus d-sm-flex ftco-animate align-items-stretch">
              <div class="menu-img img order-md-last" style="background-image: url(file:///C|/Users/HP/Desktop/feliciano-20190927T042314Z-001/feliciano/images/breakfast-3.jpg);"></div>
              <div class="text d-flex align-items-center">
								<div>
	              	<div class="d-flex">
		                <div class="one-half">
		                  <h3>Grilled Beef with potatoes</h3>
		                </div>
		                <div class="one-forth">
		                  <span class="price">$29</span>
		                </div>
		              </div>
		              <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
		              <p><a href="#" class="btn btn-primary">Order now</a></p>
	              </div>
              </div>
            </div>
        	</div>
        	<div class="col-md-12 col-lg-6 d-flex align-self-stretch">
        		<div class="menus d-sm-flex ftco-animate align-items-stretch">
              <div class="menu-img img order-md-last" style="background-image: url(file:///C|/Users/HP/Desktop/feliciano-20190927T042314Z-001/feliciano/images/breakfast-5.jpg);"></div>
              <div class="text d-flex align-items-center">
								<div>
	              	<div class="d-flex">
		                <div class="one-half">
		                  <h3>Grilled Beef with potatoes</h3>
		                </div>
		                <div class="one-forth">
		                  <span class="price">$29</span>
		                </div>
		              </div>
		              <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
		              <p><a href="#" class="btn btn-primary">Order now</a></p>
	              </div>
              </div>
            </div>
        	</div>

        	<div class="col-md-12 col-lg-6 d-flex align-self-stretch">
        		<div class="menus d-sm-flex ftco-animate align-items-stretch">
              <div class="menu-img img" style="background-image: url(file:///C|/Users/HP/Desktop/feliciano-20190927T042314Z-001/feliciano/images/breakfast-6.jpg);"></div>
              <div class="text d-flex align-items-center">
								<div>
	              	<div class="d-flex">
		                <div class="one-half">
		                  <h3>Grilled Beef with potatoes</h3>
		                </div>
		                <div class="one-forth">
		                  <span class="price">$29</span>
		                </div>
		              </div>
		              <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
		              <p><a href="#" class="btn btn-primary">Order now</a></p>
	              </div>
              </div>
            </div>
        	</div>
        	<div class="col-md-12 col-lg-6 d-flex align-self-stretch">
        		<div class="menus d-sm-flex ftco-animate align-items-stretch">
              <div class="menu-img img" style="background-image: url(file:///C|/Users/HP/Desktop/feliciano-20190927T042314Z-001/feliciano/images/breakfast-2.jpg);"></div>
              <div class="text d-flex align-items-center">
								<div>
	              	<div class="d-flex">
		                <div class="one-half">
		                  <h3>Grilled Beef with potatoes</h3>
		                </div>
		                <div class="one-forth">
		                  <span class="price">$29</span>
		                </div>
		              </div>
		              <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
		              <p><a href="#" class="btn btn-primary">Order now</a></p>
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
          <div class="col-md-12 text-center heading-section ftco-animate">
          	<span class="subheading">Feedbacks</span>
            <h2 class="mb-4">Teachers' Feedback</h2>
          </div>
        </div>	
				<div class="row">
					<div class="col-md-6 col-lg-3 ftco-animate">
						<div class="staff">
							<div class="img" style="background-image: url(file:///C|/Users/HP/Desktop/feliciano-20190927T042314Z-001/feliciano/images/chef-4.jpg);"></div>
							<div class="text pt-4">
								<h3>John Smooth</h3>
								<span class="position mb-2">Restaurant Owner</span>
								<div class="faded">
									<ul class="ftco-social d-flex">
		                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
		                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
		                <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
		                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
		              </ul>
	              </div>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-3 ftco-animate">
						<div class="staff">
							<div class="img" style="background-image: url(file:///C|/Users/HP/Desktop/feliciano-20190927T042314Z-001/feliciano/images/chef-2.jpg);"></div>
							<div class="text pt-4">
								<h3>Rebeca Welson</h3>
								<span class="position mb-2">Head Chef</span>
								<div class="faded">
									<ul class="ftco-social d-flex">
		                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
		                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
		                <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
		                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
		              </ul>
	              </div>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-3 ftco-animate">
						<div class="staff">
							<div class="img" style="background-image: url(file:///C|/Users/HP/Desktop/feliciano-20190927T042314Z-001/feliciano/images/chef-3.jpg);"></div>
							<div class="text pt-4">
								<h3>Kharl Branyt</h3>
								<span class="position mb-2">Chef</span>
								<div class="faded">
									<ul class="ftco-social d-flex">
		                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
		                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
		                <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
		                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
		              </ul>
	              </div>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-3 ftco-animate">
						<div class="staff">
							<div class="img" style="background-image: url(file:///C|/Users/HP/Desktop/feliciano-20190927T042314Z-001/feliciano/images/chef-1.jpg);"></div>
							<div class="text pt-4">
								<h3>Luke Simon</h3>
								<span class="position mb-2">Chef</span>
								<div class="faded">
									<ul class="ftco-social d-flex">
		                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
		                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
		                <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
		                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
		              </ul>
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
          <div class="col-md-12 text-center heading-section ftco-animate">
          	<span class="subheading">Feedbacks</span>
            <h2 class="mb-4">Parents' Feedback</h2>
          </div>
        </div>	
				<div class="row">
					<div class="col-md-6 col-lg-3 ftco-animate">
						<div class="staff">
							<div class="img" style="background-image: url(file:///C|/Users/HP/Desktop/feliciano-20190927T042314Z-001/feliciano/images/chef-4.jpg);"></div>
							<div class="text pt-4">
								<h3>John Smooth</h3>
								<span class="position mb-2">Restaurant Owner</span>
								<div class="faded">
									<ul class="ftco-social d-flex">
		                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
		                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
		                <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
		                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
		              </ul>
	              </div>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-3 ftco-animate">
						<div class="staff">
							<div class="img" style="background-image: url(file:///C|/Users/HP/Desktop/feliciano-20190927T042314Z-001/feliciano/images/chef-2.jpg);"></div>
							<div class="text pt-4">
								<h3>Rebeca Welson</h3>
								<span class="position mb-2">Head Chef</span>
								<div class="faded">
									<ul class="ftco-social d-flex">
		                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
		                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
		                <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
		                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
		              </ul>
	              </div>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-3 ftco-animate">
						<div class="staff">
							<div class="img" style="background-image: url(file:///C|/Users/HP/Desktop/feliciano-20190927T042314Z-001/feliciano/images/chef-3.jpg);"></div>
							<div class="text pt-4">
								<h3>Kharl Branyt</h3>
								<span class="position mb-2">Chef</span>
								<div class="faded">
									<ul class="ftco-social d-flex">
		                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
		                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
		                <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
		                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
		              </ul>
	              </div>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-3 ftco-animate">
						<div class="staff">
							<div class="img" style="background-image: url(file:///C|/Users/HP/Desktop/feliciano-20190927T042314Z-001/feliciano/images/chef-1.jpg);"></div>
							<div class="text pt-4">
								<h3>Luke Simon</h3>
								<span class="position mb-2">Chef</span>
								<div class="faded">
									<ul class="ftco-social d-flex">
		                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
		                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
		                <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
		                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
		              </ul>
	              </div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="ftco-section img" style="background-image: url(file:///C|/Users/HP/Desktop/feliciano-20190927T042314Z-001/feliciano/images/bg_3.jpg)" data-stellar-background-ratio="0.5">
			<div class="container">
				<div class="row d-flex">
          <div class="col-md-7 ftco-animate makereservation p-4 px-md-5 pb-md-5">
          	<div class="heading-section ftco-animate mb-5 text-center">
	          	<span class="subheading">Online Support</span>
	            <h2 class="mb-4">Make Reservation</h2>
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
                    <input type="text" class="form-control" placeholder="Your Email">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="">Phone</label>
                    <input type="text" class="form-control" placeholder="Phone">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="">Phone</label>
                    <input type="text" class="form-control" id="book_date" placeholder="Date">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="">Time</label>
                    <input type="text" class="form-control" id="book_time" placeholder="Time">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="">Person</label>
                    <div class="select-wrap one-third">
                      <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                      <select name="" id="" class="form-control">
                        <option value="">Person</option>
                        <option value="">1</option>
                        <option value="">2</option>
                        <option value="">3</option>
                        <option value="">4+</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="col-md-12 mt-3">
                  <div class="form-group text-center">
                    <input type="submit" value="Make a Reservation" class="btn btn-primary py-3 px-5">
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
                <li class="d-flex">About us</li>
                <li class="d-flex">Privacy &amp; Policy</li>
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
                <li class="ftco-animate"><a href="#"><span class="icon-google"></span></a></li>
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


  <script src="file:///C|/Users/HP/Desktop/feliciano-20190927T042314Z-001/feliciano/js/jquery.min.js"></script>
  <script src="file:///C|/Users/HP/Desktop/feliciano-20190927T042314Z-001/feliciano/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="file:///C|/Users/HP/Desktop/feliciano-20190927T042314Z-001/feliciano/js/popper.min.js"></script>
  <script src="file:///C|/Users/HP/Desktop/feliciano-20190927T042314Z-001/feliciano/js/bootstrap.min.js"></script>
  <script src="file:///C|/Users/HP/Desktop/feliciano-20190927T042314Z-001/feliciano/js/jquery.easing.1.3.js"></script>
  <script src="file:///C|/Users/HP/Desktop/feliciano-20190927T042314Z-001/feliciano/js/jquery.waypoints.min.js"></script>
  <script src="file:///C|/Users/HP/Desktop/feliciano-20190927T042314Z-001/feliciano/js/jquery.stellar.min.js"></script>
  <script src="file:///C|/Users/HP/Desktop/feliciano-20190927T042314Z-001/feliciano/js/owl.carousel.min.js"></script>
  <script src="file:///C|/Users/HP/Desktop/feliciano-20190927T042314Z-001/feliciano/js/jquery.magnific-popup.min.js"></script>
  <script src="file:///C|/Users/HP/Desktop/feliciano-20190927T042314Z-001/feliciano/js/aos.js"></script>
  <script src="file:///C|/Users/HP/Desktop/feliciano-20190927T042314Z-001/feliciano/js/jquery.animateNumber.min.js"></script>
  <script src="file:///C|/Users/HP/Desktop/feliciano-20190927T042314Z-001/feliciano/js/bootstrap-datepicker.js"></script>
  <script src="file:///C|/Users/HP/Desktop/feliciano-20190927T042314Z-001/feliciano/js/jquery.timepicker.min.js"></script>
  <script src="file:///C|/Users/HP/Desktop/feliciano-20190927T042314Z-001/feliciano/js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="file:///C|/Users/HP/Desktop/feliciano-20190927T042314Z-001/feliciano/js/google-map.js"></script>
  <script src="file:///C|/Users/HP/Desktop/feliciano-20190927T042314Z-001/feliciano/js/main.js"></script>
    
  </body>
</html>