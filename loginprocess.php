<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$db = "ospda_vt";
$con = mysqli_connect($servername,$username,$password) or die("Connection Failed");
mysqli_select_db($con,$db);
$uname = $_POST['uname'];
$pass = $_POST['password'];
$query = "Select * from data where uname='$uname' and pass= '$pass'";
$result = mysqli_query($con,$query);
if(mysqli_num_rows($result)==1)
    {
    $_SESSION["uname"] = $uname;
    $_SESSION["pass"] = $pass;
    header('Location:ui.php');
    }
else{
    echo "Invalid Credentials <A href='login.html'>Click Here to Go Back</A>";
}
?>