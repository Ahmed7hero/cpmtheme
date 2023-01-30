<!-- /* Creating a Landing panel in the customizer. */ -->
<?php
    function theme_customizer_function(\WP_Customize_Manager $wp_customize){
        $wp_customize->add_panel('landing_panel',array(
            'title'=>'landing panel',
            // 'capability'=>'edit_theme_options',
        ));

        /* Creating a Home section in the customizer. */
        $wp_customize->add_section('landing_page_home', array(
            'title' => "Home Section",
            'description' => 'Home Section Customizer',
            'panel' => 'landing_panel'
        ));

        $wp_customize->add_setting('landing_small_header', array(
            // 'default' => 'default',
        ));

        $wp_customize->add_control('landing_small_header', array(
            'label'=>'Small Heading',
            'section'=>'landing_page_home',
            // 'default' => 'default',
        ));



        // $wp_customize->add_setting('landing_textarea', array(
            
        // ));
        // $wp_customize->add_control('landing_textarea', array(
        //     'label'=>'Description',
        //     'section'=>'landing_page_home',
        // ));
        

    }
    add_action('customize_register','theme_customizer_function');



?>