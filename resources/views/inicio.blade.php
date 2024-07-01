<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Commerce</title>
	<link rel="stylesheet" href="../../public/css/inicio.css">
	<link rel="stylesheet" href="../../public/css/header.css">
	<link rel="stylesheet" href="../../public/css/footer.css">
	<link rel="stylesheet" href="../../public/css/card.css">
	<?php include_once('componentes/b.blade.php'); ?>
</head>

<body>

    <?php include_once("componentes/header.blade.php"); ?>
	
	<div class="conteudo">
	
	<?php include_once('componentes/barraPesquisa.blade.php'); ?>
	
	<?php include_once('componentes/categorias.blade.php'); ?>
	
	<div class="banner">
		<div class="bannerDescricao">
			<label class="bannerProdNome">Smartphone Samsung Galaxy S24 Ultra 256GB Violeta 5G 12GB RAM Tela 6,8" Câm.</label>
			<label class="bannerProdPreco">R$ 6.999,00</label>
			<label class="bannerprodDesc">As funcionalidades oferecidas pelo Samsung Galaxy S24 Ultra são muitas e todas top de linha. Começando pelo 5G, além de conectividade Wi-fi e GPS presente no aparelho.</label>
		</div>
		<img class="bannerImg" src="../../imgProdutos/galaxy2.jpg">
	</div>
	
	<img class="bannerImg">
	
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