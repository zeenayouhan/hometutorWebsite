
 
<?php
   include('db.php');
   session_start();
   
   $user_check = $_SESSION['login_user'];
   
   $ses_sql = mysqli_query($conn,"select * from teacher where Email = '$user_check' ");
   $sqb="select * from teacher where Email = '$user_check' ";
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   $z=mysqli_num_rows($ses_sql);
   
   $login_session = $row['FullName'];
   $mediums=array();
   $subjects=array();
   $syllabuses=array();
   $grades=array();
   $firstdays=array();
   
   if(isset($_REQUEST["Submit"])){
	   header("location: viewteacher.php");
	   }
	   
	   $resultb = $conn->query($sqb);
   
    while($row = $resultb->fetch_assoc()) {
   		$name1=$row["FullName"];
  		$email1=$row["Email"];
  		$location1=$row["Location"];
  		$travelD1=$row["Travel_Distance"];
		$qualifications1=$row["Qualifications"];
		$fee1=$row["Fee_for_a_week"];
		$descriptions1=$row["Your_description"];
		$contactNum1=$row["Contact_Number"];
		$experience1=$row["Experience"];
		$password111=$row["Password"];
		$password221=$row["CPassword"];
		$description1=$row["Your_description"];
  
  
        
		$grade1=$row["Grade"];
		
		
		$subject1=$row["Subject"];
		$syllabuss=$row["Syllabus"];
		
		$medium1=$row["Medium"];
		
		$firstday1=$row["FirstDay"];
		
   
   
	
		array_push($mediums,$medium1);
		array_push($subjects,$subject1);
		array_push($syllabuses,$syllabuss);	
		array_push($grades,$grade1);	
		array_push($firstdays,$firstday1);
   }
   if(!isset($_SESSION['login_user'])){
      header("location:login.php");
      die();
   }
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
		
		
	

      
        if(isset($_REQUEST["Submit"])){
			
         include_once'class.verifyEmail.php';
 
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
		$query22 = "SELECT * FROM `teacher` WHERE Email='".$email."'";
		$result2 = mysqli_query($conn, $query22);
		$countt=mysqli_num_rows( $result2 ) ;
		if ($countt > 1 )
            {

            echo "Email already exists";
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
		
		
		$agree=$_REQUEST["agreement"];
		$firstday=$_REQUEST["firstDay"];
		
		
	
		for($i=0; $i<$N1; $i++){
			$suby=$subject[$i];	
			for($r=0;$r<$N4; $r++){
				$sylly=$syllabus[$r];
			for($p=0;$p<$N2; $p++){
				$medy=$medium[$p];
				for($z=0;$z<$N3; $z++){
				$grady=$grade[$z];
				$sql2="UPDATE `teacher` SET `FullName`='".$name."',`Subject`='".$suby."',`Syllabus`='".$sylly."',`Location`='".$location."',`Medium`='".$medy."',`Grade`='".$grady."',`Travel_Distance`='".$travelD."',`Qualifications`='".$qualifications."',`Experience`='".$experience."',`Fee_for_a_week`='".$fee."',`Your_description`='".$description."',`Contact_Number`='".$cnum."',`Email`='".$email."',`FirstDay`='".$firstday."' where 1";
			
	   
	    $conn->query($sql2);
		 header("location: viewteacher.php");
		
			
		}
			}
			
			
		}
		}
		}
		$conn->close();
		?>
  
		

<div class="row"><div class="col-md-8">
  <div class="login-wrap ">
  	
  <div class="login-html">
  <h1>Update the information</h1>
 
  
  
    
    <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Teacher</label>
    <div class="login-form">
            <div class="row"><div class="col-md-8">
      <form class="sign-up-htm" action="" method="POST" enctype="multipart/form-data">
        <div class="group">
          <label for="user" class="label">Full Name</label>
          <input id="username" name="username" type="text" class="input" value="<?php echo $name1?>">
        </div>
       
        <div class="group">
          <label for="pass" class="label">Subject/Subjects </label>
              <input type="checkbox" name="subject[]" value="Maths" <?php if(in_array("Maths",$subjects)){ echo "checked"; }?> >Maths
              <input type="checkbox" name="subject[]" value="Sinhala" <?php if(in_array("Sinhala",$subjects)){ echo "checked"; }?>>Sinhala
              <input type="checkbox" name="subject[]" value="Environment" <?php if(in_array("Environment",$subjects)){ echo "checked"; }?>>Environment
              <input type="checkbox" name="subject[]" value="English" <?php if(in_array("English",$subjects)){ echo "checked"; }?>>English
              <input type="checkbox" name="subject[]" value="Tamil" <?php if(in_array("Tamil",$subjects)){ echo "checked"; }?>>Tamil
              <input type="checkbox" name="subject[]" value="Scholarship" <?php if(in_array("Scholarship",$subjects)){ echo "checked"; }?>>Scholarship <br>
              <input type="checkbox" name="subject[]" value="Science" <?php if(in_array("Science",$subjects)){ echo "checked"; }?> >Science
              <input type="checkbox" name="subject[]" value="Arts" <?php if(in_array("Arts",$subjects)){ echo "checked"; }?> >Arts
              <input type="checkbox" name="subject[]" value="Dancing" <?php if(in_array("Dancing",$subjects)){ echo "checked"; }?> >Dancing
              <input type="checkbox" name="subject[]" value="Western Music" <?php if(in_array("Western Music",$subjects)){ echo "checked"; }?>>Western Music
              <input type="checkbox" name="subject[]" value="Drama And theater" <?php if(in_array("Drama And theater",$subjects)){ echo "checked"; }?>>Drama And theater <br>
              <input type="checkbox" name="subject[]" value="Drama practical" <?php if(in_array("Drama practical",$subjects)){ echo "checked"; }?>>Drama practical
              <input type="checkbox" name="subject[]" value="Health and Physical Education" <?php if(in_array("Health and Physical Education",$subjects)){ echo "checked"; }?>>Health and Physical Education
              <input type="checkbox" name="subject[]" value="Eastern Music" <?php if(in_array("Eastern Music",$subjects)){ echo "checked"; }?>>Eastern Music <br>
              <input type="checkbox" name="subject[]" value="Commerce" <?php if(in_array("Commerce",$subjects)){ echo "checked"; }?>>Commerce
              <input type="checkbox" name="subject[]" value="Media" <?php if(in_array("Media",$subjects)){ echo "checked"; }?>>Media
              <input type="checkbox" name="subject[]" value="French" <?php if(in_array("French",$subjects)){ echo "checked"; }?>>French
              <input type="checkbox" name="subject[]" value="German" <?php if(in_array("German",$subjects)){ echo "checked"; }?>>German
              <input type="checkbox" name="subject[]" value="Japanese" <?php if(in_array("Japanese",$subjects)){ echo "checked"; }?>>Japanese
              <input type="checkbox" name="subject[]" value="Chinese" <?php if(in_array("Chinese",$subjects)){ echo "checked"; }?>>Chinese
              <input type="checkbox" name="subject[]" value="ICT" <?php if(in_array("ICT",$subjects)){ echo "checked"; }?>>ICT <br>
              <input type="checkbox" name="subject[]" value="History" <?php if(in_array("History",$subjects)){ echo "checked"; }?>>History
              <input type="checkbox" name="subject[]" value="Geography" <?php if(in_array("Geography",$subjects)){ echo "checked"; }?>>Geography
              <input type="checkbox" name="subject[]" value="Citizenship Education" <?php if(in_array("Citizenship Education",$subjects)){ echo "checked"; }?> >Citizenship Education
              <input type="checkbox" name="subject[]" value="Buddhism" <?php if(in_array("Buddhism",$subjects)){ echo "checked"; }?>>Buddhism
              <input type="checkbox" name="subject[]" value="Catholic" <?php if(in_array("Catholic",$subjects)){ echo "checked"; }?>>Catholic <br>
              <input type="checkbox" name="subject[]" value="Islam" <?php if(in_array("Islam",$subjects)){ echo "checked"; }?>>Islam
              <input type="checkbox" name="subject[]" value="Christianity" <?php if(in_array("Christianity",$subjects)){ echo "checked"; }?> >Christianity
              <input type="checkbox" name="subject[]" value="Shivanary" <?php if(in_array("Shivanary",$subjects)){ echo "checked"; }?>>Shivanary
              
        </div>
          <div class="group">
          <label for="pass" class="label">Location </label>
          
          <select name="Location" id="" style="opacity:0.5; padding:1%; width:100%"  value="Location" class="input">
<option value="">Location</option>
<option value="" disabled> colombo district</option>
<option value="Colombo" <?php if($location1=="Colombo"){echo "selected";}?>>Colombo</option>
<option value="Kolonnawa" <?php if($location1=="Kolonnawa"){echo "selected";}?>>Kolonnawa</option>
<option value="Kaduwela" <?php if($location1=="Kaduwela"){echo "selected";}?>>Kaduwela</option>
<option value="Homagama" <?php if($location1=="Homagama"){echo "selected";}?>>Homagama</option>
<option value="Seethawaka" <?php if($location1=="Seethawaka"){echo "selected";}?>>Seethawaka</option>
<option value="Padukka" <?php if($location1=="Padukka"){echo "selected";}?>>Padukka</option>
<option value="Maharagama" <?php if($location1=="Maharagama"){echo "selected";}?>>Maharagama</option>
<option value="Sri Jayawardanapura Kotte" <?php if($location1=="Sri Jayawardanapura Kotte"){echo "selected";}?>>Sri Jayawardanapura Kotte</option>
<option value="Thimbirigasyaya" <?php if($location1=="Thimbirigasyaya"){echo "selected";}?>>Thimbirigasyaya</option>
<option value="Dehiwala" <?php if($location1=="Dehiwala"){echo "selected";}?>>Dehiwala</option>
<option value="Ratmalana" <?php if($location1=="Ratmalana"){echo "selected";}?>>Ratmalana</option>
<option value="Moratuwa" <?php if($location1=="Moratuwa"){echo "selected";}?>>Moratuwa</option>
<option value="Kesbewa" <?php if($location1=="Kesbewa"){echo "selected";}?>>Kesbewa</option>
<option value="Negombo" <?php if($location1=="Negombo"){echo "selected";}?>>Negombo</option>
<option value="Katana" <?php if($location1=="Katana"){echo "selected";}?>>Katana</option>
<option value="Divulapitiya" <?php if($location1=="Divulapitiya"){echo "selected";}?>>Divulapitiya</option>
<option value="Mirigama" <?php if($location1=="Mirigama"){echo "selected";}?>>Mirigama</option>
<option value="Miuwangoda" <?php if($location1=="Miuwangoda"){echo "selected";}?>>Miuwangoda</option>
<option value="Wattala" <?php if($location1=="Wattala"){echo "selected";}?>>Wattala</option>
<option value="Ja-Ela" <?php if($location1=="Ja-Ela"){echo "selected";}?>>Ja-Ela</option>
<option value="Gampaha" <?php if($location1=="Gampaha"){echo "selected";}?>>Gampaha</option>
<option value="Attanagalla" <?php if($location1=="Attanagalla"){echo "selected";}?>>Attanagalla</option>
<option value="Dompe" <?php if($location1=="Dompe"){echo "selected";}?>>Dompe</option>
<option value="Mahara" <?php if($location1=="Mahara"){echo "selected";}?>>Mahara</option>
<option value="Kelaniya" <?php if($location1=="Kelaniya"){echo "selected";}?>>Kelaniya</option>
<option value="Biyagama" <?php if($location1=="Biyagama"){echo "selected";}?>>Biyagama</option>
<option value="Panadura" <?php if($location1=="Panadura"){echo "selected";}?>>Panadura</option>
<option value="Bandaragama" <?php if($location1=="Bandaragama"){echo "selected";}?>>Bandaragama</option>
<option value="Horana" <?php if($location1=="Horana"){echo "selected";}?>>Horana</option>
<option value="Ingiriya" <?php if($location1=="Ingiriya"){echo "selected";}?>>Ingiriya</option>
<option value="Bulathsinhala" <?php if($location1=="Bulathsinhala"){echo "selected";}?>>Bulathsinhala</option>
<option value="Madurawala" <?php if($location1=="Madurawala"){echo "selected";}?>>Madurawala</option>
<option value="Millaniya" <?php if($location1=="Millaniya"){echo "selected";}?>>Millaniya</option>
<option value="Kaluthara" <?php if($location1=="Kaluthara"){echo "selected";}?>>Kaluthara</option>
<option value="Beruwala" <?php if($location1=="Beruwala"){echo "selected";}?>>Beruwala</option>
<option value="Dodangoda" <?php if($location1=="Dodangoda"){echo "selected";}?>>Dodangoda</option>
<option value="Mathugama" <?php if($location1=="Mathugama"){echo "selected";}?>>Mathugama</option>
<option value="Palindanuwara" <?php if($location1=="Palindanuwara"){echo "selected";}?>>Palindanuwara</option>
<option value="Walallavita" <?php if($location1=="Walallavita"){echo "selected";}?>>Walallavita</option>
<option value="" disabled>Other districts</option>
<option value="Ampara" <?php if($location1=="Ampara"){echo "selected";}?>>Ampara</option>

<option value="Anuradhapura" <?php if($location1=="Anuradhapura"){echo "selected";}?>>Anuradhapura</option>
<option value="Badulla" <?php if($location1=="Badulla"){echo "selected";}?>>Badulla</option>
<option value="Batticaloa" <?php if($location1=="Batticaloa"){echo "selected";}?>>Batticaloa</option>
<option value="Galle" <?php if($location1=="Galle"){echo "selected";}?>>Galle</option>
<option value="Gampaha" <?php if($location1=="Gampaha"){echo "selected";}?>>Gampaha</option>
<option value="Hambantota" <?php if($location1=="Hambantota"){echo "selected";}?>>Hambantota</option>
<option value="Jaffna" <?php if($location1=="Jaffna"){echo "selected";}?>>Jaffna</option>
<option value="Kandy" <?php if($location1=="Kandy"){echo "selected";}?>>Kandy</option>
<option value="Kegalle" <?php if($location1=="Kegalle"){echo "selected";}?>>Kegalle</option>
<option value="Kurunagala" <?php if($location1=="Kurunagala"){echo "selected";}?>>Kurunagala</option>
<option value="Mannar" <?php if($location1=="Mannar"){echo "selected";}?>>Mannar</option>
<option value="Matale" <?php if($location1=="Matale"){echo "selected";}?>>Matale</option>
<option value="Matara" <?php if($location1=="Matara"){echo "selected";}?>>Matara</option>
<option value="Monaragala" <?php if($location1=="Monaragala"){echo "selected";}?>>Monaragala</option>
<option value="Mullaitivu" <?php if($location1=="Mullaitivu"){echo "selected";}?>>Mullaitivu</option>
<option value="Nuwara Eliya" <?php if($location1=="Nuwara Eliya"){echo "selected";}?>>Nuwara Eliya</option>
<option value="Polonnaruwa" <?php if($location1=="Polonnaruwa"){echo "selected";}?>>Polonnaruwa</option>
<option value="Puttalam" <?php if($location1=="Puttalam"){echo "selected";}?>>Puttalam</option>
<option value="Ratnapura" <?php if($location1=="Ratnapura"){echo "selected";}?>>Ratnapura</option>
<option value="Trincomalee" <?php if($location1=="Trincomalee"){echo "selected";}?>>Trincomalee</option>
<option value="Vavuniya" <?php if($location1=="Vavuniya"){echo "selected";}?>>Vavuniya</option>

</select>
          <br>
              
        </div>
         <div class="group">
          <label for="pass" class="label">Syllabus</label>
           <input type="checkbox" name="syllabus[]" value="Local syllabus (SM)" <?php if(in_array("Local syllabus (SM)",$syllabuses)){echo "checked";}?>>
              Local syllabus (Sinhala Medium) <br>
              <input type="checkbox" name="syllabus[]" value="Local syllabus (EM)" <?php if(in_array("Local syllabus (EM)",$syllabuses)){echo "checked";}?> >
              Local syllabus (English Medium) <br>
              <input type="checkbox" name="syllabus[]" value="Cambridge" <?php if(in_array("Cambridge",$syllabuses)){echo "checked";}?> >
              Cambridge<br>
              <input type="checkbox" name="syllabus[]" value="Edexel" <?php if(in_array("Edexel",$syllabuses)){echo "checked";}?>>
              Edexel
              <br>
              
        </div>
         <div class="group">
          <label for="pass" class="label">Medium</label>
           <input type="checkbox" name="Medium[]" value="English" <?php if(in_array("English",$mediums)){echo "checked";}?> >
              English
              <input type="checkbox" name="Medium[]" value="Sinhala"  <?php if(in_array("Sinhala",$mediums)){echo "checked";}?> >
              Sinhala
              <input type="checkbox" name="Medium[]" value="Tamil"  <?php if(in_array("Tamil",$mediums)){ echo "checked"; }?>>
              Tamil
              <br>
              
        </div>
         <div class="group">
          <label for="pass" class="label">Travel Distance(km) </label>
            <input id="td" name="Td" type="text" class="input" value="<?php echo $travelD1?>"><br>
              
        </div>
         <div class="group">
          <label for="pass" class="label">Grade</label>
          
              
             <input type="checkbox" name="grade[]" value="Primary"  <?php if(in_array("Primary",$grades)){ echo "checked"; }?>>
              Primary (Grade 1-5) <br>
              <input type="checkbox" name="grade[]" value="Secondary" <?php if(in_array("Secondary",$grades)){ echo "checked"; }?>>
              Secondary (Grade 6-9) <br>	
              <input type="checkbox" name="grade[]" value="Ordinary Level" <?php if(in_array("Ordinary Level",$grades)){ echo "checked"; }?>>
              Ordinary Level <br>
              <input type="checkbox" name="grade[]" value="Advanced Level" <?php if(in_array("Advanced Level",$grades)){ echo "checked"; }?>>
              Advanced Level
              
          
            <br>
        </div>
         <div class="group">
          <label for="pass" class="label">Qualifications</label>
            
            <textarea name="qualifications" cols="50" rows="5" class="input" value=""><?php echo $qualifications1?> </textarea><br>
              
        </div>
        <div class="group">
          <label for="pass" class="label">Total teaching Experience</label>
            
            <input id="experience" name="experience" type="text" class="input" value="<?php echo $experience1?>"><br>
              
        </div>
        <div class="group">
          <label for="pass" class="label">Fees for a per week(include + Rs.250 as company fee)</label>
            
            <input id="fee" name="fee" type="text" class="input" value="<?php echo $fee1 ?>"><br>
              
        </div>
        <div class="group">
          <label for="pass" class="label">Your description</label>
            
            <textarea name="description" cols="50" rows="5" class="input" value=""><?php echo $description1?> </textarea><br>
              
        </div>
        <div class="group">
          <label for="pass" class="label">Contact Number</label>
            
              <input id="Cnum" name="Cnum" type="text" class="input" value="<?php echo $contactNum1?>"><br>
              
        </div>
         <div class="group">
          <label for="pass" class="label">Email</label>
            
              <input id="email" name="email" type="email" class="input" value="<?php echo $email1?>"><br>
              
        </div>
          <div class="group">
          <label for="pass" class="label" >Password </label>
            
                <input id="password" name="password1" type="password" data-type="password" class="input" value="<?php echo $password111?>"><br>
              
        </div>
          <div class="group">
          <label for="pass" class="label">Confirm Password</label>
            
             <input type="password"  data-type="password" name="password2" class="input" value="<?php echo $password221?>">
              
        </div>
          <div class="group">
          <input type="checkbox" value="yes" name="firstDay4" style="margin-left:2%;" <?php if(in_array("yes",$firstdays)){ echo "checked"; }?>>Would you like to do the firstday as free? <br>
        </div>
          
        <div class="group">
            <input type="submit" class="button" value="Update" name="Submit">
        </div>
        
      </form>
      
    </div>
    
  </div>
  </div>
       
</div>
  
</div>
 

</body>
</html>