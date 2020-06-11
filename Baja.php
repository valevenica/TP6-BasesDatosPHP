
<html>
<head>
<title>Baja</title>
</head>
<body>
<?php
include ("conexion.inc");
$ciudad = $_POST['CIUDAD'];
$PAIS = $_POST['PAIS'];
$vSql = "SELECT * FROM ciudades WHERE  CIUDAD='$ciudad' AND PAIS='$PAIS' ";
$vResultado = mysqli_query($link, $vSql);
if(mysqli_num_rows($vResultado) == 0)
 {
 echo ("pais o ciudad Inexistente...!!! <br>");
 echo ("<A href='FormBajaIni.html'>Continuar</A>");
}
else{
//Arma la instrucción SQL y luego la ejecuta
$vSql= "DELETE FROM ciuades WHERE CIUDAD='$ciudad' AND PAIS='$PAIS' ";
mysqli_query($link, $vSql);
echo("El pais y ciuadad fue Borrado<br>");
echo("<A href='Menu.html'>Volver al Menu del ABM</A>");
}
// Liberar conjunto de resultados
mysqli_free_result($vResultado);
// Cerrar la conexion
mysqli_close($link);
?>
</body>
</html>