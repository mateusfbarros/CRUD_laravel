<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Listagem de usuários</title>
</head>
<body>

<table>
    <tr>
        <td>ID</td>
        <td>NOME</td>
        <td>E-MAIL</td>
        <td>AÇÕES</td>
    </tr>

    @foreach($users as $user)

        <tr>
            <td>{{ $user -> id }}</td>
            <td>{{ $user -> name }}</td>
            <td>{{ $user -> email }}</td>
            <td>
                <a href="{{ route('user.show', ['user'=>$user->id]) }}">Ver Usuário</a>
                <form action="{{ route('user.destroy', ['user' => $user -> id]) }}" method="post">
                    @csrf
                    @method('delete')
                    <input type="submit" value="Remover">

                </form>
                <form action="{{ route('user.edit', ['user' => $user -> id]) }}" method="get">

                    <input type="submit" value="Editar">

                </form>
            </td>
        </tr>

    @endforeach

</table>

<a href="{{ route('user.create', []) }}">Criar Novo Usuário</a>
</body>
</html>
