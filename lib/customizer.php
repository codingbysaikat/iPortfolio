<?php
function port_customize_register($wp_customize){
    // Add a Section for Footer
    $wp_customize->add_section('ft_text',array(
        'title'=> __('Footer Text','port'),
        'priority'=>'600',

    ));
    $wp_customize->add_setting('footer_text',array(
        'default'=> __('© Copyright iPortfolio All Rights Reserved','port'),
        'transport'=>'refresh',

    ));
    $wp_customize->add_control('footer_text',array(
        'label'=>__('Write the footer text','port'),
        'section'=>'ft_text',
        'type'=>'text',

    ));  
    //=============================================//
    $wp_customize->add_section("back_ground", array(
        'title'    => __('Background Image','port'),
        'priority' => 500, // integer is better
    ));
    
    $wp_customize->add_setting("bg_image", array(
        'default'   => '',
        'transport' => 'refresh',
    ));
    
    $wp_customize->add_control(new WP_Customize_Image_Control(
        $wp_customize,
        'bg_image',
        array(
            'label'    => __( 'Upload a background image', 'port' ),
            'section'  => 'back_ground',
            'settings' => 'bg_image',
        )
    ));

}
add_action("customize_register","port_customize_register");