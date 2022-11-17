<?php

use src\controllers\UserController;

require_once 'vendor/autoload.php';
if($_POST){
    if (isset($_POST['cadastro'])) {
        $nome = $_POST ["nome"];
	    $cpf = $_POST ["cpf"];
		$cadastro = new UserController();
		$cadastro->cadastro_user($nome, $cpf);
	}
}
     
   
?>
<html>
    <head>
    
		<script>
		
        if (window.history.replaceState) {
        window.history.replaceState(null, null, window.location.href);
        }
        </script>

        <link rel = "stylesheet" href = "/src/views/css/Login.css">
    
    </head>
<body>

    <div class="container">
    
        <img src = "https://uploaddeimagens.com.br/images/004/064/618/thumb/user.png?1666047148">

        <form method = "POST">

            <input type = "text" name="nome" placeholder = "Nome">
            <input type = "text" name="cpf" placeholder = "CPF" required>
            <input class = "button" type = "submit" value = "Cadastro">
            <input type="hidden" name="cadastro">
            
        </form>
    </div>
</body>
</html>
