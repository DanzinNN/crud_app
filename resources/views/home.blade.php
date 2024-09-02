<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pagina Inicial</title>
</head>
<body>
    <div>
        <h1>Pagina Inicial</h1>
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
                    <a href="{{ route('listar') }}">
                        <button>Lista de Produtos</button>
                    </a>
                </td>
            </tr>
        </table>
    </div>
</body>
</html>
