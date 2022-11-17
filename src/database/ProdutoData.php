<?php

namespace src\database;

use src\config\Connection;
use PDO;

require_once 'vendor/autoload.php';


/* Classe que realiza comunicação com o banco de dados devio ao uso da classe Connection e o PDO. Ás funções contidas nessa classe muito com certeza serão usadas pelo Modelo referente, no caso ProdutoModel*/
class ProdutoData
{
  //Função que recupera atributos especificos da entidade Produto do banco de dados.
  public function select()
  {
    $sql = 'SELECT nome_produto, preco_produto, descricao_produto, id_produto FROM "produto"';
    $con = Connection::getConn();
    $stmt = $con->prepare($sql);
    $stmt->execute();

    return $stmt->fetchAll(PDO::FETCH_CLASS);
  }

  public function selectById(int $id_produto)
  {
    $sql = "SELECT * FROM produto WHERE id_produto = $id_produto";

    $con = Connection::getConn();
    $stmt = $con->prepare($sql);
    $stmt->execute();

    return $stmt->fetchAll(PDO::FETCH_CLASS);
  }

  public function selectByAny($data)
  {
    $sql = "SELECT * FROM produto WHERE LOWER(nome_produto) LIKE LOWER('%$data%')";

    $con = Connection::getConn();
    $stmt = $con->prepare($sql);
    $stmt->execute();

    return $stmt->fetchAll(PDO::FETCH_CLASS);
  }
}
