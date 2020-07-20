<!DOCTYPE html>
<html>
<head>
<title>Admin Panel</title>
<style>
table {
border-collapse: collapse;
width: 100%;
color: red;
font-family: monospace;
font-size: 25px;
text-align: left;
}
th {
background-color: black;
color: white;
}
input[value="Logout"]{
  border: none;
  outline: none;
  height: 40px;
	width: 300px;
	margin-left: 80%;
  background: Red;
  color: white;
  font-size: 20px;
  border-radius: 20px;
  font-weight: bold;
}
input[type="submit"]:hover{
  cursor: pointer;
  background: aqua;
  color: black;
}
tr:nth-child(even) {background-color: #f2f2f2}

</style>
</head>
<h1><center>Welcome Admin</center></h1>
<form  action="login.php" method="post">
  <input type="submit" name="loginbtn" id = "btn" value = "Logout" />
</form>

<body>
<table>
<tr>
<th>User Name</th>
<th>Password</th>
<th>Email</th>
<th>Mobile</th>
<th>Traveled</th>
<th>Cough</th>
<th>Time</th>
</tr>
<?php
$conn = mysqli_connect("localhost", "root", "", "covid-19_detector");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT username, password, useremail, usermob, traveled, cough, d_time FROM user";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["username"] . "</td><td>". $row["password"]. "</td><td>" . $row["useremail"] . "</td><td>" . $row["usermob"] . "</td><td>" . $row["traveled"] . "</td><td>" . $row["cough"] . "</td><td>" . $row["d_time"] . "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>
</body>
</html>
