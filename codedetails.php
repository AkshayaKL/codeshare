<!DOCTYPE html>
<?php
 session_start(); // this NEEDS TO BE AT THE TOP of the page before any output etc

echo "<br>";
include "dbs.php";
?>
<html>
<title>codes </title>
<link rel="stylesheet" href="styles/default.css">
<head>
<style>
.content{
padding-left:50px;


}
body
{
background:#8B008B;
color:white;
}

</style>
</head>
<body>
<div class="content">

<pre><code class="php">
<?php


include "dbs.php";
$var=$_REQUEST['key'];
$id=$_REQUEST['u'];
$sqql="SELECT  `" .$var. "`  FROM user WHERE id='$id'";
$runn=mysqli_query($conn,$sqql);


$row=mysqli_fetch_array($runn,MYSQLI_ASSOC);

$sam=htmlspecialchars($row[$var]);
echo $sam;
?>
</pre></code>
</div>
<script src="highlight.pack.js"></script>
<script>hljs.initHighlightingOnLoad();</script>
</body>
</html>






