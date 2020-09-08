<?php
/**
 * The template part for displaying grid post
 *
 * @package VW Travel
 * @subpackage vw-travel
 * @since VW Travel 1.0
 */
?>

<div class="col-lg-4 col-md-4">
	<article id="post-<?php the_ID(); ?>" <?php post_class('inner-service'); ?>>
	    <div class="post-main-box">
	      	<div class="box-image">
	          	<?php 
		            if(has_post_thumbnail()) { 
		              the_post_thumbnail(); 
		            }
	          	?>
	        </div>
	        <h3 class="section-title"><?php the_title();?></h3>
	        <div class="new-text">
	        	<div class="entry-content"><p><?php $excerpt = get_the_excerpt(); echo esc_html( vw_travel_string_limit_words( $excerpt, esc_attr(get_theme_mod('vw_travel_excerpt_number','25')))); ?></p></div>
	        </div>
	        <div class="more-btn">
            	<a href="<?php echo esc_url(get_permalink()); ?>"><i class="fas fa-plus"></i><?php esc_html_e( 'READ MORE', 'vw-travel' ); ?><i class="fas fa-angle-right"></i><span class="screen-reader-text"><?php esc_html_e( 'READ MORE','vw-travel' );?></span></a>
          	</div>
	    </div>
	    <div class="clearfix"></div>
  	</article>
</div>