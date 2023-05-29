
<form action="/perfis" method="POST">
    @csrf
    <label for="nome">Nome:</label>
    <input type="text" name="nome" id="nome" required><br>

    <label for="sobrenome">Sobrenome:</label>
    <input type="text" name="sobrenome" id="sobrenome" required><br>

    <label for="dbo">Data de Nascimento:</label>
    <input type="date" name="dbo" id="dbo" required><br>

    <label for="genero">Gênero:</label>
    <select name="genero" id="genero" required>
        <option value="Masculino">Masculino</option>
        <option value="Feminino">Feminino</option>
        <option value="Outro">Outro</option>
    </select><br>

    <button type="submit">Salvar</button>

    <a href="/perfis">Voltar para a página inicial</a>

</form>