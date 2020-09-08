<?php
/**
 * VW Travel Theme Customizer
 *
 * @package VW Travel
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function vw_travel_custom_controls() {
    load_template( trailingslashit( get_template_directory() ) . '/inc/custom-controls.php' );
}
add_action( 'customize_register', 'vw_travel_custom_controls' );

function vw_travel_customize_register( $wp_customize ) {

	load_template( trailingslashit( get_template_directory() ) . 'inc/customize-homepage/class-customize-homepage.php' );

	//add home page setting pannel
	$wp_customize->add_panel( 'vw_travel_panel_id', array(
	    'priority' => 10,
	    'capability' => 'edit_theme_options',
	    'theme_supports' => '',
	    'title' => __( 'VW Settings', 'vw-travel' ),
	) );

	// Layout
	$wp_customize->add_section( 'vw_travel_left_right', array(
    	'title'      => __( 'General Settings', 'vw-travel' ),
		'panel' => 'vw_travel_panel_id'
	) );

	$wp_customize->add_setting('vw_travel_width_option',array(
        'default' => __('Full Width','vw-travel'),
        'sanitize_callback' => 'vw_travel_sanitize_choices'
	));
	$wp_customize->add_control(new VW_Travel_Image_Radio_Control($wp_customize, 'vw_travel_width_option', array(
        'type' => 'select',
        'label' => __('Width Layouts','vw-travel'),
        'description' => __('Here you can change the width layout of Website.','vw-travel'),
        'section' => 'vw_travel_left_right',
        'choices' => array(
            'Full Width' => get_template_directory_uri().'/assets/images/full-width.png',
            'Wide Width' => get_template_directory_uri().'/assets/images/wide-width.png',
            'Boxed' => get_template_directory_uri().'/assets/images/boxed-width.png',
        ))));

	$wp_customize->add_setting('vw_travel_theme_options',array(
        'default' => __('Right Sidebar','vw-travel'),
        'sanitize_callback' => 'vw_travel_sanitize_choices'
	));
	$wp_customize->add_control('vw_travel_theme_options',array(
        'type' => 'select',
        'label' => __('Post Sidebar Layout','vw-travel'),
        'description' => __('Here you can change the sidebar layout for posts. ','vw-travel'),
        'section' => 'vw_travel_left_right',
        'choices' => array(
            'Left Sidebar' => __('Left Sidebar','vw-travel'),
            'Right Sidebar' => __('Right Sidebar','vw-travel'),
            'One Column' => __('One Column','vw-travel'),
            'Three Columns' => __('Three Columns','vw-travel'),
            'Four Columns' => __('Four Columns','vw-travel'),
            'Grid Layout' => __('Grid Layout','vw-travel')
        ),
	) );

	$wp_customize->add_setting('vw_travel_page_layout',array(
        'default' => __('One Column','vw-travel'),
        'sanitize_callback' => 'vw_travel_sanitize_choices'
	));
	$wp_customize->add_control('vw_travel_page_layout',array(
        'type' => 'select',
        'label' => __('Page Sidebar Layout','vw-travel'),
        'description' => __('Here you can change the sidebar layout for pages. ','vw-travel'),
        'section' => 'vw_travel_left_right',
        'choices' => array(
            'Left Sidebar' => __('Left Sidebar','vw-travel'),
            'Right Sidebar' => __('Right Sidebar','vw-travel'),
            'One Column' => __('One Column','vw-travel')
        ),
	) );

	//Pre-Loader
	$wp_customize->add_setting( 'vw_travel_loader_enable',array(
        'default' => 1,
        'transport' => 'refresh',
        'sanitize_callback' => 'vw_travel_switch_sanitization'
    ) );
    $wp_customize->add_control( new VW_Travel_Toggle_Switch_Custom_Control( $wp_customize, 'vw_travel_loader_enable',array(
        'label' => esc_html__( 'Pre-Loader','vw-travel' ),
        'section' => 'vw_travel_left_right'
    )));

	$wp_customize->add_setting('vw_travel_loader_icon',array(
        'default' => __('Two Way','vw-travel'),
        'sanitize_callback' => 'vw_travel_sanitize_choices'
	));
	$wp_customize->add_control('vw_travel_loader_icon',array(
        'type' => 'select',
        'label' => __('Pre-Loader Type','vw-travel'),
        'section' => 'vw_travel_left_right',
        'choices' => array(
            'Two Way' => __('Two Way','vw-travel'),
            'Dots' => __('Dots','vw-travel'),
            'Rotate' => __('Rotate','vw-travel')
        ),
	) );

	//Topbar
	$wp_customize->add_section( 'vw_travel_topbar', array(
    	'title'      => __( 'Topbar Settings', 'vw-travel' ),
		'panel' => 'vw_travel_panel_id'
	) );

	$wp_customize->add_setting( 'vw_travel_topbar_hide_show',
       array(
          'default' => 1,
          'transport' => 'refresh',
          'sanitize_callback' => 'vw_travel_switch_sanitization'
    ));  
    $wp_customize->add_control( new VW_Travel_Toggle_Switch_Custom_Control( $wp_customize, 'vw_travel_topbar_hide_show',
       array(
          'label' => esc_html__( 'Show / Hide Topbar','vw-travel' ),
          'section' => 'vw_travel_topbar'
    )));

    //Sticky Header
	$wp_customize->add_setting( 'vw_travel_sticky_header',array(
        'default' => 1,
        'transport' => 'refresh',
        'sanitize_callback' => 'vw_travel_switch_sanitization'
    ) );
    $wp_customize->add_control( new VW_Travel_Toggle_Switch_Custom_Control( $wp_customize, 'vw_travel_sticky_header',array(
        'label' => esc_html__( 'Sticky Header','vw-travel' ),
        'section' => 'vw_travel_topbar'
    )));

	$wp_customize->add_setting( 'vw_travel_header_search',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'vw_travel_switch_sanitization'
    ));
    $wp_customize->add_control( new VW_Travel_Toggle_Switch_Custom_Control( $wp_customize, 'vw_travel_header_search',
       array(
		'label' => esc_html__( 'Show / Hide Search','vw-travel' ),
		'section' => 'vw_travel_topbar'
    )));

	$wp_customize->add_setting('vw_travel_location',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('vw_travel_location',array(
		'label'	=> __('Add Location','vw-travel'),
		'input_attrs' => array(
            'placeholder' => __( '828 N. Iqyreesrs Street Liocnss Park', 'vw-travel' ),
        ),
		'section'=> 'vw_travel_topbar',
		'type'=> 'text'
	));

	$wp_customize->add_setting('vw_travel_phone_number',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('vw_travel_phone_number',array(
		'label'	=> __('Add Phone Number','vw-travel'),
		'input_attrs' => array(
            'placeholder' => __( '+00 987 654 1230', 'vw-travel' ),
        ),
		'section'=> 'vw_travel_topbar',
		'type'=> 'text'
	));

	$wp_customize->add_setting('vw_travel_email_address',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('vw_travel_email_address',array(
		'label'	=> __('Add Email Address','vw-travel'),
		'input_attrs' => array(
            'placeholder' => __( 'example@gmail.com', 'vw-travel' ),
        ),
		'section'=> 'vw_travel_topbar',
		'type'=> 'text'
	));
    
	//Slider
	$wp_customize->add_section( 'vw_travel_slidersettings' , array(
    	'title'      => __( 'Slider Settings', 'vw-travel' ),
		'panel' => 'vw_travel_panel_id'
	) );

	$wp_customize->add_setting( 'vw_travel_slider_arrows',
       array(
          'default' => 1,
          'transport' => 'refresh',
          'sanitize_callback' => 'vw_travel_switch_sanitization'
    ));  
    $wp_customize->add_control( new VW_Travel_Toggle_Switch_Custom_Control( $wp_customize, 'vw_travel_slider_arrows',
       array(
          'label' => esc_html__( 'Show / Hide Slider','vw-travel' ),
          'section' => 'vw_travel_slidersettings'
    )));

	for ( $count = 1; $count <= 4; $count++ ) {

		$wp_customize->add_setting( 'vw_travel_slider_page' . $count, array(
			'default'           => '',
			'sanitize_callback' => 'vw_travel_sanitize_dropdown_pages'
		) );
		$wp_customize->add_control( 'vw_travel_slider_page' . $count, array(
			'label'    => __( 'Select Slider Page', 'vw-travel' ),
			'description' => __('Slider image size (1500 x 765)','vw-travel'),
			'section'  => 'vw_travel_slidersettings',
			'type'     => 'dropdown-pages'
		) );
	}

	//content layout
	$wp_customize->add_setting('vw_travel_slider_content_option',array(
        'default' => __('Center','vw-travel'),
        'sanitize_callback' => 'vw_travel_sanitize_choices'
	));
	$wp_customize->add_control(new VW_Travel_Image_Radio_Control($wp_customize, 'vw_travel_slider_content_option', array(
        'type' => 'select',
        'label' => __('Slider Content Layouts','vw-travel'),
        'section' => 'vw_travel_slidersettings',
        'choices' => array(
            'Left' => get_template_directory_uri().'/assets/images/slider-content1.png',
            'Center' => get_template_directory_uri().'/assets/images/slider-content2.png',
            'Right' => get_template_directory_uri().'/assets/images/slider-content3.png',
    ))));


	//Slider excerpt
	$wp_customize->add_setting( 'vw_travel_slider_excerpt_number', array(
		'default'              => 30,
		'type'                 => 'theme_mod',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'absint',
		'sanitize_js_callback' => 'absint',
	) );
	$wp_customize->add_control( 'vw_travel_slider_excerpt_number', array(
		'label'       => esc_html__( 'Slider Excerpt length','vw-travel' ),
		'section'     => 'vw_travel_slidersettings',
		'type'        => 'range',
		'settings'    => 'vw_travel_slider_excerpt_number',
		'input_attrs' => array(
			'step'             => 5,
			'min'              => 15,
			'max'              => 50,
		),
	) );

	//Opacity
	$wp_customize->add_setting('vw_travel_slider_opacity_color',array(
      'default'              => 0.5,
      'sanitize_callback' => 'vw_travel_sanitize_choices'
	));

	$wp_customize->add_control( 'vw_travel_slider_opacity_color', array(
	'label'       => esc_html__( 'Slider Image Opacity','vw-travel' ),
	'section'     => 'vw_travel_slidersettings',
	'type'        => 'select',
	'settings'    => 'vw_travel_slider_opacity_color',
	'choices' => array(
      '0' =>  esc_attr('0','vw-travel'),
      '0.1' =>  esc_attr('0.1','vw-travel'),
      '0.2' =>  esc_attr('0.2','vw-travel'),
      '0.3' =>  esc_attr('0.3','vw-travel'),
      '0.4' =>  esc_attr('0.4','vw-travel'),
      '0.5' =>  esc_attr('0.5','vw-travel'),
      '0.6' =>  esc_attr('0.6','vw-travel'),
      '0.7' =>  esc_attr('0.7','vw-travel'),
      '0.8' =>  esc_attr('0.8','vw-travel'),
      '0.9' =>  esc_attr('0.9','vw-travel')
	),
	));
    
	//Top Destination section
	$wp_customize->add_section( 'vw_travel_top_destination_section' , array(
    	'title'      => __( 'Top Destination Settings', 'vw-travel' ),
		'priority'   => null,
		'panel' => 'vw_travel_panel_id'
	) );

	$wp_customize->add_setting( 'vw_travel_post_hide_show',
       array(
          'default' => 1,
          'transport' => 'refresh',
          'sanitize_callback' => 'vw_travel_switch_sanitization'
    ));  
    $wp_customize->add_control( new VW_Travel_Toggle_Switch_Custom_Control( $wp_customize, 'vw_travel_post_hide_show',
       array(
          'label' => esc_html__( 'Show / Hide Top Destination','vw-travel' ),
          'section' => 'vw_travel_top_destination_section'
    )));

	$wp_customize->add_setting('vw_travel_section_title',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('vw_travel_section_title',array(
		'label'	=> __('Add Section Title','vw-travel'),
		'input_attrs' => array(
            'placeholder' => __( 'Explore Top Destination', 'vw-travel' ),
        ),
		'section'=> 'vw_travel_top_destination_section',
		'type'=> 'text'
	));

	$wp_customize->add_setting('vw_travel_top_destination_number',array(
		'default'	=> 0,
		'sanitize_callback'	=> 'sanitize_text_field',
	));
	$wp_customize->add_control('vw_travel_top_destination_number',array(
		'label'	=> __('Number of Top Destination to show','vw-travel'),
		'description' => __('Images Size (370 x 360)','vw-travel'),
		'section'	=> 'vw_travel_top_destination_section',
		'type'		=> 'number'
	));

	//Blog Post
	$wp_customize->add_section('vw_travel_blog_post',array(
		'title'	=> __('Blog Post Settings','vw-travel'),
		'panel' => 'vw_travel_panel_id',
	));	

	$wp_customize->add_setting( 'vw_travel_toggle_postdate',array(
        'default' => 1,
        'transport' => 'refresh',
        'sanitize_callback' => 'vw_travel_switch_sanitization'
    ) );
    $wp_customize->add_control( new VW_Travel_Toggle_Switch_Custom_Control( $wp_customize, 'vw_travel_toggle_postdate',array(
        'label' => esc_html__( 'Post Date','vw-travel' ),
        'section' => 'vw_travel_blog_post'
    )));

    $wp_customize->add_setting( 'vw_travel_toggle_author',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'vw_travel_switch_sanitization'
    ) );
    $wp_customize->add_control( new VW_Travel_Toggle_Switch_Custom_Control( $wp_customize, 'vw_travel_toggle_author',array(
		'label' => esc_html__( 'Author','vw-travel' ),
		'section' => 'vw_travel_blog_post'
    )));

    $wp_customize->add_setting( 'vw_travel_toggle_comments',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'vw_travel_switch_sanitization'
    ) );
    $wp_customize->add_control( new VW_Travel_Toggle_Switch_Custom_Control( $wp_customize, 'vw_travel_toggle_comments',array(
		'label' => esc_html__( 'Comments','vw-travel' ),
		'section' => 'vw_travel_blog_post'
    )));

    $wp_customize->add_setting( 'vw_travel_excerpt_number', array(
		'default'              => 30,
		'type'                 => 'theme_mod',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'absint',
		'sanitize_js_callback' => 'absint',
	) );
	$wp_customize->add_control( 'vw_travel_excerpt_number', array(
		'label'       => esc_html__( 'Excerpt length','vw-travel' ),
		'section'     => 'vw_travel_blog_post',
		'type'        => 'range',
		'settings'    => 'vw_travel_excerpt_number',
		'input_attrs' => array(
			'step'             => 5,
			'min'              => 0,
			'max'              => 50,
		),
	) );

	//Content Creation
	$wp_customize->add_section( 'vw_travel_content_section' , array(
    	'title' => __( 'Customize Home Page Settings', 'vw-travel' ),
		'priority' => null,
		'panel' => 'vw_travel_panel_id'
	) );

	$wp_customize->add_setting('vw_travel_content_creation_main_control', array(
		'sanitize_callback' => 'esc_html',
	) );

	$homepage= get_option( 'page_on_front' );

	$wp_customize->add_control(	new VW_Travel_Content_Creation( $wp_customize, 'vw_travel_content_creation_main_control', array(
		'options' => array(
			esc_html__( 'First select static page in homepage setting for front page.Below given edit button is to customize Home Page. Just click on the edit option, add whatever elements you want to include in the homepage, save the changes and you are good to go.','vw-travel' ),
		),
		'section' => 'vw_travel_content_section',
		'button_url'  => admin_url( 'post.php?post='.$homepage.'&action=edit'),
		'button_text' => esc_html__( 'Edit', 'vw-travel' ),
	) ) );

	//Footer Text
	$wp_customize->add_section('vw_travel_footer',array(
		'title'	=> __('Footer Settings','vw-travel'),
		'panel' => 'vw_travel_panel_id',
	));	
	
	$wp_customize->add_setting('vw_travel_footer_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('vw_travel_footer_text',array(
		'label'	=> __('Copyright Text','vw-travel'),
		'input_attrs' => array(
            'placeholder' => __( 'Copyright 2019, .....', 'vw-travel' ),
        ),
		'section'=> 'vw_travel_footer',
		'type'=> 'text'
	));	

	$wp_customize->add_setting( 'vw_travel_hide_show_scroll',array(
    	'default' => 1,
      	'transport' => 'refresh',
      	'sanitize_callback' => 'vw_travel_switch_sanitization'
    ));  
    $wp_customize->add_control( new VW_Travel_Toggle_Switch_Custom_Control( $wp_customize, 'vw_travel_hide_show_scroll',array(
      	'label' => esc_html__( 'Show / Hide Scroll To Top','vw-travel' ),
      	'section' => 'vw_travel_footer'
    )));

	$wp_customize->add_setting('vw_travel_scroll_top_alignment',array(
        'default' => __('Right','vw-travel'),
        'sanitize_callback' => 'vw_travel_sanitize_choices'
	));
	$wp_customize->add_control(new VW_Travel_Image_Radio_Control($wp_customize, 'vw_travel_scroll_top_alignment', array(
        'type' => 'select',
        'label' => __('Scroll To Top','vw-travel'),
        'section' => 'vw_travel_footer',
        'settings' => 'vw_travel_scroll_top_alignment',
        'choices' => array(
            'Left' => get_template_directory_uri().'/assets/images/layout1.png',
            'Center' => get_template_directory_uri().'/assets/images/layout2.png',
            'Right' => get_template_directory_uri().'/assets/images/layout3.png'
    ))));

}

add_action( 'customize_register', 'vw_travel_customize_register' );

load_template( trailingslashit( get_template_directory() ) . '/inc/logo/logo-resizer.php' );

/**
 * Singleton class for handling the theme's customizer integration.
 *
 * @since  1.0.0
 * @access public
 */
