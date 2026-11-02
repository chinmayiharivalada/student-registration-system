
$(document).ready(function () {

    $("#registrationForm").submit(function (event) {

        let fullname = $("#fullname").val().trim();
        let phone = $("#phone").val().trim();

        // Validate full name
        if (fullname.length < 3) {
            alert("Please enter a valid full name.");
            event.preventDefault();
            return;
        }

        // Validate phone number
        let phonePattern = /^[0-9]{10}$/;

        if (!phonePattern.test(phone)) {
            alert("Please enter a valid 10-digit phone number.");
            event.preventDefault();
            return;
        }

    });

});
