Alta.php
<html>
<head>
<title>Alta Usuario</title>
</head>
<body>
<?php
include("conexion.inc");
//Captura datos desde el Form anterior
    $ciudad = $_POST['CIUDAD'];
    $PAIS = $_POST['PAIS'];
    $superficie = $_POST['SUPERFICIE'];
    $TIENE_METRO = $_POST['TIENE_METRO'];
    $HABITANTES = $_POST['CANTIDAD_HABITANTES'];
    //Arma la instrucción SQL y luego la ejecuta
$vSql = "SELECT Count(ID) as canti FROM CIUDADES WHERE CIUDAD='$ciudad' AND PAIS='$PAIS'";
$vResultado = mysqli_query($link, $vSql) or die (mysqli_error($link));;
$vCantUsuarios = mysqli_fetch_assoc($vResultado);
//$vCantUsuarios = mysqli_result($vResultado, 0);
if ($vCantUsuarios ['canti']!=0){
 echo ("El PAIS ya Existe<br>");
 echo ("<A href='Menu.html'>VOLVER AL ABM</A>");
}
else {
$vSql = "INSERT INTO ciudades (CIUDAD, PAIS, SUPERFICIE,CANTIDAD_HABITANTES, TIENE_METRO)
values ('$ciudad','$PAIS', '$superficie', '$HABITANTES', '$TIENE_METROS')";
 mysqli_query($link, $vSql) or die (mysqli_error($link));
 echo("El PAIS fue Registrado <br>");
echo ("<A href='Menu.html'>VOLVER AL MENU</A>");
// Liberar conjunto de resultados
mysqli_free_result($vResultado);
}
// Cerrar la conexion
mysqli_close($link);
?></body></html>