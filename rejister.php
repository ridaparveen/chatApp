<?php


include_once('config.php');
$name = $_POST['name'];
$email = $_POST['email'];
$password = md5($_POST['pass1']);

$query = "INSERT INTO user(user_id, user_name, user_email, user_password, user_status)";
$query .= "VALUES(NULL,'$name','$email','$password','0')";

$result = mysqli_query($conn, $query);

if($result){
    header('location:index.php?rejistration-succesful=<span style = "color:green">you have sucesfully rejistred</span>');

}else{
    echo "failed to rejisterd";
}


?>
