<?php
// Función para obtener el producto más vendido
function obtenerProductoMasVendido() {
    global $conn;

    $sql = "SELECT productos.nombre_producto, SUM(ventas.cantidad) AS total_vendido
            FROM productos
            INNER JOIN ventas ON productos.id = ventas.id_producto
            GROUP BY productos.nombre_producto
            ORDER BY total_vendido DESC
            LIMIT 1";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        echo "Producto más vendido: " ;
    }
}
?>