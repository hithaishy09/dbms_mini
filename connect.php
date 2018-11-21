<?php
// define('DB_SERVER','localhost');
// define('DB_USERNAME','root');
// define('DB_PASSWORD','');
// define('DB_NAME','login');

// $mysqli=mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_NAME);
// echo "hello";
// if($mysqli == true){
//     echo "hello";
// }
$UniqueId = filter_input(INPUT_POST, 'UniqueId');
$Password = filter_input(INPUT_POST, 'Password');
if (!empty($UniqueId)){
    if (!empty($Password)){
    $host = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "login";

    // Create connection
    $conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

        if (mysqli_connect_error()){
        die('Connect Error ('. mysqli_connect_errno() .') ' . mysqli_connect_error());
        }
        else{
        $sql = "INSERT INTO details (UniqueId, Password) values ('$UniqueId','$Password')";
            if ($conn->query($sql)){
                if($UniqueId='owner_id' && $Password='password')
                {
                    session_start();
                    $_SESSION['sess_user']=$user;
                    header("location: home.html");
                }
              
            }
            else{
              echo "Error: ". $sql ." ". $conn->error;
            }
        $conn->close();
        }
    }
    else{
    echo "Password should not be empty";
    die();
    }
}
else{
 echo "Username should not be empty";
 die();
}
?> 
