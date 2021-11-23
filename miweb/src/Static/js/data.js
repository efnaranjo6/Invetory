function genericdata(url,cadena){ 
  $.ajax({
		async:true,  
			type:"POST",  
			dataType:"html",    
			contentType: "application/x-www-form-urlencoded",
			beforeSend: function(){ 
            },
			url:url,  
			data:cadena, 
			success: function(data){  
               $('#data').html(data)
                return false;
					},
			error: function(){
                alert('error')
			}
	});
}