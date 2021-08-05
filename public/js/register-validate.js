
// just for the demos, avoids form submit
jQuery.validator.setDefaults({
    success: function (label) {
        label.attr('id', 'valid');
    },
});
$("#myform").validate({
    rules: {
        username: {
            required: true,
            pattern: "^[A-Za-z0-9_\.]{6,32}$"
            // pattern: "^(?=[a-zA-Z0-9._]{8,20}$)(?!.*[_.]{2})[^_.].*[^_.]$"
        },
        your_email: {
            required: true,
            email: true
        },
        password: "required",
        confirm_password: {
            required: true,
            equalTo: "#password"
        }
    },
    messages: {
        username: {
            required: "Please enter an username"
        },
        your_email: {
            required: "Please provide an email"
        },
        password: {
            required: "Please provide a password"
        },
        confirm_password: {
            required: "Please provide a password",
            equalTo: "Wrong Password"
        }
    }
});
