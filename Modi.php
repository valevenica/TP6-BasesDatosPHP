
<head>
<title>Modificacion</title>
</head>
<body>
<?php
    include ("conexion.inc");
    //Captura datos desde el Form anterior
    $ciudad = $_POST['CIUDAD'];
    $PAIS = $_POST['PAIS'];
    $superficie = $_POST['SUPERFICIE'];
    $TIENE_METRO = $_POST['TIENE_METRO'];
    $HABITANTES = $_POST['CANTIDAD_HABITANTES'];
    //Arma la instrucción SQL y luego la ejecuta
    $vSql = "UPDATE ciudades set TIENE_METRO='$TIENE_METRO', CANTIDAD_HABITANTES='$HABITANTES', SUPERFICIE='$superficie' where
    CIUADAD='$ciudad' AND PAIS= '$PAIS'";
    mysqli_query($link,$vSql) or die (mysqli_error($link));
    echo("El Pais fue Modificado<br>");
    echo("<A href= 'Menu.html'>Volver al Menu del ABM</A>");
    // Cerrar la conexion
    mysqli_close($link);
    ?>
</body>
</html>