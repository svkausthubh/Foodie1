<?php
 session_start();
 error_reporting(0);
 unset($_SESSION['admsg']);
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Foodie | Login</title>
  <link rel="stylesheet" href="./bootstraplitera.min.css">
  <link rel="stylesheet" href="./style.css">
</head>
<body>


  <div class="container shadow">
    <header class="bg-success p-1 text-center"><a href="./index.php" class="btn btn-default text-white"><h1>Foodie</h1></a></header>
    
    <section class="login text-white p-5">
        <div class="login-form ">
          <h3 class="text-warning m-5"><u>Login</u></h3>
          <form class="p-5" action="login.php"  method = "POST">
            <p class="lead text-center text-warning"><?php echo $_SESSION['lg']; ?></p>
            <div class="form-group row mb-5">
              <label for="exampleInputEmail1" class="col-md-2">Email address</label>
                <input type="email" class="form-control col-md-10" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                <small id="emailHelp" class="form-text text-muted col-md-10 ">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group row mt-5 mb-5">
              <label for="exampleInputPassword1" class="col-md-2">Password</label>
              <input type="password" class="form-control col-md-10" name="password" id="exampleInputPassword1" placeholder="Password">
              <input class="btn btn-success col-md-2 mt-5 " type="submit" name="login" value="Login" >
            </div>
            <small id="emailHelp" class="form-text text-muted ">DON'T HAVE AN ACCOUNT? <a href="./signuppage.html" class="lead text-warning">SIGN UP</a></small>
          </form>
        </div>
    </section>

    <footer class="bg-dark text-white p-3">
      <div class="row">
        <div class="col-md-6 text-left"><a href="./aboutpage.html" class="btn btn-success">About Us</a></div>
        <div class="col-md-6 text-right"><a href="./adminlogin.php" class="btn btn-link btn-info text-white">ADMIN</a></div>
      </div>
    </footer>
  </div>
</body>
</html>