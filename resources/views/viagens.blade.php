@extends('layouts.master')

@section('content')
<h1 class="h3 mb-2 text-gray-800">Viagens</h1>
<p class="mb-4">Lista das viagens.</p>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary d-inline mx-2">Todas as viagens</h6>
        <a href="/viagens/criar" class="btn btn-success float-right mx-2">+ Nova Viagem</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table" id="tabela-viagem" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Início</th>
                        <th>Status</th>
                        <th>Chegada</th>
                        <th>Quilometragem</th>
                        <th>Motorista</th>
                        <th>Caminhão</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

@section('modals')
<div class="modal fade" id="viagens-modal" tabindex="-1" role="dialog" aria-labelledby="modal-titulo" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modal-titulo">Detalhes da viagem</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Ok</button>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script src="{{asset('js/paginas/viagens-listar.js')}}"></script>
<script src="{{asset('js/paginas/viagens-delete.js')}}"></script>
<script src="{{asset('js/paginas/viagens-detalhes.js')}}"></script>
@endsection