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
                <header class="bg-info p-1 text-center"><a href="./adminhp.php" class="btn btn-default text-white"><h1>Foodie</h1></a></header>
                
                <section class="p-5 text-info shadow">
                <div class="add-form ">
                    <h3 class="m-5"><u>Add Restaurant</u></h3>
                    <form class="p-5" action="addingres.php"  method = "POST">
                        <div class="form-group row mb-5">
                            <label for="name" class="col-md-2">Name of restaurant</label>
                            <input type="text" class="form-control col-md-10" name="name" id="" aria-describedby="" placeholder="Enter Restaurant name">
                        </div>
                        <div class="form-group row mt-5 mb-5">
                        <label for="location" class="col-md-2">Location</label>
                        <input type="text" class="form-control col-md-10" name="location" id="" placeholder="Enter Location"/>
                        </div>
                        <div class="form-group row mt-5 mb-5">
                        <label for="rating" class="col-md-2">Rating</label>
                        <input type="number" class="form-control col-md-10" min="0.0" max="5.0" step="0.1" name="rating" id="" placeholder="Enter Rating"/>
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