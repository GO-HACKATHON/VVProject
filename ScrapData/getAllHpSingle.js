var utils = require('utils');
var _ = require('lodash');
var fs = require('fs');

var casper = require('casper').create({
	pageSettings: {
        loadImages:  false,        // The WebPage instance used by Casper will
        loadPlugins: false         // use these settings
    },
    verbose: true
});

var jenis_hp_url = [];
var url = 'http://gsmarena.com/google-phones-107.php';

casper.start();
casper.thenOpen(url, function()
{
	console.log('masuk');
	console.log('open url: ' + url);
	var elemen = this.getElementsAttribute('#review-body li a', 'href');
	// var elemen = this.getPageContent();
	console.log(elemen);
	var links = _.reduce(elemen, function(acc, current){
	   	acc.push('http://gsmarena.com/' + current + '\n');
	   	return acc;
	   }, []);

	this.each(links, function(newPage, urlHP)
	{
		console.log('tulis'+urlHP);
		fs.write('hp/google_lg.txt', urlHP, 'a');
	});
});

casper.run();