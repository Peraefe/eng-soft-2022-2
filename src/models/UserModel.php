<?php

namespace src\models;

use src\database\UsuarioData;
use PDO;

require_once 'vendor/autoload.php';

class UserModel {
	
	public function login ($name, $password) {

		
		// Aqui é recebido o resultado da query e se a busca retornou resultado, são armazenados os dados do usuário numa sessão que dura
		// até ele fazer logout. É retornado 1 se tudo ocorreu bem para facilitar o tratamento de erro.
		
		$user = new UsuarioData ();
		
		$user = $user -> login ($name, $password);
		
		if ($user -> rowCount () == 1) {
		 	
			$user = $user -> fetchAll (PDO::FETCH_CLASS);
		 	
			$_SESSION ["usuario"] = $user [0]-> nome_usuario;
			$_SESSION ["cpf"] = $user [0] -> cpf_usuario;
			$_SESSION ["id"] = $user [0] -> id_usuario;
			
			return 1;
		
		}
		
	}


    public function cadastro_usuario($nome, $cpf){
        $cadastro=new UsuarioData();
        $cadastro->cadastro($nome, $cpf);
    }

}

