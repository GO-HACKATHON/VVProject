var utils = require('utils');
var _ = require('lodash');
// var json2csv = require('json2csv');
// var os = require('os');
var fs = require('fs');

var casper = require('casper').create({
	pageSettings: {
        loadImages:  false        // The WebPage instance used by Casper will
        // loadPlugins: false         // use these settings
    },
    waitTimeout: 60000,
    verbose: true
});
var merk_hp = 'google';
var path = 'hp/hp_'+merk_hp+'.txt';
var content = fs.read(path);
var content_arr = content.split('\n');
var mainResult = [];

casper.start();
casper.then(function()
{
	console.log('masuk');
	// fs.write('detail_hp/daftar_hp_'+merk_hp+'.json', '[', 'a');
	this.each(content_arr, function(page, url)
	{
		console.log(url);
		page.thenOpen(url, function()
		{
			var title = this.getElementInfo('.specs-phone-name-title').text;
			console.log(title);
			fs.write('detail_hp/daftar_nama_hp_'+merk_hp+'.json', title + '\n', 'a');
			// utils.dump(results);
			// var csv = json2csv({data: mainResult, fields: keys});
		});
	});
});

casper.run();