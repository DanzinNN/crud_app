<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div>
        <h1>Pedidos</h1>
        <hr>
        <br>
        <ul>
            @foreach ($pedidoList as $pedidosName)
                <li> {{$pedidosName}} </li>
            @endforeach
        </ul>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>COD_PEDIDO</th>
                    <th>CLIENTE</th>
                    <th>PRODUTO</th>
                    <th>QUANTIDADE</th>
                    <th>VALOR PEDIDO</th>
                    <th>VALOR DESC</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pedidos as $pedido)
                <tr>
                    <td>{{$pedido['id']}} </td>
                    <td>{{$pedido['cod_pedido']}} </td>
                    <td> {{$pedido['cliente']}} </td>
                    <td>{{$pedido['produto']}} </td>
                    <td>{{$pedido['quantidade']}} </td>
                    <td>{{$pedido['valor_pedido']}} </td>
                    <td>{{$pedido['valor_desc']}} </td>
                </tr>
                    
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>