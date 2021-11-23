function ajax(url,cadena){ 
  $.ajax({
		async:true,  
			type:"POST",  
			dataType:"html",    
			contentType: "application/x-www-form-urlencoded",
			beforeSend: function(){ 
               toastr["warning"]('Sending ...')
			   toastr.options = {
				   "showDuration": "200",
					"hideDuration": "10",
					"hideMethod": "fadeOut"
			   }
            },
			url:url,  
			data:cadena, 
			success: function(data){ 
			toastr["success"](data)
			toastr.options = {
  				"closeButton": false,
  				"debug": false,
  				"newestOnTop": false,
  				"progressBar": false,
  				"positionClass": "toast-top-center",
				"preventDuplicates": false,
  				"onclick": null,
  				"showDuration": "300",
				"hideDuration": "1000",
  				"timeOut": "5000",
				"extendedTimeOut": "1000",
				"showEasing": "swing",
				"hideEasing": "linear",
  				"showMethod": "fadeIn",
  				"hideMethod": "fadeOut"
			}
                return false;
					},
			error: function(){
        
			}
            
            
	});
    
}