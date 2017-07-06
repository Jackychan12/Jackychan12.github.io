<?php
include("db.php");
//session_start();
//$_SESSION['msg']=$message;

if(isset($_GET['code']))
{   echo("hi there");
	$get_user=$_GET['Username'];
	$get_code=$_GET['code'];
	//header("Location:ForgotPassword.php?ForgotPassword=emailincorrect");
	
	$query=mysqli_query($conn,"SELECT * FROM user WHERE Username='$get_user'");
	
	while($raw=mysqli_fetch_assoc($query))
	{
		$db_code=$raw['resetcode'];
		$db_user=$raw['Username'];
	}
	if($get_user == $db_user && $get_code == $db_code)
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
	      <h1>Change Your Password</h1>
	    </div> 
	  <div id="ContentLeft">
	    <h2>Your Message Here</h2>
	    <h6>your message</h6>
	  </div>
        <div id="ContentRight">
          <form action="pass_reset.php?code=$get_code" id="LoginForm" name="LoginForm" method="post">
            <table width="400" border="0" align="center">
              <tbody>
                <tr>
                  <td><label for="textfield">Enter New password:<br>
                  </label>
                  <input name="newpass" type="password" class="StyleTxtField" id="newpass"></td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td><label for="password">Re-Enter Password:<br>
                  </label>
                  <input name="repass" type="password" class="StyleTxtField" id="repass"></td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td><input class="button" type="submit" name="UpdatePass" id="UpdatePass" value="Update Password "></td>
				  <td><input type="hidden" name="Username" value='.$db_user.'></td>
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
</html>');
	}
	
}


else
{
   $email=mysqli_real_escape_string($conn,$_POST["Email"]);
	echo("nadan<br>");
 
   if(filter_var($email,FILTER_VALIDATE_EMAIL)==False)
   {
   header("Location:ForgotPassword.php?ForgotPassword=Invalid Email");
   exit();
  }
  else
   {
	echo("nadan2<br>");
    $sql="SELECT * FROM user WHERE Email='$email'";
    $result=mysqli_query($conn,$sql);
    $row=mysqli_fetch_array($result);
	   
	   if(count($row)>=1)
   {
     $db_username=$row['Username'];
	 echo($db_username);
	 echo("nadan4<br>");
     $db_email=$row['Email'];
	  if($email==$db_email)
	  {
	 $code=rand(1000,100000);
	 $to=$db_email;
	 $subject="Reset Password";
	 $body='This is an automated email. Please Do not reply to this email
		     Click the link below or paste it into your browser
			 http://localhost/watchenergy/forgot.inc.php?code=$code&Username=$db_username';
	  mysqli_query($conn,"UPDATE user SET resetcode='$code' WHERE Username='$db_username'");
	  mail($to,$subject,$body);
		 
	  header("Location:ForgotPassword.php?ForgotPassword=Link has sent to your Email&msg=Please Check Your Mail");
		  
	 }
	 else
	  {
		    
			header("Location:ForgotPassword.php?ForgotPassword=Your Email is not registered&msg=Register Please");
			exit();
	  }  
	   
	   
   }
	   else
	   {
		  
			header("Location:ForgotPassword.php?ForgotPassword=Email is incorrect&msg=Register Please");
			exit();
	   }
    
   }
     
}
	 


 
	
		  	   
