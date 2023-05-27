<form action="{{ route('relatorios.store') }}" method="POST">
    @csrf
    <label for="titulo">Título:</label>
    <input type="text" name="titulo" required>
    <br>
    <label for="descricao">Descrição:</label>
    <textarea name="descricao" required></textarea>
    <br>
    <button type="submit">Salvar</button>
</form>
