jQuery(document).ready(function($){
	$(function(){
		$(window).resize(function(){
			$('.fdm-section-background-image .fdm-section-header-image-area').each(function(){
				var this_fdm_section = $(this);
				var fdm_section_image_height = this_fdm_section.height();
				var fdm_section_h3_height = this_fdm_section.find('.h3-on-image').height();
				var fdm_section_h3_top = ( (fdm_section_image_height / 2) - (fdm_section_h3_height / 2) );
				this_fdm_section.find('.h3-on-image').css('top', fdm_section_h3_top+'px');
			});
		}).resize();
	});	
});


jQuery(document).ready(function($){
	jQuery('.fdm-item-ajax-open .fdm-item-title').on('click', function() { console.log("Called");
		var post_id = jQuery(this).closest('.fdm-item').data('postid');

		if ( post_id == '' ) { return; }

		jQuery('.fdm-details-div, .fdm-details-background-div').removeClass('fdm-hidden');
		jQuery('.fdm-details-div-content').html('Loading...');

		var data = 'post_id=' + post_id + '&action=fdm_menu_item_details';
		jQuery.post(ajaxurl, data, function(response) {
			jQuery('.fdm-details-div-content').html(response);
		});
	});

	jQuery('.fdm-details-background-div').on('click', function() {
		jQuery('.fdm-details-div, .fdm-details-background-div').addClass('fdm-hidden');
	});

	jQuery('.fdm-details-div-exit').on('click', function() {
		jQuery('.fdm-details-div, .fdm-details-background-div').addClass('fdm-hidden');
	})
});


//Image Style
jQuery(document).ready(function($){
	$(function(){
		$(window).resize(function(){
			$('.fdm-image-style-image-wrapper').each(function(){
				var thisImageWrapper = $(this);
				var thisImageWrapperWidth = thisImageWrapper.width();
				thisImageWrapper.css('height', thisImageWrapperWidth+'px');
			});
			var maxHeight = -1;
			$('.fdm-menu-image .fdm-item').each(function(){
				maxHeight = maxHeight > $(this).height() ? maxHeight : $(this).height();
			});
			$('.fdm-menu-image .fdm-item').each(function(){
				$(this).height(maxHeight);
			});
		}).resize();
	});
});


