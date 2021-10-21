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
    <form class="form-group" action="{{ action('FabricaController@salvar', 0) }}" method="post">
        @csrf
        <div class="row">
        <div class="col-md-4">
            <label>Nome</label>
            <input class="form-control" type="text" name="nome" required>
        </div>
        <div class="col-md-4">
            <label>Cidade</label>
            <input class="form-control" type="text" name="cidade" required>
        </div></div><br>
        <div class="row">
        <div class="col-md-4">
            <label>Dono</label>
            <input class="form-control" type="text" name="dono" required>
        </div>

        <div class="col-md-4">
            <label>CNPJ</label>
            <input class="form-control" type="text" id="cnpj" name="CNPJ" required>
        </div></div>



        <br>
        <div class="col-md-6">
            <button type="submit" class="btn btn-success"><i class="fas fa-save"></i> Salvar</button>
            <a class="btn btn-primary" style="/* margin-left: 200px; */"
               href="{{ url('fabrica') }}"> <i class="fas fa-arrow-left"></i> Voltar</a>
        </div>
    </form>
@stop

