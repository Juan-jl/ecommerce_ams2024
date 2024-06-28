<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Finalizar compra</title>
	<?php include_once('componentes/b.php'); ?>
</head>

<style><?php include_once('../styles/header.css'); ?></style>
<style><?php include_once('../styles/footer.css'); ?></style>
<style><?php include_once('../styles/finalizarCompra.css'); ?></style>

<body>

<?php include_once('componentes/header.php'); ?>

<label class="tituloPagina">FINALIZAR COMPRA</label>
<center>
<div class="divMetodoPagamento">

<form method="post">

<label class="lblTituloPagamento">Escolha o método de pagamento</label>

<div class="divRadiosPagamento">
<input type="radio" id="radio1" name="radioMetodoPag" class="radioPagamento" onclick="pagarCredito()" required><label for="radio1" class="radioPagamentoLbl">Cartão de crédito</label>
<input type="radio" id="radio2" name="radioMetodoPag" class="radioPagamento" onclick="pagarBoleto()"><label for="radio2" class="radioPagamentoLbl">Boleto</label>
<input type="radio" id="radio3" name="radioMetodoPag" class="radioPagamento" onclick="pagarPix()"><label for="radio3" class="radioPagamentoLblPix">Pix</label>

<div class="divInserirCartao" id="divInserirCartaoId">

<input type="number" class="numerCartao" placeholder="Número do cartão" required>
<input type="number" class="cvvCartao" placeholder="Código CVV" required>

</div>
<div class="divBoleto" id="divBoletoId">

Você pagará com boleto bancário

</div>
<div class="divPix" id="divPixId">

Você pagará com pix

</div>

</div>

<div class="infosComprador">
<label class="lblTituloPagamento">Endereço de entrega e informações do comprador</label>

<div class="infosCompradorHorizontal">
<input type="text" class="nomeComprador" placeholder="Nome completo do comprador" required>
<input type="text" class="enderecoComprador" placeholder="Endereço" required>
<input type="text" class="telefoneComprador" placeholder="Telefone" required>
<input type="number" class="cepComprador" placeholder="CEP" required>
</div>

<div class="infosCompradorHorizontal">
<input type="text" class="numeroComprador" placeholder="Número" required>
<input type="text" class="complementoComprador" placeholder="Complemento (opicional)">
<input type="text" class="BairroComprador" placeholder="Bairro" required>
<input type="number" class="cpfComprador" placeholder="CPF" required>
</div>

</div>

<div class="finalizacaoHorizontal">

<div class="resumoPedido">

<label class="lblTituloPagamento">Resumo do pedido</label>
<?php for ($i=0;$i<3;$i++){ ?>
<div class="pedidos">Ventilador de Mesa 40cm Mondial Super Turbo VTX-40-8P 8 Pás 3 Velocidades Preto (<?php echo $i+2; ?>)</div>
<?php } ?>

<div class="total">Total: R$ 3.643,94</div>

</div>
<button type="submit" class="btnFinalizarCompra">Finalizar compra</button>
</div>

‎ㅤ</orm>

</body>

</html>

<script>
const divInserirCartao = document.getElementById('divInserirCartaoId');
const divBoleto = document.getElementById('divBoletoId');
const divPix = document.getElementById('divPixId');

function pagarCredito()
{
	divInserirCartao.style.display = 'block';
	divInserirCartao.classList.remove('cimaBaixo');
	void divInserirCartao.offsetWidth;
	divInserirCartao.classList.add('cimaBaixo');
	divInserirCartao.style.animation = 'cimaBaixo 1.25s';
	
	divBoleto.style.display = 'none';
	divPix.style.display = 'none';
}
function pagarBoleto()
{
	divBoleto.style.display = 'block';
	divBoleto.classList.remove('cimaBaixo');
	void divBoleto.offsetWidth;
	divBoleto.classList.add('cimaBaixo');
	divBoleto.style.animation = 'cimaBaixo 1.25s';
	
	divInserirCartao.style.display = 'none';
	divPix.style.display = 'none';
}
function pagarPix()
{
	divPix.style.display = 'block';
	divPix.classList.remove('cimaBaixo');
	void divPix.offsetWidth;
	divPix.classList.add('cimaBaixo');
	divPix.style.animation = 'cimaBaixo 1.25s';
	
	divInserirCartao.style.display = 'none';
	divBoleto.style.display = 'none';
}

</script>