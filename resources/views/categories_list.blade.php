<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Listagem de Categorias</title>

</head>
<body>
    <h1>Listagem de categorias</h1>
    <br>
    <ul>
        @if (count($categories) > 0)
            @foreach ($categories as  $category)
                <li>{{ $category->name }}</li>
            @endforeach
        @else
            <li>Não existem categorias cadastradas.</li>
        @endif
    </ul>

</body>
</html>
