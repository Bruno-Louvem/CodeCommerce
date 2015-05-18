<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Listagem de Produtos</title>

</head>
<body>
    <h1>Listagem de produtos</h1>
    <br>
    <ul>
        @if (count($products) > 0)
            @foreach ($products as $product)
                <li>{{ $product->name }} - R${{ $product->price }}</li>
            @endforeach
        @else
            <li>Não existem produtos cadastrados.</li>
        @endif
    </ul>

</body>
</html>
