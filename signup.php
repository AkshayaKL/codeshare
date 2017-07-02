<?php
include "dbs.php";
session_start();
$count=0;
if (!preg_match("/^[a-zA-Z ]*$/",$_POST["first"])) {
      $_SESSION['firstErr'] = "Only letters and white space allowed";
        $count++; }
     if (empty($_POST["first"])) {
    $_SESSION['firstErr'] = "First Name is required";
 $count++;
  } else {
    $first = test_input($_POST["first"]);
  }
  if (!preg_match("/^[a-zA-Z ]*$/",$_POST["last"])) {
      $_SESSION['lastErr'] = "Only letters and white space allowed";$count++; }
  if (empty($_POST["last"])) {
    $_SESSION['lastErr'] = "Last Name is required";$count++;
  } else {
    $last = test_input($_POST["last"]);
  }

  if (empty($_POST["uid"])) {
    $_SESSION['uidErr'] = "User Id required";$count++;
  } else {
    $uid = test_input($_POST["uid"]);
  }

  if (empty($_POST["pwd"])) {
    $_SESSION['pwdErr'] = "Password Mandatory";$count++;
  } else {
    $pwd =  test_input($_POST["pwd"]);
  }

 
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
$check=$_POST["uid"];
$sql = "SELECT * FROM user where uid = '$check'";
$res = mysqli_query($conn,$sql);
if($res && mysqli_num_rows($res)>0){
  $_SESSION['uidErr']="Already taken";
$count++;
}
if (strlen($pwd)<8)
{
$_SESSION['pwdErr']="Password must be atleast 8 characters long";
$count++;
}
if((!(empty($_POST["pwd"])))&&(!(empty($_POST["uid"])))&&(!(empty($_POST["last"])) )&&(!(empty($_POST["first"])))&&($count==0))
{
$sql="INSERT INTO user (first,last,uid,pwd) VALUES ('$first','$last','$uid','$pwd')";
$result=mysqli_query($conn,$sql);
$_SESSION['message']="Registered  ".$uid;
}
else
$_SESSION['message']="There are errors .Fill properly";
header('Location:connect.php');

?>
