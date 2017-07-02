<!DOCTYPE html>
<html>
<head>
<style>

</style>
<title>Reference</title>
<link rel="stylesheet" href="styles/default.css">

</head>
<body>
<pre><code class="php">
<?php
session_start();
echo "<strong>Your codes:</strong>";
include "dbs.php";
$uid=$_SESSION['uid'];
$sqldata="SELECT *, NULL AS id FROM user WHERE uid='$uid'";
$addcode=mysqli_query($conn,$sqldata);
$execute=mysqli_fetch_array($addcode,MYSQLI_ASSOC);
$sqldatas="SELECT codes FROM user WHERE uid='$uid'";
$addcodes=mysqli_query($conn,$sqldatas);
$tumbler=mysqli_fetch_array($addcodes,MYSQLI_ASSOC);

for ($i=0;$i<$tumbler['codes'];$i++)
{
echo "<br>";
echo "Code ";
echo $i+1;

$var="yourcode".$i;
$execute[$var]=htmlspecialchars($execute[$var]);
echo "<br>";
echo "<p style='color:purple;'><pre><code>$execute[$var]</pre></code></p>";
}

?></pre></class>
<script src="highlight.pack.js"></script>
<script>hljs.initHighlightingOnLoad();</script>

</body>
</html>

 

