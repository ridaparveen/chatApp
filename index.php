
<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  </head>
  <body>

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="#">Features</a>

    </div>
  </div>
</nav>
<form action="rejister.php"class="container" method="post" id = "rejistration-form" >
  <h1>Rejistration</h1>

  <?php
  if(isset($_GET['rejistration-succesful'])){
    echo $_GET['rejistration-succesful'];
  }

  ?>
  <div class="ab-3">
    <label class="form-label">Name</label>
    <input type="text" name = "name" class="form-control" placeholder = "Name" required>
  </div>
  <div class="ab-3">
    <label class="form-label">Email</label>
    <input type="email" name = "email" class="form-control" placeholder = "Email" required>
  </div>
  <div class="ab-3">
    <label class="form-label">create password</label>
    <input type="password" name = "pass1" class="form-control" id ="pass1" placeholder = "create password" required>
  </div>
  <div class="ab-3">
    <label class="form-label">Confirm password</label>
    <input type="password" name = "pass2" class="form-control"  id ="pass2" placeholder = "Confirm password" required>
  </div>

  <div class="ab-3">
    <button type="submit" btn ="sbt" class="btn btn-primary ab-3">submit</button>
    <button onclick="document.getElementById('rejistration-form').style.display='none'; document.getElementById('Login-form').style.display='';" btn ="sbt" class="btn btn-primary ab-3">Login</button>
  </div>
</form>

<form action="login.php"class="container" method="post" id = "Login-form" style = "display : none;" >
  <h1>Login</h1>
  <?php
  if(isset($_GET['login_error'])){
    echo $_GET['login_error'];
  }

  ?>
  <div class="ab-3">
    <label class="form-label">Email</label>
    <input type="email" name = "email" class="form-control" placeholder = "email" required>
  </div>
  <div class="ab-3">
    <label class="form-label">password</label>
    <input type="password" name = "password" class="form-control" placeholder = "password" required>
  </div>

  <div class="ab-3">
    <button class="btn btn-primary ab-3">login</button>
    <button onclick="document.getElementById('Login-form').style.display='none'; document.getElementById('rejistration-form').style.display='';" btn ="sbt" class="btn btn-primary ab-3">rejister</button>
  </div>
</form>
<link rel = "stylesheet" type="text/css" href="js/bootstrap.min.js">
<!-- <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script> -->
  </body>
</html>
