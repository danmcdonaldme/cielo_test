$(document).ready(function() {

    $('.datetime').datepicker({
        dateFormat: 'dd/mm/yy'
    });

//   FORM VALIDATION
    $('#user_form').validate({
        igonore: [],
        rules: {
            user_name: {
                required: true,
                noSpace: true
            },
            user_email: {
                required: true,
                email: true
            },
            user_dob: {
                required: true,
            },
            favourite_color: {
                required: true,
            }
        },
        messages: {
            user_name: {
                required: " User name is required."
            },
            user_email: {
                required: 'Email is required.',
                email: 'Must be of the type abc@test.com'

            },
            user_dob: "DOB is required.",
            favourite_color: " Favourite color is required."

        },
        errorPlacement: function(error, element) {
            
                error.insertAfter(element);
            
        }

    });

});