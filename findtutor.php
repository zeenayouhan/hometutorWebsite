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
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Wasara - Hometutor.lk</title>
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
    <style>

		@-webkit-keyframes color_change {
		  from { background-color: pink; }
		  to { background-color: purple; }
		}
		@-moz-keyframes color_change {
		  from { background-color: pink; }
		  to { background-color: purple; }
		}
		@-ms-keyframes color_change {
		  from { background-color: pink; }
		  to { background-color: purple; }
		}
		@-o-keyframes color_change {
		  from { background-color: pink; }
		  to { background-color: purple; }
		}
		@keyframes color_change {
		  from { background-color: purple; }
		  to { background-color: pink; }
		}

		.divy {
		    background-color: blue;
		    border: 5px solid white;
		    border-radius: 10px;
		    width: 150px;
		    height: 50px;
		   -webkit-animation: color_change 1s infinite alternate;
		   -moz-animation: color_change 1s infinite alternate;  
		   -ms-animation: color_change 1s infinite alternate;  
		   -o-animation: color_change 1s infinite alternate;  
		   animation: color_change 1s infinite alternate;   
		}
    </style>
    <style>
	
.login-html{
  
  box-shadow:0 12px 15px 0 rgba(0,0,0,.24),0 17px 50px 0 rgba(0,0,0,.19);
  padding:90px 70px 50px 70px;
  background:rgba(40,57,101,.9);
}
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
    
    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_3.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
         <div class="col-md-12 ftco-animate">

     <h1 class="mb-2 bread" >Find your home tutor</h1>
     
<form action="<?=$_SERVER['PHP_SELF'];?>" method="POST" style="color:black; width:100%; " >
<div class="row" class=" align-content-center">
<div class="col-md-2">
<select name="Location" id="" style="opacity:0.5; padding:1%; width:100%"  value="Location">
<option value="">Location</option>
<option value="" disabled> colombo district</option>
<option value="Colombo">Colombo</option>
<option value="Kolonnawa">Kolonnawa</option>
<option value="Kaduwela">Kaduwela</option>
<option value="Homagama">Homagama</option>
<option value="Seethawaka">Seethawaka</option>
<option value="Padukka">Padukka</option>
<option value="Maharagama">Maharagama</option>
<option value="Sri Jayawardanapura Kotte">Sri Jayawardanapura Kotte</option>
<option value="Thimbirigasyaya">Thimbirigasyaya</option>
<option value="Dehiwala">Dehiwala</option>
<option value="Ratmalana">Ratmalana</option>
<option value="Moratuwa">Moratuwa</option>
<option value="Kesbewa">Kesbewa</option>
<option value="Negombo">Negombo</option>
<option value="Katana">Katana</option>
<option value="Divulapitiya">Divulapitiya</option>
<option value="Mirigama">Mirigama</option>
<option value="Miuwangoda">Miuwangoda</option>
<option value="Wattala">Wattala</option>
<option value="Ja-Ela">Ja-Ela</option>
<option value="Gampaha">Gampaha</option>
<option value="Attanagalla">Attanagalla</option>
<option value="Dompe">Dompe</option>
<option value="Mahara">Mahara</option>
<option value="Kelaniya">Kelaniya</option>
<option value="Biyagama">Biyagama</option>
<option value="Panadura">Panadura</option>
<option value="Bandaragama">Bandaragama</option>
<option value="Horana">Horana</option>
<option value="Ingiriya">Ingiriya</option>
<option value="Bulathsinhala">Bulathsinhala</option>
<option value="Madurawala">Madurawala</option>
<option value="Millaniya">Millaniya</option>
<option value="Kaluthara">Kaluthara</option>
<option value="Beruwala">Beruwala</option>
<option value="Dodangoda">Dodangoda</option>
<option value="Mathugama">Mathugama</option>
<option value="Palindanuwara">Palindanuwara</option>
<option value="Walallavita">Walallavita</option>
<option value="" disabled>Other districts</option>
<option value="Ampara">Ampara</option>

<option value="Anuradhapura">Anuradhapura</option>
<option value="Badulla">Badulla</option>
<option value="Batticaloa">Batticaloa</option>
<option value="Galle">Galle</option>
<option value="Gampaha">Gampaha</option>
<option value="Hambantota">Hambantota</option>
<option value="Jaffna">Jaffna</option>
<option value="Kandy">Kandy</option>
<option value="Kegalle">Kegalle</option>
<option value="Kurunagala">Kurunagala</option>
<option value="Mannar">Mannar</option>
<option value="Matale">Matale</option>
<option value="Matara">Matara</option>
<option value="Monaragala">Monaragala</option>
<option value="Mullaitivu">Mullaitivu</option>
<option value="Nuwara Eliya">Nuwara Eliya</option>
<option value="Polonnaruwa">Polonnaruwa</option>
<option value="Puttalam">Puttalam</option>
<option value="Ratnapura">Ratnapura</option>
<option value="Trincomalee">Trincomalee</option>
<option value="Vavuniya">Vavuniya</option>

