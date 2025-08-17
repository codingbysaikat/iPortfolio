jQuery(document).ready(function($) {
    $('#submit').click(function(event) {
        event.preventDefault(); // Prevent default form submission
        // ========== Get the Form Values ========== //
        let con_name = $('#name-field').val();
        let email =$('#email-field').val();
        let subject= $('#subject-field').val();
        let message=$('#message-field').val();

    console.log("Sanitized Inputs:", { con_name, email, subject, message });

    let error_message = $('.error-message');
    let sent_message = $('.sent-message');
    let loading = $('.loading');
    if ( con_name && email && subject && message) {
        if(error_message.hasClass("show")){
            error_message.removeClass("show");
        }
        if(!loading.hasClass("show")){
            loading.addClass("show");
        }
        $.ajax({
        type: 'POST',
        url: port_ajax_object.ajax_url,
        data: {
            action: 'contact_form_ajax_action', // Must match the PHP action
            contact_name: con_name,
            contact_email: email,
            contact_subject: subject,
            contact_message: message
        },
        success: function(response) {
                        console.log(response.data.message);
                            if(response.data.message == true){
                                loading.removeClass('show');
                                error_message.removeClass('show');
                                sent_message.addClass('show');
                               
                            }else{
                                loading.removeClass('show');
                                sent_message.removeClass('show');
                                error_message.addClass('show');
                                                                                           
                            } 
                        }

        });


    }else{
        if(!error_message.hasClass("show")){
            error_message.addClass("show");
        }
        if(loading.hasClass("show")){
             loading.removeClass("show");
             

        }
        if(sent_message.hasClass("show")){
            sent_message.removeClass("show");
        }

    }


        

    });

})