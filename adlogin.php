<?php
include("config.php");
session_start();
   if(isset($_POST['login'])){
        $email = mysqli_real_escape_string($db, $_POST['email']);
        
        $USER_PASSWORD = mysqli_real_escape_string($db, $_POST['password']);
        if($email == "sameer@gmail.com"){
          $query = "SELECT * FROM customer WHERE email = '$email' and USER_PASSWORD = '$USER_PASSWORD'";
         
          $result = $db->query($query);
          
          if(mysqli_num_rows($result) == 0){$_SESSION['lgmsg']="password incorrect";
          header("location: adminlogin.php");}
          else{
          
            header("location: adminhp.php");
        
         
        
            // If result matched $myusername and $mypassword, table row must be 1 row
  		
        
          }
        }
        else{
          $_SESSION['lgmsg']="admin dosen't exist";
          header("location: adminlogin.php");
        }

    }


        
        

        
   

?>