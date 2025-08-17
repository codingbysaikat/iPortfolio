<?php
define("VERSION", time());
require_once get_theme_file_path('/inc/tgm.php');
require_once get_theme_file_path('/inc/custom-functions.php');
require_once get_theme_file_path('/inc/carbon_fields.php');
// Customizer load
include('lib/customizer.php');
// Theme Basices Bootstriping
function port_theme_doc(){
	load_theme_textdomain('port');
	add_theme_support('title_tag');
	add_theme_support('html5', array('search-form','comment-list'));
	add_theme_support('post-formats',array('image','video'));
	add_theme_support('custom-logo');
	add_theme_support( 'menus' );
	add_theme_support('post-thumbnails'); 
	//Register the Dropdown Menu
	register_nav_menus(array(
        'primary-menu' => __('Primary Menu', 'port'),
    ));
}
add_action('after_setup_theme','port_theme_doc');
function port_scripts(){
    // Enqueue the Main CSS Files
	wp_enqueue_style("main-css",get_theme_file_uri("/assets/css/main.css"), null,VERSION);
	wp_enqueue_style("bootstrap-css",get_theme_file_uri("/assets/vendor/bootstrap/css/bootstrap.min.css"), null,VERSION);
	wp_enqueue_style("bootstrap-icon",get_theme_file_uri("/assets/vendor/bootstrap-icons/bootstrap-icons.css"), null,VERSION);
	wp_enqueue_style("sos-css",get_theme_file_uri("/assets/vendor/aos/aos.css"), null,VERSION);
	wp_enqueue_style("glightbox-css",get_theme_file_uri("/assets/vendor/glightbox/css/glightbox.min.css"), null,VERSION);
	wp_enqueue_style("swiper-css",get_theme_file_uri("/assets/vendor/swiper/swiper-bundle.min.css"), null,VERSION);
	// Enqueue the Main JS Files
    wp_enqueue_script("bootstrap-bundle-min",get_theme_file_uri("/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"),null,VERSION,true);
	wp_enqueue_script("php-email-form-js",get_theme_file_uri("/assets/vendor/php-email-form/validate.js"),null,VERSION,true);
	wp_enqueue_script("sos-js",get_theme_file_uri("/assets/vendor/aos/aos.js"),null,VERSION,true);
	wp_enqueue_script("ypedumd-js",get_theme_file_uri("/assets/vendor/typed.js/typed.umd.js"),null,VERSION,true);
	wp_enqueue_script("precounter-js",get_theme_file_uri("/assets/vendor/purecounter/purecounter_vanilla.js"),null,VERSION,true);
	wp_enqueue_script("waypoints-js",get_theme_file_uri("/assets/vendor/waypoints/noframework.waypoints.js"),null,VERSION,true);
	wp_enqueue_script("glightbox-min-js",get_theme_file_uri("/assets/vendor/glightbox/js/glightbox.min.js"),null,VERSION,true);
	wp_enqueue_script("imagesloaded-pkgd-min-js",get_theme_file_uri("/assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"),null,VERSION,true);
	wp_enqueue_script("isotope-pkgd-min-js",get_theme_file_uri("/assets/vendor/isotope-layout/isotope.pkgd.min.js"),null,VERSION,true);
	wp_enqueue_script("swiper-bundle-min-js",get_theme_file_uri("/assets/vendor/swiper/swiper-bundle.min.js"),null,VERSION,true);
	wp_enqueue_script("main-js",get_theme_file_uri("/assets/js/main.js"),null,VERSION,true);
	wp_enqueue_style('dashicons');
	// ========== Enqueue Custom JavaScript File and Localize The AJAX URL. =================== //
	wp_enqueue_script('port-ajax-script', get_template_directory_uri() . '/assets/js/port-ajax-script.js', array('jquery'), null, true);
    wp_localize_script('port-ajax-script', 'port_ajax_object', array(
        'ajax_url' => admin_url('admin-ajax.php'),
    ));
}
add_action('wp_enqueue_scripts','port_scripts');
function port_add_remove_contactmethods( $contactmethods ) {
    // Add Twitter
    $contactmethods['twitter'] = __('Twitter(X)','port');
    //Add Facebook
    $contactmethods['facebook'] = __('Facebook','port');
    //Instgaram
    $contactmethods['instagram'] = __('Instagram','port');
	//LinkedIn
	$contactmethods['linkedin'] = __('LinkedIn','port');
    return $contactmethods;
}
add_filter('user_contactmethods','port_add_remove_contactmethods',10,1);

//Register custom widget
function port_custom_widgets(){
	// Skills Description
	register_sidebar(array(
		'name'=>__('Skills Description','port'),
		'id'=>'skill_ds',
		'discription'=>__('Add your skill describtion','port'),
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',

	));
	// Resume Description
	register_sidebar(array(
		'name'=>__('Resume Description','port'),
		'id'=>'resume_ds',
		'description'=>__('Add your resume description','port'),
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
	));
	// Resume Description
	register_sidebar(array(
		'name'=>__('Portfolio Description','port'),
		'id'=>'portfolio_ds',
		'description'=>__('Add your portfolio description','port'),
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
	));
	// Services Description
	register_sidebar(array(
		'name'=>__('Services Description','port'),
		'id'=>'services_ds',
		'description'=>__('Add your services description','port'),
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
	));
	// Testimonials Description
	register_sidebar(array(
		'name'=>__('Testimonials Description','port'),
		'id'=>'testimonials_ds',
		'description'=>__('Add your testimonials description','port'),
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
	));
	// Contact Description
	register_sidebar(array(
		'name'=>__('Contact Description', 'port' ),
		'id'=>'contact_ds',
		'description'=>__('Add your Contact description','port'),
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
	));
	// service page details widget
	register_sidebar(array(
		'name'=>__('Service page Information'),
		'id'=>'service_page-deatils',
		'description'=>__('Add necessary information about the service'),
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
	));
}
add_action('widgets_init','port_custom_widgets');



// ========= Contact form handling using AJAX ================ //

function port_conact_form_ajax_request(){
	$contact_name    = sanitize_text_field($_POST['contact_name']);
    $contact_email   = sanitize_email($_POST['contact_email']);
    $contact_subject = sanitize_text_field($_POST['contact_subject']);
    $contact_message = wp_kses_post($_POST['contact_message']);
    
    if ($contact_name && $contact_email && $contact_subject && $contact_message) {
        $mail_content = "Name: {$contact_name}<br>Email: {$contact_email}<br><br>{$contact_message}";
        $headers = array(
            'Content-Type: text/html; charset=UTF-8',
            'Reply-To: ' . $contact_email
        );
    
        $admin_email = get_option('admin_email');
        $send_mail = wp_mail($admin_email, $contact_subject, $mail_content, $headers);
    }
    if($send_mail){
        $response = array(
            'message' => true,
        );

    }else{
        $response = array(
            'message' => false,
        );
    }
    // Send JSON response
    wp_send_json_success($response);


}

// Register AJAX action for logged-in users - contact form
add_action('wp_ajax_contact_form_ajax_action', 'port_conact_form_ajax_request');

// Register AJAX action for guests (non-logged-in users) - contact form
add_action('wp_ajax_nopriv_contact_form_ajax_action', 'port_conact_form_ajax_request');




