<?php
if(isset($_POST["username"])||isset($_POST["password"]))
{
	include("db.php");
	$Uname=mysqli_real_escape_string($conn,$_POST["username"]);
	$pass=mysqli_real_escape_string($conn,$_POST["password"]);
		$sql="SELECT * FROM user WHERE Username= '$Uname';";
		$result=mysqli_query($conn,$sql);
		$resultCheck=mysqli_num_rows($result);
		if($resultCheck<1)
		{
			$d["uname"]="User name doesn't exist";
            $d["pword"]="Password doesn't match";
            $d["value"]="Incorrect";
            echo json_encode($d);
		}
		else
		{
			if($row=mysqli_fetch_assoc($result))
			{
				
				$hashedPassCheck=password_verify($pass,$row['Password']);
				if($hashedPassCheck==False)
				{
					$d["uname"]="";
                    $d["pword"]="Password doesn't match";
                    $d["value"]="Incorrect";
                    echo json_encode($d);
				}
				elseif($hashedPassCheck==True)
				{
					$d["uname"]="";
                    $d["pword"]="";
                    $d["value"]="Correct";
                    echo json_encode($d);
				}
			}
		}
	}
		
