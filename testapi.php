<!doctype html>

<html class="no-js" lang="en">

<meta http-equiv="content-type" content="text/html;charset=utf-8" />





<head>

    <meta charset="utf-8">

    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title> Contact </title>
    </head>

<body>
<script
src="https://code.jquery.com/jquery-3.3.1.js"
integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
crossorigin="anonymous">

</script>
	<script>
$(document).ready(function(){
$.ajax({ 
		type: "GET",
	    dataType: "json",
		url: "API.php",
        context: document.body,
        success: function(dataString){
        	alert('API'+dataString);
           $.ajax({  
                type: "POST",                               
                url: "update.php",
                data: dataString,                 
                success: function(data) {  
                	alert('update'+data);      
                    var newStatus = $('<div>').html(status_upd);   
                     $('.new-status').after(newStatus).fadeIn('slow');  
                    return false;  
                    }
                }); 
         }
    });
});
</script>
	https://stackoverflow.com/questions/7112672/jquery-ajax-call-to-rest-service
	https://codehandbook.org/call-web-service-from-jquery-ajax/
	https://wordpress.stackexchange.com/questions/118772/execute-one-ajax-request-after-another-ajax-request-finished
	https://codereview.stackexchange.com/questions/79855/alternate-for-nested-ajax-requests
	https://stackoverflow.com/questions/20769364/insert-data-through-ajax-into-mysql-database
</body>
</html>
