<?php
// Función para realizar una venta de producto



// if ($query) {
//     Header("Location: cafeteria.php");
// }
function venderProducto($id_producto, $cantidad) {
    include("connection.php");
    $connect = connection();

    $id = $_POST['id'];
    $stock = $_POST['stock'];

    $sql = "UPDATE productos SET stock='$stock'' WHERE id='$id'";
    $query = mysqli_query($connect,$sql);
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
// if (isset($_GET['stock_B'])) {
//     $stock_B = $_GET['stock_B'];

// }
   
// else {
//     echo "El producto no existe.";
//     }
// }

//     }

?>
<!-- <form action="buy_data.php" method="get">
    <input type="number" name="stockbuy2" value="<?php echo $stock_B ?>">
    <input type="submit" class="btn btn-primary btn-block" value="Comprar">
</form> -->