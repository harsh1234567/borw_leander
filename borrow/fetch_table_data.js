
 $(document).ready(function()
 {

  function  callme()
  {
  		  url='borrow_fetch_data.php';

           $.ajax({
                type:"POST",
                url:url,
               
                cache:false,
                 success:function(data){
                  $("#fetch_data").html(data);
   
               }
   


           });

  }
setInterval(callme,500);
 });

