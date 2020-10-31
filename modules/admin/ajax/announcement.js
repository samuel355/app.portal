$(document).ready(function() {
    $('#announcement').submit(function(e) {
        e.preventDefault();

        $.ajax({
            type: 'POST',
            url: "php/announcement.php",
            //dataType: 'json',

            data: new FormData(this),
            processData: false,
            contentType: false,

            complete: function() {
                $('#process').fadeOut('slow');
                $('#submit').fadeIn('slow');
            },
            success: function(success) {
                $('#process').fadeOut('slow');
                $('#submit').fadeIn('slow');
                $('#alert').hide('slow');
                $('#announcement')[0].reset();
                $('#done').html(success);
                $('#succ').show();
                console.log(success);
            },
            error: function(error) {
                // 	s
                if (error) {
                    $('#succ').fadeOut('slow');
                    $('#messages').html(error.responseText);
                    $('#submit').fadeIn('slow');
                    $('#alert').show();
                    console.log(error.message);
                }

            }
        });
        return false;
    });

});
