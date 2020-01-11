<?php
	add_action( 'wp_enqueue_scripts', 'holiday_tours_enqueue_styles' );
	function holiday_tours_enqueue_styles() {
    	$parent_style = 'vw-tour-lite-style'; // Style handle of parent theme.
		wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
		wp_enqueue_style( 'holiday-tours-style', get_stylesheet_uri(), array( $parent_style ) );
	}

	function holiday_tours_customizer ( $wp_customize ) {
		//OUR services
		$wp_customize->add_section('holiday_tours_wonderplace',array(
			'title'	=> __('Wonderfull Places Section','holiday-tours'),
			'description'=> __('This section will appear below the service section.','holiday-tours'),
			'panel' => 'vw_tour_lite_panel_id',
		));
		
		for ( $count = 0; $count <= 0; $count++ ) {

			$wp_customize->add_setting( 'holiday_tours_wondersettings-page-' . $count, array(
				'default'           => '',
				'sanitize_callback' => 'absint'
			));
			$wp_customize->add_control( 'holiday_tours_wondersettings-page-' . $count, array(
				'label'    => __( 'Select wonderfull place Page', 'holiday-tours' ),
				'section'  => 'holiday_tours_wonderplace',
				'type'     => 'dropdown-pages'
			));
		}
	}

	add_action( 'customize_register', 'holiday_tours_customizer' );

	define('holiday_TOURS_CREDIT','https://wordpress.org','holiday-tours');

	if ( ! function_exists( 'holiday_tours_credit' ) ) {
		function holiday_tours_credit(){
			echo "<a href=".esc_url(holiday_TOURS_CREDIT)." target='_blank'>". esc_html__('wordpress.org','holiday-tours')."</a>";
		}
	}	
?>