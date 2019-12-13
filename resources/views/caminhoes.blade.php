@extends('layouts.master')

@section('content')
<h1 class="h3 mb-2 text-gray-800">Caminhões</h1>
<p class="mb-4">Lista das caminhões.</p>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary d-inline mx-2">Todos os caminhões</h6>
        <a href="/caminhoes/criar" class="btn btn-success float-right mx-2">+ Novo caminhão</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table" id="tabela-caminhao" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Placa</th>
                        <th>Modelo</th>
                        <th>Cor</th>
                        <th>Ano</th>
                        <th>Chassi</th>
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
@section('script')
<script src="{{asset('js/paginas/caminhoes-listar.js')}}"></script>
<script src="{{asset('js/paginas/caminhoes-delete.js')}}"></script>
@endsection