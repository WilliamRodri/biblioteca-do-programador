$(document).ready(function() {
    $('#ExemploModalCentralizado').modal('show');

    $('#prosseguir').on('click', function() {
        $('#ExemploModalCentralizado').modal('hide');
    });
});