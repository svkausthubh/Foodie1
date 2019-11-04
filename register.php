<?php 
	include("config.php");
    session_start();
    // $t = "hello";
    $res;
	if(isset($_POST['submit'])){
        $email = mysqli_real_escape_string($db, $_POST['email']);
        $USER_NAME = mysqli_real_escape_string($db, $_POST['username']);
        $USER_PASSWORD = mysqli_real_escape_string($db, $_POST['password']);
        $query = "INSERT INTO customer (email , USER_NAME , USER_PASSWORD) VALUES('$email','$USER_NAME','$USER_PASSWORD')";
        
        mysqli_query($db, $query);
        
        $_SESSION['lg']="Your registered successfully.";
        // $res="Your registered successfully.";
        header("location: index.php");
        

        
    }
    


?>