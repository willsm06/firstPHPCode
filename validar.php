<?php

    session_start();

    $senha = $_POST["txtSenha"];
    $user = $_POST["txtUser"];
    $_SESSION['nome'] =  $user;
    $senha1 = md5(123);

    /*
    echo "md5:<br>" . md5($senha);
    echo "<br>comprimento: " . strlen(md5($senha));
    */

    if($user == "nome" && md5($senha) == $senha1){
        $_SESSION["erro"] = 0;
        $_SESSION['logado'] = true;
        header("location:perfil.php");//
    }
    else{
        $_SESSION["erro"] = 1;
        $_SESSION['logado'] = false;
        header("location:index.php");//
    } 
?>