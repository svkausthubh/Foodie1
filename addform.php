<?php
include("config.php");
$ID;
if(isset($_POST['addmen'])){
  $ID = mysqli_real_escape_string($db, $_POST['resid']);
  // $del = mysqli_real_escape_string($db, $_POST['fid']);
  // $q = "DELETE FROM food WHERE fid = '$del'";
  // $run = $db->query($q);

}
if(isset($_POST['add'])){
        $ID = mysqli_real_escape_string($db, $_POST['res_id']);
        $fname= mysqli_real_escape_string($db, $_POST['name']);
        $RES_ID = mysqli_real_escape_string($db, $_POST['res_id']);
        $rating = mysqli_real_escape_string($db, $_POST['rating']);
        $price = mysqli_real_escape_string($db, $_POST['price']);
        // echo $price;
        $query = "INSERT INTO food (fname , rating , RES_ID , price ) VALUES('$fname','$rating','$RES_ID' , '$price')";
        
        mysqli_query($db, $query);
        
        // $_SESSION['success']="Your registered successfully.";
        // header("location: addform.php");
        

        
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
    <title>Foodie | About </title>
    <link rel="stylesheet" href="./bootstraplitera.min.css">
  <link rel="stylesheet" href="./styleadmin.css">
</head>
<body>
        <div class="container">
                <header class="bg-info p-1 text-center"><a href="./adminmenu.php" class="btn btn-default text-white"><h1>Foodie</h1></a></header>
                
                <section class="p-5 text-info shadow">
                <div class="add-form ">
                    <h3 class="m-5"><u>Add Food</u></h3>
                    <form class="p-5" action=""  method = "POST">
                        <div class="form-group row mb-5">
                            <label for="name" class="col-md-2">Name</label>
                            <input type="text" class="form-control col-md-10" name="name" id="" aria-describedby="" placeholder="Enter Food name">
                        </div>
                        <div class="form-group row mt-5 mb-5">
                        <label for="rating" class="col-md-2">Rating</label>
                        <input type="number" class="form-control col-md-10" min="0.0" max="5.0" step="0.1" name="rating" id="" placeholder="Enter Rating"/>
                        </div>
                        <div class="form-group row mb-5">
                            <label for="price" class="col-md-2">Price</label>
                            <input type="number" class="form-control col-md-10" min="0.0" max="1000.0" name="price" id="" aria-describedby="" placeholder="Price">
                        </div>
                        
                       <!--  <div class="form-group row mt-5 mb-5">
                        <label for="price" class="col-md-2">Price</label> -->
                        <input type="hidden" name="res_id" value="<?php echo $ID; ?>" />
                        
                        <input class="btn btn-info col-md-2 mt-5 " type="submit" name="add" value="Add" >
                        </div>
                    </form>
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