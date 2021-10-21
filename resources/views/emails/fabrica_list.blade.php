<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
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

            
            </tr>
        @endforeach
        </tbody>
    </table>
</body>
</html>
