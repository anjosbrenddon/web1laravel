$(document).ready(function() {
    $.ajax({
        type: "GET",
        url: "/api/motoristas",
        beforeSend: function() {},
        success: function(data) {
            data = data.data;
            $.each(data, function(index, motorista) {
                $('#tabela-motorista tbody').append('<tr><td>' + motorista.id + '</td><td>' + motorista.nome + '</td><td>' + motorista.cnh + '</td><td>' + motorista.telefone + '</td><td>' + motorista.data_nascimento + '</td><td>' + motorista.estado_civil + '</td><td><a href="/motoristas/' + motorista.id + '/editar" class="btn btn-primary"><i class="fas fa-pencil-alt"></i></a></a> <button class="btn btn-danger btn-delete" id="' + motorista.id + ' " alt="Deletar ' + motorista.nome + '"><i class="far fa-trash-alt"></i></button></td></tr>');
            });
        }
    })
});