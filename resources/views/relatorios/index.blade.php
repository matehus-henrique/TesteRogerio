
    <h1>Relatórios</h1>
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <a href="{{ route('relatorios.create') }}" class="btn btn-primary">Novo Relatório</a>

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
                    <td>{{ $relatorio->descricao }}</td>
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

