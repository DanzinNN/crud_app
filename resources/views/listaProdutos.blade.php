<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista de Produtos</title>
</head>
<body>
    <div>
        <nav>
            <ul>
                <li>HOME</li>
                <li>LISTA PRODUTOS</li>
            </ul>
        </nav>
        <table>
            <tr>
                <td>
                    <a href="{{ route('inicio') }}">
                        <button>Home</button>
                    </a> 
                </td>
                <td>
                    <a href="{{ route('products.create') }}">
                        <button>Cadastrar Produto</button>
                    </a>
                </td>
                <td>
                    <a href="{{ route('listar') }}">
                        <button>Lista de Produtos</button>
                    </a>
                </td>
            </tr>
        </table>
        <div>

            <h1>Lista de Produtos</h1>
            <hr>
            @if(session('sucesso'))
                <div>
                    {{ session('sucesso') }}
                </div>
            @endif

            <ul>
                @foreach ($productList as $productName)
                <li> {{$productName}} </li>
                    
                @endforeach
            </ul>

            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <TH>NOME</TH>
                        <TH>VALOR</TH>
                        <TH>CATEGORIA</TH>
                        <th>MARCA</th>
                        <TH>QTD ESTOQUE</TH>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                    <tr>
                        <td> {{$product['id']}} </td>
                        <td> {{$product['name']}} </td>
                        <td> {{$product['valor']}} </td>
                        <td> {{$product['categoria']}} </td>
                        <td> {{$product['marca']}} </td>
                        <td> {{$product['qtd_estoque']}} </td>
                        
                    </tr>
                        
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>