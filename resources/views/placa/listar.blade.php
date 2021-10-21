@extends('layouts.app')



@section('cabecalho')
    <h3 class="h3">Listagem de Placas</h3><br>
@stop


@section('listagem')
<div class="col-md-12">
    <form action="{{ action('PlacaController@pesquisar')}}" method="post">
        @csrf
        <div class="form-row">
            <div class="col-4">
                <input type="text" class="form-control" placeholder="Pesquisar numero..." name="numero" id="">
            </div>
            <button type="submit" class="btn btn-primary"> <i class="fas fa-search"></i> Buscar</button>
            <div class="col-3">
                <a href="{{ action('PlacaController@cadastrar') }}" class="btn btn-success">
                    <i class="fas fa-plus-circle"></i> Cadastrar</a>
            </div>
            <div class="col-3">
                <a href="{{ action('PlacaController@listar') }}" class="btn btn-danger">
                    <i class="fas fa-spinner"></i>  Atualizar</a>
            </div>
        </div>
</div>
</form>
<p></p>
<br>


    <table class="table table-hover">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Imagem</th>
            <th scope="col">Numero</th>
            <th scope="col">Responsavel Pela montagem</th>
            <th scope="col">Contato</th>
            <th scope="col">Modelo</th>
            <th scope="col">Data da Montagem</th>
            <th scope="col">Fabricada</th>
            <th scope="col">Ações</th>
        </tr>
        </thead>
        <tbody>
        @foreach($placas as $item)

                @php
                !empty($item->nome_arquivo) ? $nome_arquivo = $item->nome_arquivo : $nome_arquivo = "sem_imagem.jpg";
                @endphp

               <tr>
                    <th scope='row'>{{$item->id}}</th>
                    <td><img src="/storage/imagem/{{$nome_arquivo}}" width="100px" /></td>
                <td>{{$item->numero}}</td>
                <td>{{$item->resp}}</td>
                <td>{{$item->contato}}</td>
                <td>{{$item->tipo}}</td>
                <td>{{$item->data}}</td>
                <td>{{$item->fabrica->nome}}</td>



                <td>
                    <a class="btn btn-outline-info"
                    href="{{ action('PDF\GeralPDFController@Placa', $item->id) }}"><i class="far fa-file-pdf"></i></a>
                    <a class="btn btn-outline-success" href="{{ action('PlacaController@editar', $item->id) }}"><i
                            class='fas fa-edit'></i></a>
                    <a class="btn btn-outline-danger" onclick=" return confirm('Remover Placa?');"
                       href="{{ action('PlacaController@deletar', $item->id) }}"><i
                            class='fas fa-trash'></i></a>


                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {{$placas->links()}}

@stop
