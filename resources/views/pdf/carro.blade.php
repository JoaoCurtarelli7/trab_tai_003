<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Carros PDF</title>
</head>

<body>
    <table class="table table-hover">
        <thead>
        <tr >
            <th scope="col">ID</th>
            <th scope="col">Nome</th>
            <th scope="col">Marca</th>
            <th scope="col">Quilometragem</th>
            <th scope="col">Placa do Carro</th>


        </tr>
        </thead>

        <tbody>
        @forelse($carros ?? '' as $key => $item)
            <tr>
                <th scope='row'>{{ $item->id }}</th>
                <td>{{$item->nome}}</td>
                <td>{{$item->marca}}</td>
                <td>{{$item->km}}</td>
                <td>{{$item->placa->numero}}</td>

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
