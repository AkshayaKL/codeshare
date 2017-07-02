
<?php
session_start();
include "dbs.php";
$uid=$_SESSION['uid'];
$pwd=$_SESSION['pwd'];
$comm="SELECT * FROM user WHERE uid='$uid' AND pwd='$pwd'";
$addcodr=mysqli_query($conn,$comm);
if(!$row=mysqli_fetch_array($addcodr,MYSQLI_ASSOC))
die("Username or Password  incorrect");
$gettingid="SELECT id FROM user WHERE uid='$uid' AND pwd='$pwd'";
$execute=mysqli_query($conn,$gettingid);
$row=mysqli_fetch_array($execute,MYSQLI_ASSOC);
$_SESSION['id']=$row['id'];
 
?>

<!DOCTYPE html>
<html>
<head>
<title>CODE</title>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">


    <link rel="stylesheet" href="http://codemirror.net/lib/codemirror.css">
    <script src="http://codemirror.net/lib/codemirror.js"></script>
    <script src="http://codemirror.net/addon/edit/matchbrackets.js"></script>
   <script src="http://codemirror.net/addon/comment/continuecomment.js"></script>
    <script src="http://codemirror.net/addon/mode/loadmode.js"></script>
    <script src="http://codemirror.net/mode/javascript/javascript.js"></script>
    <script src="codemirror/mode/meta.js"></script>
    <script src="http://codemirror.net./mode/clike/clike.js"></script>
   
<style>
body
{
background:url(https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRayipB_kP6n2s3cZnrC8rcc0PIt1iJ_0RVEzjJohQ-uaciLhxFTA);
position:absolute;
left:50px;
text-align:center;
}
</style>
</head>
<body>
<?php
echo "<h1>Hey user</h1>";
echo "<br>";
?>

<form method="POST" action="log.php" >
<textarea class="w3-code jsHigh notranslate" name="codes" rows="100" cols="100" placeholder="Type your code here" id="code"></textarea>
<input type="submit"></input>

</form>
<script>
window.onload = function () {
  
    var readOnlyCodeMirror = CodeMirror.fromTextArea(document.getElementById('code'), {
        mode: "javascript",
        theme: "default",
        lineNumbers: true
        
    });  
var modename=document.getElementById("msub");
CodeMirror.autoLoadMode(readOnlyCodeMirror,modename);  
    
};
document.getElementById("msub").onClick=CodeMirror.autoLoadMode(readOnlyCodeMirror,modename);



</script>
</body>
</html>


