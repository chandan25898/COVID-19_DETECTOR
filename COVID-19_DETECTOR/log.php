<?php
    $host = "localhost";
    $user = "root";
    $password = '';
    $db_name = "covid-19_detector";

    $con = mysqli_connect($host, $user, $password, $db_name);
    if(mysqli_connect_errno()) {
        die("Failed to connect with MySQL: ". mysqli_connect_error());
    }
?>
<?php
    $username = $_POST['username'];
    $password = $_POST['password'];
        $username = stripcslashes($username);
        $password = stripcslashes($password);
        $username = mysqli_real_escape_string($con, $username);
        $password = mysqli_real_escape_string($con, $password);

        $sql = "select *from user where username = '$username' and password = '$password'";
        $result = mysqli_query($con, $sql);
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $count = mysqli_num_rows($result);
        if ($username==("CHANDAN_KESHRI") & $password==("258982")){
          header ("location:admin.php");
        }
        elseif($count == 1){

            header("location:loginbackground.php");
        }
        else{
            header("location:loginfail.php");
        }
?>
