@extends('layouts.app')


@section('cabecalho')
    <h3 class="h3">Formulário Carros</h3>
    <hr>
@stop

@section('form')

@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif


    <form class="form-group" action="{{ action('CarroController@salvar', 0) }}" method="post">
        @csrf
        <div class="row">
            <div class="col-md-4">
                <label>Nome Dono</label>
                <input class="form-control" type="text" name="nome" value="{{old('nome') }}">
             </div>
             <div class="col-md-4">
                <label>Marca</label>
                <input class="form-control" type="text" name="marca" value="{{old('marca') }}">
            </div>
        </div><br>

        <div class="row">
            <div class="col-md-4">
                <label>Quilometragem </label>
                <input class="form-control" type="text" name="km" value="{{old('km') }}">
            </div>
            <div class="col-md-4">
                <label>Placa do Carro</label><br>
            <select class="col-md-8 form-control" name="placa_id" value="{{old('placa_id') }}">
                @foreach($placas as $item)
                <option value="{{$item->id}}"><?php echo $item->numero ?></option>
                @endforeach
            </select>
        </div>
</div>

        <br>
        <div class="col-md-6">
            <button type="submit" class="btn btn-success"><i class="fas fa-save"></i> Salvar</button>
            <a class="btn btn-primary" style="/* margin-left: 200px; */"
               href="{{ url('carro') }}"> <i class="fas fa-arrow-left"></i> Voltar</a>
        </div>
    </form>
@stop
