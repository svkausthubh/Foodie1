<?php
include("config.php");
session_start();
error_reporting(0);
if (!isset($_SESSION['adlogin'])) {
  header("location: adminlogin.php");
}

 if (isset($_POST['rem'])) {
  $del = mysqli_real_escape_string($db, $_POST['resid']);;
  // echo $del;
  $query = "DELETE FROM food WHERE RES_ID = '$del'";
   // // echo "s";
  $run = $db->query($query);
  $query = "DELETE FROM restaurant WHERE RES_ID = '$del'";
   // echo "s";
  $run = $db->query($query);

  }
                          

if(isset($_POST['menu'])){
  $_SESSION['admenu'] = mysqli_real_escape_string($db, $_POST['id']);
  // echo $_SESSION['admenu'];
  header("location: adminmenu.php");
  
}
if (isset($_SESSION['adlogin'])) {
  $query = "SELECT * FROM restaurant";
  $result = $db->query($query);
  // header("location: adminlogin.php");
}

// $c=1;
$t;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Foodie | Admin-Home</title>
    <link rel="stylesheet" href="./bootstraplitera.min.css">
  <link rel="stylesheet" href="./styleadmin.css">
</head>
<body>
    <div class="container">
        <header class="bg-info  p-3">
            <div class="row ">
              <div class="col-md-8 text-left "><a href="./adminhp.php" class="btn btn-default text-white"><h3><i>Foodie</i></h3></a></div>
              <div class="col-md-2 text-right"><a href="./addresform.php" class="btn btn-dark">Add</a></div>
              <div class="col-md-2 text-right"> <a class="btn btn-warning " href="./logout.php">Logout</a></div>
            </div>
        </header>
                
        <section class="hotel-list">
            <div class="row">
              <div class="col-sm-12" >
              <div class="card">
                  <?php
                    while ($row = $result->fetch_assoc()) {?>
                    <div class="card-body border-success shadow m-2 row">
                        <div class="col-sm-8">
                          
                        <h3 class="card-title"><?php echo $row["NAME"]; ?></h3>
                              <div><p class="card-text lead">Location : <?php echo $row["location"]; ?></p>
                              <p class="card-text lead">Rating : <?php echo $row["RATING"]; ?></p></div>
                        </div>
                        <div class="col-sm-2">
                        <form action="" method="POST">
                          <?php 
                            $t = $row["RES_ID"];
                           // echo $t; 
                           // $c = $c+1; ?>
                           <input type="hidden" name="resid" value="<?php echo $t; ?>" >
                              
                          <td class="text-right col-md-2"><input type="submit" name="rem" value="REMOVE" class="btn btn-danger"></td>
                        </form>
                        </div>
                        <!-- <?php if (isset($_POST[$t])) {
                          $del = $t;
                          // echo $del;
                          $query = "DELETE FROM food WHERE RES_ID = '$del'";
                          // // echo "s";
                          $run = $db->query($query);
                          $query = "DELETE FROM restaurant WHERE RES_ID = '$del'";
                          // // echo "s";
                          $run = $db->query($query);

                          // echo "string";
                          // $c = 0;
                          if($run){header("location: adminhp.php");}
                          
                        } ?> -->
                        <div class="col-sm-2">
                        <form action="" method="POST">
                          <!-- <?php 
                            // $t = $row["RES_ID"];
                           // echo $t; 
                           // $c = $c+1; ?> -->
                           <input type="hidden" name="id" value="<?php echo $t; ?>" >
                          <td class="text-right col-md-2"><input type="submit" name="menu" value="VIEW" class="btn btn-success text-left "></td>
                        </form>
                        </div>
                    </div>
                  <?php  } ?>
              </div>
              </div>
            </div>
        </section>
            
        <footer class="bg-dark text-white p-3">
                    <div class="row">
                      <div class="col-md-6 text-left"><a href="./aboutpage.html" class="btn btn-info">About Us</a></div>
                      <div class="col-md-6 text-right"> &copy; Copyright , 2019.</div>
                    </div>
                  </footer>
      </div>
</body>
</html>