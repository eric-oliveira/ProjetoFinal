$(document).ready(function () {
	var paises = null;
	var moedas = null;
    $.ajax({
        type: "GET", 
        url: "../paises.json",
        cache: false,
        success: function(retorno) {
                paises = retorno;
                $.each(paises,function(i, pais){
                    $('#pais').append($('<option>', {
						                value: paises[i].pais,
						                text: paises[i].pais
						            }));
                });
        } 
    });
    $('#pais').change(function(){
    	$("#moeda").empty();
    	$.ajax({
        type: "GET", 
        url: "../moedas.json",
        cache: false,
        success: function(retorno) {
                var moedas = retorno;
                var sigla;
                $.each(moedas,function(i, moeda){
                    for (var j = 0; j < paises.length; j++) {
                        if($('#pais').val() === paises[j].pais){
                            sigla = paises[j].sigla;
                            j++;
                        }
                    }
                    if(moedas[i].sigla === sigla){
            			$('#moeda').append($('<option>', {
					                value: moedas[i].sigla,
					                text: moedas[i].moeda
					            }));
                	}
                });
        } 
    });
    })  
});

