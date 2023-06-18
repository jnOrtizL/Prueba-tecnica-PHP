<?php

include("connection.php");

$connect = connection();

$id = $_GET['id'];

$sql = "SELECT * FROM productos WHERE id='$id'";
$query = mysqli_query($connect,$sql);

$row = mysqli_fetch_array($query);

// echo $row;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Actualizar</title>
</head>
<body>
    <div class="container mt-5">
        <form action="update.php" method="post">
                <input type="hidden" name="id" value="<?php echo $row['id']  ?>">

                <input type="text" class="form-control mb-3" name="nombre_producto" placeholder="Nombre del Producto" value="<?php echo $row['nombre_producto'] ?>">
                <input type="text" class="form-control mb-3" name="referencia" placeholder="Referencia del Producto" value="<?php echo $row['referencia'] ?>">
                <input type="number" class="form-control mb-3" name="precio" placeholder="Precio del Producto" value="<?php echo $row['precio'] ?>">
                <input type="number" class="form-control mb-3" name="peso" placeholder="Peso del Producto" value="<?php echo $row['peso'] ?>">
                <input type="text" class="form-control mb-3" name="categoria" placeholder="Categoria del Producto" value="<?php echo $row['categoria'] ?>">
                <input type="number" class="form-control mb-3" name="stock" placeholder="Cantidad del Producto" value="<?php echo $row['stock'] ?>">
                <input type="date" class="form-control mb-3" name="fecha_creacion" placeholder="Fecha de creacion" value="<?php echo $row['fecha_creacion'] ?>">

                <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
        </form>
    </div>
</body>
</html>