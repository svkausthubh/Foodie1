<?php
include("config.php");
$query = "SELECT * FROM restaurant";
$result = $db->query($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Foodie | Home</title>
    <link rel="stylesheet" href="./bootstraplitera.min.css">
  <link rel="stylesheet" href="./style1.css">
</head>
<body>
        <div class="container">
        <header class="bg-success  p-3">
            <div class="row ">
              <div class="col-md-6 text-left "><a href="./homepage.php" class="btn btn-default text-white"><h3><i>Foodie</i></h3></a></div>
              <div class="col-md-6 text-right"> <a class="btn btn-warning " href="index.html">Logout</a></div>
            </div>
      </header>
                
                <section class="hotel-list">
                    <table class="table shadow table-hover">
                      <tbody>
                        <?php
                        while ($row = $result->fetch_assoc()) {?>
                          <tr>
                          <a href="./menu.php">
                            <td>
                              <div>
                                <p class="lead"><?php echo $row["NAME"]; ?></p><p>Location : <?php echo $row["location"]; ?></p>
                              </div>
                            </td>
                            <td><?php echo $row["RATING"]; ?> / 5</td>
                          </a>
                          </tr>

                        <?php } ?>
                        
                          
                      </tbody>
                    </table>
                </section>
            
                <footer class="bg-dark text-white p-3">
                    <div class="row">
                      <div class="col-md-6 text-left"><a href="./aboutpage.html" class="btn btn-success">About Us</a></div>
                      <div class="col-md-6 text-right"> &copy; Copyright , 2019.</div>
                    </div>
                  </footer>
              </div>
</body>
</html>