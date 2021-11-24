/* global bootstrap: false */
(function () {
    let url	='../Controller/Departament.php' 
   loadingdata(url);
})()
function UpdateDelete(controller){
    let nameDepartament= $('#nameDepartamenttxt').val()   
    let idDepartament  = $('#idDepartamenttxt').val()   
    if (controller==='1'){
        $('#prosecution').val('3')
        $('#idDepartament').val(idDepartament)
        $('#nameDepartament').val('INACTIVE')
        let url	='../Controller/Departament.php'  
        let cadena	=$("#Departament").serialize() 
        ajax(url,cadena)
        $('#exampleDepartament').dataTable().fnClearTable();
        $('#exampleDepartament').dataTable().fnDestroy()
        $('#prosecution').val('4')
        loadingdata(url);
    }else{
        $('#prosecution').val('5')   
        $('#idDepartament').val(idDepartament)
        $('#nameDepartament').val(nameDepartament)
        let url	='../Controller/Departament.php'  
        let cadena	=$("#Departament").serialize() 
        ajax(url,cadena)
        $('#exampleDepartament').dataTable().fnClearTable();
        $('#exampleDepartament').dataTable().fnDestroy()
        $('#prosecution').val('4')
        loadingdata(url);
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
        let url	='../Controller/Departament.php'  
        let cadena	=$("#Departament").serialize() 
        ajax(url,cadena)
        $('#exampleDepartament').dataTable().fnClearTable();
        $('#exampleDepartament').dataTable().fnDestroy()
        $('#prosecution').val('4')
        loadingdata(url);
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
                    let id = response[i].id_Departament;
                    let namejson = response[i].name;
                    let name=namejson.toString();
                    let  datas ='"'+id+'","'+name+'"';
                    let onclicked = 'setvaluesDepartam('+datas+')';
                    var tr_str = "<tr>" +
                    "<td>"+ (i+1) + "</td>" +
                    "<td>"+ name + "</td>" +
                     "<td><button data-toggle='modal' data-target='#exampleModal' type='button' class='btn btn-warning' onclick='"+onclicked+"' ><i class='bi bi-tools'></i>Actions</button></td>" +
                    "</tr>";
                    $("#exampleDepartament tbody").append(tr_str);
                }
                  $('#exampleDepartament').DataTable({
                        "ordering": true,
                        "responsive": true,
                        "lengthChange": false
                    });
            }
        });
}