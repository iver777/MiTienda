
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Tienda</title>
</head>
<body>
    <h1>Inventario</h1>
    <form method ="post" action="buscar.php">
	<div>
		<input type="text" name="buscar" placeholder="codigo del producto" required title="es necesario llenar este campo" >
		<input type="submit" value="buscar">	
	</div>
	
</form>

<?php
//include(".\Vista\head.php");



$conexion=mysqli_connect("localhost","root","","mitienda");
$consulta="SELECT * FROM producto";
$result=mysqli_query($conexion,$consulta);

echo "<table border='1'>";
echo '<tr onmouseout=this.style.background="#AAB7B8">';

echo "<th>Nombre Producto</th>";
echo "<th>Nombre Usuario</th>";
echo "<th>Nombre Proveedor</th>";
echo "<th>Categoria</th>";
echo "<th>Marca Producto</th>";
echo "<th>Descripcion</th>";
echo "<th>Cantidad</th>";
echo "<th>Fecha</th>";
echo "<th>Codigo de Barras</th>";
echo "<th>Precio Unitario</th>";
echo "<th>Precio Venta</th>";
echo "<th>Ingreso</th>";
echo "<th>Salida</th>";

echo "</tr>";
?>
<?php

while ($row=mysqli_fetch_row($result)) {
	echo 
	'<tr bgcolor="#DDDDDD" onmouseover=this.style.background="#FDFEFE" onmouseout=this.style.background="#DDDDDD">'.
	//"<td>".$row[0]."</td>".
	//"<td>".$row[1]."</td>".
	"<td>".$row[1]."</td>".
	"<td>".$row[2]."</td>".
	"<td>".$row[3]."</td>".
	"<td>".$row[4]."</td>".
	"<td>".$row[5]."</td>".
	"<td>".$row[6]."</td>".
	"<td>".$row[7]."</td>".
	"<td>".$row[8]."</td>".
    "<td>".$row[9]."</td>".
    "<td>".$row[10]."</td>".
    "<td>".$row[11]."</td>".

	"<td><a href=formulario_compra.php?id=".$row[0]."><button>Comprar</button></a> </td>".
	"<td><a href=formulario_venta.php?id=".$row[0]."&ac=2><button>Vender</button></a> </td>";

    "</tr>";
}

echo "</table>";

?>
</body>
</html>