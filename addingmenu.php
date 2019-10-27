<?php 
  include("config.php");
    
  if(isset($_POST['add'])){
        $fname= mysqli_real_escape_string($db, $_POST['name']);
        $RES_ID = mysqli_real_escape_string($db, $_POST['resid']);
        $rating = mysqli_real_escape_string($db, $_POST['rating']);
        $query = "INSERT INTO food (fname , rating , RES_ID ) VALUES('$fname','$rating','$RES_ID')";
        
        mysqli_query($db, $query);
        
        // $_SESSION['success']="Your registered successfully.";
        header("location: addform.php");
        

        
    }


?>