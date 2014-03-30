<?php
/**
 * The Template for displaying all single posts.
 *
 * @package naja
 */

get_header(); ?>

	<div class="row">
		<div class="ten centered columns" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content', 'single' ); ?>

			<?php naja_content_nav( 'nav-below' ); ?>

			<?php
				// If comments are open or we have at least one comment, load up the comment template
				if ( comments_open() || '0' != get_comments_number() )
					comments_template();
			?>

		<?php endwhile; // end of the loop. ?>

		</div><!-- #ten centered columns -->
	</div><!-- #row -->

<?php get_footer(); ?>