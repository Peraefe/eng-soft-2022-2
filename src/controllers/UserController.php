<?php

namespace src\controllers;

use src\models\UserModel;
use PDO;

require_once 'vendor/autoload.php';


class UserController {
	
	public function login ($name, $password) {
		
		// É retornado para a view o resultado da model.
		
		$user = new UserModel ();
		
		$user = $user -> login ($name, $password);
		
		return $user;
	}
    
    public function cadastro_user($nome_usuario, $cpf_usuario){
               
        $cadastro=new UserModel();
        $cadastro->cadastro_usuario($nome_usuario, $cpf_usuario);
          
        
    }
    
	
}

