<?php
include("dbs.php");
$sqlget="SELECT yourcode FROM user";
$sqldata=mysqli_query($conn,$sqlget);
while($row=mysqli_fetch_array($sqldata,MYSQLI_ASSOC))
{
echo $row['yourcode'];
echo  $row['uid']."'s code";
echo "<br>";
} 
?>
