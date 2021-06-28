<?php

require_once "conn_mysql_leonel.php";
$result;
$resultado = "<option value='0' selected disabled>---Selecciona el Municipio---</option>";
$resultado2 = "Ningun municipio disponible";

$municipioSelected = $_POST["municipio_selected"];

$sql2 = "SELECT e.id_municipio, m.municipio FROM entidades e INNER JOIN municipios m 
           ON e.id_municipio = m.id_municipio WHERE e.id_municipio = '$municipioSelected'";

$result = $conn->query($sql2);

$rows = $result->fetchAll();

if (empty($rows)) {
    echo '<option value="666" selected disabled>' . $resultado2 . '</option>';
    echo $resultado2;
    die();
} else {
    echo $resultado;
    foreach ($rows as $row) {
        echo '<option value="' . $row['id_municipio'] . '">' . utf8_encode($row['municipio']) . '</option>';
    }
}
?>