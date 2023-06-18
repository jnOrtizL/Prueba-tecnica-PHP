<?php
// Función para obtener el producto con mayor stock
include("connection.php");
$connect = connection();

$id = $_GET['id'];

$sql = "SELECT * FROM productos WHERE id='$id'";
$query = mysqli_query($connect,$sql);

$row = mysqli_fetch_array($query);
function obtenerProductoConMayorStock() {
    global $conn;

    $sql = "SELECT * FROM productos ORDER BY stock DESC LIMIT 1";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        echo "Producto con mayor stock: " . $row["nombre_producto"] . " (Stock: " . $row["stock"] . ")";
    } else {
        echo "No se encontraron productos.";
    }
}
?>

