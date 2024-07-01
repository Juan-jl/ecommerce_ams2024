<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Commerce</title>
	<link rel="stylesheet" href="../../public/css/header.css">
	<link rel="stylesheet" href="../../public/css/footer.css">
	<link rel="stylesheet" href="../../public/css/card.css">
	<link rel="stylesheet" href="../../public/css/pesquisa.css">
	<?php include_once('componentes/b.blade.php'); ?>
</head>

<body>
    <?php include_once("componentes/header.blade.php"); ?>
	
	<div class="conteudo">
	
	<?php include('componentes/categorias.blade.php'); ?>
	
	<?php include_once('componentes/barraPesquisa.blade.php'); ?>
	
	<div class="cards">
	
		<div class="row">
		<?php for ($i = 0; $i < 20; $i++) { ?>
		
		<div class="col-6 col-sm-4 col-md-3 col-lg-2">
		<a href="produto.blade.php">
		<?php include('componentes/card.blade.php'); ?>
		</a>
		</div>
		
		<?php } ?>
		</div>
	</div>
	
</div><!--Conteúdo-->
	
	<?php include_once('componentes/footer.blade.php'); ?>
</body>
</html>