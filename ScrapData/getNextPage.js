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

var url = 'http://gsmarena.com/toshiba-phones-44.php';

casper.start();
casper.thenOpen(url, function()
{
	var elemen_next_page = this.getElementsAttribute('.review-nav .nav-pages a', 'href');
	console.log(elemen_next_page);
	var links_page = _.reduce(elemen_next_page, function(acc, current){
	    	acc.push('http://www.gsmarena.com/' + current + '\n');
	    	return acc;
	    }, []);

	links_page.push(url + '\n');
	console.log(links_page);
	this.each(links_page, function(newPage, url)
	{
		console.log('halaman: '+url);
		fs.write('page/_page.txt', url, 'a');
	});
});

casper.run();