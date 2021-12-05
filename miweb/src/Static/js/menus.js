/* global bootstrap: false */
(function () {
  'use strict'
  var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
  tooltipTriggerList.forEach(function (tooltipTriggerEl) {
    new bootstrap.Tooltip(tooltipTriggerEl)
  })
})()
function Hidden(){
  var value= $('#ValueMenuMobile').val();
   if(value==1){
      $("#asidermemu").hide(500);
      $( ".b-example-divider" ).css( "width", "0px" );
      $( "#paddingMenu" ).removeClass('d-flex flex-column p-3 text-white bg-dark').addClass('d-flex flex-column text-white bg-dark')
      $('#ValueMenuMobile').val('0');
   }
   else{
      $("#asidermemu").show(500 );
      $( ".b-example-divider" ).css( "width", "10px" );
      $( "#paddingMenu" ).removeClass('d-flex flex-column text-white bg-dark').addClass(' d-flex flex-column p-3 text-white bg-dark')
      $('#ValueMenuMobile').val('1');
   }
}

function active(activeA){
  let active = activeA
  let add= $('#'+active+'').removeClass('nav-link text-white').addClass('nav-link active')  
  switch (active) {
    case 'start': 
      add 
      $('#trademarck').removeClass('nav-link active').addClass('nav-link text-white') 
      $('#departament').removeClass('nav-link active').addClass('nav-link text-white') 
      $('#person').removeClass('nav-link active').addClass('nav-link text-white')   
      $('#type').removeClass('nav-link active').addClass('nav-link text-white')        
      break;  
    case 'trademarck': 
      add 
      let url='../View/Works/Trademarck.php'
      $('#start').removeClass('nav-link active').addClass('nav-link text-white')
      $('#departament').removeClass('nav-link active').addClass('nav-link text-white')  
      $('#person').removeClass('nav-link active').addClass('nav-link text-white')
      $('#type').removeClass('nav-link active').addClass('nav-link text-white')        
      loadpage(url)
    break; 
  case 'departament':
    add 
    let urld='../View/Works/Departament.php'
    $('#trademarck').removeClass('nav-link active').addClass('nav-link text-white')  
    $('#start').removeClass('nav-link active').addClass('nav-link text-white')     
    $('#person').removeClass('nav-link active').addClass('nav-link text-white') 
    $('#type').removeClass('nav-link active').addClass('nav-link text-white')     
    loadpage(urld) 
    break;
  case 'person':
    add 
    let urlp='../View/Works/Person.php'
    $('#trademarck').removeClass('nav-link active').addClass('nav-link text-white') 
    $('#departament').removeClass('nav-link active').addClass('nav-link text-white')   
    $('#start').removeClass('nav-link active').addClass('nav-link text-white') 
    $('#type').removeClass('nav-link active').addClass('nav-link text-white')     
    loadpage(urlp) 
    break; 
  case 'type':
    add 
    let urlt='../View/Works/Type.php'
    $('#person').removeClass('nav-link active').addClass('nav-link text-white') 
    $('#trademarck').removeClass('nav-link active').addClass('nav-link text-white') 
    $('#departament').removeClass('nav-link active').addClass('nav-link text-white')   
    $('#start').removeClass('nav-link active').addClass('nav-link text-white')     
    loadpage(urlt) 
    break;      
  default:
    console.log('default');
}
}
function loadpage(url){
  $("#selectionpage").load(url);
}



















