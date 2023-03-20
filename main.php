
<?php

session_start();


?>
<?php
if(!isset($_SESSION['email']) && !isset($_SESSION['password']) && empty($_SESSION['email']) && empty($_SESSION['password'])){
    header('location:index.php');

};
?>

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
<div class="ab-3">
    <label class="form-label">Email</label>
    <input type="email" name = "email" class="form-control" placeholder = "email" required>
  </div>
  <div class="ab-3">
    <label class="form-label">password</label>
    <input type="password" name = "password" class="form-control" placeholder = "password" required>
  </div>

  <div id ="chatbox" class="container">
    <h2 class="text-centre">chatApp</h2>
    <div class="media" style="background-color:whitesmoke">
<img class="rounded-circle" src ="" alt="" style="float:left;">
<div class="media-body">
    <h5 style ="margin:10px">chat</h5>
    <form action ="" class="mt-2,mr-2">
    <input type="submit"  class="btn-btn-danger-2" name = "logout" value="logout">  
</form> 
</div>
</div>
 
?>

<link rel = "stylesheet" type="text/css" href="js/bootstrap.min.js">
</body>
</html>
