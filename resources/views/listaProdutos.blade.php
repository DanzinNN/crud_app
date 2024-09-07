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
        <div>

            <h1>Lista de Produtos</h1>
            <hr>
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
                        <a href="{{ route('products.index') }}">
                            <button>Lista de Produtos</button>
                        </a>
                    </td>
                </tr>
            </table>
            @if(session('sucesso'))
                <div>
                    {{ session('sucesso') }}
                </div>
            @endif


            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <TH>NOME</TH>
                        <TH>MARCA</TH>
                        <TH>CATEGORIA</TH>
                        <TH>VALOR COMPRA</TH>
                        <TH>VALOR VENDA</TH>
                        <TH>QTD ESTOQUE</TH>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                    <tr>
                        <td> {{$product->id}} </td>
                        <td> {{$product->nome_produto}} </td>
                        <td> {{$product->marca}} </td>
                        <td> {{$product->categoria}} </td>
                        <td> {{$product->valor_compra}} </td>
                        <td> {{$product->valor_venda}} </td>
                        <td> {{$product->qtd_estoque}} </td>
                        <td>
                            <a href="{{ route('products.show', $product)}}">Visualizar</a>
                            <a href="{{ route('products.edit', $product)}}">Editar</a>
                            <form action="{{ route('products.destroy' , $product)}}" method="POST" style="display: inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit">Excluir</button>
                            </form>
                        </td>
                        
                    </tr>
                        
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>