final class VW_Travel_Customize {

	/**
	 * Returns the instance.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return object
	 */
	public static function get_instance() {

		static $instance = null;

		if ( is_null( $instance ) ) {
			$instance = new self;
			$instance->setup_actions();
		}

		return $instance;
	}

	/**
	 * Constructor method.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function __construct() {}

	/**
	 * Sets up initial actions.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function setup_actions() {

		// Register panels, sections, settings, controls, and partials.
		add_action( 'customize_register', array( $this, 'sections' ) );

		// Register scripts and styles for the controls.
		add_action( 'customize_controls_enqueue_scripts', array( $this, 'enqueue_control_scripts' ), 0 );
	}

	/**
	 * Sets up the customizer sections.
	 *
	 * @since  1.0.0
	 * @access public
	 * @param  object  $manager
	 * @return void
	*/
	public function sections( $manager ) {

		// Load custom sections.
		load_template( trailingslashit( get_template_directory() ) . '/inc/section-pro.php' );

		// Register custom section types.
		$manager->register_section_type( 'VW_Travel_Customize_Section_Pro' );

		// Register sections.
		$manager->add_section(new VW_Travel_Customize_Section_Pro($manager,'example_1',	array(
			'priority'   => 1,
			'title'    => esc_html__( 'VW TRAVEL PRO', 'vw-travel' ),
			'pro_text' => esc_html__( 'UPGRADE PRO', 'vw-travel' ),
			'pro_url'  => esc_url('https://www.vwthemes.com/themes/wordpress-travel-theme/'),
		)));

		// Register sections.
		$manager->add_section(new VW_Travel_Customize_Section_Pro($manager,'example_2',array(
			'priority'   => 1,
			'title'    => esc_html__( 'DOCUMENATATION', 'vw-travel' ),
			'pro_text' => esc_html__( 'DOCS', 'vw-travel' ),
			'pro_url'  => admin_url('themes.php?page=vw_travel_guide'),
		)));
	}

	/**
	 * Loads theme customizer CSS.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function enqueue_control_scripts() {

		wp_enqueue_script( 'vw-travel-customize-controls', trailingslashit( get_template_directory_uri() ) . '/assets/js/customize-controls.js', array( 'customize-controls' ) );

		wp_enqueue_style( 'vw-travel-customize-controls', trailingslashit( get_template_directory_uri() ) . '/assets/css/customize-controls.css' );
	}
}

// Doing this customizer thang!
VW_Travel_Customize::get_instance();