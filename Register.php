<?php
if(isset($_GET["Register"]))
{
	$message=$_GET["Register"];
}
else
{
	$message="";
}
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meata name="viewport" content="width=device-width,initial-scale=1">
<link href="CSS1/layout.css" rel="stylesheet" type="text/css"/>
<link href="CSS1/menu.css" rel="stylesheet" type="text/css" />
<title>Watch Energy</title>
<script
  src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
		crossorigin="anonymous"></script>
  <script src="register.js"></script>
  
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
	      <h1>Sign Up!</h1>
	    </div> 
	  <div id="ContentLeft">
	    <?php
		  echo("<h2>".$message."</h2>");
		?>
	    <h6></h6>
	  </div>
        <div id="ContentRight">
          <form action="register.inc.php" id="form1" name="form1" method="post">
            <table width="400" border="0">
              <tbody>
                <tr>
                  <td><table border="0">
                    <tbody>
                      <tr class="tr1">
                        <td class="firstname"><label for="First Name">First Name:<br>
                        </label>
                        <input name="Fname" type="text" class="StyleTxtField" id="fname"></td>
                        <td class="lastname"><label for="Last Name">Last Name:<br>
                        </label>
                          <input name="Lname" type="text" class="StyleTxtField" id="lname"></td>
                      </tr>
                    </tbody>
                  </table></td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td><label for="email">Email:<br>
                  </label>
                  <input name="Email" type="email" class="StyleTxtField" id="email"><span id="em" class="em">Type Valid Email</span> </td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td><label for="userName">User Name:<br>
                  </label>
                  <input name="UserName" type="text" class="StyleTxtField" id="userName"></td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td><table border="0">
                    <tbody>
                      <tr class="tr2">
                        <td class="Password"><label for="password">Password:<br>
                        </label>
                        <input name="Password" type="password" class="StyleTxtField" id="password"><span id="Pass" >Character length should be 6</span></td>
                        <td class="conpass"><label for="PasswordConfirm">Confirm Password:<br>
                        </label>
                        <input name="PasswordConfirm" type="password" class="StyleTxtField" id="PasswordConfirm"><span id="Conpass" >Retype exact password</span></td>
                      </tr>
                    </tbody>
                  </table></td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td><input class="button" type="submit" name="Register" id="RegisterButton" value="Register"></td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
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
