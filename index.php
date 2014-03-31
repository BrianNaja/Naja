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

		<?php if ( have_posts() ) : ?>
			<?php $post = $posts[0]; $i=0;?>
			<?php while ( have_posts() ) : the_post(); ?>
			
			<?php $i++;
				if( $i == 1) : ?>
					<?php get_template_part( 'loop-1', get_post_format() );?>
				<?php else : ?>
					<?php get_template_part( 'loop-2', get_post_format() );?>
				<?php endif;?>
			<?php endwhile; ?>

			<?php naja_content_nav( 'nav-below' ); ?>

		<?php else : ?>

			<?php get_template_part( 'no-results', 'index' ); ?>

		<?php endif; ?>
		
    </div><!-- #eight columns -->
    
    <?php get_sidebar(); ?>
      
	</div><!-- #row -->
	
<?php get_footer(); ?>