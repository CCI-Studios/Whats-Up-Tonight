window.addEvent('domready', function() {

	var $toggle = $('field_reoccuring'),
		$nonReoccuring = $$('[data-reoccuring="0"]'),
		$reoccuring = $$('[data-reoccuring="1"]'),
		toggle = function() {
			if ($toggle.checked) {
				$nonReoccuring.hide();
				$reoccuring.show();
			} else {
				$nonReoccuring.show();
				$reoccuring.hide();
			}
		};

	toggle();
	$toggle.addEvent('click', toggle);
});