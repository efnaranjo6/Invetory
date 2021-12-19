function setvaluesTrade(id,name){
    $('#exampleModal').modal('show')
    $("#iconModal").removeClass('i').addClass('bi bi-pc-display') 
    $("#Modalgeneric").load( '../View/Parts/Modals/Trademarck.html')
    $("#exampleModalLabel").text('Trademarck');
    setTimeout(
        function() 
        {
         $('#nameTredemarktxt').val(name)
         $('#idTredemarktxt').val(id)               
        }, 100);  
}
function setvaluesDepartam(id,name){
    $('#exampleModal').modal('show')
    $("#iconModal").removeClass('i').addClass('bi bi-columns-gap') 
    $("#Modalgeneric").load( '../View/Parts/Modals/Departament.html')
    $("#exampleModalLabel").text('Departament');
    setTimeout(
        function() 
        {
            $('#nameDepartamenttxt').val(name)
            $('#idDepartamenttxt').val(id)               
        }, 100);  
}
function setvaluesPerson(id,name,lastname,code,born,iddepa,ndepar){
    $('#exampleModal').modal('show')
    $("#iconModal").removeClass('i').addClass('bi bi-person-lines-fill') 
    $("#Modalgeneric").load( '../View/Parts/Modals/Person.html')
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
        }, 100);  
}
function setvaluesType(id,name){
    $('#exampleModal').modal('show')
    $("#iconModal").removeClass('i').addClass('bi bi-pc me-2') 
    $("#Modalgeneric").load( '../View/Parts/Modals/TypeElement.html')
    $("#exampleModalLabel").text('Type element');
    setTimeout(
        function() 
        {
            $('#nameTypetxt').val(name)
            $('#idTypetxt').val(id)               
        }, 1000);  
}
function setvaluesAcquisi(id,name){
    $('#exampleModal').modal('show')
    $("#iconModal").removeClass('i').addClass('bi bi-columns-gap') 
    $("#Modalgeneric").load( '../View/Parts/Modals/Acquisition.html')
    $("#exampleModalLabel").text('Acquisition');
    setTimeout(
        function() 
        {
            $('#nameAcquisitiontxt').val(name)
            $('#idAcquisitiontxt').val(id)               
        }, 100);  
}
function setvaluesElement(id,name,serial,observation,namec,namet,nametp,idc,idt,idtp){
    $('#delete').prop("disabled", true);
    $('#update').prop("disabled", true);
    $('#exampleModal').modal('show')
    $("#iconModal").removeClass('i').addClass('bi bi-pc-display-horizontal') 
    $("#Modalgeneric").load( '../View/Parts/Modals/Element.html')
    $("#exampleModalLabel").text(' Element');  
    $('#idElement').val(id);
    detaillist(id)
    setTimeout(
        function() 
        {   
            $('#modelElementmd').val(name);
            $('#serialElementmd').val(serial);
            $('#observationElementmd').val(observation);
            let count=0;
            let url = ['../Controller/Trademark.php', '../Controller/Type.php', '../Controller/Acquisition.php']
            for (let index = 0; index < url.length; index++) {
                count++
                optionselect(url[index],count) 
            } 
            setTimeout(
                function() 
                {  
                    $('#strademd').val(idt).change();
                    $('#stypemd').val(idtp).change();
                    $('sactionmd').val(idc).change();
                },1000)    
        }, 1000);  
    
}