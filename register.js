
$(document).ready(function()
{
	$("#Pass").hide();
    $("#Conpass").hide();
	$("#em").hide();
	
 
	$("#password").keyup(function()
	{
		 var x = $(this).val().length;
	    if(x<6)
	       {	$("#Pass").show();  
                $("#password").css("background-image","none");
           }
		else{   $("#Pass").hide();  
                 $("#password").css({"background-image" : "url(images/checkbox-303113.svg)" , "background-position" : "right", "background-repeat" : "no-repeat"});
            }
	}
	);
	
	$("#PasswordConfirm").keyup(function()
								
	{
		$("#Conpass").show();
        
            
		     if($(this).val()===$("#password").val() && $(this).val().length>5)
			   {
				$("#Conpass").hide();
                $("#PasswordConfirm").css({"background-image" : "url(images/checkbox-303113.svg)" , "background-position" : "right", "background-repeat" : "no-repeat"});
			   }
              else
               {
                $("#Conpass").show();
                $("#PasswordConfirm").css("background-image","none");
               }
            
	});
	
   $("#email").keyup(function()
   {  $("#em").show();
	  var z = $("#email").val().search("@"); 
	   if(z>0)
		   {
			   $("#em").hide();
               $("#email").css({"background-image" : "url(images/checkbox-303113.svg)" , "background-position" : "right", "background-repeat" : "no-repeat"});
               
		   }
        else
            {
                $("#em").show();
                $("#email").css("background-image","none");
                
            }
	   	   
   });
	
		
});