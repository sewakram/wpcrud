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
		url: "https://clickonik.api.hasoffers.com/Apiv3/json?api_key=0d17b9dc01514e3cb20e0dedbac106edf773950db4f0cba519558b38084f2d59&Target=Affiliate_Report&Method=getConversions&fields[]=Stat.sale_amount&fields[]=Stat.session_ip&fields[]=Stat.datetime&fields[]=Stat.conversion_status&fields[]=Stat.approved_payout&fields[]=Stat.affiliate_info1&fields[]=Stat.ad_id&fields[]=Offer.name&data_start=2018-03-21&data_end=2018-07-17",
        context: document.body,
        success: function(responses){
            var result=responses.response.data;
                	
         
         $.each(result.data, function(index, item) {
            //now you can access properties using dot notation
           
            console.log(item.Offer.name+'<br>');
            console.log(item.Stat.date);
            /////////////
            $.ajax({  
            type: "POST",                               
            url: "update2.php",
            //data: datasubmit, 

            data: "store="+item.Offer.name+"&time="+ item.Stat.date, 


            success: function(data) {  
            // console.log('update'+data);      
             
            return false;  
            }
            });
            ////////////
        });
         
         
            
         }
    });
});
</script>
	<!-- https://stackoverflow.com/questions/7112672/jquery-ajax-call-to-rest-service
	https://codehandbook.org/call-web-service-from-jquery-ajax/
	https://wordpress.stackexchange.com/questions/118772/execute-one-ajax-request-after-another-ajax-request-finished -->
	<!-- https://codereview.stackexchange.com/questions/79855/alternate-for-nested-ajax-requests -->
    <!-- https://clickonik.api.hasoffers.com/Apiv3/json?api_key=0d17b9dc01514e3cb20e0dedbac106edf773950db4f0cba519558b38084f2d59&Target=Affiliate_Report&Method=getConversions&fields[]=Stat.sale_amount&fields[]=Stat.session_ip&fields[]=Stat.datetime&fields[]=Stat.conversion_status&fields[]=Stat.approved_payout&fields[]=Stat.affiliate_info1&fields[]=Stat.ad_id&fields[]=Offer.name&data_start=2018-03-19&data_end=2018-03-19-->
</body>
</html>
