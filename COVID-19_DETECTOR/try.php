<?php
  $username = $_POST['username'];
  $password = $_POST['password'];
  $useremail = $_POST['useremail'];
  $usermob = $_POST['usermob'];
  $traveled = $_POST['traveled'];
  $cough = $_POST['cough'];

  if (!empty($username) || !empty($password) || !empty($useremail) || !empty($usermob) || !empty($traveled) || !empty($cough)){
    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "covid-19_detector";
    $conn = new mysqli($host, $dbUsername, $dbPassword ,$dbname);
    if (mysqli_connect_error()) {
      die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    }else {
      $SELECT = "SELECT useremail From user Where useremail = ? Limit 1";
      $INSERT = " INSERT Into user (username, password, useremail, usermob, traveled, cough) values(?,?,?,?,?,?)";
      $stmt = $conn->prepare($SELECT);
      $stmt->bind_param("s", $email);
      $stmt->execute();
      $stmt->bind_result($email);
      $rnum = $stmt->num_rows;
      if ($rnum==0) {
        $stmt->close();
        $stmt = $conn->prepare($INSERT);
        $stmt->bind_param("sssiss", $username, $password, $useremail, $usermob, $traveled, $cough);
        $stmt->execute();
        header("location:ragisterbackground.php");
      }else {
        echo "Someone already register using this email";
      }
      $stmt->close();
      $conn->close();
    }
  } else {
    echo "All field are required";
    die();
  }
 ?>
