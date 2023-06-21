<?php
    ##abre uma variel sessão
    session_start();
    $nomeusuario

    #solicita o arquivo conectadb
    include("conectadb.php");

    #eventp apos o click no botao logar
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $nome = $_POST['nome'];
        $senha = $_POST['senha']; 

        #query de banco de dados 
        $sql = "SELECT COUNT(usu_id) FROM usuarios WHERE usu_nome = '$nome' AND usu_senha = '$senha'";
        $retorno = mysqli_query($link, $sql);

        ## todo retorno do banco e retornado em array em php
        while($tbl = mysqli_fetch_array($retorno))
        {
            $cont = $tbl[0];
        }

        ##verifica se usuario existe
        #se $cont ==1 ele existe e faz login
        #se $cont ==0 ele nao existe e usuario nao esta cadastrado
        if($cont == 1){
            $sql = "SELECT * FROM usuarios  WHERE usu_nome = $nome' AND usu_senha = '$senha' AND usu_ativo = 's'";
            echo"<script>window.location.href='admhome.php';</script>";
        }
        else{
            echo"<script>window.alert('USUARIO OU SENHA INCORRETO');</script>";
        }

    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/estiloadm.css">
    <title>LOGIN USUARIO</title>
</head>
<body>
    <form action ="login.php" method="post">
        <h1>LOGIN DE USUARIO</h1>
        <input type="text" name= "nome" placeholder="NOME" required>
        <p></p>
        <input type="password" name= "senha" placeholder="SENHA" required>
        <p></p>
        <input type="submit" name= "login" value="LOGIN">

    </form>


        
    
    
</body>
</html>