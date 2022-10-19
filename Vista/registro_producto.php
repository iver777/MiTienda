<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Producto</title>
</head>
<body>
<p><h1>Registrar Producto</h1></p>
<form method="post"  name="registro" action="#">
    <pre>
        <input type="text" name="usuario" placeholder="Nombre de Usuario" value="Iver" required readonly="readonly">
        <input type="num" name="codigo" placeholder="Codigo de Barras">
        <input type="text" name="producto" placeholder="Nombre del Producto">
        <input type="text" name="marca" placeholder="Marca del Producto">
        <textarea type="text" name="descripcion" placeholder="Descripcion del Producto..."></textarea>
        <input type="text" name="cantidad" placeholder="Cantidad del Producto" onKeyUp="Sumar()">
        <input type="text" name="precio_unitario" placeholder="Precio Unitario" onKeyUp="Sumar()">
        <input type="text" name="precio_total"  placeholder="Precio total" required readonly="readonly">
        <input type="text" name="precio_venta" placeholder="Precio Venta" value>
        <input type="text" name="fecha" value="<?php echo date("d-m-Y");?>" required readonly="readonly">
        <textarea name="ubicacion" placeholder="Ubicacion del producto..."></textarea>
        <input type="submit" value="Registrar">
    </pre>
</form>
    
</body>
</html>