

    <h1>Editar Perfil</h1>
    <form action="{{ route('perfis.update', $perfil) }}" method="POST">
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
    </form>

