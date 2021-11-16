<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Relatório</title>

</head>
<body>
<h1>Relatório da Placa</h1>

<h3>Placa : {{$placa_numero}}</h3>
<table class="table table-hover" >
    <thead>
    <tr>
        <th scope="col">ID</th>
            <th scope="col">Numero</th>
            <th scope="col">Responsavel</th>
            <th scope="col">Modelo</th>
            <th scope="col">Fabricada</th>

    </tr>
    </thead>
    <tbody>
    @forelse($placas ?? '' as $key => $item)
        <tr>
            <th scope='row'>{{ $item->id }}</th>
            <td>{{$item->numero}}</td>
            <td>{{$item->resp}}</td>
            <td>{{$item->tipo}}</td>
            <td>{{$item->fabrica->nome}}</td>


        </tr>
       @empty
        <tr>
            <th scope='row'>Nenhum existem nenhum registro para esta consulta.</th>
    @endforelse
    </tbody>
</table><br><br><br>

<h5><b>Alunos:</b> João Curtarelli e Gustavo Rostirolla</h5>
</body>
</html>


