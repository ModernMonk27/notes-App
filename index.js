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
  

//Ajax Call for the login form
//Once the form is submitted
$("#loginform").submit(function(event){ 
    //prevent default php processing
    event.preventDefault();
    //collect user inputs
    var datatopost = $(this).serializeArray();
//    console.log(datatopost);
    //send them to login.php using AJAX
    $.ajax({
        url: "login.php",
        type: "POST",
        data: datatopost,
        success: function(data){
            if(data == "ok"){
                window.location.href = "https://modmonk.in.net/mainpage.php";
            }else{
                $("#loginmessage").html(data)
            }
        },
        error: function(){
            $("#loginmessage").html("<div class='alert alert-danger'>There was an error with the Ajax Call. Please try again later.</div>");
            
        }
    
    });

});