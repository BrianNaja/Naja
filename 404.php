<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package naja
 */

get_header(); ?>

	<div class="row">
		<div class="ten columns centered" role="main">

			<section class="not-found">
				<header class="page-header">
					<h1 class="page-title"><?php _e( 'Oops! 404 Page Not Found', 'naja' ); ?></h1>
				</header><!-- .page-header -->

				<div class="page-content">

					<?php get_search_form(); ?>
                                                
          <img src="<?php echo get_stylesheet_directory_uri() ?>/css/images/darth-vader-404.jpg">
          <p>You have failed me for the last time.</p>

				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</div><!-- #ten columns centered -->
          
	</div><!-- #row -->

<?php get_footer(); ?>