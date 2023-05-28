<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
<form action="{{ route('relatorios.store') }}" method="POST">
    @csrf
    <label for="titulo">Título:</label>
    <input type="text" name="titulo" required>
    <br>
    <label for="descricao">Descrição:</label>
    <textarea name="descricao" required></textarea>
    <br>
    <select name="id_perfil" id="">
        <option value=""></option>
        @foreach ($perfil as $item)
        <option value="{{$item->id}}">{{$item->nome}}</option>      
        @endforeach
    </select>
    <br>
    <button type="submit">Salvar</button>
</form>



</body>
</html>

