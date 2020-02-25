<?php 

/*
    @package full_landing_page

    functions.php Template
*/

// Enqueue Stylesheets
function load_stylesheet($hook){
    wp_enqueue_style('landingpage_style', get_template_directory_uri() . '/css/full_landing_page.style.css', false, '1.0.0', 'all');
}
add_action('wp_enqueue_scripts', 'load_stylesheet');

// Customize API
// Full size landing page
function landing_page_customize_register($wp_customize){
    $wp_customize->add_section('landingpage_settings', array(
        'title'         => __('Landingpage', 'full_landing_page'),
        'description'   => sprintf(__('Setup your landing page')),
        'priority'      => 220
    ));

    $wp_customize->add_setting('landingpage_picture', array(
        'default'   => get_template_directory_uri() . '/img/background.jpg',
        'type'      => 'theme_mod' 
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'landingpage_picture', array(
        'label'     => __('Background Picture', 'full_landing_page'),
        'section'   => 'landingpage_settings',
        'settings'  => 'landingpage_picture',
        'priority'  => 1
    )));

    $wp_customize->add_setting('landingpage_header', array(
        'default'   => _x('Welcome to the beach!', 'full_landing_page'),
        'type'      => 'theme_mod'
    ));

    $wp_customize->add_control('landingpage_header', array(
        'label'     => __('Header', 'full_landing_page'),
        'section'   => 'landingpage_settings',
        'priority'  => 2
    ));

    $wp_customize->add_setting('landingpage_text', array(
        'default'   => _x('Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi officiis ipsum officia numquam expedita ullam.', 'full_landing_page'),
        'type'      => 'theme_mod'
    ));

    $wp_customize->add_control('landingpage_text', array(
        'label'     => __('Landing Page Text', 'full_landing_page'),
        'section'   => 'landingpage_settings',
        'type'      => 'textarea',
        'priority'  => 3
    ));

    $wp_customize->add_setting('button_text', array(
        'default'   => _x('Read More', 'full_landing_page'),
        'type'      => 'theme_mod'
    ));

    $wp_customize->add_control('button_text', array(
        'label'     => __('Button Text', 'full_landing_page'),
        'section'   => 'landingpage_settings',
        'priority'  => 4
    ));

    $wp_customize->add_setting('button_url', array(
        'default'   => _x('http://www.yoururl.com', 'full_landing_page'),
        'type'      => 'theme_mod'
    ));

    $wp_customize->add_control('button_url', array(
        'label'     => __('Button URL', 'full_landing_page'),
        'section'   => 'landingpage_settings',
        'priority'  => 5
    ));
}
add_action('customize_register', 'landing_page_customize_register');

// Add widget location
function ourWidgetsInit(){
    register_sidebar(array(
        'name'  => 'My Custom Widget',
        'id'    => 'widget1',
        'before_widget' => '<div class="widget-item">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="myclass">',
        'after_title'   => '</h4>'
    ));

    // New Widget
    register_sidebar(array(
        'name'  => 'My Custom Footer Widget',
        'id'    => 'footer1'
    ));

    // New Widget
    register_sidebar(array(
        'name'  => 'My Custom Footer Widget 2',
        'id'    => 'footer2'
    ));

    // New Widget
    register_sidebar(array(
        'name'  => 'My Custom Footer Widget 3',
        'id'    => 'footer3'
    ));

    // New Widget
    register_sidebar(array(
        'name'  => 'My Custom Footer Widget 4',
        'id'    => 'footer4'
    ));
}
add_action('widgets_init', 'ourWidgetsInit');