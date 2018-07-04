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
});

