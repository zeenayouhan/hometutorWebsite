<?php

include "db.php";
?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>PHP Learning</title>
  
  
  <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Open+Sans:600'>
      <link rel="stylesheet" href="file:///G|/MyBusiness/assets/css/style.css">
      <style type="text/css">
        body{
  margin:0;
  color:#6a6f8c;
  background:#c8c8c8;
  font:600 16px/18px 'Open Sans',sans-serif;
}
*,:after,:before{box-sizing:border-box}
.clearfix:after,.clearfix:before{content:'';display:table}
.clearfix:after{clear:both;display:block}
a{color:inherit;text-decoration:none}
.login-wrap{
  width:100%;
  margin:auto;
  margin-top: 30px;
  max-width:1000px;
  min-height:2000px;
  position:relative;
  background:url(http://codinginfinite.com/demo/images/bg.jpg) no-repeat center;
  box-shadow:0 12px 15px 0 rgba(0,0,0,.24),0 17px 50px 0 rgba(0,0,0,.19);
}
.login-html{
  width:100%;
  height:100%;
  position:absolute;
  padding:90px 70px 50px 70px;
  background:rgba(40,57,101,.9);
}
.login-html .sign-in-htm,
.login-html .sign-up-htm{
  top:0;
  left:0;
  right:0;
 
  position:absolute;
  -webkit-transform:rotateY(180deg);
          transform:rotateY(180deg);
  -webkit-backface-visibility:hidden;
          backface-visibility:hidden;
  transition:all .4s linear;
}
.login-html .sign-in,
.login-html .sign-up,
.login-form .group .check{
  display:none;
}
.login-html .tab,
.login-form .group .label,
.login-form .group .button{
  text-transform:uppercase;
}
.login-html .tab{
  font-size:22px;
  margin-right:15px;
  padding-bottom:5px;
  margin:0 15px 10px 0;
  display:inline-block;
  border-bottom:2px solid transparent;
}
.login-html .sign-in:checked + .tab,
.login-html .sign-up:checked + .tab{
  color:#fff;
  border-color:#1161ee;
}
.login-form{
  
  position:relative;
  -webkit-perspective:1000px;
          perspective:1000px;
  -webkit-transform-style:preserve-3d;
          transform-style:preserve-3d;
		  
}
.login-form .group{
  margin-bottom:15px;
}
.login-form .group .label,
.login-form .group .input,
.login-form .group .button{
  width:100%;
  color:#fff;
  display:block;
}
.login-form .group .input,
.login-form .group .button{
  border:none;
  padding:15px 20px;
  border-radius:25px;
  background:rgba(255,255,255,.1);
}
.login-form .group input[data-type="password"]{
  text-security:circle;
  -webkit-text-security:circle;
}
.login-form .group .label{
  color:#aaa;
  font-size:12px;
}
.login-form .group .button{
  background:#1161ee;
}
.login-form .group label .icon{
  width:15px;
  height:15px;
  border-radius:2px;
  position:relative;
  display:inline-block;
  background:rgba(255,255,255,.1);
}
.login-form .group label .icon:before,
.login-form .group label .icon:after{
  content:'';
  width:10px;
  height:2px;
  background:#fff;
  position:absolute;
  transition:all .2s ease-in-out 0s;
}
.login-form .group label .icon:before{
  left:3px;
  width:5px;
  bottom:6px;
  -webkit-transform:scale(0) rotate(0);
          transform:scale(0) rotate(0);
}
.login-form .group label .icon:after{
  top:6px;
  right:0;
  -webkit-transform:scale(0) rotate(0);
          transform:scale(0) rotate(0);
}
.login-form .group .check:checked + label{
  color:#fff;
}
.login-form .group .check:checked + label .icon{
  background:#1161ee;
}
.login-form .group .check:checked + label .icon:before{
  -webkit-transform:scale(1) rotate(45deg);
          transform:scale(1) rotate(45deg);
}
.login-form .group .check:checked + label .icon:after{
  -webkit-transform:scale(1) rotate(-45deg);
          transform:scale(1) rotate(-45deg);
}
.login-html .sign-in:checked + .tab + .sign-up + .tab + .login-form .sign-in-htm{
  -webkit-transform:rotate(0);
          transform:rotate(0);
}
.login-html .sign-up:checked + .tab + .login-form .sign-up-htm{
  -webkit-transform:rotate(0);
          transform:rotate(0);
}
option{ background-color: #213B62}
.hr{
  height:2px;
  margin:60px 0 50px 0;
  background:rgba(255,255,255,.2);
}
.foot-lnk{
  text-align:center;
}
      </style>
  
</head>
<body>

 <?php
		include "db.php";
		
		
	

        if(isset($_REQUEST["submit"])){
			// Include library file
include_once 'class.verifyEmail.php';
 
		//
		$email = $_REQUEST["email"];
		
		$vmail = new verifyEmail();
		$vmail->setStreamTimeoutWait(20);
		$vmail->Debug= TRUE;
		$vmail->Debugoutput= 'html';
 
		$vmail->setEmailFrom('info.cloudevils@gmail.com');//email which is used to set from headers,you can add your own/company email over here
 
		if ($vmail->check($email)) {
			;
		} elseif (verifyEmail::validate($email)) {
			echo '<h5>email &lt;' . $email . '&gt; valid, but not exist!</h5>';
			die();
		} else {
			echo '<h5>email &lt;' . $email . '&gt; not valid and not exist!</h5>';
			die();
		}

			$target_dir ="";
		$target_file=$target_dir.basename($_FILES['fileToUpload']["name"]);
		$uploadOk =1;
		$imageFileType=strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
		
		$check= $_FILES['fileToUpload']['tmp_name'];
		
	    $name= $_REQUEST["username"];
		$photo=$target_file;	
		$subject=$_REQUEST["subject"];
		if(empty($subject))
		{
			echo ("<p> You have didnt </p>");
			}
			else{
				$N1=count($subject);
				}
		$syllabus=$_REQUEST["syllabus"];
		if(empty($syllabus))
		{
			echo ("<p> You have didnt </p>");
			}
			else{
				$N4=count($syllabus);
				}
		
		
		$location= $_REQUEST["Location"];
		$medium= $_REQUEST["Medium"];
		if(empty($medium))
		{
			echo ("<p> You have didnt </p>");
			}
			else{
				$N2=count($medium);
				}
		
		
		$grade= $_REQUEST["grade"];	
		if(empty($grade))
		{
			echo ("<p> You have didnt enter the grade</p>");
			}
			else{
				$N3=count($grade);
				}
		
		
	
		$travelD= $_REQUEST["Td"];
		$qualifications= $_REQUEST["qualifications"];
		$experience=$_REQUEST["experience"];
		$fee= $_REQUEST["fee"];
		$description= $_REQUEST["description"];
		$cnum= $_REQUEST["Cnum"];
		
		$password11= $_REQUEST["password1"];
		$password22= $_REQUEST["password2"];
		$agree=$_REQUEST["agreement"];
		$firstday=$_REQUEST["firstDay"];
		
		if($password11 != $password22)
		{
			echo "<p>Passwords are not matching</p>";
			}
	
		for($i=0; $i<$N1; $i++){
			$suby=$subject[$i];	
			for($r=0;$r<$N4; $r++){
				$sylly=$syllabus[$r];
			for($p=0;$p<$N2; $p++){
				$medy=$medium[$p];
				for($z=0;$z<$N3; $z++){
				$grady=$grade[$z];
	    $sql2="INSERT INTO `teacher`(`FullName`, `Photo`, `Subject`,`Syllabus`, `Location`, `Medium`, `Grade`, `Travel_Distance`, `Qualifications`, `Experience`, `Fee_for_a_week`, `Your_description`, `Contact_Number`, `Email`, `Password`, `CPassword`, `Agreement`, `FirstDay`) VALUES ('".$name."','".$photo."','".$suby."','".$sylly."','".$location."','".$medy."','".$grady."','".$travelD."','".$qualifications."','".$experience."','".$fee."','".$description."','".$cnum."','".$email."','".$password11."','".$password22."','".$agree."','".$firstday."')";
	    $conn->query($sql2);
		if($firstday=='yes'){
			if($fee==1250){
		$sql7="INSERT INTO `Probability`( `TeacherName`, `Full Details`, `FirstdayFree`, `ClassFee`) VALUES ('".$name."','70','20','10')";
				}
				if($fee<=1500 && $fee>1250){
					$sql7="INSERT INTO `Probability`( `TeacherName`, `Full Details`, `FirstdayFree`, `ClassFee`) VALUES ('".$name."','70','20','0')";
					
					}
					if($fee<1750 && $fee>1500){
					$sql7="INSERT INTO `Probability`( `TeacherName`, `Full Details`, `FirstdayFree`, `ClassFee`) VALUES ('".$name."','70','20','-10')";
					
					}
					if($fee>=1750){
					$sql7="INSERT INTO `Probability`( `TeacherName`, `Full Details`, `FirstdayFree`, `ClassFee`) VALUES ('".$name."','70','20','-30')";
					
					}
		}
		else{
				if($fee==1250){
		$sql7="INSERT INTO `Probability`( `TeacherName`, `Full Details`, `FirstdayFree`, `ClassFee`) VALUES ('".$name."','70','0','10')";
				}
				if($fee<=1500 && $fee>1250){
					$sql7="INSERT INTO `Probability`( `TeacherName`, `Full Details`, `FirstdayFree`, `ClassFee`) VALUES ('".$name."','70','0','0')";
					
					}
					if($fee<1750 && $fee>1500){
					$sql7="INSERT INTO `Probability`( `TeacherName`, `Full Details`, `FirstdayFree`, `ClassFee`) VALUES ('".$name."','70','0','-10')";
					
					}
					if($fee>=1750){
					$sql7="INSERT INTO `Probability`( `TeacherName`, `Full Details`, `FirstdayFree`, `ClassFee`) VALUES ('".$name."','70','0','-30')";
					
					}
			}
		}
			}
			$conn->query($sql7);
			
		}
		}}
		$conn->close();
		?>
  
 <?php
		include "db.php";
		

if(isset($_REQUEST["submit1"])){
	$target_dir ="uploads/";
$target_file=$target_dir.basename($_FILES["fileToUpload"]["name"]);
$uploadOk =1;
$imageFileType=strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

	    $name= $_REQUEST["username"];
		$photo=$_REQUEST["fileToUpload"];
		$address= $_REQUEST["address"];
		$cnum= $_REQUEST["Cnum"];
		$email= $_REQUEST["Email"];
		$pass= $_REQUEST["password"];
		$check=getimagesize($_FILES["fileToUpload"]["temp_name"]);
	    if($check !==false)
	    {
		$uploadOk =  1;
	    }else{
		echo "File is not an image.";
		$uploadOk =0;
		}
	    $sql2="INSERT INTO `parent`(`Name`, `ph`, `Address`, `Contact Number`, `Email`, `Password`) VALUES ('".$name."','".$photo."','".$address."','".$cnum."','".$email."','".$pass."')";
	    $conn->query($sql2);
	    header("location:search.php");
		}

		$conn->close();
		?>
<div class="row"><div class="col-md-8">
  <div class="login-wrap ">
  	
  <div class="login-html">
  <h1>Registration</h1>
  
    <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Parent</label>
    <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Teacher</label>
    <div class="login-form">
      <form class="sign-in-htm" action="" method="POST" class="col-md-8">
        <div class="group">
          <label for="user" class="label"> Name </label>
          <input id="username" name="username" type="text" class="input"> <br>
        </div>
        <div class="group">
          <label for="pass" class="label">Select image to upload:</label>
          <input type="file" name="fileToUpload" id="fileToUpload">
        </div>
         <div class="group">
          <label for="pass" class="label">Address</label>
           <input id="address" name="address" type="text" class="input"> <br>
        </div>
         <div class="group">
          <label for="pass" class="label">Contact Number </label>
          <input id="Cnum" name="Cnum" type="text" class="input"> <br>
        </div>
          <div class="group">
          <label for="pass" class="label">Email </label>
           <input id="email" name="email" type="email" class="input"> <br>
        </div>
          <div class="group">
          <label for="pass" class="label">Password </label>
           <input id="password" name="password" type="password" class="input" data-type="password"> <br>
        </div>
        <div class="group">
          <label for="pass" class="label">Confirm Password</label>
             <input id="pass" type="password" class="input" data-type="password"> 
        </div>
        
        <div class="group">
          <input type="submit" class="button" value="Sign Up" name="submit1">
        </div>
        <div class="hr"></div>
        <div class="foot-lnk">
          <a href="login.php">Already Member?</a>
        </div>
      </form>
      <div class="row"><div class="col-md-8">
      <form class="sign-up-htm" action="" method="POST">
        <div class="group">
          <label for="user" class="label">Full Name</label>
          <input id="username" name="username" type="text" class="input">
        </div>
        <div class="group">
          <label for="pass" class="label">Select image to upload:</label>
           <input type="file" name="fileToUpload" > 
        </div>
        <div class="group">
          <label for="pass" class="label">Subject/Subjects </label>
              <input type="checkbox" name="subject[]" value="Maths" >Maths
              <input type="checkbox" name="subject[]" value="Sinhala" >Sinhala
              <input type="checkbox" name="subject[]" value="Environment" >Environment
              <input type="checkbox" name="subject[]" value="English" >English
              <input type="checkbox" name="subject[]" value="Tamil" >Tamil
              <input type="checkbox" name="subject[]" value="Scholarship" >Scholarship <br>
              <input type="checkbox" name="subject[]" value="Science" >Science
              <input type="checkbox" name="subject[]" value="Arts" >Arts
              <input type="checkbox" name="subject[]" value="Dancing" >Dancing
              <input type="checkbox" name="subject[]" value="Western Music" >Western Music
              <input type="checkbox" name="subject[]" value="Drama And theater" >Drama And theater <br>
              <input type="checkbox" name="subject[]" value="Drama practical" >Drama practical
              <input type="checkbox" name="subject[]" value="Health and Physical Education" >Health and Physical Education
              <input type="checkbox" name="subject[]" value="Eastern Music" >Eastern Music <br>
              <input type="checkbox" name="subject[]" value="Commerce" >Commerce
              <input type="checkbox" name="subject[]" value="Media" >Media
              <input type="checkbox" name="subject[]" value="French" >French
              <input type="checkbox" name="subject[]" value="German" >German
              <input type="checkbox" name="subject[]" value="Japanese" >Japanese
              <input type="checkbox" name="subject[]" value="Chinese" >Chinese
              <input type="checkbox" name="subject[]" value="ICT" >ICT <br>
              <input type="checkbox" name="subject[]" value="History" >History
              <input type="checkbox" name="subject[]" value="Geography" >Geography
              <input type="checkbox" name="subject[]" value="Citizenship Education" >Citizenship Education
              <input type="checkbox" name="subject[]" value="Buddhism" >Buddhism
              <input type="checkbox" name="subject[]" value="Catholic" >Catholic <br>
              <input type="checkbox" name="subject[]" value="Islam" >Islam
              <input type="checkbox" name="subject[]" value="Christianity" >Christianity
              <input type="checkbox" name="subject[]" value="Shivanary" >Shivanary
              
        </div>
          <div class="group">
          <label for="pass" class="label">Location </label>
          
          <select name="Location" id="" style="opacity:0.5; padding:1%; width:100%"  value="Location" class="input">
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
          <br>
              
        </div>
         <div class="group">
          <label for="pass" class="label">Syllabus</label>
           <input type="checkbox" name="syllabus[]" value="Local syllabus (SM)">
              Local syllabus (Sinhala Medium) <br>
              <input type="checkbox" name="syllabus[]" value="Local syllabus (EM)" >
              Local syllabus (English Medium) <br>
              <input type="checkbox" name="syllabus[]" value="Cambridge" >
              Cambridge<br>
              <input type="checkbox" name="syllabus[]" value="Edexel" >
              Edexel
              <br>
              
        </div>
         <div class="group">
          <label for="pass" class="label">Medium</label>
           <input type="checkbox" name="Medium[]" value="English">
              English
              <input type="checkbox" name="Medium[]" value="Sinhala" >
              Sinhala
              <input type="checkbox" name="Medium[]" value="Tamil" >
              Tamil
              <br>
              
        </div>
         <div class="group">
          <label for="pass" class="label">Travel Distance(km) </label>
            <input id="td" name="Td" type="text" class="input"><br>
              
        </div>
         <div class="group">
          <label for="pass" class="label">Grade</label>
              
             <input type="checkbox" name="grade[]" value="Primary">
              Primary (Grade 1-5) <br>
              <input type="checkbox" name="grade[]" value="Secondary" >
              Secondary (Grade 6-9) <br>	
              <input type="checkbox" name="grade[]" value="Ordinary Level" >
              Ordinary Level <br>
              <input type="checkbox" name="grade[]" value="Advanced Level" >
              Advanced Level
              
          
            <br>
        </div>
         <div class="group">
          <label for="pass" class="label">Qualifications</label>
            
            <textarea name="qualifications" cols="50" rows="5" class="input"> </textarea><br>
              
        </div>
        <div class="group">
          <label for="pass" class="label">Total teaching Experience</label>
            
            <input id="experience" name="experience" type="text" class="input"><br>
              
        </div>
        <div class="group">
          <label for="pass" class="label">Fees for a per week(include + Rs.250 as company fee)</label>
            
            <input id="fee" name="fee" type="text" class="input"><br>
              
        </div>
        <div class="group">
          <label for="pass" class="label">Your description</label>
            
            <textarea name="description" cols="50" rows="5" class="input"> </textarea><br>
              
        </div>
        <div class="group">
          <label for="pass" class="label">Contact Number</label>
            
              <input id="Cnum" name="Cnum" type="text" class="input"><br>
              
        </div>
         <div class="group">
          <label for="pass" class="label">Email</label>
            
              <input id="email" name="email" type="email" class="input"><br>
              
        </div>
          <div class="group">
          <label for="pass" class="label">Password </label>
            
                <input id="password" name="password1" type="password" data-type="password" class="input"><br>
              
        </div>
          <div class="group">
          <label for="pass" class="label">Confirm Password</label>
            
             <input type="password"  data-type="password" name="password2" class="input">
              
        </div>
          <div class="group">
          <input type="checkbox" value="yes" name="firstDay" style="margin-left:2%;">Would you like to do the firstday as free? <br>
          <input type="checkbox" value="read" name="agreement" style="margin-left:2%;"><a href="" style="color:black;">I have read agreement.....</a>
        </div>
          
        <div class="group">
            <input type="submit" class="button" value="Sign Up" name="submit">
        </div>
        <div class="hr"></div>
        <div class="foot-lnk">
          <label for="tab-1"><a href="login.php">Already Member?</a></label>
        </div>
      </form>
      
    </div>
    
  </div>
  </div>
        <div class="col-md-4">hghgh</div></div>
</div>
  
</div>

</body>
</html>