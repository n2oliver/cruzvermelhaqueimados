<?php include("header.php");?>

<h1><span class="fa fa-picture-o"></span>&nbsp;Galeria</h1>
<h3 class="texto-cinza">Selecione o álbum que deseja visualizar:</h3>
<?php 
$endereco = "galeriaacaosocialdesfile2016.php";
$path = "acaosocialdesfile2016"; 
$nome = "Apoio%20à%20ação%20social%20e%20desfile%20cívico%202016" 
?>
<div class="row">
&nbsp;
<div class="box" style="background-image:url('img/galeria/<?= $path ?>/1.jpg');" onclick="window.location = '<?= $endereco ?>?path=<?= $path ?>&nome=<?= $nome ?>'">
<div class="box-bg">
<a href="<?= $endereco ?>?path=<?= $path ?>&nome=<?= $nome ?>">Apoio à ação social e desfile cívico 2016</a>
</div>
</div>
</div>
</div>

<?php include("footer.php");?>
