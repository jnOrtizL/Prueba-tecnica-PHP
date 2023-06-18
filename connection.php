<?php
// function connection(){
//     $servername = "localhost";
//     $username = "root";
//     $password = "root";
//     $dbname = "inventario";

//     // Crear conexión
//     $conn = new mysqli($servername, $username, $password, $dbname);

//     // Verificar conexión
//     if ($conn->connect_error) {
//         die("Error en la conexión: " . $conn->connect_error);
//     }
// }
function connection(){
    $host = "localhost";
    $user = "root";
    $pass = "root";
    $bd = "inventario";

    $connect = mysqli_connect($host,$user,$pass, $bd) or die ("cannot connect");

    // $select = mysqli_select_db($connect, $bd);
    // echo $connect;
    return $connect;
}
?>