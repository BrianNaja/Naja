<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package naja
 */

get_header(); ?>

	<div class="row">
		<div class="ten centered columns" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'naja' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
			</header><!-- .page-header -->

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content-2', 'search' ); ?>

			<?php endwhile; ?>

			<?php naja_content_nav( 'nav-below' ); ?>

		<?php else : ?>

			<?php get_template_part( 'no-results', 'search' ); ?>

		<?php endif; ?>

		</div><!-- #ten centered columns -->
	</div><!-- #row -->

<?php get_footer(); ?>