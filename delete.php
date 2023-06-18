<?php
// Función para eliminar un producto existente

// function eliminarProducto($id) {
//     global $conn;

//     $sql = "DELETE FROM productos WHERE id=$id";

//     if ($conn->query($sql) === TRUE) {
//         echo "Producto eliminado exitosamente.";
//     } else {
//         echo "Error al eliminar el producto: " . $conn->error;
//     }
// }
include("connection.php");

$connect = connection();

$id = $_GET['id'];

$sql = "DELETE FROM productos WHERE id='$id'";
$query = mysqli_query($connect,$sql);

if ($query) {
    Header("Location: cafeteria.php");
}
?>