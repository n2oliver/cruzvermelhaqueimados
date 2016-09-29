<?php include("header.php");?>
<?php
$connect = mysqli_connect('localhost','u713920940_cruzv','Gk&#9679;','u713920940_cruzv');
if($connect){
$query = mysqli_query($connect, "select * from cursos order by id desc");
}
else {

}
?>

<div>
<img class="imagem" src="img/produtos.jpg">
</div>
<h3>Confira aqui os nossos cursos oferecidos:</h3>
<hr>
<div class="col-md-12">

<table class="table table-striped">
<?php
while($row = $query->fetch_assoc()){
	?>
<thead>
<tr>
<th colspan="2"><?= $row["nome"] ?></th>
</tr>
</thead>
<tbody>
<tr>
<td>Matriculas:</td><td><?= $row["matriculas"] ?></td>
</tr>
<tr>
<td>Início do curso:</td><td><?= $row["inicio"] ?></td>
</tr>
<tr>
<td>Horário:</td><td><?= $row["horario"] ?> </td>
</tr>
<tr>
<td>Duração:</td><td><?= $row["duracao"] ?> </td>
</tr>
<tr>
<td>Valor da Matricula:</td><td><?= $row["valor_matricula"] ?></td>
</tr>
<tr>
<td>Valor do Curso:</td><td><?= $row["valor_curso"] ?></td>
</tr>
<tr>
<td>Telefone para contato:</td><td><?= $row["telefone"] ?> </td>
</tr>
<tr>
<td>&nbsp;</td><td>&nbsp;</td>

</tr>
</tbody>
<?php }
?>
</table>
</div>
</div>

<?php include("footer.php");?>