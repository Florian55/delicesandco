jQuery(document).ready(function() {
	jQuery('.fdm-filtering-text-input').on('keyup', function() {
		fdm_filtering();
	});

	jQuery('.fdm-filtering-min-price-input, .fdm-filtering-max-price-input').on('keyup', function() {
		fdm_filtering();
	});

	jQuery('.fdm-filtering-sorting-input').on('change', function() {
		fdm_sorting();
	});
});

function fdm_filtering() {
	var text = jQuery('.fdm-filtering-text-input').val().toLowerCase();
	var search = jQuery('.fdm-filtering-text-input').data('search');

	var min_price = jQuery('.fdm-filtering-min-price-input').val();
	var max_price = jQuery('.fdm-filtering-max-price-input').val();

	jQuery('.fdm-item').each(function() {
		var filter = false;

		if ( text != '' && 
			(jQuery(this).find('.fdm-item-title').first().html().toLowerCase().indexOf(text) == -1 || search.indexOf('name') == -1) &&
			(jQuery(this).find('.fdm-item-content').first().html().toLowerCase().indexOf(text) == -1 || search.indexOf('description') == -1) ) {
			filter = true;
		}

		var item_price = jQuery(this).find('.fdm-item-price').first().html().replace(/[^\d\.]+/g,''); console.log(item_price);
		if ( ( min_price != '' && item_price < min_price ) || ( max_price != '' && item_price > max_price) ) {
			filter = true;
		}

		if ( filter ) { jQuery(this).addClass('fdm-hidden'); }
		else { jQuery(this).removeClass('fdm-hidden'); }
	});
}

function fdm_sorting() {
	var sort = jQuery('.fdm-filtering-sorting-input').val();

	if ( sort != '' ) {
		jQuery('.fdm-section-header').addClass('fdm-hidden');

		var items = jQuery('li.fdm-item').get();
		items.sort( function( a , b ) {
			if ( sort == 'name_asc' ) {
				var aTitle = jQuery(a).find('.fdm-item-title').first().html().toLowerCase();
				var bTitle = jQuery(b).find('.fdm-item-title').first().html().toLowerCase();

				if ( aTitle < bTitle ) return -1;
				if ( aTitle > bTitle ) return 1;
				return 0;
			}

			if ( sort == 'name_desc' ) {
				var aTitle = jQuery(a).find('.fdm-item-title').first().html().toLowerCase();
				var bTitle = jQuery(b).find('.fdm-item-title').first().html().toLowerCase();

				if ( aTitle < bTitle ) return 1;
				if ( aTitle > bTitle ) return -1;
				return 0;
			}

			if ( sort == 'price_asc' ) {
				var aPrice = parseFloat( jQuery(a).find('.fdm-item-price').first().html().replace(/[^\d\.]+/g,'') );
				var bPrice = parseFloat( jQuery(b).find('.fdm-item-price').first().html().replace(/[^\d\.]+/g,'') );

				if ( aPrice < bPrice ) return -1;
				if ( aPrice > bPrice ) return 1;
				return 0;
			}

			if ( sort == 'price_desc' ) {
				var aPrice = parseFloat( jQuery(a).find('.fdm-item-price').first().html().replace(/[^\d\.]+/g,'') );
				var bPrice = parseFloat( jQuery(b).find('.fdm-item-price').first().html().replace(/[^\d\.]+/g,'') );

				if ( aPrice < bPrice ) return 1;
				if ( aPrice > bPrice ) return -1;
				return 0;
			}

			if ( sort == 'date_asc' ) {
				var aTime = jQuery(a).data('timeadded'); 
				var bTime = jQuery(b).data('timeadded'); 

				if ( aTime < bTime ) return -1;
				if ( aTime > bTime ) return 1;
				return 0;
			}

			if ( sort == 'date_desc' ) {
				var aTime = jQuery(a).data('timeadded'); 
				var bTime = jQuery(b).data('timeadded'); 
				
				if ( aTime < bTime ) return 1;
				if ( aTime > bTime ) return -1;
				return 0;
			}
		});

		jQuery(items).each(function(i, li) {
			jQuery('.fdm-section-0').append(li);
		});
	}
	else {
		jQuery('.fdm-section-header, .fdm-item').removeClass('fdm-hidden');

		jQuery('.fdm-item').each(function() {
			var section = jQuery(this).data('section');

			jQuery('.fdm-sectionid-' + section).append(jQuery(this));
		});
	}
}
