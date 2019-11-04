<?php 
  include("config.php");
  session_start();
$ID = $_SESSION['ID'];
  echo $ID;  
  if(isset($_POST['add'])){
    echo "string";
        $fname= mysqli_real_escape_string($db, $_POST['name']);
        $RES_ID = $ID;
        $rating = mysqli_real_escape_string($db, $_POST['rating']);
        $price = mysqli_real_escape_string($db, $_POST['price']);
        $query = "INSERT INTO food (fname , rating , RES_ID , price ) VALUES('$fname','$rating','$RES_ID' , '$price')";
        
        mysqli_query($db, $query);
        
        // $_SESSION['success']="Your registered successfully.";
        // header("location: addform.php");
        

        
    }


?>