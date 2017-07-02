<?php
session_start();
$_SESSION['uid']=$_POST['uid'];
$_SESSION['pwd']=$_POST['pwd'];
include "dbs.php";
$uid=$_SESSION['uid'];
$pwd=$_SESSION['pwd'];
$comm="SELECT * FROM user WHERE uid='$uid' AND pwd='$pwd'";
$addcodr=mysqli_query($conn,$comm);
if(!$row=mysqli_fetch_array($addcodr,MYSQLI_ASSOC))
{
header("Location:connect.php");
$_SESSION['errors']="Username or Password Incorrect";
}

?>
<!DOCTYPE html>
<html>
<head>
<title>Confirmation</title>
<style>
body
{
background:url('https://images7.alphacoders.com/345/thumb-1920-345392.jpg');
color:white;
text-align:center;
position:absolute;
left:200px;
top:100px;
}
</style>
</head>
<body>
<p><h1>Welcome to your page</h1></p>
<p><h4><a href="login.php">Click here to add  your code</a><br></h4></p>
<p><h4><a href="reference.php">Click here to see all your codes</a><br></h4></p>
</body>
</html>

