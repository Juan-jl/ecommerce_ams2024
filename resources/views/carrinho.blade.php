<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrinho</title>
	<link rel="stylesheet" href="../../public/css/carrinho.css">
	<link rel="stylesheet" href="../../public/css/header.css">
	<link rel="stylesheet" href="../../public/css/footer.css">
	<?php include_once('componentes/b.blade.php'); ?>
</head>

<body>

<?php include_once("componentes/header.blade.php"); ?>

<label class="tituloPagina">CARRINHO</label>

<div class="prodsCarrinho">

<?php for ($i=0;$i<5;$i++){ ?>

<div class="prodCarrinho">

<div class="divImgProd" onclick="window.location='produto.blade.php'">
<img class="imgProd" src="../../imgProdutos/tv2.jpg" />
</div>

<div class="infosCarrinho" onclick="window.location='produto.blade.php'">

<label class="prodNome">Samsung Smart TV 55" QLED 4K Q65D 2024</label>
<label class="prodPreco">R$ 2.944,05</label>

</div>
<div class="opcoesCarrinho">

<input type="number" id="qtdeId<?php echo $i; ?>" value="<?php echo $i; ?>" class="quantidade" readonly>
<button class="btnRemoveItem" onclick="removeCarinho(<?php echo $i; ?>)">-</button>
<button class="btnAddItem" onclick="addCarinho(<?php echo $i; ?>)">+</button>

</div>

</div>

<?php } ?>

</div>

<button class="btnFinalizarComp" onclick="window.location='finalizarCompra.blade.php'">Finalizar compra</button>

<label class="lblTotal">Total: R$ 2.944,05</label>

<?php include_once('componentes/footer.blade.php'); ?>

</body>

</html>

<script>
//Olá professor, essa é apenas uma função ilustrativa para adicionar ítens
function addCarinho(elemento)
{
	var qtde = document.getElementById("qtdeId" + elemento).value;
	if (qtde < 50)
		document.getElementById("qtdeId" + elemento).value++;	
}
function removeCarinho(elemento)
{
	var qtde = document.getElementById("qtdeId" + elemento).value;
	if (qtde >0)
		document.getElementById("qtdeId" + elemento).value--;
}
</script>