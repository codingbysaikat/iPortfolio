<?php
use Carbon_Fields\Container;
use Carbon_Fields\Field;
add_action( 'carbon_fields_register_fields', 'crb_attach_post_options' );
function crb_attach_post_options() {
    Container::make( 'theme_options', __( 'Theme Options' ) )
    ->add_tab( __( 'Taglines' ), array(
       Field::make( 'complex', 'crb_taglines', __( 'Your taglines' ) )
       ->set_help_text( 'Add a new tagline' )->set_layout( 'tabbed-vertical' )->set_max(10)
       ->add_fields( array(
            Field::make( 'text', 'tagline', __( 'your tagline ' ) ),
    ) )
       
    ) )
    ->add_tab( __( 'About Info' ), array(
        Field::make( 'text', 'crb_title', __( 'Add a Title' ) )->set_attribute( 'placeholder', 'UI/UX Designer & Web Developer' )->set_help_text( 'Add your title here' ),
        Field::make( 'textarea', 'crb_about_tagline', __( 'Add About tagline' ) )->set_rows( 2 )->set_help_text( 'Add your about tagline here' ),
        Field::make( 'image', 'crb_image', __( 'Add your image' ) )->set_help_text( 'Add your image here' ),
        Field::make( 'date', 'crb_birthday', __( 'Select your birthday' ) )->set_storage_format( 'Y-m-d' )->set_help_text( 'Add your date of birth here' ),
        Field::make( 'text', 'crb_website_url', __( 'Website URL' ) )->set_attribute( 'placeholder', 'www.example.com' )->set_help_text( 'Add your website here' ),
        Field::make( 'text', 'crb_phone_number', __( 'Phone Number' ) )->set_attribute( 'placeholder', '(***) ***-****' )->set_help_text( 'Add your phone number here' ),
        Field::make( 'text', 'crb_city', __( 'City' ) )->set_attribute( 'placeholder', 'Khulna' )->set_help_text( 'Add your city here' ),
        Field::make( 'text', 'crb_age', __( 'Age' ) )->set_help_text( 'Add your age here' ),
        Field::make( 'text', 'crb_degree', __( 'Degree' ) )->set_help_text( 'Add your top degree here' ),
        Field::make( 'text', 'crb_email', __( 'Email' ) )->set_help_text( 'Add your email address here' ),
        Field::make( 'text', 'crb_freelance', __( 'Freelance' ) )->set_attribute( 'placeholder', 'Available' )->set_help_text( 'If you provide freelance services' ),
        Field::make( 'textarea', 'crb_description', __( 'Extra Description' ) )->set_help_text( 'Add more about yourself' ),

    ) )
    ->add_tab( __( 'Support & Projects' ), array(
        Field::make( 'checkbox', 'crb_hide_content', __( 'Hide Content' ) )->set_help_text( 'Hide this section from your website' ),
        Field::make( 'text', 'crb_happy_clients', __( 'Number of Happy Clients' ) )->set_help_text( 'Add how many clients did you provide your services' ),
        Field::make( 'text', 'crb_happy_projects', __( 'Number of Projects' ) )->set_help_text( 'Add how many projects did you completed' ),
        Field::make( 'text', 'crb_support', __( 'Hours Of Support ' ) )->set_help_text( 'Add how many hours did you provides support or work' ),
        Field::make( 'text', 'crb_members', __( 'Your team members ' ) )->set_help_text( 'Add how many peoples in your team' ),

    ))
    ->add_tab( __( 'Skills' ), array(
        Field::make( 'checkbox', 'crb_hide_skills', __( 'Hide Skills' ) )->set_option_value( 'no' )->set_help_text( 'Hide this section from your website' ),
        Field::make( 'complex', 'crb_skills', __( 'Your Skills' ) )->set_help_text( 'Add a new skill' )->set_layout( 'tabbed-vertical' )
        ->add_fields(array(
            Field::make( 'text', 'skill', __( 'Add skill' ) )->set_help_text( 'Add a skill using capital letter' ),
            Field::make( 'text', 'skill_percentage', __( 'Add skill percentage' ) )->set_attribute( 'placeholder', '0' )->set_help_text( 'only add the percentage number' ),
        ))

    ))
    ->add_tab( __( 'Resume' ), array(
        Field::make( 'checkbox', 'crb_hide_resume', __( 'Hide Resume' ) )->set_option_value( 'no' )->set_help_text( 'Hide this section from your website' ),
        Field::make( 'complex', 'crb_resume_sumary', __( 'Your Resume Summary' ) )->set_help_text( 'Add Summary info' )->set_max( 1 )
        ->add_fields(array(
            Field::make( 'text', 'crb_summary_title', __( 'Add Summary Title' ) )->set_help_text( 'Add Summary Title' ),
            Field::make( 'textarea', 'crb_summary_description', __( 'Add summary description' ) )->set_help_text( 'Add your summary description for your resume' ),
            Field::make( 'text', 'crb_summary_address', __( 'Add your address' ) )->set_help_text( 'Add your address on your resume' ),
            Field::make( 'text', 'crb_summary_phone', __( 'Add your phone number' ) )->set_help_text( 'Add your phone number on your resume' ),
            Field::make( 'text', 'crb_summary_email', __( 'Add your email' ) )->set_help_text( 'Add your email on your resume' ),
        )),
        Field::make( 'complex', 'crb_resume_education', __( 'Your Resume Education' ) )->set_help_text( 'Add your education qualification' )
        ->add_fields(array(
            Field::make( 'text', 'crb_degree', __( 'Degree Title' ) )->set_help_text( 'Add your degree title on your resume' ),
            Field::make( 'text', 'crb_degree_year', __( 'Passing Year' ) )->set_help_text( 'Add passing year on your resume' ),
            Field::make( 'text', 'crb_degree_instutite', __( 'Institute Name' ) )->set_help_text( 'Add institute name on your resume' ),
            Field::make( 'textarea', 'crb_degree_description', __( 'Degree Description' ) )->set_help_text( 'Add Degree Description on your resume' ),
            
        )),
        Field::make( 'complex', 'crb_resume_professional', __( 'Your Professional Experience' ) )->set_help_text( 'Add your Professional Experience' )
        ->add_fields(array(
            Field::make( 'text', 'crb_professional_ex_title', __( 'Professional Title' ) )->set_help_text( 'Add your professional exprience title on your resume' ),
            Field::make( 'text', 'crb_professional_ex_address', __( 'Work Address' ) )->set_help_text( 'Add your work address on your resume' ),
            Field::make( 'text', 'crb_professional_ex_year', __( 'Professional Years' ) )->set_help_text( 'Add your professional exprience year on your resume' ),
            Field::make( 'textarea', 'crb_professional_ex_description', __( 'Professional Description' ) )->set_help_text( 'Add your professional exprience description on your resume' ),

           
        ))

    ))->add_tab(__('Services'), array(
        Field::make( 'complex', 'crb_services', __( 'Your Services' ) )->set_help_text( 'Add your services' )
        ->add_fields(array(
        Field::make( 'text', 'crb_bootstrap_icon', __( 'Service Icon (bootstrap Icon)' ) )->set_help_text( 'Add Bootstrap Icon for service item' ),
        Field::make( 'text', 'crb_service_title', __( 'Service Title' ) )->set_help_text( 'Add service item title' ),
        Field::make( 'textarea', 'crb_service_description', __( 'Service Description' ) )->set_help_text( 'Add service item description' ),
        Field::make( 'text', 'crb_service_page', __( 'Service page URL' ) )->set_help_text( 'Add service page url' ),
        )),
        Field::make( 'checkbox', 'crb_show_content', __( 'Show Service Section' ) )->set_option_value( 'yes' )

    ))->add_tab(__('Testimonials'),array(
        Field::make( 'complex', 'crb_testimonials', __( 'Your Testimonials' ) )->set_help_text( 'Add your testimonial' )
        ->add_fields(array(
        Field::make( 'text', 'crb_client_name', __( 'Client Name' ) )->set_help_text( 'Add the client name' ),
        Field::make( 'text', 'crb_client_title', __( 'Client Title' ) )->set_help_text( 'Add Client Title title' ),
        Field::make( 'textarea', 'crb_testimonial_comment', __( 'Client Comment' ) )->set_help_text( 'Add Client Comment' ),
        )),
        Field::make( 'checkbox', 'crb_show_testimonial_content', __( 'Show Testimonial Section' ) )->set_option_value( 'yes' )

    ))->add_tab(__('Contacts'),array(
        Field::make( 'text', 'crb_address', __( 'Address' ) )->set_help_text( 'Add your address' ),
        Field::make( 'text', 'crb_call', __( 'Call Us' ) )->set_help_text( 'Add your phone number' ),
        Field::make( 'text', 'crb_contact_email', __( 'Email' ) )->set_help_text( 'Add your Email' ),
        Field::make( 'textarea', 'crb_embed_map', __( 'Embed a map' ) )->set_help_text( 'Embed your map' ),
        Field::make( 'checkbox', 'crb_show_contact_content', __( 'Show Contact Section' ) )->set_option_value( 'yes' )

    ));

    // Project information meta boxes
    Container::make( 'post_meta', __( 'Project information' ) )
	->where( 'post_type', '=', 'portfolio' )
	->add_fields( array( 
        Field::make( 'media_gallery', 'crb_portfolio_gallery', __( 'Portfolio Gallery' ) )->set_type('image' )->set_context( 'side' )->set_duplicates_allowed( false ),
        Field::make( 'text', 'crb_client', __( 'Client' ) ),
        Field::make( 'text', 'crb_project_url', __( 'Project URL' ) ),
        Field::make( 'date', 'crb_project_date', __( 'Project Date' ) ),
     ) );

}
