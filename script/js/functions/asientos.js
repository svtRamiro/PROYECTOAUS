
jQuery( document ).ready(function( $ ) {
    
  $(".asiento-bus").on("click",function(){
      
    var baseurl = window.location.origin+window.location.pathname;
    if($(this).hasClass("libre") && cantidad_asientos != 0){
        $(this).removeClass("libre").addClass("seleccionado");
        if($('img', this).hasClass("top")){
            $('img', this).attr('src', baseurl + "/script/img_autotransportes/autobus/asiento_seleccionado_arriba.png");
            
        }else{
            $('img', this).attr('src', baseurl + "/script/img_autotransportes/autobus/asiento_seleccionado_abajo.png");
        }
        cantidad_asientos--;
        
    }else{
        if($(this).hasClass("seleccionado")){
        $(this).removeClass("seleccionado").addClass("libre");
        if($('img', this).hasClass("top")){
            $('img', this).attr('src', baseurl + "/script/img_autotransportes/autobus/asiento_vacio_arriba.png");
            
        }else{
            $('img', this).attr('src', baseurl + "/script/img_autotransportes/autobus/asiento_vacio_abajo.png");
        }
         cantidad_asientos++;
    }
        
        
    }
      
});
});