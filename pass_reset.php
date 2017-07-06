<?php
include("db.php");
if(!isset($_POST["newpass"])||!isset($_POST["repass"])||!isset($_POST['Username']))
{
	header("Location:ForgotPassword.php?ForgotPassword=Email is incorrect&msg=Register Please");
	exit();
}
$newpass=$_POST["newpass"];
$repass=$_POST["repass"];
$post_Username=$_POST['Username'];
$code=$_GET['code'];
if($newpass==$repass)
{
	$enc_pass=password_hash($newpass,PASSWORD_DEFAULT);
	mysqli_query("UPDATE user SET Password='$enc_pass' WHERE Username='$post_Username'");
	mysqli_query("UPDATE user SET resetcode='0' WHERE Username='$post_Username'");
	
	echo('<html>
<head>
<meta charset="utf-8">
<link href="CSS1/layout.css" rel="stylesheet" type="text/css"/>
<link href="CSS1/menu.css" rel="stylesheet" type="text/css" />
<title>Watch Energy</title>
</head>
<body>
<div id="Holder" >
	<div id="Header"></div>
	<div id="NavBar">
		<nav> 
		 <ul>
		  <li><a href="Login.php">LogIn</a></li>
		  <li><a href="Register.php">Register</a></li>
          <li><a href="ForgotPassword.php">Forgot Password</a></li>    
		 </ul>
	    </nav>
	</div>
	<div id="Content">
	    <div id="PageHeading">
	      <h1>Reset Your Password</h1>
	    </div> 
	  <div id="ContentLeft">
	    <h2></h2>
	    <h6></h6>
	  </div>
        <div id="ContentRight">Your Password Have Been Updated. Now you can log in</div> 
		</div>
	<div id="Footer"></div>
</div>
</body>
</html>');
	
}
else
{
	echo('<html>
<head>
<meta charset="utf-8">
<link href="CSS1/layout.css" rel="stylesheet" type="text/css"/>
<link href="CSS1/menu.css" rel="stylesheet" type="text/css" />
<title>Watch Energy</title>
</head>
<body>
<div id="Holder" >
	<div id="Header"></div>
	<div id="NavBar">
		<nav> 
		 <ul>
		  <li><a href="Login.php">LogIn</a></li>
		  <li><a href="Register.php">Register</a></li>
          <li><a href="ForgotPassword.php">Forgot Password</a></li>    
		 </ul>
	    </nav>
	</div>
	<div id="Content">
	    <div id="PageHeading">
	      <h1>Reset Your Password</h1>
	    </div> 
	  <div id="ContentLeft">
	    <h2></h2>
	    <h6></h6>
	  </div>
        <div id="ContentRight">Password must match<a href=forgot.inc.php?code=$code&username=$post_Username>Click here to go back</a></div> 
		</div>
	<div id="Footer"></div>
</div>
</body>
</html>');
	
}
