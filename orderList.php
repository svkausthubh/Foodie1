<?php
  include("config.php");
  session_start();
  $email = $_SESSION['email'];
  $q = "SELECT * FROM ordering WHERE email = '$email'";
  $r = $db->query($q);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Foodie | Order-List</title>
    <link rel="stylesheet" href="./bootstraplitera.min.css">
  <link rel="stylesheet" href="./style1.css">
</head>
<body>
        <div class="container">
            <header class="bg-success  p-3">
                <div class="row ">
                  <div class="col-md-4 text-left "><a href="./homepage.php" class="btn btn-default text-white"><h3><i>Foodie</i></h3></a></div>
                  <div class="col-md-4 text-center text-white border pt-3"><h5>Your Orders</h5></div>
                  <div class="col-md-4 text-right"> <a class="btn btn-warning " href="index.php">Logout</a></div>
                </div>
          </header>
          <?php   while ($row = $r->fetch_assoc()) {?>    
          <section class="hotel-list">
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="card ">
                        <div class="card-body border-success shadow m-2 row">
                          <div class="col-md-4">
                            <h3 class="card-title"><?php echo $row["orderid"]; ?></h3>
                          </div>
                          <div class="col-md-4">
                            <?php 
                              $oiditem = $row["orderid"];  
                              $qresitem = "SELECT * FROM orderitems WHERE orderid = '$oiditem'";
                              $resitem = $db->query($qresitem);
                              $rowresitem = $resitem->fetch_assoc();
                              $RES_ID = $rowresitem["Resid"];
                              $qres = "SELECT * FROM restaurant WHERE RES_ID = '$RES_ID'";
                              $res = $db->query($qres);
                              $rowres = $res->fetch_assoc();
                            ?>
                          <h5><?php echo $rowres["NAME"]; ?></h5>
                          </div>
                          <div class="col-md-4 text-right ">
                            <?php 
                             $oid = $row["orderid"];  
                             // echo $oid;
                             $qitem = "SELECT * FROM orderitems WHERE orderid = '$oid'";
                             $ritem = $db->query($qitem);
                             
                             // $rem = $ritem->fetch_assoc();
                             // if($rem["items"]){
                             //  echo "string1323";
                             // }
                             // echo $rem["items"];
                             while ($rem = $ritem->fetch_assoc()) {?>  
                               <p class=" text-center lead"><?php echo $rem["items"]; ?></p>
                            <?php }?>

                            <hr>
                            <p class="card-text lead text-center">Rs.<?php echo $row["bill"]; ?>/-</p>
                            <hr>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </section>
              <?php }?>
              
                <footer class="bg-dark text-white p-3">
                    <div class="row">
                      <div class="col-md-6 text-left"><a href="./aboutpage.html" class="btn btn-success">About Us</a></div>
                      <div class="col-md-6 text-right"> &#9400 Copyright , 2019.</div>
                    </div>
                  </footer>
              </div>
</body>
</html>