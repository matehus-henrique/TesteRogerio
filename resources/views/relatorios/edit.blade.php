
    <h1>Editar Relatório</h1>

    <form action="{{ route('relatorios.update', $relatorio->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="titulo">Título:</label>
            <input type="text" name="titulo" id="titulo" class="form-control" value="{{ $relatorio->titulo }}" required>
        </div>
        <div class="form-group">
            <label for="descricao">Descrição:</label>
            <textarea name="descricao" id="descricao" class="form-control" required>{{ $relatorio->descricao }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Salvar</button>
    </form>

