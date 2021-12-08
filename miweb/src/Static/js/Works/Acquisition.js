(function () {
    let url	='../Controller/Acquisition.php' 
   loadingdata(url);
})()
function cleartable(url){
    $('#exampleAcquisition').dataTable().fnClearTable()
    $('#exampleAcquisition').dataTable().fnDestroy()
    $('#prosecution').val('4')
    loadingdata(url)
}
function UpdateDelete(controller){
    let nameAcquistion= $('#nameAcquisitiontxt').val()   
    let idAcquistion  = $('#idAcquisitiontxt').val() 
    
    let url	='../Controller/Acquisition.php'     
    if (controller==='1'){
        $('#prosecution').val('3')
        $('#idAcquisition').val(idAcquistion)
        $('#nameAcquisition').val('INACTIVE')
        let cadena	=$("#Acquisition").serialize()  
        ajax(url,cadena)
        cleartable(url)
    }else{
        $('#prosecution').val('5')   
        $('#idAcquisition').val(idAcquistion)
        $('#nameAcquisition').val(nameAcquistion) 
        let cadena	=$("#Acquisition").serialize()  
        ajax(url,cadena)
        cleartable(url)
    }
}
function insert(){ 
    $('#prosecution').val('1')
    if($('#name').val()===""){
        alert('typing in name');
    }
    else{
        let url	='../Controller/Acquisition.php'  
        let cadena	=$("#Acquisition").serialize() 
        ajax(url,cadena)
        cleartable(url)
    }
}
function loadingdata(url){
      $.ajax({  
            async: true,
            url: url ,
            type: 'get',
            dataType: 'JSON',
            success: function(response){
                var len = response.length;
                for(var i=0; i<len; i++){
                    let id = response[i].id_acquisition;
                    let namejson = response[i].name;
                    let name=namejson.toString();
                    let  datas ='"'+id+'","'+name+'"';
                    let onclicked = 'setvaluesAcquisi('+datas+')';
                    var tr_str = "<tr>" +
                    "<td>"+ (i+1) + "</td>" +
                    "<td>"+ name + "</td>" +
                     "<td><button data-toggle='modal' data-target='#exampleModal' type='button' class='btn btn-warning' onclick='"+onclicked+"' ><i class='bi bi-tools'></i> Actions</button></td>" +
                    "</tr>";
                    $("#exampleAcquisition tbody").append(tr_str);
                }
                  $('#exampleAcquisition').DataTable({
                        "ordering": true,
                        "responsive": true,
                        "lengthChange": false
                    });
            }
        });
}