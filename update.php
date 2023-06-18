<?php
// Función para editar un producto existente
// function editarProducto($id, $nombre, $referencia, $precio, $peso, $categoria, $stock) {
//     global $conn;

//     $sql = "UPDATE productos SET nombre_producto='$nombre', referencia='$referencia', precio=$precio, peso=$peso, 
//             categoria='$categoria', stock=$stock WHERE id=$id";

//     if ($conn->query($sql) === TRUE) {
//         echo "Producto actualizado exitosamente.";
//     } else {
//         echo "Error al actualizar el producto: " . $conn->error;
//     }
// }
include("connection.php");

$connect = connection();

$id = $_POST['id'];
$nombre = $_POST['nombre_producto'];
$referencia = $_POST['referencia'];
$precio = $_POST['precio'];
$peso = $_POST['peso'];
$categoria = $_POST['categoria'];
$stock = $_POST['stock'];
$fecha = $_POST['fecha_creacion'];

$sql = "UPDATE productos SET nombre_producto='$nombre',referencia='$referencia',precio='$precio',peso='$peso',categoria='$categoria',stock='$stock',fecha_creacion='$fecha' WHERE id='$id'";
$query = mysqli_query($connect,$sql);

if ($query) {
    Header("Location: cafeteria.php");
}
?>