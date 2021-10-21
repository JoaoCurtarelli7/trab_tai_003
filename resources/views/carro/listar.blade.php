@extends('layouts.app')


@section('cabecalho')
    <h3 class="h3">Listagem de Carros</h3><br>
@stop



@section('listagem')
<div class="col-md-12">
    <form action="{{ action('CarroController@pesquisar')}}" method="post">
        @csrf
        <div class="form-row">
            <div class="col-4">
                <input type="text" class="form-control" placeholder="Pesquisar nome..." name="nome" id="">
            </div>
            <button type="submit" class="btn btn-primary"> <i class="fas fa-search"></i> Buscar</button>
            <div class="col-3">
                <a href="{{ action('CarroController@cadastrar') }}" class="btn btn-success">
                    <i class="fas fa-plus-circle"></i> Cadastrar</a>
            </div>
            <div class="col-3">
                <a href="{{ action('CarroController@listar') }}" class="btn btn-danger">
                    <i class="fas fa-spinner"></i>  Atualizar</a>
            </div>
        </div>
</div>
</form>
<p></p>
<br>

   <table class="table table-hover" >
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nome</th>
            <th scope="col">Marca</th>
            <th scope="col">Quilometragem</th>
            <th scope="col">Placa do Carro</th>
            <th scope="col">Ações</th>
        </tr>
        </thead>
        <tbody>
        @foreach($carros as $item)
            <tr>
                <th scope='row'>{{ $item->id }}</th>
                <td>{{$item->nome}}</td>
                <td>{{$item->marca}}</td>
                <td>{{$item->km}}</td>
                <td>{{$item->placa->numero}}</td>

                <td>
                <a class="btn btn-outline-primary"  href="{{ action('PDF\GeralPDFController@Carro', $item->id) }}"><i class="far fa-file-pdf"></i></a>

                    <a class="btn btn-outline-success" href="{{ action('CarroController@editar', $item->id) }}"><i
                            class='fas fa-edit'></i></a>
                    <a class="btn btn-outline-danger" onclick=" return confirm('Remover Placa?');"
                       href="{{ action('CarroController@deletar', $item->id) }}"><i
                            class='fas fa-trash'></i></a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {{$carros->links()}}

@stop
