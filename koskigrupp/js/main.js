(function($) {
	$(document).ready( function() {
		$('.btn-navbar').click(function(e) {
			$('#access').toggleClass('open');
			e.preventDefault();
		});
	});
})(jQuery);