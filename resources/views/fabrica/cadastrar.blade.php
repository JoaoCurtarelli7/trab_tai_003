@extends('layouts.app')

@section('titulo', 'Cadastrar Fabrica')

@section('cabecalho')
    <h3 class="h3">Cadastre a Fabrica</h3>
    <hr>
@stop<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.js" integrity="sha256-yE5LLp5HSQ/z+hJeCqkz9hdjNkk1jaiGG0tDCraumnA="
crossorigin="anonymous"></script>

@section('script')
<script>
    $(document).ready(function($){
        $('#cnpj').mask('99.999.999/9999-99');
   });
</script>
@endsection

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



    <form class="form-group" action="{{ action('FabricaController@salvar', 0) }}" method="post">
        @csrf
        <div class="row">
        <div class="col-md-4">
            <label>Nome</label>
            <input class="form-control" type="text" name="nome" value="{{old('nome') }}">
        </div>
        <div class="col-md-4">
            <label>Cidade</label>
            <input class="form-control" type="text" name="cidade" value="{{old('cidade') }}">
        </div></div><br>
        <div class="row">
        <div class="col-md-4">
            <label>Dono</label>
            <input class="form-control" type="text" name="dono" value="{{old('dono') }}">
        </div>

        <div class="col-md-4">
            <label>CNPJ</label>
            <input class="form-control" type="text" id="cnpj" name="CNPJ" value="{{old('CNPJ') }}">
        </div></div>



        <br>
        <div class="col-md-6">
            <button type="submit" class="btn btn-success"><i class="fas fa-save"></i> Salvar</button>
            <a class="btn btn-primary" style="/* margin-left: 200px; */"
               href="{{ url('fabrica') }}"> <i class="fas fa-arrow-left"></i> Voltar</a>
        </div>
    </form>
@stop

