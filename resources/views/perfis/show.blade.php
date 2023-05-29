<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('style.css') }}" rel="stylesheet">
    <title>show</title>
</head>
<body>
    <h1 class="title">Detalhes do Perfil</h1>

<div class="card">
    <div class="card-header">
        <h4 class="card-title">{{ $perfil->nome }} {{ $perfil->sobrenome }}</h4>
    </div>
    <div class="card-body">
        <p>Data de Nascimento: {{ $perfil->dbo }}</p>
        <p>Gênero: {{ $perfil->genero }}</p>
    </div>
    <div class="card-footer">
        <a href="{{ route('perfis.index') }}" class="btn btn-primary">Voltar</a>
    </div>
</div>
</body>
</html>