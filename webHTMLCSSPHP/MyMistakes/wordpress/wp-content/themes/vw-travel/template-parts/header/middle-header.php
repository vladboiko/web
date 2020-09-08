<?php
/**
 * The template part for top header
 *
 * @package VW Travel 
 * @subpackage vw_travel
 * @since VW Travel 1.0
 */
?>

<div id="topbar">
  <div class="header-menu <?php if( get_theme_mod( 'vw_travel_sticky_header') != '') { ?> header-sticky"<?php } else { ?>close-sticky <?php } ?>">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-2 col-md-3">
          <div class="logo">
            <?php if( has_custom_logo() ){ vw_travel_the_custom_logo();
              }else{ ?>
                <h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?><span class="screen-reader-text"><?php the_title(); ?></span></a></h1>
                <?php $description = get_bloginfo( 'description', 'display' );
                if ( $description || is_customize_preview() ) : ?>
                <p class="site-description"><?php echo esc_html($description); ?></p>
            <?php endif; } ?>
          </div>
        </div>
        <div class="col-lg-8 col-md-6">
          <?php get_template_part( 'template-parts/header/navigation' ); ?>
        </div>
        <div class="col-lg-2 col-md-3">
          <?php if( get_theme_mod( 'vw_travel_phone_number') != '') { ?>
            <h6 class="phone-no"><?php echo esc_html(get_theme_mod('vw_travel_phone_number',''));?></h6>
          <?php }?>
        </div>
      </div>
    </div>
  </div>
</div>