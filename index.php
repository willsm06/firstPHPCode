<?php
    session_start();

    if(!isset($_SESSION["erro"])){
        $_SESSION["erro"] = 0;
    }else{}

    if(!isset($_SESSION['logado'])){
        $_SESSION['logado'] = false;
    }else{}

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Login</title>
</head>
<body>
    
    <form method="POST" action="validar.php">
        <label for="txtUser">Usuário</label>
        <input type="text" name="txtUser" id="txtUser">
        <Br><br>
            <label for="txtSenha">Senha</label>
            <input type="password" name="txtSenha" id="txtSenha">
        <Br><br>
            <input type="submit" id="password" value="Login">
        <Br>
    </form>

    <?php
        
        if($_SESSION["erro"] == 0){
            echo "";
        }
        else if($_SESSION["erro"] == 1){
            echo "<p> Usuario e/ou senha incorretos!</p>";
        }
        else if($_SESSION["erro"] == 2){
            echo "<p> Faça login para acessar seu perfil";
        }
        else{
            echo '';
        }
        ?>
</body>
</html>