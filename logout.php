<?php 
        session_start();    
        $_SESSION["erro"] = -1;
        $_SESSION['logado'] = false;
        $_FILES["nome"] = "";
        session_destroy();
        header("location:index.php");
?>