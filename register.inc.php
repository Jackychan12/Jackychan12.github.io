<?php

if(isset($_POST["Register"]))
{
	include("db.php");
	$first=mysqli_real_escape_string($conn,$_POST["Fname"]);
	$last=mysqli_real_escape_string($conn,$_POST["Lname"]);
	$email=mysqli_real_escape_string($conn,$_POST["Email"]);
	$Uname=mysqli_real_escape_string($conn,$_POST["UserName"]);
	$pass=mysqli_real_escape_string($conn,$_POST["Password"]);
	$conpass=mysqli_real_escape_string($conn,$_POST["PasswordConfirm" ]);
	
	//Error Handlers:
	//check for empty fields:
	
	if(empty($first)||empty($last)||empty($email)||empty($Uname)||empty($pass)||empty($conpass))
	{
		header("Location: Register.php?Register=Empty Register");
		exit();
	}
	else
	{
		//Check input characters are valid
		if(!preg_match("/^[a-zA-Z]*$/",$fist)||!preg_match("/^[a-zA-Z]*$/",$last))
		{
			header("Location: Register.php?Register=Invalid input in First or Last Name");
			exit();
		}
		else
		{
			if(!filter_var($email,FILTER_VALIDATE_EMAIL))
			{
				header("Location: Register.php?Register=Invalid Email");
			    exit();
			}
			else
			{
				$sql="SELECT * FROM user WHERE Username='$Uname'";
				$result=mysqli_query($conn,$sql); 
				$resultCheck=mysqli_num_rows($result);
				if($resultCheck>0)
				{
				header("Location: Register.php?Register=User has Taken");
			    exit();
				}
				else
				{
					if($pass==$conpass)
					{
						$hashedpass=password_hash($pass, PASSWORD_DEFAULT);
					//Insert User into database
					$sql="INSERT INTO user (Fname,Lname,Email,Username,Password,resetcode) VALUES ('$first','$last','$email','$Uname','$hashedpass','0')";
					
	                  mysqli_query($conn,$sql);
	              
					header("Location: Login.php?Login=LoginNow");
			    exit();
					}
					else{
						header("Location: Register.php?Register=Password Haven't Matched");
		                   exit();
					}
					
				}
				
			}
		}
		
	}
	
}
else
{
	header("Location: Register.php");
		exit();
}
