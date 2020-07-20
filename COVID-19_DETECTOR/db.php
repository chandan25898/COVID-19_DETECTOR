<?php
session_start();
$db =mysqli_connect("localhost", "root", "", "covid-19_detector")or die("Can't Connect...");
if (isset($_POST['registerbtn'])){
  session_start();
  $username = mysqli_real_escape_string($_POST['username']);
  $useremail = mysqli_real_escape_strings($_POST['useremail']);
  $password = mysqli_real_escape_strings($_POST['password']);
  $confirm_password = mysqli_real_escape_strings($_POST['confirm_password']);
  $usermob = mysqli_real_escape_strings($_POST['usermob']);
  if ($password == $confirm_password){
    $password = md5($password);
    $sql = "INSERT INTO user(username, useremail, usermob, password) VALUES('$username', '$useremail', '$usermob' , '$password')";
    mysqli_query($db,$sql);
    $_SESSION['message'] = "You are now logged in";
    $_SESSION['username'] = $username;
    header("location: index.html");
  }
  else {

    $_SESSION['message'] = "Password not matched";
  }
}
 ?>
