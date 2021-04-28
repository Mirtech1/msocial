
$(document).ready(function() {

    $("#loginform").on("submit", function(event) {
        event.preventDefault();
    
    
        var email =  $("#email").val();
        var password = $("#password").val();
        var form = $(this);
    
            $.ajax({
                type: form.attr('method'),
                url: form.attr('action'),
                data: form.serialize(),
                dataType: 'json',
                success: function(response) {
                    if (response.error == false) {
                        setTimeout(' window.location.href = "feed"; ',4000);
                    } else {
                        $("#error").fadeIn(1000, function() {
                            $("#error").html('<div class="alert alert-danger"> <span class="glyphicon glyphicon-info-sign"></span> &nbsp; ' + response.message + ' !</div>');
                        });
                    }
                }
    
            });
            
    
    });
    });