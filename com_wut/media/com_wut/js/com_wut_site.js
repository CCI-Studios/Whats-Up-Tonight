var wut = {};
wut.date = window.location.href.match(/date=(\d*-\d*-\d*)/);
if (wut.date.length > 1) {
	wut.date = wut.date[1];
}
wut.category = '';
wut.offset = '';

window.addEvent('domready', function() {

	var clickedDate = function(event) {
		event.preventDefault();
		var parent = this.getParent('div'),
			date = parent.get('data-date');
		if (wut.date !== date) {
			wut.date = date;
			updateContents();
		}
	},
	clickedCategory = function(event) {
		event.preventDefault();
		var category = this.get('data-category');
		if (wut.category !== category) {
			wut.category = category;
			updateContents();
		}
	},
	clickedPage = function(event) {
		event.preventDefault();
		event.preventDefault();
		var offset = this.href.match(/offset=(\d*)/);
		offset = offset[1];
		if (wut.offset !== offset) {
			wut.offset = offset;
			updateContents();
		}
	},
	updateContents = function() {
		var url = '/index.php?option=com_wut'+
					'&date='+wut.date+
					'&category='+wut.category+
					'&offset='+wut.offset+
					'&tmpl=component';

		dateModules = $(dateSelector);
		new Request.HTML({
			url: url+'&view=ups',
			onComplete: function(html) {
				upscontainer.empty();
				upscontainer.adopt(html);
			}

		}).get();
		new Request.HTML({
			url: url+'&view=dates&layout=widget',
			onComplete: function(html) {
				dateContainers.each(function(dc) {
					dc.empty();
					dc.adopt(html);
				});
			}
		}).get();
	},
	dateSelector = '.mod_wutdates',
	categorySelector = '.mod_wutcategories',
	paginationSelector = '.pagination',
	upsSelector = '',
	container = $('wrapper');

	var dateContainers = $$(dateSelector),
		categoryContainers = $$(categorySelector),
		paginationContainers = $$(paginationSelector),
		upscontainer = $('com_wut-ups');


	container.addEvent('click:relay(.mod_wutdates a)', clickedDate);
	container.addEvent('click:relay(.mod_wutcategories a)', clickedCategory);
	container.addEvent('click:relay(.pagination a)', clickedPage);

	container.addEvent('click:relay(.com_wut-ups .button)', function(event) {
		event.preventDefault();
		this.getParent('.span4').toggleClass('open');
	});
});