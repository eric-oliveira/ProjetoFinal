$(document).ready(function () {
    var endpoint = 'latest'
    var access_key = '44692921a9c2d600bc19c3bc0138538e';

    var from = $('#moedaEmpresa').val();
    var to = 'USD';
    var cotacaoFrom;
    var cotacaoTo;
    //Recupera a cotação
    $.ajax({
        url: 'http://data.fixer.io/api/' + endpoint + '?access_key=' + access_key,   
        dataType: 'jsonp',
        success: function(json) {

            cotacaoFrom = json.rates[from];
            //Rates->Sigla da Moeda
            cotacaoTo = json.rates[to];
        }
    });

    $('#valor').change(function(){
        var cotacao = (cotacaoTo / cotacaoFrom) * $('#valor').val();
        $('#cotacao').val(cotacao.toFixed(2));
    });
});