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
            if (!$('#contact-alert').hasClass('alert-success')) {
                $('#contact-alert').addClass('alert-success')
                                   .removeClass('alert-danger pb-0 fade show alert-dismissible');
            }
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
                .addClass('alert-danger pb-0 fade show alert-dismissible')
                .removeClass('alert-success')
                .html(
                          '<button type="button" class="close" data-dismiss="alert" aria-label="Close">'
                          + '<span aria-hidden="true">&times;</span></button>'
                          + '<h5 class="alert-heading">Foutmelding</h5>'
                          + '<hr>'
                          + '<ul><li>' + textStatus + ': ' + errorThrown + '</li><li>'
                          + jqXhr.statusCode.name + ': ' + jqXhr.status + '</li></ul>'                          
                )
                .slideDown('slow', function() {
                    console.log(jqXhr);
                    console.log(textStatus + '\n' + errorThrown);
                });
        });
    }
});
// Nog doen: sluitklik op alert danger afvangen en formulier resetten!!!
$('#contact-alert').on('close.bs.alert', function () {
    document.getElementById('contactForm').reset();
    $('#contactForm input#name').trigger('focus');
});

$('#contact-tab').on('shown.bs.tab', function (event) {
    $('#contactForm input#name').trigger('focus');
});