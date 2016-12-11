<?php include("header.php"); ?>
<h3>Se você é um administrador,</h3>
<p style="align:center; color:red; font-weight:bold">então, faça o seu login:</p>

<form action="login.php" method="post">
<hr>
<input type="hidden">
<label for="email">Email:</label>
<input name="email" class="form-control">
<br>
<label for="senha">Senha:</label>
<input name="senha" class="form-control">
<hr>
<input type="submit" value="Logar" id="button" class="btn btn-primary">
</form>
</div>
</div>
</body>
</html>
