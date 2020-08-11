<?php
global $fdm_controller;

?>

<div class="<?php echo $fdm_controller->settings->get_setting( 'fdm-enable-ordering-options' ) ? 'fdm-options-add-to-cart-button' : 'fdm-add-to-cart-button'; ?>" data-postid="<?php echo $this->id; ?>" data-options='<?php echo htmlspecialchars( json_encode( $this->ordering_options ), ENT_QUOTES, 'UTF-8' ); ?>' data-prices='<?php echo htmlspecialchars( json_encode( $this->prices ), ENT_QUOTES, 'UTF-8' ); ?>'>
	<?php _e( 'Add to Cart', 'food-and-drink-menu' ); ?>
</div>


