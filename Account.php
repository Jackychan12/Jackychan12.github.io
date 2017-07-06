<?php

include('login.inc.php');

?>
<!doctype html>
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
	
	<?php
		  if(isset($_SESSION['uUser']))
		  {
			  
	echo('<div id="Content">
	    <div id="PageHeading">
	      <h1>WellCome</h1>
	    </div> 
	  <div id="ContentLeft"> </div>');
			  //echo($_SESSION['uUser']);
	    
		  
	    echo("<h2>".$_SESSION['uUser']." </h2>");
	    echo('<h6>You are logged in</h6>');
			 echo(' <div id="ContentRight"><form action="LogOut.php" method="post"> <input type="submit" name="logout" value="logOut" class="button" > </form></div> 
		</div>');
		  }
		  else
		  {
			  		  
	echo'<div id="Content">
	    <div id="PageHeading">
	      <h1>You are not logged in</h1>
	    </div> 
	  <div id="ContentLeft"> </div>';
	    
		  }
	    ?>
	 
        
	<div id="Footer"></div>
</div>
</body>
</html>
