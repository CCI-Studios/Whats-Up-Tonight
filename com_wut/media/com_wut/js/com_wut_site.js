var wut = wut || {};

wut.templates = wut.templates || {};
wut.templates.date = '<div data-date="{date}">'+
						'<a href="{href}">'+
							'<div class="day">{dayName}</div>'+
							'<div class="date">{day}</div>'+
							'<div class="ups">{count} UPs</div>'+
						'</a>'+
					'</div>';

wut.templates.compiled = wut.templates.compiled || {};
wut.templates.compiled.date = new Template().compile('{loop:}'+ wut.templates.date +'{/loop:}');

/* class UPs
 *
 * publishes  /ups/update (ups, date, category, pagination, dates)
 * subscribes /ups/update/date (date)
 * subscribes /ups/update/category (category)
 * subscribes /ups/update/pagination (offset, limit)
 *
 * ups [ { title, intro, logo, subtitle, short, id } ]
 * date YYYY-mm-dd
 * category name
 * pagination { first, prev, next, last, pages:[ {page, link} ] }
 * dates [ { date, count } ]
 */
wut.UPs = new Class({
	Implements: [Options],
	options: {
	},

	container: null,
	date: null,
	category: null,
	offset: null,

	initialize: function(container, options) {
		this.setOptions(options);

		this.container = container;

		var boundDateUpdate = this._updateDate.bind(this);
		$subscribe('/ups/update/date', boundDateUpdate);
		var boundCatUpdate = this._updateCategory.bind(this);
		$subscribe('/ups/update/category', boundCatUpdate);
		var boundPageUpdate = this._updatePagination.bind(this);
		$subscribe('/ups/update/pagination', boundDateUpdate);
	},

	_update: function() {
		var url = '/index.php?option=com_wut&view=ups' +
					((this.date)?'&date='+this.date:'') +
					((this.category)?'&category='+this.category:'') +
					((this.limit)?'&limit='+this.limit:'') +
					((this.offset)?'&offset='+this.offset:''),

			boundCallback = this._callback.bind(this),
			request = new Request.JSON({
				url: url,
				onSuccess: boundCallback
			});

			request.get();
	},

	_updateDate: function(date) {
		this.date = date;
		this._update();
	},

	_updateCategory: function(category) {
		this.category = category;
		this._update();
	},

	_updatePagination: function(offset, limit) {
		this.offset = offset;
		this.limit = limit;
		this._update();
	},

	_callback: function(json, text) {
		var ups = json.ups.items,
			date = json.date,
			category = json.category,
			pagination = json.pagination,
			dates = json.dates;

		$publish('/ups/update', [ups, date, category, pagination, dates]);
	}
});

wut.Dates = new Class({
	Implements: [Options],
	options: {
	},

	container: null,
	datesContainer: null,
	fx: null,
	date: null,

	initialize: function(container, options) {
		this.setOptions(options);

		this.container = container;
		this.datesContainer = this.container.getElement('.dates > div');
		this.container.addEvent('click:relay(.dates > div > div)', function(event, target) {
			event.preventDefault();

			if (target.get('data-date') !== this.date) {
				$publish('/ups/update/date', target.get('data-date'));
			}
		}.bind(this));

		var boundUpdate = this._update.bind(this);
		$subscribe('/ups/update', boundUpdate);
		var boundCallback = this._callback.bind(this);
		this.fx = new Fx.Tween(this.datesContainer, {
			property:'left',
			onComplete: boundCallback
		});
	},

	_update: function(ups, date, category, pagination, dates) {
		this.date = date;
		var newDates = wut.templates.compiled.date(dates);
		this.datesContainer.adopt(Elements.from(newDates));

		this.fx.start(-125*dates.length);
	},

	_callback: function() {
		var children = this.datesContainer.getChildren(),
			i = 0;
		for (; i < 7; i++) {
			children[i].dispose();
		}

		this.datesContainer.setStyle('left', '0');
	}
});

wut.Categories = new Class({
	Implements: [Options],
	options: {
	},

	container: null,

	initialize: function(container, options) {
		this.setOptions(options);

		this.container = container;
		this.container.addEvent('click:relay(a)', function(event, target) {
			event.preventDefault();
			$publish('/ups/update/category', target.get('data-category'));
		}.bind(this));

		var boundUpdate = this._update.bind(this);
		$subscribe('/ups/update', boundUpdate);
	},

	_update: function(ups, date, category, pagination, dates) {
		this.container.getElements('a').removeClass('active');
		this.container
			.getElement('a[data-category="'+ category +'"]')
			.addClass('active');
	}
});

wut.Pagination = new Class({
	Implements: [Options],
	options: {
	},

	container: null,

	initialize: function(container, options) {
		this.setOptions(options);

		this.container = container;
		this.container.addEvent('click:relay(a)', function(event, target) {
			event.preventDefault();
			var href = target.get('href'),
				offset = this._searchLink('offset', href),
				limit = this._searchLink('limit', href);

			$publish('/ups/update/pagination', [offset, limit]);
		}.bind(this));

		var boundUpdate = this._update.bind(this);
		$subscribe('/ups/update', boundUpdate);
	},

	_update: function(ups, date, category, pagination, dates) {
		console.log('update pagination to: '+ pagination);
	},

	_searchLink: function(key, href) {
		var query_string = href.split("?"),
			params = query_string[1].split("&"),
			i = 0;

		while (i < params.length) {
			var param_item = params[i].split("=");

			if (param_item[0] === key) {
				return param_item[1];
			}
			i++;
		}
		return "";
	}
});

window.addEvent('domready', function() {

	var dateModules = [],
		catModules = [],
		pagModules = [],
		upModules = [];

	$$('.mod_wutdates').each(function(module) {
		dateModules.push(new wut.Dates(module));
	});
	$$('.mod_wutcategories').each(function(module) {
		catModules.push(new wut.Categories(module));
	});
	$$('#ups-overlay ~ .pagination').each(function(module) {
		pagModules.push(new wut.Pagination(module));
	});
	$$('.com_wut-ups').each(function(module) {
		upModules.push(new wut.UPs(module));
	});
});