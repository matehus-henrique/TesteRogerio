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
    <button type="submit">Salvar</button>
</form>
{{-- <table>
    <thead>
        <tr>
            <td>
                Título
            </td>
            <td>Descrição</td>
            <td>Relacionar</td>
        </tr>
    </thead>
    <tbody>

        @foreach ($relatorios as $item)
        <tr>
            <td>{{$item->titulo}}</td>
            <td>{{$item->descricao}}</td>
            <td><select name="" id="">
                <option value="">PESSOAS</option>
                </select>
            </td>
        </tr>
        
    @endforeach
    </tbody>
    
</table> --}}


</body>
</html>

