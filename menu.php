<?php
include("config.php");
$ID;
// if(isset($_POST['rem'])){
//   $ID = mysqli_real_escape_string($db, $_POST['resid']);
//   $del = mysqli_real_escape_string($db, $_POST['fid']);
//   $q = "DELETE FROM food WHERE fid = '$del'";
//   $run = $db->query($q);

// }
if(isset($_POST['menu'])){
  $ID = mysqli_real_escape_string($db, $_POST['id']);
  
  
}
$query = "SELECT * FROM food WHERE RES_ID = '$ID'";
  $result = $db->query($query);
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
    <title>Foodie | Home</title>
    <link rel="stylesheet" href="./bootstraplitera.min.css">
    <link rel="stylesheet" href="./stylehp.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
        <div class="container">
        <header class="bg-success  p-3">
                <div class="row ">
                  <div class="col-md-8 text-left "><a href="./homepage.php" class="btn btn-default text-white"><h3><i>Foodie</i></h3></a></div>
                  <div class="col-md-2 text-right">
                  <button type="button" class="btn btn-light text-success" data-toggle="modal" data-target="#order-modal">
                                Order 
                              </button>
                              <div class="modal" id="order-modal">
                                <div class="modal-dialog">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h4 class="modal-title">Order</h4>
                                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    <div class="modal-body">
                                      <div class="container-fluid row">
                                      <div class="col-md-2"><input type="checkbox"></div>
                                      <div class="col-md-8 text-left strong">foodname</div> 
                                      <div class="col-md-2">Price</div>
                                      </div>
                                      <br><input type="submit" value="Order" class="btn btn-success">
                                      </div>
                                  </div>
                                </div>
                              </div>
                    </div>
                  <div class="col-md-2 text-right"> <a class="btn btn-warning " href="logout.php">Logout</a></div>
                </div>
          </header>
                
                
            
                <section class="menu-list">
                <div class="row">
                    <div class="col-sm-12">
                      <div class="card ">
                      <?php
                      while ($row = $result->fetch_assoc()) {?>
                        <div class="card-body border-success shadow m-2 row">
                          <div class="col-md-8">
                            <h5 class="card-title"><?php echo $row["fname"]; ?></h5>
                            <p class="card-text lead">Rating : <span class="lead" id="rate"><?php echo $row["rating"]; ?></span></p>
                          </div>
                          <div class="col-md-2">
                            <p class="card-text lead">Price : XXX</p>
                          </div>
                          
                          <div class="col-md-2">
                              <button type="button" class="btn btn-success" data-toggle="modal" data-target="#rate-modal">
                                Rate 
                              </button>
                              <div class="modal" id="rate-modal">
                                <div class="modal-dialog">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h4 class="modal-title">Rate <?php echo $row["fname"]; ?></h4>
                                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    <div class="modal-body">
                                      <input type="number" min=1 max=5 step=0.1 placeholder="Enter Rating" class="form-control">
                                      <br><input type="submit" value="Submit" class="btn btn-success">
                                    </div>
                                  </div>
                                </div>
                              </div>
                          </div>
                        </div>
                        <?php } ?>
                      </div>
                    </div>
                  </div>
                </section>

                <footer class="bg-dark text-white p-3">
                    <div class="row">
                      <div class="col-md-6 text-left"><a href="./aboutpage.html" class="btn btn-success">About Us</a></div>
                      <div class="col-md-6 text-right"> &copy;Copyright , 2019.</div>
                    </div>
                  </footer>
              </div>
              
</body>
</html>