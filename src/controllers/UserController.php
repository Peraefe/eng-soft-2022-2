<?php

namespace src\controllers;

use src\models\UserModel;

require_once 'vendor/autoload.php';

class UserController {
	
	public function login ($name, $password) {
		
		// É retornado para a view o resultado da model.
		
		$user = new UserModel ();
		
		$user = $user -> login ($name, $password);
		
		return $user;
	}
	
	
}
