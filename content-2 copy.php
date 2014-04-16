<?php
/**
 * @package naja
 */
?>
  

  <section class="content-2">  
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
    
    	<div class="entry-content">
    	              
            <?php if ( has_post_format( 'image' )) {
					
					echo '<div class="medium">';
					the_post_thumbnail('medium');
					echo '</div>';
					
				  } else if (has_post_format('gallery')) {
					
					echo '<div class="gallery-format">';
					echo '<img src="http://briannaja.com//wp-content/themes/naja/css/images/gallery.png" alt="gallery" width="150" height="150" />';
					echo '</div>';
					
				  } else if (has_post_format('video')) {
				  
					echo '<div class="video-format">';
					echo '<img src="http://briannaja.com//wp-content/themes/naja/css/images/television.png" alt="television" width="150" height="150" />';
					echo '</div>';
					
				  } else if (has_post_format('quote')) {
				  
					echo '<blockquote>' . the_content() . '</blockquote>';
					
   				  } else {
   				  
	   			    the_excerpt();
	   				echo '<a href="' . get_permalink() . '" rel="bookmark">Read More</a>';
	   				
	   			  } ?>

    		<?php
    			wp_link_pages( array(
    				'before' => '<div class="page-links">' . __( 'Pages:', 'naja' ),
    				'after'  => '</div>',
    			) );
    		?>
    	</div><!-- .entry-content -->
    
     </article><!-- #post-## -->

  </section>
