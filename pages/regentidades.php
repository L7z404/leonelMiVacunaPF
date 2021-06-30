<?php
    session_start();
    if ($_SESSION["validado"]!="true"){
        header("Location: ../index.php");
        exit;
    }
?>

entidades
