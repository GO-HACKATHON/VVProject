var utils = require('utils');
var _ = require('lodash');
var os = require('os');
var fs = require('fs');
var merk_hp = 'apple';
var path = 'namahp/9.txt'; 
var content = fs.read(path);
var content_arr = content.split('\n');
var mainResult = [];

var casper = require('casper').create({
	pageSettings: {
        loadImages:  false     // The WebPage instance used by Casper will
        // loadPlugins: false         // use these settings
    },
    waitTimeout: 60000,
    verbose: true,

});

var url = 'https://www.tokopedia.com/';
console.log('awal');

casper.start();
casper.thenOpen(url, function()
{
	console.log('masuk');
	// fs.write('link_jual_tokped/hasil.json', '[', 'a');
	this.each(content_arr, function(page, urls)
	{

		var whitespace = urls.replace(/ /g, '+');

		page.thenOpen('https://www.tokopedia.com/search?st=product&q=' + whitespace, function()
		{
			console.log('https://www.tokopedia.com/search?st=product&q=' + whitespace);

			this.waitForSelector('.detail__name', function () {
			  var pass = true;
		      var itemListUrl = this.getElementsAttribute('.product-card.ng-scope a', 'href');
		      
		      var filteredItemListUrl = _.filter(itemListUrl, function (current) {
		          return _.split(current, '/').length === 5;
		      });

		      if (filteredItemListUrl.length === 0) {
		          pass = false;
		      }
		      
		      if(pass)
		      {
		      		var itemListImageUrl = this.getElementsAttribute('.product-card.ng-scope img', 'src');
					var filteredItemListImageUrl = _.filter(itemListImageUrl, function (current) {
					return _.split(current, '/').length === 12;
					});

					var itemListTitleInfo = this.getElementsInfo('.product-card.ng-scope .detail__name');
					var itemListTitle = _.reduce(itemListTitleInfo, function (result, current) {
					result.push(current.text);
					return result;
					}, []);

					var result = {};
					for (var idx = 0; idx < itemListTitle.length; idx++) {
					// var obj = {};
					result.title = itemListTitle[idx];
					result.url = filteredItemListUrl[idx];
					result.imageUrl = filteredItemListImageUrl[idx];
					// result.push(obj);
					}
					// utils.dump(result);
					fs.write('link_jual_tokped/hasil.json', JSON.stringify(result) + ',', 'a');	
		      }
		      
		    });
		});
	});
});

casper.run();