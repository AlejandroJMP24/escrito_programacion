<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="Tareas" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{route('agregar')}}" method="post">
        <input type="text" name="titulo"> </input>
        <input type="text" name="contenido"> </input>
        <input type="text" name="estado"> </input>
        <input type="text" name="autor"> </input>
        <button type="submit">Agregar</button>
    </form>
    <br>
    <form action="{{route('modificar')}}" method="post">
        <input type="text" name="id"> </input>
        <input type="text" name="titulo"> </input>
        <input type="text" name="contenido"> </input>
        <input type="text" name="estado"> </input>
        <input type="text" name="autor"> </input>
        <button type="submit">modificar</button>
    </form>
  
    <form action="{{route('eliminar')}}" method="post">
        <input type="text" name="id"> </input>
        <button type="submit">eliminar</button>
</form>
    </form>  <form action="{{route('recuperar')}}" method="post">
        <input type="text" name="id"> </input>
        <button type="submit">recuperar</button>
    </form>
    <br>
    <form action="{{route('titulo')}}" method="post">
        <input type="text" name="titulo"> </input>
        <button type="submit">buscar titulo</button>
</form>
    
</body>
</html>