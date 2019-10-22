<?php 
	include("config.php");
    
	if(isset($_POST['submit'])){
        $email = mysqli_real_escape_string($db, $_POST['email']);
        $USER_NAME = mysqli_real_escape_string($db, $_POST['username']);
        $USER_PASSWORD = mysqli_real_escape_string($db, $_POST['password']);
        $query = "INSERT INTO customer (email , USER_NAME , USER_PASSWORD) VALUES('$email','$USER_NAME','$USER_PASSWORD')";
        
        mysqli_query($db, $query);
        
        $_SESSION['success']="Your registered successfully.";
        header("location: index.html");
        

        
    }


?>