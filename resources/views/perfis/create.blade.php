
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
  
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <script src="{{ asset('js/script.js') }}"></script>

    <title>Document</title>
</head>
<body>
    <h1>Criar Perfil</h1>
    <form action="/perfis" method="POST" id="perfil-form">
        @csrf
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" required>
    
        <label for="sobrenome">Sobrenome:</label>
        <input type="text" name="sobrenome" id="sobrenome" required>
    
        <label for="dbo">Data de Nascimento:</label>
        <input type="date" name="dbo" id="dbo" required>
    
        <label for="genero">Gênero:</label>
        <select name="genero" id="genero" required>
            <option value="Masculino">Masculino</option>
            <option value="Feminino">Feminino</option>
            <option value="Outro">Outro</option>
        </select>
    
        <button type="submit">Salvar</button>
    
        <a href="/perfis">Voltar para a página inicial</a>
    </form>
    
</body>
</html>