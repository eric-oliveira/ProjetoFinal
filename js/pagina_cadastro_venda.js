$(document).ready(function (){
	$('#valor').change(function(){
    	$("#cotacao").empty();
    	$.ajax({
        type: "GET", 
        url: "http://projetolkz.com.br/cotacao/USD",
        dataType: "json",
        cache: false,
        success: function(data) {
        			for(var i=0; i<data.length; i++){
        				console.log(data[i]);
        			}
        		} 
    	});
    })
});