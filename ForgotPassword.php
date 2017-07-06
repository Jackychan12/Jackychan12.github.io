<?php
if(isset($_GET["ForgotPassword"])) 
{
	 $message=$_GET["ForgotPassword"];
	 
}
else
{
	$message="";
	
}
if(isset($_GET["msg"]))
{
	$msg=$_GET["msg"];
}
else
{
	$msg="";
}
	 //$_SESSION['msg']=$message;
//include("forgot.inc.php");
echo('<!doctype html>

<html>
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
	      <h1>Reset Your Password Here!</h1>
	    </div> 
	  <div id="ContentLeft">');
	    
		 
		  
		  
		  echo("<h2>".$message."</h2>");
		  
	   echo( "<h6>".$msg."</h6>");
	   echo('
	  </div>
        <div id="ContentRight">
          <form id="form1" name="form1" method="post" action="forgot.inc.php">
          ENTER YOUR EMAIL
          <label for="email"><br>
          </label>
           <input class="StyleTxtField" type="email" name="Email" id="email" align="middle">
           <input class="button" type="submit" name="ForgotPass" id="submit" value="Submit">
          </form>
        </div> 
		</div>
	<div id="Footer"></div>
</div>
</body>
</html>');
?>