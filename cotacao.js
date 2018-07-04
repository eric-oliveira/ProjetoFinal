/*---------------------------------------------
Script Cotação em Tempo Real (Yahoo! Finances)
*
Autor.....................Bruno Javan
E-mail....................brunojavan@gmail.com
URL.......................www.brunojavan.com.br
Versão....................0.290415 (Beta)
Última Atualização........29/04/2015
Linguagem.................JSON/jQuery
----------------------------------------------*/

$.getJSON( "http://query.yahooapis.com/v1/public/yql?q=select%20*%20from%20yahoo.finance.xchange%20where%20pair%3D%22USDBRL%2CEURBRL%2CARSBRL%2CMXNBRL%2CGBPBRL%2CJPYBRL%2CCLPBRL%2CPENBRL%2CUYUBRL%2CCHFBRL%2CCNHBRL%22&format=json&diagnostics=false&env=store%3A%2F%2Fdatatables.org%2Falltableswithkeys", function( data ) {
	
	/* USD start */
	var USD		=   ''+(data.query.results.rate[0].Name)+'';	//Nome da Moeda
	var USDrate =   ''+(data.query.results.rate[0].Rate)+'';	//Cotação da Moeda
	var USDbid 	=   ''+(data.query.results.rate[0].Bid)+'';		//Valor de Venda
	var USDask 	=   ''+(data.query.results.rate[0].Ask)+'';		//Valor de Compra
	
	$('#USD')		.html(USD);			//Exibe o nome da moeda dentro do elemento com ID "USD"
	$('#USD-rate')	.html(USDrate);		//Exibe a cotação da moeda dentro do elemento com ID "USD-rate"
	$('#USD-bid')	.html(USDbid);		//Exibe o valor de venda dentro do elementoo com ID "USD-bid"
	$('#USD-ask')	.html(USDask);		//Exibe o valor de compra dentro do elemento com ID "USD-ask"
	/* USD end */
	
	/* EUR start */
	var EUR 	=   ''+(data.query.results.rate[1].Name)+'';
	var EURrate =   ''+(data.query.results.rate[1].Rate)+'';
	var EURbid 	=   ''+(data.query.results.rate[1].Bid)+'';
	var EURask 	=   ''+(data.query.results.rate[1].Ask)+'';
	
	$('#EUR')		.html(EUR);
	$('#EUR-rate')	.html(EURrate);
	$('#EUR-bid')	.html(EURbid);
	$('#EUR-ask')	.html(EURask);
	/* EUR end */
	
	/* ARS start */
	var ARS 	=   ''+(data.query.results.rate[2].Name)+'';
	var ARSrate =   ''+(data.query.results.rate[2].Rate)+'';
	var ARSbid 	=   ''+(data.query.results.rate[2].Bid)+'';
	var ARSask 	=   ''+(data.query.results.rate[2].Ask)+'';
	
	$('#ARS')		.html(ARS);
	$('#ARS-rate')	.html(ARSrate);
	$('#ARS-bid')	.html(ARSbid);
	$('#ARS-ask')	.html(ARSask);
	/* ARS end */
	
	/* MXN start */
	var MXN 	=   ''+(data.query.results.rate[3].Name)+'';
	var MXNrate =   ''+(data.query.results.rate[3].Rate)+'';
	var MXNbid 	=   ''+(data.query.results.rate[3].Bid)+'';
	var MXNask 	=   ''+(data.query.results.rate[3].Ask)+'';
	
	$('#MXN')		.html(MXN);
	$('#MXN-rate')	.html(MXNrate);
	$('#MXN-bid')	.html(MXNbid);
	$('#MXN-ask')	.html(MXNask);
	/* MXN end */
	
	/* GBP start */
	var GBP 	=   ''+(data.query.results.rate[4].Name)+'';
	var GBPrate =   ''+(data.query.results.rate[4].Rate)+'';
	var GBPbid 	=   ''+(data.query.results.rate[4].Bid)+'';
	var GBPask 	=   ''+(data.query.results.rate[4].Ask)+'';
	
	$('#GBP')		.html(GBP);
	$('#GBP-rate')	.html(GBPrate);
	$('#GBP-bid')	.html(GBPbid);
	$('#GBP-ask')	.html(GBPask);
	/* GBP end */
	
	/* JPY start */
	var JPY 	=   ''+(data.query.results.rate[5].Name)+'';
	var JPYrate =   ''+(data.query.results.rate[5].Rate)+'';
	var JPYbid 	=   ''+(data.query.results.rate[5].Bid)+'';
	var JPYask 	=   ''+(data.query.results.rate[5].Ask)+'';
	
	$('#JPY')		.html(JPY);
	$('#JPY-rate')	.html(JPYrate);
	$('#JPY-bid')	.html(JPYbid);
	$('#JPY-ask')	.html(JPYask);
	/* JPY end */
	
	/* CLP start */
	var CLP 	=   ''+(data.query.results.rate[6].Name)+'';
	var CLPrate =   ''+(data.query.results.rate[6].Rate)+'';
	var CLPbid 	=   ''+(data.query.results.rate[6].Bid)+'';
	var CLPask 	=   ''+(data.query.results.rate[6].Ask)+'';
	
	$('#CLP')		.html(CLP);
	$('#CLP-rate')	.html(CLPrate);
	$('#CLP-bid')	.html(CLPbid);
	$('#CLP-ask')	.html(CLPask);
	/* CLP end */
	
	/* PEN start */
	var PEN 	=   ''+(data.query.results.rate[7].Name)+'';
	var PENrate =   ''+(data.query.results.rate[7].Rate)+'';
	var PENbid 	=   ''+(data.query.results.rate[7].Bid)+'';
	var PENask 	=   ''+(data.query.results.rate[7].Ask)+'';
	
	$('#PEN')		.html(PEN);
	$('#PEN-rate')	.html(PENrate);
	$('#PEN-bid')	.html(PENbid);
	$('#PEN-ask')	.html(PENask);
	/* PEN end */
	
	/* UYU start */
	var UYU 	=   ''+(data.query.results.rate[8].Name)+'';
	var UYUrate =   ''+(data.query.results.rate[8].Rate)+'';
	var UYUbid 	=   ''+(data.query.results.rate[8].Bid)+'';
	var UYUask 	=   ''+(data.query.results.rate[8].Ask)+'';
	
	$('#UYU')		.html(UYU);
	$('#UYU-rate')	.html(UYUrate);
	$('#UYU-bid')	.html(UYUbid);
	$('#UYU-ask')	.html(UYUask);
	/* UYU end */
	
	/* CHF start */
	var CHF 	=   ''+(data.query.results.rate[9].Name)+'';
	var CHFrate =   ''+(data.query.results.rate[9].Rate)+'';
	var CHFbid 	=   ''+(data.query.results.rate[9].Bid)+'';
	var CHFask 	=   ''+(data.query.results.rate[9].Ask)+'';
	
	$('#CHF')		.html(CHF);
	$('#CHF-rate')	.html(CHFrate);
	$('#CHF-bid')	.html(CHFbid);
	$('#CHF-ask')	.html(CHFask);
	/* CHF end */
	
	/* CNH start */
	var CNH 	=   ''+(data.query.results.rate[10].Name)+'';
	var CNHrate =   ''+(data.query.results.rate[10].Rate)+'';
	var CNHbid 	=   ''+(data.query.results.rate[10].Bid)+'';
	var CNHask 	=   ''+(data.query.results.rate[10].Ask)+'';
	
	$('#CNH')		.html(CNH);
	$('#CNH-rate')	.html(CNHrate);
	$('#CNH-bid')	.html(CNHbid);
	$('#CNH-ask')	.html(CNHask);
	/* CNH end */
	
});

money = function(n){
	var 
		c = 4, //Define o número de casas depois da vírgula
		d = ',', 
		t = '.', 
		s = n < 0 ? "-" : "", 
		i = parseInt(n = Math.abs(+n || 0).toFixed(c)) + "", 
		j = (j = i.length) > 3 ? j % 3 : 0;
	return s + (j ? i.substr(0, j) + t : "") + i.substr(j).replace(/(\d{3})(?=\d)/g, "$1" + t) + (c ? d + Math.abs(n - i).toFixed(c).slice(2) : "");
};