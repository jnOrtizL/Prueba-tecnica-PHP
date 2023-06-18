<?php

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

$sql = "INSERT INTO productos VALUES('$id','$nombre','$referencia','$precio','$peso','$categoria','$stock','$fecha')";
$query = mysqli_query($connect,$sql);

if ($query) {
    Header("Location: cafeteria.php");
}else {
    
}

?>