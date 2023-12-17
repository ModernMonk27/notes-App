// get form details using jquery
 $("#signinform").submit(function(event) {
      event.preventDefault();
      var formData = $(this).serializeArray();
      // send form details to signup.php
      $.ajax({
        url: "signup.php",
        type: "POST",
        data: formData,
        success: function(response) {
            if(response){
                $('#signupmessage').html(response);
            }
    
        },
        error: function() {
            $('#signupmessage').html("<div class='alert alert-danger'>there is an error with ajax call</div>");
            
            
          
        }
      });

      
});
  