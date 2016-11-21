<?php include("header.php"); ?>

<?php if(isset($_GET['path'])){
    $path = "img/galeria/" . $_GET['path'];
  }
?>

<h1>
<?php
    if(isset($_GET['nome'])){
    echo $_GET['nome'];
    $captionDefault = $_GET['nome']; }
?>
</h1>
<div class="row">
<p class="texto-vermelho">
<span class="fa fa-arrow-left"></span>&nbsp;&nbsp;&nbsp;<a href="galeria.php">Voltar para a galeria</a>
</p>
<div class="fotorama col-md-12" data-transition="slide" data-nav="thumbs" data-allowfullscreen="true" data-width="100%"
     data-height="600" data-autoplay="3000">
     <?php
        $diretorio = scandir($path);
        foreach($diretorio as $arquivo){
      ?>
  <img src="<?= $path . '/' . $arquivo ?>" data-caption="<?= $captionDefault ?>" >
     <?php
        }
      ?>
</div>
</div>
</div>
<?php include("footer.php"); ?>