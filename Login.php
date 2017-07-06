<?php
session_start();
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link href="CSS1/layout.css" rel="stylesheet" type="text/css"/>
<link href="CSS1/menu.css" rel="stylesheet" type="text/css" />
<title>Watch Energy</title>
<script
  src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>
  
<script src="login.js"></script>
  
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
	      <h1>LogIn</h1>
	    </div> 
	  <div id="ContentLeft">
	    <h2></h2>
	    <h6></h6>
	  </div>
        <div id="ContentRight">
          <form action="login.inc.php" id="LoginForm" name="LoginForm" method="post">
            <table width="400" border="0" align="center">
              <tbody>
                <tr>
                  <td><label for="textfield">User Name:<br>
                  </label>
                  <input name="UserName" type="text" class="StyleTxtField" id="UserName"></td>
                </tr>
                <tr>
                  <td>&nbsp;<span id="un"></span></td>
                </tr>
                <tr>
                  <td><label for="password">Password:<br>
                  </label>
                  <input name="Password" type="password" class="StyleTxtField" id="Password"></td>
                </tr>
                <tr>
                  <td>&nbsp;<span id="pa"></span></td>
                </tr>
                <tr>
                  <td><input class="button"type="submit" name="LogIn" id="Login" value="LogIn"></td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                </tr>
              </tbody>
            </table>
          </form>
        </div> 
		</div>
	<div id="Footer"></div>
</div>
</body>
</html>
