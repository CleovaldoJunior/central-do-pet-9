<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <title>Hello</title>
</head>
<body>
<h1>Usuários</h1>
<table border='1'>
    @foreach ($users as $user)
        <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->funcao}}</td>
            @if($auth ?? '')
            <td><a href='/editar/user/{{ $user->id }}'>Editar</a>
                <a href='/remover/user/{{ $user->id }}'>Remover</a></td>
            @endif
        </tr>
    @endforeach
</table>
<a href="/adicionar/user">Inserir Nova</a>
</body>
</html>
