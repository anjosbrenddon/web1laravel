<?php
$action = '/motoristas';
$titulo = 'Cadastrar novo motorista';
$estado_civil = '';
if (isset($motorista) && $motorista != null) {
    $action = '/motoristas/' . $motorista->id;
    $titulo = 'Editar motorista';
    $estado_civil = $motorista->estado_civil;
}
?>

@extends('layouts.master')

@section('css')
<link href="{{ asset('css/libs/bootstrap-datepicker/bootstrap-datepicker.min.css') }}" rel="stylesheet">
@endsection

@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary d-inline mx-2">{{$titulo}}</h6>
        <a href="/motoristas" class="float-right mx-2">Voltar</a>
    </div>
    <div class="card-body">
        @if($errors->any())
        <div class="alert alert-danger">
            {{$errors->first()}}
        </div>
        @endif
        <form id="motorista-form" action="{{$action}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nome" class="label-control">Nome <i class="text-danger">*</i></label>
                <input type="text" class="form-control" id="nome" name="nome" value="{{$motorista->nome??''}}" required>
            </div>
            <div class="form-row mb-3">
                <div class="col-md-6">
                    <label for="cnh" class="label-control">CNH <i class="text-danger">*</i></label>
                    <input type="number" class="form-control" id="cnh" name="cnh" value="{{$motorista->cnh??''}}" required>
                </div>
                <div class="col-md-6">
                    <label for="telefone" class="label-control">Telefone <i class="text-danger">*</i></label>
                    <input type="text" class="form-control" id="telefone" name="telefone" value="{{$motorista->telefone??''}}" required>
                </div>
            </div>
            <div class="form-row mb-3">
                <div class="col-md-7">
                    <label for="estado-civil" class="label-control">Estado Civil <i class="text-danger">*</i></label>
                    <select name="estado_civil" id="estado-civil" class="form-control">
                        <option value="solteiro" @if($estado_civil=='solteiro') selected @endif>Solteiro</option>
                        <option value="casado" @if($estado_civil=='casado') selected @endif>Casado</option>
                        <option value="viuvo" @if($estado_civil=='viuvo') selected @endif>Viúvo</option>
                        <option value="separado judicialmente" @if($estado_civil=='separado judicialmente') selected @endif>Separado judicialmente</option>
                        <option value="divorciado" @if($estado_civil=='divorciado') selected @endif>Divorciado</option>
                    </select>
                </div>
                <div class="col-md-5">
                    <label for="data-nascimento" class="label-control">Data de nasciemnto <i class="text-danger">*</i></label>
                    <input type="text" class="form-control" autocomplete="off" id="data-nascimento" name="data_nascimento" value="{{$motorista->data_nascimento??''}}" required>
                </div>
            </div>
            <div class="form-group">
                <label for="experiencia" class="label-control">Tempo de experiencia <i class="text-danger">*</i></label>
                <input type="text" class="form-control" id="experiencia" name="experiencia" value="{{$motorista->experiencia??''}}" required>
            </div>
            <button type="submit" class="btn btn-success">Confirmar</button>
        </form>
    </div>
</div>
@endsection

@section('script')
<script src="{{asset('js/libs/bootstrap-datepicker/bootstrap-datepicker.min.js')}}"></script>
<script src="{{asset('js/libs/jquery-mask/jquery.mask.min.js')}}"></script>
<script src="{{asset('js/paginas/motoristas-form.js')}}"></script>
@endsection