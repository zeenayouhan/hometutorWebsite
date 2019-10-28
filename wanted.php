<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
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
</head>

<body>
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Requsting a teacher
</button>

<!-- Modal -->
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
<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Required Teacher</h5>
        
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
		
		echo'<div style="border: solid blue ; border-radius:10px;  background-color:lightblue; margin:2% 10%;" class="align-center">
		<p style="margin-left:20%"> Need a '.$grade.'  '.$subject.' teacher </p>
		<p style="margin-left:20%"> Syllabus :'.$syllabus.'</div>';
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
</body>
</html>
