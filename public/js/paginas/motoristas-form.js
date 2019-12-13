$(document).ready(function() {
    //MÁSCARAS

    //datepicker
    $('input[name="data_nascimento"]').datepicker({
        format: 'yyyy-mm-dd',
        autoclose: true,
        todayHighlight: true
    });

    $('input[name="telefone"]').mask("(99) 99999-9999"); //telefone
});