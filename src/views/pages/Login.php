<?php

require_once ("vendor/autoload.php");

use src\controllers\UserController;
$si = 0;
if ($_POST) {
	
	// os envios do formulário são pegos, e dentro do if passados para a função. Se retornar 1 o usuário existe e o login funcionou, então
	// ele deve ser redirecionado para a outra página;
	
	$name = $_POST ["name"];
	$password = $_POST ["password"];
	
	$user = new UserController ();

	if ($user -> login ($name, $password) == 1) {
		
		// echo ($_SESSION ["usuario"]);
		
		echo ("<script language = 'javascript'> window.location = '/produto'; </script>");
		
	} else {
		
		echo ("
		<body>
		<!-- The Modal -->
		<div id='myModal' class='modal'>
		
		  <!-- Modal content -->
		  <div class='modal-content'>
			<span class='close'></span>
			<p>Autenticação Inválida!</br>Senha ou Usuario incorreta.</br></br>Clique para fechar.</p>
		  </div>
		
		</div>
		
		<script>
		// Get the modal
		var modal = document.getElementById('myModal');
	
		// Get the <span> element that closes the modal
		var span = document.getElementsByClassName('close')[0];
		
		// When the user clicks anywhere outside of the modal, close it
		window.onclick = function(event) {
		  if (event.target != modal) {
			modal.style.display = 'none';
		  }
		}
		</script>
		</body>");
		
	}		
}

?>

<html>

	<head>
	
		<script>
		
			if (window.history.replaceState) {
			window.history.replaceState(null, null, window.location.href);
			}

			function alertaAdicionarCarrinho() {
			alert("item adicionado ao carrinho");
			}
			
		</script>
	
		<link rel = "stylesheet" href = "/src/views/css/Login.css">
	
	</head>
	
	<body>
	
		<div>
		
			<img src = "https://uploaddeimagens.com.br/images/004/064/618/thumb/user.png?1666047148">
			
			<form method = "POST">
		
				<input type = "text" name = "name" placeholder = "nome">
				<input type = "password" name = "password" placeholder = "senha">
				<input class = "button" type = "submit" value = "Login">
				
				<button class = "redirect" onclick = "window.location = '#'"> esqueci minha senha </button>
				<button class = "redirect" onclick = "window.location = '#'"> não sou cadastrado </button>
		
			</form>
		
		</div>
	
	
	</body>

</html>