</select>
</div>
<div class="col-md-2">
<select name="Subject" id="" style="opacity:0.5; padding:1%; width:100%" value="Subject" >
<option value="" disabled>Subject</option>
<option value="Maths">Maths</option>
<option value="Sinhala">Sinhala</option>
<option value="Environment">Environment</option>
<option value="English ">English </option>
<option value="Tamil">Tamil</option>
<option value="Scholarship">Scholarship</option>
<option value="Science">Science</option>
<option value="Arts">Arts</option>
<option value="Dancing">Dancing</option>
<option value="Western Music">Western Music</option>
<option value="Drama And theater">Drama And theater</option>
<option value="Drama practical">Drama practical</option>
<option value="Health and Physical Education">Health and Physical Education</option>
<option value="Eastern Music">Eastern Music</option>
<option value="Commerce">Commerce</option>
<option value="Media">Media</option>
<option value="French">French</option>
<option value="German">German</option>
<option value="Japanese">Japanese</option>
<option value="Chinese">Chinese</option>
<option value="ICT">ICT</option>
<option value="History">History</option>
<option value="Geography">Geography</option>
<option value="Citizenship Education">Citizenship Education</option>
<option value="Buddhism">Buddhism</option>
<option value="Catholic">Catholic</option>
<option value="Islam">Islam</option>
<option value="Christianity">Christianity</option>
<option value="Shivanary">Shivanary</option>

</select>
</div>
<div class="col-md-3">
<select name="Grade" id="" style="opacity:0.5; padding:1%; width:100%" >
<option value="">Grade</option>
<option value="Primary">Primary (Grade 1-5)</option>
<option value="Secondary">Secondary (Grade 6-9)</option>
<option value="Ordinary Level">Ordinary Level</option>
<option value="Advanced Level">Advanced Level</option>

</select>
</div>
<div class="col-md-2">
<select name="Medium" id="" style="opacity:0.5; padding:1%;  width:100%" >
<option value="">Medium </option>
<option value="English">English</option>
<option value="Sinhala">Sinhala</option>
<option value="Tamil">Tamil</option>

</select>
</div>
<div class="col-md-3">
<select name="Syllabus" id="" style="opacity:0.5; padding:1%;  width:100%" >
<option value="">Syllabus</option>
<option value="Local syllabus (SM)">Local Syllabus (Sinhala Medium)</option>
<option value="Local syllabus (EM)">English syllabus (English Medium)</option>
<option value="Cambridge">Cambridge</option>
<option value="Edexel">Edexel</option>

</select>
</div>
</div>
<input type="submit" name="submit" value="Search" style="background-color:#B2BB1C; width:100px; height:46px; margin:7% 45%;">

</form>

          
        </div>
      </div>
    </section>
    
<?php

include "db.php";


