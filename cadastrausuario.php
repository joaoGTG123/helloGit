<?php
include("conectadb.php");

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $nome = $_POST['nome'];
    $senha = $_POST['senha'];

    #avalidacao de usuario verficiado se o usuario ja existe
    $sql ="SELECT COUNT(usu_id) FROM usuarios WHERE usu_nome = '$nome' AND usu_senha = '$senha'";
    $retorno = mysqli_query($link, $sql);

    while($tbl = mysqli_fetch_array($retorno)){
        $cont = $tbl[0];
    }
    #avaliacoa
    if($cont == 1){
        echo"<script>window.alert('USUARIO JA EXISTE');</script>";
    }
    else{
        $sql = "INSERT INTO usuarios (usu_nome, usu_senha, usu_ativo)
        VALUES('$nome','$senha','n')";
        mysqli_query($link,$sql);
        #CADASTROU USUARIO E JOGA MENSAGEM NA TELA E DIRECIONA PARA LISTA USUARIO

        echo"<script>window.alert('USUARIO OU SENHA INCORRETO');</script>";
        echo"<script>window.locantion.href='admhome.php';</script>";

    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/estiloadm.css">
    <title>CADASTRO DE USUARIOS</title>
</head>
<body>
    <div class="menu">
        <li><a href="cadastrausuario.php">CADASTRA USUARIO </a></li>
        <li><a href="cadastrausuario.php">LISTA USUARIO </a></li>
        <li><a href="cadastrausuario.php">CADASTRA PRODUTO</a></li>
        <li><a href="cadastrausuario.php">LISTA PRODUTO </a></li>
        <li><a href="cadastrausuario.php">CADASTRA CLIENTE </a></li>
        <li class="menuloja"><a href="./areacliente/loja.php">LOJA </a></li>


    </div>
    <div>
        <form action="cadastrausuario.php" method="post">
            <input type="text" name="nome" id="nome" placeholder="NOME USUARIO" required>
            <br>
            <input type="password" name="senha" id="senha" placeholder="SENHA" required>
            <br>
            <input type="submit" name="cadastrar" id="cadastrar" placeholder="CADASTRAR" required>
        </form>
    </div>
    
</body>
</html>