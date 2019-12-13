$(document).ready(function() {
    //MÁSCARAS
    //datepicker
    $('input[name="inicio"]').datepicker({
        format: 'yyyy-mm-dd',
        autoclose: true,
        todayHighlight: true
    });
    $('input[name="chegada"]').datepicker({
        format: 'yyyy-mm-dd',
        autoclose: true,
        todayHighlight: true
    });
    //timepicker
    $('input[name="horario"]').wickedpicker({
        twentyFour: true
    });
    $('input[name="chegada_horario"]').wickedpicker({
        twentyFour: true
    });
    $('input[name="telefone"]').mask("(99) 99999-9999"); //telefone

});