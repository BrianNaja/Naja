<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package naja
 */

get_header(); ?>

	<div class="row">
		<div class="nine columns" role="main">

		<!-- Start the Loop. -->
			<?php $first_post = 1 ; ?>
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			
			<?php if ($first_post == 1): ?>
				<?php get_template_part( 'content', get_post_format() );?>
			<?php endif; ?>
			
			<?php get_template_part( 'content-2', get_post_format() );?>
			
			<?php $first_post++; endwhile; endif; ?>	
		<!-- End the Loop. -->		
					
		<?php naja_content_nav( 'nav-below' ); ?>
				
		
		</div><!-- #nine columns -->
    
    <?php get_sidebar(); ?>
      
	</div><!-- #row -->
	
<?php get_footer(); ?>