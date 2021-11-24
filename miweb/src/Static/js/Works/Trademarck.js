/* global bootstrap: false */
(function () {
    let url	='../Controller/Trademark.php' 
    loadingdata(url);
})()
function UpdateDelete(controller){
   
    let nametrade = $('#nameTredemarktxt').val()   
    let idtrade  = $('#idTredemarktxt').val()   
    if (controller==='1'){
        $('#prosecution').val('3')
        $('#idtrade').val(idtrade)
        $('#nametrade').val('INACTIVE')
         let url	='../Controller/Trademark.php'  
        let cadena	=$("#Trademarck").serialize() 
        ajax(url,cadena)
        $('#exampletrade').dataTable().fnClearTable();
        $('#exampletrade').dataTable().fnDestroy()
        $('#prosecution').val('4')
        loadingdata(url);
        
        

    }else{
        $('#prosecution').val('5')   
        $('#idtrade').val(idtrade)
        $('#nametrade').val(nametrade)
        let url	='../Controller/Trademark.php'  
        let cadena	=$("#Trademarck").serialize() 
        ajax(url,cadena)
       
        $('#exampletrade').dataTable().fnClearTable();
        $('#exampletrade').dataTable().fnDestroy()
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
        let url	='../Controller/Trademark.php'  
        let cadena	=$("#Trademarck").serialize() 
        ajax(url,cadena)
        $('#exampletrade').dataTable().fnClearTable();
        $('#exampletrade').dataTable().fnDestroy()
        $('#prosecution').val('4')
        loadingdata(url);
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
                    let id = response[i].id_trade;
                    let namejson = response[i].name;
                    let name=namejson.toString();
                    let  datas ='"'+id+'","'+name+'"';
                    let onclicked = 'setvaluesTrade('+datas+')';
                    var tr_str = "<tr>" +
                    "<td>"+ (i+1) + "</td>" +
                    "<td>"+ name + "</td>" +
                     "<td><button data-toggle='modal' data-target='#exampleModal' type='button' class='btn btn-warning' onclick='"+onclicked+"' ><i class='bi bi-tools pr-3'></i>Actions</button></td>" +
                    "</tr>";
                    $("#exampletrade tbody").append(tr_str);
                }
                  $('#exampletrade').DataTable({ 
                        "ordering": true,
                        "responsive": true,
                        "lengthChange": false
                    });
            }
        });
}