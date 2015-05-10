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
            teamName: {
                required: true,
                minlength: 3
            },
            participant1: {
                required: true,
                minlength: 15
            },
            participant2: {
                required: true,
                minlength: 15
            },
            participant3: {
                required: true,
                minlength: 15
            },
            participant4: {
                required: true,
                minlength: 15
            },
            participant5: {
                required: true,
                minlength: 15
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
            },
            email: {
                minlength: 15
            }
        },
        messages: {
            name: {
                required: "Please enter your name",
                minlength: "Name entered is too short"
            },
            teamName: {
                required: "Please enter your team name",
                minlength: "Team Name entered is too short"
            },
            participant1: {
                required: "Please enter the first participant email",
                minlength: "email entered is too short"
            },
            participant2: {
                required: "Please enter the second participant email",
                minlength: "email entered is too short"
            },
            participant3: {
                required: "Please enter the third participant email",
                minlength: "email entered is too short"
            },
            participant4: {
                required: "Please enter the fourth participant email",
                minlength: "email entered is too short"
            },
            participant5: {
                required: "Please enter the fifth participant email",
                minlength: "email entered is too short"
            },
            email1: {
                required: "Please enter the email",
                minlength: "email entered is too short"
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
