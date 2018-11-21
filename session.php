<?php
   include('connect.php');
   session_start();
   
   $user_check = $_SESSION['login_user'];
   
   $ses_sql = mysqli_query($mysqli,"SELECT UniqueId from details where UniqueId = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['UniqueId'];
   
   if(!isset($_SESSION['login_user'])){
      header("location:login.php");
   }
?>