<?php
include "../conexion.php";

if (isset($_POST['nombre'])) {
    $nombre = mysqli_real_escape_string($conection, $_POST['nombre']);
    
    $query_proveedor = mysqli_query($conection, "SELECT * FROM proveedor WHERE proveedor = '$nombre' LIMIT 1");
    
    $result = mysqli_num_rows($query_proveedor);
    
    if ($result > 0) {
        $data = mysqli_fetch_assoc($query_proveedor);
        echo json_encode($data, JSON_UNESCAPED_UNICODE);
    } else {
        echo json_encode(["error" => "Proveedor no encontrado"], JSON_UNESCAPED_UNICODE);
    }
}
?>