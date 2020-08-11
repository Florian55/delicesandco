<div class="fdm-item-price-wrapper">
	<?php if ( isset( $this->price_discount ) ) : ?>
	<div class="fdm-item-price-discount"><?php echo $this->price_discount; ?></div>
	<?php endif; ?>
	<?php if ( isset( $this->prices ) ) : ?>
		<?php foreach ( $this->prices as $price ) : ?>
			<div class="fdm-item-price"><?php echo $price; ?></div>
		<?php endforeach; ?>
	<?php endif; ?>
</div>
