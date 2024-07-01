<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Commerce</title>
	<?php include_once('componentes/b.blade.php'); ?>
	<link rel="stylesheet" href="../../public/css/criarConta.css">
	<link rel="stylesheet" href="../../public/css/footer.css">
</head>

<body>

<div class="divHorizontal">
<label class="titulo">CRIAR CONTA</label>

<label class="tituloEcommerce" onclick="window.location='inicio.blade.php'">Katástima <?php include_once("../../svgs/cart3Menor.svg"); ?></label>
</div>

<center>

<div class="divFrmCriarConta">

<form method="POST" action="inicio.blade.php">
<div class="divHorizontalFrm">
	<div class="vertical1">
		<label class="lblLogin">Email:</label>
		<br>
		<input class="inputLogin" type="email" placeholder="Ex.: joao@email.com" required>
		<br>
		<label class="lblLogin">Senha:</label>
		<br>
		<input class="inputLogin" type="password" required>
		<br>
		<label class="lblLogin">Repita a senha:</label>
		<br>
		<input class="inputLogin" type="password" required>
	</div>
	<div class="vertical2">
		<label class="lblLogin">Primeiro nome:</label>
		<br>
		<input class="inputLogin" type="text" placeholder="Ex.: João" required>
		<br>
		<label class="lblLogin">Último nome:</label>
		<br>
		<input class="inputLogin" type="text" placeholder="Ex.: Silva" required>
		<br>
		<label class="lblLogin">Data de nascimento:</label>
		<br>
		<input class="inputLogin" type="date" required>
	</div>
</div>
<div class="divBtns">
		<button class="btnCriarConta" onclick="window.location='login.blade.php'">Já tem uma conta?</button>
		<button class="btnEntrar" type="submit">Criar conta</button>
	</div>


</form>
</div>

</body>

<?php include_once('componentes/footer.blade.php'); ?>

</html>