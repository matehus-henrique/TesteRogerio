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
    @php
    use Illuminate\Support\Str;
    @endphp
    <h1>Relatórios</h1>
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <a href="{{ route('relatorios.create') }}" class="btn btn-primary">Novo Relatório</a>
    <a href="/" class="btn btn-primary">Início</a>

    <table class="table mt-4">
        <thead>
            <tr>
                <th>ID</th>
                <th>Título</th>
                <th>Descrição</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($relatorios as $relatorio)
                <tr>
                    <td>{{ $relatorio->id }}</td>
                    <td>{{ $relatorio->titulo }}</td>
                    <td>{{ strlen($relatorio->descricao) > 100 ? substr($relatorio->descricao, 0, 100) . '...' : $relatorio->descricao }}</td><td>
                    <td>
                        <a href="{{ route('relatorios.show', $relatorio->id) }}" class="btn btn-primary">Ver</a>
                        <a href="{{ route('relatorios.edit', $relatorio->id) }}" class="btn btn-secondary">Editar</a>
                        <form action="{{ route('relatorios.destroy', $relatorio->id) }}" method="POST" style="display: inline-block;">
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