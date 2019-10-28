<?php
   
  
   include('db.php');
   
   $user_check = $_SESSION['login_user'];
   
   $ses_sql = mysqli_query($conn,"select * from teacher where Email = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['FullName'];
       if(isset($_REQUEST["Submit"])){
	   header("location: index.php");
	   }
   
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Wasara- hometutors.lk</title>
</head>

<body>
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
	      <h5 style="color:white">Welcome <?php echo $login_session; ?>,</h5> 
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
            
	        	<li class="nav-item active"><a href="index.html" class="nav-link">Home</a></li>
	        	<li class="nav-item"><a href="about.html" class="nav-link">About</a></li>
	        	<li class="nav-item"><a href="menu.html" class="nav-link">How it works</a></li>
	        	<li class="nav-item"><a href="teacherdetailstoparent.php" class="nav-link">Your teachers' details</a></li>
	         <li class="nav-item"><a href="viewparent.php" class="nav-link">View your details</a></li>
                <li class="nav-item cta"><a href="logout.php" class="nav-link">Log out</a></li>
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
</body>
</html>