<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$db = "ospda_vt";
$con = mysqli_connect($servername,$username,$password) or die("Connection Failed");
mysqli_select_db($con,$db);
$id = $_POST["id"];
$query = "DELETE FROM selling WHERE id='$id'";
$result = mysqli_query($con,$query);
if (!$result) {
    die('Invalid query: ' . mysqli_error($con));
}
header('Location:usersell.php');
?>