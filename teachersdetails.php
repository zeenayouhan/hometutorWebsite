<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>

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
<?php include "db.php";

include "session.php";
include "tutor.php";
$sql="SELECT `teacher.FullName``teacher.Photo``teacher.Subject``teacher.Syllabus``teacher.Location``teacher.Medium``teacher.Grade``teacher.Travel_Distance``teacher.Qualifications``teacher.Experience``teacher.Fee_for_a_week``teacher.Contact_Number``teacher.Email``teacher.FirstDay` FROM `teacher` FROM teacher , teachersbookings where teacher.FullName= '".$sno."' and teachersbookings.TeacherName='".$sno."'";
$resultz = $conn->query($sql);
while($row[$t] = $resultz->fetch_assoc()) {
		$name=$row[$t]["FullName"]."<br>";
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
		$contactNum=$row[$t]["Contact_Number"]."<br>";
		$parentCom=$row[$t]["ParentComments"]."<br>";
		$experience=$row[$t]["Experience"]."<br>";
}
?><?php echo'
<form action="date.php?var13='.$name.'" method="post">

<div class="row" style="margin:5% 12%; background-color: lightgray; padding:5%;  ">

  <div class="col-md-4"> 
  '; ?>
  <?php echo '
  <img src="data:image/jpeg;base64,'.base64_encode($image).'" height="50%" width="70%" /><img src="images/datavxc1.png" width="40%" height="40%">';?><?php echo' <br>
  Parent Comments'?><?php echo $parentCom ?> 
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
  $_SESSION['var13']=$name;
  ?>



			
		}

		
		}
		
		
	 }

	 

	
	
	


	
	
?>

<body>
</body>
</html>