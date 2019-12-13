@extends('layouts.master')

@section('content')
<h1 class="h3 mb-2 text-gray-800">Motoristas</h1>
<p class="mb-4">Lista das motoristas.</p>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary d-inline mx-2">Todos os motoristas</h6>
        <a href="/motoristas/criar" class="btn btn-success float-right mx-2">+ Novo motorista</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table" id="tabela-motorista" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nome</th>
                        <th>CNH</th>
                        <th>Telefone</th>
                        <th>Data nascimento</th>
                        <th>Estado civil</th>
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
<script src="{{asset('js/paginas/motoristas-listar.js')}}"></script>
<script src="{{asset('js/paginas/motoristas-delete.js')}}"></script>
@endsection