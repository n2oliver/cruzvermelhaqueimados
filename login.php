<?php
//CONECTA COM O BANCO DE DADOS
require_once("conecta.php");

//RECEBE OS DADOS DO FORMUL�RIO
$usuario = $_POST['email'];
$senha = $_POST['senha'];
echo $senha;
//VERIFICA
$sql = mysqli_query($conn, "SELECT A.ID, A.NOME FROM tb_admin_usuario A WHERE A.email = '$usuario' AND A.SENHA = '$senha'") or die("ERRO NO COMANDO SQL");

//LINHAS AFETADAS PELA CONSULTA
$row = mysqli_num_rows($sql);

//VERIFICA SE RETORNOU ALGO
if($row == 0) echo "Usu�rio/Senha inv�lidos";

else {
//PEGA OS DADOS
$id = $row['id'];
$nome = $row['nome'];

//INICIALIZA A SESS�O
session_start();

//GRAVA AS VARI�VEIS NA SESS�O
$_SESSION[id] = $id;
$_SESSION[nome] = $nome;

//REDIRECIONA PARA A P�GINA QUE VAI EXIBIR OS PRODUTOS
Header("Location: restrita.php");
} //FECHA ELSE
?>
