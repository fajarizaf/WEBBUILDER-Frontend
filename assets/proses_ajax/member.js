$(document).ready(function() {
	var servicesUrl = 'http://localhost/project/themesintersweb/'; 
  var demoUrl = 'http://localhost/project/intersweb2/'; 
       
       

        $('#myformRegister').submit(function() {
           $('#parentloading').fadeIn('fast');
           $('.loadingUpdate').html('<img src="'+servicesUrl+'/assets/pic/tools/sidebar/loadings.gif" width="25" />').delay(6000);  
		$.ajax({
			type	: "POST",
                        url: $(this).attr('action'),
			data: $(this).serialize(),				  
			success	: function(response){
                            
                        
                                
                                var counter1 = 6;
                                var countdown1 = setInterval(function(){
                                if (counter1 == 0) {
                               
                                        $('#parentloading').fadeIn('fast');
                                        window.location = ""+demoUrl+"account/setSessionRegister/"+response+"";
                                     
                                }
                                counter1--;
                                }, 500);
                        
                        
			}
		});
		return false;
       });




        $('#myformLogin').submit(function() {
            $('.loadingUpdate').html('<img src="'+servicesUrl+'/assets/pic/tools/sidebar/loadings.gif" width="25" />').delay(6000);    
        $.ajax({
            type    : "POST",
                        url: $(this).attr('action'),
            data: $(this).serialize(),                
            success : function(response){
     
                        
                        

                                var counter1 = 6;
                                var countdown1 = setInterval(function(){
                                if (counter1 == 0) {
                                    if(response != 'Login Gagal') {
                               
                                        $('.loadingUpdate').html('').delay(6000); 
                                        $('#sticky').fadeIn('slow');
                                        $('#sticky').html(response);
                                        window.location = ""+demoUrl+"account/setSessionLogin/"+response+"";
                                    } else {
                                        $('.loadingUpdate').html('').delay(6000); 
                                        $('#sticky').fadeIn('slow');
                                        $('#sticky').html(response);
                                    }            
                                     
                                }
                                counter1--;
                                }, 500);
                        
                        
            }
        });
        return false;
       });


            $('input[name=username]').keyup(function() {
            $('#sticky').html('');
            $('#sticky').css({'display':'none'});
            });
       
       
       
       
});
 

