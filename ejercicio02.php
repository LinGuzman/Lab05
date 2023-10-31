<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Precio de la Gaseosa</title>
</head>
<body>
    <h2>Precio de la Gaseosa</h2>
    <form method="post" action="">
        Nombre de la Gaseosa: <input type="text" name="nombre_gaseosa"><br>
        Precio Actual de la Gaseosa (S/.): <input type="text" name="precio_actual"><br>
        Cantidad de Unidades Adquiridas: <input type="text" name="cantidad"><br>
        <input type="submit" name="calcular" value="Calcular">
    </form>

    <?php
        $nombre_gaseosa = $_POST['nombre_gaseosa'];
        $precio_actual = floatval($_POST['precio_actual']);
        $cantidad = intval($_POST['cantidad']);

        $nuevo_precio = $precio_actual * 0.95;

        $importe_compra = $nuevo_precio * $cantidad;

        $descuento = $importe_compra * 0.07;

        $importe_pagar = $importe_compra - $descuento;

        $obsequio_caramelos = $cantidad * 2;

        echo "<h3>Resultados para $nombre_gaseosa:</h3>";
        echo "Nuevo Precio de la Gaseosa: S/. " . number_format($nuevo_precio, 2) . "<br>";
        echo "Importe de la Compra: S/. " . number_format($importe_compra, 2) . "<br>";
        echo "Importe del Descuento: S/. " . number_format($descuento, 2) . "<br>";
        echo "Importe a Pagar: S/. " . number_format($importe_pagar, 2) . "<br>";
        echo "Obsequio: $obsequio_caramelos caramelos";
    
    ?>
</body>
</html>
