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
                <header class="bg-success p-1 text-center"><h1 class="text-white">Foodie</h1></header>
                
                <section class="hotel-list">
                    <table class="table shadow table-hover table-bordered">
                      <tbody>
                        <?php
                        while ($row = $result->fetch_assoc()) {?>
                          <tr>
                            <td class="thimg"></td>
                            <td><div><p class="lead"><?php echo $row["NAME"]; ?></p><p><?php echo $row["location"]; ?></p></div></td>
                            <td><?php echo $row["RATING"]; ?></td>
                          </tr>

                        <?php } ?>
                        
                          
                      </tbody>
                    </table>
                </section>
            
                <footer class="bg-dark text-white p-3">
                    <div class="row">
                      <div class="col-md-6 text-left"><a href="./aboutpage.html" class="btn btn-success">About Us</a></div>
                      <div class="col-md-6 text-right"> &#9400 Copyright , 2019.</div>
                    </div>
                  </footer>
              </div>
</body>
</html>