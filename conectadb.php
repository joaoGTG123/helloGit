<?php
##ARQUIVO DE ACESSO AO BANCO DE DADOS ##
### ALERTA EM MODO PROFISSINAL ARQUIVO DEVE-SE MANTER OCULTO E PROTEGIDO ##

##LOCALIZA O PC OU SERVIDOR COM O BANCO (NOME DO COMPUTADOR)
$servidor = "localhost";
#nome do banco##
$banco = "projeto22";
##usuarios de acesso
$usuario = "administrador";
##senha do usuario
$senha = "123";


#LINK DE CONEXÃO
$link = mysqli_connect($servidor,$usuario,$senha,$banco);
?>