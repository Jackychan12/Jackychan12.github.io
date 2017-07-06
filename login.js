$(document).ready(function()
{  
	$("#UserName").keyup(function()
	{   var x = $("#UserName").val();
	    var y = $("#Password").val();
		$.post("log-val.php",{username:x,password:y},function(data,status)
	    { 
			$("#un").text(data.uname);
            var v = data.value;
            
            if(v==="Correct")
                {
                    $(".StyleTxtField").css({"background-image" : "url(images/checkbox-303113.svg)" , "background-position" : "right", "background-repeat" : "no-repeat"});
                }
            if(v==="Incorrect")
                {
                     $(".StyleTxtField").css({"background-image" : "none" , "background-position" : "right", "background-repeat" : "no-repeat"});
                }
		  
		},"json");
	 
	});
   
	$("#Password").keyup(function()
	 {
		var x=$("#UserName").val();
		var y = $("#Password").val();
		$.post("log-val.php",{username:x,password:y},function(data,status)
		{
		  $("#pa").text(data.pword);
           var v = data.value; 
            
            if(v==="Correct")
                {
                    $(".StyleTxtField").css({"background-image" : "url(images/checkbox-303113.svg)" , "background-position" : "right", "background-repeat" : "no-repeat"});
                }
            
             if(v==="Incorrect")
                {
                     $(".StyleTxtField").css({"background-image" : "none" , "background-position" : "right", "background-repeat" : "no-repeat"});
                }
		  
		},"json");
	});
});