<?php /*
        Template Name: show more
*/ ?>

<?php get_header(); ?>

	<div class="row">
		<div class="nine columns" role="main">
		
  <?php	$args = array(
					'showposts' => 10,
					'paged' => $paged
			);
			
			$wp_query = new WP_Query( $args );

				while ( $wp_query->have_posts() ) : $wp_query->the_post();
					get_template_part( 'content-2', get_post_format() );
				endwhile;
				
				previous_posts_link( __( '<div class="nav-next">Newer posts</div>' ) );
				next_posts_link( __( '<div class="nav-previous"> Older posts</div>' ) );
				
				wp_reset_postdata();
		?>

			
		
    </div><!-- #nine columns -->
    
    <?php get_sidebar(); ?>
      
	</div><!-- #row -->
	
<?php get_footer(); ?>