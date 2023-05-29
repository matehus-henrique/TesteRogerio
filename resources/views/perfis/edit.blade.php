
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <script src="{{ asset('js/script.js') }}"></script>
    <title>Editar</title>
</head>
<body>
    
    <h1>Editar Perfil</h1>

<form action="{{ route('perfis.update', $perfil) }}" method="POST" id="perfil-form">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" class="form-control" value="{{ $perfil->nome }}" required>
    </div>
    <div class="form-group">
        <label for="sobrenome">Sobrenome:</label>
        <input type="text" name="sobrenome" id="sobrenome" class="form-control" value="{{ $perfil->sobrenome }}" required>
    </div>
    <div class="form-group">
        <label for="dbo">Data de Nascimento:</label>
        <input type="date" name="dbo" id="dbo" class="form-control" value="{{ $perfil->dbo }}" required>
    </div>
    <div class="form-group">
        <label for="genero">Gênero:</label>
        <select name="genero" id="genero" class="form-control" required>
            <option value="M" {{ $perfil->genero == 'M' ? 'selected' : '' }}>Masculino</option>
            <option value="F" {{ $perfil->genero == 'F' ? 'selected' : '' }}>Feminino</option>
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Salvar</button>

    <a href="/perfis" class="btn btn-secondary">Voltar para a página inicial</a>
</form>
</body>
</html>
