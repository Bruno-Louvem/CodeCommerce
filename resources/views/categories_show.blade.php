<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Listagem de Categorias</title>

</head>
<body>
    <h1>Detalhe da Categoria</h1>
    <br>
    <ul>
        @if ( is_object($category) )

                <li><strong>Nome:</strong> {{ $category->name }}</li>
                <li><strong>Descrição:</strong> {{ $category->description }}</li>

        @else
            <li>Categoria não encontrada.</li>
        @endif
    </ul>

</body>
</html>
