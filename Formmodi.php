    
<title>Modificacion</title>
</head>
<boby>
<?php
include ("conexion.inc");
//Captura datos desde el Form anterior
$PAIS = $_POST['PAIS'];
$CIUDAD = $_POST['CIUDAD'];
//Arma la instrucción SQL y luego la ejecuta
$vSql = "SELECT * FROM ciudades WHERE CIUDAD='$ciudad' AND PAIS='$PAIS' ";
$vResultado = mysqli_query($link, $vSql) or die (mysqli_error($link));;
$fila = mysqli_fetch_array($vResultado);
if(mysqli_num_rows($vResultado) == 0) {
 echo ("pais o ciudad Inexistente...!!! <br>");
 echo ("<A href='FormModiIni.html'>Continuar</A>");
}
else{
?>
<FORM action="Modi.php" method="POST" name="FormModi">
<table width="356">
<tr>
 <td width="103"> superficie: </td>
 <td width="243"> <input type="text" name="SUPERFICIE" value="<?php
echo($fila['SUPERFICIE']); ?>">
 </td>
</tr>
<tr>
 <td width="103"> cantidad habitantes: </td>
 <td width="243"> <input type="TEXT" name="CANTIDAD_HABITANTES" size="20" maxlength="20"
 value="<?php echo($fila['CANTIDAD_HABITANTES']); ?>">
 </td>
 </tr>
 <tr>
 <td width="103"> ciudad: </td>
 <td width="243"> <input type="TEXT" name="CIUDAD" size="20" maxlength="20"
 value="<?php echo($fila['CIUDAD']); ?>">
 </td>
</tr>
<tr>
 <td width="103"> PAIS: </td>
 <td width="243"> <input type="TEXT" name="PAIS" size="20" maxlength="40"
 value="<?php echo($fila['PAIS']); ?>">
 </td>
 </tr>
 <tr>
 <td width="103"> Tiene Metro: </td>
 <td width="243"> <input type="number" name="TIENE_METRO" size="20" maxlength="2"
 value="<?php echo($fila['TIENE_METRO']); ?>">
 </td>
 </tr>
 <tr>
 <td colspan="2" align="center"> <input type="SUBMIT" name="Submit"
value="Modificar">
 </td>
 </tr>
</table>
</FORM>
<?php
}
// Liberar conjunto de resultados
mysqli_free_result($vResultado);
// Cerrar la conexion
mysqli_close($link);
?>