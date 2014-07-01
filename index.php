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
		
		<?php
			$query1 = new WP_Query( 'posts_per_page=1' );

				while ( $query1->have_posts() ) : $query1->the_post(); 
					get_template_part( 'content', get_post_format() );
				endwhile;
				
				wp_reset_postdata();
			
			$args = array(
					'showposts' => 5,
					'paged' => $paged,
					'offset' => 1
			);
			
			$query2 = new WP_Query( $args );

				while ( $query2->have_posts() ) : $query2->the_post();
					get_template_part( 'content-2', get_post_format() );
				endwhile;
				
				wp_reset_postdata();
		?>
			
			
		<p class="show-more"><a href="./index.php/archive" title="Show More">Show More</a></p>
    </div><!-- #nine columns -->
    
    <?php get_sidebar(); ?>
      
	</div><!-- #row -->
	
<?php get_footer(); ?>