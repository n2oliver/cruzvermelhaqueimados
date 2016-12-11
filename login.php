<?php
//CONECTA COM O BANCO DE DADOS
require_once("conecta.php");

//RECEBE OS DADOS DO FORMULÁRIO
$usuario = $_POST['email'];
$senha = $_POST['senha'];
echo $senha;
//VERIFICA
$sql = mysqli_query($conn, "SELECT A.ID, A.NOME FROM tb_admin_usuario A WHERE A.email = '$usuario' AND A.SENHA = '$senha'") or die("ERRO NO COMANDO SQL");

//LINHAS AFETADAS PELA CONSULTA
$row = mysqli_num_rows($sql);

//VERIFICA SE RETORNOU ALGO
if($row == 0) echo "Usuário/Senha inválidos";

else {
//PEGA OS DADOS
$id = $row['id'];
$nome = $row['nome'];

//INICIALIZA A SESSÃO
session_start();

//GRAVA AS VARIÁVEIS NA SESSÃO
$_SESSION[id] = $id;
$_SESSION[nome] = $nome;

//REDIRECIONA PARA A PÁGINA QUE VAI EXIBIR OS PRODUTOS
Header("Location: restrita.php");
} //FECHA ELSE
?>
