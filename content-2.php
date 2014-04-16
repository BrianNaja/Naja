<?php
/**
 * @package naja
 */
?>
  

  <section class="content-2">  
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    	<?php if( has_post_format('image')){ ?>
			<header class="entry-header">
				<div class="image-format">
					<img src="http://briannaja.com//wp-content/themes/naja/css/images/photo.png" alt="photo" width="150" height="150" />
				</div>
				
    			<h1 class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
				
				<?php if ( 'post' == get_post_type() ) : ?>
				<div class="entry-meta">
					<?php echo 'Posted ' . human_time_diff( get_the_time('U'), current_time('timestamp') ) . ' ago '; ?>
					<?php edit_post_link( __( 'Edit', 'naja' ), '<span class="edit-link">','</span>' ); ?>
				</div><!-- .entry-meta -->
				<?php endif; ?>
    	    </header><!-- .entry-header -->
    	    
    	    <div class="entry-content">
    	    	<div class="medium">
					<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium'); ?></a>
				</div>
    	    </div>
	    
	    <?php } else if ( has_post_format('gallery')){ ?>
			<header class="entry-header">
				<div class="gallery-format">
					<img src="http://briannaja.com//wp-content/themes/naja/css/images/gallery.png" alt="gallery" width="150" height="150" />
				</div>
				
    			<h1 class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
				
				<?php if ( 'post' == get_post_type() ) : ?>
				<div class="entry-meta">
					<?php echo 'Posted ' . human_time_diff( get_the_time('U'), current_time('timestamp') ) . ' ago '; ?>
					<?php edit_post_link( __( 'Edit', 'naja' ), '<span class="edit-link">','</span>' ); ?>
				</div><!-- .entry-meta -->
				<?php endif; ?>
    	    </header><!-- .entry-header -->
    	    
    	    <div class="entry-content">
    	    	
    	    </div>
	    
	    <?php } else if (has_post_format('video')){ ?>
			<header class="entry-header">
				<div class="video-format">
					<img src="http://briannaja.com//wp-content/themes/naja/css/images/television.png" alt="television" width="150" height="150" />
				</div>
				
    			<h1 class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
				
				<?php if ( 'post' == get_post_type() ) : ?>
				<div class="entry-meta">
					<?php echo 'Posted ' . human_time_diff( get_the_time('U'), current_time('timestamp') ) . ' ago '; ?>
					<?php edit_post_link( __( 'Edit', 'naja' ), '<span class="edit-link">','</span>' ); ?>
				</div><!-- .entry-meta -->
				<?php endif; ?>
    	    </header><!-- .entry-header -->
    	    
    	    <div class="entry-content">
    	    	
    	    </div>
    	    
	    <?php } else { ?>
			<header class="entry-header">
				<div class="standard-format">
					<img src="http://briannaja.com//wp-content/themes/naja/css/images/compose.png" alt="compose" width="150" height="150" />
				</div>
				
    			<h1 class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
				
				<?php if ( 'post' == get_post_type() ) : ?>
				<div class="entry-meta">
					<?php echo 'Posted ' . human_time_diff( get_the_time('U'), current_time('timestamp') ) . ' ago '; ?>
					<?php edit_post_link( __( 'Edit', 'naja' ), '<span class="edit-link">','</span>' ); ?>
				</div><!-- .entry-meta -->
				<?php endif; ?>
    	    </header><!-- .entry-header -->
    	    
    	    <div class="entry-content">
    	    	<?php the_excerpt(); ?>
    	    </div>
	    <?php } ?>
		
     </article><!-- #post-## -->

  </section>
