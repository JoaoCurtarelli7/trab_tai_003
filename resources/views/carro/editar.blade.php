@extends('layouts.app')


@section('form')
    <h3 class="h3">Editar Carro</h3><br>
    <form class="form-group" action="{{ action('CarroController@salvar', $carros->id) }}" method="post">
        @csrf

        <div class="row">
        <div class="col-md-4">
            <label>Nome Dono</label><br>
            <input class="form-control" type="text" name="nome" value="{{ $carros->nome }}"><br>
        </div>
        <div class="col-md-4">
            <label>Marca</label><br>
            <input class="form-control" type="text" name="marca" value="{{ $carros->marca }}"><br>
        </div></div><br>

        <div class="row">

        <div class="col-md-4">
            <label>Quilometragem do Veiculo</label><br>
            <input class="form-control" type="text" name="km" value="{{ $carros->km }}"><br>
        </div>

        <div class="col-md-4">
            <label>Placa do Carro</label><br>
        <select class="col-md-8 form-control" name="placa_id">
            @foreach($placas as $item)
            <option value="{{$item->id}}"><?php echo $item->numero ?></option>
            @endforeach
        </select>
            </div>
        <br>
        </div>

        <div class="col-md-6">
            <button type="submit" class="btn btn-success"><i class="fas fa-save"></i> Salvar</button>
            <a class="btn btn-primary" style="/* margin-left: 200px; */"
            href="{{url('carro')}}"> <i class="fas fa-arrow-left"></i> Voltar</a>
        </div>

    </form>


@stop
