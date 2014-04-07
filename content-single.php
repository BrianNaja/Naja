<?php
/**
 * @package naja
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<h1 class="entry-title"><?php the_title(); ?></h1>

		<div class="entry-meta">
		  <?php echo 'Posted ' . human_time_diff( get_the_time('U'), current_time('timestamp') ) . ' ago '; ?>
			<!-- <?php naja_posted_on(); ?> -->
		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->

	<div class="entry-content">
	  
	  <?php
        if(has_post_thumbnail()) { 
          echo '<div class="featured-image">';
          the_post_thumbnail('large');
          echo '<p class="caption">' . get_post( get_post_thumbnail_id() )->post_excerpt . '</p>';
          echo '</div>'; } 
          else { } ?>
          
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'naja' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-meta">
		<?php
			/* translators: used between list items, there is a space after the comma */
			$category_list = get_the_category_list( __( ', ', 'naja' ) );

			/* translators: used between list items, there is a space after the comma */
			$tag_list = get_the_tag_list( '', __( ', ', 'naja' ) );

			if ( ! naja_categorized_blog() ) {
				// This blog only has 1 category so we just need to worry about tags in the meta text
				if ( '' != $tag_list ) {
					$meta_text = __( 'This entry was tagged %2$s.', 'naja' );
				} 
			} else {
				// But this blog has loads of categories so we should probably display them here
				if ( '' != $tag_list ) {
					$meta_text = __( 'This entry was posted in %1$s and tagged %2$s.', 'naja' );
				} else {
					$meta_text = __( 'This entry was posted in %1$s.', 'naja' );
				}

			} // end check for categories on this blog

			printf(
				$meta_text,
				$category_list,
				$tag_list,
				get_permalink(),
				the_title_attribute( 'echo=0' )
			);
		?>

		<?php edit_post_link( __( 'Edit', 'naja' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-meta -->
</article><!-- #post-## -->
