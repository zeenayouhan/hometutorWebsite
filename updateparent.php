
 
<?php
   include('db.php');
   session_start();
   
   $user_check = $_SESSION['login_user'];
   
   $ses_sql = mysqli_query($conn,"select * from parent where Email = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   $z=mysqli_num_rows($ses_sql);
   
   $login_session = $row['Name'];
  
   
  
        $name1=$row["Name"];
		$address1=$row["Address"];
		$image1=$row["ph"];
		$cnum1=$row["Contact Number"];
		$email1=$row["Email"];
		$password1=$row["Password"];
  
   
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
		

if(isset($_REQUEST["submit1"])){
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
	

	    $name= $_REQUEST["username"];
		
		$address= $_REQUEST["address"];
		$cnum= $_REQUEST["Cnum"];
		$email= $_REQUEST["email"];
		$pass= $_REQUEST["password"];
		
		$sql2="UPDATE `parent` SET `Name`='".$name."',`Address`='".$address."',`Contact Number`='".$cnum."',`Email`='".$email."',`Password`='".$pass."' Where 1";
	    
	    $conn->query($sql2);
	    header("location:search.php");
		}

		$conn->close();
		?>
<div class="row"><div class="col-md-8">
  <div class="login-wrap ">
  	
  <div class="login-html">
  <h1>Update the information</h1>
 
  
  
    
    <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Parent</label>
    <div class="login-form">
            <div class="row"><div class="col-md-8">
      <form class="sign-in-htm" action="" method="POST" class="col-md-8">
        <div class="group">
          <label for="user" class="label"> Name </label>
          <input id="username" name="username" type="text" class="input" value="<?php echo $name1 ?>"> <br>
        </div>
        
         <div class="group">
          <label for="pass" class="label">Address</label>
           <input id="address" name="address" type="text" class="input" value="<?php echo $address1 ?>"> <br>
        </div>
         <div class="group">
          <label for="pass" class="label">Contact Number </label>
          <input id="Cnum" name="Cnum" type="text" class="input" value="<?php echo $cnum1?>"> <br>
        </div>
          <div class="group">
          <label for="pass" class="label">Email </label>
           <input id="email" name="email" type="email" class="input" value="<?php echo $email1;?>"> <br>
        </div>
          <div class="group">
          <label for="pass" class="label">Password </label>
           <input id="password" name="password" type="password" class="input" data-type="password" value="<?php echo $password1?>"> <br>
        </div>
        
        
        <div class="group">
          <input type="submit" class="button" value="Update" name="submit1">
        </div>
        
      </form>
      
    </div>
    
  </div>
  </div>
       
</div>
  
</div>
 

</body>
</html>