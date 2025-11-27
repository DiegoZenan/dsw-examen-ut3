  <!-- Diego zenan perez perera-->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRODUCTOS</title>
</head>
<body>
     <!--Formulario-->
    <form action="{{ route('product.store') }}" method="POST">
 
    @csrf
      <!--Campo de Nombre-->
        <label for="nombre-producto">Nombre del producto:</label>
        <input type="text" name="nombre-producto" value="{{ old('nombre-producto') }}" placeholder="Ejemplo: Cables">

       <!--Campo de Descripción-->
        <label for="descripcion-producto">Describa el producto:</label>
        <textarea name="descripcion-producto" placeholder="Escribe aquí la descripción...">{{ old('descripcion-producto') }}</textarea>
         <!--Campo de Precio-->
        <label for="precio-producto">Precio:</label>
        <input type="number" name="precio-producto" min="0" value="{{ old('precio-producto') }}" placeholder="Ejemplo: 1.99">
      <!--Campo de unidades-->
        <label for="unidades-producto">Unidades</label>
         <input type="number" name="unidades-producto" min="1" value="{{ old('unidades-producto') }}" placeholder="Ejemplo: 1">
       
        <!--Campo de tipo de categoría-->
        <label for="categoria-producto">Categoría:</label>
        <select name="categoria-producto">
            <option value="">Seleccione una opción</option>
            <option value="Electrónica">Electrónica</option>
            <option value="Deporte">Deporte</option>
        </select>
        <!--Enviar el formulario-->
        <button type="submit">Registrar producto</button>
    </form>


</body>
</html>
