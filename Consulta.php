<html>
<head>
<title> Listados completo </title>
</head>
<body>
<?php
include("conexion.inc");
$vSql = "SELECT * FROM ciudades";
$vResultado = mysqli_query($link, $vSql);
$total_registros=mysqli_num_rows($vResultado);
?>
<table border=1>
<tr>
                    <td><b>ciudad</b></td>
                    <td><b>pais</b></td>
                    <td><b>habitantes</b></td>
                    <td><b>superficie</b></td>
                    <td><b>tiene metro</b></td>
</tr>
<?php
while ($fila = mysqli_fetch_array($vResultado))
{
?>
<tr>
<td>
                                    <?php echo ($fila['CIUDAD']); ?>
                                </td>
                                <td>
                                    <?php echo ($fila['PAIS']); ?>
                                </td>
                                <td>
                                    <?php echo ($fila['CANTIDAD_HABITANTES']); ?>
                                </td>
                                <td>
                                    <?php echo ($fila['SUPERFICIE']); ?>
                                </td>
                                <td>
                                    <?php echo ($fila['TIENE_METRO']); ?>
                                </td>
</tr>
<tr>
 <td colspan="5">
<?php
}
// Liberar conjunto de resultados
mysqli_free_result($vResultado);
// Cerrar la conexion
mysqli_close($link);
?>
 </td>
</tr>
</table>
<p>&nbsp;</p>
<p align="center"><a href="Menu.html">Volver al menu; del ABM</a></p>
</body>
</html>