<?php
/**
 * @package naja
 */
?>
  

  <section class="loop-2">  
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    	<header class="entry-header">
    		<h1 class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
    
    		<?php if ( 'post' == get_post_type() ) : ?>
    		<div class="entry-meta">
    		  <?php echo 'Posted ' . human_time_diff( get_the_time('U'), current_time('timestamp') ) . ' ago '; ?>
    			<!-- <?php naja_posted_on(); ?> -->
    		</div><!-- .entry-meta -->
    		<?php endif; ?>
    	</header><!-- .entry-header -->
    
    	<?php if ( is_search() ) : // Only display Excerpts for Search ?>
    	<div class="entry-summary">
    		<?php the_excerpt(); ?>
    	</div><!-- .entry-summary -->
    	<?php else : ?>
    	<div class="entry-content">
    	              
            <?php if ( has_post_format( 'image' )) {
					
					echo '<div class="thumbnail">';
					the_post_thumbnail('loop-2');
					echo '<div class="loop-2-caption"><p>' . get_post( get_post_thumbnail_id() )->post_excerpt . '</p>';
					echo '<a href="' . get_permalink() . '" rel="bookmark">Enlarge Image</a>';
					echo '</div>';
					echo '</div>';
					
				  } else if (has_post_format('gallery')) {
					
					// stuff to display the gallery format post here
					
				  } else if (has_post_format('video')) {
				  
					// stuff to display the link format post here
					
				  } else if (has_post_format('link')) {
				  
					// stuff to display the link format post here
					
				  } else if (has_post_format('quote')) {
				  
					// stuff to display the link format post here
					
   				  } else {
   				  
	   				the_excerpt();
	   				
	   			  } ?>

    		<?php
    			wp_link_pages( array(
    				'before' => '<div class="page-links">' . __( 'Pages:', 'naja' ),
    				'after'  => '</div>',
    			) );
    		?>
    	</div><!-- .entry-content -->
    	<?php endif; ?>
    
     </article><!-- #post-## -->

  </section>
