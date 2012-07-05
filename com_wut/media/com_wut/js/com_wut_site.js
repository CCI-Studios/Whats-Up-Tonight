var wut = wut || {};
wut.dates = new Class({
	Implements: [Options],

	options: {
		selector: '.item',
		prev: '.prev',
		next: '.next',
	},

	container: null,
	currentDate: null,
	prev: null,
	next: null,

	initialize: function(container, options) {
		this.setOptions(options);
		this.container = container;
		this.prev = container.getElement(this.options.prev);
		this.next = container.getElement(this.options.next);

		this.currentDate = this.container.get('data-date');

		this.container.addEvent('click:relay(.item a)', function(event, target) {
			event.preventDefault();
			
			var overlay = $('ups-overlay');
			overlay.set('data-url', target.get('href'));
			new Koowa.Overlay(overlay, {
				evalScripts: false,
				evalStyles: false,
				selector: '.com_wut-ups'
			});
		}.bind(this));
	}

});

function pad(num, size) {
    var s = "000000000" + num;
    return s.substr(s.length-size);
}

wut.ups = new Class({
	Implements: [Options],

	options: {
		'selector': '.details'
	},

	container: null,
	ups: null,

	initialize: function(container, options) {
		this.setOptions(options);
		this.container = container;

		this.container.addEvent('click:relay(.details)', function(event, target) {
			var parent = target.getParent('.span4');
			parent.toggleClass('open');
		});
	}

});



window.addEvent('domready', function() {
	var dates = $$('.mod_wutdates');
	dates.each(function(date) {
		var dater = new wut.dates(date)
	});

	var ups = new wut.ups(document.id('ups-overlay'));
});