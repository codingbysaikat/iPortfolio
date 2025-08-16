<?php
function port_customize_register($wp_customize){
    // Add a Section for Footer
    $wp_customize->add_section('ft_text',array(
        'title'=>__('Footer Text','port'),
        'priority'=>'600',

    ));
    $wp_customize->add_setting('footer_text',array(
        'default'=>__('© Copyright iPortfolio All Rights Reserved','port'),
        'transport'=>'refresh',

    ));
    $wp_customize->add_control('footer_text',array(
        'label'=>__('Write the footer text','port'),
        'section'=>'ft_text',
        'type'=>'text',

    ));    
}
add_action("customize_register","port_customize_register");