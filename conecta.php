<?php
//DADOS PARA CONEXÃO
$servidor = "localhost"; //SERVIDOR
$bd = "cruzvermelha"; //DATABASE
$usuario = "root"; //USUÁRIO
$senha = ""; //SENHA

//CONECTANDO
$conn = mysqli_connect($servidor, $usuario, $senha)
or die("ERRO NA CONEXÃO");

//SELECIONA O DATABASE A SER UTILIZADO
$db = mysqli_select_db($conn ,$bd )
or die("ERRO NA SELEÇÃO DO DATABASE");

?>