<?php
session_start();
if(isset($_POST['LogIn']))
{
	include("db.php");
	$Uname=mysqli_real_escape_string($conn,$_POST["UserName"]);
	$pass=mysqli_real_escape_string($conn,$_POST["Password"]);
	//check for empty
	if(empty($Uname)||empty($pass))
	{
		header("Location:Login.php?login=empty");
		exit();
	}
	else
	{
		$sql="SELECT * FROM user WHERE Username= '$Uname';";
		$result=mysqli_query($conn,$sql);
		$resultCheck=mysqli_num_rows($result);
		if($resultCheck<1)
		{
			header("Location:Login.php?login=Username+not+matched");
		    exit();
		}
		else
		{
			if($row=mysqli_fetch_assoc($result))
			{
				
				$hashedPassCheck=password_verify($pass,$row['Password']);
				if($hashedPassCheck==False)
				{
					header("Location:Login.php?login=password+not+matched");
		             exit();
				}
				elseif($hashedPassCheck==True)
				{
					$_SESSION['ufirst']=$row['Fname'];
					$_SESSION['ulast']=$row['Lname'];
					$_SESSION['uemail']=$row['Email'];
					$_SESSION['uUser']=$row['Username'];
					$_SESSION['uPass']=$row['Password'];
					
					header("Location:Account.php");
					exit();
				}
			}
		}
	}
		
}