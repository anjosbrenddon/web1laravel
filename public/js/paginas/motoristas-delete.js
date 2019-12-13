$(document).ready(function() {
    //CONFIGURA ENVIO DO CSRF TOKEN VIA AJAX
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    //ABRE CONFIRM ALERT E DELETA CASO CONFIRME
    $('#tabela-motorista tbody').on('click', '.btn-delete', function() {
        id = $(this).attr('id');
        $.confirm({
            title: 'Deletar motorista!',
            content: $(this).attr('alt'),
            buttons: {
                deletar: {
                    btnClass: 'btn-red',
                    action: function() {
                        $.ajax({
                            url: "/motoristas/" + id,
                            type: "DELETE",
                            success: function(data) {
                                if (data.sucesso) {
                                    location.reload();
                                } else {
                                    $.alert({
                                        title: 'Erro!',
                                        content: data.erro,
                                    });
                                }
                            }
                        });
                    }
                },
                cancelar: function() {}
            }
        });
    })
});