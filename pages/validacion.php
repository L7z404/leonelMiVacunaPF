<?php
    session_start();
    require_once "conn_mysql_leonel.php";

    $nip = trim($_POST["txtpassword"]);
    $nip = (int)$nip;
    $user = trim($_POST["txtusuario"]);

    $sql = "SELECT * FROM usuarios WHERE usuario='$user' AND clave=$nip";
    $result = $conn->query($sql);
    $rows = $result->fetchAll();
    $cantidad = (int)$rows;

    if ($cantidad > 0){
        $_SESSION["validado"]="true";
        $conn = null;
        header("Location: menu.php");
        exit;
    }else{
        $conn = null;
        header("Location: ../login.php");
        exit;
    }