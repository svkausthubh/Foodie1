<?php 
  include("config.php");
    
  if(isset($_POST['add'])){
        $NAME = mysqli_real_escape_string($db, $_POST['name']);
        $location = mysqli_real_escape_string($db, $_POST['location']);
        $RATING = mysqli_real_escape_string($db, $_POST['rating']);
        $query = "INSERT INTO restaurant (NAME , location , RATING) VALUES('$NAME','$location','$RATING')";
        
        mysqli_query($db, $query);
        
        // $_SESSION['success']="Your registered successfully.";
        header("location: addresform.php");
        

        
    }


?>