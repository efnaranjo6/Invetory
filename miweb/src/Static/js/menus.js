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
  var active = activeA
   var add= $('#'+active+'').removeClass('nav-link text-white').addClass('nav-link active')  
  switch (active) {
    case 'start': 
      add 
      $('#trademarck').removeClass('nav-link active').addClass('nav-link text-white') 
      $('#gato').removeClass('nav-link active').addClass('nav-link text-white')      
      break;  
    case 'trademarck': 
      add 
      var url='../View/Works/Trademarck.php'
      $('#start').removeClass('nav-link active').addClass('nav-link text-white')
      $('#gato').removeClass('nav-link active').addClass('nav-link text-white')    
      loadpage(url)
    break; 
  case 'gato':
    add 
    $('#trademarck').removeClass('nav-link active').addClass('nav-link text-white')  
    $('#start').removeClass('nav-link active').addClass('nav-link text-white')      
    break;
  default:
    console.log('default');
}
}
function loadpage(url){
  $( "#selectionpage" ).load( url );
}



















