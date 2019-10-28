<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Untitled Document</title>

<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
<style>
input{margin-top:12px;}
</style>
</head>

<body background="bg1.jpg">

    
      
      <form action="" method="POST" enctype="multipart/form-data" style=" margin: 100px 400px; padding:20px ;border:solid;  border-radius:10px;">
      <h3 style="text-align:center;">REGISTER AS A STUDENT/ PARENT</h3>
      <div class="row">
      <div class="col-md-6" style="padding-left:60px; padding-top:10px;">
      Name <br><br>
      Select image to upload: <br><br>
      Address <br><br>
      Contact Number <br><br>
      Email <br><br>
      Password <br><br>
      Confirm Password <br>
      </div>
      <div class="col-md-6">
      <input id="username" name="username" type="text" class="input"> <br>
      <input type="file" name="fileToUpload" id="fileToUpload">
       <input id="address" name="address" type="text" class="input"> <br>
       <input id="Cnum" name="Cnum" type="text" class="input"> <br>
        <input id="email" name="email" type="email" class="input"> <br>
        <input id="password" name="password" type="password" class="input" data-type="password"> <br>
                  <input id="pass" type="password" class="input" data-type="password"> <br>
                  

      </div>
      </div>
    
        
  <div style="color:black; margin: 10px 10px 30px 100px;">
              <p><a href="" style="color:black; float:left;">Already Member?</a></p>
    <input type="submit" value="Sign Up" name="submit" style="float:left; margin-left:60px;"></div>
        <?php
		include "db.php";
		

if(isset($_REQUEST["submit"])){
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
      </form>
    </div>
</body>
</html>