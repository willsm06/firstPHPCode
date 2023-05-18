<?php
    session_start();

    if($_SESSION["logado"]){
    
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>
</head>
<body> 
    <h1>Seja bem-vindo, <?php echo $_SESSION['nome']; ?>!!</h1>
    <a href="logout.php">Sair</a>
</body>
</html>

<?php
}
else{
    header("location:index.php");
    $_SESSION["erro"] = 2;
}
?>