<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$db = "ospda_vt";
$con = mysqli_connect($servername,$username,$password) or die("Connection Failed");
mysqli_select_db($con,$db);
$uname = $_SESSION['uname'];
$pass = $_SESSION['pass'];
$query = "Select * from data where uname='$uname' and pass= '$pass'";
$result = mysqli_query($con,$query);
$row = mysqli_fetch_assoc($result);
$mobile = $row['mobile'];
$type = $_POST['type'];
$iname = $_POST['iname'];
$brand = $_POST['ibrand'];
$dop = $_POST['idop'];
$cond = $_POST['condition'];
$price = $_POST['price'];
$neg = $_POST['negotiable'];
$negotiable;
if(strcmp($neg,"Yes")==0){$negotiable=TRUE;}
else{$negotiable=FALSE;}
$query = "Insert into selling(uname, umobile, iname, itype, ibrand, idop,icond,price,negotiable)  values('$uname','$mobile','$iname','$type','$brand','$dop','$cond','$price','$negotiable')";
$result = mysqli_query($con,$query);
if (!$result) {
    die('Invalid query: ' . mysqli_error($con));
}
header('Location:ui.php');
?>