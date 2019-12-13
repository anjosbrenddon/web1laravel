@extends('layouts.master')
@section('css')
<link href="{{ asset('css/libs/bootstrap-datepicker/bootstrap-datepicker.min.css') }}" rel="stylesheet">
<link href="{{ asset('css/libs/bootstrap-datepicker/wickedpicker.min.css') }}" rel="stylesheet">
@endsection
@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary d-inline mx-2">Finalizar Viagem</h6>
        <a href="/viagens" class="float-right mx-2">Voltar</a>
    </div>
    <div class="card-body">
    @if($errors->any())
        <div class="alert alert-danger">
            {{$errors->first()}}
        </div>
        @endif
        <form id="motorista-form" action="/viagens/{{$viagem->id}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="motorista" class="label-control">Motorista <i class="text-danger">*</i></label>
                <select class="form-control readonly">
                    <option>{{$viagem->motorista->nome}}</option>
                </select>
            </div>

            <div class="form-group">
                <label for="caminhao" class="label-control">Caminhão <i class="text-danger">*</i></label>
                <select class="form-control readonly">
                    <option>{{$viagem->caminhao->modelo}} Placa: {{$viagem->caminhao->placa}}</option>
                </select>
            </div>
            <div class="form-row mb-3">
                <div class="col-md-7">
                    <label for="inicio" class="label-control">Início da viagem <i class="text-danger">*</i></label>
                    <input type="text" class="form-control" id="inicio" name="inicio" value="{{$viagem->data_inicio??''}}" required>
                </div>
                <div class="col-md-5">
                    <label for="status" class="label-control">Status <i class="text-danger">*</i></label>
                    <input type="text" class="form-control" id="status" name="status" value="Finalizada" readonly>
                </div>
            </div>
            <div class="form-row mb-3">
                <div class="col-md-6">
                    <label for="chegada" class="label-control">Data da chegada <i class="text-danger">*</i></label>
                    <input type="text" class="form-control" id="chegada" name="chegada" value=""  autocomplete="off"  required>
                </div>
                <div class="col-md-6">
                    <label for="chegada-horario" class="label-control">Horário de chegada <i class="text-danger">*</i></label>
                    <input type="text" class="form-control" id="chegada-horario" name="chegada_horario" autocomplete="off" required>
                </div>
            </div>
            <div class="form-row mb-3">
                <div class="col-md-7">
                    <label for="ajuda-custo" class="label-control">Ajuda de custo <i class="text-danger">*</i></label>
                    <input type="text" class="form-control" id="ajuda-custo" name="ajuda_custo" value="{{$viagem->ajuda_custo??''}}" required>
                </div>
                <div class="col-md-5">
                    <label for="quilometragem" class="label-control">Quilometragem total <i class="text-danger">*</i></label>
                    <input type="text" class="form-control" id="quilometragem" name="quilometragem" value="{{$viagem->quilometragem??''}}" required>
                </div>
            </div>
            <div class="form-group">
                <label for="combustivel" class="label-control">Combustivel gasto <i class="text-danger">*</i></label>
                <input type="text" class="form-control" id="combustivel" name="combustivel" value="{{$viagem->combustivel??''}}" required>
            </div>
            <div class="form-group">
                <label for="observacao" class="label-control">Observação</i></label>
                <textarea class="form-control" id="observacao" name="observacao" rows="5">{{$viagem->observacao}}</textarea>
            </div>

            <button type="submit" class="btn btn-success">Finalizar</button>
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