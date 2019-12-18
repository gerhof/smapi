(function( $ ) {
	'use strict';

	/**
	 * All of the code for your admin-facing JavaScript source
	 * should reside in this file.
	 *
	 * Note: It has been assumed you will write jQuery code here, so the
	 * $ function reference has been prepared for usage within the scope
	 * of this function.
	 *
	 * This enables you to define handlers, for when the DOM is ready:
	 *
	 * $(function() {
	 *
	 * });
	 *
	 * When the window is loaded:
	 *
	 * $( window ).load(function() {
	 *
	 * });
	 *
	 * ...and/or other possibilities.
	 *
	 * Ideally, it is not considered best practise to attach more than a
	 * single DOM-ready or window-load handler for a particular page.
	 * Although scripts in the WordPress core, Plugins and Themes may be
	 * practising this, we should strive to set a better example in our own work.
	 */

	/* Do this when user clicks Update Financial Values */
	$( document ).ready(function() {
		/* Verify that the update button is clicked */
		$('.updatefinancialvalues').on('click', function(e) {
			/* Prevent default behaviour */
			e.preventDefault();
			/* Disable the button from further clicks */
			$('.updatefinancialvalues').attr("disabled", true);
			/* Fetch credentials */
			var smapi_username = $('#username').val();
			var smapi_password = $('#password').val();
			/* Make the post to the cloud service */
			$.post( "https://snurra.datadelenhc.com/api/v1/login", { email: smapi_username, password: smapi_password })
			.done(function( data ) {
				var json_string = JSON.stringify(data);
				var json_obj = jQuery.parseJSON(json_string);
				if (json_obj.success) {
					var month_12 = json_obj.success.month_12;
					var month_24 = json_obj.success.month_24;
					var month_36 = json_obj.success.month_36;
					var month_48 = json_obj.success.month_48;
					var month_60 = json_obj.success.month_60;
					var month_12_insurance = json_obj.success.month_12_insurance;
					var month_24_insurance = json_obj.success.month_24_insurance;
					var month_36_insurance = json_obj.success.month_36_insurance;
					var month_48_insurance = json_obj.success.month_48_insurance;
					var month_60_insurance = json_obj.success.month_60_insurance;					
					/* Update database */
					var key = $('.smapi_key').val();
					$.post( "/wp-content/plugins/SMAPI/json/insert_data.php", { key: key, month_12: month_12, month_24: month_24, month_36: month_36, month_48: month_48, month_60: month_60, month_12_insurance: month_12_insurance, month_24_insurance: month_24_insurance, month_36_insurance: month_36_insurance, month_48_insurance: month_48_insurance, month_60_insurance: month_60_insurance })
					.done(function( response ) {
						console.log(response);
						/* Enable button for clicks */
						$('.updatefinancialvalues').attr("disabled", false);
						/* Reload page to view new values */
						location.reload();
					});					
				}
				
			});								
		});

	});

})( jQuery );
