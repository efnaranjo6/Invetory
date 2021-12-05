/* global bootstrap: false */
(function () {
    let url	='../Controller/Type.php' 
    loadingdata(url);
})()
function cleartable(url){
    $('#exampleTypeElement').dataTable().fnClearTable()
    $('#exampleTypeElement').dataTable().fnDestroy()
    $('#prosecution').val('4')
    loadingdata(url)
}
function UpdateDelete(controller){
    let nametype = $('#nameTypetxt').val()   
    let idtype  = $('#idTypetxt').val()   
    if (controller==='1'){
        $('#prosecution').val('3')
        $('#idtype').val(idtype)
        $('#nametype').val('INACTIVE')
         let url	='../Controller/Type.php'  
        let cadena	=$("#TypeElement").serialize() 
        ajax(url,cadena)
        cleartable(url)       
    }else{
        $('#prosecution').val('5')   
        $('#idtype').val(idtype)
        $('#nametype').val(nametype)
        let url	='../Controller/Type.php'  
        let cadena	=$("#TypeElement").serialize() 
        ajax(url,cadena)
        cleartable(url)
    }
}
function insert(){ 
    $('#alert').animate({
        opacity: 1,
    },50)
    $('#prosecution').val('1')
    if($('#name').val()===""){
        alert('typing in name');
    }
    else{
        let url	='../Controller/Type.php'  
        let cadena	=$("#TypeElement").serialize() 
        ajax(url,cadena)
        cleartable(url)
    }
}
function loadingdata(url){
      $.ajax({  
            url: url ,
            type: 'get',
            dataType: 'JSON',
            success: function(response){

                var len = response.length;
                for(var i=0; i<len; i++){
                    let id = response[i].id_type;
                    let namejson = response[i].name;
                    let name=namejson.toString();
                    let  datas ='"'+id+'","'+name+'"';
                    let onclicked = 'setvaluesType('+datas+')';
                    var tr_str = "<tr>" +
                    "<td>"+ (i+1) + "</td>" +
                    "<td>"+ name + "</td>" +
                     "<td><button data-toggle='modal' data-target='#exampleModal' type='button' class='btn btn-warning' onclick='"+onclicked+"' ><i class='bi bi-tools '></i> Actions</button></td>" +
                    "</tr>";
                    $("#exampleTypeElement tbody").append(tr_str);
                }
                  $('#exampleTypeElement').DataTable({ 
                        "ordering": true,
                        "responsive": true,
                        "lengthChange": false
                    });
            }
        });
}