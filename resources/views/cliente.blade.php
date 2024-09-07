<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Clientes</title>
</head>
<body>
    <div>
        <h1>Clientes</h1>
        <hr>
        <br>
        <ul>
            @foreach ($clienteList as $clientesName)
                <li> {{$clientesName}} </li>
            @endforeach
        </ul>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>NOME</th>
                    <th>CPF</th>
                    <th>RG</th>
                    <th>SEXO</th>
                    <th>DATA DE NASCIMENTO</th>
                    <th>CELULAR</th>
                    <th>EMAIL</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($clientes as $cliente)
                <tr>
                    <td> {{$cliente['id']}} </td>
                    <td> {{$cliente['nome']}} </td>
                    <td> {{$cliente['cpf']}} </td>
                    <td> {{$cliente['rg']}} </td>
                    <td> {{$cliente['sexo']}} </td>
                    <td> {{$cliente['data_nascimento']}} </td>
                    <td> {{$cliente['celular']}} </td>
                    <td> {{$cliente['celular']}} </td>
                </tr>
                    
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>