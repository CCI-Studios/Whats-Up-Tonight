window.addEvent('domready', function() {
	$('wrapper').addEvent('click:relay(.com_wut-upInstance .button)', function(event) {
		event.preventDefault();
		this.getParent('.span4').toggleClass('open');
	});
});