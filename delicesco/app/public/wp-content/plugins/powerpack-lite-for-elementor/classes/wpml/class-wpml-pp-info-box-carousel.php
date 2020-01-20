<?php

class WPML_PP_Info_Box_Carousel extends WPML_Elementor_Module_With_Items {

	/**
	 * @return string
	 */
	public function get_items_field() {
		return 'pp_info_boxes';
	}

	public function get_fields() {
		return array( 
			'title',
			'subtitle',
			'description',
			'icon_text',
			'link' => array( 'url' ),
			'button_text',
	 );
	}

	protected function get_title( $field ) {
		switch( $field ) {
			case 'title':
				return esc_html__( 'Info Box Carousel - Title', 'power-pack' );
			case 'subtitle':
				return esc_html__( 'Info Box Carousel - Subtitle', 'power-pack' );
			case 'description':
				return esc_html__( 'Info Box Carousel - Description', 'power-pack' );
			case 'icon_text':
				return esc_html__( 'Info Box Carousel - Icon Text', 'power-pack' );
			case 'url':
				return esc_html__( 'Info Box Carousel - Link', 'power-pack' );
			case 'button_text':
				return esc_html__( 'Info Box Carousel - Button Text', 'power-pack' );
			default:
				return '';
		}
	}

	protected function get_editor_type( $field ) {
		switch( $field ) {
			case 'title':
				return 'LINE';
			case 'subtitle':
				return 'LINE';
			case 'description':
				return 'AREA';
			case 'icon_text':
				return 'LINE';
			case 'url':
				return 'LINK';
			case 'button_text':
				return 'LINE';
			default:
				return '';
		}
	}

}
