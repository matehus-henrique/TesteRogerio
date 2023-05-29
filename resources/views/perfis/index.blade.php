<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <title>Document</title>
</head>
<body>
    <h1>Perfis</h1>
    <a href="{{ route('perfis.create') }}" class="btn btn-primary">Criar Perfil</a>
    <br><br>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Sobrenome</th>
                <th>Data de Nascimento</th>
                <th>Gênero</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($perfis as $perfil)
                <tr>
                    <td>{{ $perfil->id }}</td>
                    <td>{{ $perfil->nome }}</td>
                    <td>{{ $perfil->sobrenome }}</td>
                    <td>{{ $perfil->dbo }}</td>
                    <td>{{ $perfil->genero }}</td>
                    <td>
                        <a href="{{ route('perfis.show', $perfil) }}" class="btn btn-info">Ver</a>
                        <a href="{{ route('perfis.edit', $perfil) }}" class="btn btn-primary">Editar</a>
                        <form action="{{ route('perfis.destroy', $perfil) }}" method="POST" style="display: inline-block">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Excluir</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    
</body>
</html>