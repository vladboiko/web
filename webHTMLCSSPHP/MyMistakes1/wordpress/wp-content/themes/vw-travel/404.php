<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package VW Travel
 */

get_header(); ?>

<main id="maincontent" role="main" class="content-vw">
	<div class="container">
		<div class="page-content">
	    	<h1><?php printf( '<strong>%s</strong> %s', esc_html__( '404','vw-travel' ), esc_html__( 'Not Found', 'vw-travel' ) ) ?></h1>
			<p class="text-404"><?php esc_html_e( 'Looks like you have taken a wrong turn&hellip', 'vw-travel' ); ?></p>
			<p class="text-404"><?php esc_html_e( 'Dont worry&hellip it happens to the best of us.', 'vw-travel' ); ?></p>
			<div class="more-btn">
		        <a href="<?php echo esc_url(get_permalink()); ?>"><?php esc_html_e( 'READ MORE', 'vw-travel' ); ?><i class="fas fa-long-arrow-alt-right"></i><span class="screen-reader-text"><?php esc_html_e( 'READ MORE','vw-travel' );?></span></a>
		    </div>
		</div>
		<div class="clearfix"></div>
	</div>
</main>

<?php get_footer(); ?>