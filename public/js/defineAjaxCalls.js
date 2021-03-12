$('#contactForm').on('submit', function(e) {
    e.preventDefault();
    e.stopPropagation();
    var invalidUserInput = new Array();
    $('#contactForm input.form-control, #contactForm textarea.form-control').each(function () {
        if ($(this).is(':invalid')) {
            invalidUserInput.push($(this).attr('name'));
        }
    });
    console.log('Niet correct ingevulde invoervelden:\n' + invalidUserInput);
    /* indien validatie geslaagd => Ajax call */
    if (parseInt(invalidUserInput.length) === 0) {
        $.ajax({
            type:        $('#contactForm').attr('method'),
            url:         $('#contactForm').attr('action'),
            data:        $('#contactForm').serializeArray(),
            datatype:    'json',
            contenttype: 'application/json'
        }).done(function(data) {
            console.log(data);
            $('#contact-alert')
                .slideDown('slow', function() {
                    setTimeout(function() {
                        $('#contactForm').removeClass('was-validated');
                        document.getElementById('contactForm').reset();
                        $('#contactForm input#name').trigger('focus');
                        $('#contact-alert').slideUp('slow');
                    }, 5000);
                });            
        }).fail(function(jqXhr, textStatus, errorThrown) {
            $('#contactForm').removeClass('was-validated');
            $('#contact-alert')
                .addClass('alert-danger pb-0')
                .removeClass('alert-success')
                .html('<h5>Er heeft zich een fout voorgedaan:</h5>'
                          + '<ul><li>' + textStatus + ': ' + errorThrown + '</li><li>'
                          + jqXhr.statusCode.name + ': ' + jqXhr.status + '</li></ul>')
                .slideDown('slow', function() {
                    console.log(jqXhr);
                    console.log(textStatus + '\n' + errorThrown);
                });
        });
    }
});