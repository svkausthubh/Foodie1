<?php
include("config.php");
session_start();
$ID;

if(isset($_POST['rem'])){
  $ID = mysqli_real_escape_string($db, $_POST['resid']);
  $del = mysqli_real_escape_string($db, $_POST['fid']);
  $q = "DELETE FROM food WHERE fid = '$del'";
  $run = $db->query($q);

}
if(isset($_SESSION['admenu'])){

  $ID = $_SESSION['admenu'];
  // echo $ID;
  $query = "SELECT * FROM food WHERE RES_ID = '$ID'";
  // $reso = $db->query($query);
  $result = $db->query($query);
  
}
// if(isset($_POST['menu'])){
//   $ID = mysqli_real_escape_string($db, $_POST['id']);
  
  
// }
// $query = "SELECT * FROM food WHERE RES_ID = '$ID'";
//   $result = $db->query($query);
  // $a = $result->fetch_assoc();
// $query = "SELECT * FROM food WHERE RES_ID = ";
// $result = $db->query($query);
// $c=1;
$t;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Foodie | Admin-Menu</title>
    <link rel="stylesheet" href="./bootstraplitera.min.css">
  <link rel="stylesheet" href="./styleadmin.css">
</head>
<body>
      <div class="container">
        <header class="bg-info  p-3">
                  <div class="row ">
                    <div class="col-md-8 text-left "><a href="./adminhp.php" class="btn btn-default text-white"><h3><i>Foodie</i></h3></a></div>
                    <form action="addform.php" method="POST">
                      <input type="hidden" name="resid" value="<?php echo $ID; ?>" />
                    <div class="col-md-2 text-right"><input type="submit" name="addmen" class="btn btn-dark" value="ADD"></div>
                    </form>
                <div class="col-md-2 text-right"> <a class="btn btn-warning " href="./adminlogin.php">Logout</a></div>
                  </div>
        </header>
                  
        <section class="menu-list">
            <div class="row">
                <div class="col-sm-12">
                <div class="card">
                  <?php
                      while ($row = $result->fetch_assoc()) {?>
                      <div class="card-body border-success shadow m-2 row">
                        <div class="col-md-8">
                            <h5 class="card-title"><?php echo $row["fname"]; ?></h5>
                            <p class="card-text lead">Rating : <span class="lead" id="rate"><?php echo $row["rating"]." (".$row["nrated"]." Ratings)"; ?></span></p>
                        </div>
                        <div class="col-md-2">Rs.<?php echo $row["price"]; ?></div>
                        <!--  <td class="text-right"><button class="btn btn-danger">Remove</button></td> -->
                                <form action="" method="POST">
                              <?php 
                                $t = $row["fid"];
                                $r = $row["RES_ID"];
                                // echo $t; 
                                // $c = $c+1; ?>
                                <input type="hidden" name="resid" value="<?php echo $r; ?>" >
                                <input type="hidden" name="fid" value="<?php echo $t; ?>" >
                                <td class="text-right col-md-2"><input type="submit" name="rem" value="REMOVE" class="btn btn-danger"></td>
                                </form>
                                
                      </div>
                  <?php  } ?> 
                </div>
                </div>
            </div>
        </section>
              
        <footer class="bg-dark text-white p-3">
                      <div class="row">
                        <div class="col-md-6 text-left"><a href="./aboutpage.html" class="btn btn-info">About Us</a></div>
                        <div class="col-md-6 text-right"> &copy;Copyright , 2019.</div>
                      </div>
        </footer>
      </div>
</body>
</html>