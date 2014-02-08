$(function() {
  // Validate the contact form
  $('#contactform').validate({
    // Specify what the errors should look like
    // when they are dynamically added to the form
    errorElement: "label",
    wrapper: "td",
    errorPlacement: function(error, element) {
      error.insertBefore( element.parent().parent() );
      error.wrap("<tr class='error'></tr>");
      $("<td></td>").insertBefore(error);
    },
 
    // Add requirements to each of the fields
    rules: {
      name: {
        required: true,
        minlength: 2
      },
      email: {
        required: true,
        email: true
      },
      rider: {
        required: true,
        minlength: 6
      },
      dragon: {
        required: true,
        minlength: 2
      },
      message: {
        required: true,
        minlength: 0
      }
    },
 
    // Specify what error messages to display
    // when the user does something horrid
    messages: {
      name: {
        required: "Please enter your name.",
        minlength: jQuery.format("Can you type a bit more, we need at least {0} characters.")
      },
      email: {
        required: "Please enter your email.",
        email: "Please enter a valid email."
      },
      message: {
        required: "Please enter a message.",
        minlength: jQuery.format("Can you type a bit more, we need at least {0} characters.")
      },
      rider: {
        required: "Please enter your desired riders name.",
        minlength: jQuery.format("Can you type a bit more, we need at least {0} characters.")
      },
      dragon: {
        required: "Please enter your desired dragons name.",
        minlength: jQuery.format("Can you type a bit more, we need at least {0} characters.")
      }
    },
 
    // Use Ajax to send everything to processForm.php
    submitHandler: function(form) {
      $("#send").attr("value", "Sending...");
      $(form).ajaxSubmit({
        target: "#response",
        success: function(responseText, statusText, xhr, $form) {
          $(form).slideUp("fast");
          $("#response").html(responseText).hide().slideDown("fast");
        }
      });
      return false;
    }
  });
});