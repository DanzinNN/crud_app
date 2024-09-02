<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastrar Produto</title>
</head>
<body>
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
        <h1>Adicionar Produto</h1>
        <form action="{{ route('products.store') }}" method="POST">
            @csrf
            <label for="nome_produto">Nome:</label>
            <input type="text" name="nome_produto" id="nome_produto" required>

            <label for="marca">Marca:</label>
            <input type="text" name="marca" id="marca" required>

            <label for="categoria">Categoria:</label>
            <input type="text" name="categoria" id="categoria" required>

            <label for="valor_compra">Valor Compra:</label>
            <input type="number" name="valor_compra" id="valor_compra" required step="0.01">

            <label for="valor_venda">Valor Venda:</label>
            <input type="number" name="valor_venda" id="valor_venda" required step="0.01">

            <label for="qtd_estoque">Qtd Estoque:</label>
            <input type="number" name="qtd_estoque" id="qtd_estoque" required>

            <button type="submit">Salvar</button>
        </form>
    </div>
</body>
</html>
