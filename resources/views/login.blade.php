<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Commerce</title>
	<?php include_once('componentes/b.blade.php'); ?>
	<link rel="stylesheet" href="../../public/css/login.css">
	<link rel="stylesheet" href="../../public/css/footer.css">
</head>

<body>

<div class="divHorizontal">
<label class="titulo">LOGIN</label>

<label class="tituloEcommerce" onclick="window.location='inicio.blade.php'">Katástima <?php include_once("../../svgs/cart3Menor.svg"); ?></label>
</div>

<center>

<div class="divFrmLogin">

<form method="POST" action="inicio.blade.php">

<label class="lblLogin">Email:</label>
<br>
<input class="inputLogin" type="email" required>
<br>
<label class="lblLogin">Senha:</label>
<br>
<input class="inputLogin" type="password" required>
<br>
<div class="divBtns">
<button class="btnCriarConta" onclick="window.location='criarConta.blade.php'">Criar conta</button>
<button class="btnEntrar" type="submit">Entrar</button>
</div>
</form>
</div>

</body>

<?php include_once('componentes/footer.blade.php'); ?>

</html>