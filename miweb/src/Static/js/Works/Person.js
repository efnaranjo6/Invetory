(function () {
    let url	='../Controller/Person.php' 
   loadingdata(url);
})()
function cleartable(url){
    $('#examplePerson').dataTable().fnClearTable()
    $('#examplePerson').dataTable().fnDestroy()
    $('#prosecution').val('4')
    loadingdata(url)
}
function UpdateDelete(controller){
    let idPerson  = $('#idPerson').val()  
    let np= $('#nameptxt').val()   
    let nlp= $('#lastnameptxt').val()  
    let idcp= $('#idcodeptxt').val() 
    let dbp= $('#datebornptxt').val()  
    let  dp= $('#sldepartament').val()   
    let url	='../Controller/Person.php'     
    if (controller==='1'){
        $('#prosecution').val('3')
        $('#idPerson').val(idPerson)
        $('#statusPerson').val('INACTIVE')
        let cadena	=$("#Person").serialize()  
        ajax(url,cadena)
        cleartable(url)
    }else{
        $('#prosecution').val('5')   
        $('#idPerson').val(idPerson)
        $('#nptxt').val(np) 
        $('#nltxt').val(nlp) 
        $('#citxt').val(idcp)
        $('#dbtxt').val(dbp)
        $('#dptxt').val(dp)
        let cadena	=$("#Person").serialize()  
        ajax(url,cadena)
        cleartable(url)
    }
}
function insert(){ 
    $('#prosecution').val('1')
    if($('#namePerson').val()==="" 
        || $("#namePerson").val()==='' || $("#lastnamePerson").val()==='' 
        || $("#idcodePerson").val()==='' || $("#datebornPerson").val()===''){
        alert('typing the fields');
    }
    else{
        let url	='../Controller/Person.php'  
        let cadena	=$("#Person").serialize() 
        ajax(url,cadena)
        cleartable(url)
        $('#examplePerson').dataTable().fnClearTable()
        $('#examplePerson').dataTable().fnDestroy()
    }
}
function departamentform(iddp,namedp){
    console.log(iddp)
    $('#departamentI').val(iddp);
    $('#nameD').val(namedp);
}

function loadingdepartamen(){
    $('#exampleDepartament').dataTable().fnClearTable()
    $('#exampleDepartament').dataTable().fnDestroy()
      $.ajax({  
            async: true,
            url: '../Controller/Departament.php' ,
            type: 'get',
            dataType: 'JSON',
            success: function(response){
                var len = response.length;
                for(var i=0; i<len; i++){
                    let id = response[i].id_Departament;
                    let namejson = response[i].name;
                    let name=namejson.toString();
                    let  datas ='"'+id+'","'+name+'"';
                    let onclicked = 'departamentform('+datas+')';
                    var tr_str = "<tr>" +
                    "<td>"+ (i+1) + "</td>" +
                    "<td>"+ name + "</td>" +
                     "<td><button  type='button' class='btn btn-success' onclick='"+onclicked+"' ><i class='bi bi-plus-circle-dotted'></i> </button></td>" +
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

function loadingdata(url){
      $.ajax({  
            url: url ,
            type: 'get',
            dataType: 'JSON',
            success: function(response){
                var len = response.length;
                for(var i=0; i<len; i++){
                    let id = response[i].id_person;
                    let name = response[i].name_person;
                    let lastname = response[i].lastname_person;
                    let codeid = response[i].codeid_person;
                    let dateborn = response[i].dateborn_person;
                    let departament = response[i].name_departament ;
                    let iddepartament = response[i].id_departament ;
                    let  datas ='"'+id+'","'+name+'","'+lastname+'","'+codeid+'","'+dateborn+'","'+iddepartament+'","'+departament+'"';
                    let onclicked = 'setvaluesPerson('+datas+')';
                    var tr_str = "<tr>" +
                    "<td>"+ (i+1) + "</td>" +
                    "<td>"+ name + "</td>" +
                    "<td>"+ lastname + "</td>" +
                    "<td>"+ codeid + "</td>" +
                    "<td>"+ dateborn + "</td>" +
                    "<td>"+ departament + "</td>" +
                     "<td><button  data-target='#exampleModal' type='button' class='btn btn-warning' onclick='"+onclicked+"' ><i class='bi bi-tools'></i> Actions</button></td>" +
                    "</tr>";
                    $("#examplePerson tbody").append(tr_str);
                }
                  $('#examplePerson').DataTable({
                        "ordering": true,
                        "responsive": true,
                        "lengthChange": false,
                        "iDisplayLength": 10
                    });
            }
        });
}
function cargarselect(){
      $.ajax({  
            url: '../Controller/Departament.php' ,
            type: 'get',
            dataType: 'JSON',
            success: function(response){
                var len = response.length;
                for(var i=0; i<len; i++){
                    let id = response[i].id_Departament;
                    let name = response[i].name;
                    var tr_str = "<option value="+ id+">"+ name + "</option>";
                    $("#sldepartament").append(tr_str);
                }
        
            }
        });
}