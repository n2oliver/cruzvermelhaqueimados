<?PHP
session_start();

//Caso o usuбrio nгo esteja autenticado, limpa os dados e redireciona
if ( !isset($_SESSION['login']) and !isset($_SESSION['senha']) ) {
    //Destrуi
    session_destroy();

    //Limpa
    unset ($_SESSION['login']);
    unset ($_SESSION['senha']);

    //Redireciona para a pбgina de autenticaзгo
    header('location:login.php');
}
?>