$sqlz="SELECT * FROM teacher;";
$resultz = $conn->query($sqlz);
$N=mysqli_num_rows($resultz);
$grad=0;
$sub=0;
$med=0;
$syllabus=0;
$found=0;
if(isset($_REQUEST["submit"])){
	$sub= $_REQUEST["Subject"];
	$grad=$_REQUEST["Grade"];
	$med=$_REQUEST["Medium"];
	$syllabus=$_REQUEST["Syllabus"];
	$location=$_REQUEST["Location"];
	for($t=0;$t<$N;$t++){
	while($row[$t] = $resultz->fetch_assoc()) {
		if($row[$t]["Subject"]==$sub){
			if($row[$t]["Medium"]==$med){
				if($row[$t]["Location"]==$location){
					if($row[$t]["Syllabus"]==$syllabus){
						if($row[$t]["Grade"]==$grad){
				
			$found=1;
			$sql="SELECT * FROM teacher where Medium='".$med."' && Subject='".$sub."' && Grade='".$grad."' && Syllabus='".$syllabus."' && Location='".$location."';";
$result = $conn->query($sql);

while($row[$t] = $result->fetch_assoc()) {
		$name=$row[$t]["FullName"];
		$grade=$row[$t]["Grade"]."<br>";
		$email=$row[$t]["Email"]."<br>";
		$image=$row[$t]["Photo"]."<br>";
		$subject=$row[$t]["Subject"]."<br>";
		$location=$row[$t]["Location"]."<br>";
		$medium=$row[$t]["Medium"]."<br>";
		$travelD=$row[$t]["Travel_Distance"]."<br>";
		$qualifications=$row[$t]["Qualifications"]."<br>";
		$fee=$row[$t]["Fee_for_a_week"]."<br>";
		$descriptions=$row[$t]["Your_description"]."<br>";
		$experience=$row[$t]["Experience"]."<br>";
		$firstday=$row[$t]["FirstDay"];
}

?>
<?php
$sqz="Select Comments from Parentscomments where TeacherName='".$name."'";
$results=$conn->query($sqz);
while($row = $results->fetch_assoc()) {
		$comments=$row["Comments"]."<br>";
		
}
 echo'

<form action="date.php?var1='.$name.'" method="post" style=" background:url(http://codinginfinite.com/demo/images/bg.jpg) no-repeat center;">

<div class="row login-html " style="margin:5% 12%; background-color:rgba(40,57,101,.9); color:white;
}; padding:5%;  ">

  <div class="col-md-4"> 
  '; ?>
  <?php echo '
  <img src="data:image/jpeg;base64,'.base64_encode($image).'" height="50%" width="70%" /><br><br>' 
  ; if($firstday=="yes")
  {
	 echo '<button class="nav-item divy" style="margin-right:3px; margin-left:0px; width:190px;" data-toggle="modal" data-target="#exampleModal1">First Day Free</button>';
	 };?><?php echo' <br>
  Parent Comments<br><ul><li>'?><?php echo $comments ?> </li><br>
  <?php echo'</div>
  <div class="col-md-8">

   <label>Name</label><label> ';?> <?php echo $name; ?>
   <?php echo'</label><label for="">Subject</label><label>';?>	<?php echo $subject; ?><?php echo'</label>
   <label for="">Location</label><label> '?><?php echo $location; ?><?php echo'</label>
   <label for="">Experience </label><label>'?><?php echo $experience;?><?php echo'</label>
   <label for="">Medium</label> <label> '?><?php echo $medium; ?><?php echo' </label>
   <label for="">Grade</label>  <label> '?><?php echo $grade; ?><?php echo'</label>
   <label for="">Travel Distance</label><label>'?> <?php echo $travelD ;?><?php echo'</label>
   <label for="">Charge per week</label><label>  '?> <?php echo $fee; ?>
<?php echo"</label>
   <label for=''>Teacher's desriptions </label><label>"?> <?php echo $descriptions;?><?php echo'</label>
   <label>Qualifications </label><label>'?>  <?php echo $qualifications ?><?php echo'</label>
  </div>
  
  
  
 
  ';
  
  $_SESSION['var1']=$name;
  ?>

  


   <?php echo'
   
  <input type="submit" class="btn btn-primary " style="margin-left:40%;margin-right:1%;" name="sub" value="Reserve">
  <button type="button" class="btn btn-primary">Contact</button></div>
 
 
  </div>
</div>
</form>'; 	?><?php	}}}}

			
		}

		
		}
		
		
	 }

	 

	
	
	


	}
	else{$found=0;

		}
	if($found==0)
	{ echo "<h3 align='center'>No results found</h3>";
	echo "<h3 align='center'>Then Request a teacher. Click <button type='button' class='btn btn-primary' data-toggle='modal' data-target='#exampleModal'>
  Requsting a teacher
</button></h3>";}
	
	
?>







		
		<section class="ftco-section">
			<div class="container">
				<div class="row">
          <div class="col-lg-12 ftco-animate">
            
         
       
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
            <h3>Feedback on hometutor.lk</h3>
			<div class="container">
			
          
            <form action="#">
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="">Name</label>
                    <input type="text" class="form-control" class="input" placeholder="Your Name" style="border-radius:15px; " name="name">
                  </div>
                </div>
                
                 <div class="col-md-12">
                  <div class="form-group">
                    <label for="">Message</label>
                    <textarea type="text" class="" placeholder="Message" style="border-radius:20px; width:100%;" rows="5" name="parentfeedback"></textarea>
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
          <?php 
			   if(isset($_REQUEST['submit1'])){
				   $name=$_REQUEST['name'];
				   $message=$_REQUEST['parentfeedback'];
				   
				   $sql22="INSERT INTO `parentfeedback`( `ParentName`, `ParentFeed`) VALUES ('".$name."','".$message."')";
				   $result1= $conn->query($sql22);
				   }
			   ?>
          
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
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Required Teacher</h5>
        
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="" method="post">
      <div class="row">
      <div class="col-md-6">
      Parent Name <br><br><br>
      Subject <br><br>
      Grade  <br><br>
      Syllabus <br><br>
      
      </div>
      <div class="col-md-6">
        <input type="text" name="parentName" ><br><br>
         <input type="text" name="subject"><br><br>
        <input type="text" name="grade"><br><br>
         <input type="text" name="syllabus"><br><br></div>
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
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

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
