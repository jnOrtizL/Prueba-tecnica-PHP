<?php
// Función para realizar una venta de producto

include("connection.php");
$connect = connection();

$id = $_GET['id'];

$sql = "SELECT * FROM productos WHERE id='$id'";
$query = mysqli_query($connect,$sql);

$row = mysqli_fetch_array($query);
function venderProducto($id_producto, $cantidad) {

global $conn;


// Verificar si hay suficiente stock
    
   
$sql = "SELECT stock FROM productos WHERE id=$id_producto";
    
   
$result = $conn->query($sql);

if ($result->num_rows > 0) {
        
       
$row = $result->fetch_assoc();
        $stock_actual = $row["stock"];

        

if ($stock_actual >= $cantidad) {
            
           
// Actualizar stock
            
           
$nuevo_stock = $stock_actual - $cantidad;
            
           
$sql = "UPDATE productos SET stock=$nuevo_stock WHERE id=$id_producto";
            
           
$conn->query($sql);

// Registrar venta
            
           
$sql = "INSERT INTO ventas (id_producto, cantidad) VALUES ($id_producto, $cantidad)";
            $conn->query($sql);


echo "Venta realizada exitosamente.";
        } 
       
else {
            echo "No hay suficiente stock para realizar la venta.";
        }
    }

        }
   
// else {
//     echo "El producto no existe.";
//     }
// }

//     }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>VENDER</title>
</head>
<body>
    <div class="container mt-5">
        <form action="buy.php" method="get">
                <input  name="id" value="<?php echo $row['id']  ?>">

                <input type="text" class="form-control mb-3" name="nombre_producto" placeholder="Nombre del Producto" value="<?php echo $row['nombre_producto'] ?>">
                <input type="number" class="form-control mb-3" name="stock" placeholder="Cantidad del Producto" value="<?php echo $row['stock'] ?>">
                <input type="number" class="form-control mb-3" name="stock_B" placeholder="Cantidad a Comprar" value="">

                <input type="submit" class="btn btn-success btn-block" value="Comprar">
        </form>
    </div>
</body>
</html>