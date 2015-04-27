/**
 * Created by João on 27/04/2015.
 */


$().ready(function() {
    // validate signup form on keyup and submit
    $("#reg_form").validate({
        rules: {
            name: {
                required: true,
                minlength: 3
            },
            password: {
                required: true,
                minlength: 5
            },
            confirm_password: {
                required: true,
                minlength: 5,
                equalTo: "#password"
            },
            country: {
                required: true
            }
        },
        messages: {
            name: {
                required: "Please enter your name",
                minlength: "Name entered is too short"
            },
            password: {
                required: "Please provide a password",
                minlength: "Your password must be at least 5 characters long"
            },
            confirm_password: {
                required: "Please provide a password",
                minlength: "Your password must be at least 5 characters long",
                equalTo: "Please enter the same password as above"
            },
            country: {
                required: "Please provide a country"
            }
        }
    });
});
