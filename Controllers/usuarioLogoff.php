<?php
    // Destroy sessao (radical)
    session_start();
    unset( $_SESSION );
    session_destroy();
    
    // Redireciona
    header("location: ../Views/Shared/_Layout.php");
?>