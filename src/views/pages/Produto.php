<?php

// O script na head do html impede a página de tentar reevio de post ao ser recarregada.
// Usaremos a classe do CarrinhoController para quando o botão for clicado disparar as funções que irão adicionar o item ao carrinho
// ou incrementar ele.
use src\controllers\CarrinhoController;
use src\controllers\ProdutoController;

require_once 'vendor/autoload.php';
// Se ocorrer um post é verificado se esse post é do botão de adicionar ao carrinho, e se for o objeto addcart é criado, e executa a
// função update value da classe CarrinhoController.
if ($_POST) {

	if (isset($_POST["addcart"]) && isset ($_SESSION ["id"])) {

		$addcart = new CarrinhoController();
		$addcart->updateValue();
		
		echo ("<script language = 'javascript'> alert ('item adicionado ao carrinho'); </script>");
	}
	
	if (isset($_POST["addcart"]) && isset ($_SESSION ["id"]) == 0) {

		echo ("<script language = 'javascript'> window.location = '/usuario'; </script>");
	}
}
?>

<html>

<head>
	<link rel="stylesheet" href="/src/views/css/Produto.css">
	
	<script>
	
		if (window.history.replaceState) {
			window.history.replaceState(null, null, window.location.href);
		}
		
	</script>
	
</head>

<body class="global">

	<div class="container">
		<div class="main">
			<?php
			$model = new ProdutoController();
			$rows = $model->unique();
			?>
			<h1> <?= $rows[0]->nome_produto ?> <?= $rows[0]->descricao_produto ?></h1>
			<div class="photo">
				<img src="/src/views/assets/<?= $rows[0]->id_produto ?>.png" width="210px">
			</div>
			<div class="end">
				<p class="price"> R$<?= $rows[0]->preco_produto ?></p>
				<form method="POST">
					<input class="button" type="submit" name="addcart" value="Comprar">
				</form>
			</div>
		</div>
	</div>
</body>

</html>
