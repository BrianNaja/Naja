<?php
/**
 * @package naja
 */
?>
  

  <section>  
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
    	<div class="entry-content clearfix">
    	  
    	  <?php
          if(has_post_thumbnail()) { 
            echo '<div class="large">';
            the_post_thumbnail('large');
            echo '<p class="caption">' . get_post( get_post_thumbnail_id() )->post_excerpt . '</p>';
            echo '</div>'; } 
            else { } ?>

    		<?php the_content(); ?>
    		<?php
    			wp_link_pages( array(
    				'before' => '<div class="page-links">' . __( 'Pages:', 'naja' ),
    				'after'  => '</div>',
    			) );
    		?>
    	</div><!-- .entry-content -->
    	<?php endif; ?>
    
    	<footer class="entry-meta">
    		<?php if ( 'post' == get_post_type() ) : // Hide category and tag text for pages on Search ?>
    			<?php
    				/* translators: used between list items, there is a space after the comma */
    				$categories_list = get_the_category_list( __( ', ', 'naja' ) );
    				if ( $categories_list && naja_categorized_blog() ) :
    			?>
    			<span class="cat-links">
    				<?php printf( __( 'Posted in %1$s', 'naja' ), $categories_list ); ?> - 
    			</span>
    			<?php endif; // End if categories ?>
    
    			<?php
    				/* translators: used between list items, there is a space after the comma */
    				$tags_list = get_the_tag_list( '', __( ', ', 'naja' ) );
    				if ( $tags_list ) :
    			?>
    			<span class="tags-links">
    				<?php printf( __( 'Tagged %1$s', 'naja' ), $tags_list ); ?>
    			</span>
    			<?php endif; // End if $tags_list ?>
    		<?php endif; // End if 'post' == get_post_type() ?>
    
    		<?php if ( ! post_password_required() && ( comments_open() || '0' != get_comments_number() ) ) : ?>
    		<span class="comments-link"><?php comments_popup_link( __( 'Leave a comment', 'naja' ), __( '1 Comment', 'naja' ), __( '% Comments', 'naja' ) ); ?></span>
    		<?php endif; ?>
    
    		<?php edit_post_link( __( 'Edit', 'naja' ), '<span class="edit-link">','</span>' ); ?>
    	</footer><!-- .entry-meta -->
    </article><!-- #post-## -->

  </section>
