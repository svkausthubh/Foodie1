<?php
include("config.php");
$query = "SELECT * FROM restaurant";
$result = $db->query($query);
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
            <table class="table shadow table-hover">
              <tbody >
                  <?php
                    while ($row = $result->fetch_assoc()) {?>
                      <tr class="bg-white row m-1">
                        <td class="col-md-8">
                          
                            <div>
                              <p class="lead"><?php echo $row["NAME"]; ?></p><p>Location : <?php echo $row["location"]; ?></p>
                            </div>
                          
                        </td>
                        
                        <form action="" method="POST">
                          <?php 
                            $t = $row["RES_ID"];
                           // echo $t; 
                           // $c = $c+1; ?>
                          <td class="text-right col-md-2"><input type="submit" name="<?php echo $t; ?>" value="REMOVE" class="btn btn-danger"></td>
                        </form>
                        <?php if (isset($_POST[$t])) {
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
                          header("location: adminhp.php");
                        } ?>
                        <form action="adminmenu.php" method="POST">
                          <!-- <?php 
                            // $t = $row["RES_ID"];
                           // echo $t; 
                           // $c = $c+1; ?> -->
                           <input type="hidden" name="id" value="<?php echo $t; ?>" >
                          <td class="text-right col-md-2"><input type="submit" name="menu" value="VIEW" class="btn btn-success text-left "></td>
                        </form>
                        
                      </tr>
                  <?php  } ?>
              </tbody>
            </table>
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