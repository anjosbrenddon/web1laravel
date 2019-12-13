$(document).ready(function() {
    $('#tabela-viagem tbody').on('click', '.btn-info', function() {
        var id = $(this).attr('id');
        $.ajax({
            type: "GET",
            url: "/api/viagens/" + id,
            beforeSend: function() {
                $('.animationload').show();
            },
            success: function(data) {
                data = data.data;

                var font_color = (data.status == "Finalizada") ? 'text-success' : 'text-warning';

                $('#viagens-modal').modal('show');
                $('#viagens-modal .modal-body').empty().append('<div class="row justify-content-center  text-center"><div class="col-md-12"><h5>Status: <span class="' + font_color + '">' + data.status + '</span></h5></div><div class="col-md-8 my-2"><hr></div><div class="row"><div class="col-md-6 "><p><b>Data de partida:</b></p><h5>' + data.data_inicio + '</h5></div><div class="col-md-6"><p><b>Data de chegada:</b></p><h5>' + prettyNull(data.data_fim) + '</h5></div></div><div class="col-md-8 my-2"><hr></div><div class="row"><div class="col-md-6 "><p><b>Motorista:</b></p><h5>' + data.motorista.nome + '</h5></div><div class="col-md-6"><p><b>Caminhão:</b></p><h5>' + data.caminhao.modelo + ', ' + data.caminhao.cor + ' Placa: ' + data.caminhao.placa + '</h5></div></div><div class="col-md-8 my-2"><hr></div><div class="row"><div class="col-md-4 "><p><b>Quilometragem:</b></p><h5>' + data.quilometragem + ' Km</h5></div><div class="col-md-4"><p><b>Combustível:</b></p><h5>' + data.combustivel + ' l</h5></div><div class="col-md-4"><p><b>Ajuda de custo:</b></p><h5>R$ ' + data.ajuda_custo + '</h5></div></div><div class="col-md-8 my-2"><hr></div><div class="col-md-12 "><p><b>Observação:</b></p><h5>' + prettyNull(data.observacao) + '</h5></div></div>');
            }
        }).done(function() {
            $(".animationload").hide();
        });
    });
});