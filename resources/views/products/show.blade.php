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
        <h1>Detalhes do Produto</h1>
        <ul>
            <li>ID: {{ $product->id}}</li>
            <li>Nome: {{ $product->nome_produto}}</li>
            <li>Marca: {{ $product->marca}}</li>
            <li>Categoria: {{ $product->categoria}}</li>
            <li>Valor Compra: {{ $product->valor_compra}}</li>
            <li>Valor Venda: {{ $product->valor_venda}}</li>
            <li>Qtd Estoque: {{ $product->qtd_estoque}}</li>
            
        </ul>
        <a href="{{ route('products.index')}}">Voltar</a>
    </div>
</body>
</html>