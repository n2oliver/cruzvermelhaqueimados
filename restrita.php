<?PHP
session_start();

//Caso o usu�rio n�o esteja autenticado, limpa os dados e redireciona
if ( !isset($_SESSION['login']) and !isset($_SESSION['senha']) ) {
    //Destr�i
    session_destroy();

    //Limpa
    unset ($_SESSION['login']);
    unset ($_SESSION['senha']);

    //Redireciona para a p�gina de autentica��o
    header('location:login.php');
}
?>