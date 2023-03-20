<?php
  session_start();

  include_once('config.php');

  $email = $_POST['email'];
  $password = md5($_POST['password']);

  $query = "SELECT*FROM user WHERE user_email='$email' and user-password='$password'";
  $result = mysqli_query($conn, $query);

  while($row = mysqli_fetch_assoc($result)){
    $name = $row['user_name'];
  }
  if(mysqli_num_rows($result)>0){
    echo "sucess";
    $SESSION['email'] = $email;
    $SESSION['password'] = $password;
    $SESSION['name'] = $name;

//   if user is online then user status is one

$query = "UPDATE user SET user_status ='1' WHERE user_email = '$email'";
$result = mysqli_query($conn, $query);
header('location:config.php');

  }else{
    echo "failed to login";
    header('location:index.php?login_error=<span style = "color:red">username or password incorrect</span>');
  }
?>
