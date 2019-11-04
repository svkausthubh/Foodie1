<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Foodie | SignUp</title>
    <link rel="stylesheet" href="./bootstraplitera.min.css">
  <link rel="stylesheet" href="./style.css">
</head>
<body>
        <div class="container">
        <header class="bg-success p-1 text-center"><a href="./index.php" class="btn btn-default text-white"><h1>Foodie</h1></a></header>
                
                <section class="text-white p-5">
                    <div class="signup-form ">
                        <h3 class="text-warning m-5"><u>Sign Up</u></h3>
                        <form class="p-5" action="register.php" method = "POST">
                            <div class="form-group row mb-5">
                            <label for="exampleInputEmail1" class="col-md-2">Email address</label>
                              <input type="email"  class="form-control col-md-10" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" placeholder="Enter email">
                              <small id="emailHelp" class="form-text text-muted col-md-10 ">We'll never share your email with anyone else.</small>
                          </div>
                          <div class="form-group row mb-5">
                            <label for="exampleInputEmail1" class="col-md-2">Username</label>
                              <input type="text" class="form-control col-md-10" id="exampleInputusername1" name="username" aria-describedby="emailHelp" placeholder="Enter username">
                          </div>
                          <div class="form-group row mt-5 mb-5">
                            <label for="exampleInputPassword1" class="col-md-2">Password</label>
                            <input type="password" class="form-control col-md-10" id="exampleInputPassword1" name="password" placeholder="Password">
                            <input type="submit" class="btn btn-success col-md-2 mt-5 " name="submit" value="SIGNUP">
                          </div>
                        </form>
                      </div>
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