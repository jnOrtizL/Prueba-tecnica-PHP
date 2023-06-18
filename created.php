<?php
// Función para crear un nuevo producto
function crearProducto($nombre, $referencia, $precio, $peso, $categoria, $stock) {
    global $conn;
    $fechaCreacion = date("Y-m-d");

    $sql = "INSERT INTO productos (nombre_producto, referencia, precio, peso, categoria, stock, fecha_creacion)
            VALUES ('$nombre', '$referencia', $precio, $peso, '$categoria', $stock, '$fechaCreacion')";

    if ($conn->query($sql) === TRUE) {
        echo "Producto creado exitosamente.";
    } else {
        echo "Error al crear el producto: " . $conn->error;
    }
}
?>