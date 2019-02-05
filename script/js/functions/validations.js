(function ($) {
    

    function validate_boleto() {
        var validated = 0;
        if ($("#select_origen").val()) {
            validated++;
            if ($("#select_destino").val()) {
                validated++;
            }
            if ($("#date_from").val()) {
                validated++;
            }
        }
        return validated;

    }
    
    function validate_pasajeros(){
        var x = 0;
        var y = 0;
        $pasajeros.boletos.splice(0,$pasajeros.boletos.length)
       
            $("#inicio-pasajeros form #contador input").each(function(i){
            y = parseInt($(this).val());
            x = x + y;
                if($(this).val() != 0){
                   $pasajeros.boletos.push({
                        "tipo_pasajero": $(this).attr("name"),
                        "cantidad": parseInt($(this).val())
                    
                    }); 
                }
                
            });

        return x;
        
    }
   
    window.validate_boleto=validate_boleto;
    window.validate_pasajeros=validate_pasajeros;
    

})(jQuery)
