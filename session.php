
<?php
   include('db.php');
   session_start();
   
   $user_check = $_SESSION['login_user'];
   
   $ses_sql = mysqli_query($conn,"select FullName from teacher where Email = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['FullName'];
  
   if(!isset($_SESSION['login_user'])){
      header("location:login.php");
      die();
   }
?>
