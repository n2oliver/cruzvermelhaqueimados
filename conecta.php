<?php
//DADOS PARA CONEX�O
$servidor = "localhost"; //SERVIDOR
$bd = "cruzvermelha"; //DATABASE
$usuario = "root"; //USU�RIO
$senha = ""; //SENHA

//CONECTANDO
$conn = mysqli_connect($servidor, $usuario, $senha)
or die("ERRO NA CONEX�O");

//SELECIONA O DATABASE A SER UTILIZADO
$db = mysqli_select_db($conn ,$bd )
or die("ERRO NA SELE��O DO DATABASE");

?>