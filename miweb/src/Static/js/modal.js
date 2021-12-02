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
function setvaluesDepartam(id,name){
    $('#exampleModal').modal('show')
    $("#iconModal").removeClass('i').addClass('bi bi-columns-gap') 
    $("#Modalgeneric").load( '../View/Parts/Modals/Departament.php')
    $("#exampleModalLabel").text('Departament');
    setTimeout(
        function() 
        {
            $('#nameDepartamenttxt').val(name)
            $('#idDepartamenttxt').val(id)               
        }, 1000);  
}
function setvaluesPerson(id,name,lastname,code,born,iddepa,ndepar){
    $('#exampleModal').modal('show')
    $("#iconModal").removeClass('i').addClass('bi bi-person-lines-fill') 
    $("#Modalgeneric").load( '../View/Parts/Modals/Person.php')
    $("#exampleModalLabel").text('People');
    cargarselect();

    setTimeout(
        function() 
        {   
            $('#idPerson').val(id)
            $('#nameptxt').val(name)
            $('#lastnameptxt').val(lastname)  
             $('#idcodeptxt').val(code);  
             $('#datebornptxt').val(born);  
             $('#sldepartament').val(iddepa).change();        
        }, 1000);  
}