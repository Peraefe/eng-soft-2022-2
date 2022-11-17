<?php

namespace src\config;

require_once 'vendor/autoload.php';

/*Classe de Conexão com o banco de dados postgres com as credencias de acesso ao Banco de dados.
Está classe retorna uma instancia e é sempre ela que sera utilizada quando se tratar de requisições
no caso PDO */

use PDO;

class Connection
{
  private static $instance;

  public static function getConn()
  {
    $HOST = "ec2-44-209-158-64.compute-1.amazonaws.com";
    $DB_NAME = "d7kvo2juoned8f";
    $DB_USER = "eaqpfzgibryhme";
    $DB_PASSWORD = "8078af2021d8c024b6c9b97f7f105e486a72b6539b4583aaacda65b9b316f941";
    $CONN = "pgsql:host=$HOST;port=5432;dbname=$DB_NAME";
    if (!isset(self::$instance)) :
      self::$instance = new PDO($CONN, $DB_USER, $DB_PASSWORD);
    endif;

    return self::$instance;
  }
}

$connection = Connection::getConn();
