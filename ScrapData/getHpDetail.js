var utils = require('utils');
var _ = require('lodash');
var json2csv = require('json2csv');
var os = require('os');
var fs = require('fs');

var casper = require('casper').create({
	pageSettings: {
        loadImages:  false        // The WebPage instance used by Casper will
        // loadPlugins: false         // use these settings
    },
    waitTimeout: 60000,
    verbose: true
});
var merk_hp = 'sisa';
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
		// console.log(url);
		page.thenOpen(url, function()
		{
			var title = this.getElementInfo('.specs-phone-name-title').text;

			var urlPhoto = this.getElementAttribute('.specs-photo-main img', 'src');

			var keys = _.reduce(this.getElementsInfo('#specs-list .ttl'), function(result, current){
				// var cek = current.text;
				if(!current.text.replace(/\s/g, '').length)
				{
					// current.text = 'kosong';
					result.push('Kosong');
					// console.log('ada 1234' + current.text + 'xxx');
				}
				else
				{
					// console.log(JSON.stringify(current.text));
					result.push(current.text);	
				}
				return result;

			}, []);


			var values = _.reduce(this.getElementsInfo('#specs-list .nfo'), function(result, current){
				result.push(current.text);
				return result;
			}, []);

			var results = {};
			for(var i=0; i<keys.length; i++)
			{
				results['Title'] = title;
				results['UrlPhoto'] = urlPhoto;
				results[keys[i]] = values[i];
			}

			// mainResult.push(results);
			console.log(url);
			fs.write('detail_hp/daftar_hp_'+merk_hp+'.json', JSON.stringify(results) + ',', 'a');
			// utils.dump(results);
			// var csv = json2csv({data: mainResult, fields: keys});
		});
	});
});

casper.run();