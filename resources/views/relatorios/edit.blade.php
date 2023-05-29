
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <title></title>
 </head>
 <body>
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
    <a href="/relatorios">Voltar para a página inicial</a>
 </body>
 </html>
