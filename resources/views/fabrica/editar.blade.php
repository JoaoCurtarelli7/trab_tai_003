@extends('layouts.app')

@section('titulo', 'Cadastrar Fabrica')

@section('form')
    <h3 class="h3">Editar Fabrica</h3><br>

    <form class="form-group" action="{{ action('FabricaController@salvar', $fabricas->id) }}" method="post">
        @csrf
        <div class="row">
        <div class="col-md-4">
            <label>Nome</label><br>
            <input class="form-control" type="text" name="nome" value="{{ $fabricas->nome }}"><br>
        </div>
        <div class="col-md-4">
            <label>Cidade</label><br>
            <input class="form-control" type="text" name="cidade" value="{{ $fabricas->cidade }}"><br>
        </div></div><br>
        <div class="row">
        <div class="col-md-4">
            <label>Dono</label><br>
        <input class="form-control" type="text" name="dono" value="{{ $fabricas->dono }}"><br>
        </div>

        <div class="col-md-4">
            <label>CNPJ</label><br>
        <input class="form-control" type="text" name="CNPJ" value="{{ $fabricas->CNPJ }}"><br>
        </div>

</div>
        <br>
        <div class="col-md-6">
            <button type="submit" class="btn btn-success"><i class="fas fa-save"></i> Salvar</button>
            <a class="btn btn-primary" style="/* margin-left: 200px; */"
            href="{{url('fabrica')}}"> <i class="fas fa-arrow-left"></i> Voltar</a>
        </div>
    </form>
@stop
