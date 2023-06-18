<?php
// Función para listar todos los productos
function listarProductos() {
    global $conn;


$sql = "SELECT * FROM productos";
    
   
$result = $conn->query($sql);

 
if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            
           
echo "ID: " . $row["id"] . "<br>";
            echo "Nombre: " . $row["nombre_producto"] . "<br>";
            echo "Referencia: " . $row["referencia"] . "<br>";
            
           
echo "Precio: " . $row["precio"] . "<br>";
            
           
echo "Peso: " . $row["peso"] . "<br>";
            
           
echo "Categoría: " . $row["categoria"] . "<br>";
            
           
echo "Stock: " . $row["stock"] . "<br>";
            
           
echo "Fecha de creación: " . $row["fecha_creacion"] . "<br><br>";
        }
    } else {
        
       
echo "No se encontraron productos.";
    }
}

    }
?>