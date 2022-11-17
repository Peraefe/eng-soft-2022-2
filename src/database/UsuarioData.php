<?php
// A view faz um pedido para o controller, o controller faz um pedido para a model, a model faz o pedido para 
//a data e a data executa a query.

// É dado um nome para o documento CarrinhoData.php . Esse nome é o que nós iremos nos referir no use src\ .

namespace src\database;

// Usaremos a classe de conexão com o banco de dados que está no heroku e também o pdo, a orientação a objetos do php.

use src\config\Connection;
use PDO;

require_once 'vendor/autoload.php';

class UsuarioData{

    public function login ($name, $password) {
		
		// Seleciona o usuário no banco de acordo com o que ele digitou no login, e devolve o resultado para a model.
		
		$con = Connection::getConn ();
		
		$query = "SELECT * FROM USUARIO WHERE nome_usuario = '$name' AND cpf_usuario = '$password'";
		
		$con = $con -> query ($query);
			
		return $con;
		
	}

    public function cadastro($nome_usuario, $cpf_usuario){
        $con=Connection::getConn();
        $sql = "INSERT INTO usuario(nome_usuario,cpf_usuario) 
            VALUES ('$nome_usuario','$cpf_usuario')";
        $result = $con->query($sql);
    }

}

?>