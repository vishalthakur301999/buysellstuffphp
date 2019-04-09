<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "ospda_vt";
$con = mysqli_connect($servername,$username,$password) or die("Connection Failed");
mysqli_select_db($con,$db);
$id = $name = $uname = $pass = $email = "";
$name = $_POST['name'];
$uname = $_POST['uname'];
$pass = $_POST['pass'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$query = "Insert into data values('$id','$name','$uname','$pass','$email','$mobile')";
$result = mysqli_query($con,$query);
header('Location:index.html');
?>