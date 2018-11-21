<?php
define('DB_SERVER','localhost');
define('DB_USERNAME','root');
define('DB_PASSWORD','');
define('DB_NAME','login');

$mysqli=mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_NAME);
// echo "hello";
if($mysqli == true){
    // echo "hello";
}


  //  include "connect.php";
  //  session_start();
   
  //  if($_SERVissetER["REQUEST_METHOD"] == "POST")
   if(isset($_POST['submit']))
   {
     $UniqueId= $_POST['UniqueId'];
     $Password = $_POST['Password'];
      // username and password sent from form 
      // $add ="INSERT INTO `details`(`UniqueId`,`Password`) VALUES('$UniqueId','$Password`)";
      
      echo "hi";
      // $UniqueId = mysqli_real_escape_string($mysqli,$_POST['UniqueId']);
      // $Password = mysqli_real_escape_string($mysqli,$_POST['Password']); 
      // $val = mysqli_query($mysqli, $add);
      $sql = "SELECT * FROM details WHERE UniqueId = '$UniqueId' and Password = '$Password' limit 1";

      $result = mysqli_query($mysqli,$sql);
      // $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      // $active = $row['UniqueId'];
      // echo "ko";
      $count = mysqli_num_rows($result);
      // echo "kkkkkkkiiiiiiiiiiiiiiiiiiii";
      // // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
      //   // echo " am back!!!!!!!!!!!!!!!!!!";///
      //    session_register("UniqueId");
         echo "ji";
         exit();
      //    $_SESSION['login_user'] = $UniqueId;
      //    echo "ki";
      //    header("location: welcome.php");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }
?>