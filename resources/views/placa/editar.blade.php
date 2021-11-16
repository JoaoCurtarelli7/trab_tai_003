@extends('layouts.app')


@section('form')
    <h3 class="h3">Editar placas</h3><br>

    <form class="form-group" action="{{ action('PlacaController@salvar', $placas->id) }}" method="post">
        @csrf


        <div class="row">

        <div class="col-md-4">
            <label>Numero</label><br>
            <input class="form-control" type="text" name="numero" value="{{ $placas->numero }}"><br>
        </div>
        <div class="col-md-4">
            <label>Responsavel pela montagem</label><br>
            <input class="form-control" type="text" name="resp" value="{{ $placas->resp }}"><br>
        </div>
        <div class="col-md-2">
            <label>Contato</label><br>
        <input class="form-control" type="text" name="contato" value="{{ $placas->contato }}"><br>
        </div>
        </div><br>


        <div class="row">

            <div class="col-md-4">
                <label>Fabrica responsavel</label><br>
            <select class="col-md-12 form-control" name="fabri_id">
                @foreach($fabricas as $item)
                <option value="{{$item->id}}"><?php echo $item->nome ?></option>
                @endforeach
            </select>
                </div>

        <div class="col-md-4">
            <label>Modelo</label><br>
            <select class="form-control" name="tipo">
                <option <?php echo $placas->tipo === 'Mercosul' ? 'selected' : ''; ?> value="Mercosul">Mercosul</option>
                <option <?php echo $placas->tipo === 'Colecionador' ? 'selected' : ''; ?> value="Colecionador">Colecionador</option>
                <option <?php echo $placas->tipo === 'vermelha' ? 'selected' : ''; ?>
                    value="vermelha">Onibus ou Taxí</option>


            </select><br>
        </div>
        </div><br>

        <div class="row">

        <div class="col-md-4">
            <label>Data da montagem</label><br>
            <input class="form-control" type="date" name="data" value="{{ $placas->data }}"><br>
        </div>

        @php
        !empty($placas->nome_arquivo) ? ($nome_arquivo = $placas->nome_arquivo) : ($nome_arquivo = 'sem_imagem.jpg');
    @endphp

    <div class=" col-md-4">
        <label for="nome_arquivo">Imagem</label>
        <input type="file" name="nome_arquivo" id="nome_arquivo" class="form-control" value="{{ $placas->nome_arquivo }}">
    </div>

    <div class=" col-md-4">

        <label>Sua Imagem:</label><br>
        <img src="/storage/imagem/{{ $placas->nome_arquivo }}" width="250px" />
        <br>
    </div>

        </div>
        <br>
        <div class="col-md-6">
            <button type="submit" class="btn btn-success"><i class="fas fa-save"></i> Salvar</button>
            <a class="btn btn-primary" style="/* margin-left: 200px; */"
            href="{{ url('placa') }}"> <i class="fas fa-arrow-left"></i> Voltar</a>
        </div>
    </form>
@stop
