$(document).ready(function() {
    //LISTAGEM DE CAMINHÕES
    $.ajax({
        type: "GET",
        url: "/api/caminhoes",
        beforeSend: function() {},
        success: function(data) {
            data = data.data;
            $.each(data, function(index, caminhao) {
                $('#tabela-caminhao tbody').append('<tr><td>' + caminhao.id + '</td><td>' + caminhao.placa + '</td><td>' + caminhao.modelo + '</td><td>' + caminhao.cor + '</td><td>' + caminhao.ano + '</td><td>' + caminhao.chassi + '</td><td> <a href="/caminhoes/' + caminhao.id + '/editar" class="btn btn-primary"><i class="fas fa-pencil-alt"></i></a> <button class="btn btn-danger btn-delete" id="' + caminhao.id + '" alt="deletar caminhão ' + caminhao.modelo + ' ' + caminhao.placa + '"><i class="far fa-trash-alt"></i></button></td></tr>');
            });
        }
    });

});