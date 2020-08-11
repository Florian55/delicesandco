<?php global $fdm_controller; ?>
<?php if ( $this->title ) : ?>
<h3 class="fdm-menu-title"><?php echo $this->title; ?></h3>
<?php endif; ?>
<?php if ( $this->content ) : ?>
<div class="fdm-menu-content">
	<?php echo $this->content; ?>
</div>
<?php endif; ?>

<?php
if ( $this->ordering_display_progress() and $fdm_controller->orders->is_open_for_ordering() ) :
	echo $this->print_order_progress();
endif;
?>

<?php
if ( $this->ordering_enabled() and $fdm_controller->orders->is_open_for_ordering() ) :
	echo $this->print_order_popup();
endif;
?>

<div class="fdm-menu-filtering">
	<?php echo $this->print_filtering_options(); ?>
</div>

<div class="fdm-the-menu">

<?php 
if ($this->has_sidebar()) :
	echo $this->print_sidebar();
endif;
?>

<?php 
if ($this->ordering_enabled() and $fdm_controller->orders->is_open_for_ordering() ) :
	echo $this->print_order_sidescreen();
endif;
?>

<ul id="<?php echo fdm_global_unique_id(); ?>"<?php echo fdm_format_classes( $this->classes ); ?>>

<?php foreach ( $this->groups as $group ) :	?>

	<li<?php echo fdm_format_classes( $this->column_classes() ); ?>>

	<?php echo $this->print_group_section( $group ); ?>

	</li>

<?php endforeach; ?>

</ul>
<?php if ( $this->footer ) : ?>
<div class="fdm-menu-footer clearfix">
	<?php echo $this->footer; ?>
</div>
<?php endif; ?>

</div> <!-- fdm-the-menu -->

<div class="clearfix"></div>

<div class='fdm-details-div fdm-hidden'>
	<div class='fdm-details-div-inside'>
		<div class='fdm-details-div-content'></div>
		<div class='fdm-details-div-exit'>x</div>
	</div>
</div>
<div class='fdm-details-background-div fdm-hidden'></div>