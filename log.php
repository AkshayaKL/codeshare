<!DOCTYPE html>
<head>
<title>submission done</title>
<style>
body
{background:black;
color:red;
}
</style>
</head>
<body>
<?php
session_start();
   $_SESSION['user'] = $_SESSION['uid'];
  
   include "dbs.php";

$code=$_POST["codes"];
$uid=$_SESSION['uid'];
echo "$uid";
echo "<br><br>";
echo "Thank you for submitting";
$sql="SELECT codes
FROM user WHERE uid='$uid'";
$addcode=mysqli_query($conn,$sql);
$nc=mysqli_fetch_array($addcode,MYSQLI_ASSOC);
$var=$nc['codes'];
$incre=$var+1;
$var= "yourcode".$var;
$_SESSION['var']=$var;
$createcode="ALTER TABLE  user add `" . $var . "`VARCHAR(1000)";
$addcode=mysqli_query($conn,$createcode);
$sqldata="UPDATE user SET `" .$var ."`='$code' WHERE uid='$uid'";
$addcode=mysqli_query($conn,$sqldata);  
$sqldatas="UPDATE user SET codes ='$incre' WHERE uid='$uid'";
$addcode=mysqli_query($conn,$sqldatas); 
?>
<a href="codedetails.php?u=<?php echo $_SESSION['id']?>&key=<?php echo $_SESSION['var']?>">Click to view your code</a>

</body>

