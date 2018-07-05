$(document).ready(function () {
    // URL com a Query do YQL
    var url = "http://query.yahooapis.com/v1/public/yql?q=select%20*%20from%20yahoo.finance.xchange%20where%20pair%3D%22USDBRL%22&format=json&diagnostics=false&env=store%3A%2F%2Fdatatables.org%2Falltableswithkeys";
    $('#valor').change(function(){
        // Obtem e trata os dados em JSON
        $.getJSON( url, function( data ) {

            // Agrupa os dados em HTML
            try {
            var indices = data.query.results.rate[0].Rate;
            } catch(err) {
            var indices = err.message;
            }

            // Mostra a cotação do dolar na tag <div id="info"></div>
            console.log(indices);
        });
    })
});