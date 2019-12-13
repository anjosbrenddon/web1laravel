$(document).ready(function() {
    $.ajax({
        type: "GET",
        url: "/api/viagens",
        beforeSend: function() {
            $('.animationload').show();
        },
        success: function(data) {
            data = data.data;

            $.each(data, function(index, viagem) {
                var font_color = 'text-warning';
                var btn_finalizar = '<a href="/viagens/' + viagem.id + '/finalizar" title="Finalizar" class="btn btn-primary d-inline my-1"><i class="fas fa-flag-checkered"></i></a>';
                if (viagem.status == "Finalizada") {
                    font_color = 'text-success';
                    btn_finalizar = '';
                }

                $('#tabela-viagem tbody').append('<tr><td>' + viagem.id + '</td><td>' + viagem.data_inicio + '</td><td class="font-status ' + font_color + '">' + viagem.status + '</td><td>' + prettyNull(viagem.data_fim) + '</td><td>' + viagem.quilometragem + ' Km</td><td>' + viagem.motorista.nome + '</td><td>' + viagem.caminhao.placa + '</td><td><button class="btn btn-info d-inline my-1" title="Detalhes" id="' + viagem.id + '"><i class="far fa-eye"></i></button> ' + btn_finalizar + ' <button class="btn btn-danger btn-delete d-inline my-1" id="' + viagem.id + '"><i class="far fa-trash-alt" title="Excluir"></i></button></td></tr>');
            });
        }
    }).done(function() {
        $(".animationload").hide();
    });
});

function prettyNull(data) {
    if (data == null || data === '')
        return '----';
    else return data
}