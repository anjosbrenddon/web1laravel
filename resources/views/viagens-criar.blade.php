@extends('layouts.master')

@section('css')
<link href="{{ asset('css/libs/bootstrap-datepicker/bootstrap-datepicker.min.css') }}" rel="stylesheet">
<link href="{{ asset('css/libs/bootstrap-datepicker/wickedpicker.min.css') }}" rel="stylesheet">
@endsection

@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary d-inline mx-2">Cadastrar nova Viagem</h6>
        <a href="/viagens" class="float-right mx-2">Voltar</a>
    </div>
    <div class="card-body">
        @if($errors->any())
        <div class="alert alert-danger">
            {{$errors->first()}}
        </div>
        @endif
        <form class="viagens-form" action="/viagens" method="POST">
            @csrf
            <div class="form-row mb-3">
                <div class="col-md-6">
                    <label for="inicio" class="label-control">Data de início <i class="text-danger">*</i></label>
                    <input type="text" class="form-control" id="inicio" name="inicio" autocomplete="off" required>
                </div>
                <div class="col-md-6">
                    <label for="horario" class="label-control">Horario de partida <i class="text-danger">*</i></label>
                    <input type="text" class="form-control" autocomplete="off" id="horario" name="horario" required>
                </div>
            </div>
            <div class="form-row mb-3">
                <div class="col-md-7">
                    <label for="ajuda-custo" class="label-control">Ajuda de custo <i class="text-danger">*</i></label>
                    <input type="text" class="form-control" id="ajuda-custo" name="ajuda_custo" required>
                </div>
                <div class="col-md-5">
                    <label for="quilometragem" class="label-control">Quilometragem prevista <i class="text-danger">*</i></label>
                    <input type="number" class="form-control" id="quilometragem" name="quilometragem" required>
                </div>
            </div>
            <div class="form-group">
                <label for="combustivel" class="label-control">Combustivel gasto previsto (Litros)<i class="text-danger">*</i></label>
                <input type="number" class="form-control" id="combustivel" name="combustivel" required>
            </div>
            <div class="form-group">
                <label for="observacao" class="label-control">Observação</i></label>
                <textarea class="form-control"  id="observacao" name="observacao" rows="5" ></textarea>
            </div>
            <div class="form-group">
                <label for="caminhao" class="label-control">Caminhão <i class="text-danger">*</i></label>
                <select class="form-control" id="caminhao" name="caminhao">
                    @forelse ($caminhoes as $caminhao)
                    <option value="{{$caminhao->id}}" @if(isset($viagem) && $viagem->caminhao->id == $caminhao->id) selected @endif>{{$caminhao->modelo}} placa: {{$caminhao->placa}}</option>
                    @empty
                    <option value="" disabled>Nenhum caminhão cadastrado</option>
                    @endforelse
                </select>
            </div>
            <div class="form-group">
                <label for="motorista" class="label-control">Motorista <i class="text-danger">*</i></label>
                <select class="form-control" id="motorista" name="motorista">
                    @forelse ($motoristas as $motorista)
                    <option value="{{$motorista->id}}" @if(isset($viagem) && $viagem->motorista->id == $motorista->id) selected @endif>{{$motorista->nome}}</option>
                    @empty
                    <option value="" disabled>Nenhum motorista cadastrado</option>
                    @endforelse
                </select>
            </div>
            <button type="submit" class="btn btn-success">Confirmar</button>
        </form>
    </div>
</div>
@endsection

@section('script')
<script src="{{asset('js/libs/bootstrap-datepicker/bootstrap-datepicker.min.js')}}"></script>
<script src="{{asset('js/libs/bootstrap-datepicker/wickedpicker.min.js')}}"></script>
<script src="{{asset('js/libs/jquery-mask/jquery.mask.min.js')}}"></script>
<script src="{{asset('js/paginas/viagens-form.js')}}"></script>
@endsection