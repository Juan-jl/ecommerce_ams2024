<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produto</title>
	<?php include_once('componentes/b.php'); ?>
</head>

<style><?php include_once('../styles/header.css'); ?></style>
<style><?php include_once('../styles/footer.css'); ?></style>
<style><?php include_once('../styles/produto.css'); ?></style>

<body>
<?php include_once('componentes/header.php');?>

<?php include_once('componentes/barraPesquisa.php');?>

<div class="horizontalImgAndInfo">

<div class="divImgProd">
<img class="imgProd" src="../imgProdutos/SamsungBook.png" />
</div>
<div class="verticalInfos">
<label class="prodNome">
Notebook Samsung Galaxy Book 2
Intel Core i5 8GB - SSD 256GB 15,6”
Full HD Windows 11
</label>
<label class="prodPreco">R$ 2.639,06</label>
<label class="prodDescricao">
O Samsung Galaxy Book2 é o notebook da Samsung que pesa apenas 
1,81kg. Ele é equipado com o processador Intel Core i5 1235U de 12ª geração, 
8GB de memória RAM e 256GB de armazenamento SSD, o que garante um 
desempenho rápido e eficiente para qualquer tarefa.
</label>
</div>
</div>

<button class="btnComprar" onclick="location.href='finalizarCompra.php'">Comprar Agora</button>
<button class="btnAddCart" onclick="location.href='carrinho.php'"><?php include('../svgs/cart.svg');?>+</button>

<?php include_once('componentes/footer.php');?>
</body>
</html>