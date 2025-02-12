<?php
include "../../conexion.php";
session_start();

$por_pagina = $_POST['cantidad'];

if (isset($_POST['busqueda'])) {
    $busqueda = mysqli_escape_string($conection, $_POST['busqueda']);

    $sql_registe = mysqli_query($conection, "SELECT COUNT(*) as total_registro FROM cliente 
                                             WHERE (
                                                 nit LIKE '%$busqueda%' OR 
                                                 nombre LIKE '%$busqueda%'
                                             ) 
                                             AND status = 1");
    $result_register = mysqli_fetch_array($sql_registe);
    $total_registro = $result_register['total_registro'];

    if (empty($_POST['pagina'])) {
        $pagina = 1;
    } else {
        $pagina = $_POST['pagina'];
    }

    $desde = ($pagina - 1) * $por_pagina;
    $total_pagina = ceil($total_registro / $por_pagina);

    $query = mysqli_query($conection, "SELECT * FROM cliente WHERE
                                       (
                                           nit LIKE '%$busqueda%' OR 
                                           nombre LIKE '%$busqueda%'
                                       ) 
                                       AND
                                       status = 1 ORDER BY idcliente DESC LIMIT $desde, $por_pagina");

    $result = mysqli_num_rows($query);
    $lista = '';
    $detalleTabla = '';
    $arrayData = array();

    $detalleTabla .= '
                      <table>
                          <tr>
                              <th>Ced.</th>
                              <th>Nombre</th>
                              <th>Teléfono</th>
                              <th>Dirección</th>';

    if ($_SESSION['rol'] == 1 || $_SESSION['rol'] == 2) {
        $detalleTabla .= '<th>Acciones</th>';
    }

    if ($result > 0) {
        while ($data = mysqli_fetch_assoc($query)) {
            $detalleTabla .= '</tr><tr>
                              <td>' . $data['nit'] . '</td>
                              <td colspan="">' . $data['nombre'] . '</td>
                              <td class="">' . $data['telefono'] . '</td>
                              <td class="">' . $data['direccion'] . '</td>';
            if ($_SESSION['rol'] == 1 || $_SESSION['rol'] == 2) {
                $detalleTabla .= '<td class="">
                                  <a class="link_edit" id="editarCliente" href="javascript:editarCliente(' . $data['idcliente'] . ');"><i class="fas fa-edit"></i> Editar</a>   
                                  | 
                                  <a class="link_delete" id="eliminarCliente" href="javascript:infoEliminarCliente(' . $data['idcliente'] . ');"><i class="fas fa-trash-alt"></i> Eliminar</a>
                                  </td></tr>';
            }
        }
        $detalleTabla .= '</table>';

        $lista .= '<ul>';

        if ($pagina > 1) {
            $lista .= '<li><a href="1"><i class="fas fa-step-backward"></i></a></li>
                       <li><a href="' . ($pagina - 1) . '"><i class="fas fa-caret-left"></i></a></li>';
        }

        $cant = 2;
        $pagInicio = ($pagina > $cant) ? ($pagina - $cant) : 1;
        if ($total_pagina > $cant) {
            $pagRestantes = $total_pagina - $pagina;
            $pagFin = ($pagRestantes > $cant) ? ($pagina + $cant) : $total_pagina;
        } else {
            $pagFin = $total_pagina;
        }

        for ($i = $pagInicio; $i <= $pagFin; $i++) {
            if ($i == $pagina) {
                $lista .= '<li class="pageSelected">' . $i . '</li>';
            } else {
                $lista .= '<li><a href="' . $i . '">' . $i . '</a></li>';
            }
        }

        if ($pagina < $pagFin) {
            $lista .= '<li><a href="' . ($pagina + 1) . '"><i class="fas fa-caret-right"></i></a></li>
                       <li><a href="' . ($total_pagina) . '"><i class="fas fa-step-forward"></i></a></li>';
        }
        $lista .= '</ul>';

        $arrayData['detalle'] = $detalleTabla;
        $arrayData['totales'] = $lista;

        echo json_encode($arrayData, JSON_UNESCAPED_UNICODE);
    } else {
        echo 'error';
    }
    mysqli_close($conection);
    exit;
}
?>

<script>
function autoCompleteCliente(cliente) {
    document.getElementById('nit').value = cliente.nit;
    document.getElementById('telefono').value = cliente.telefono;
    document.getElementById('direccion').value = cliente.direccion;
}

function seleccionarCliente(idCliente) {
    fetch('ruta/al/archivo/php/para/obtener/cliente.php?id=' + idCliente)
        .then(response => response.json())
        .then(data => autoCompleteCliente(data))
        .catch(error => console.error('Error:', error));
}
</script>