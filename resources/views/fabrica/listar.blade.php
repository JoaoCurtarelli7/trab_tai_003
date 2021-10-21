@extends('layouts.app')

@section('cabecalho')
    <h3 class="h3">Listagem de Fabricas</h3><br>

@stop

@section('listagem')

<div class="col-md-12">
    <form action="{{ action('FabricaController@pesquisar')}}" method="post">
        @csrf
        <div class="form-row">
            <div class="col-4">
                <input type="text" class="form-control" placeholder="Pesquisar nome..." name="nome" id="">
            </div>
            <button type="submit" class="btn btn-primary"> <i class="fas fa-search"></i> Buscar</button>
            <div class="col-3">
                <a href="{{ action('FabricaController@cadastrar') }}" class="btn btn-success">
                    <i class="fas fa-plus-circle"></i> Cadastrar</a>
            </div>
            <div class="col-3">
                <a href="{{ action('FabricaController@listar') }}" class="btn btn-danger">
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
            <th scope="col">Nome</th>
            <th scope="col">Cidade</th>
            <th scope="col">Dono</th>
            <th scope="col">CNPJ</th>
            <th scope="col">Ações</th>
        </tr>
        </thead>
        <tbody>
        @foreach($fabricas as $item)
            <tr>
                <th scope='row'>{{ $item->id }}</th>
                <td>{{$item->nome}}</td>
                <td>{{$item->cidade}}</td>
                <td>{{$item->dono}}</td>
                <td>{{$item->CNPJ}}</td>

                <td>
                <a class="btn btn-outline-primary"  href="{{ action('PDF\GeralPDFController@Fabrica', $item->id) }}"><i class="far fa-file-pdf"></i></a>

                    <a class="btn btn-outline-success" href="{{ action('FabricaController@editar', $item->id) }}"><i
                            class='fas fa-edit'></i></a>
                    <a class="btn btn-outline-danger" onclick=" return confirm('Remover Fabrica?');"
                       href="{{ action('FabricaController@deletar', $item->id) }}"><i
                            class='fas fa-trash'></i></a>

                            <a class="btn btn-outline-success" href="{{ action('FabricaController@sendEmail', $item->id) }}">77</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {{$fabricas->links()}}
@stop
