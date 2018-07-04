$(document).ready(function (){
	$('#valor').change(function(){
    	$("#cotacao").empty();
    	$.get("http://projetolkz.com.br/cotacao/USD", function(resultado){
			console.log(resultado);
		})
    })
});


