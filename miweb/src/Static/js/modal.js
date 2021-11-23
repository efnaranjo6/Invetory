function setvaluesTrade(id,name){
    $('#exampleModal').modal('show')
    $("#iconModal").removeClass('i').addClass('bi bi-pc-display') 
    $("#Modalgeneric").load( '../View/Parts/Modals/Trademarck.php')
    $("#exampleModalLabel").text('Trademarck');
    setTimeout(
        function() 
        {
         $('#nameTredemarktxt').val(name)
         $('#idTredemarktxt').val(id)               
        }, 1000);  
}