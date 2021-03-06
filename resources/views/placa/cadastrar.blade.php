@extends('layouts.app')


@section('cabecalho')
    <h3 class="h3">Formulário Placas</h3>
    <hr>
@stop
@section('script')
    <script>
        $(document).ready(function($) {
            $('#telefone').mask('(49) 99999-9999');
            $('#placa').mask('AAA-9999');
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

    <form class="form-group" action="{{ action('PlacaController@salvar', 0) }}" method="post"
        enctype="multipart/form-data">

        @csrf
        <div class="row">
            <div class="col-md-4">
                <label>Numero</label>
                <input class="form-control" type="text" id="placa" name="numero" value="{{ old('numero') }}">
            </div><br>
            <div class="col-md-4">
                <label>Responsavel pela montagem</label>
                <input class="form-control" type="text" name="resp" value="{{ old('resp') }}">
            </div><br>
            <div class="col-md-3">
                <label>Contato</label>
                <input class="form-control" type="text" id="telefone" name="contato" value="{{ old('contato') }}">
            </div><br>
        </div><br>

        <div class="row">

            <div class="col-md-4">
                <label>Fabrica Responsavel</label>
                <select class="form-control" name="fabri_id">
                    @foreach ($fabricas as $item)
                        <option value="{{ $item->id }}"><?php echo $item->nome; ?>
                        </option>
                    @endforeach
                </select>
            </div><br>

            <div class="col-md-4">
                <label>Modelo</label>
                <select class="form-control" name="tipo" value="tipo" value="{{ old('tipo') }}">
                    <option>Tipo de Placa</option>
                    <option value="Mercosul">Mercosul</option>
                    <option value="Colecionador">Colecionador</option>
                    <option value="vermelha">Onibus ou Taxí</option>

                </select>
            </div><br>


        </div><br>
        <div class="row">

            <div class="col-md-4">
                <label>Data da montagem</label>
                <input class="form-control" type="date" id="date" name="data" value="{{ old('data') }}">
            </div>


            @php
                !empty($placas->nome_arquivo) ? ($nome_arquivo = $placas->nome_arquivo) : ($nome_arquivo = 'sem_imagem.jpg');
            @endphp

            <div class=" col-md-4">
                <label for="nome_arquivo">Imagem</label>
                <input type="file" name="nome_arquivo" id="nome_arquivo" class="form-control">
            </div>

            <div class=" col-md-4">

                <label>Sua Imagem:</label><br>
                <img src="/storage/imagem/{{ $nome_arquivo }}" width="250px" />
                <br>
            </div>
        </div>

        <br>
        <div class="col-md-6">
            <button type="submit" class="btn btn-success"><i class="fas fa-save"></i> Salvar</button>
            <a class="btn btn-primary" style="/* margin-left: 200px; */" href="{{ url('placa') }}"> <i
                    class="fas fa-arrow-left"></i> Voltar</a>
        </div>
    </form>
@stop
