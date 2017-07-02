<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Welcome to Snippet Shares</title>
<style>
body
{
position:absolute;
left:300px;
top:50px;
background:url(https://www.adtechnosys.com/wp-content/uploads/2015/04/Website-Design-Background.png);
color:black;

}

.error
{ 
color:red;
font-style:oblique;
}
</style>
</head>
<body>

<?php
session_start();
?>
<h1>Welcome to snippet shares!</p>
<p><h2>Login to your portal</h2></p>
<form action="randompage.php" method="POST" ><span class="error"><?php echo $_SESSION['errors']?></span><br>
<input type="text"  name="uid" placeholder="username"><br>
<input type="password" name="pwd" placeholder="password"><br>
<button type="submit">Login</button><br><br><br>
</form>
<p><h3>Are you new here?Sign up first</h3></p> 
<form method="POST" action="signup.php" >
<input type="text" name="first" placeholder="firstname"><span class="error">* <?php echo $_SESSION['firstErr'];?></span><br>

<input type="text" name="last" placeholder="lastname"><span class="error">* <?php echo $_SESSION['lastErr'];?></span><br>
<input type="text"  name="uid" placeholder="username"><span class="error">* <?php echo $_SESSION['uidErr'];?></span><br>
<input type="password" name="pwd" placeholder="password"><span class="error">* <?php echo $_SESSION['pwdErr'];?></span><br>
<button type="submit">SIGN UP</button>
<span><?php echo $_SESSION['message']; ?></span>
</form>
</body>
</html>

