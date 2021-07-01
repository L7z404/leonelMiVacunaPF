<?php
require_once "conn_mysql_leonel.php";
    $dato = $_GET['q'];
    //        $cine = 5;

$sql = "SELECT d.id, d.nombre, d.apaterno, d.amaterno, d.curp, d.fecNac, d.sexo, d.postracion, d.diabetes, 
       d.hipertension, d.cp, d.telefono, d.telefono2, d.email, d.emailap, d.dom_datos, d.folio, e.entidad, m.municipio 
    FROM datos_persona d INNER JOIN entidades e ON d.id_entidad = e.id_entidad INNER JOIN municipios m 
    ON d.id_municipio = m.id WHERE m.id = '$dato'";

    $result = $conn-> query($sql);
    $rows = $result->fetchAll();

?>
<div style="text-align: center">
    <table style="margin: 0 auto;" border="1">
        <thead>
        <th>ID</th>
        <th>Nombre</th>
        <th>Apellido 1</th>
        <th>Apellido 2</th>
        <th>CURP</th>
        <th>Fecha Nac</th>
        <th>Sexo</th>
        <th>Postración</th>
        <th>Diabetes</th>
        <th>Hiptertension</th>
        <th>Entidad de vacunación</th>
        <th>Municipio de vacunación</th>
        <th>CP</th>
        <th>Telefono</th>
        <th>Telefono 2</th>
        <th>Correo</th>
        <th>Correo Apoyo</th>
        <th>Datos/Domicilio</th>
        </thead>
        <?php foreach ($rows as $row){ ?>
            <tr>
                <td><?php echo ($row['id']) ?></td>
                <td><?php echo ($row['nombre']) ?></td>
                <td><?php echo ($row['apaterno']) ?></td>
                <td><?php echo ($row['amaterno']) ?></td>
                <td><?php echo ($row['curp']) ?></td>
                <td><?php
                    $fechaNac = $row['fecNac'];
                    $fechaNacFormat = date("d-m-Y", strtotime($fechaNac));
                    echo ($fechaNacFormat)
                    ?></td>
                <td><?php echo ($row['sexo']) ?></td>
                <td><?php echo ($row['postracion']) ?></td>
                <td><?php echo ($row['diabetes']) ?></td>
                <td><?php echo ($row['hipertension']) ?></td>
                <td><?php echo ($row['entidad']) ?></td>
                <td><?php echo ($row['municipio']) ?></td>
                <td><?php echo ($row['cp']) ?></td>
                <td><?php echo ($row['telefono']) ?></td>
                <td><?php echo ($row['telefono2']) ?></td>
                <td><?php echo ($row['email']) ?></td>
                <td><?php echo ($row['emailap']) ?></td>
                <td><?php echo ($row['dom_datos']) ?></td>
            </tr>
        <?php } ?>
    </table>
</div>

