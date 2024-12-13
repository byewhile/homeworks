$('form').submit(function(e) {
    e.preventDefault();
    const data = $(this).serialize();
    $.ajax({
        method: 'POST',
        url: './sendText.php',
        data: data,
        success: function() {
            $('input').val('');
            $('textarea').val('');
            $('form span').css('color', 'black');
        }
    });
});