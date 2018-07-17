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
		url: "https://clickonik.api.hasoffers.com/Apiv3/json?api_key=0d17b9dc01514e3cb20e0dedbac106edf773950db4f0cba519558b38084f2d59&Target=Affiliate_Report&Method=getStats&fields[]=Stat.offer_id&fields[]=Stat.date&fields[]=Offer.name&data_start=2017-01-17&data_end=2018-07-17",
        context: document.body,
        success: function(responses){
            var result=responses.response.data;
            var datasubmit = [];
            var dataclk = {};
            var elementstore;
            var elementdate;
        	// // console.log(result.data[i++].Offer['name']);
         //    result.data.forEach(function(element) {
         //        ele1+=element.Offer['name'];
         //        ele2+=element.Stat['date'];
            
         //    });
         //    
         // result.data.forEach(function(element) {
            // for(var i=0;i<result.data.current;i++)
            // {
            //     element=result.data[i];
            // // dataclk.store=element.Offer.name;
            // // dataclk.time=element.Stat.date;
            //  // datasubmit.push(element);
            // console.log(element);
            // }
         // });
         
         $.each(result.data, function(index, item) {
            //now you can access properties using dot notation
            elementstore=item.Offer.nam;
            elementdate=item.Stat.date;
            console.log(item.Offer.name+'<br>');
            console.log(item.Stat.date);
        });
         // datasubmit.push(dataclk);
         
           $.ajax({  
                type: "POST",                               
                url: "update.php",
                 //data: datasubmit, 
                                
                data: "store=" + elementstore+ "&time=" + elementdate, 

                
                success: function(data) {  
                	console.log('update'+data);      
                    // var newStatus = $('<div>').html(status_upd);   
                    //  $('.new-status').after(newStatus).fadeIn('slow');  
                    return false;  
                    }
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
