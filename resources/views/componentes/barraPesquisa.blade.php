<?php
	$pesquisa = "";
	if (isset($_GET['search']))
		$pesquisa = $_GET['search'];
?>
<link rel="stylesheet" href="../../public/css/barraPesquisa.css">
<div class="divBarraPesquisa">
	<button onclick="buscar()" class="btnBarraPesquisa"><?php include_once('../../svgs/search.svg'); ?></button>
	<input type="text" id="barraPesquisaId" class="barraPesquisa" placeholder="Buscar por produtos..." aria-label="Recipient's username" aria-describedby="button-addon2" value="<?php echo $pesquisa; ?>">
</div>
<script>
function buscar()
{
    var pesquisa = document.getElementById('barraPesquisaId').value;
    window.location = 'pesquisa.blade.php?search=' + pesquisa;
}
</script>