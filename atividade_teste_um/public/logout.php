<?php
    session_start();
    session_destroy();
    header("Location: ../index.php");
    exit();
    // Encerra a sessão e retorna para a tela de login
?>