<form action="{{ route('perfis.store') }}" method="POST">
    @csrf
    <input type="text" name="nome" placeholder="Nome">
    <input type="text" name="sobrenome" placeholder="Sobrenome">
    <input type="date" name="dbo" placeholder="Data de Nascimento">
    <input type="text" name="genero" placeholder="Gênero">
    <button type="submit">Criar</button>
</form>