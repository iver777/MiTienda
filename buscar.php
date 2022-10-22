<?php

$buscar=$_POST['buscar'];
$conexion=mysqli_connect("localhost","root","","mitienda");
$peticion="SELECT * FROM producto WHERE CODIGO_BARRAS LIKE '%".$buscar."%'";
$resultado=mysqli_query($conexion,$peticion);
	$vacio=mysqli_num_rows($resultado);
if($vacio==0){
	echo '<script type="text/javascript">
			alert("no se encontro ningun articulo");
			window.location="index.php";
			</script>';

}
echo"<p><h1><a href=index.php>Inventario</a></h1></p>";
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


while ($row=mysqli_fetch_array($resultado)) {
	echo 
	'<tr bgcolor="#DDDDDD" onmouseover=this.style.background="#FDFEFE" onmouseout=this.style.background="#DDDDDD">'.
	
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