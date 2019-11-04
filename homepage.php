<?php
include("config.php");
include("rating.php");
session_start();
if(isset($_POST['menu'])){
  $_SESSION['menu'] = mysqli_real_escape_string($db, $_POST['id']);
  header("location: menu.php");
  
}
error_reporting(0);
if (!isset($_SESSION['login'])) {
  header("location: index.php");
}
$query = "SELECT * FROM restaurant";
$result = $db->query($query);
$t;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Foodie | Home</title>
    <link rel="stylesheet" href="./bootstraplitera.min.css">
    <link rel="stylesheet" href="./stylehp.css">
</head>
<body>
      <div class="container">
        <header class="bg-success  p-3">
                  <div class="row ">
                    <div class="col-md-8 text-left "><a href="./homepage.php" class="btn btn-default text-white"><h3><i>Foodie</i></h3></a></div>
                    <div class="col-md-2 text-center"><h3 class="lead text-light pt-3"><?php echo"Hi ".$_SESSION['user'];?></h3></div>
                    <div class="col-md-2 text-right pt-3"> <a class="btn btn-warning " href="logout.php">Logout</a></div>
                  </div>
        </header>       
                  

        <section class="hotel-list">
                    <div class="row">
                      <div class="col-sm-12">
                        <div class="card ">
                        <?php
                        while ($row = $result->fetch_assoc()) {?>
                          <div class="card-body border-success shadow m-2 row">
                            <div class="col-md-8">
                              <h3 class="card-title"><?php echo $row["NAME"]; ?></h3>
                              <div><p class="card-text lead">Location : <?php echo $row["location"]; ?></p>
                              <p class="card-text lead">Rating : <?php echo $row["RATING"]; ?></p></div>
                            </div>
                            <div class="col-md-4 text-right ">
                              <form action="" method="POST">
                                  <?php 
                                  $t = $row["RES_ID"];
                                  ?> 
                                  <input type="hidden" name="id" value="<?php echo $t; ?>" >
                                  <input type="submit" name="menu" value="VIEW" class="btn btn-success ">
                                </form>
                              
                            </div>
                          </div>
                          <?php } ?>
                        </div>
                      </div>
                    </div>
        </section>

        <footer class="bg-dark text-white p-3">
                      <div class="row">
                        <div class="col-md-8 text-left"><a href="./aboutpage.html" class="btn btn-success">About Us</a></div>
                        <div class="col-md-2 text-right"> <a class="btn btn-success" href="orderList.php">My Orders</a></div>
                        <div class="col-md-2 text-right pt-3"> &copy; Copyright , 2019.</div>
                      </div>
        </footer>
      </div>
</body>
</html>