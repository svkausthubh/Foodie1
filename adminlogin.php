<?php
 session_start();
 error_reporting(0);
 
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Foodie | Admin-Login</title>
  <link rel="stylesheet" href="./bootstraplitera.min.css">
  <link rel="stylesheet" href="./styleadmin.css">
</head>
<body>


  <div class="container">
    <header class="bg-info p-1 text-center"><a href="./index.php" class="btn btn-default text-white"><h1>Foodie</h1></a></header>
    
    <section class="login p-5 border shadow">
        <div class="login-form ">
          <h3 class="m-5"><u>Admin</u></h3>
          <form class="p-5" action="adlogin.php"  method = "POST">
            <h3 class="lead text-center"><?php echo $_SESSION['admsg']; ?></h3>
            <div class="form-group row mb-5">
              <label for="exampleInputEmail1" class="col-md-2">Email address</label>
                <input type="email" class="form-control col-md-10" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
            </div>
            <div class="form-group row mt-5 mb-5">
              <label for="exampleInputPassword1" class="col-md-2">Password</label>
              <input type="password" class="form-control col-md-10" name="password" id="exampleInputPassword1" placeholder="Password">
              <input class="btn btn-info col-md-2 mt-5 " type="submit" name="login" value="Login" >
            </div>
          </form>
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