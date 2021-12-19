
(function () {
    let urle	='../Controller/Element.php' 
    loadingdata(urle);
    typeSelect(1);  
    $('#tablecomponet').DataTable({
        "ordering": false,
        "responsive": true,
        "lengthChange": false,
        "searching": false
    });
})()
var table="" 
var count=0
function tableComponent(){
    if( $('#specifications').val()==='' || 
        $('#selectcomponet').val()==='' ||
        $('#selectype').val()===''
    ){
       alert('types fields')
    }
    else{
        count++
        $('#tablecomponet').dataTable().fnClearTable()
        $('#tablecomponet').dataTable().fnDestroy()
        let selectype= $('#selectype :selected').text()  
        let selectcomponet= $('#selectcomponet :selected').text()    
        let idselectcomponet= $('#selectcomponet').val()          
        let specifications= $('#specifications').val()
        tr="<tr><td>"
                +selectype+"</td><td>"+selectcomponet +"<input type='hidden' id='selectcomponett"+count+"' name='selectcomponett"+count+"' value='"+idselectcomponet+"'/></td><td>"+specifications+"<input type='hidden' id='specifi"+count+"' name='specifi"+count+"' value='"+specifications+"'/></td></tr>"
        table=table+tr 
        $("#tablecomponet tbody ").append(table);
        $('#tablecomponet').DataTable({
                        "ordering": false,
                        "responsive": true,
                        "lengthChange": false,
                        "searching": false
                    });
    }               
    $('#array').val(count);
}
function typeSelect(control){
    $('#prosecution').val('7')
    let cadena	=$("#Element").serialize() 
    let url	='../Controller/Element.php' 
    TS(url,cadena,control)    
}
function componet(control){     
    $('#prosecution').val('8')
    if(control===1){
        varia=$('#selectype :selected').val()
       $("#tiper").val(varia);
        $('#selectcomponet option').remove()}
    else{
        varia=$('#selectypem :selected').val()
        vaia2 =$("#tiper").val(varia);
        $('#selectcomponetm option').remove()
    }
    let cadena	=$("#Element").serialize() 
    let url	='../Controller/Element.php'
   Callcomponet(url,cadena,control)
} 
function cleartable(url){
    $('#exampleElement').dataTable().fnClearTable()
    $('#exampleElement').dataTable().fnDestroy()
    $('#prosecution').val('4')
    loadingdata(url)
}
function UpdateDelete(controller){
    let model= $('#modelElementmd').val()
    let serial= $('#serialElementmd').val()
    let observation= $('#observationElementmd').val()
    let idtrade= $('#strademd').val()
    let idtype= $('#stypemd').val()   
    let idacquisition  = $('#sactionmd').val()  
    let url	='../Controller/Element.php'     
    if (controller==='1'){
        $('#prosecution').val('3')
        let cadena	=$("#Element").serialize()  
        ajax(url,cadena)
        cleartable(url)
    }else{
        $('#prosecution').val('5')   
        $('#modElement').val(model)
        $('#serElement').val(serial)
        $('#obserElement').val(observation)
        $('#tradElement').val(idtrade)
        $('#tyElement').val(idtype)
        $('#acqElement').val(idacquisition)
        let cadena	=$("#Element").serialize()  
        ajax(url,cadena)
        cleartable(url)
    }
}
function insert(){ 
    $('#prosecution').val('1')
    if( $('#modelElement').val()==="" ||
        $('#serialElement').val()==="" ||
        $('#strade').val()==="" ||
        $('#stype').val()==="" ||
        $('#saction').val()==="" ||
        $('#observationElement').val()===""
        ){
        alert('typing all fields');
    }
    else{
        let url	='../Controller/Element.php'  
        let cadena	=$("#Element").serialize() 
        ajax(url,cadena)
        cleartable(url)
    }
}
function setparamts(id,name,numcontrol){
    if (numcontrol==='1') {
        $('#strade').val(name)
        $('#sidtrade').val(id)
    } else if(numcontrol==='2'){
        $('#stype').val(name)
        $('#sidtype').val(id)
    }else{
        $('#saction').val(name)
        $('#sidaction').val(id)
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
                        let id = response[i].id_element;
                        let name = response[i].model_element
                        let serial = response[i].serial_element
                        let observation = response[i].observation_element   
                        let namec = response[i].name_acquisition
                        let namet = response[i].name_trademark
                        let nametp = response[i].name_type
                        let idc = response[i].id_acquisition
                        let idt = response[i].id_trademark
                        let idtp = response[i].id_type
                        let  datas ='"'+id+'","'+name+'","'+serial+'","'+observation+'","'+namec+'","'+namet+'","'+nametp+'","'+idc+'","'+idt+'","'+idtp+'"';
                        let onclicked = 'setvaluesElement('+datas+')';
                        var tr_str = "<tr>" +
                        "<td>"+(i+1)+"</td>" +
                        "<td>"+ name + "</td>" +
                        "<td>"+ serial + "</td>" +
                        "<td>"+ observation + "</td>" +
                        "<td>"+ namec + "</td>" +
                        "<td>"+ nametp + "</td>" +
                        "<td><button  class='btn btn-sm btn-danger' onclick='"+onclicked+"'> actions</button></td> "+
                        "</tr>";
                    $("#exampleElement tbody").append(tr_str);
                }
         
               $('#exampleElement').DataTable({
                        "ordering": true,
                       "responsive": true,
                        "lengthChange": false
                    });
               }
        });
}
function tableselect(url,varname){
      $.ajax({  
            async: true,
            url: url ,
            type: 'get',
            dataType: 'JSON',
            success: function(response){
                var len = response.length;
                for(var i=0; i<len; i++){
                    if(varname===1){  id = response[i].id_trade  }
                    else if(varname===2){ id = response[i].id_type }
                    else{id = response[i].id_acquisition}
                    let namejson = response[i].name;
                    let name=namejson.toString();
                    let  datas ='"'+id+'","'+name+'","'+varname+'"';
                    let onclicked = 'setparamts('+datas+')';
                    var tr_str = "<tr>" +
                    "<td>"+ (i+1) + "</td>" +
                    "<td>"+ name + "</td>" +
                     "<td><button data-toggle='modal' data-target='#exampleModal' type='button' class='btn btn-success' onclick='"+onclicked+"' ><i class='bi bi-plus-circle-dotted'></i></button></td>" +
                    "</tr>";
                    $("#exampleSelect tbody").append(tr_str);
                }   
                  $('#exampleSelect').DataTable({
                        "ordering": true,
                        "responsive": true,
                        "lengthChange": false
                    });
            }
        });
}
function TS(url,cadena,control){
      $.ajax({  
            async: true,
            url: url ,
            type: 'post',
            dataType: 'JSON',
            data:cadena,
            success: function(data){
                var len = data.length;
                let concatselc="<option>choose</option>"
                for(var i=0; i<len; i++){
                    let idt = data[i].id_typecomponent;
                    let namet = data[i].name_typecomponent;
                    concatselc =concatselc +"<option value='"+idt+"'>"+namet+"</option>" 
                }
                if (control===1) {
                    $("#selectype").append(concatselc);
                }
                else{
                     $("#selectypem").append(concatselc);
                }
            }
        });
}
function Callcomponet(url,cadena,control){
      $.ajax({  
            async: true,
            url: url ,
            type: 'post',
            dataType: 'JSON',
            data:cadena,
            success: function(data){  
                var len = data.length;
                for(var i=0; i<len; i++){
                    if(control===1){
                        select ="#selectcomponet";
                    }
                    else {
                        select= "#selectcomponetm"
                    }
                    let idc = data[i].id_component;
                    let namec = data[i].name_component;
                    var slectcn_str = "<option value='"+idc+"'>"+namec+"</option>" 
                    $(select).append(slectcn_str);
                }

            }
        });
}
function selectelememt(typeselect){
    $('#exampleSelect').dataTable().fnClearTable()
    $('#exampleSelect').dataTable().fnDestroy()
    let url =''
    let name =''
    if (typeselect===1) {
        url = '../Controller/Trademark.php'
        name=1
        tableselect(url,name)
    }
    else if (typeselect===2){
        url = '../Controller/Type.php'
        name=2
        tableselect(url,name)
    }
    else{
        url= '../Controller/Acquisition.php'
        name=3
        tableselect(url,name)
    }
};
function elementmodal(controller){
    if(controller===0){
        $('#delete').prop("disabled", false);
        $('#update').prop("disabled", false);
    }
    else{
        $('#delete').prop("disabled", true);
        $('#update').prop("disabled", true);
    }
}
function detaillist(id){
    $('#prosecution').val('9')
    $('#idElement').val(id)
    let cadena	=$("#Element").serialize() 
    $('#tabledatil').dataTable().fnClearTable()
    $('#tabledatil').dataTable().fnDestroy()
    $.ajax({  
        async: true,
        url: '../Controller/Element.php' ,
        type: 'post',
        dataType: 'JSON',
        data:cadena,
        success: function(data){
            var len = data.length;
            for(var i=0; i<len; i++){
                let iddt = data[i].id_detailelement
                let namec = data[i].name_component
                let namet = data[i].name_typecomponent
                let dt = data[i].detail_detailelement
                let  datas ='"'+iddt+'"';
                let onclicked='setDelete('+datas +')'
                var tr_str = "<tr>" +
                "<td>"+ namet + "</td>" +
                "<td>"+ namec + "</td>" +
                "<td>"+ dt + "</td>" +
                "<td><button class='btn btn-danger' onclick='"+onclicked+"' ><i class='bi bi-trash2'></i></button></td>" +
                "</tr>";
                $("#tabledatil").append(tr_str)
            }
            $('#tabledatil').DataTable({
                "ordering": true,
                "responsive": true,
                "lengthChange": false,
                "searching": false
             });
        }
    }); 
     typeSelect(2);  
 
}
function componetInsert(){
    $('#prosecution').val('10')
    let componet=$('#selectcomponetm').val()
    let specification=$('#specificationsm').val()
    $('#componentmd').val(componet)
    $('#observationmd').val(specification)
    let url	='../Controller/Element.php'  
    let cadena	=$("#Element").serialize() 
    ajax(url,cadena)
    idelement=$('#idElement').val()
    detaillist(idelement)
    $('#selectypem option').remove()
  
}
function setDelete(iddt){
    $('#prosecution').val('11')    
    $('#iddt').val(iddt)
    let url	='../Controller/Element.php'  
    let cadena	=$("#Element").serialize() 
    ajax(url,cadena)
    idelement=$('#idElement').val()
    detaillist(idelement)
}
function optionselect(url,varname){
      $.ajax({  
            async: true,
            url: url ,
            type: 'get',
            dataType: 'JSON',
            success: function(response){
                var len = response.length;
                for(var i=0; i<len; i++){
                    if(varname===1)
                    {  
                        id = response[i].id_trade 
                        namev =response[i].name 
                        controlappen='#strademd'
                    }
                    else if(varname===2)
                    { 
                        id = response[i].id_type
                        namev =response[i].name 
                        controlappen='#stypemd'
                    }
                    else
                    {
                        id = response[i].id_acquisition
                        namev =response[i].name 
                       controlappen='#sactionmd'
                    }
                     appenoption='<option value="'+id+'">'+namev+'</option>'  
                    $(controlappen).append(appenoption);
                }   
            }
        });
}
