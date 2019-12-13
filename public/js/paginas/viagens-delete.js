$(document).ready(function() {
    //CONFIGURA ENVIO DO CSRF TOKEN VIA AJAX
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    //ABRE CONFIRM ALERT E DELETA CASO CONFIRME
    $('#tabela-viagem tbody').on('click', '.btn-delete', function() {
        var id = $(this).attr('id');
        $.confirm({
            title: 'Deseja deletar esta Viagem ?',
            content: 'Esta ação não poderá ser desfeita',
            buttons: {
                deletar: {
                    btnClass: 'btn-red',
                    action: function() {
                        $.ajax({
                            url: "/viagens/" + id,
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