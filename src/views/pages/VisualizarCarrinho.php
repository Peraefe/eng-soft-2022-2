<?php

use src\controllers\CarrinhoController;

include '../templates/cabecalho.php';
include ("../../controllers/CarrinhoController.php");

if ($_POST) {

    if (isset($_POST['removecart'])) {

        $removeCart = new CarrinhoController();
        $removeCart->removeProduct();
    }
}

?>

<html>

	<head>

        <link rel="stylesheet" href="../css/VisualizarCarrinho.css">

		<script>

			if (window.history.replaceState) {

				window.history.replaceState(null, null, window.location.href);
			}

		</script>
	
	</head>

<body>
    <div>
        <h3>SELECIONE O ENDEREÇO</h3>
        <input type="text" required>
        <button type="submit">Ok</button>
    </div>
    <div>
        <h3>PRODUTO E FRETE</h3>
        <form method="POST">
            <button name="removecart" type="submit">REMOVER TODOS OS PRODUTOS</button>
        </form>
        <table>
            <?php
            $carrinhoController = new CarrinhoController();
            $rows = $carrinhoController->selecionaCarrinho();
            foreach ((array)$rows as $item) : ?>
                <tr>
                    <th>Nome</th>
                    <th>Quantidade</th>
                    <th>Preço</th>
                </tr>

                <tr>
                    <td> <?= $item->nome_produto ?></td>
                    <td> <?= $item->quantidade_item_carrinho ?></td>
                    <td> <?= $item->preco_produto ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
        <h4>FRETE:</h4>
    </div>
    <div>
        <h3>RESUMO</h3>
		<p>Valor dos Produtos: 
		
			<?php
			
				// Criamos o objeto value e chamamos a classe do carrinho controllee, que vai chamar a função de mostrar o preco.
				// O valor retornado está numa array, onde na posição 0 está o nosso objeto, e dentro dele temos a propriedade sum
				// que foi obtida na query com nosso banco de dados. Nessa propriedade está o valor total do carrinho.
			
				$value = new CarrinhoController ();
				$value = $value -> showPrice ();
        
				echo ($value[0]-> sum);
			
			?> 
		</p>
        <p>Frete:</p>
        <h4>Total:</h4>
        <button type="button">IR PARA O PAGAMENTO</button>
        <a href="/produto"><button type="button">CONTINUAR COMPRANDO</button></a>
    </div>

</body>

</html>
