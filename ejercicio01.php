<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sueldo</title>
</head>
<body>
    <h2>Sueldo</h2>
    <form method="post" action="">
        Nombre del Trabajador: <input type="text" name="nombre"><br>
        Importe Total Vendido del Mes (S/.): <input type="text" name="importe_total"><br>
        Cantidad de Hijos en Edad Escolar: <input type="text" name="cantidad_hijos"><br>
        <input type="submit" name="calcular" value="Calcular">
    </form>

    <?php
        $nombre = $_POST['nombre'];
        $importe_total = floatval($_POST['importe_total']);
        $cantidad_hijos = intval($_POST['cantidad_hijos']);

        $comision = $importe_total * 0.075;

        $bonificacion = $cantidad_hijos * 50;

        $sueldo_basico = 600;
        $sueldo_bruto = $sueldo_basico + $comision + $bonificacion;

        $descuento = $sueldo_bruto * 0.11;

        $sueldo_neto = $sueldo_bruto - $descuento;

        echo "<h3>Resultados para $nombre:</h3>";
        echo "Comisión: S/. " . number_format($comision, 2) . "<br>";
        echo "Bonificación: S/. " . number_format($bonificacion, 2) . "<br>";
        echo "Sueldo Bruto: S/. " . number_format($sueldo_bruto, 2) . "<br>";
        echo "Descuento: S/. " . number_format($descuento, 2) . "<br>";
        echo "Sueldo Neto: S/. " . number_format($sueldo_neto, 2);
    
    ?>
</body>
</html>
