<?php
$titulo = 'Cadastrar novo caminhão';
$action = '/caminhoes';
if (isset($caminhao) && $caminhao != null) {
    $titulo = 'Editar caminhão' . $caminhao->placa;
    $action = '/caminhoes/' . $caminhao->id;
}
?>

@extends('layouts.master')
@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary d-inline mx-2"> {{$titulo}}</h6>
        <a href="/caminhoes" class="float-right mx-2">Voltar</a>
    </div>
    <div class="card-body">
        @if($errors->any())
        <div class="alert alert-danger">
            {{$errors->first()}}
        </div>
        @endif
        <form id="caminhao-form" action="{{$action}}" method="POST">
            @csrf
            <div class="form-row mb-3">
                <input type="hidden" name="id" value="{{$caminhao->id??''}}">
                <div class="col-md-6">
                    <label for="placa" class="label-control">Placa <i class="text-danger">*</i></label>
                    <input type="text" class="form-control" maxlength="7" id="placa" name="placa" value="{{$caminhao->placa??''}}" required>
                </div>
                <div class="col-md-6">
                    <label for="chassi" class="label-control">Chassi <i class="text-danger">*</i></label>
                    <input type="text" class="form-control" id="chassi" name="chassi" value="{{$caminhao->chassi??''}}" required>
                </div>
            </div>
            <div class="form-row mb-3">
                <div class="col-md-7">
                    <label for="cor" class="label-control">Cor <i class="text-danger">*</i></label>
                    <input type="text" class="form-control" id="cor" name="cor" value="{{$caminhao->cor??''}}" required>
                </div>
                <div class="col-md-5">
                    <label for="ano" class="label-control">Ano <i class="text-danger">*</i></label>
                    <input type="text"  class="form-control" id="ano" name="ano" value="{{$caminhao->ano??''}}" required>
                </div>
            </div>
            <div class="form-group">
                <label for="modelo" class="label-control">Modelo <i class="text-danger">*</i></label>
                <input type="text" class="form-control" id="modelo" name="modelo" value="{{$caminhao->modelo??''}}" required>
            </div>
            <button type="submit" class="btn btn-success">Confirmar</button>
        </form>
    </div>
</div>
@endsection

@section('script')
<script src="{{asset('js/libs/jquery-mask/jquery.mask.min.js')}}"></script>
<script src="{{asset('js/paginas/caminhoes-form.js')}}"></script>
@endsection