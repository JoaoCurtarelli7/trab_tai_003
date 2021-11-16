<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Relatório Fabrica</title>

</head>
<body>
<h1>Relatório Fabrica</h1>
<table class="table table-hover">
    <thead>
    <tr >
        <th scope="col">ID</th>
        <th scope="col">Nome</th>
        <th scope="col">Cidade</th>
        <th scope="col">Dono</th>
        <th scope="col">CNPJ</th>

    </tr>
    </thead>

    <tbody>
    @forelse($fabricas ?? '' as $key => $item)
        <tr>
            <th scope='row'>{{ $item->id }}</th>
            <td>{{$item->nome}}</td>
            <td>{{$item->cidade}}</td>
            <td>{{$item->dono}}</td>
            <td>{{$item->CNPJ}}</td>

        </tr>
    @empty
        <tr>
            <th scope='row'>Nenhum existem nenhum registro para esta consulta.</th>
    @endforelse
    </tbody>
</table>
<h5><b>Alunos:</b> João Curtarelli e Gustavo Rostirolla</h5>
</body>
</html>
