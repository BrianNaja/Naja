<?php
/**
 * The template for displaying search forms in naja
 *
 * @package naja
 */
?>
<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label>
<!-- 		<span class="screen-reader-text"><?php _ex( 'Search for:', 'label', 'naja' ); ?></span> -->
		<input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Search', 'placeholder', 'naja' ); ?>" value="<?php echo esc_attr( get_search_query() ); ?>" name="s" title="<?php _ex( 'Search for:', 'label', 'naja' ); ?>">
	</label>
	<!-- <input type="submit" class="search-submit" value="<?php echo esc_attr_x( 'Go', 'submit button', 'naja' ); ?>"> -->
</form>
