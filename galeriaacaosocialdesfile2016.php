<?php include("header.php"); ?>

<?php if(isset($_GET['path'])){ $path = "img/galeria/" . $_GET['path']; } ?>

<h1><?php 
if(isset($_GET['nome'])){ 
  echo $_GET['nome']; 
  $captionDefault = $_GET['nome']; } 
  ?></h1>
<div class="row">
<p class="texto-vermelho">
<span class="fa fa-arrow-left"></span>&nbsp;&nbsp;&nbsp;<a href="galeria.php">Voltar para a galeria</a>
</p>
<div class="fotorama col-md-12" data-transition="slide" data-nav="thumbs" data-allowfullscreen="true" data-width="100%"
     data-height="600" data-autoplay="3000">
  <img src="<?= $path ?>/1.jpg" data-caption="<?= $captionDefault ?>" >
  <img src="<?= $path ?>/2.jpg" data-caption="<?= $captionDefault ?>">
  <img src="<?= $path ?>/3.jpg" data-caption="<?= $captionDefault ?>">
  <img src="<?= $path ?>/4.jpg" data-caption="<?= $captionDefault ?>">
  <img src="<?= $path ?>/5.jpg" data-caption="<?= $captionDefault ?>">
  <img src="<?= $path ?>/6.jpg" data-caption="<?= $captionDefault ?>">
  <img src="<?= $path ?>/7.jpg" data-caption="<?= $captionDefault ?>">
  <img src="<?= $path ?>/8.jpg" data-caption="<?= $captionDefault ?>">
  <img src="<?= $path ?>/9.jpg" data-caption="<?= $captionDefault ?>">
  <img src="<?= $path ?>/10.jpg" data-caption="<?= $captionDefault ?>">
  <img src="<?= $path ?>/11.jpg" data-caption="<?= $captionDefault ?>">
</div>
</div>
</div>
<?php include("footer.php"); ?>