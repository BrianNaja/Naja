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

		<?php // the query1
			$query1 = new WP_Query( 'posts_per_page=1' ); ?>

			<?php if ( $query1->have_posts() ) : ?>
				<?php while ( $query1->have_posts() ) : $query1->the_post(); ?>
					<?php get_template_part( 'content', get_post_format() );?>
				<?php endwhile; ?>
				<?php wp_reset_postdata(); ?>
				
				<?php else:  ?>
					<p><?php _e( 'Sorry, $query1 is busted.' ); ?></p>
			<?php endif; ?>
			
			<?php // the query2
			$query2 = new WP_Query( 'offset=3&posts_per_page=7' ); ?>

			<?php if ( $query2->have_posts() ) : ?>
				<?php while ( $query2->have_posts() ) : $query2->the_post(); ?>
					<?php get_template_part( 'content-2', get_post_format() );?>
				<?php endwhile; ?>
				<!-- <?php naja_content_nav( 'nav-below' ); ?> -->
				<?php wp_reset_postdata(); ?>
				
				<?php else:  ?>
					<p><?php _e( 'Sorry, $query1 is busted.' ); ?></p>
			<?php endif; ?>
		
    </div><!-- #eight columns -->
    
    <?php get_sidebar(); ?>
      
	</div><!-- #row -->
	
<?php get_footer(); ?>