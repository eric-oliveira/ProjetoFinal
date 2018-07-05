$(document).ready(function () {
    endpoint = 'latest'
    access_key = '44692921a9c2d600bc19c3bc0138538e';

    from = 'BRL';
    to = 'USD';
    amount = '10';

    $('#valor').change(function(){
        // get the most recent exchange rates via the "latest" endpoint:
        $.ajax({
            url: 'http://data.fixer.io/api/' + endpoint + '?access_key=' + access_key,   
            dataType: 'jsonp',
            success: function(json) {

                // exchange rata data is stored in json.rates
                console.log(json.rates[from]);
                
                // base currency is stored in json.base
                console.log(json.base);
                
                // timestamp can be accessed in json.timestamp
                console.log(json.timestamp);
            }
        });
    });
});