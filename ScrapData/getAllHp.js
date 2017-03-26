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

var merk_hp = 'all';
var jenis_hp_url = [];
var path = 'page/_page.txt';
var content = fs.read(path);
var content_arr = content.split('\n');

casper.start();
casper.then(function()
{
	console.log('masuk');
	this.each(content_arr, function(page, url)
	{
		console.log(url);
		page.thenOpen(url, function()
		{
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
				fs.write('hp/hp_'+merk_hp+'.txt', urlHP, 'a');
			});
			// fs.write('hp.php', elemen, 'w');
		})
	});
});

casper.run();