<?php
include("config.php");
session_start();
   if(isset($_POST['login'])){
        $email = mysqli_real_escape_string($db, $_POST['email']);
        
        $password = mysqli_real_escape_string($db, $_POST['password']);
        $query = "SELECT * FROM admin WHERE email = '$email'";
        $result = $db->query($query);
        if(mysqli_num_rows($result) != 0){
          $q = "SELECT * FROM admin WHERE email = '$email' and password = '$password'";
         
          $r = $db->query($q);
          
          if(mysqli_num_rows($r) == 0){$_SESSION['admsg']="password incorrect";
          header("location: adminlogin.php");}
          else{
            $_SESSION['adlogin'] = "loggedin";
            header("location: adminhp.php");
        
         
        
            // If result matched $myusername and $mypassword, table row must be 1 row
  		
        
          }
        }
        else{
          $_SESSION['admsg']="admin dosen't exist";
          header("location: adminlogin.php");
        }

    }


        
        

        
   

?>