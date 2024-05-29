$(function(){
  if( window.innerWidth < 990 ){
    $("#TituloTopo").html('TITANS').attr('style', 'color: #fff; margin-left: 1rem');
    $("#heading-title").html('');
    $("#heading-topo").addClass('logo mr-6');
  }else{
    $("#heading-title").html('Titans');
    $("#heading-topo").addClass('logo mr-auto');
  }
});